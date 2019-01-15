<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>question Bank</title>
        <!-- Tell the bots not to index these pages for searches -->
        <meta name="robots" content="noindex, nofollow">
        <meta name="googlebot" content="noindex, nofollow">
        <!--  -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="cq.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous">
        </script>
       <link rel="stylesheet" href="spage.css">
       <style>
            body, html {
                height: 100%;
                width: 100%;
                padding: 1PX;
                margin: 0px;
                overflow: hidden;
            }
            #left {
                float: left;
                width: 60px;
                
                height: 90%;
            }
            #right {
                width: auto; /* This is the default */
                float: none;
                margin-left: 100px;
                background:white;
                height: 90%;
               
            }
            #left-iframe{
                width: 100%;
                height: 100%;
                
            }
            #right-iframe {
             
                width: 100%;
                height: 100%;
            }
        </style>
     </head>
    <body bgcolor="#f4f4f4">
    <?php
            $name=$_SESSION['name'];
            $email=$_SESSION['email'];
            $dob=$_SESSION['dob'];
            $phone=$_SESSION['phone'];
            $status=$_SESSION['status'];
          // $pass=$_SESSION['password'];
            //$id=$_SESSION['id'];
            
            ?>
       
        
       <div  class="container3" style="background-color:Black">
            <table width="100%" height="10%" align="center" bgcolor="black">
            <tr>
                <td width="8%"><font size="3"><b><div  class="container1" style="background-color:Green">QuestionBanK</b></div></font></td>
                <td  width="72%"></td>
                <th width="8%"><font size="3"><b><div  class="container1" style="background-color:Green">Student</div></b></font></th>
                <th><font size="3"><b><div  class="container1" style="background-color:Blue"><?php echo "$name" ?></div></font></th>
            </tr>
            </table>
        </div>

        <div id="left">
      <iframe id="left-iframe" src="menu.html" frameborder="0"></iframe>
        </div>
        <div id="right">
            <iframe id="right-iframe" name="iframe_a" src="home.php" frameborder="0" overflow-x='hidden' overflow-y='hidden' ></iframe>
        </div>
    </body>
</html>