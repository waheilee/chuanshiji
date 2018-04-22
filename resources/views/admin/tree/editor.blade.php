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
                    <div class="card-header">
                        <h4>Full Summernote</h4>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <input type="hidden" name="id"   value="{{$con->id}}">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">标题</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="name" class="form-control" id="title" value="{{$con->name}}" >
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">分类</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="selectric-wrapper selectric-form-control selectric-selectric selectric-below">
                                        <div class="selectric-hide-select">
                                            <select class="form-control selectric" tabindex="-1" name="pid">
                                                <option value="0">顶级分类</option>
                                                @foreach($data as $val)
                                                    <option value="{{$val->id}}">{{$val->_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="form-group row mb-4">--}}
                                {{--<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">内容</label>--}}
                                {{--<div class="col-sm-12 col-md-7">--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        </form>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-info" id="submit">提交</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('admin-js')

    <script>
        $("#submit").click(function(){
            var con     = $("form").serialize();
            var title   = $('#title').val();
            if(title == ''){
                toastr.warning('', '标题不能为空');
                return false;
            }
            $.ajax({
                type: 'POST',
                url: '{{url('/tree/update')}}',
                data: con,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                success: function(data){
                    // console.log(data.status);
                    toastr.success('', '添加成功');
                }
            });
        });
    </script>
@endsection
