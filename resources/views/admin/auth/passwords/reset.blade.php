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
                        <div class="card-header"><h4>重置密码</h4></div>

                        <div class="card-body">
                            <p class="text-muted"></p>
                            <form method="POST"  action="{{ route('password.request') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="email">您的邮箱地址</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                           value="{{ $email or old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="password">新密码</label>
                                    <input id="password" type="password" class="form-control pwstrength"
                                           data-indicator="pwindicator" name="password" tabindex="2" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">确认密码</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" tabindex="2" required>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                                        Reset Password
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