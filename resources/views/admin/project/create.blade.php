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
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="selectric-wrapper selectric-form-control selectric-selectric selectric-below">
                                        <div class="selectric-hide-select">
                                            <select class="form-control selectric" tabindex="-1">
                                                <option>Tech</option>
                                                <option>News</option>
                                                <option>Political</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">content</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea name="name" id=""  ></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
