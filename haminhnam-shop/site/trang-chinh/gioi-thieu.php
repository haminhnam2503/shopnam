<?php $_SESSION['a'] = $_SERVER['REQUEST_URI'] ?>
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
                        <h1></h1>
                        <h1 style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Roboto, Helvetica, Arial, sans-serif; line-height: 28px; color: black; font-size: 17px; padding: 15px 0px 5px; border-bottom: 2px solid #dddddd; background-color: #ffffff;">Giới thiệu về Hà Minh Nam</h1>
                        <div class="content" style="box-sizing: border-box; color: black; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;">
                            <h2>Giáo viên: Lê Thanh Của</h2>
                            <h2>Đây là bài tập Website bán hàng của Hà Minh Nam và Lê Thị Yến</h2>
                            <h2>Mã sinh viên: 17103100220 - 17103100225</h2>
                      
                            
                            <p>Quý khách có nhu cầu liên lạc, trao đổi hoặc đóng góp ý kiến, vui lòng tham khảo các thông tin sau:</p>


                            <h1>Liên Hệ: </h1>
                            <ul>
                                <li class="li">Liên lạc qua điện thoại: 0385991998</li>
                                <li class="li">Liên lạc qua email: Truy cập:<a style="box-sizing: border-box; background-color: transparent; text-decoration-line: none; color: #00aaf1;" href="http://fb.com/haminhnam2503" target="_blank" rel="noopener">Facebook: Hà Minh Nam</a></li>
                               
                                <li class="li">Đối tác có nhu cầu hợp tác quảng cáo hoặc kinh doanh: <a style="box-sizing: border-box; background-color: transparent; text-decoration-line: none; color: #00aaf1;" title="Email đến PhuongDinh" href="https://gmail.com/">Hà Minh Nam</a></li>
                            </ul>
                            <br style="box-sizing: border-box;" />
                            
                            <h3>Thông tin về công ty</h3>
                            <ul>
                                <li class="li">Địa chỉ: Láng Hạ, Ba Đình, Hà Nội</li>
                            </ul>
                            <br style="box-sizing: border-box;" />
                            <h3>Địa chỉ</h3>
                            <div style="box-sizing: border-box; text-align: center;"><iframe style="box-sizing: border-box; margin: 30px 0px; width: 800px; max-width: 800px; border-width: 0px; border-style: initial;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.1270742437996!2d105.82449731476396!3d21.067586285977306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aaf7f2186e01%3A0x410bbcb4a6116d83!2zMjM4IMOCdSBDxqEsIFF14bqjbmcgQW4sIFTDonkgSOG7kywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1602607361147!5m2!1svi!2s" width="800" height="450" frameborder="0" allowfullscreen=""></iframe></div>
                        </div>

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

    .li {
        box-sizing: border-box;
        margin-bottom: 5px;
    }

    .aa {
        background-color: #fff;
        width: 100%;
        margin-bottom: 2%;
        padding-right: 15px;
        padding-left: 15px;
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
    }

    ul {
        box-sizing: border-box;
        margin-top: 0px;
        margin-bottom: 10px;

    }
</style>
<!-- / product category -->