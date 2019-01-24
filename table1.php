<?php
session_start();
?>
<?php

$conn=mysqli_connect("localhost","root","","project");


$testname=$_POST['test'];

$testtime=$_POST['time'];

$_SESSION['testname']=$testname;
$_SESSION['testtime']=$testtime;
    
$query1="SELECT * FROM testtable where test='$testname'";
$get=mysqli_query($conn,$query1);
if(mysqli_num_rows($get)>0)
{
  $msg1 = "hjsgjk";
  header("Location:createtest1.php?msg1=$msg1"); 
}
else{
$query="INSERT INTO testtable(test,time)VALUES('$testname','$testtime')";
  mysqli_query($conn,$query); 

     $query2="CREATE TABLE `$testname`( `id` INT NOT NULL AUTO_INCREMENT , `question` VARCHAR(300) NOT NULL , `a` VARCHAR(300) NOT NULL , `b` VARCHAR(300) NOT NULL , `c` VARCHAR(300) NOT NULL , `d` VARCHAR(300) NOT NULL , `ans` VARCHAR(300) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; ";
   mysqli_query($conn,$query2);
    header("location:createtest.php");
}

mysqli_close($conn);

?>