<?php 
 if(isset($_GET['msg'])){
  echo '<script language="javascript">';
    echo 'alert("Invalid username or Password!")';
    echo '</script>';
}
  ?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<style>
a:hover {
  background-color: green;
}
</style>
<script src="script.js"></script>
  <link rel="stylesheet" href="design.css">
</head>
<body background="1.jpeg">

<div class="container1" style="background-color:#f1f1f1">
<p align="left"><b>Question Bank</b></p>
</div>

<br><br><br><br>

<div class="container" background="1.jpeg">
<table width="50%" height="40%" align="center">
<th >
<div class="container">
<form method="post" action="login.php">
   <div class="container" style="background-color:#f1f1f1">
   <h align="center"><font size="6"><b>Log Into Your Account</b></font></h>
   <br><br>
    <label for="uname"><b>Username</b></label><br>
   <input type="text" placeholder="Enter Username" name="email" required><br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
    <button type="submit">Login</button><br>
    

            
   <p>Don't have account? <a href="signup.php">Sign up</a>.</p><br></div>
</form></div>
</th>
</table>
</div>

</body>
</html>