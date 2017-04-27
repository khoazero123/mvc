<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php if(isset($title)) echo $title;else echo 'Home'; ?></title>
    <meta name="description" content="<?php if(isset($description)) echo $description;else echo 'Page Home'; ?>">
    <!-- Bootstrap -->
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?v=<?=filemtime('public/css/style.css')?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container wrapper">
      <header class="header">
        <h1>Logo</h1>
        <!-- main menu -->
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Mediaonline.co</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-menu">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./">Home <span class="sr-only">(current)</span></a></li>
        <?=(defined('USER') && USER) ? '<li><a href="?c=post&a=write">Viết bài</a></li>':'';?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if(defined('USER') && USER) 
          echo '<li><a href="?c=user&a=logout">Thoát</a></li>';
        else
          echo '<li><a href="?c=user&a=signin">Đăng nhập</a></li>
                <li><a href="?c=user&a=signup">Đăng ký</a></li>';
        ?>
        
      </ul>
      <form class="navbar-form navbar-right" action="./" method="GET">
      <input type="hidden" name="c" value="home">
      <input type="hidden" name="a" value="search">
        <div class="form-group">
          <input type="text" name="keyword" value="<?=isset($_REQUEST['keyword']) ? $_REQUEST['keyword'] : ''?>" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="alert alert-info" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              Update tính năng auto load thêm bài viết khi scroll down
            </div>
      </header>
      <section class="container" style="">
        
