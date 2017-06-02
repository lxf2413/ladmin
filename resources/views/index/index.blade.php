<head>
    <link href="{{URL::asset('static/Library/jquery-ui/jquery-ui.css')}}" rel="Stylesheet" type="text/css" />
    <script type="text/javascript" src="{{URL::asset('static/Library/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('static/Library/jquery/jquery-migrate-1.2.1.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('static/Library/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('static/Library/jquery/jquery.cropzoom.js')}}"></script>
</head>
<body>
<div class="crop">
    <div id="cropzoom_container"></div>
    <div id="preview"><img id="generated" src=""  /></div>
    <div class="page_btn">
        <input type="button" class="btn" id="crop" value="剪切照片" />
        <input type="button" class="btn" id="restore" value="照片复位" />
    </div>
    <div class="clear"></div>
</div>
<script>
    $(function() {
        var cropzoom = $('#cropzoom_container').cropzoom({
            width: 500,
            height: 360,
            bgColor: '#ccc',
            enableRotation: true,
            enableZoom: true,
            selector: {
                w:150,
                h:200,
                centered: true,
                bgInfoLayer:'#fff',
                borderColor: 'blue',
                borderColorHover: 'yellow'
            },
            image: {
                source: 'http://pic.58pic.com/58pic/17/41/38/88658PICNuP_1024.jpg',
                width: 450,
                height: 800,
                minZoom: 30,
                maxZoom: 150
            }
        });
        $("#crop").click(function(){
            cropzoom.send('crop_img.php', 'POST', {}, function(imgRet) {
                $("#generated").attr("src", imgRet);
            });
        });
        $("#restore").click(function(){
            $("#generated").attr("src", "");
            cropzoom.restore();
        });
    });
</script>
</body>
