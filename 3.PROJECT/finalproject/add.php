<?php
require_once('admin/config.php');
if(isset($_POST['save']))
{
           
          $nganh=$_POST['nganh'];
          $diadiem=$_POST['diadiem'];
          $hoten=$_POST['name'];
          $gioitinh=$_POST['gioitinh'];
          $ngaysinh=$_POST['ngaysinh'];
          $email=$_POST['email'];
          $sdt=$_POST['sdt'];
          $time=$_POST['time'];

          $sql = "INSERT INTO tuvants (nganhhoc,diadiem,hoten,gioitinh,ngaysinh,email,sdt,thoigian)
          VALUES ('$nganh', '$diadiem', '$hoten','$gioitinh', '$ngaysinh','$email','$sdt','$time')";
          if (mysqli_query($conn, $sql)) {
            echo"Bạn đã đăng kí thành công";
            header('location:index.php');
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
          }
}
?>