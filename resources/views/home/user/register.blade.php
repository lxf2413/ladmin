@include('home.common.header')
<body style="background-color: white;color: black;">
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
                       <div class="form-group @if($errors->first('uname'))has-error @endif">
                           <label>账户</label>
                           <input type="text" name="uname" class="form-control" value="{{old('uname')}}" placeholder="账号">
                       </div>
                       <div class="form-group  @if($errors->first('password'))has-error @endif">
                           <label>密码</label>
                           <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="密码">
                       </div>
                       <div class="form-group  @if($errors->first('again_password'))has-error @endif">
                           <label>确认密码</label>
                           <input type="password" name="again_password" class="form-control" value="{{old('again_password')}}" placeholder="确认密码">
                       </div>
                       <button type="submit" class="btn btn-default">注册</button>
                       @if(count($errors))
                           <ul>
                               <li>{{$errors->first()}}</li>
                               {{--@foreach($errors->all() as $error)--}}
                               {{--<li>{{$error}}</li>--}}
                               {{--@endforeach--}}
                           </ul>
                       @endif
                       <div class="form-group">
                           <label>还没有账号？<a href="{{url('user/login')}}">立即登录</a></label>
                       </div>
                   </form>
               </div>
            </div>
        </div>
    </div>
@include('home.common.footer')
</body>
</html>