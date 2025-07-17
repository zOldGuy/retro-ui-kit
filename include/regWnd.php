<style type="text/css">
<?php if( $browserName ==='Firefox (Gecko)' ){
 echo '#pwlHide_1{ margin-left:174px;}';
 echo '#mAddress{ width:141px;height:30px}';
 echo '#mUnit{ width:41px;left:-133px;height:25px}';
 echo '#phFname,#phLname,#phPhone,#phUname,
#phEmail,#phPassword,#phFull_name,
#phBphone,#phBname,#phBemail,#phBAddress{   
position:relative;left:-221px;}';
 
} elseif( $browserName ==='Chrome (Webkit)' ){
  echo '#pwlHide_1{ margin-left:177px;}';
  echo '#mAddress{ width:140px;}';
  echo '#mUnit{ width:41px;left:-133px;height:25px}';
  echo '#phFname,#phLname,#phPhone,#phUname,
  #phEmail,#phPassword,#phFull_name,
  #phBphone,#phBname,#phBemail,#phBAddress{   
  position:relative;left:-222px;}';

} elseif( $browserName ==='Microsoft Edge' ){
  echo '#pwlHide_1{ margin-left:172px;}';
  echo '#mAddress{ width:140px;}';
  echo '#mUnit{ width:41px;left:-133px;height:25px}';
  echo '#phFname,#phLname,#phPhone,#phUname,
  #phEmail,#phPassword,#phFull_name,
  #phBphone,#phBname,#phBemail,#phBAddress{   
  position:relative;left:-221px;}';

} elseif( $browserName ==='Opera (Presto)' ){
  echo '#pwlHide_1{ margin-left:172px;}';
  echo '#mAddress{ width:140px;}';
  echo '#mUnit{ width:41px;left:-133px;height:25px}';
  echo '#phFname,#phLname,#phPhone,#phUname,
  #phEmail,#phPassword,#phFull_name,
  #phBphone,#phBname,#phBemail,#phBAddress{   
  position:relative;left:-222px;}';
}
?>

</style>

<div id="info_Wnd" class="blurBox">
<span id="info_data"></span>
</div>


<div id="pwlGen" class="display_none">
<!-- <span class="lbl_canDrag"></span> -->
<div id="pwlClose" onClick="close_genCode_win()"></div>
<span id="lbl_Pwl"></span>
<span id="lbl_Pw2">Character Length</span>
<span id="lbl_Pw3">8</span>
<span id="lbl_Pw4">14</span>
<div id="pwlFrm" class="switch_frame"><div id="pwlBtn2"></div></div>
<div id="pwl_GenCode" title="Create a new password!">Generate</div>
<div id="pwl_Send" title="Send to password field">Send</div>
</div>


<div id="regWnd" class="display_none">
<span class="lbl_canDrag"></span>
  <div id="regWnd_close" class="utilCose"></div>

<span id="reg-label_1" style="font-family:'Tahoma';position:absolute;margin-left:75px;margin-top:65px">Resident</span>
<div id="setSW_3_frm" class="setSW_frm2" style="position:absolute;margin-left:150px;margin-top:65px">
<div id="setSW_3" title="Account"></div>
</div>
<span id="reg-label_2" style="font-family:'Tahoma';position:absolute;margin-left:205px;margin-top:65px">Business</span>
<span id="pwLBL" style="	font-family:'Sansa-nl';position:absolute;margin-left:10px;margin-top:360px;font-size:13px"></span>

<!----------------------- RegForm's Control Buttons    ------------------------------------------------->
<div id="ccPost_btn"></div> <div id="ccClear_btn"></div>
<!------------------------------------------------------------------------------------------------------>

<div id="res_Inner">
<form id="regDataRes" name="regDataRes" method="post">
<div class="space" style="height:25px;margin-top:15px;"></div>

<div class="edClass">
<input type="text" name="fname" id="fname" tabindex="1" maxlength="20" class="hfx_editBox">
<span id="phFname" class="placeHolder" onclick="document.getElementById('fname').focus();">&nbsp;*First name</span>
</div>
<div class="edClass">
<input type="text" name="lname" id="lname" tabindex="2" maxlength="20" class="hfx_editBox">
<span id="phLname" class="placeHolder" onclick="document.getElementById('lname').focus();">&nbsp;*Last name</span>
</div>

<div class="edClass">
<select id="mAddress" name="mAddress" tabindex="3" style="height:29px;color:#757575;font-style:italic;font-size:16px" class="hfx_editBox">
<option value="0000">*Address</option>
<option value="4621">4621</option>
<option value="4641">4641</option>
<option value="4645">4645</option>
<option value="4649">4649</option>
<option value="4653">4653</option>
<option value="4657">4657</option>
<option value="4661">4661</option>
<option value="4665">4665</option>
<option value="4669">4669</option>
<option value="4673">4673</option>
<option value="4677">4677</option>
<option value="4681">4681</option>
<option value="4685">4685</option>
<option value="4689">4689</option>
</select> 
<input type="text" name="mUnit" id="mUnit" maxlength="2" spellcheck="false" tabindex="4" style="position:absolute;width:55px;margin-top:106px;margin-left:348px" class="hfx_editBox">
 <span id="phUnit" onclick="document.getElementById('mUnit').focus()" class="placeHolder">*Apt#</span>
</div>

<div class="edClass">
<input type="text" name="mPhone" id="mPhone" maxlength="14" spellcheck="false" tabindex="5" class="hfx_editBox">
<span id="phPhone" onclick="document.getElementById('mPhone').focus()" class="placeHolder">&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;Phone</span>
</div>
<div class="edClass">
<input type="text" name="mUname" id="mUname" tabindex="6" maxlength="15" spellcheck="false" class="hfx_editBox">
<span id="phUname" onclick="document.getElementById('mUname').focus()" class="placeHolder">&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;*Username</span>
</div>
<div class="edClass">
<input type="text" name="mEmail" id="mEmail" tabindex="6" maxlength="25" spellcheck="false" class="hfx_editBox">
<span id="phEmail" onclick="document.getElementById('mEmail').focus()" class="placeHolder">&nbsp;&nbsp;<i class="fa fa-envelope-open"></i>*Email</span>
</div>
<div class="edClass">
<input type="password" name="mPassword" id="mPassword" maxlength="18" spellcheck="false" tabindex="7" class="hfx_editBox">
<span id="phPassword" onclick="document.getElementById('mPassword').focus()" class="placeHolder">&nbsp;&nbsp;<i class="fa fa-key"></i>*Password</span>
<div id="pwlHide_1" class="pwlLocked" title="show/hide password"></div>
<span id="pwl_score_reg" class="display_none" style="font-family:'Tahoma';color:#808080;font-style:italic;">...waiting...</span>
<div id="meter_bck_reg" class="display_none">
<div id="meter_pointer"></div></div>
</div>
<div id="pwlBtn" title="Auto password generator" style="cursor:pointer"></div>
</div><!-- End regInner -->
</form>

<form id="regDataBus" name="regDataBus" method="post">
<div id="bus_Inner">
<div class="edClass">
<input type="text" name="Full_name" id="Full_name" tabindex="1" maxlength="50" class="hfx_editBox">
<span id="phFull_name" onclick="document.getElementById('Full_name').focus()" class="placeHolder">&nbsp;*Full name</span>
</div>
<div class="edClass">
<input type="text" name="Bus_name" id="Bus_name" tabindex="2" maxlength="50" class="hfx_editBox">
<span id="phBname" onclick="document.getElementById('Bus_name').focus()" class="placeHolder">&nbsp;*Business name</span>
</div>
<div class="edClass">
<input type="text" name="bPhone" id="bPhone" tabindex="3" maxlength="14" class="hfx_editBox">
<span id="phBphone" onclick="document.getElementById('bPhone').focus()" class="placeHolder">&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;Phone</span>
</div>
<div class="edClass">
<input type="text" name="bEmail" id="bEmail" tabindex="4" maxlength="50" class="hfx_editBox">
<span id="phBemail" onclick="document.getElementById('bEmail').focus()" class="placeHolder">&nbsp;&nbsp;<i class="fa fa-envelope-open"></i>*Email</span>
</div>
<div class="edClass">
<input type="text" name="bAddress" id="bAddress" tabindex="5" maxlength="50" class="hfx_editBox">
<span id="phBAddress" onclick="document.getElementById('bAddress').focus()" class="placeHolder">&nbsp;&nbsp;<i class="fa fa-building"></i>*Address</span>
</div>
<textarea id="userTxt" name="userTxt" class="hfx_editBox" cols="40" rows="8"  tabindex="5" spellcheck="true"></textarea>
<span id="phBComment" onclick="document.getElementById('userTxt').focus()" class="placeHolder">&nbsp;<i class="fa fa-comments"></i>&nbsp;Business description...</span>
</div>
</form>
</div> <!-- End regWnd -->