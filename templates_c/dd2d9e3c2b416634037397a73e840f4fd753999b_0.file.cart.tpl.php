<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-04 23:21:51
  from 'E:\xampp\htdocs\case\templates\tpl\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5fc78fbf5255_95235163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd2d9e3c2b416634037397a73e840f4fd753999b' => 
    array (
      0 => 'E:\\xampp\\htdocs\\case\\templates\\tpl\\cart.tpl',
      1 => 1583335296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fc78fbf5255_95235163 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['op']->value == "op_list") {?>  
  <section class="page-section">
    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4 text-light">園藝<small>商品列表</small></h1>

      <div class="row justify-content-center">

        <div class="col-lg-9">

          <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['prod'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"></a><!--700x400-->
                  <div class="card-body">
                    <h4 class="card-title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></h4>
                    <h5>$<?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    <div class="card">
                      <a href="#" class="btn btn-primary btn-sm" onclick="add_cart(<?php echo $_smarty_tpl->tpl_vars['row']->value['sn'];?>
);">加入購物車</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          </div>
          <!-- /.row -->
            <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>


        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  </section>
<?php }
}
}
