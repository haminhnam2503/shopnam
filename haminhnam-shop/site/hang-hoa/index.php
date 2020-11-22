<?php
require '../../global.php';
require_once '../../dao/hang-hoa.php';
require "../../dao/binh-luan.php";
require_once '../../dao/loai.php';
require_once '../../dao/pdo.php';
//-------------------------------//

extract($_REQUEST);

if (exist_param("product")) {
    $loai_hang = loai_select_all();
    $count_sp1= hang_hoa_select_by_loai($cate_id);
    
    $count1 = 0;
    foreach ($count_sp1 as $iten) {
        $count1++;
      } 
      
    $banner2 =loai_select_by_id($cate_id);
     $hh_cate_id = hang_hoa_select_by_loai($cate_id);
//      $id=$cate_id;
// for($i=0; $i< count($hh_cate_id);$i++){
//     $b[]=$hh_cate_id[$i]['id'];
// }
// var_dump($b);
// echo "</br>";
// var_dump($id);
// die;

    if($count1>0){
   
    $row_per = 8; //so ban ghi
    $hang_hoa_select_page =  hang_hoa_select_by_loai_page($cate_id);}
    $VIEW_NAME = "hang-hoa/liet-ke.php";
} 
elseif (exist_param("sale_soc")) {
    $loai_hang = loai_select_all();
    // $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    $row_per = 8; //so ban ghi
    $hang_hoa_select_page_sale_soc =  hang_hoa_select_page();
    $VIEW_NAME = "hang-hoa/sale_soc.php";
} elseif (exist_param("hot_view")) {
    $loai_hang = loai_select_all();
    // $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    $row_per = 12; //so ban ghi
    $hang_hoa_select_page_hot_view =  hang_hoa_select_page_hot_view();
    $VIEW_NAME = "hang-hoa/hot_view.php";
} 



else if (exist_param("detail")) {
    $items = hang_hoa_select_by_id($id);
    $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    $binh_luan = binh_luan_select_by_hang_hoa($id);
    hang_hoa_tang_view($id);

    $VIEW_NAME = "hang-hoa/chi-tiet.php";
    unset($_SESSION['keyword']);
} else if (exist_param("add-binh-luan")) {

    if (isset($_POST) & !empty($_POST)) {
        check_login();
        extract($_REQUEST);
        if ($content != "") {
            binh_luan_insert($product_id, $content, $created_at, $user_id);
        }
        $items = hang_hoa_select_by_id($id);
        $hh_cate_id = hang_hoa_select_by_loai($cate_id);
        $binh_luan = binh_luan_select_by_hang_hoa($id);
        // hang_hoa_tang_view($id);
        $a=$_SESSION['a'];
        header("location: $a");
        unset($_SESSION['keyword']);
    } else {
        $items = hang_hoa_select_by_id($id);
        $hh_cate_id = hang_hoa_select_by_loai($cate_id);
        $binh_luan = binh_luan_select_by_hang_hoa($id);
        hang_hoa_tang_view($id);

        $VIEW_NAME = "hang-hoa/chi-tiet.php";
        unset($_SESSION['keyword']);
    }
} 

else if (exist_param("keywords")) {
    if($keywords!=""){
    $_SESSION['keyword']=$keywords;
    $count_sp=hang_hoa_select_keyword($_SESSION['keyword']);
    $count = 0;
    foreach ($count_sp as $iten) {
      $count++;
    } 
    if($count>0){
    $row_per = 12;
    $items = hang_hoa_select_page_select_keyword($_SESSION['keyword']);}
    $VIEW_NAME = "hang-hoa/seach.php";}
    else{
        $a=$_SESSION['a'];
        header("location: $a");
    }
}
 else if (exist_param("btn_list")) {
    $loai_hang = loai_select_all();
    $count_sp1= hang_hoa_select_by_loai($cate_id);
    $count1 = 0;
    foreach ($count_sp1 as $iten) {
        $count1++;
      } 
     
    $banner2 =loai_select_by_id($cate_id);
     $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    if($count1>0){
   
    $row_per = 8; //so ban ghi
    $hang_hoa_select_page =  hang_hoa_select_by_loai_page($cate_id);}
    $VIEW_NAME = "hang-hoa/liet-ke.php";
} else if (exist_param("btn_list_soc")) {
    $loai_hang = loai_select_all();
    
    $row_per = 8; //so ban ghi
    $hang_hoa_select_page_sale_soc =  hang_hoa_select_page();
    $VIEW_NAME = "hang-hoa/sale_soc.php";
    unset($_SESSION['keyword']);
}
else if (exist_param("btn_list_view")) {
    $loai_hang = loai_select_all();
    // $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    $row_per = 12; //so ban ghi
    $hang_hoa_select_page_hot_view =  hang_hoa_select_page_hot_view();
    $VIEW_NAME = "hang-hoa/hot_view.php";
    unset($_SESSION['keyword']);
}
else if (exist_param("btn_list_keywords")) {
    
    $count_sp=hang_hoa_select_keyword($_SESSION['keyword']);
    $count = 0;
              foreach ($count_sp as $iten) {
                $count++;
              } 
              if($count>0){
    $row_per = 12;
    $items = hang_hoa_select_page_select_keyword($_SESSION['keyword']);}
    $VIEW_NAME = "hang-hoa/seach.php";
}
$loai_hang = loai_select_all();

require '../layout.php';
// unset($_SESSION['keyword']);;
