<?php $_SESSION['a'] = $_SERVER['REQUEST_URI'] ;
?>
<!-- menu -->
<section id="menu" style="background: black !important;">
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
<!-- catg header banner section -->

<!-- / catg header banner section -->

<!-- product category -->
<section id="aa-product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-product-details-area">
                    <!-- Tab panes -->
                    <div class="aa">
                        <h1>Hà Minh Nam có thể giúp gì cho bạn ?</h1>
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                    <a href=""><i class="fas fa-truck-moving"></i> Tôi muốn biết đơn hàng của tôi hiện ở đâu?</a>
                                </div>
                                <div class="card-body">
                                    <p>Cập nhật trạng thái đơn hàng với công cụ kiểm tra đơn hàng trực tuyến</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <a href=""><i class="fas fa-box-open"></i> Tôi muốn đổi trả sản phẩm</a>
                                </div>
                                <div class="card-body">
                                    <p>Sử dụng phiếu đăng kí đổi trả trực tuyến để bắt đầu đổi trả</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <a href=""><i class="far fa-box-up"></i>Tôi muốn hủy đơn hàng</a>
                                </div>
                                <div class="card-body">
                                    <p>Sử dụng phiếu đăng kí hủy đơn hàng trực tuyến để bắt đầu hủy đơn hàng</p>
                                </div>
                            </div>
                        </div>
                        <h3>Bạn muốn phản ánh gì về chúng tôi ?</h3>
                        <form action="index.php" method="post">
                            <input  name="pro_id" type="hidden" value="<?php if (isset($_SESSION['user'])) {
                                                                            echo $_SESSION['user']['id'];
                                                                        } ?>">
                            <?php date_default_timezone_set("Asia/Ho_Chi_Minh");
                            $a = date("Y-m-d"); ?>
                            <input name="created_at" value="<?php echo "$a" ?>" style="display: none;">
                            <textarea name="content" id="" cols="100" rows="10"></textarea><br>
                            <button name="email_submit">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<style>
    html {
        background-color: #EFEFEF !important;
    }

    .aa {
        background-color: #fff;
        width: 100%;
        margin-bottom: 2%;
        padding: 15px;
    }

    p {
        box-sizing: border-box;
        margin: 0px 0px 10px;
    }

    h3 {
        box-sizing: border-box;
        font-family: inherit;
        line-height: 1.1;
        color: inherit;
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 16px;
    }

    h1,
    h3 {
        font-weight: bold;
        padding: 15px;
    }

    a {
        font-size: 130%;
        color: #7BC6D5;
    }
</style>
<!-- / product category -->