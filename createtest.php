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
$conn=mysqli_connect("localhost","root","","project");

$sql = "SELECT * FROM questionbank ";  
$rs_result = mysqli_query($conn, $sql); 
?>  
<table align="center" height="100%" width="70%" class="container" bgcolor="#f1f1f1">
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
<br>
</body>

</html>