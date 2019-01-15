<?php
session_start();
?>

<?php

$conn=mysqli_connect("localhost","root","","project");


    if(!empty($_POST['num'])) {
    
    // Counting number of checked checkboxes.
    $checked_count = count($_POST['num']);
   
    
    // Loop to store and display values of individual checked checkbox.
    foreach($_POST['num'] as $selected) {

    $query="SELECT * FROM questionbank WHERE id=$selected";
    $get=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($get);
    $question=$row["question"];
    $a=$row["a"];
    $b=$row["b"];
    $c=$row["c"];
    $d=$row["d"];
    $ans=$row["e"];

     $query2="INSERT INTO test(question,a,b,c,d,e)VALUES ('$question','$a',$b,'$c','$d','$ans')";
    mysqli_query($conn,$query2);
    }
}
    //header("location:qa.php");


mysqli_close($conn);

?>