@extends('layouts.backend')

@section('setting') active open @endsection
@section('general_setting') active @endsection
@section('setting_ul') in @endsection

@section('content')
<article class="content dashboard-page">
    <div class="title-block">
        <h3 class="title"> 通用设置 </h3>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- <p class="title-description">  </p> -->
    </div>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">
                <div class="card card-block sameheight-item">
                    <!-- <div class="title-block">
                        <h3 class="title"> Inputs </h3>
                    </div> -->
                    <form method="post" action="/backend/general-setting">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label class="control-label">博客标题</label> 
                                <input type="text" class="form-control" name="blog_title" @if (!empty($data['blog_title'])) value="{{ $data['blog_title'] }}" @else placeholder="博客标题" @endif> 
                            </div>
                        </div>
                        <div class="form-group row"> 
                            <div class="col-xs-6">
                                <label class="control-label">评论开关</label>
                                <div> 
                                    <label>
                                        <input class="radio squared" name="comment" @if ($data['comment'] == 1) checked="checked" @endif type="radio" value="1">
                                        <span>开</span>
                                    </label> 
                                    <label>
                                        <input class="radio squared" name="comment" @if ($data['comment'] == 0) checked="checked" @endif type="radio" value="0">
                                        <span>关</span>
                                    </label> 
                                </div>
                            </div>
                        </div>
                        <div class="form-group row"> 
                            <div class="col-xs-6">
                                <label class="control-label">评论审核开关</label>
                                <div> 
                                    <label>
                                        <input class="radio squared" name="comment_check" @if ($data['comment_check'] == 1) checked="checked" @endif type="radio" value="1">
                                        <span>开</span>
                                    </label> 
                                    <label>
                                        <input class="radio squared" name="comment_check" @if ($data['comment_check'] == 0) checked="checked" @endif type="radio" value="0">
                                        <span>关</span>
                                    </label> 
                                </div>
                            </div>
                        </div>
                        <div class="form-group row"> 
                            <div class="col-xs-6">
                                <label class="control-label">博客 seo 关键字</label> 
                                <input type="text" class="form-control" name="blog_seo_key"  @if (!empty($data['blog_seo_key'])) value="{{ $data['blog_seo_key'] }}" @else placeholder="博客 seo 关键字" @endif>
                            </div>
                        </div>
                        <div class="form-group row"> 
                            <div class="col-xs-6">
                                <label class="control-label">博客 seo 描述</label> 
                                <input type="text" class="form-control" name="blog_seo_des"  @if (!empty($data['blog_seo_des'])) value="{{ $data['blog_seo_des'] }}" @else placeholder="博客 seo 描述" @endif> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-6">
                                <button type="submit" class="btn btn-primary"> 确认修改 </button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</article>

@endsection

@section('footerJs')
<script type="text/javascript">
    $('input[type=text]').blur(function () {
        var content = $(this).val();
        if (content == '' && !$(this).next('.has-error').length) {
            $(this).parent().parent().addClass('has-error');
            $(this).after('<span class="has-error">此处不能为空</span>');
        }

        if (content != '') {
            $(this).parent().parent().removeClass('has-error');
            $(this).next('.has-error').remove();
        }
    });
</script>
@endsection