<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="stylesheet" href="test.css">
</head>
<body>
  
<?php
$start_from=0;
$limit=10;
$conn=mysqli_connect("localhost","root","","project");
$query="SELECT * FROM questionbank  LIMIT $start_from, $limit";
$get=mysqli_query($conn,$query);

?>

<table align="center" height="100%" width="70%">
<form method="post" action="tt1.php" >
    <td>
<?php  
while ($row = mysqli_fetch_array($get)) {  
?>  
          
            <b><?php echo $row["question"]; ?></b><br>
            <input type="radio" name="<?php   echo $row["a"];?>" value="<?php $count ?>"><?php echo $row["a"]; ?><br><br>
            <input type="radio" name="<?php   echo $row["a"];?>" value="<?php $count ?>"><?php echo $row["b"]; ?><br><br>
            <input type="radio" name="<?php   echo $row["a"];?>" value="<?php $count ?>"><?php echo $row["c"]; ?><br><br>
            <input type="radio" name="<?php   echo $row["a"];?>" value="<?php $count ?>"><?php echo $row["d"]; ?><br><br>
            <hr>
            
<?php  
};  
?> 
<hr>

<button type="submit">Submit</button><br>
</td>
</form>
</table>


</body>
</html>