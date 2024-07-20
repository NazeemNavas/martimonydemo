<?php
  require(__DIR__.'/class/dbpdo.php');
  if(isset($_POST['uname']))
  {
    $name=$_POST['uname'];
    $password=$_POST['pasword'];
    $aaa=$connect->prepare("SELECT * from reg where email='$name' and pass='$password'");
    $aaa->execute();
    $bbb=$aaa->rowCount();
    if($bbb>0)
    {
   print "success";
    }
    else
    {
        print "invalid username and password";
    }
  }
  ?>
