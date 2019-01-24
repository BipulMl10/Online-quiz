<?php
session_start();
?>
<?php
$code=$_POST['code'];
$email=$_POST['email'];
$pas=$_POST['psw'];
$marks=0;
$conn=mysqli_connect("localhost","root","","project");
if(!$conn)
{
    echo "NOt connected";
}
else{
    echo "connected";
}
$query="SELECT * FROM login WHERE email='$email' and password='$pas'";
$get=mysqli_query($conn,$query);
if(mysqli_num_rows($get)>0)
{
        
$query1="SELECT * FROM testtable where test='$code'";
$get=mysqli_query($conn,$query1);
if(mysqli_num_rows($get)>0)
{

    $query2="SELECT * FROM testtable where test='$code'";
    $get=mysqli_query($conn,$query2);
    $record=mysqli_fetch_array($get);

    $testname=$record['test'];
    $time=$record['time'];
    $_SESSION['testname']=$testname;
    $_SESSION['time']=$time;

    

    $query1="SELECT * FROM login WHERE email='$email' and password='$pas'";

    $query3 =mysqli_query($conn,$query1);
    $record=mysqli_fetch_array($query3);
    $name=$record["name"];
    $id=$record["email"];
    $dob=$record["dob"];
    $status=$record["status"];
    $phone=$record["phoneno"];
    $id1=$record["id"];
    $pass=$record["password"];


    $_SESSION['name']=$name;
    $_SESSION['email']=$id;
    $_SESSION['dob']=$dob;
    $_SESSION['status']=$status;
    $_SESSION['phone']=$phone;
    $_SESSION['id']=$id1;
    $_SESSION['password']=$pass;
    $msg = "Test Started";
    header("Location:tt.php?msg=$msg");

}
else{
    $msg1 = "hjsgjk";
  header("Location:logtest1.php?msg1=$msg1"); 
}
}
else
{
    $msg = "wrong";
    header("Location:logtest1.php?msg=$msg");

}

?>