<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>  <link href="js/id5.js" rel="stylesheet">
<script src="js/id5.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<style>
  
 
.ccc {
  background-color:rgb(230,232,250);
  width: 90%;
  height:500px;
  margin-left:60px;
  margin-top:10px;
}
.ddd {
margin-left: 450px;
margin-top:-400px;
color:rgb(105,105,105);
}
.eee{
  margin-left:490px;
  margin-top:20px;
  width:30%;
  color:rgb(128,128,128);
}
     
.fff{
    width: 20%;
    height: 100px;
    margin-top:-30px;
    margin-left: 640px;
    color:rgb(128,128,128);
}
   
.ggg{
  width:20%;
  margin-top:-100px;
  margin-left:895px;
  color:rgb(128,128,128);
}
  
  
.hhh{
  width:25%;
  margin-top:110px;
  margin-left:650px;
  color:rgb(128,128,128);
}

.iii{
     width:25%;
     margin-top:-40px;
     margin-left:900px;
     color:orange;
     
}
.jjj{
  margin-left:700px;
  margin-top:70px;
  color:white;
    }

.vvv{
  margin-top:10px;
  margin-left:10px;
  width:400px;
  
}
@media screen  and (max-width: 768px){
  .ccc {
  background-color:rgb(230,232,250);
  width: 90%;
  height:1200px;
  margin-left:30px;
  margin-top:-20px;
}
.ddd {
margin-left: 60px;
margin-top:-600px;
 color:rgb(105,105,105);
}
.eee{
  margin-left:100px;
  margin-top:600px;
  width:100%;
  color:rgb(128,128,128);
}
    
.fff{
    width:70%;
    margin-top: 100px;
    margin-left:200px;
    color:rgb(128,128,128);
}
  
.ggg{
  /* width:70%; */
  margin-top:-180px;
  /* margin-left: 100px; */
  color:rgb(128,128,128);
  width: 14%;
    /* margin-top: -97px; */
    margin-left: 930px;
    /* color: rgb(128,128,128); */
}
  
.hhh{
  width:25%;
  margin-top:  230px;
  margin-left:100px;
   color:rgb(128,128,128);
}
.iii{
     width:25%;
     margin-top: -30px;
     margin-left: 450px;
     color:orange;
}
.jjj{
  color:white;
  margin-left:300px;
  margin-top:20px;
    }
.kkk{
  padding-top:10px;
  width:100px;
}
.vvv{
  margin-top:100px;
  margin-left:30px;
  width:500px;
  height:20%;
}
}
</style>
</style>
<body>
<?php
    require(__DIR__.'/class/dbpdo.php');
    ?>
    
  
    <div class="ccc">
  <div>
    <img class="vvv"src="img/qqq.webp">
</div>
<?php
 $relation=$_SESSION['relation'];
?>
<div class="ddd">
  <h4>Let the world know about your <?php print $relation ?>'s awesomeness</h4>
</div>
<div class="eee">
  <h4>About your  <?php print $relation ?></4>
</div>
<div class="fff">
  <form action="" method="POST" >
<textarea name="tex" rows="6" cols="200"style="width:250px;" required ></textarea><?php

$username = $_SESSION['name'];
 

?>
</div>
<div class="ggg">
  <h4>write a few words to get to know <?php print $username;?> better</h4>
</div>


<div class="hhh">
  <small>158 characters is Typed</small>
</div>
<div class="iii">
  <small>Help me to write</small>
</div>
<div class="jjj">
  <button name="fill" value="send to database"  class="btn btn-warning text-light">Complete</button>

  </div>
</div></form>
<div>
  <center><footer>copy right © 2023 on your website</footer></center>
<?php
    if(isset($_POST['fill']))
{
  
    $xyz=$_POST['tex'];
    
    
  $jjji=$connect->prepare("update reg set comment='$xyz' where random='$_SESSION[sesno]'");
   $jjji->execute();
?>
    
    <script>
    window.location.href="page7.php";
    alert("submited");</script>
    <?php
    } 
  
?>
</body>

</html>





