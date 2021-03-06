<?php

namespace App\Http\Controllers;

use App\Like;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

    use SoftDeletes;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $posts = Post::latest()->get();
        $posts = Post::latest()->paginate(3);
        // dd($posts);



        return view('Posts.blog_list', [
            'postList' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // dd("create 메소드로 왔다.");
        return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $post = new Post();
        $post->title = request('title');
        $post->body = request('body');
        $post->user_id = auth()->id();
        $post->save();

        return redirect('/blogs');

        //
        // dd("store 메소드 입니다.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);
        // dd($post);

        $fetchedPost = Post::findOrFail($post->id);

        $fetchedPost->read_count++;

        $fetchedPost->save();

        return view('Posts.show', [
            'post' => $fetchedPost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('Posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {

        //
        $post->title = request('title');
        $post->body = request('body');
        $post->save();

        return redirect('/blogs/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect('/blogs');
    }

    // 좋아요 여부 확인
    public function isLikedByMe($id)
    {
        $post = Post::findOrFail($id)->first();



        if (Like::whereUserId(Auth::id())->wherePostId($post->id)->exists()){
            return 'true';
        }
        return 'false';
    }

    // 좋아요 처리
    public function like(Post $post)
    {

//        dd($post);
//        $existing_like =  $post->likes()->where('user_id', auth()->id())->first();

//        dd($existing_like);

        $existing_like = Like::withTrashed()->wherePostId($post->id)->whereUserId(Auth::id())->first();

        if (is_null($existing_like)) {
            Like::create([
                'post_id' => $post->id,
                'user_id' => Auth::id()
            ]);
        } else {
            if (is_null($existing_like->deleted_at)) {
                $existing_like->delete();
            } else {
                $existing_like->restore();
            }
        }

        // 새로고침
        return redirect('/blogs/' . $post->id);

    }

}
