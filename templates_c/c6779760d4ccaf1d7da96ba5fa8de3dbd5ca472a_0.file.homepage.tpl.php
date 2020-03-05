<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 13:39:23
  from 'D:\maxyeh\PHP\xampp\htdocs\b11\case\templates\tpl\homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e60908bdbf0b6_49716442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6779760d4ccaf1d7da96ba5fa8de3dbd5ca472a' => 
    array (
      0 => 'D:\\maxyeh\\PHP\\xampp\\htdocs\\b11\\case\\templates\\tpl\\homepage.tpl',
      1 => 1583385563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60908bdbf0b6_49716442 (Smarty_Internal_Template $_smarty_tpl) {
?>  <section class="page-section clearfix">
    <div class="container">
  
      <div class="row justify-content-center">
  
        <div class="col-lg-12">
          <?php if ($_smarty_tpl->tpl_vars['mainSlides']->value) {?>
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainSlides']->value, 'mainSlide', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['mainSlide']->value) {
?>
                  <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['index']->value == '0') {?>class="active"<?php }?>></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ol>
              <div class="carousel-inner" role="listbox">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainSlides']->value, 'mainSlide', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['mainSlide']->value) {
?>
                  <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['index']->value == '0') {?>active<?php }?>">
                    <img class="d-block img-fluid w-100" src="<?php echo $_smarty_tpl->tpl_vars['mainSlide']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['mainSlide']->value['title'];?>
">
                  </div> <!-- 900x350 -->
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
img/intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-lower">資材多，超好逛</span>
          </h2>
          <p class="mb-3 text-left">眾多資材供您選購，讓喜愛園藝的您不缺工具和材料。</p>
          <div class="intro-button mx-auto">
            <!-- <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="font-weight-bold">公司宗旨</span>
            </h2>
            <p class="mb-0 text-left">我們秉持服務熱誠，為客戶朋友們提供園藝所需的各種資材，親手為自己的居住環境設計出個人風格，在挑選園藝資材及種植的過程中，也增加生活樂趣。</p>
          </div>
        </div>
      </div>
    </div>
  </section><?php }
}
