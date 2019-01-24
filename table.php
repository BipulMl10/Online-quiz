<?php
session_start();
?>
<?php

$conn=mysqli_connect("localhost","root","","project");

$testname=$_SESSION['testname'];
$checked=$_POST['num'];

    if(!empty($checked)) {
    
    // Counting number of checked checkboxes.
    $checked_count = count($checked);
   
    
    // Loop to store and display values of individual checked checkbox.
    foreach($checked as $selected) {
    $query="SELECT * FROM questionbank WHERE id=$selected";
    $get=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($get);
    $question=$row["question"];
    $a=$row["a"];
    $b=$row["b"];
    $c=$row["c"];
    $d=$row["d"];
    $ans=$row["e"];


    $query2="INSERT INTO `$testname`(`question`, `a`, `b`, `c`, `d`, `ans`) VALUES ('$question','$a','$b','$c','$d','$ans')";
    mysqli_query($conn,$query2);
    }
}
    $msg = "Test Created";
    header("Location:createtest1.php?msg=$msg");
mysqli_close($conn);

?>