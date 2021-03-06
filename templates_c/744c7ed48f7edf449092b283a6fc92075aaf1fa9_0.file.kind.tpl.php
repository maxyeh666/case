<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-04 22:17:41
  from 'E:\xampp\htdocs\case\templates\tpl\kind.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5fb885b50518_81321845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '744c7ed48f7edf449092b283a6fc92075aaf1fa9' => 
    array (
      0 => 'E:\\xampp\\htdocs\\case\\templates\\tpl\\kind.tpl',
      1 => 1583331460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5fb885b50518_81321845 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['op']->value == "op_list") {?>
  <div class="row mb-2">
    <div class="cols-sm-4">
      <select name="kind" id="kind" class="form-control" onchange="location.href='?kind='+this.value">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kinds']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['kind']->value == ((string)$_smarty_tpl->tpl_vars['row']->value['value'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </div>
  </div>
  <table class="table table-striped table-bordered table-hover table-sm">
    <thead class="thead-light text-center">
      <tr>
        <th scope="col">標題</th>
        <th scope="col">狀態</th>
        <th scope="col">
          <a href="kind.php?op=op_form&kind=<?php echo $_smarty_tpl->tpl_vars['kind']->value;?>
"><i class="fas fa-plus"></i>新增</a>
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <tr class="text-center">
          <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
          <td class="align-middle"><?php if ($_smarty_tpl->tpl_vars['row']->value['enable']) {?><i class="fas fa-check"></i><?php }?></td>
          <td class="align-middle">
            <a href="kind.php?op=op_form&kind=<?php echo $_smarty_tpl->tpl_vars['row']->value['kind'];?>
&sn=<?php echo $_smarty_tpl->tpl_vars['row']->value['sn'];?>
"><i class="fas fa-edit"></i></a>
            <a href="javascript:void(0);" onclick="op_delete('<?php echo $_smarty_tpl->tpl_vars['row']->value['kind'];?>
',<?php echo $_smarty_tpl->tpl_vars['row']->value['sn'];?>
);"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
      <?php
}
} else {
?>
        <tr>
          <td colspan="3" class="text-center">目前沒有資料</td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
  <?php echo '<script'; ?>
>
    function op_delete(kind,sn){
      Swal.fire({
        title: '你確定要刪除?',
        text: "你將無法還原它!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '確定',
        cancelButtonText: '取消'
      }).then((result) => {
      if (result.value) {
        document.location.href="kind.php?op=op_delete&kind=" + kind + "&sn=" + sn;
      }
      })
    }
  <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['op']->value == "op_form") {?>
  <div class="container" style="margin: 100px auto 0px auto;">
    
    <form action="kind.php" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
    
      <div class="row">         
        <!--標題-->
        <div class="col-sm-4">
          <div class="form-group">
            <label>標題<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
          </div>
        </div>
        <!--排序-->
        <div class="col-sm-4">
          <div class="form-group">
            <label>排序</label>
            <input type="text" class="form-control" name="sort" id="sort" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sort'];?>
">
          </div>
        </div>
        <!-- 類別狀態 -->
        <div class="col-sm-4">
          <div class="form-group">
            <label style="display:block;">類別狀態</label>
            <input type="radio" name="enable" id="enable_1" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['enable'] == '1') {?>checked<?php }?>>
            <label for="enable_1" style="display:inline;">啟用</label>&nbsp;&nbsp;
            <input type="radio" name="enable" id="enable_0" value="0" <?php if ($_smarty_tpl->tpl_vars['row']->value['enable'] == '0') {?>checked<?php }?>>
            <label for="enable_0" style="display:inline;">停用</label>
          </div>
        </div>
      </div>
      <div class="text-center pb-20">
        <input type="hidden" name="op" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['op'];?>
">
        <input type="hidden" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sn'];?>
">
        <input type="hidden" name="kind" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['kind'];?>
">
        <button type="submit" class="btn btn-primary">送出</button>
      </div>
    </form>    
    <!-- 表單驗證 -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <style>
      .error{
        color: #dc3545
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
            "title" : {
              required: true
            }
          },
          messages: {
            "title" : {
              required: "必填"
            }
          }
        });
      });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/My97DatePicker/WdatePicker.js'><?php echo '</script'; ?>
>
  </div>
<?php }
}
}
