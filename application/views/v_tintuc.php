<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>THÔNG TIN DỊCH BỆNH</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<!-- body -->

<body>
    <div class="header_main">
        <div class="container">
            <div class="logo"><a href="index.html"><img src="images/logo2.png"></a></div>
        </div>
    </div>
    </div>
    <div class="header">
        <div class="container">
            <!--  header inner -->
            <div class="col-sm-12">

                <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="http://localhost/web/trang_chu">Trang Chủ<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/web/tin_tuc">Thông tin dịch bệnh</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/web/Khai_bao ">Khai Báo Y Tế</a>
                                </li>
                                <li class="#" href="#">
                                    <a class="nav-link" href="http://localhost/web/Diem_danh">Điểm danh</a>
                                </li>
                                <li class="nav-item" href="#">
                                    <a class="nav-link" href="http://localhost/web/thongbaonguyco">Thông Báo Nguy Cơ</a>
                                </li>
                                <li class="nav-item" href="#">
                                    <a class="nav-link" href="http://localhost/web/Lien_he">Liên Hệ</a>
                                </li>
                                <!-- <li class="nav-item" href="#">
                                    <a class="nav-link" href="test.html">test</a>
                                </li> -->
                                <!-- <li class="last"><a href="#"><img src="images/search-icon.png" alt="icon"></a></li> -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div> <!--  header end -->
    <!-- Blog Start -->

    <div class="blog_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="blog_text">Thông Tin Dịch Bệnh</h1>
                </div>
            </div>
            <?php foreach ($noi_dung_tin_tuc as $row) {; ?>
              <div style="border: 1px solid black; margin-top: 20px;"> <table  style="margin-top : 10px;width:100%;">
                    <tr>
                        <td colspan="1" rowspan="3" style="width: 30%; height:50px;"><img style="width: 100%; height:150px; " src="images/<?php echo $row->pic; ?>"></td>
                        <td style="max-width: 70%;">
                            <div>
                                <h4 style="font-weight: bold;margin-left: 20px;"><?php echo $row->tieude; ?>
                            </div>
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="max-width: 70%; text-align: left;">
                            <div>
                                <p><?php echo $row->mota; ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="max-width: 70%;">
                                <p style="margin: 0px;padding: 0px; text-align: right;font-family: Arial; " ><?php echo $row->ngaytao; ?></p>
                            </div>
                        </td>
                    </tr>
                </table>
                </div> 
            <?php }; ?>




            <!-- <--   <div class="blog_section_2">
    	    	<div class="row">
    	    		<div class="col-sm-4">
    	    			<div class="section_1">
    	    				<div><img src="images/code.jpg" style="max-width: 100%;"></div>
    			            <button type="button" class="date-bt">26 JULY	 2019</button>
    	    				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
    	    			</div>
    	    		</div>
    	    		<div class="col-sm-4">
    	    			<div class="section_1">
    	    				<div><img src="images/code.jpg" style="max-width: 100%;"></div>
    			            <button type="button" class="date-bt">26 JULY	 2019</button>
    	    				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
    	    			</div>
    	    		</div>
    	    		<div class="col-sm-4">
    	    			<div class="section_1">
    	    				<div><img src="images/code.jpg" style="max-width: 100%;"></div>
    			            <button type="button" class="date-bt">26 JULY	 2019</button>
    	    				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
    	    			</div>
    	    		</div>
    	    	</div>
    	    </div> -->
        </div>
    </div>

    <!--blog end -->
    <!--Contact_section start -->
    <div class="touch_section">
        <div class="container">
            <h1 class="touch_text">Let's Get In Touch!</h1>
        </div>
    </div>

    <div class="lets_touch_main">
        <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.58836682679!2d105.82662451484147!3d21.009131393824166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac800f450807%3A0x419a49bcd94b693a!2zSOG7jWMgdmnhu4duIE5nw6JuIGjDoG5n!5e0!3m2!1svi!2s!4v1618157338221!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
        </div>
    </div>
    <!--touch_section end -->
    <!--Contact_section start -->
    <div class="contact_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="touch_text">Thông Tin Liên Hệ</h1>
                </div>
            </div>
        </div>
        <div class="contact_section_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="images/map-icon.png" style="max-width: 100%;padding-left: 30px; ">
                            <p class="email-text"><a href="#">12 Chùa Bộc, Đống Đa, Hà Nội<br>Việt Nam</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="images/call-icon.png" style="max-width: 100%;padding-left: 30px;">
                            <p class="email-text"><a href="#">+841234568888</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="images/email-icon.png" style="max-width: 100%; padding-left: 30px;">
                            <p class="email-text"><a href="#">DichCovid@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact_section end -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="copyright_text">© 2021 All Rights Reserved. <a href="https://www.facebook.com/tran.trung.3382/">Trung trần</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>