<?php 
 if(isset($_GET['msg'])){
  echo '<script language="javascript">';
    echo 'alert("Question Deposited")';
    echo '</script>';
}
  ?>
<!DOCTYPE html>
<html>
   
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="template.css">

<script>
  $(document).ready(function(e){
    //variables
     var html ='<p/><div><input type="text" placeholder="A):-Option" name="make[]" required> <a href="#"id="remove">X</a><br></div>';
   var maxrows=4;
   var x=1;
    //add rows to the row
    $("#add").click(function(e){
      if(x<=maxrows){
      $("#container").append(html);
     x++;
}
          });
//Remove from the webpage
$("#container").on('click','#remove',function(e){

$(this).parent('div').remove();
x--;
});


  });

</script>
</head>
<body >     
<div class="bg-text">
<br>

<form action="template.php" method="POST" id="template">
<table width="70%" height="70%" align="center" bgcolor="#f1f1f1">  
<td>
 <h1 align="center"><font size="8" color="black"><b>Question</b></font></h1>
    <p align="center"><font size="4" color="black"><b></b>Bank<b></font></p><hr>
    
    <textarea cols="130" rows="5" maxlength="300" placeholder="Qusetion" name="question"></textarea><br>
    
    <input type="text" width="80%" placeholder="):-Option" name="make[]" id="make" required>
    <div id=container></div>
  
  <a href="#" id="add">Add more</a><br>

    <input type="text" placeholder="Answer" name="e" required><br>
   
 <button type="submit" align="center" class="registerbtn">Deposit</button><br>
</td>
</table>
</form>
</div>
</body>
</html>