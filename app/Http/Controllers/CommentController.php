<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
// 댓글 컨트롤러
class CommentController extends Controller
{
    // 댓글을 추가한다.
    public function store(Request $request){

//        dd($request);

        Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $request->post_id,
            'body' => $request->body,
            'parent_id' => $request->parent_id
        ]);

//        return back();
        return redirect('/blogs/' . $request->post_id);
    }

}
