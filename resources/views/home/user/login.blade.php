@include('home.common.header')
<body style="background-color: black">
<style type="text/css">
     .left_box{
         background-color: #0a1015;float: left;height: 100%;background-image: url('{{asset('static/home/img/login_logo.jpg')}}');background-size: 100% 100%;
         -webkit-transition: all 6s ease-in-out;
     }
     .right_box{
         float: left;height: 100%;padding: 50px;

     }
    .left_box:hover{
        transform: rotateY(360deg);
    }
</style>
    <div style="height: 400px;width: 80%;margin: 50px auto;margin-bottom: 0;">
        <div class="left_box col-xs-7">

        </div>
        <div class="right_box col-xs-5">
            <div>
               <div>
                   <form action="" method="post">
                       {{csrf_field()}}
                       <div class="form-group">
                           <label>账户</label>
                           <input type="text" class="form-control" name="uname" placeholder="账号">
                       </div>
                       <div class="form-group">
                           <label>密码</label>
                           <input type="password" class="form-control" name="password" placeholder="密码">
                       </div>
                       <div class="checkbox">
                           <label>
                               <input type="checkbox"> Remember me

                           </label>
                           <a class="fr" href="{{url('user/reset')}}">forget your password?</a>
                       </div>
                       <button type="submit" class="btn btn-default">登录</button>
                       <div class="form-group">
                           <label>还没有账号？<a href="{{url('user/register')}}">立即注册</a></label>
                       </div>
                   </form>
               </div>
            </div>

        </div>
    </div>
@include('home.common.footer')
</body>
</html>