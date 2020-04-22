<!DOCTYPE html>
<!--
    Transit by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SimpleBlog</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/skel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style-xlarge.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="landing">

         <!-- Header -->
        <header id="header">
            <h1><a href="/" style="{{ Request::path() === 'blogs' || Request::path() === 'blogs/:id'  ? 'color: black' : '' }}" >SimpleBlog</a></h1>
            <nav id="nav">
                <ul>
                    @auth
                        @if( Request::path() !== 'blogs/create')
                            <input type="button" value="글쓰기" onClick="location.href='/blogs/create'">
                        @elseif(Request::path() !== 'blogs')
                            <input type="button" value="다른글 보기" onClick="location.href='/blogs'">
                        @endif
{{--                            <input type="button" value="다른글 보기" style="{{ Request::path() === 'blogs' ? '' : 'visibilty: hidden' }}" onClick="location.href='/blogs'">--}}
{{--                            <input type="button" value="글쓰기" style="{{ Request::path() === 'blogs/create' ? '' : 'visibilty: hidden' }}" onClick="location.href='/blogs/create'">--}}
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <input value="로그아웃" type="submit">
{{--                                <a href="{{ route('logout') }}" style="{{ Request::path() === '/' ? '' : 'color: black' }}">로그아웃</a>--}}
                            </form>
                        </li>
                    @else
                        @if(Request::path() === 'login')
                            <li><a href="/register">회원가입</a></li>
                        @elseif(Request::path() === 'register')
                            <li><a href="/login">로그인</a></li>
                        @endif
                    @endif

                </ul>
            </nav>
        </header>

        @yield('blog_content')

    </body>
</html>
