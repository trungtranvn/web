<!DOCTYPE html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>KHAI BÁO Y TẾ</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/style2.css"> -->
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
                                    <a class="nav-link" href="http://localhost/web/Lien_he">Liên Hệ</a>
                                </li>
                                <li class="nav-item" href="#">
                                    <a class="nav-link" href="test.html">test</a>
                                </li>
                                <li class="last"><a href="#"><img src="images/search-icon.png" alt="icon"></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div> <!-- end header end -->
    <form method="post">
        <table width="600" border="1" cellspacing="5" cellpadding="5">
            <tr>
                <td>Ho ten </td>
                <td><input type="text" name="hoten" /></td>
            </tr>
            <tr>
                <td>ma sinh vien </td>
                <td><input type="text" name="masv" /></td>
            </tr>
            <tr>
                <td>mon hoc </td>
                <td><input type="text" name="monhoc" /></td>
            </tr>
            <tr>
                <td>phong hoc</td>
                <td><input type="text" name="phonghoc" /></td>
            </tr>
            <tr>
                <td> ca hoc</td>
                <td>
                    <select style="background-color: white;" class="input-text form-control input-year" data-msg-required="Bạn chưa chọn năm sinh" name="cahoc">

                        <option value="">-Chọn-</option>

                        <option value="1">1</option>

                        <option value="2">2</option>

                        <option value="3">3</option>

                        <option value="4">4</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="diemdanh" value="Save Data" /></td>
            </tr>
        </table>

    </form>
</body>

</html>