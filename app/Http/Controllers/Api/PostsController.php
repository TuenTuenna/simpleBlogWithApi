<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
// use Illuminate\Http\Request;
use Request;
use Symfony\Component\HttpFoundation\Response;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $posts = Post::latest()->get();
        $posts = Post::latest()->paginate(5);
        // dd($posts);
        //
        return $posts;
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
        // return view('Posts.create');
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
        $post->save();

        // return redirect('/blogs');
        // 만든것과 응답 결과 보내주기 
        return response($post, Response::HTTP_CREATED);
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
        // return view('Posts.show', [
        //     'post' => $post
        // ]);   
        return $post;
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
        // return view('Posts.edit', [
        //     'post' => $post
        // ]);   
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

        return response($post, Response::HTTP_ACCEPTED);
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
        // return redirect('/blogs');
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
