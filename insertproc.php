<?php
session_start();
require(__DIR__ . '/class/dbpdo.php');
if (isset($_POST['prf1'])) {
  $nwww1 = $_POST['prf1'];
  $nwww2 = $_POST['gen1'];
  $nwww3 = $_POST['nm1'];
  $nwww4 = $_POST['reg1'];


  // $newww=$connect->prepare("INSERT INTO reg VALUES ('','$nwww1','$nwww2','$nwww3','$nwww4')");
  // $newww->execute();
  $randomno = substr(str_shuffle('1234567890abcdefghijklmopqrstuvwxyz'), 0, 6);
  $_SESSION['sesno'] = $randomno;
  $_SESSION['relation'] = $nwww1;
  $_SESSION['name']=$nwww3;
  $newww = $connect->prepare("INSERT INTO reg VALUES ('','$nwww1','$nwww2','$nwww3','$nwww4','2022-03-12','','','','','','','','','','','','','','','','','','','','','','','','','','','','$randomno')");
  $newww->execute();
}
//jtn
if (isset($_POST['cast1'])) 
{
  $maddx = $_POST['cast1'];
  $maddx1 = $_POST['cast21'];
  $maddx2 = $_POST['cast22'];
  $maddx3 = $_POST['SUDDHAJADHAGAMON'];
  $maddx4 = $_POST['regn23'];
  /* $jjji=$connect->prepare("INSERT INTO tekinfo values('','$maddx','$maddx1','$maddx2','$maddx3','$maddx4')");
                  $jjji->execute();*/
  $jjji = $connect->prepare("update reg set dob='$maddx',religion='$maddx1',mt='$maddx2',email='$maddx3',pass='$maddx4' where random='$_SESSION[sesno]'");
  $jjji->execute();
}

if (isset($_POST['caste11'])) {
  $maddx11 = $_POST['caste11'];
  $maddx111 = $_POST['cast211'];
  $maddx21 = $_POST['cast221'];
  $maddx31 = $_POST['okok'];
  // $naz=$connect->prepare("INSERT INTO tekinfo1 values('','$maddx11','$maddx111','$maddx21','$maddx31','','')");
  //   $naz->execute();
  $naz = $connect->prepare("update reg set Caste='$maddx11',intercaste='$maddx111',Subcaste='$maddx21',Suddhajadhagam='$maddx31',Dosham='',Doshams='' where random='$_SESSION[sesno]'");
  $naz->execute();
  print "success";
}
//aln




?>