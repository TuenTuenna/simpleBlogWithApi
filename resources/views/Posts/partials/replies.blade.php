@foreach($comments as $comment)
    <hr/>
    <div class="display-comment">
        {{--        {{ dd($comment->id) }}--}}
        <strong>{{ $comment->user->name }} </strong>
            <div>
                {{ $comment->body }}
            </div>
            <p>
                {{ $comment->created_at->diffForHumans() }}
            </p>
        <a href="" id="reply"></a>
{{--        <form method="post" action="{{ route('reply.add') }}">--}}
        <form method="post" action="{{ route('comment.add') }}">
            @csrf
            <div class="d-flex bd-highlight">
                <div class="form-group p-2 w-100 bd-highlight">
                    {{--                 name 을 통해서 데이터가 키 : 값 으로 넘어간다. --}}
                    <input type="text" name="body" class="form-control" />
                    <input type="hidden" name="post_id" value="{{ $post_id }}" />
                    <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                </div>
                <div class="form-group p-2 flex-shrink-1 bd-highlight">
                    <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="댓글 남기기" />
                </div>
            </div>
        </form>
{{--            {{ dd($comment->replies) }}--}}
        @include('Posts.partials.replies', ['comments' => $comment->replies])

    </div>
@endforeach
