<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="stylesheet" href="spage.css">
</head>
<body >
 $name=$_SESSION['name'];
            $email=$_SESSION['email'];
            $dob=$_SESSION['dob'];
            $phone=$_SESSION['phone'];
            $status=$_SESSION['status'];
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
  ?><tr><th target="iframe_as"><font size="5"><b><?php   
             /*$pagLink .=*/echo "<a href='testright.php?page=".$i."'>".$i."</a>";
            ?><b></font><hr></th></tr><?php  
};  
echo $pagLink . "</div>";  
?>
</tr>
</table> 
</body>

</html>