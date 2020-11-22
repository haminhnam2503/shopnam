
    <h3>QUẢN LÝ KHÁCH HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <style>
    .th{
        box-sizing: border-box; padding: 10px 15px; width: 220px; vertical-align: top; color: #4f4f4f; background: #ccc9c96b;
    }
    .td{
        box-sizing: border-box; padding: 10px 15px; flex: 1 1 0%; border-right: 0px;
    }
    .tr1{
        box-sizing: border-box; font-size: 13px; border-bottom: 0px; background-color: #ccc9c9c4;
    }
    .tr2{
        box-sizing: border-box; font-size: 13px; border-bottom: 0px; 
    }
    </style>
    <form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
        <table style="max-width: 100%; border-spacing: 0px; width: 100%; color: #242424; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify;">
            <tbody  style="box-sizing: border-box;">
            <input  name="id" type="hidden" value="<?=$id?>">
            <tr class="tr1">
                <th scope="col" class="th">HỌ VÀ TÊN</th>
                <td class="td"><input name="fullname" type="text" value="<?= $fullname ?>"><label style="color:red"><?= (isset($errors['fullname']) ? $errors['fullname'] : '') ?></label></td>
            </tr>


            <tr class="tr2">
                <th scope="col" class="th">Tên đăng nhập</th>
                <td class="td"><input name="username" type="text" value="<?= $username ?>"><label style="color:red"><?= (isset($errors['username']) ? $errors['username'] : '') ?></label></td>
            </tr>
            
            <tr class="tr1">
                <th scope="col" class="th">MẬT KHẨU</th>
                <td class="td"><input name="password" type="password" value="<?= $password ?>"><label style="color:red"><?= (isset($errors['password']) ? $errors['password'] : '') ?></label></td>
            </tr>      


            <tr class="tr2">
                <th scope="col" class="th">XÁC NHẬN MẬT KHẨU</th>
                <td class="td"><input name="password2" type="password" value="<?= $password ?>"><label style="color:red"><?= (isset($errors['password2']) ? $errors['password2'] : '') ?></label></td>
            </tr>


            <tr class="tr1">
                <th scope="col" class="th">ĐỊA CHỈ EMAIL</th>
                <td class="td"><input name="email" type="email" value="<?= $email ?>"><label style="color:red"><?= (isset($errors['email']) ? $errors['email'] : '') ?></label></td>
            </tr>


            <tr class="tr2">
                <th scope="col" class="th">HÌNH ẢNH</th>
                <td class="td">
                    <input name="image" type="hidden"  value="<?= $image ?>">
                    <input name="image" type="file"> <img src="../../content/images/users/<?= $image ?>" alt="" width="100px !important">
                <label style="color:red"><?= (isset($errors['image']) ? $errors['image'] : '') ?></label></td>
            </tr>

            <tr class="tr1">
                <th scope="col" class="th">Đia chỉ</th>
                <td class="td"><input name="address" type="text" value="<?= $address ?>"><label style="color:red"><?= (isset($errors['address']) ? $errors['address'] : '') ?></label></td>
            </tr>


            <tr class="tr2">
                <th scope="col" class="th">Số điện thoại</th>
                <td class="td"><input name="phone" type="text" value="<?= $phone ?>"><label style="color:red"><?= (isset($errors['phone']) ? $errors['phone'] : '') ?></label></td>
            </tr>


            <tr class="tr1">
                <th scope="col" class="th">Gioi tinh</th>
                <td class="td">
                    <div>
                        <label><input name="gender"<?php if($gender == 1 ){echo"checked";}?>  value="1" type="radio">nam</label>
                        <label><input name="gender"<?php if($gender == 0 ){echo"checked";}?> value="0" type="radio" >nữ</label>
                    </div>
                </td>
            </tr>

            <tr style="display: none;" >
                <th scope="col" class="th">VAI_TRÒ</th>
                <td class="td">
                    <div>
                        <label><input name="role"<?php if($role == 1 ){echo"checked";}?> value="1" type="radio" >KHÁCH HÀNG</label>
                        <label><input name="role"<?php if($role == 0 ){echo"checked";}?> value="0" type="radio">NHÂN VIÊN</label>
                    </div>
                </td>
            </tr>
            <tr><?php date_default_timezone_set("Asia/Ho_Chi_Minh");
                $a = date("Y-m-d"); ?>
                
                <td class="td"><input name="created_at" value="<?= $created_at ?>" style="display: none;"></td>
            </tr>
            <tr>
               
                <td class="td"><input name="update_at" value="<?php echo "$a" ?>" readonly style="display: none;"></td>
            </tr>
            <tr>
            <td class="td">
                         <button name="btn_update" style="background-color: red; border:none; color:#fff; border-radius: 5px; ">Cập nhật</button>
                 <a href="<?= $SITE_URL?>/trang-chinh/index.php?Profile">Back</a>
            </td>

            </tr></tbody>
        </table>
       
    </form>
