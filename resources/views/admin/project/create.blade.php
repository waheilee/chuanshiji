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
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">标题</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="title" class="form-control" id="title">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="selectric-wrapper selectric-form-control selectric-selectric selectric-below">
                                        <div class="selectric-hide-select">
                                            <select class="form-control selectric" tabindex="-1" name="type">
                                                <option>Tech</option>
                                                <option>News</option>
                                                <option>Political</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">内容</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="ueditor" class="edui-default">
                                        @include('UEditor::head')
                                    </div>
                                </div>
                            </div>
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

    <script id="ueditor"></script>
    <script>
        var ue=UE.getEditor("ueditor");
        ue.ready(function(){
            //因为Laravel有防csrf防伪造攻击的处理所以加上此行
            ue.execCommand('serverparam','_token','{{ csrf_token() }}');
        });
    </script>
    <script>
        $("#submit").click(function(){
            var con     = $("form").serialize();
            var title   = $('#title').val();
            var content = ue;
//            alert(content)
            if(title == ''){
                toastr.warning('', '标题不能为空');
                return false;
            }
            if(content == ''){
                toastr.warning('', '内容不能为空');
                return false;
            }
            $.ajax({
                type: 'POST',
                url: 'add',
                data: con,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                success: function(data){
                    console.log(data.status);
                    toastr.success('', '添加成功');
                }
            });
        });
    </script>
@endsection
