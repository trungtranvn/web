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
  <title>KHAI BÁO Y TẾ</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <!-- <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
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
  <!--services start-->
  <div class="section_service_main">
    <div class="section_service_2">
      <h1 class="service_text">Điểm danh</h1>
    </div>
    <div class="main-block">
      <form  class="diemdanh" method="POST" action="Diem_danh/savedata">
        <div>
          <h1>Thông tin cá nhân</h1>
          <div style="width:50%; float:left;">
            <h4>Họ tên</h4>
            <input name="ten" type="text" />
          </div>
          <div style="width:50%; float:left;">
            <h4>Mã sinh viên</h4>
            <input name="masv" type="text" />
          </div>
          <div style="width:50%; float:left;">
            <h4>Tên môn học</h4>
            <input name="monhoc" type="text" />
          </div>
          <div style="width:50%; float:left;">
            <h4>Phòng Học</h4>
            <input name="phonghoc" type="text" />
          </div>
          <!-- <h4>Giới tính</h4> -->
          <div class="form-group form-inline box-gaden " style="width:50%;float:left;"> <label>Ca <em style="line-height: 1">(*)</em></label>
            <select name="ca">
              <option value="">Chọn</option>
              <option value="1" <?= set_select('ca', '1') ?>>1</option>
              <option value="2" <?= set_select('ca', '2') ?>>2</option>
              <option value="3" <?= set_select('ca', '3') ?>>3</option>
              <option value="4" <?= set_select('ca', '4') ?>>4</option>
            </select>
            <!-- <select style="background-color: white;" name="gioitinh" class="form-control inline-block form-inline input-year" data-msg-required="Bạn chưa chọn giới tính">
            <option value="">Chọn</option>
             
              
              <option value="Nam">Nam</option>
              <option value="Nu">Nữ</option>
              <option value="Khac">Khác</option>
            </select> -->
          </div>
          <!-- <input type="checkbox" name="gioitinh" /> -->
          <!-- <h5>năm sinh</h5> -->
          <div style="float: left;width: 50%;" class="form-group form-inline gender-box "> <label>Tòa Nhà<em style="line-height: 1">(*)</em></label>
            <select name="toanha">
              <option value="">Chọn</option>
              <option value="D1" <?= set_select('toanha', 'D1') ?>>D1</option>
              <option value="D2" <?= set_select('toanha', 'D2') ?>>D2</option>
              <option value="D3" <?= set_select('toanha', 'D3') ?>>D3</option>
              <option value="D4" <?= set_select('toanha', 'D4') ?>>D4</option>
              <option value="D5" <?= set_select('toanha', 'D5') ?>>D5</option>
              <option value="D6" <?= set_select('toanha', 'D6') ?>>D6</option>
              <option value="B1" <?= set_select('toanha', 'B1') ?>>B1</option>
              <option value="TRUNGTAMCNTT" <?= set_select('toanha', 'TRUNGTAMCNTT') ?>>Trung tâm công nghệ thông tin</option>
            </select>

          </div>
        </div>

        
    </div>
    <div style="text-align: center;margin-top: 20px;">
      <button name="submit" type="submit" class="btn btn-success">Điểm danh</button>
    </div>

    </form>
  </div>

  </div>
  </div>
  </div>
  <!--services end -->
  <!--Contact_section start -->
  <div class="touch_section">
    <div class="container">
      <h1 class="touch_text">Xin cảm ơn!</h1>
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
    <!-- the jquery -->

</body>

</html>
<script>
  $(document).ready(function() {
    $('#province').change(function() {
      var province_id = $('#province').val();
      if (province_id != '') {
        $.ajax({
          url: "<?php echo base_url(); ?>Khai_bao/fetch_district",
          method: "POST",
          data: {
            province_id: province_id
          },
          success: function(data) {
            $('#district').html(data);
            $('#ward').html('<option value="">Chọn Xã/Phường</option>');
          }
        });
      } else {
        $('#district').html('<option value="">Chọn Quận/Huyện</option>');
        $('#ward').html('<option value="">Chọn Xã/Phường</option>');
      }
    });

    $('#district').change(function() {
      var district_id = $('#district').val();
      if (district_id != '') {
        $.ajax({
          url: "<?php echo base_url(); ?>Khai_bao/fetch_ward",
          method: "POST",
          data: {
            district_id: district_id
          },
          success: function(data) {
            $('#ward').html(data);
          }
        });
      } else {
        $('#ward').html('<option value="">Chọn Xã/Phường</option>');
      }
    });

  });
</script>