<?php
$Full_name = $Bus_name = $bPhone  = $bEmail = $bAddress = $userTxt ="";

$Full_name = check_this($_POST['Full_name']);
$Bus_name = check_this($_POST['Bus_name']);
$bPhone = check_this($_POST['bPhone']);
$bAddress = check_this($_POST['bAddress']);
$bEmail = check_this($_POST['bEmail']);
$userTxt = check_this($_POST['userTxt']);

function check_this($data) {
  return htmlspecialchars(stripslashes(strip_tags(trim($data))));
}

if(
  !preg_match("/^[\p{L} '-]+$/u", $Full_name) || strlen($Full_name) < 2 || 
  !preg_match("/^[\p{L} '-]+$/u", $Bus_name) || strlen($Bus_name) < 2 || 
  !preg_match("/^[a-zA-Z0-9\s\.,#\-]+$/", $bAddress) || strlen($bAddress) < 2 || 
  !filter_var($bEmail, FILTER_VALIDATE_EMAIL) || strlen($userTxt) < 2 ||
  !preg_match("/^(\+1|001)?\(?([0-9]{3})\)?([ .-]?)([0-9]{3})([ .-]?)([0-9]{4})$/", $bPhone) )
  {
  echo 0;
  } else {
  echo 1;
  } 