@extends('admin.layouts.base')
@section('base_content')
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        {{ env('APP_NAME') }}
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>登录</h4></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">您的邮箱地址</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                           value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span style="color: red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="d-block">您的密码
                                        <div class="float-right">
                                            <a href="{{ route('password.request') }}">
                                                我忘记密码?
                                            </a>
                                        </div>
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password"
                                           tabindex="2" required>
                                    @if ($errors->has('password'))
                                        <span style="color: red">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                               id="remember-me">
                                        <label class="custom-control-label"
                                               for="remember-me" {{ old('remember') ? 'checked' : '' }} >记住我</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                                        登录
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        还未注册? <a href="{{ route('register') }}">马上注册</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; {{ env('APP_NAME') }} 2018
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

