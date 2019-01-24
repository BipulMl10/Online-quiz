<?php
header('Location: signup.html');
$conn=mysqli_connect("localhost","root","","project");
$name=$_POST['name'];
$email=$_POST['email'];
$pas=$_POST['psw'];
$dob=$_POST['dt'];
$phone=$_POST['phone'];
$status=$_POST['status'];
$photo=$_FILES['myimage'];
$filename=$photo['name'];
$tempname=$photo['tmp_name'];
$folder="image/".$filename;

move_uploaded_file($tempname,$folder);


$query1="SELECT * FROM login WHERE email='$email'";
$get=mysqli_query($conn,$query1);
if(mysqli_num_rows($get)>0)
{
  $msg1 = "already exist!";
  header("Location:signup.php?msg1=$msg1");

}

else{

  $query2="CREATE TABLE `$email`( `id` INT NOT NULL AUTO_INCREMENT , `marks` INT NOT NULL,`test` VARCHAR(300) NOT NULL,`time` INT NOT NULL ,PRIMARY KEY (`id`)) ENGINE = InnoDB; ";
  mysqli_query($conn,$query2); 
  $query="INSERT INTO login(name,email,password,dob,status,phoneno,photo)VALUES('$name','$email','$pas',$dob,'$status','$phone','$folder')";
  mysqli_query($conn,$query); 
  $msg = "wrong";
header("Location:signup.php?msg=$msg");
}
mysqli_close($conn);
?>