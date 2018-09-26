<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'category_id', 'image'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}