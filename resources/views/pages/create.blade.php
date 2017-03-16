@extends('layouts.backend')

@section('content')
    <article class="content item-editor-page">
        <div class="title-block">
            <h3 class="title"> 创建 <span class="sparkline bar" data-type="bar"></span></h3>
        </div>

        {{ Form::open(['route' => 'page.store']) }}
        {{ csrf_field() }}

        <div class="card card-block">

            <div class="form-group row {{ $errors->has('title') ? ' has-error' : '' }}">
                {{ Form::label('title', '标题', ['class' => 'col-sm-2 form-control-label text-xs-right']) }}
                <div class="col-sm-10">
                    {{ Form::text('title', '', ['class' => 'form-control','placeholder'=>'title']) }}
                </div>
            </div>

            <div class="form-group row {{ $errors->has('seo_keywords') ? ' has-error' : '' }}">
                {{ Form::label('seo_keywords', '关键字', ['class' => 'col-sm-2 form-control-label text-xs-right']) }}
                <div class="col-sm-10">
                    {{ Form::text('seo_keywords', '', ['class' => 'form-control','placeholder'=>'seo_keywords']) }}
                </div>
            </div>

            <div class="form-group row {{ $errors->has('seo_desc') ? ' has-error' : '' }}">
                {{ Form::label('seo_desc', 'SEO 描述', ['class' => 'col-sm-2 form-control-label text-xs-right']) }}
                <div class="col-sm-10">
                    {!! Form::textarea('seo_desc', '', ['class' => 'form-control','cols'=>30,'rows'=>5]) !!}
                </div>
            </div>

            <div class="form-group row {{ $errors->has('content') ? ' has-error' : '' }}">
                {{ Form::label('content', '内容', ['class' => 'col-sm-2 form-control-label text-xs-right']) }}
                <div class="col-sm-10">
                    {!! Form::textarea('content', '', ['class' => 'form-control','cols'=>30,'rows'=>10,'id'=>'content']) !!}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('status', '状态', ['class' => 'col-sm-2 form-control-label text-xs-right']) }}
                <div class="col-sm-offset-2 col-sm-10">
                    <label>
                        {{ Form::radio('status', '1',true,['class'=>'radio rounded'])  }}
                        <span>发布</span>
                    </label> <label>
                        {{ Form::radio('status', '0',false,['class'=>'radio rounded'])  }}
                        <span>隐藏</span>
                    </label>
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('', '', ['class' => 'col-sm-2 form-control-label text-xs-right']) }}
                <div class="col-sm-10">
                    {{ Form::submit('创建',['class'=>'btn btn-primary']) }}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </article>
@endsection

@section('footerJs')
    @include('layouts.editor')
@endsection