<?php
require '../../global.php';
require '../../dao/khach-hang.php';
require "../../dao/loai.php";
require "../../dao/binh-luan.php";
require_once '../../dao/hang-hoa.php';

extract($_REQUEST);
$loai_hang = loai_select_all();
if (exist_param("btn_login")) {
    $loai_hang = loai_select_all();
    $user = khach_hang_select_by_user($username);
    if ($user != false) {
        if ($user['password'] == $password) {
            $MESSAGE = "Đăng nhập thành công!";

            if(exist_param("ghi_nho")){
                add_cookie("username", $username, 30);
                add_cookie("password", $password, 30);
            }
            // else{
            //     add_cookie("username", $username, -1);
            //     add_cookie("password", $password, -1);
            // }
            $_SESSION["user"] = $user;
            $a=$_SESSION['a'];
            header("location: $a");
            // header("location:$SITE_URL/trang-chinh/");
        } else {
            $MESSAGE = "Tên đăng nhập hoặc mật khẩu sai!";
        }
    } else {
        $MESSAGE = "Tên đăng nhập hoặc mật khẩu sai!";
    }
    // $errors=['username'=>''];
    // if($username=="xuong0398"){
    //  $errors['username']= "dung mk";


    // }
    $VIEW_NAME = "tai-khoan/dg-nhap-form.php";
}
 
if (exist_param("btn_insert")) {
    $errors = ['fullname' => '', 'username' => '', 'email' => '', 'password' => '', 'password2' => '', 'address' => '', 'phone' => '', 'image' => ''];
    $pattern = ['fullname' => '', 'username' => '', 'email' => '', 'password' => '', 'password2' => '', 'address' => '', 'phone' => '', 'image' => ''];
    if (isset($_POST) & !empty($_POST)) {

        extract($_REQUEST);
        // đầu số đt
        $b=substr($phone, 1, 2);
        $e=["32","33","34","35","36","37","38","39","56","58","59","70","76","77","78","79","81","82","83","84","85","86","88","89","90","91","92","93","94","96","97","98","99"];
        foreach($e as $keyCities => $city) {
            if($b==$city){
                $vdphone="thanh cong";
            }
        }
        if(!isset($vdphone)){
            $errors['phone'] = "Đầu số điện thoại khong đúng";
        }
        // đầu số đt

        $abc=strlen($password);// đêm chuỗi
        $pattern['fullname'] = "/^([a-zA-Z ]{3,})$/i";
        $pattern['username'] = "/^[a-z0-9_]{3,30}$/i";
        $pattern['email'] = "/^(\w+@\gmail)(\.\w{2,})$/i";
        $pattern['phone'] = "/^[0-9]{10,11}$/i";
        if ($fullname == "") {
            $errors['fullname'] = "Mời nhập họ và tên";
        } else if (preg_match($pattern['fullname'], $fullname) == 0) {
            $errors['fullname'] = "nhap ten ko dung";
        }
        if ($username == "") {
            $errors['username'] = "Mời nhập tên đăng nhập";
        }
        else if (preg_match($pattern['username'], $username) == 0) {
            $errors['username'] = " Tên đăng nhập bao gồm: các ký tự a-z A-Z 0-9 tối thiểu 5 ký tự, tối đa 30 ký tự";
        }
        if ($phone == "") {
            $errors['phone'] = "Mời nhập số điện thoại";
        } else if (preg_match($pattern['phone'], $phone) == 0) {
            $errors['phone'] = "Nhập số điện thoại không đúng";
        }




        if ($email == "") {
            $errors['email'] = "Mời nhập email";
        } else if (preg_match($pattern['email'], $email) == 0) {
            $errors['email'] = "nhap email ko dung";
        }
        if ($password == "") {
            $errors['password'] = "Mời nhập password";
        }
        elseif($abc<6){
            $errors['password'] = " Password tối thiểu 6 kí tự";
        }
        if ($password2 == "") {
            $errors['password2'] = "Mời nhập password xác nhận";
        } else if ($password2 != $password) {
            $errors['password2'] = " Password xác nhận không đúng";
        }
        if ($address == "") {
            $errors['address'] = "Mời nhập dịa chỉ";
        }
        if (
            $_FILES['image']['type'] === 'image/jpg' ||
            $_FILES['image']['type'] === 'image/png' ||
            $_FILES['image']['type'] === 'image/jpeg'
        ) {

            if ($_FILES['image']['size'] <= 1572864 ) {
                $image = $_FILES['image']['name'];
            } 
            
            else {

                $errors['image'] = " Ảnh kích thước không quá 1.5mb";
            }
        }
        else if( $_FILES['image']['size']<=0){
            $errors['image'] = " Mời chọn file ảnh";
        }
        else {
            $errors['image'] = " Hệ thống chỉ nhận file .jpg .png .jpeg";
        }
        if (!array_filter($errors)) {

            $up_hinh = save_file("image", "$IMAGE_DIR/users/");
            $image = strlen($up_hinh) > 0 ? $up_hinh : 'users.jpg';

            try {
                khach_hang_insert($fullname, $username, $email, $password, $address, $phone, $gender, $created_at, $update_at, $image, $role);
                unset($fullname, $username, $email, $password, $address, $phone, $gender, $created_at, $update_at, $image, $role);
                $MESSAGE = "Thêm mới thành công!";
                
            } catch (Exception $exc) {
                $MESSAGE = "Thêm mới thất bại!" . $exc->getMessage();
            }
            $loai_hang = loai_select_all();
                $VIEW_NAME = "dg-nhap-form.php";
        } else{
            $loai_hang = loai_select_all();
        $VIEW_NAME = "dang-ky-form.php";
        }
               
    }
  
}

     else if (exist_param("login")) {
    $loai_hang = loai_select_all();
    $VIEW_NAME = "dg-nhap-form.php";
} else if (exist_param("registration")) {
    $loai_hang = loai_select_all();
    $VIEW_NAME = "dang-ky-form.php";
} else if (exist_param("Forgot_pass")) {
    $loai_hang = loai_select_all();
    $VIEW_NAME = "quen-mk-form.php";
}
if (exist_param("btn_logoff")) {
    session_unset();
}

// $loai_hang = loai_select_all();

// 
require '../layout.php';
