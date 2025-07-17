<?php
error_reporting(E_ERROR|E_WARNING);

$fname = $lname = $mUnit = $mPhone  = $mUname =  $mEmail = $mPassword ="";


  $fname = check_this($_POST['fname']);
  $lname = check_this($_POST['lname']);
  $mAddress = check_this($_POST['mAddress']);
  $mUnit = check_this($_POST['mUnit']);
  $mPhone = check_this($_POST['mPhone']);
  $mUname = check_this($_POST['mUname']);
  $mEmail = check_this($_POST['mEmail']); 
  $mPassword = check_this($_POST['mPassword']);
 

  function check_this($data) {
    return htmlspecialchars(stripslashes(strip_tags(trim($data))));
  }

if( 
   strlen($fname)>0 
|| strlen($lname)>0 
|| $mAddress !=="0000" 
|| strlen($mUnit)>0 
|| strlen($mPhone)>0 
|| strlen($mUname)>0
|| strlen($mEmail)>0 
|| strlen($mPassword)>0)
{
  echo 0;
  } else {
  echo 1;
  } 
?>