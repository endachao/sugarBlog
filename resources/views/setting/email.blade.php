@extends('layouts.backend')

@section('setting') active open @endsection
@section('email_setting') active @endsection
@section('setting_ul') in @endsection

@section('content')
<article class="content dashboard-page">
    <div class="title-block">
        <h3 class="title"> 邮件设置 </h3>
    </div>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">
                <div class="card card-block sameheight-item">
                    <form method="post" action="/backend/email-setting">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label class="control-label">smtp 主机</label> 
                                <input type="text" class="form-control" name="smtp_host" @if (!empty($data['smtp_host'])) value="{{ $data['smtp_host'] }}" @else placeholder="smtp 主机" @endif> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label class="control-label">smtp 账户</label> 
                                <input type="text" class="form-control" name="smtp_account" @if (!empty($data['smtp_account'])) value="{{ $data['smtp_account'] }}" @else placeholder="smtp 账户" @endif> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label class="control-label">smtp 密码</label> 
                                <input type="text" class="form-control" name="smtp_password" @if (!empty($data['smtp_password'])) value="{{ $data['smtp_password'] }}" @else placeholder="smtp 密码" @endif> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label class="control-label">smtp 端口</label> 
                                <input type="text" class="form-control" name="smtp_port" @if (!empty($data['smtp_port'])) value="{{ $data['smtp_port'] }}" @else placeholder="smtp 端口" @endif> 
                            </div>
                        </div>
                        <div class="form-group row"> 
                            <div class="col-xs-6">
                                <label class="control-label">评论发送邮件开关</label>
                                <div> 
                                    <label>
                                        <input class="radio squared" name="send_email" @if ($data['send_email'] == 1) checked="checked" @endif type="radio" value="1">
                                        <span>开</span>
                                    </label> 
                                    <label>
                                        <input class="radio squared" name="send_email" @if ($data['send_email'] == 0) checked="checked" @endif type="radio" value="0">
                                        <span>关</span>
                                    </label> 
                                </div>
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
            return false;
        }

        if (content != '') {
            $(this).parent().parent().removeClass('has-error');
            $(this).next('.has-error').remove();
        }
    });
</script>
@endsection