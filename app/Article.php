<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use Sluggable;

    protected $table = "articles";
    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    /**
     *Uso de funcion sluggable (https://github.com/cviebrock/eloquent-sluggable)
     */

    public function sluggable()
    {
        return [
            'slugg' => ['source' => 'title']
        ];
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function scopeSearch($query, $title)
    {
        return $query->where('title', 'LIKE', "%$title%");
    }
}
