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
            <h1><a href="/">SimpleBlog</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="/" style="{{ Request::path() === '/' ? '' : 'color: black' }}">Home</a></li>
                    <li><a href="/blogs" style="{{ Request::path() === '/' ? '' : 'color: black' }}">Blogs</a></li>
                    <li><a href="/blogs/create" style="{{ Request::path() === '/' ? '' : 'color: black' }}">Create</a></li>
                </ul>
            </nav>
        </header>

        @yield('blog_content')

    </body>
</html>
