<?php
session_start();
?>
<?php
$id=$_SESSION['id'];
$pass=$_POST['currentpassword'];
$newpass=$_POST['newpassword'];

$conn=mysqli_connect("localhost","root","","project");

$query="SELECT * FROM login WHERE password='$pass' and id=$id";
$get=mysqli_query($conn,$query);
if(mysqli_num_rows($get)>0){

    $query1="UPDATE login SET password='$newpass' WHERE id=$id";
    mysqli_query($conn,$query1);
$msg = "Password Changed";
header("Location:pass1.php?msg=$msg");
?>
<?php
}
else{

$msg = "Current Password Incorrect!";
header("Location:pass1.php?msg=$msg");
?>
<?php
}
mysqli_close($conn);
?>