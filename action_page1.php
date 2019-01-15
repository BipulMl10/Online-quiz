
<?php

$name=$_POST['name'];
$email=$_POST['email'];
$pas=$_POST['psw'];
$dob=$_POST['dt'];
$phone=$_POST['phone'];
$status=$_POST['status'];

$conn=mysqli_connect("localhost","root","","project");

$query1="SELECT * FROM login WHERE email='$email'";
$get=mysqli_query($conn,$query1);
if(mysqli_num_rows($get)>0)
{
    header('Location: signup.html');
    echo '<script language="javascript">';
    echo 'alert("Already have a account!")';
    echo '</script>';

}

else{
  $query="INSERT INTO login(name,email,password,dob,status,phoneno)VALUES ('$name','$email','$pas',$dob,'$status',$phone)";
  mysqli_query($conn,$query);
}  
header("location:logtest.html"); 
mysqli_close($conn);

?>