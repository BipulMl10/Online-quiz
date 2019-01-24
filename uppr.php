<?php
session_start();
?>

<?php

$conn=mysqli_connect("localhost","root","","project");
$id=$_SESSION['id'];
$pass=$_SESSION['password'];
$dob=$_POST['dt'];
$phone=$_POST['phone'];
$photo=$_FILES['myimage'];
$filename=$photo['name'];
$tempname=$photo['tmp_name'];
$folder="image/".$filename;


move_uploaded_file($tempname,$folder);


$query="SELECT * FROM login WHERE password='$pass' and id=$id";
$get=mysqli_query($conn,$query);

if(mysqli_num_rows($get)>0){

    $query3="UPDATE login SET photo='$folder' WHERE id=$id";
    
    mysqli_query($conn,$query3);

    $query1="UPDATE login SET phoneno='$phone' WHERE id=$id";
    mysqli_query($conn,$query1);
    $query2="UPDATE login SET dob='$dob' WHERE id=$id";
    
    mysqli_query($conn,$query2);
    $msg = "wrong";
    header("Location:uppro.php?msg=$msg");
    ?>
<?php
}
else{
    $msg = "wrong";
header("Location:uppro.php?msg=$msg");
    ?>

<?php
}
header("location:uppro.php");
mysqli_close($conn);
?>