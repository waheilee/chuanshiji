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
                            {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                            {{--</div>--}}
                            {{--@endif--}}
                            <form method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="email">您的邮箱地址</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                           required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                                        发送重置密码链接到您的邮箱
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