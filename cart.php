<?php
require_once 'head.php';
 
/* 過濾變數，設定預設值 */
$op = system_CleanVars($_REQUEST, 'op', 'op_list', 'string');
$sn = system_CleanVars($_REQUEST, 'sn', '', 'int');


/* 程式流程 */
switch ($op){
	case "order_insert" :
    $msg = order_insert();
    redirect_header("index.php", $msg, 3000);    
		exit; 

  case "add_cart" :
    $msg = add_cart($sn);
    redirect_header("cart.php", $msg, 3000);    
    exit; 
    
	case "order_form" :
    $msg = order_form();
    break;  

  default:
    $op = "op_list";
    op_list();
    break;  
}
/*---- 將變數送至樣版----*/
$mainMenus = getMenus("cartMenu");

$smarty->assign("mainMenus", $mainMenus);

$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op);
   
/*---- 程式結尾-----*/
$smarty->display('theme.tpl');

//----函數區
/*==========================
  新增訂單
==========================*/
function order_insert(){
  global $db;			 
 
  $_POST['name'] = db_filter($_POST['name'], '');//類別
  $_POST['tel'] = db_filter($_POST['tel'], '');//標題
  $_POST['email'] = db_filter($_POST['email'], '');
  $_POST['kind_sn'] = db_filter($_POST['kind_sn'], '桌號');
  $_POST['ps'] = db_filter($_POST['ps'], '');
  $_POST['uid'] = db_filter($_POST['uid'], '');
  $_POST['date'] = strtotime("now");
  
  #訂單主檔
  $sql="INSERT INTO `orders_main` 
  (`name`, `tel`, `email`, `ps`, `uid`, `date`, `kind_sn`)
  VALUES 
  ('{$_POST['name']}', '{$_POST['tel']}', '{$_POST['email']}', '{$_POST['ps']}', '{$_POST['uid']}', '{$_POST['date']}', '{$_POST['kind_sn']}')    
  "; //die($sql);
  $db->query($sql) or die($db->error() . $sql);
  $sn = $db->insert_id;  
  
  #訂單明細檔
  $sort = 1;
  $Total = 0;
  foreach($_POST['amount'] as $prod_sn => $amount){
    $prod = getProdsBySn($prod_sn);
    $prod['title'] = db_filter($prod['title'], '');
    $prod['price'] = (int)$prod['price'];
    $Total += $prod['price'] * $amount;//小計累計
    $sql="INSERT INTO `orders` 
                      (`orders_main_sn`, `prod_sn`, `title`, `amount`, `price`, `sort`)
                      VALUES 
                      ('{$sn}', '{$prod_sn}', '{$prod['title']}', '{$amount}', '{$prod['price']}', '{$sort}')
    ";
    $db->query($sql) or die($db->error() . $sql);
    $sort++;
  }

  #更新訂單主檔
  $sql="UPDATE  `orders_main` SET
                `total` = '{$Total}'
                WHERE `sn` = '{$sn}'  
  ";
  $db->query($sql) or die($db->error() . $sql);
  unset($_SESSION['cart']);
  unset($_SESSION['cartAmount']);

}

function order_form(){
  global $db,$smarty;
    $row['uid'] = isset($_SESSION['user']['uid']) ? $_SESSION['user']['uid'] : "" ;
    $row['name'] = isset($_SESSION['user']['name'])? $_SESSION['user']['name'] : "";
    $row['tel'] = isset($_SESSION['user']['tel'])? $_SESSION['user']['tel'] : "";
    $row['email'] = isset($_SESSION['user']['email'])? $_SESSION['user']['email'] : "";
  
    $row['kind_sn'] = "";//類別值
    $row['kind_sn_options'] = getProdsOptions("orderKind");
    $row['op'] = "order_insert";
    $smarty->assign("row", $row);

}
function add_cart($sn){
  global $db;
  $row = getProdsBySn($sn);
  if($row['enable']){       
    $row['sn'] = (int)$row['sn'];//分類
    $row['title'] = htmlspecialchars($row['title']);//標題
    $row['price'] = (int)$row['price'];//價格
    $row['prod'] = getFilesByKindColsnSort("prod",$row['sn']); 
    $row['amount'] = isset($_SESSION['cart'][$sn]['amount']) ? $_SESSION['cart'][$sn]['amount']++ : 1;
    
    $_SESSION['cart'][$sn] = $row;
    $_SESSION['cartAmount'] = count($_SESSION['cart']);
    
  }
  return "加入購物車成功";
}

function op_list(){
  global $db,$smarty;

  $sql = "SELECT a.sn,a.title,price,
                 b.title as kinds_title
          FROM `prods` as a
          LEFT JOIN `kinds` as b on a.kind_sn=b.sn
          WHERE a.`enable`='1'
          ORDER BY a.date desc
  ";//die($sql);

  #---分頁套件(原始$sql 不要設 limit)
  include_once _WEB_PATH."/class/PageBar/PageBar.php";
  $pageCount = 8;
  $PageBar = getPageBar($db, $sql, $pageCount, 10);
  $sql     = $PageBar['sql'];
  $total   = $PageBar['total'];
  $bar     = ($total > $pageCount) ? $PageBar['bar'] : "";
  $smarty->assign("bar",$bar);  
  #---分頁套件(end)

  $result = $db->query($sql) or die($db->error() . $sql);
  $rows=[];//array();
  while($row = $result->fetch_assoc()){    
    $row['sn'] = (int)$row['sn'];//分類
    $row['title'] = htmlspecialchars($row['title']);//標題
    $row['price'] = (int)$row['price'];//價格
    $row['prod'] = getFilesByKindColsnSort("prod",$row['sn']);  
    //$row['kinds_title'] = htmlspecialchars($row['kinds_title']);//標題
    $rows[] = $row;
  }
  $smarty->assign("rows",$rows); 

}