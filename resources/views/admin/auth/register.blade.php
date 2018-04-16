@extends('admin.layouts.base')
@section('base_content')

<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        {{ env('APP_NAME') }}
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>注册</h4></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-12">
                                        <label for="name">您的名字</label>
                                        <input id="name" type="text" class="form-control" name="name"
                                               required autofocus>
                                        @if ($errors->has('name'))
                                            <span style="color: red">
                                        <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">邮箱地址</label>
                                    <input id="email" type="email" class="form-control" name="email" required>
                                    @if ($errors->has('email'))
                                        <span style="color: red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">登录密码</label>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span style="color: red">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password-confirm" class="d-block">确认密码</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        立即注册
                                    </button>
                                </div>
                            </form>
                        </div>
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




