
<?php
header('Location: signup.html');
$name=$_POST['name'];
$email=$_POST['email'];
$pas=$_POST['psw'];
$dob=$_POST['dt'];
$phone=$_POST['phone'];
$status=$_POST['status'];
$photo=$_FILES["myimage"]["name"];

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

  $imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

  $query="INSERT INTO login(name,email,password,dob,status,phoneno,photo)VALUES ('$name','$email','$pas',$dob,'$status','$imagetmp','$photo')";
  $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
  mysqli_query($conn,$query);
}  
header("location:signup.html"); 
mysqli_close($conn);

?>