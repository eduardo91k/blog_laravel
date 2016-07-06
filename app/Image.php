<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";
    protected $fillable = ['name', 'article_id'];

    public function article()
    {
        $this->belongsTo('App\Article');
    }
}
