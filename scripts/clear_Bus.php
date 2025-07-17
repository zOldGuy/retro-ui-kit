<?php
error_reporting(E_ERROR|E_WARNING);

$Full_name = $Bus_name = $bPhone  = $bEmail = $bAddress = $userTxt ="";


  $Full_name = check_this($_POST['Full_name']);
  $Bus_name = check_this($_POST['Bus_name']);
  $bPhone = check_this($_POST['bPhone']);
  $bAddress = check_this($_POST['bAddress']);
  $bEmail = check_this($_POST['bEmail']);
  $userTxt = check_this($_POST['userTxt']);


function check_this($data){
  $data = trim($data);
  $data = strip_tags($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(  strlen($Full_name)>0 || strlen($Bus_name)>0 || strlen($bPhone)>0 
||strlen($bAddress)>0 || strlen($bEmail)>0 ||strlen($userTxt)>0  )
  {
  echo 0;
  } else {
  echo 1;
  } 
?>