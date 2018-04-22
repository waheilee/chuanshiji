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
                            <a href="{{url('tree/create')}}" class="btn btn-primary">添加</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>

                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($data as $val)
                                <tr>
                                    {{--<td>{{$bb->id}}</td>--}}
                                    <td>{{$val->_name}}</td>
                                    <td>{{$val->created_at}}</td>
                                    <td><div class="badge badge-success">Active</div></td>
                                    <td><button class="btn btn-action btn-danger" onclick="del({{$val->id}})">删除</button>
                                        <a href="{{url('tree/edit/'.$val->id)}}" class="btn btn-action btn-secondary">编辑</a></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    {{--分页--}}
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                {{--{{ $aa->links() }}--}}
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="ion ion-chevron-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
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
@section('admin-js')
    <script>
        function del(id) {
//            alert(id)
            swal({
                title: "确定删除吗？",
                text: "你将无法恢复该文章！",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "确定删除！",
                cancelButtonText: "取消删除！",
                closeOnConfirm: false,
                closeOnCancel: false
            })
                .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url:'tree/del',
                        type: 'POST',
                        dataType: 'json',
                        data: {'id':id},
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data){
                            if(data ==200){
//                                swal("删除成功!", {
//                                    icon: "success",
//                                });
                                location.reload()
                            }

                        }

                    });

                } else {

        }
        });

        }

    </script>
@endsection