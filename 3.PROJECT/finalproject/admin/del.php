
<?php
 require('config.php');
 $sql="DELETE FROM admin WHERE adminid='".$_GET["adminid"]."'";
 if(mysqli_query($conn,$sql)){
     header('location:users.php');
 }else{
     echo"Error deleting record:". mysqli_error($conn);
 }
?>
