<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","project");
$ques=$_POST['question'];
$ans=$_POST['e'];
$option=$_POST['make'];
$array=array_values($option);

$a=$array[0];
$b=$array[1];
$c=$array[2];
$d=$array[3];

echo $a;
$query="INSERT INTO questionbank(question, a, b, c,d,e) VALUES ('$ques','$a','$b','$c','$d','$ans')";
mysqli_query($conn,$query);
$msg = "wrong";
header("Location:templatemain.php?msg=$msg");


mysqli_close($conn);

?>