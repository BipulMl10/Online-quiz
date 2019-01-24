<?php 
 if(isset($_GET['msg'])){
  echo '<script language="javascript">';
    echo 'alert("Sucessfully Updated")';
    echo '</script>';
}
  ?>
<!DOCTYPE html>
<html>
   <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
session_start();
?>
<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="uppro.css">
</head>
<body background="1.jpeg">

<?php
            $name=$_SESSION['name'];
            $status=$_SESSION['status'];
          // $pass=$_SESSION['password'];
            //$id=$_SESSION['id'];
            
            ?>

<br>
<table width="55%" height="60%" align="center" class="container" bgcolor="#f1f1f1" frame="box">
<form action="uppr.php" method="POST">
<tr><th colspan="2">
 <h1 ><font size="8"><b>Update</b></font></h1>
</th></tr>
<tr><td>
<label for="photo"><b>Upload photo</b></label><br><br>
    <input type="file" name="myimage" id="photo" />
    <br>
</td>
</tr>
<tr><td>
<p><font size="5"><b>Name</p><p><b><?php echo "$name" ?></b></p></font></p><hr>
<p><font size="5"><b>Status</p><p><b><?php echo "$status" ?></b></P></font></p><br>
</td>
 <td>
    <label for="phone">Enter your phone number:</label><br>

       <input type="tel" id="phone" name="phone"
       required>  <br><br>

       <label for="dt">Date Of Birth: </label><br><br>
	 <input name="dt" type="date"/><br><br>
</td></tr>
<tr><th colspan="2">
 <button type="submit" class="registerbtn">Update</button><br>
</th></tr>
</form>
</table>
</body>
</html>