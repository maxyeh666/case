<!-- Bootstrap core CSS -->
<link href="<{$xoImgUrl}>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link href="<{$xoImgUrl}>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<{$xoImgUrl}>css/business-casual.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script src="<{$xoImgUrl}>vendor/jquery/jquery.min.js"></script>
<script src="<{$xoImgUrl}>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- 購物車 -->
<link rel="<{$xoImgUrl}>cart/css/cart.css" rel="stylesheet">
<script src="<{$xoImgUrl}>cart/js/cart.js"></script>

<{* 轉向樣板 *}>
<{include file="tpl/redirect.tpl"}>

<{include file="tpl/head.tpl"}>

<{if $op == about}>
  <{include file="tpl/about.tpl"}>
  <{include file="tpl/footer.tpl"}>
<{else if $op == insp}>
  <{include file="tpl/insp.tpl"}>
  <{include file="tpl/footer.tpl"}>
<{else if $op == login_form}>
  <{include file="tpl/login_form.tpl"}>
<{else if $op == reg_form}>
  <{include file="tpl/reg_form.tpl"}>
<{else if  $WEB.file_name == "cart.php"}>
  <{include file="tpl/cart.tpl"}>
  <{include file="tpl/footer.tpl"}>
<{else}>
  <{include file="tpl/homepage.tpl"}>
  <{include file="tpl/footer.tpl"}>
<{/if}>

<style>
  .fab-fixed-wrap .fab {
    display: block;
    width: 56px;
    height: 56px;
    border-radius: 50%;
    color: white;
    background-color: #0c9;
    text-align: center;
    box-shadow: 0 3px 3px rgba(0, 0, 0, 0.16);
    text-decoration: none;
    display: flex;
    line-height: 1.2;
    align-items: center;
    justify-content: center;
  }
  .fab-fixed-wrap .fab.fab-facebook {
    /* background-color: #4080ff; */
    background-color: #f4623a;
  }
  .fab-fixed-wrap .fab.fab-line {
    background-color: #0b0;
  }
  .badge-counter {
    position: absolute;
    transform: scale(.7);
    transform-origin: top right;
    top: 10px;
    right: 10px;
    /* color:red;
    background: #fff; */
  }
</style>

<div class="fab-fixed-wrap with-navbar-bottom shopCart" style="bottom: 4.6875rem;position: fixed;z-index: 1035;right: .9375rem;bottom: .9375rem;">
  <a href="cart.php?op=order_form" class="fab fab-facebook mp-click" data-toggle="tooltip" title="您選了<{$smarty.session.cartAmount}>個商品">
      <i class="fas fa-shopping-cart"></i> 
    <span class="badge badge-danger badge-counter"><{$smarty.session.cartAmount}></span> 
  </a>
</div>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
