@extends('home.common.master')
@section('content')
    <div class="left" id="main" style="background-color: white">
        <div id="main_content">
            <div class="post">
                <div id="chatBox" style="height: 200px;overflow: auto;">
                </div>
               <textarea style="width: 100%;height: 100px;" id="content">

               </textarea>
                <button id="sendMess">发送</button>
            </div>
        </div>
    </div>
    <script>
        //链接服务器websocket
        var ws = new WebSocket('ws://120.27.109.4:19910');
        ws.onopen = function(){
//            ws.send('前端JS触发onopen事件, 链接完成！');
        };
        ws.onmessage = function(e){
            var data = $.parseJSON( e.data );
            $("#chatBox").append('<p>'+data.data.content+'</p>');
            var div = document.getElementById('chatBox');
            div.scrollTop = div.scrollHeight;
        };
        ws.onerror = function(){
            alert('链接失败！');
        };
        ws.close = function(){
            alert('链接已断开！');
        };
        $("#sendMess").click(function(){
            var content = $("#content").val();
            if(content == '')return;
            ws.send(content);
            $("#content").val('');
        });
    </script>
@endsection