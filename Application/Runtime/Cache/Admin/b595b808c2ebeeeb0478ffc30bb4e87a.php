<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>JLBlog —Manage</title>
    <!-- Bootstrap -->
    <link href="/JLBlog/Public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/JLBlog/Public/css/manage-custom.css">
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
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">JLBlog Manage</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Home</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-envelope"></i>
                            Messages
                            <span class="badge">7</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">7 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar">
                                        <img src="http://placehold.it/50x50"></span>
                                    <span class="name">John Smith:</span>
                                    <span class="message">Hey there, I wanted to ask you something...</span>
                                    <span class="time"> <i class="glyphicon glyphicon-time"></i>
                                        4:34 PM
                                    </span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar">
                                        <img src="http://placehold.it/50x50"></span>
                                    <span class="name">John Smith:</span>
                                    <span class="message">Hey there, I wanted to ask you something...</span>
                                    <span class="time">
                                        <i class="glyphicon glyphicon-time"></i>
                                        4:34 PM
                                    </span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar">
                                        <img src="http://placehold.it/50x50"></span>
                                    <span class="name">John Smith:</span>
                                    <span class="message">Hey there, I wanted to ask you something...</span>
                                    <span class="time">
                                        <i class="glyphicon glyphicon-time"></i>
                                        4:34 PM
                                    </span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    View Inbox
                                    <span class="badge">7</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown alerts-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-bell"></i>
                            Alerts
                            <span class="badge">3</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    Default
                                    <span class="label label-default">Default</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Primary
                                    <span class="label label-primary">Primary</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Success
                                    <span class="label label-success">Success</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Info
                                    <span class="label label-info">Info</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Warning
                                    <span class="label label-warning">Warning</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Danger
                                    <span class="label label-danger">Danger</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">View All</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            John Smith
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-envelope"></i>
                                    Inbox
                                    <span class="badge">7</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-wrench"></i>
                                    Settings
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-off"></i>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container" id="page-wrapper">
            <div class="jumbotron">
                <h1>Welcome to manage JLBlog!</h1>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/JLBlog/Public/js/bootstrap.min.js"></script>
</body>

</html>