<?php
$mPassword = isset($_POST['mPassword']) ? $_POST['mPassword']:"";


// Validate password strength

$uppercase = preg_match('@[A-Z]@', $mPassword);
$lowercase = preg_match('@[a-z]@', $mPassword);
$number    = preg_match('@[0-9]@', $mPassword);
$specialChars = preg_match('@[^\w%]@',$mPassword);

$total = 0;

if(strlen($mPassword) < 7 &&  trim($mPassword) ){ $total = 1;} // Too weak (Color Purple)
if(strlen($mPassword) > 7 &&  trim($mPassword) ){ $total = 2;}  // Weak (Color Red)
if(strlen($mPassword) > 7 &&  trim($mPassword) && $uppercase ){ $total = 3;} // Moderate (Color Red)
if(strlen($mPassword) > 7 &&  trim($mPassword) && $uppercase && $lowercase  ){ $total = 4;} // Good (Color Orange)
if(strlen($mPassword) > 7 &&  trim($mPassword) && $uppercase && $lowercase && $number ){$total = 5;}  // Strong (Color Yellow)
if(strlen($mPassword) > 7 &&  trim($mPassword) && $uppercase && $lowercase && $number && $specialChars){ $total = 6;} // Very strong (Color Green)

echo $total;
?>