@extends('layouts.blog_app')

@section('blog_content')

    <!-- Three -->
    <section id="three" class="wrapper style3 special">
        <div class="container">
            <header class="major">
                <h2>로그인 하기</h2>
            </header>
        </div>
        <div class="container 50%">

            <form action="/login" method="post">
                @csrf
                <div class="row uniform">
                    <div class="12u 12u$(small)">
                        <label for="email" class="col-md-4 col-form-label text-md-left" style="color: white">이메일</label>
                        <input name="email" id="email" required value="" placeholder="이메일을 입력해주세요.." type="email">
                    </div>

                    <div class="12u 12u$(small)">
                        <label for="password" class="col-md-4 col-form-label text-md-left" style="color: white">비밀번호</label>
                        <input name="password" id="password" required value="" placeholder="비밀번호를 입력해주세요.." type="password">
                    </div>

                    <div class="12u$">
                        <ul class="actions">
                            <li><input value="로그인" class="special big" type="submit"></li>
                        </ul>
                    </div>
                </div>
            </form>

        </div>
    </section>


@endsection
