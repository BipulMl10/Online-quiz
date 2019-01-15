<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <link rel="stylesheet" href="home.css">
</head>
<body>
            <?php
            $name=$_SESSION['name'];
            $email=$_SESSION['email'];
            $dob=$_SESSION['dob'];
            $phone=$_SESSION['phone'];
            $status=$_SESSION['status'];
           // $photo=$_SESSION['photo'];
          // $pass=$_SESSION['password'];
            //$id=$_SESSION['id'];
            
            ?>
            
            <div class="bg-image"></div>
            <div class="bg-text">
           
            <div class="container1"  style="background-color:rgba(0,0,0, 0.4)">
            <p align="center"><font size="8"><b>Profile page</b></font></p>
            </div>

            <br><br><br><br><br>

            <table width="100%" height="50%" >
                <tr>
                <td>
                   
                <div class="container"  style="background-color:rgba(0,0,0, 0.4)" >
           <p><font size="5"><b>Name</p><hr><?php echo "$name" ?></b></font>
           </div></td>
           <td>
           <div class="container" style="background-color:rgba(0,0,0, 0.4)" >
            <p><font size="5"><b>Phone </p><hr><?php echo "$phone" ?></b></font>
           </div></td>
           <td rowspan="2" width="20%">
           <div class="container" style="background-color:rgba(0,0,0, 0.4)" >
            <p><font size="5"><b><img src="bip.jpg" height="300dp" width="310dp"></b></font></p>
            </div></td>
          </tr>   
            <tr>  
                <td>      
            <div class="container" style="background-color:rgba(0,0,0, 0.4)" >
            <p><font size="5"><b>Email</p><hr><?php echo "$email" ?></b></font>
            </div>
            </th><th>
            <div class="container" style="background-color:rgba(0,0,0, 0.4)" >
            <p><font size="5"><b>Date of birth</p><hr><?php echo "$dob" ?></b></font>
            </div>
            </td>
          </tr>
                

                </th>
            </table>
</div>
</body>

</html>