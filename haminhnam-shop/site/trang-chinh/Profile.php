<?php $_SESSION['a'] =$_SERVER['REQUEST_URI']?>   <!-- menu -->
     <section id="menu">
         <div class="container">
             <div class="menu-area">
                 <!-- Navbar -->
                 <div class="navbar navbar-default" role="navigation">
                     <div class="navbar-header">
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                             <span class="sr-only">Toggle navigation</span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                         </button>
                     </div>
                     <div class="navbar-collapse collapse">
                         <!-- Left nav -->
                         <ul class="nav navbar-nav">
                             <li><a href="<?= $SITE_URL ?>/trang-chinh">Home</a></li>
                             <?php
                                foreach ($loai_hang as $item) {
                                    extract($item);
                                ?>
                                 <li><a href="<?= $SITE_URL ?>/hang-hoa/index.php?product&cate_id=<?= $id ?>"><?= $item['name'] ?></a></li>
                             <?php
                                }
                                ?>
                         </ul>
                     </div>
                     <!--/.nav-collapse -->
                 </div>
             </div>
         </div>
     </section>
     <!-- / menu -->


     <!-- product category -->


     <section id="aa-product-category">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 col-md-12 col-12">
                     <div class="aa-product-catg-content">
                         <div class="aa-product-catg-body" style=" margin-bottom: 20px;">
                                 <table style="max-width: 100%; border-spacing: 0px; width: 100%; color: #242424; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 14px; text-align: justify;">
                                     <tbody style="box-sizing: border-box;">
                                         <tr style="box-sizing: border-box; font-size: 13px; border-bottom: 0px; background-color: #ccc9c9c4;">
                                             <td style="box-sizing: border-box; padding: 10px 15px; width: 220px; vertical-align: top; color: #4f4f4f; background: #ccc9c96b;">Họ và Tên</td>
                                             <td style="box-sizing: border-box; padding: 10px 15px; flex: 1 1 0%; border-right: 0px;"><?= $kh['fullname'] ?></td>
                                         </tr>
                                         <tr style="box-sizing: border-box; font-size: 13px; border-bottom: 0px;">
                                             <td style="box-sizing: border-box; padding: 10px 15px; width: 220px; vertical-align: top; color: #4f4f4f; background: #ccc9c96b;">Tên đăng nhập</td>
                                             <td style="box-sizing: border-box; padding: 10px 15px; flex: 1 1 0%; border-right: 0px;"><?= $kh['username'] ?></td>
                                         </tr>
                                         <tr style="box-sizing: border-box; font-size: 13px; border-bottom: 0px; background-color: #ccc9c9c4;">
                                             <td style="box-sizing: border-box; padding: 10px 15px; width: 220px; vertical-align: top; color: #4f4f4f; background: #ccc9c96b;">Email</td>
                                             <td style="box-sizing: border-box; padding: 10px 15px; flex: 1 1 0%; border-right: 0px;"><?= $kh['email'] ?></td>
                                         </tr>
                                         <tr style="box-sizing: border-box; font-size: 13px; border-bottom: 0px;">
                                             <td style="box-sizing: border-box; padding: 10px 15px; width: 220px; vertical-align: top; color: #4f4f4f; background: #ccc9c96b;">Số điện thoại</td>
                                             <td style="box-sizing: border-box; padding: 10px 15px; flex: 1 1 0%; border-right: 0px;"><?= $kh['phone'] ?></td>
                                         </tr>
                                         <tr style="box-sizing: border-box; font-size: 13px; border-bottom: 0px; background-color: #ccc9c9c4;">
                                             <td style="box-sizing: border-box; padding: 10px 15px; width: 220px; vertical-align: top; color: #4f4f4f; background: #ccc9c96b;">Giới tính</td>
                                             <td style="box-sizing: border-box; padding: 10px 15px; flex: 1 1 0%; border-right: 0px;"><?= $kh['gender']? 'Nam' : 'Nữ' ?></td>
                                         </tr>
                                         <tr style="box-sizing: border-box; font-size: 13px; border-bottom: 0px;">
                                             <td style="box-sizing: border-box; padding: 10px 15px; width: 220px; vertical-align: top; color: #4f4f4f; background: #ccc9c96b;">Địa chỉ</td>
                                             <td style="box-sizing: border-box; padding: 10px 15px; flex: 1 1 0%; border-right: 0px;"><?= $kh['address'] ?></td>
                                         </tr>
                                         <tr style="box-sizing: border-box; font-size: 13px; border-bottom: 0px; background-color: #ccc9c9c4;">
                                             <td style="box-sizing: border-box; padding: 10px 15px; width: 220px; vertical-align: top; color: #4f4f4f; background: #ccc9c96b;"> ảnh đại diện</td>
                                             <td style="box-sizing: border-box; padding: 10px 15px; flex: 1 1 0%; border-right: 0px;"><img src="../../content/images/users/<?= $kh['image'] ?>" alt="" width="110px" height="150px"></td>
                                         </tr>


                                     </tbody>
                                 </table>
                         </div>
                         <div class="aa-product-catg-head">
                             <div class="aa-product-catg-head-left">
                                 
                                     
                                     <a href="<?= $SITE_URL?>/tai-khoan/cap-nhat-tk.php" for=""><button name="filter" style="text-decoration: none; padding: 10px;background: #218838;border: none;border-radius: 3px; color: #fff ;font-size: 20px"> Sửa thông tin</button></a>
                                 
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </section>
     <!-- / product category -->