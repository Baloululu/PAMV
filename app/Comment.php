<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'validate'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function scopePublished($query)
    {
        return $query->where('validate', true)->orderBy('created_at', 'DESC');
    }
}
