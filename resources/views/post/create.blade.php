@extends('layouts.backend')

@section('content')
    <article class="content item-editor-page">
        <div class="title-block">
            <h3 class="title"> Add new item <span class="sparkline bar" data-type="bar"></span></h3>
        </div>
        <form name="item" method="POST" action="{{ route('post.store') }}">
            {{ csrf_field() }}
            <div class="card card-block">
                <div class="form-group row {{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class="col-sm-2 form-control-label text-xs-right">标题：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="" value="{{ old('title') }}">
                        @if ($errors->has('title'))
                            <span class="has-error">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ $errors->has('keywords') ? ' has-error' : '' }}">
                    <label class="col-sm-2 form-control-label text-xs-right">关键字：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="keywords" placeholder="" value="{{ old('keywords') }}">
                        @if ($errors->has('keywords'))
                            <span class="has-error">{{ $errors->first('keywords') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ $errors->has('desc') ? ' has-error' : '' }}">
                    <label class="col-sm-2 form-control-label text-xs-right" for="desc">描述：</label>
                    <div class="col-sm-10">
                        <textarea name="desc" id="desc" cols="30" rows="5" class="form-control">{{ old('desc') }}</textarea>
                        @if ($errors->has('desc'))
                            <span class="has-error">{{ $errors->first('desc') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ $errors->has('content') ? ' has-error' : '' }}">
                    <label class="col-sm-2 form-control-label text-xs-right" for="content">内容：</label>
                    <div class="col-sm-10">
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ old('content') }}</textarea>
                        @if ($errors->has('desc'))
                            <span class="has-error">{{ $errors->first('content') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row {{ $errors->has('category_id') ? ' has-error' : '' }}">
                    <label class="col-sm-2 form-control-label text-xs-right" for="category_id">分类：</label>
                    <div class="col-sm-10">
                        <select class="c-select form-control" name="category_id" id="category_id">
                            <option selected value="">Select Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @if ($errors->has('category_id'))
                            <span class="has-error">{{ $errors->first('category_id') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label text-xs-right">发布：</label>
                    <div class="col-sm-offset-2 col-sm-10">
                        <label>
                            <input class="radio rounded" name="is_publish" checked="checked" type="radio" value="1">
                            <span>是</span>
                        </label> <label>
                            <input class="radio rounded" name="is_publish" type="radio" value="0">
                            <span>否</span>
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label text-xs-right"></label>
                    <div class="col-sm-10">
                        <input type="hidden" name="draft_id" value="" />
                        <button type="submit" class="btn btn-primary">
                            添加
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </article>
@endsection

@section('footerJs')
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script src="https://cdn.jsdelivr.net/highlight.js/latest/highlight.min.js"></script>
    <script>
        new SimpleMDE({
            element: document.getElementById("content"),
            renderingConfig: {
                codeSyntaxHighlighting: true
            },
            tabSize: 4,
            autosave: {
                enabled: true,
                uniqueId: 'junjun'
            },
//            status: ["autosave", "lines", "words", "cursor"],
        });
    </script>
@endsection