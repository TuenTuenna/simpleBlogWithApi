@extends('layouts.blog_app')

@section('blog_content')
    
    <!-- Two -->
        <section id="two" class="wrapper style2 special">
            <div class="container">
                    <header class="major">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->body }}</p>
                        <ul class="actions">
                            <li>
                                <form>
                                    <input type="button" class="special middle" value="수정하기" onClick="location.href='/blogs/{{ $post->id }}/edit'">
                                </form>
                                
                            </li>
                            <li>
                                <form action="/blogs/{{ $post->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="special middle" value="삭제하기">
                                </form>
                            </li>
                        </ul>
                    </header>
            </div>
        </section>
    
@endsection
