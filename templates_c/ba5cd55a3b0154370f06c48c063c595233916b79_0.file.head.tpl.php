<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 00:32:49
  from '/home/dj3ugm/public_html/b11/case/templates/tpl/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5fd83140c950_09332690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba5cd55a3b0154370f06c48c063c595233916b79' => 
    array (
      0 => '/home/dj3ugm/public_html/b11/case/templates/tpl/head.tpl',
      1 => 1583254716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fd83140c950_09332690 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <h1 class="site-heading text-center text-white d-none d-lg-block">
  <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>
  <span class="site-heading-lower">Business Casual</span>
</h1> -->

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-1 fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php"><?php echo $_smarty_tpl->tpl_vars['WEB']->value['web_title'];?>
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainMenus']->value, 'mainMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mainMenu']->value) {
?>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="<?php echo $_smarty_tpl->tpl_vars['mainMenu']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['mainMenu']->value['target'] == 1) {?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mainMenu']->value['title'];?>
</a>
          </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if ($_SESSION['user']['kind'] === 1) {?>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="user.php">管理後台</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="index.php?op=logout">登出</a>
        </li>
        <?php } elseif ($_SESSION['user']['kind'] === 0) {?>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="index.php?op=logout">登出</a>
        </li>
        <?php } else { ?>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="index.php?op=login_form">登入</a>
        </li>
        <?php }?>
      </ul>
    </div>
  </div>
</nav><?php }
}
