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
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	
function timeout(){

	var minute=Math.floor(timeleft/60);
	var second=timeleft%60;
    if(timeleft<=0)
    {
    	clearTimeout(tm);
    	document.getElementById("form1").submit();
    }
    else
    {
    document.getElementById("time").innerHTML=minute+":"+second;

    }
    timeleft--;
    var tm=setTimeout(function(){timeout()},1000);
}
</script>
     </head>
    <body bgcolor="#f4f4f4"  onload="timeout()">
     
    <?php
    $n=$_SESSION['time'];
    $time=$n*60;
    ?>
    <script type="text/javascript">
	var timeleft=<?php echo $time; ?>;
</script>	
    <?php
            $name=$_SESSION['name'];
            $email=$_SESSION['email'];
            $dob=$_SESSION['dob'];
            $phone=$_SESSION['phone'];
            $status=$_SESSION['status'];
          // $pass=$_SESSION['password'];
            //$id=$_SESSION['id'];
            
            ?>
          
            <div  class="container3" style="background-color:#00ff00">
       
            <table width="100%" height="8%" align="center" bgcolor="black">
            <tr>
                <th width="8%" bgclor="black"><font size="3"><b><div  class="container1" style="background-color:Green">QuestionBanK</b></div></font></th>
                <th  width="65%"></th>
                <th width="8%"><font size="3"><b><div  class="container1" style="background-color:Green"><?php echo "$status" ?></div></b></font></th>
                <th><font size="3"><b><div  class="container1" style="background-color:Blue"><?php echo "$name" ?></div></font></th>
                <th>
               
                <div id="time" style="float:right" class="container1" style="background-color:Green"><h1><b>timeout</b></h1></div>
               </th>
           </tr>
            </table>
        </div>
        <div id="left">
      <iframe id="left-iframe" src="" frameborder="0" ></iframe>
        </div>
        <div id="right">
            <iframe id="right-iframe" name="iframe_a" src="testright.php" frameborder="0" overflow-x='hidden' overflow-y='hidden'></iframe>
     </div>
    </body>
</html>