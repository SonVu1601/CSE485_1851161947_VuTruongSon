<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylecsscon.css">
</head>

<body>
<header class="siteheader fixed-top">
    <div id="menumain">
      <div class="inner ">
        <div class="logo ">
          <a href="http://www.oude.edu.vn/">
            <img src="img/logo.png" alt="">
          </a>
        </div>
        <nav class="navbar navbar-expand-lg nav-style">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" navbar-nav menu">
              <li class="nav-item1"><a href="index.php"><i class='fas fa-home current2'></i></a></li>
              <li class="nav-item dropdown">
                <a class=" dropdown-toggle nav_content" href="#" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GIỚI THIỆU</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a
                    href="ttdt.html">Trung
                    tâm Đào tạo từ xa</a>
                  <a
                    href="mldt.html">Mạng
                    lưới đào tạo</a>
                  <a href="lienketqte.html">Liên
                    kết quốc tế</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class=" dropdown-toggle nav_content" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">SINH VIÊN TƯƠNG LAI</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a href="trangsinhvien.php">Trang sinh viên</a>
                  <a href="register.php">Cổng tuyển sinh</a>
                  
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class=" dropdown-toggle nav_content" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">SINH VIÊN HIỆN TẠI</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a href="tracuudiem.php">Tra Cứu điểm thi</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class=" dropdown-toggle nav_content" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">ĐVLK ĐÀO TẠO</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a href="csht.html">Tổng hợp các cơ sở học tập</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class=" dropdown-toggle nav_content" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">KQ KHẢO SÁT</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a href="/student/khảo-sát-sinh-viên-mới-tốt-nghiệp-76">Khảo sát sinh viên mới tốt nghiệp</a>
                </div>
              </li>
              
              <li class="nav-item dropdown">
                <a class=" dropdown-toggle nav_content" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">LIÊN HỆ</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a href="tel:18006119">Tổng đài: 18006119</a>
                </div>
              </li>
              
              
              <li class="search-item">
                <span><i class="fa fa-search"></i></span>
              </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
    <div class="page-title1">
        <h1 style="color:#fff;font-weight:bold;font-weight:bold" class="nomargin">Đăng Kí Tư Vấn Tuyển Sinh</h1>
    </div>
    <div class="padding-main">
        <h2 class="title-main">Đăng ký trực tuyến</h2>
        <div class="container234">
            <div class="formdangky">
                <form class="form-horizontal form-vertical" enctype="multipart/form-data" id="fileupload" action="add.php" method="post">


                    <!-- <form class="form-horizontal"> -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Ngành dự định học*</label>
                        <div class="col-sm-9">
                            <select class="form-control select-unit" name="nganh" id="Register_departmentId">
                                <option value="Quản trị kinh doanh">Quản trị kinh doanh</option>
                                <option value="Quản lý xây dựng">Quản lý xây dựng</option>
                                <option value="Kiểm toán">Kiểm toán</option>
                                <option value="Kế toán">Kế toán</option>
                                <option value="Công tác xã hội">Công tác xã hội</option>
                                <option value="Công nghệ sinh học">Công nghệ sinh học</option>
                                <option value="Tài chính - Ngân hàng">Tài chính - Ngân hàng</option>
                                <option value="Luật kinh tế">Luật kinh tế</option>
                                <option value="Ngôn ngữ Anh">Ngôn ngữ Anh</option>
                                <option value="Ngôn ngữ Anh chuyên ngành Tiếng Anh thương mại">Ngôn ngữ Anh chuyên ngành Tiếng Anh thương mại</option>
                                <option value="Xã hội học tổ chức và Quản lý nhân sự">Xã hội học tổ chức và Quản lý nhân sự</option>
                                <option value="Luật học">Luật học</option>
                                <option value="Xã hội học">Xã hội học</option>
                                <option value="Quản trị kinh doanh chuyên ngành Kinh doanh quốc tế">Quản trị kinh doanh chuyên ngành Kinh doanh quốc tế</option>
                                <option value="Kinh tế chuyên ngành Quản lý Công">Kinh tế chuyên ngành Quản lý Công</option>
                            </select> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Địa điểm học mong muốn*</label>
                        <div class="col-sm-9">
                            <label for="Register_contact_id"></label><select class="form-control select-unit" name="diadiem" id="Register_contact_id">
                                <option value="Trường Đại học Mở Tp.Hồ Chí Minh">Trường Đại học Mở Tp.Hồ Chí Minh</option>
                                <option value="Trung tâm Giáo dục Thường xuyên tỉnh Bình Phước">Trung tâm Giáo dục Thường xuyên tỉnh Bình Phước</option>
                                <option value="Trung tâm Giáo dục Thường xuyên tỉnh Bà Rịa - Vũng Tàu">Trung tâm Giáo dục Thường xuyên tỉnh Bà Rịa - Vũng Tàu</option>
                                <option value="Trung tâm Giáo dục Thường xuyên tỉnh Tây Ninh">Trung tâm Giáo dục Thường xuyên tỉnh Tây Ninh</option>
                                <option value="Trường Trung cấp Nghề Kinh tế Kỹ thuật số 2 Biên Hòa">Trường Trung cấp Nghề Kinh tế Kỹ thuật số 2 Biên Hòa</option>
                                <option value="Trung tâm Giáo dục Thường xuyên tỉnh Long An">Trung tâm Giáo dục Thường xuyên tỉnh Long An</option>
                                <option value="Cơ sở Mai Thị Lựu">Cơ sở Mai Thị Lựu</option>
                                <option value="Cơ sở Hồ Hảo Hớn">Cơ sở Hồ Hảo Hớn</option>
                                <option value="Trung tâm Bồi dưỡng Chính trị quận 5">Trung tâm Bồi dưỡng Chính trị quận 5</option>
                                <option value="Trung tâm Bồi dưỡng Chính trị Gò Vấp">Trung tâm Bồi dưỡng Chính trị Gò Vấp</option>
                                <option value="Trung tâm GDNN – GDTX huyện Nhà Bè">Trung tâm GDNN – GDTX huyện Nhà Bè</option>
                                <option value="Trung tâm Giáo dục thường xuyên huyện Cần Giờ">Trung tâm Giáo dục thường xuyên huyện Cần Giờ</option>
                                <option value="Phân Hiệu Trường Cán Bộ Phụ Nữ Trung Ương">Phân Hiệu Trường Cán Bộ Phụ Nữ Trung Ương</option>
                                <option value="Trung tâm Giáo dục Thường xuyên tỉnh Ninh Thuận">Trung tâm Giáo dục Thường xuyên tỉnh Ninh Thuận</option>
                                <option value="Trung tâm Đào tạo Liên kết – Trường Đại học Trà Vinh">Trung tâm Đào tạo Liên kết – Trường Đại học Trà Vinh</option>
                                <option value="Trung tâm Giáo dục Thường xuyên Gia Định">Trung tâm Giáo dục Thường xuyên Gia Định</option>
                                <option value="Trung tâm Bồi dưỡng Chính trị Quận 1">Trung tâm Bồi dưỡng Chính trị Quận 1</option>
                                <option value="Trường Trung cấp nghề Dĩ An – Bình Dương">Trường Trung cấp nghề Dĩ An – Bình Dương</option>
                                <option value="Trung tâm Giáo dục nghề nghiệp - Giáo dục thường xuyên huyện Thống Nhất">Trung tâm Giáo dục nghề nghiệp - Giáo dục thường xuyên huyện Thống Nhất</option>
                                <option value="Trung tâm GDTX&amp;KTTH-HN huyện Cần Đước, tỉnh Long An">Trung tâm GDTX&amp;KTTH-HN huyện Cần Đước, tỉnh Long An</option>
                                <option value="Trường Trung cấp Nghề Đồng Tháp Mười">Trường Trung cấp Nghề Đồng Tháp Mười</option>
                            </select><span class="help-block error" id="Register_contact_id_em_" style="display: none"></span> </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Họ tên*</label>
                        <div class="col-sm-9">
                            <input class="form-control" placeholder="Họ và tên" name="name" id="Register_full_name" type="text" maxlength="255" /> <span class="required"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Giới tính*</label>
                        <div class="col-sm-9">
                            <label class=" control-label">Nam</label>
                            <input value="0" checked="checked" name="gioitinh" id="Register_gender" type="radio" /> <label class=" control-label">Nữ</label>
                            <input value="1" name="gioitinh" id="Register_gender" type="radio" /> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Ngày sinh*</label>
                        <div class="col-sm-9">
                            <div class="control-group">
                                <div class="controls">
                                    <input type="date" name="ngaysinh" style="width:200px;border:1px solid wheat;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email*</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="email" id="Register_email" type="text" maxlength="32" /> <span class="required"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Số điện thoại*</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="sdt" id="Register_phone" type="text" maxlength="32" /> <span class="required"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Thời gian tư vấn</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="time" id="Register_advisory_time">
                                <option value="" selected="selected">Bạn muốn nhận tư vấn vào lúc nào?</option>
                                <option value="08:00 AM">08:00 AM</option>
                                <option value="08:30 AM">8:30 AM</option>
                                <option value="09:00 AM">09:00 AM</option>
                                <option value="09:30 AM">9:30 AM</option>
                                <option value="10:00 AM">10:00 AM</option>
                                <option value="10:30 AM">10:30 AM</option>
                                <option value="11:00 AM">11:00 AM</option>
                                <option value="11:30 AM">11:30 AM</option>
                                <option value="12:00 PM">12:00 PM</option>
                                <option value="12:30 PM">12:30 PM</option>
                                <option value="01:00 PM">01:00 PM</option>
                                <option value="01:30 PM">01:30 PM</option>
                                <option value="02:00 PM">02:00 PM</option>
                                <option value="02:30 PM">02:30 PM</option>
                                <option value="03:00 PM">03:00 PM</option>
                                <option value="03:30 PM">03:30 PM</option>
                                <option value="04:00 PM">04:00 PM</option>
                                <option value="04:30 PM">04:30 PM</option>
                                <option value="05:00 PM">05:00 PM</option>
                                <option value="05:30 PM">05:30 PM</option>
                                <option value="06:00 PM">06:00 PM</option>
                                <option value="06:30 PM">06:30 PM</option>
                                <option value="07:00 PM">07:00 PM</option>
                                <option value="07:30 PM">07:30 PM</option>
                                <option value="08:00 PM">08:00 PM</option>
                            </select> </div>
                    </div>

                    <div class="form-group dongycheck">
                        <div class="col-sm-1 text-right">
                        </div>
                        <div class="col-sm-11"><label class=" control-label"><input class="dongy" value="1" type="checkbox" /> Tôi xin cam kết những thông tin tôi cung cấp là hoàn toàn đúng với sự thật.</label>
                            <div class="rrr"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center col-sm-12 nophoso">
                            <button type="submit" class="btn btn-primary nophoso" name="save">Nộp hồ sơ</button>
                        </div>
                    </div>

                    <!-- </form> -->
                </form>
            </div>
        </div>
    </div>
    <div class="footer2" style="background-color: rgb(45, 45, 45);;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 p-left p-right" style="padding-top: 15px;padding-bottom: 15px;">
                    <address>
                        <p style="float: left;">
                            Copyright © 1990 - 2020 Ho Chi Minh City Open University.
                            <br>
                            Room 004, 97 Vo Van Tan street, 6th Ward, 3rd Dist., Ho Chi Minh City, Vietnam - Tel: 18006119
                            <br>
                            Website:
                            <a href="http://www.oude.edu.vn">www.oude.edu.vn</a>
                            - Email:
                            <a href="mailto:tuvan@oude.edu.vn">tuvan@oude.edu.vn</a>
                        </p>
                    </address>

                </div>
            </div>
        </div>
    </div>

    <div class="banner-phone">
        <a href="tel:18006119"></a>
    </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/ef846d6c04.js" crossorigin="anonymous"></script>



</body>

</html>