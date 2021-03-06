<{if $op == "op_list"}>
  <div class="row mb-2">
    <div class="cols-sm-4">
      <select name="kind" id="kind" class="form-control" onchange="location.href='?kind='+this.value">
        <{foreach $kinds as $row}>
          <option value="<{$row.value}>" <{if $kind == "<{$row.value}>"}>selected<{/if}>><{$row.title}></option>
        <{/foreach}>
      </select>
    </div>
  </div>
  <table class="table table-striped table-bordered table-hover table-sm">
    <thead class="thead-light text-center">
      <tr>
        <th scope="col">標題</th>
        <th scope="col">狀態</th>
        <th scope="col">
          <a href="kind.php?op=op_form&kind=<{$kind}>"><i class="fas fa-plus"></i>新增</a>
        </th>
      </tr>
    </thead>
    <tbody>
      <{foreach $rows as $row}>
        <tr class="text-center">
          <td class="align-middle"><{$row.title}></td>
          <td class="align-middle"><{if $row.enable}><i class="fas fa-check"></i><{/if}></td>
          <td class="align-middle">
            <a href="kind.php?op=op_form&kind=<{$row.kind}>&sn=<{$row.sn}>"><i class="fas fa-edit"></i></a>
            <a href="javascript:void(0);" onclick="op_delete('<{$row.kind}>',<{$row.sn}>);"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
      <{foreachelse}>
        <tr>
          <td colspan="3" class="text-center">目前沒有資料</td>
        </tr>
      <{/foreach}>
    </tbody>
  </table>
  <script>
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
  </script>
<{/if}>

<{if $op == "op_form"}>
  <div class="container" style="margin: 100px auto 0px auto;">
    
    <form action="kind.php" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
    
      <div class="row">         
        <!--標題-->
        <div class="col-sm-4">
          <div class="form-group">
            <label>標題<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="title" id="title" value="<{$row.title}>">
          </div>
        </div>
        <!--排序-->
        <div class="col-sm-4">
          <div class="form-group">
            <label>排序</label>
            <input type="text" class="form-control" name="sort" id="sort" value="<{$row.sort}>">
          </div>
        </div>
        <!-- 類別狀態 -->
        <div class="col-sm-4">
          <div class="form-group">
            <label style="display:block;">類別狀態</label>
            <input type="radio" name="enable" id="enable_1" value="1" <{if $row.enable == '1'}>checked<{/if}>>
            <label for="enable_1" style="display:inline;">啟用</label>&nbsp;&nbsp;
            <input type="radio" name="enable" id="enable_0" value="0" <{if $row.enable == '0'}>checked<{/if}>>
            <label for="enable_0" style="display:inline;">停用</label>
          </div>
        </div>
      </div>
      <div class="text-center pb-20">
        <input type="hidden" name="op" value="<{$row.op}>">
        <input type="hidden" name="sn" value="<{$row.sn}>">
        <input type="hidden" name="kind" value="<{$row.kind}>">
        <button type="submit" class="btn btn-primary">送出</button>
      </div>
    </form>    
    <!-- 表單驗證 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <style>
      .error{
        color: #dc3545
      }
    </style>
    <script>
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
    </script>
    <script type='text/javascript' src='<{$xoAppUrl}>class/My97DatePicker/WdatePicker.js'></script>
  </div>
<{/if}>