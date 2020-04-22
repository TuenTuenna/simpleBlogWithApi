@extends('layouts.blog_app')

@section('blog_content')

    <!-- Three -->
        <section id="three" class="wrapper style3 special">
            <div class="container">
                <header class="major">
                    <h2>포스팅 수정하기</h2>
                </header>
            </div>
            <div class="container 50%">

                <form action="/blogs/{{ $post->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row uniform">
                        <div class="12u 12u$(small)">
                            <input name="title" id="title" value="{{ $post->title }}" required placeholder="타이틀" type="text">
                        </div>

                        <div class="12u$">
                            <textarea name="body" id="body" placeholder="내용" rows="6" required>{{ $post->body }}</textarea>
                        </div>
                        <div class="12u$">
                            <ul class="actions">
                                <li><input value="수정완료" class="special big" type="submit"></li>
                            </ul>
                        </div>
                    </div>
                </form>

            </div>
        </section>


@endsection
