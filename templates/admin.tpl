<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Font Awesome Icons -->
    <link href="<{$xoImgUrl}>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<{$xoImgUrl}>bootstrap/bootstrap.min.css" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<{$xoImgUrl}>bootstrap/jquery-3.4.1.min.js"></script>
    <script src="<{$xoImgUrl}>bootstrap/popper.min.js"></script>
    <script src="<{$xoImgUrl}>bootstrap/bootstrap.min.js"></script>
    
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.css">
    <script type="text/javascript" src="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.js"></script>
    <title><{$WEB.web_title}></title>
  </head>
  <body>
    <{* 轉向樣板 *}>
    <{include file="tpl/redirect.tpl"}>

    <h1 class="text-center mt-2"><{$WEB.web_title}></h1>
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <{if $WEB.file_name == "user.php"}>
            <{include file="tpl/user.tpl"}>
          <{else if $WEB.file_name == "prod.php"}>
            <{include file="tpl/prod.tpl"}>
          <{else if $WEB.file_name == "kind.php"}>
            <{include file="tpl/kind.tpl"}>
          <{else if $WEB.file_name == "menu.php"}>
            <{include file="tpl/menu.tpl"}>
          <{else if $WEB.file_name == "slide.php"}>
            <{include file="tpl/slide.tpl"}>
          <{else if $WEB.file_name == "show.php"}>
            <{include file="tpl/show.tpl"}>
          <{/if}>
        </div>
        <div class="col-sm-3">
          <div class="card" style="width: 18rem;">
            <div class="bg-primary text-white card-header">
              管理員
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <a href="index.php" class="btn-block">首頁</a>
              </li>
              <li class="list-group-item">
                <a href="http://localhost/adminer/adminer.php" class="btn-block" target="_black">資料庫管理</a>
              </li>
              <li class="list-group-item">
                <a href="user.php" class="btn-block">會員管理</a>
              </li>
              <li class="list-group-item">
                <a href="prod.php" class="btn-block">商品管理</a>
              </li>
              <li class="list-group-item">
                <a href="kind.php" class="btn-block">類別管理</a>
              </li>
              <li class="list-group-item">
                <a href="menu.php" class="btn-block">選單管理</a>
              </li>
              <li class="list-group-item">
                <a href="slide.php" class="btn-block">輪播圖管理</a>
              </li>
              <li class="list-group-item">
                <a href="show.php" class="btn-block">展示圖管理</a>
              </li>
              <li class="list-group-item">
                <a href="index.php?op=logout" class="btn-block">登出</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
