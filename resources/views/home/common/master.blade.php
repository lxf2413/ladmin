@include('home.common.header')
<body>
<header>
    <div class="center_wrapper">
        <div id="toplinks">
            <div id="toplinks_inner">
                <a href="#">Sitemap</a> | <a href="#">Privacy Policy</a> | <a href="{{url('user/login')}}">登录</a>
            </div>
        </div>
        <div class="clearer">&nbsp;</div>

        <div id="site_title">
            <h1><a href="#">L&Y <span>'s blog</span></a></h1>
            <p>记录我的技术成长！</p>
        </div>
    </div>
</header>

<nav id="navigation">
    <div class="center_wrapper">
        <ul>
            <li @if(Request::getPathInfo() == '/') class="current_page_item" @endif><a href="{{url('/')}}">Home</a></li>
            <li><a href="blog_post.html">Jquey</a></li>
            <li><a href="style_demo.html">PHP</a></li>
            <li><a href="archives.html">JAVA</a></li>
            <li><a href="empty_page.html">Linux </a></li>
            <li @if(Request::getPathInfo() == '/message') class="current_page_item" @endif><a href="{{url('message')}}">留言</a></li>
        </ul>
        <div class="clearer">&nbsp;</div>
    </div>
</nav>

<div id="main_wrapper_outer">
    <div id="main_wrapper_inner">
        <div class="center_wrapper">
            @yield('content')

            <div class="right" id="sidebar">

                <div id="sidebar_content">

                    <div class="box">

                        <div class="box_title">About</div>

                        <div class="box_content">
                            Aenean sit amet dui at felis lobortis dignissim. Pellentesque risus nibh, feugiat in, convallis id, congue ac, sem. Sed tempor neque in quam.
                        </div>

                    </div>

                    <div class="box">

                        <div class="box_title">Categories</div>

                        <div class="box_content">
                            <ul>
                                <li><a href="http://www.cssmoban.com/category/website-templates/">Website Templates</a></li>
                                <li><a href="http://www.cssmoban.com/category/wordpress-themes/">Wordpress Themes</a></li>
                                <li><a href="http://www.cssmoban.com/professional-templates/">Professional Templates</a></li>
                                <li><a href="http://www.cssmoban.com/category/blogger-templates/">Blogger Templates</a></li>
                                <li><a href="http://www.cssmoban.com/category/joomla-templates/">Joomla Templates</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="box">

                        <div class="box_title">Resources</div>

                        <div class="box_content">
                            <ul>
                                <li><a href="http://www.cssmoban.com/">cssMoban.com Web Templates</a></li>
                                <li><a href="http://www.google.com/">Google</a> - Web Search</li>
                                <li><a href="http://www.w3schools.com/">W3Schools</a> - Online Web Tutorials</li>
                                <li><a href="http://www.wordpress.org/">WordPress</a> - Blog Platform</li>
                                <li><a href="http://cakephp.org/">CakePHP</a> - PHP Framework</li>
                            </ul>
                        </div>

                    </div>

                    <div class="box">

                        <div class="box_title">Gallery</div>

                        <div class="box_content">

                            <div class="thumbnails">

                                <a href="#" class="thumb"><img src="sample-thumbnail.jpg" width="75" height="75" alt="" /></a>
                                <a href="#" class="thumb"><img src="sample-thumbnail.jpg" width="75" height="75" alt="" /></a>
                                <a href="#" class="thumb"><img src="sample-thumbnail.jpg" width="75" height="75" alt="" /></a>
                                <a href="#" class="thumb"><img src="sample-thumbnail.jpg" width="75" height="75" alt="" /></a>
                                <a href="#" class="thumb"><img src="sample-thumbnail.jpg" width="75" height="75" alt="" /></a>
                                <a href="#" class="thumb"><img src="sample-thumbnail.jpg" width="75" height="75" alt="" /></a>

                                <div class="clearer">&nbsp;</div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="clearer">&nbsp;</div>

        </div>
    </div>
</div>

<div id="dashboard">
    <div id="dashboard_content">
        <div class="center_wrapper">

            <div class="col3 left">
                <div class="col3_content">

                    <h4>Tincidunt</h4>
                    <ul>
                        <li><a href="#">Consequat molestie</a></li>
                        <li><a href="#">Sem justo</a></li>
                        <li><a href="#">Semper eros</a></li>
                        <li><a href="#">Magna sed purus</a></li>
                        <li><a href="#">Tincidunt morbi</a></li>
                    </ul>

                </div>
            </div>

            <div class="col3mid left">
                <div class="col3_content">

                    <h4>Fermentum</h4>
                    <ul>
                        <li><a href="#">Semper fermentum</a></li>
                        <li><a href="#">Sem justo</a></li>
                        <li><a href="#">Magna sed purus</a></li>
                        <li><a href="#">Tincidunt nisl</a></li>
                        <li><a href="#">Consequat molestie</a></li>
                    </ul>

                </div>
            </div>

            <div class="col3 right">
                <div class="col3_content">

                    <h4>Praesent</h4>
                    <ul>
                        <li><a href="#">Semper lobortis</a></li>
                        <li><a href="#">Consequat molestie</a></li>
                        <li><a href="#">Magna sed purus</a></li>
                        <li><a href="#">Sem morbi</a></li>
                        <li><a href="#">Tincidunt sed</a></li>
                    </ul>

                </div>
            </div>

            <div class="clearer">&nbsp;</div>

        </div>
    </div>
</div>
@include('home.common.footer')

</body>
</html>