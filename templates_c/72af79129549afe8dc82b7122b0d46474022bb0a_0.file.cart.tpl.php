<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 14:52:41
  from 'D:\maxyeh\PHP\xampp\htdocs\b11\case\templates\tpl\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e60a1b98e45f8_71716262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72af79129549afe8dc82b7122b0d46474022bb0a' => 
    array (
      0 => 'D:\\maxyeh\\PHP\\xampp\\htdocs\\b11\\case\\templates\\tpl\\cart.tpl',
      1 => 1583391153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60a1b98e45f8_71716262 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- 購物車頁面 -->

<!-- 購物車 -->
<link rel="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
cart/css/cart.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
cart/js/cart.js"><?php echo '</script'; ?>
>

<!-- Bootstrap core JavaScript -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

<!-- sweetlaert2 -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['op']->value == "op_list") {?>  
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
                <div class="card h-100  product">
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
                      <a href="javascript:void(0)" class="btn btn-primary btn-sm addCart">加入購物車</a>
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

  </section>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['op']->value == "order_form") {?>
  <div class="container mt-5" style="margin-top: 100px!important;>
    <h1 class="text-center">點餐訂單</h1>
    <form  role="form" action="cart.php" method="post" id="myForm" >        
      <div class="row">
          <!--姓名-->              
          <div class="col-sm-3">
              <div class="form-group">
                  <label><span class="title">姓名</span><span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
              </div>
          </div>
          <!--電話-->              
          <div class="col-sm-3">
              <div class="form-group">
                  <label><span class="title">電話</span><span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="tel" id="tel" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
">
              </div>
          </div>
          <!--email-->              
          <div class="col-sm-3">
              <div class="form-group">
                  <label><span class="title">email</span><span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
">
              </div>
          </div>
                  
          <!--分類-->              
          <div class="col-sm-3">
            <div class="form-group">
                <label>桌號或外帶</label>
                <select name="kind_sn" id="kind_sn" class="form-control">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value['kind_sn_options'], 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['sn'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['sn'] == $_smarty_tpl->tpl_vars['row']->value['kind_sn']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
          </div>
      </div> 
      
      <div class="row">
          <div class="col-sm-12">  
              <!-- 聯絡事項 -->
              <div class="form-group">
                  <label class="control-label">備註</label>
                  <textarea class="form-control" rows="1" id="ps" name="ps"></textarea>
              </div>
          </div>
      </div>
        
      <table class="table table-striped table-bordered table-hover table-sm">
        <thead>
        <tr> 
            <th scope="col" style="width:85px;">圖片</th>
            <th scope="col">餐點名稱</th>
            <th scope="col" class="text-right" style="width:120px;">價格</th>
            <th scope="col" class="text-center" style="width:120px;">數量</th>
            <th scope="col" class="text-center" style="width:120px;">小計</th>
        </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['cart'], 'row', false, 'sn');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sn']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
                <tr>
                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['prod'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" width=80></td>
                  <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                  <td class="text-right align-middle price"><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</td>
                  <td class="align-middle">
                    <input type="number" class="form-control amount text-right" name="amount[<?php echo $_smarty_tpl->tpl_vars['row']->value['sn'];?>
]" id="amount" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['amount'];?>
" min="0" onchange="calTotal()">
                  </td>
                  <td class="text-right align-middle total">
                  </td>
                </tr>
            <?php
}
} else {
?>
                <tr>
                    <td colspan=5>目前沒有點餐</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <tr>
              <td colspan=4 class="text-right">合計</td>
              <td class="text-right" id="Total"></td>
            </tr>
        </tbody>
      </table>
  
      <?php echo '<script'; ?>
>
        function op_delete(sn){
            Swal.fire({
                title: '你確定嗎？',
                text: "您將無法還原！",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '是的，刪除它！',
                cancelButtonText: '取消'
                }).then((result) => {
                if (result.value) {
                    document.location.href="prod.php?op=op_delete&sn="+sn;
                }
            })
        }
      <?php echo '</script'; ?>
>
      <div class="text-center pb-3">
        
        <input type="hidden" name="op" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['op'];?>
">
        <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
">
        <button type="submit" class="btn btn-primary">送出</button>
      </div>
    </form>
  </div>
  <!-- 表單驗證 -->
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
  <!-- 調用方法 -->
  <style>
  .error{
    color:red;
  }
  </style>
  <?php echo '<script'; ?>
>
    $(function(){
      $("#myForm").validate({
      submitHandler: function(form) {
          form.submit();
      },
      rules: {
          'entry.1597864916' : {
          required: true
          },
          'entry.2110810376' : {
          required: true
          },
          'entry.1402899655' : {
          required: true
          }
      },
      messages: {
          'entry.1597864916' : {
          required: "必填"
          },
          'entry.2110810376' : {
          required: "必填"
          },
          'entry.1402899655' : {
          required: "必填"
          }
      }
      });
    });
  <?php echo '</script'; ?>
>
  <!-- 計算合計金額 -->
  <?php echo '<script'; ?>
>
    calTotal();
    //合計金額
    function calTotal(){
        // document.getElementsByClassName("title")[0].innerText //取標題
        // document.getElementsByClassName("amount")[0].value //取數量
        var prices = document.getElementsByClassName("price");
        var amounts = document.getElementsByClassName("amount");
        var Total = 0;
        for(var i=0; i < prices.length; i++){
            var price = document.getElementsByClassName("price")[i].innerText;
            var amount = document.getElementsByClassName("amount")[i].value;
            var price = parseInt(price);
            Total += (amount * price);//合計
            document.getElementsByClassName("total")[i].innerText = amount * price;//小計            
        }
        if(Total === 0){
            document.getElementById("Total").innerText = "";
        }else{
            document.getElementById("Total").innerText = Total;
        }
        
    }
  <?php echo '</script'; ?>
>
<?php }
}
}
