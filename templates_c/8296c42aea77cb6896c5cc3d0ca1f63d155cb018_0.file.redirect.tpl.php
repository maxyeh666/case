<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 00:32:49
  from '/home/dj3ugm/public_html/b11/case/templates/tpl/redirect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5fd8313fb7f4_55786766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8296c42aea77cb6896c5cc3d0ca1f63d155cb018' => 
    array (
      0 => '/home/dj3ugm/public_html/b11/case/templates/tpl/redirect.tpl',
      1 => 1583247710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fd8313fb7f4_55786766 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['redirect']->value) {?>
  <!-- sweetalert2 -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.css">
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    window.onload = function(){
      Swal.fire({
      // position: 'top-end',
      icon: "<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
",
      title: "<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
",
      showConfirmButton: false,
      timer: "<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
"
      })
    }
  <?php echo '</script'; ?>
>
<?php }
}
}
