<?php 
 if(isset($_GET['msg1'])){
  echo '<script language="javascript">';
    echo 'alert("Test Already Exist!")';
    echo '</script>';
}
  ?>
<?php 
 if(isset($_GET['msg'])){
  echo '<script language="javascript">';
    echo 'alert("test Created!")';
    echo '</script>';
}
  ?>

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
 
<table align="center" height="100%" width="70%" class="container5" bgcolor="#f1f1f1">
<form method="post" action="table1.php" >
<tr><td> 
    <label><b>Test Name</b></label><br>
    <input type="text" placeholder=" Test Name" name="test" required><br>
</td></tr>
<tr><td> 
<label for="email"><b>Duration</b></label><br>
    <input type="text" placeholder="Time" name="time" required><br>
</tr></td>
<th colspan="3"><button type="submit">Create Test!</button></th>
</tr>
 </form>
</table> 
<br>

</body>

</html>