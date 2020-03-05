<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 15:08:29
  from 'D:\maxyeh\PHP\xampp\htdocs\b11\case\templates\theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e60a56d8e2f85_68011900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efc5e193cbdf4046ef65fe3e3cd20a29f8cd066d' => 
    array (
      0 => 'D:\\maxyeh\\PHP\\xampp\\htdocs\\b11\\case\\templates\\theme.tpl',
      1 => 1583392108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/redirect.tpl' => 1,
    'file:tpl/head.tpl' => 1,
    'file:tpl/about.tpl' => 1,
    'file:tpl/footer.tpl' => 4,
    'file:tpl/insp.tpl' => 1,
    'file:tpl/login_form.tpl' => 1,
    'file:tpl/reg_form.tpl' => 1,
    'file:tpl/cart.tpl' => 1,
    'file:tpl/homepage.tpl' => 1,
  ),
),false)) {
function content_5e60a56d8e2f85_68011900 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Bootstrap core CSS -->
<link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/business-casual.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

<!-- 購物車 -->
<link rel="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
cart/css/cart.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
cart/js/cart.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:tpl/redirect.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:tpl/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['op']->value == 'about') {?>
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/about.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['op']->value == 'insp') {?>
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/insp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['op']->value == 'login_form') {?>
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['op']->value == 'reg_form') {?>
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/reg_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['WEB']->value['file_name'] == "cart.php") {?>
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/homepage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

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
  <a href="cart.php?op=order_form" class="fab fab-facebook mp-click" data-toggle="tooltip" title="您選了<?php echo $_SESSION['cartAmount'];?>
個商品">
      <i class="fas fa-shopping-cart"></i> 
    <span class="badge badge-danger badge-counter"><?php echo $_SESSION['cartAmount'];?>
</span> 
  </a>
</div>

<?php echo '<script'; ?>
>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
<?php echo '</script'; ?>
>
<?php }
}
