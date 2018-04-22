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
                                    <input type="text" name="title" class="form-control" id="title" value="{{$con->title}}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="selectric-wrapper selectric-form-control selectric-selectric selectric-below">
                                        <div class="selectric-hide-select">
                                            <select class="form-control selectric" tabindex="-1" name="pid">
                                                @foreach($data as $val)
                                                    <option value="{{$val->id}}"
                                                            @if($con->type == $val->id)selected="selected" @endif>{{$val->_name}}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">内容</label>
                                <div class="col-sm-12 col-md-7">
                                    <script id="ue-container" name="editorValue"  type="text/plain">
                                        {!! html_entity_decode($con->content) !!}
                                    </script>
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

    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('ue-container');
        ue.ready(function(){
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });
    </script>
    <script>
        $("#submit").click(function(){
            var con     = $("form").serialize();
            var title   = $('#title').val();
            var content = ue.getContent();
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
                url: '{{url('/meet/update')}}',
                data: con,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                success: function(data){
                    toastr.success('', '修改成功');
                    setTimeout('window.location="{{url('/meet')}}"',1000)
                    {{--window.location.href = '{{url('/project')}}'--}}

                }
            });
        });
    </script>
@endsection
