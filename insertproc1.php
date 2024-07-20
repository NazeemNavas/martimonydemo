<?php
session_start();
require(__DIR__ . '/class/dbpdo.php');
if(isset($_POST['abc']))
{
    $f101 = $_POST['abc'];
    $f102 = $_POST['f102'];
    $f103 = $_POST['f103'];
    $f104 = $_POST['f104'];
    $f105 = $_POST['f105'];
    $f106 = $_POST['f106'];
    $f107 = $_POST['f107'];
    $f108 = $_POST['f108'];

    

   $jjji=$connect->prepare("update reg set Marital_Status='$f101',N_O_Children='$f102',Children_live_with='$f103',Height='$f104',f_status='$f105',f_type='$f106',f_values='$f107',Disability='$f108' where random='$_SESSION[sesno]'");
   $jjji->execute();

    echo "Data received successfully!";
} else {
   
}

if(isset($_POST['f112']))
{
    $f109 = $_POST['f109'];
    $f110 = $_POST['f110'];
    $f111 = $_POST['f111'];
    $f112 = $_POST['f112'];
    $f113 = $_POST['f113'];
    $f114 = $_POST['f114'];
    $f115 = $_POST['f115'];
    $f116 = $_POST['f116'];

    
   $jjji=$connect->prepare("update reg set Highest_Education='$f109',Education_in_Detail='$f110',Employed_in='$f111',Occupation='$f112',Currency_type='$f113',Amount='$f114',Work_Location='$f115',State='$f116' where random='$_SESSION[sesno]'");
   $jjji->execute();

                                                                                        

    echo "Data received successfully!";
} else {
    
}
?>