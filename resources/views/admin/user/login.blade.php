<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>后台管理</title>
    <link rel="stylesheet" href="{{ URL::asset('static/Library/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('static/Library/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('static/Library/diy/diy.css') }}" />
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('admin') }}">
                后台管理
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">首页</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">登录</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="oForm">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">账号：</label>
                            <div class="col-md-6">
                                <input id="uname" type="text" placeholder="账号" class="form-control" name="uname" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">密码：</label>
                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="密码" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4" id="login">
                                <button type="button" id="login-btn" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> 登录
                                </button>
                            </div>
                            <div class="col-md-6 col-md-offset-4 hidden" id="logining">
                                <button type="button"  class="btn btn-warning">
                                    <i class="fa fa-spinner fa-spin"></i>
                                    <strong>登录中...</strong>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::asset('static/Library/jquery/jquery.min.js') }}" />
<script src="{{ URL::asset('static/Library/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript">
    $("#login-btn").click(function(){
        if($("#uname").val()==''){
            $("#uname").parents('.form-group').addClass('has-error');
            return;
        }
        if($("#password").val()==''){
            $("#password").parents('.form-group').addClass('has-error');
            return;
        }
        //登录
        $("#login").addClass('hidden');
        $("#logining").removeClass('hidden');
        $.ajax({
            type:'post',
            url:"{{url('user/login')}}",
            data:$("#oForm").serialize(),
            success:function(data){
                if(data.sta){
                    location.href='{{url('admin')}}'
                }else{
                    alert(data.message);
                }
            },
            error:function(){

            },
            complete:function(){
                $("#login").removeClass('hidden');
                $("#logining").addClass('hidden');
            }
        });
    });
</script>
</body>
</html>
