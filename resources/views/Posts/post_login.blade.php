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
                        <label for="email" class="col-form-label text-md-left" style="color: white">이메일</label>
                        <input name="email" id="email" value="" placeholder="이메일 주소를 입력해주세요.." type="email">
                    </div>
                    <div class="12u 12u$(small)">
                        <label for="password" class="col-form-label text-md-left" style="color: white">비밀번호</label>
                        <input name="password" id="password" value="" placeholder="비밀번호를 입력해주세요.." type="password">
                    </div>
                    <div class="12u$">
                        <ul class="actions">
                            <li><input value="로그인" class="special big" type="submit"></li>
                        </ul>
                    </div>
                </div>
            </form>

        </div>

{{--        <div class="container 50%">--}}
{{--            <form method="POST" action="{{ route('login') }}">--}}
{{--            <form method="POST" action="#">--}}
{{--                @csrf--}}

{{--                <div class="form-group row">--}}
{{--                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                    <div class="col-md-6">--}}
{{--                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                        @error('email')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="form-group row">--}}
{{--                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                    <div class="col-md-6">--}}
{{--                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                        @error('password')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="form-group row">--}}
{{--                    <div class="col-md-6 offset-md-4">--}}
{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                            <label class="form-check-label" for="remember">--}}
{{--                                {{ __('Remember Me') }}--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="form-group row mb-0">--}}
{{--                    <div class="col-md-8 offset-md-4">--}}
{{--                        <button type="submit" class="btn btn-primary">--}}
{{--                            {{ __('Login') }}--}}
{{--                        </button>--}}

{{--                        @if (Route::has('password.request'))--}}
{{--                            <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                {{ __('Forgot Your Password?') }}--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}

    </section>


@endsection
