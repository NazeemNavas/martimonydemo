<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Login page</title>
</head>
<link rel="stylesheet" href="css/style1.css">
<script src="js/main.js"></script>
<script src="js/jquery-1.8.2.min.js"></script>

<?php
  require(__DIR__.'/class/dbpdo.php');

  ?>
<script>
function abc()
{
  var name=document.getElementById("usrname").value;
  var password=document.getElementById("psw").value;
  $.ajax({
    url:"insertproc3.php",
    data:{uname:name,pasword:password},
    type:'POST',
    success:function(result)
    {
      
      if(result=="success")
      {
        
        // window.location.href="test.html";
        window.location.href="specialoffer.html" 
      }
      else
        {
          document.getElementById("Errormsg").innerHTML="Invalid Username and Password";
        }
    }
  });
}
</script>
<body>
<div class="row"> 
<div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header" style="padding:35px 80px;">
    <a href="../index.php"> <button type="button" class="close" data-dismiss="modal">×</button></a>
   
    <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
  </div>
  <div class="modal-body" style="padding:40px 50px;">
  <div class="form-group">
    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
    <input type="text" class="form-control" id="usrname">
  </div>
  <div class="form-group">
    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
    <input type="password" class="form-control" id="psw">
  </div>
  <div class="checkbox">
    <label><input type="checkbox" value="" checked="">Keep me logged in</label>
  </div>
  <button onclick="abc()" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
  <span style="color:red;" id="Errormsg"></span>
</div>
<div class="modal-footer">
  <a href="">Forgot Password</a>&nbsp;&nbsp;&nbsp;
  <a href="">Login Via OTP</a>
</div>
</div>
</div>

</body>
</html>

