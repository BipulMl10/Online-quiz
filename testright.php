<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="stylesheet" href="qa.css">
</head>
<body >

<br><br>


<?php
$testname=$_SESSION['testname'];
$conn=mysqli_connect("localhost","root","","project");


$limit = 1;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
//echo "$start_from";

$sql = "SELECT * FROM $testname  LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql); 
?>  
<table align="center" height="100%" width="100%" class="class="container4"" bgcolor="#f1f1f1">
<form method="post" action="tt1.php" >
<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
           <tr><td bgcolor="green"><font size="5"><b><?php echo $row["question"]; ?></b></font></td></tr><br>
            <tr><td><font size="5"><b><input type="radio" name="<?php   echo $row["a"];?>" value="<?php $count ?>"><?php echo $row["a"]; ?></b></font></td></tr>
            <tr><td><font size="5"><b><input type="radio" name="<?php   echo $row["a"];?>" value="<?php $count ?>"><?php echo $row["b"]; ?></b></font></td></tr>
            <tr><td><font size="5"><b><input type="radio" name="<?php   echo $row["a"];?>" value="<?php $count ?>"><?php echo $row["c"]; ?></b></font></td></tr>
            <tr><td><font size="5"><b><input type="radio" name="<?php   echo $row["a"];?>" value="<?php $count ?>"><?php echo $row["d"]; ?></b></font></td></tr>
           
            
            
<?php  
};  
?>  
 <button type="submit">Submit</button><br>
 </form>
</table> 
<br>

<table align="center" height="100%" width="70%">
<tr>
<?php  
$sql = "SELECT COUNT(id) FROM $testname";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
  ?><td bgcolor="	green"><font size="5"><b><?php   
             /*$pagLink .=*/echo "<a href='testright.php?page=".$i."'>".$i."</a>";
            ?><b></font></td><?php  
};  
echo $pagLink . "</div>";  
?>
</tr>
</table> 
</body>

</html>