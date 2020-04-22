@extends('layouts.blog_app')

@section('blog_content')

    <!-- Three -->
    <section id="three" class="wrapper style3 special">
        <div class="container">
            <header class="major">
                <h2>회원가입</h2>
            </header>
        </div>
        <div class="container 50%">

            <form action="/register" method="post">
                @csrf
                <div class="row uniform">
                    <div class="12u 12u$(small)">
                        <label for="name" class="col-form-label text-md-left" style="color: white">이름</label>
                        <input name="name" id="name" value="" placeholder="이름을 입력해주세요.." type="text">
                    </div>
                    <div class="12u 12u$(small)">
                        <label for="email" class="col-form-label text-md-left" style="color: white">이메일</label>
                        <input name="email" id="email" value="" placeholder="이메일 주소를 입력해주세요.." type="email">
                    </div>
                    <div class="12u 12u$(small)">
                        <label for="password" class="col-form-label text-md-left" style="color: white">비밀번호</label>
                        <input name="password" id="password" value="" placeholder="비밀번호를 입력해주세요.." type="password">
                    </div>
                    <div class="12u 12u$(small)">
                        <label for="password-confirm" class="col-form-label text-md-left" style="color: white">비밀번호 확인</label>
                        <input name="password_confirmation" id="password-confirm" value="" placeholder="비밀번호를 입력해주세요.." type="password">
                    </div>
                    <div class="12u$">
                        <ul class="actions">
                            <li><input value="가입하기" class="special big" type="submit"></li>
                        </ul>
                    </div>
                </div>
            </form>

        </div>

    </section>


@endsection
