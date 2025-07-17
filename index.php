<!DOCTYPE html>
<html lang="en">
<head>

<?php
include_once('include/sysVAR.php');
require_once 'include/Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/animate.css" rel="stylesheet" type="text/css" >
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/styles.css" />

    
  <title>Retronix UI - Dialog Test</title>
  <style>
    body {
      margin: 0;
      font-family: Tahoma, sans-serif;
    }
    .open-dialog-btn {
      z-index:2;
      position: absolute;
      top: 15%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 12px 24px;
      font-size: 18px;
      font-weight: bold;
      color: #fff;
      background-color: #005bb5;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
    }
    .open-dialog-btn:active {
      transform: translate(-50%, -50%) scale(0.95);
    }
    
</style>
</head>
<body>

<div id="video_Index" class="display_block">
<video id="vIndex" poster="" autoplay muted loop>
<source src="assets/dolphins.mp4" type="video/mp4">
<source src="assets/dolphins.webm" type="video/webm">
<!-- just in case some joker is using the old Safari browser! -->
<source src="assets/dolphins.mov" type="video/mov">   
</video>
</div><!-- End of video_Index -->

<script>



window.onload=function(){
clear_UI();
mon_Sw3_pos();
updateInfo();
winDim();
// console.log(this_browser);

(async () => {
  const isBrave = (navigator.brave && await navigator.brave.isBrave()) || false;
  if (isBrave) {
    document.cookie = "isBrave=1; path=/";
  }
})();

}

window.onresize=function(){
winDim();

}

</script>



   <?php include_once('include/hpx_light_box.php')?>
   <?php include_once('include/regWnd.php')?>

  <button class="open-dialog-btn" onclick="show_reg_win()">Open Dialog</button>

  <div id="bigFoot" class="blurWnd">
    <div id="" class="" style=""></div>
  <!-- Hidden controls are just for testing and yield amazing 
   results for sizing "DIV's"in conjunction with Media queries
   ---see the "winDim" function, we hide them otherwise -->  

    <input type="text" id="sWidth" style="top:110px;color:#fff;left:50%;transform:translate(-50%,-50%);background:none;border:none;position:relative;width:50px"/>
    <input type="text" id="sHeight" style="top:110px;color:#fff;left:50%;transform:translate(-50%,-50%);background:none;border:none;position:relative;width:50px"/>

    <div id="webIcon-1" class="<?php echo $browserIcon ?>"></div>
    <div id="sysIcon-1" class="<?php echo $systemIcon ?>"></div>
    <input type="hidden" id="dType" name="dType" value="<?php echo $deviceType;?>"/>
<span id="dev" style="margin-left:-16px"></span><br>
<span id="brw"></span><br>
<span id="bIn"></span><br>
<span id="osS"></span><br>
<span id="sTy"></span><br>
<!-- <span id="ccU"></span><br> -->
</div>


  <script src="js/jquery.js"></script>
  <script src="js/all.min.js"></script> 
  <script src="js/jquery-ui.min.js"></script> 
  <script src="js/hpx_messages.js"></script>
  <script src="js/sysCtrls.js"></script>

    
  

</body>
</html>