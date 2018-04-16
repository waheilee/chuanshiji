@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>项目路演</div>
        </h1>
        <div class="row">
            <div class="col-12  ">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <a href="{{url('project/create')}}" class="btn btn-primary">添加</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>文章标题</td>
                                    <td>2017-01-09</td>
                                    <td><div class="badge badge-success">Active</div></td>
                                    <td><a href="#" class="btn btn-action btn-danger">删除</a>
                                    <a href="#" class="btn btn-action btn-secondary">编辑</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>文章标题</td>
                                    <td>2017-01-09</td>
                                    <td><div class="badge badge-success">Active</div></td>
                                    <td><a href="#" class="btn btn-action btn-danger">删除</a>
                                    <a href="#" class="btn btn-action btn-secondary">编辑</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>文章标题</td>
                                    <td>2017-01-11</td>
                                    <td><div class="badge badge-danger">Not Active</div></td>
                                    <td><a href="#" class="btn btn-action btn-danger">删除</a>
                                    <a href="#" class="btn btn-action btn-secondary">编辑</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>文章标题</td>
                                    <td>2017-01-11</td>
                                    <td><div class="badge badge-success">Active</div></td>
                                    <td><a href="#" class="btn btn-action btn-danger">删除</a>
                                    <a href="#" class="btn btn-action btn-secondary">编辑</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{--分页--}}
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="ion ion-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="ion ion-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
