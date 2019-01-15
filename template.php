<?php

$ques=$_POST['question'];
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$conn=mysqli_connect("localhost","root","","project");

$query="INSERT INTO questionbank (question,a,b,c,d,e) VALUES ('$ques','$a','$b','$c','$d','$e')";
mysqli_query($conn,$query);
header("location:template.html");

mysqli_close($conn);

?>