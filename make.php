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

<div class="container" style="background-color:#f1f1f1">
<?php
$conn=mysqli_connect("localhost","root","","project");


$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
//echo "$start_from";

$sql = "SELECT * FROM questionbank  LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql); 
?>  
<table align="center" height="100%" width="70%">
<form method="post" action="table.php" >
<tr>
<th>S.no</th>
<th>Question</th>
<th>Answer</th>
</tr> 
<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
            <tr>  
            <td><input type="checkbox" name="num[]" value="<?php echo $row["id"] ;?>"><?php echo $row["id"]; ?></td>  
            <td><?php echo $row["question"]; ?></td>  
            <td><?php echo $row["e"]; ?></td>  
            </tr>  
            
<?php  
};  
?>  
<tr>
<th colspan="3"><button type="submit">Create Test!</button></th>
</tr>
 </form>
</table> 


<table align="center" height="100%" width="70%">
<tr>
<?php  
$sql = "SELECT COUNT(id) FROM questionbank";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
  ?><td bgcolor="	green"><font size="5"><b><?php   
             /*$pagLink .=*/echo "<a href='qa.php?page=".$i."'>".$i."</a>";
            ?><b></font></td><?php  
};  
echo $pagLink . "</div>";  
?>
</tr>
</table> 
</body>

</html>