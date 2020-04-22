<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostAuthController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
//        if (auth() != null){
//            return redirect('/blogs');
//        } else {
            return view('Posts.post_welcome');
//        }
    }

    public function login()
    {
        return view('Posts.post_login');
    }
}
