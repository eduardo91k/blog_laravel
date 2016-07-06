<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    public function category()
    {
        $this->belongsTo('App\Category');
    }

    public function user()
    {
        $this->belongsTo('App\User');
    }

    public function images()
    {
        $this->hasMany('App\Image');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
