<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content="" />
    <meta name="author" content="L&Y" />
    <link rel="stylesheet" type="text/css" href="{{asset('static/home/css/index.css')}}" media="screen" />
</head>
<body>
<header>
    <div class="center_wrapper">
        <div id="toplinks">
            <div id="toplinks_inner">
                <a href="#">Sitemap</a> | <a href="#">Privacy Policy</a> | <a href="#">FAQ</a>
            </div>
        </div>
        <div class="clearer">&nbsp;</div>

        <div id="site_title">
            <h1><a href="#">Emplode <span>Website Template</span></a></h1>
            <p>A free website template built using XHTML and CSS</p>
        </div>
    </div>
</header>

<nav id="navigation">
    <div class="center_wrapper">
        <ul>
            <li class="current_page_item"><a href="index.html">Home</a></li>
            <li><a href="blog_post.html">Blog Post</a></li>
            <li><a href="style_demo.html">Style Demo</a></li>
            <li><a href="archives.html">Archives</a></li>
            <li><a href="empty_page.html">Empty Page</a></li>
        </ul>
        <div class="clearer">&nbsp;</div>
    </div>
</nav>

<div id="main_wrapper_outer">
    <div id="main_wrapper_inner">
        <div class="center_wrapper">
            <div class="left" id="main">
                <div id="main_content">
                   @yield('content')
                </div>
            </div>

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

<div id="footer">
    <div class="center_wrapper">

        <div class="left">
            &copy; 2008 Website.com - Your Website Slogan
        </div>
        <div class="right">
            <a href="http://www.cssmoban.com/">Website template</a> from <a href="http://cssmoban.com/">cssMoban.com</a>
        </div>

        <div class="clearer">&nbsp;</div>

    </div>
</div>

</body>
</html>