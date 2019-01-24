<?php
session_start();
?>
<html>

<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="qa.css">
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
<body onload="timeout()">
<script type="text/javascript">
	var timeleft=2;
</script>	
<br><br>

<div class="container" style="background-color:#f1f1f1">

<div id="time" style="float:right"><h1><b>timeout</b></h1></div>
<?php
$conn=mysqli_connect("localhost","root","","project");
  
  
//echo "$start_from";

$sql = "SELECT * FROM questionbank ";  
$rs_result = mysqli_query($conn, $sql); 
?>  
<table align="center" height="100%" width="70%">
<form method="post" action="table.php" id="form1">
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
            <td><?php echo $row["a"]; ?></td>
            <td><?php echo $row["b"]; ?></td>
            <td><?php echo $row["c"]; ?></td>
            <td><?php echo $row["d"]; ?></td>  
            <td><?php echo $row["e"]; ?></td>  
            </tr>  
  <?php
  }            
?>  
<tr>
<th colspan="3"><button type="submit">SUBMIT</button></th>
</tr>
 </form>
</table> 
 </div>
</body>
</html>
