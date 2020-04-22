@extends('layouts.blog_app')

@section('blog_content')

    <!-- Three -->
    <section id="three" class="wrapper style3 special">
        <div class="container">
            <header class="major">
                <h2>회원가입 하기</h2>
            </header>
        </div>
        <div class="container 50%">

            <form action="/register" method="post">
                @csrf
                <div class="row uniform">

                    <div class="12u 12u$(small)">
                        <label for="name" class="col-md-4 col-form-label text-md-left" style="color: white">이름</label>
                        <input name="name" required id="name" value="" placeholder="이름을 입력해주세요.." type="text">
                    </div>

                    <div class="12u 12u$(small)">
                        <label for="email" class="col-md-4 col-form-label text-md-left" style="color: white">이메일</label>
                        <input name="email" required id="email" value="" placeholder="이메일을 입력해주세요.." type="email">
                    </div>

                    <div class="12u 12u$(small)">
                        <label for="password" class="col-md-4 col-form-label text-md-left" style="color: white">비밀번호</label>
                        <input name="password" required id="password" value="" placeholder="비밀번호를 입력해주세요.." type="password">
                    </div>

                    <div class="12u 12u$(small)">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-left" style="color: white">비밀번호 확인</label>
                        <input name="password_confirmation" required autocomplete="new-password" id="password-confirm" value="" placeholder="비밀번호를 한번 더 입력해주세요.." type="password">
                    </div>

                    <div class="12u$">
                        <ul class="actions">
                            <li><input value="회원가입" class="special big" type="submit"></li>
                        </ul>
                    </div>
                </div>
            </form>

        </div>
    </section>


@endsection
