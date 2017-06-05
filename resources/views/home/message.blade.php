@extends('home.common.master')
@section('title','留言区')
@section('content')
    <div class="left" id="main">
        <div id="main_content">
            <div class="post">

                <div class="post_title"><h2><a href="#">我的博客成立了！</a></h2></div>
                <div class="post_date">2017-6-3 </div>

                <div class="post_body">

                    首页测试内容

                </div>

                <div class="post_meta">
                    5 <a class="fa fa-eye"></a> | 8 <a  class="fa fa-thumbs-o-up"></a> | 10 <a class="fa fa-commenting"></a> | 5 <a  class="fa fa-heart"></a>
                </div>
            </div>
        </div>
        <div class="post">
            <div class="post_date">留言区</div>
            <div class="post_body">
                <div contenteditable="true" style="width: 100%;height: 120px;background-color: white"  id="saytext"></div>
            </div>

            <div class="post_meta tr">
                <span class="emotion fa fa-smile-o mouse"></span> |
                <span class=" mouse">确定</span>
            </div>
        </div>
        <script type="text/javascript" src="{{asset('static/library/emoji/js/jquery.qqFace.js')}}"></script>
        <script type="text/javascript">
            $(function(){
                $('.emotion').qqFace({
                    id : 'facebox',
                    assign:'saytext',
                    path:'static/library/emoji/arclist/'	//表情存放的路径
                });
                $(".sub_btn").click(function(){
                    var str = $("#saytext").val();
                    var html = replace_em(str);
                    $("#show").html(replace_em(str));
                });
            });

            //查看结果
            function replace_em(str){

            }
        </script>
        <style>
            #facebox{
                left: 370px !important;
            }
        </style>
    </div>
@endsection