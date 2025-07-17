<?php
error_reporting(E_ERROR|E_WARNING);

$fname = $lname = $mUnit = $mPhone  = $mUname =  $mEmail = $mPassword ="";


  $fname = check_this($_POST['fname']);
  $lname = check_this($_POST['lname']);
  $mAddress= check_this($_POST['mAddress']);
  $mUnit = check_this($_POST['mUnit']);
  $mPhone = check_this($_POST['mPhone']);
  $mUname = check_this($_POST['mUname']);
  $mEmail = check_this($_POST['mEmail']); 
  $mPassword = check_this($_POST['mPassword']);

// error_log("Address from POST: " . $_POST['mAddress']);
// error_log("Address after check_this: " . $mAddress);

 
function check_this($data) {
    return htmlspecialchars(stripslashes(strip_tags(trim($data))));
  }

  if( 
    !preg_match("/^[a-zA-Z ]+$/", $fname) || strlen($fname) < 2 || 
    !preg_match("/^[a-zA-Z ]+$/", $lname) || strlen($lname) < 1 || 
    $mAddress === "0000" ||  // <-- Invalid submission if default is selected
    !filter_var($mEmail, FILTER_VALIDATE_EMAIL) || strlen($mUnit) < 1 ||
    !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/", $mPassword) || 
    !preg_match("/^(\+1|001)?\(?([0-9]{3})\)?([ .-]?)([0-9]{3})([ .-]?)([0-9]{4})$/", $mPhone))
{
  echo 0;
  } else {
  echo 1;
  } 
?>