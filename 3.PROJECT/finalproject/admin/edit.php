<?php require('top.php'); ?>
<?php
require('config.php');
$sql="SELECT * FROM admin where adminid='".$_GET["adminid"]."' ";

$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){
    $name = $row['adminName'];
    $user = $row['adminUser'];
    $email = $row['adminEmail'];
    $role = $row['role'];
    $pass = $row['adminPass'];
}
?>
<?php
  if(isset($_POST['update'])){
      $adminid=$_POST['adminid'];
      $name=$_POST['adminName'];
      $user=$_POST['adminUser'];
      $email=$_POST['adminEmail'];
      $role=$_POST['role'];
      $pass=$_POST['adminPass'];
      $result=mysqli_query($conn,"Update admin SET adminName='$name',adminUser='$user',adminEmail='$email',role='$role',adminPass='$pass'WHERE adminid=$adminid");
      if($result){
          header('location:users.php');
      }else{
          echo"Failed";
      }

  }
?>
<div class="container dashboard">
    <div class="action1">
        <h1 class="page-title" style="text-align: center;">Edit User</h1>
        <form method="post" action="">
            <input type="text" name="adminName" value="<?php echo $name;?>">

            <input type="text" name="adminUser" value="<?php echo $user;?>">

            <input type="email" name="adminEmail" value="<?php echo $email;?>">
            <input type="text" name="role" value="<?php echo $role;?>">
            <input type="password" name="adminPass" value="<?php echo $pass;?>">
            <br>
            <input type="hidden" name="adminid" value=<?php echo $_GET['adminid'] ;?>>

            <button type="submit" class="btn btn-primary" name="update">Save User</button>
        </form>
    </div>


</div>

<?php require('bot.php'); ?>
