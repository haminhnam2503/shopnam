<?php
require "../../global.php";
require "../../dao/loai.php";
//--------------------------------//

check_login();

extract($_REQUEST);

if (exist_param("btn_insert")) {
    $errors = ['name' => ''];
    $pattern = ['name' => ''];
    // có dữ liệu submit đi hay không
    if (isset($_POST) & !empty($_POST)) {

        $name1 = $name;
        extract($_REQUEST);
        $pattern['name'] = "/([^\d]*)\s([^\d]*)/i";
        if ($name == "") {
            $errors['name'] = "Mời nhập tên loại";
        } else if (preg_match($pattern['name'], $name) == 0) {
            $errors['name'] = "Tên loại tối thiểu hai chữ";
        }

        $items2 = loai_select_all();
        foreach ($items2 as $item) {
            if ($name1 == $item['name']) {
                $errors['name'] = "Tên loại đã tồn tại";
            }
        }
        if (!array_filter($errors)) {
            try {
                loai_insert($name);
                unset($name);
                $MESSAGE = "Thêm mới thành công!";
                header("location: $ADMIN_URL/loai-hang");
            } catch (Exception $exc) {
                $MESSAGE = "Thêm mới thất bại!" . $exc->getMessage();
            }
        }
    }
    // $items = loai_select_all();
    $VIEW_NAME = "loai-hang/new.php";
} else if (exist_param("btn_update")) {
    $errors = ['name' => ''];
    $pattern = ['name' => ''];
    // có dữ liệu submit đi hay không
    if (isset($_POST) & !empty($_POST)) {

        $name1 = $name;
        extract($_REQUEST);
        $pattern['name'] = "/([^\d]*)\s([^\d]*)/i";
        if ($name == "") {
            $errors['name'] = "Mời nhập tên loại";
        } else if (preg_match($pattern['name'], $name) == 0) {
            $errors['name'] = "Tên loại tối thiểu hai chữ";
        }
        $loai_id = loai_select_by_id($id);
        $items2 = loai_select_all();
        // if($name1 == $loai_id['name']){
        //     $errors['name'] = "Tên loại đã tồn tại";
        // }
        foreach ($items2 as $item) {
            if ($name1 == $item['name'] && $name1 != $loai_id['name']) {
                $errors['name'] = "Tên loại đã tồn tại";
            }
        }
        if (!array_filter($errors)) {
            try {
                loai_update($id, $name);
                $MESSAGE = "Cập nhật thành công!";
            } catch (Exception $exc) {
                $MESSAGE = "Cập nhật thất bại!" . $exc->getMessage();
            }
        }
    }
    // $items = loai_select_all();
    $VIEW_NAME = "loai-hang/edit.php";

} else if (exist_param("btn_delete")) {
    $count_sp2= loai_select_all();
    $count1 = 0;
    foreach ($count_sp2 as $iten) {
        $count1++;
      }
    // $hh_cate_id = hang_hoa_select_by_loai($cate_id);
    $row_per = 4; //so ban ghi
    $items = loai_select_all();
    if($count1>7){
    try {
        loai_delete($id);
        
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!" . $exc->getMessage();
    }}
    else if($count1<=7){
        $cookieName = "customer_name";
        setcookie($cookieName,'time1', time() + (2));
    }
    // $VIEW_NAME = "loai-hang/list.php";
    header("location: $ADMIN_URL/loai-hang");
} 


else if (exist_param("btn_edit")) {
    $item = loai_select_by_id($id);
    extract($item);
    $VIEW_NAME = "loai-hang/edit.php";
} else if (exist_param("btn_new")) {

    $VIEW_NAME = "loai-hang/new.php";
} else {
    $cookieName = "customer_name";
    setcookie($cookieName,'time1', time() - (2));
    $items = loai_select_all();
    $VIEW_NAME = "loai-hang/list.php";
}

require "../layout.php";
