<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // 사용자는 포스팅을 많이 달수 있다.
    public function posts(){
        return $this->hasMany(Post::class);
    }

    // 사용자는 댓글을 많이 달수 있다.
    public function comments(){
        return $this->hasMany(Comment::class);
    }

//    // 사용자는 좋아요를 한다.
//    public function likes()
//    {
////        return $this->belongsToMany(Like::class, 'likes', 'user_id', 'post_id');
//        return $this->belongsToMany('App\Like')->withPivot('user_id', 'post_id');
//
//    }
}
