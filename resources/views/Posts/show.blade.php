@extends('layouts.blog_app')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('blog_content')

    <!-- Two -->
        <section id="two" class="wrapper style2 special">
            <div class="container">
                    <header class="major">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->body }}</p>
                        <div>
                            @if($post->user != null)
                                <p>{{ $post->user->name }}</p>
                            @endif
                            <p> {{ $post->created_at->diffForHumans() }}</p>
                        </div>

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
{{--                <div class="row justify-content-center">--}}
                <div class="row justify-content-center">
                    <div class="col-md-8 align-left">
                        <div class="card">
                            <div class="card-body">
                                <h5>댓글을 남겨주세요</h5>
                                <form method="post" action="{{ route('comment.add') }}">
                                    {{--                        <form method="post" action="#">--}}
                                    @csrf
                                    <div class="d-flex bd-highlight">
                                        <div class="form-group p-2 w-100 bd-highlight">
                                            <input type="text" name="body" class="form-control" />
                                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                            <input type="hidden" name="parent_id" value="0" />
                                        </div>
                                        <div class="form-group p-2 flex-shrink-1 bd-highlight">
                                            <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="댓글 남기기" />
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="card-body">
{{--                                <h5>댓글 목록</h5>--}}
                                {{-- 부트스트랩 토글 부분 --}}
                                {{-- 댓글 레이아웃을 가져온다. --}}
                                @include('Posts.partials.replies', ['comments' => $post->comments->where('parent_id', 0), 'post_id' => $post->id])
{{--                                <hr />--}}

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

@endsection
