<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>JLBlog —Beta</title>
    <!-- Bootstrap -->
    <link href="/JLBlog/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/JLBlog/Public/css/offcanvas.css" rel="stylesheet">
    <link href="/JLBlog/Public/css/custom.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="bookmark" href="favicon.ico" type="image/x-icon" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <div class="jumbotron">
        <div class="container-fluid">
            <h1>JLBlog</h1>
        </div>
    </div>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">随笔</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="<?php echo ($manage_url); ?>">Manage</a>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-xs-12 col-sm-9">
                <p class="pull-right visible-xs">
                    <button type="button" class="btn btn-primary btn-xs" id="slider-btn" data-toggle="offcanvas">SliderBar></button>
                </p>
                <?php if(is_array($article_list)): $i = 0; $__LIST__ = $article_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><div class="summary">
                        <div class="page-header">
                            <h1><?php echo ($article["title"]); ?></h1>
                        </div>
                        <div><?php echo ($article["summary"]); ?></div>
                        <div>...</div>
                        <p class="page-footer">
                            <p class="details-btn">
                                <a class="btn btn-primary" href="#" role="button">View details &raquo;</a>
                            </p>
                            <hr>
                            <p class="details-bar">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                <span class="details-items"><?php echo (substr($article["date"],0,10)); ?></span>
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                <span class="details-items">30</span>
                                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                                <span class="details-items">32</span>
                            </p>
                        </p>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="slider">
                    <h3>&ensp;Categories</h3>
                    <div class="list-group">
                        <?php if(is_array($category_list)): $i = 0; $__LIST__ = $category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><a href="#" class="list-group-item" id="category-list"><?php echo ($category["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="slider">
                    <h3>&ensp;Tags</h3>
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation">
                            <a href="#">
                Home
                <span class="label label-primary">3</span>
              </a>
                        </li>
                        <li role="presentation">
                            <a href="#">
                Profile
                <span class="label label-primary">1</span>
              </a>
                        </li>
                        <li role="presentation">
                            <a href="#">
                Messages
                <span class="label label-primary">2</span>
              </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <footer>
            <p class="text-center">&copy; Company 2014</p>
        </footer>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/JLBlog/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('[data-toggle="offcanvas"]').click(function() {
            $('.row-offcanvas').toggleClass('active')
        });
    });
    </script>
</body>

</html>