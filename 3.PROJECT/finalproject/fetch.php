<?php
$connect = mysqli_connect("localhost", "root", "", "website");
$output = '';
$sql = "SELECT * FROM  tuyensinh WHERE Customercity LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result) > 0)
{
$output .='<h3 align="center">Thông Báo Ngày Tuyển Sinh</h3>';
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Customer ID</th>
     <th>Customer City</th>
     <th>PostalCode</th>
     <th>Daycollective</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   <td>'.$row["CustomerID"].'</td>
    <td>'.$row["Customercity"].'</td>
    <td>'.$row["PostalCode"].'</td>
    <td>'.$row["Daycollective"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>