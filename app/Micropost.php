<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];
    
    /**
     * この投稿を所有するユーザー（userモデルとの関係を定義）
      */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * このユーザがお気に入りのユーザ。（ Userモデルmicropostとの関係を定義）
     */
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'user_favorites', 'micropost_id', 'user_id')->withTimestamps();
    }
    
}
