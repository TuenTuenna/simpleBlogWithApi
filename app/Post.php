<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = [];

    // 디비 관계 설정
    // 사용자는 포스팅을 단다.
    // 즉 포스팅은 사용자에 속한다.
    public function user(){
        return $this->belongsTo(User::class);
    }

    // 포스팅에는 댓글이 많이 달린다.
    public function comments(){
        // latest() 로 최신의 데이터를 가져온다.
        return $this->hasMany(Comment::class)->latest();
    }

}
