// JavaScript Document


const noDragPx = "#phFname,#phLname,#phPhone,#phUname,#phEmail,#phPassword,#phFull_name,#phBphone,#phBname,#phBemail,#phBAddress,#pwlHide_1,#meter_bck_reg,#meter_pointer,#pwl_score_reg";
const regGrp_Bus ="#Full_name,#Bus_name,#bPhone,#bEmail,#bAddress,#userTxt";
const regGrp_Res ="#fname,#lname,#mPhone,#mEmail,#mUnit,#mUname,#mPassword";
const regBtn_set ="#ccPost_btn,#ccClear_btn";

var uTop;
var uLeft;
var usr_Device = $('#dType').val();
var this_user =  $('#isUser').val();


const pwl_Group_Reg = "#pwl_score_reg,#meter_bck_reg";

$(noDragPx).css({"user-select":"none"});

$(noDragPx).on('mousedown',function(){$('#regWnd').draggable("disable");});
$(noDragPx).on('mouseleave',function(){$('#regWnd').draggable("enable");});
$(noDragPx).on('mouseup',function(){$('#regWnd').draggable("enable");});

$(regGrp_Res).on('mousedown',function(){$('#regWnd').draggable("disable");});
$(regGrp_Res).on('mouseleave',function(){$('#regWnd').draggable("enable");});
$(regGrp_Res).on('mouseup',function(){$('#regWnd').draggable("enable");});

$(regGrp_Bus).on('mousedown',function(){$('#regWnd').draggable("disable");});
$(regGrp_Bus).on('mouseleave',function(){$('#regWnd').draggable("enable");});
$(regGrp_Bus).on('mouseup',function(){$('#regWnd').draggable("enable");});

$(regBtn_set).on('mousedown',function(){$('#regWnd').draggable("disable");});
$(regBtn_set).on('mouseleave',function(){$('#regWnd').draggable("enable");});
$(regBtn_set).on('mouseup',function(){$('#regWnd').draggable("enable");});


function _(obj){ /* Global shortcut routine to alleviate repetitive calls to document.getElementById */
    return  document.getElementById(obj);
}



function slide_horizontal(kb){
	if ($(kb).css('left') == '0px'){
		$(kb).animate({left:'22px'},500,'easeOutBack');
		} else {
	   $(kb).animate({left:'0px'},500,'easeOutBack');
	}
}


$('#pwlGen').draggable({ cancel:"", containment: [1, 100, parseInt($('#sWidth').val()) - 370, parseInt($('#sHeight').val()) - 500 ], cursor: "move" });
$('#regWnd').draggable({ containment: [1, 60, parseInt($('#sWidth').val()) - 370, parseInt($('#sHeight').val()) - 500 ], cursor: "move" });

function IsPlaceHolder(editId, spanId) {
    const val = $('#' + editId).val().trim();
    $('#' + spanId).toggle(val.length === 0);
  }
      $('#fname').on('keyup blur change', () => IsPlaceHolder('fname','phFname'));
      $('#lname').on('keyup blur change', () => IsPlaceHolder('lname','phLname'));
     $('#mPhone').on('keyup blur change', () => IsPlaceHolder('mPhone','phPhone'));
     $('#mUname').on('keyup blur change', () => IsPlaceHolder('mUname','phUname'));
     $('#mEmail').on('keyup blur change', () => IsPlaceHolder('mEmail','phEmail'));
      $('#mUnit').on('keyup blur change', () => IsPlaceHolder('mUnit','phUnit'));
  $('#mPassword').on('keyup blur change', () => IsPlaceHolder('mPassword','phPassword'));
  $('#Full_name').on('keyup blur change', () => IsPlaceHolder('Full_name','phFull_name'));
   $('#Bus_name').on('keyup blur change', () => IsPlaceHolder('Bus_name','phBname'));
     $('#bPhone').on('keyup blur change', () => IsPlaceHolder('bPhone','phBphone'));
	 $('#bEmail').on('keyup blur change', () => IsPlaceHolder('bEmail','phBemail'));
   $('#bAddress').on('keyup blur change', () => IsPlaceHolder('bAddress','phBAddress'));
    $('#userTxt').on('keyup blur change', () => IsPlaceHolder('userTxt','phBComment'));



var ajax_update_Phone_res = function(){
	$.ajax({cache:false,
	data:'mPhone='+$('#mPhone').val(),
	url:'scripts/formatPhone.php',
	type:'POST',
	success: function(data){
	$('#mPhone').val(data);	}
	});
	}

var ajax_update_Phone_bus = function(){
		$.ajax({cache:false,
		data:'bPhone='+_("bPhone").value,
		url:'scripts/formatPhone_Bus.php',
		type:'POST',
		success: function(data){
		$('#bPhone').val(data);	}
		});
		}

$('#mUnit').bind('keypress', function(e) {
	return ( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)) ? false : true ;
	});

$('#mPhone').bind('keypress', function(e) { // Numbers Only!
	return ( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)) ? false : true ;
	 });
	$('#mPhone').on('blur change keyup keydown keypress',function(e){
		 if( $.trim($(this).val()).length == 10){
		ajax_update_Phone_res(); // format phone number...
					   }
			setTimeout(function () {
			//ToDo
			 },100);
			}).on("cut copy paste",function(e){
			e.preventDefault();
			});
		


$('#bPhone').bind('keypress', function(e) { // Numbers Only!
	return ( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)) ? false : true ;
		  });
		$('#bPhone').on('blur change keyup keydown keypress',function(e){
			   if( $.trim($(this).val()).length == 10){
				ajax_update_Phone_bus(); // format phone number...
			   }
		   setTimeout(function () {
		   //ToDo
			  },100);
		   }).on("cut copy paste",function(e){
			e.preventDefault();
		  });



$('#fname').bind('keypress', function(e) { // Block numbers
	return ( e.which!=8 && e.which !=0 && (e.which<48 || e.which>57)) ? true : false ;
			 });
$('#lname').bind('keypress', function(e) {  // Block numbers
	return ( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)) ? true : false ;
			});

	/* TIP: Updates the DOM for the <select> box to catch-up and fire! */
$('#mAddress').on('change keyup keydown keypress',function(e){
       setTimeout(() => {
		    ajax_submit_Clear_res();
			$('#mEmail').blur();
			$('#mUname').blur();
             },100);
		  });

		  $('#fname').bind('keyup', function(e) {
		  if($(this).val()=='admin'){
			fakeRES();
			   }
			});	

	let fakeRES = function(){
		$('#fname').val('homer').blur();
		$('#lname').val('simpson').blur();
		$('#mPhone').val('8474619374').blur();
		$('#mUname').val('simpson4u2').blur();
		$('#mAddress').val('4657').blur();
		$('#mUnit').val('45').blur();
		$('#mEmail').val('admin4u@gmail.com').blur();	
		$('#mPassword').val('weF^45698').blur();
	}
	
	$('#Full_name').bind('keyup', function(e) {
		if($(this).val()=='admin'){
		  fakeBUS();
			 }
		  });	
	
	let fakeBUS = function(){
		$('#Full_name').val('wile e coyote').blur();
		$('#Bus_name').val('ACME springs inc').blur();
		$('#bPhone').val('4087779311').blur();
		$('#bEmail').val('jump2it@sbcglobal.net').blur();
		$('#bAddress').val('4678 High Point Drive').blur();
		$('#userTxt').val('Chrome regularly checks to make sure your browser has the safest settings. We\'ll let you know if anything needs your review.').blur();
	}

///////////////////////////////////////// Clear Resident data ////////////////////////////////////////

$(regGrp_Res).on('blur change keyup keydown keypress',function(e){
	setTimeout(function () {
	ajax_submit_Res();
	ajax_submit_Clear_res();
	   },100);
	 });
	//  .on("cut copy paste",function(e){e.preventDefault();});
///////////////////////////////////////////////////////////////////////////////////////////////////////
	  var ajax_submit_Clear_res = function(){
		$.ajax({
			cache:false,
			url:'scripts/clear_Res.php',
			data:$("#regDataRes").serialize(),
			type:'POST',
			success: function(data){
			if (data === "1" ){
				$('#ccClear_btn').css({"background-position":"-109px -36px","cursor":"default","z-index":"33"});
				 }
				if( data === "0" ) {
			$('#ccClear_btn').css({"background-position":"-109px 0px","cursor":"pointer","z-index":"32"});
				}
			 }
		});
	}	

/////////////////////////////////// Submit Resident data ////////////////////////////////////////////

var ajax_submit_Res = function(){
	$.ajax({
	cache:false,
	url:'scripts/submit_Res.php',
	data:$("#regDataRes").serialize(),
	type:'POST',
	success:function(data){
	if( data === "0" ){
		$('#ccPost_btn').css({"background-position":"0px -36px","cursor":"default","z-index":"33"});
		 console.log(data);
		}
	if( data === "1" ){
		$('#ccPost_btn').css({"background-position":"0px 0px","cursor":"pointer","z-index":"32"});
		 console.log(data);
		}
	   }
	 });
	//  console.log($("#regDataRes").serialize());
	}
/////////////////////////////////// Submit Business data ////////////////////////////////////////////

var ajax_submit_Bus = function(){
	$.ajax({
	cache:false,
	url:'scripts/submit_Bus.php',
	data:$("#regDataBus").serialize(),
	type:'POST',
	success:function(data){
	if( data === "0" ){
		$('#ccPost_btn').css({"background-position":"0px -36px","cursor":"default","z-index":"33"});
		 console.log(data);
		}
	if( data === "1" ){
		$('#ccPost_btn').css({"background-position":"0px 0px","cursor":"pointer","z-index":"32"});
		 console.log(data);
		}
	   }
	 });
	//   console.log($("#regDataBus").serialize());
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////

	$('#ccPost_btn').on('mousedown',function (e){
		if( $(this).css('z-index') == 33 ){ return }
	   $(this).css({"transform":"scale(.95)"});
   });			
   $('#ccPost_btn').on('mouseup',function (e){
		 if ($(this).css('z-index') == 33 ){ return }
		$(this).css({"transform":"scale(1)"});
	  });	

///////////////////////////////////////// Clear Business data //////////////////////////////////////////////

$(regGrp_Bus).on('blur change keyup keydown keypress',function(e){
	setTimeout(function () {
	ajax_submit_Bus();
	ajax_submit_Clear();
	   },100);
	 });
	//  .on("cut copy paste",function(e){e.preventDefault();});

///////////////////////////////////////////////////////////////////////////////////////////////////////////

	  var ajax_submit_Clear = function(){
		$.ajax({
			cache:false,
			url:'scripts/clear_Bus.php',
			data:$("#regDataBus").serialize(),
			type:'POST',
			success: function(data){
			if (data === "1"){
				$('#ccClear_btn').css({"background-position":"-109px -36px","cursor":"default","z-index":"33"});
					 }
				if( data === "0") {
			$('#ccClear_btn').css({"background-position":"-109px 0px","cursor":"pointer","z-index":"32"});
				}
			 }
		});
	}	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$('#ccClear_btn').on('mousedown',function (e){
		if( $(this).css('z-index') == 33 ){ return }
		$(this).css({"transform":"scale(.95)"});
	});			
	$('#ccClear_btn').on('mouseup',function (e){
		  if ($(this).css('z-index') == 33 ){ return }
		 $(this).css({"transform":"scale(1)"});
		 $(regGrp_Res).val('').blur();
		 $(regGrp_Bus).val('').blur();
		 document.getElementById("mAddress").selectedIndex =0;
		ajax_submit_Clear();
	   });


/////////////////////////////////////////////////////////////////////////////////////////////

		if( $('#setSW_3').css('left')=='22px'){ // Detects which side of RegForm resident/business 

		$(regGrp_Bus).val('');
		setTimeout(() => {
			ajax_submit_Clear();
			$(regGrp_Bus).blur();// Resets placeHolders for button group!
			$('#Full_name').focus();			
				},100);	
			} else {
		$(regGrp_Res).val('');
			setTimeout(() => {
			ajax_submit_Clear();
			document.getElementById("mAddress").selectedIndex = 0;
			$(regGrp_Res).blur();// Resets placeHolders for button group!
			$('#fname').focus();		
			  },100);	
			}	



$('.utilCose').on('mousedown',function(){
	$(this).css({"transform":"scale(.9)"});
    });
  $('.utilCose').on('mouseup',function(){
	$(this).css({"transform":"scale(1)"});	
	close_reg_win();		
    });	
    $('.utilClose').on('mouseleave',function(){
	$(this).css({"transform":"scale(1)"});			
    });		


function switch_inputType(pBox,icn){
	if ($(pBox)[0].type === 'text'){
		$(pBox)[0].type ='password';
		$(icn).removeClass().addClass('pwlLocked');
		 } else {
		$(pBox)[0].type ='text';
		$(icn).removeClass().addClass('pwlUnlock');
	   }
	}

  $('#pwlHide_1').on('click',function(){
	switch_inputType(mPassword,this);
   });


   
   function toggle_member(){
	if($('#setSW_3').css('left') > '22px'){
	localStorage.setItem("Member","Bus");
	$('#res_Inner').hide();
	 $('#bus_Inner').show();
	ajax_submit_Clear();
	document.getElementById("mAddress").selectedIndex = 0;
    $(regGrp_Res).val('').blur();
    $(regGrp_Bus).val('').blur();
		 }  else {
	localStorage.setItem("Member","Res");
	$('#res_Inner').show();
	$('#bus_Inner').hide();	
	ajax_submit_Clear();
	$(regGrp_Res).val('').blur();
    $(regGrp_Bus).val('').blur();
	
	  }
 }



  $('#setSW_3').on('mouseenter',function(){
	// $(this).css({"background-position":"bottom"});
	$('#setSW_3').css('left') === '22px' ? $('#Full_name').focus():$('#fname').focus();	
	});
	$('#setSW_3').on('mouseleave',function(){
	// $(this).css({"background-position":"top"});
	$('#setSW_3').css('left') === '22px' ? $('#Full_name').focus():$('#fname').focus();	
	});
	$('#setSW_3').on('mouseup',function(){
		$('#setSW_3').css('left') === '22px' ? $('#Full_name').focus():$('#fname').focus();	
		});
	$('#setSW_3').on('mousedown, click',function(){
	slide_horizontal(this);	
	$('#setSW_3').css('left')=='22px'? $('#setSW_3_frm').css({"background-position":"right"}):$('#setSW_3_frm').css({"background-position":"left"});
	setTimeout(() => {
	toggle_member();
	}, 200);
	});



	function PWL_SORE_REG(){
		$.ajax({
		cache:false,
		url:'scripts/Passwrd_strength.php',
		data:"mPassword="+$.trim($('#mPassword').val()),
		type:'POST',
		success: function(data){		
		if ($.trim(data) == 0){
		$('#pwl_score_reg').html('No good!');
		$('#meter_pointer').animate({left:'-5px'},300,'easeOutBack');
		}		
	   if( $.trim(data) == 1) {
		$('#pwl_score_reg').html('No good!');
		$('#meter_pointer').animate({left:'60px'},100,'easeOutBack');
		 }	 
	   if( $.trim(data) == 3) {
		$('#pwl_score_reg').html('Moderate');
		$('#meter_pointer').animate({left:'130px'},100,'easeOutBack');	
		 }
	   if( $.trim(data) == 4) {
		$('#pwl_score_reg').html('Safe');
		$('#meter_pointer').animate({left:'150px'},100,'easeOutBack');		
		 }	 
	   if( $.trim(data) == 5) {
		$('#pwl_score_reg').html('Very strong');	
		$('#meter_pointer').animate({left:'170px'},100,'easeOutBack');
		 }		 
	   if( $.trim(data) == 6) {
		$('#pwl_score_reg').html('Excellent!');
		$('#meter_pointer').animate({left:'193px'},100,'easeOutBack');				
		 }		 
	   }
	});
	 }

	 $('#mPassword').on('paste cut blur change keyup keydown keypress',function(e){
		if($.trim($(this).val()) ==""){ $(pwl_Group_Reg).fadeOut(1000);$('#pwLBL').fadeIn()} else 
		{$(pwl_Group_Reg).fadeIn(250);$('#pwLBL').hide()}
		setTimeout(function () {
			 },250);
			 PWL_SORE_REG();
		  });


///////////////////////////////////////////////////////////////////////////////////////////////	

var clear_UI = function(){
		 $(regGrp_Res).val('').blur();
		 $(regGrp_Bus).val('').blur();
		 document.getElementById("mAddress").selectedIndex =0;
		 localStorage.getItem('Member')=='Bus' ? $('#Full_name').focus():$('#fname').focus();
       }

$('#pwlBtn').on('mousedown',function (e){
	$(this).css({"transform":"scale(.88)"});
    });	
   $('#pwlBtn').on('mouseup',function (e){
	$(this).css({"transform":"scale(1)"});
	show_genCode_win();
    });

	var show_reg_win = function(){
		$('#regWnd').css('left', parseInt($('#sWidth').val()) / 2 - 152.5+ 'px');
		$('#regWnd').css('top', parseInt($('#sHeight').val()) / 2 - 152.5+ 'px'); 
	  $('#hpx_LB70x,#regWnd').fadeIn();
		$('#pwLBL').html(hpX_sl1[8]);
		localStorage.getItem('Member')=='Bus' ? $('#Full_name').focus():$('#fname').focus();
		// can_use_sKey = false; // Lock the keyboard UI more on this later
		 }
	  var close_reg_win = function(){
		$('#regWnd,#hpx_LB70x').fadeOut();
		// can_use_sKey = true; // UnLock the keyboard UI more on this later
	}

var show_genCode_win = function(){
	$('#pwlGen').css('left',parseInt($('#sWidth').val()) / 2 - 150+ 'px');
	$('#pwlGen').css('top',parseInt($('#sHeight').val()) / 2 - 175+ 'px'); 
    $('#pwlGen').fadeIn();	  
    genPWL_4me();
}
var close_genCode_win = function(){
	$('#pwlGen').fadeOut();
}


function genPWL_4me(){
	if( $('#pwlBtn2').css('left') === '22px' ){
	   pLen=14;
	     } else {
	    pLen=8;	
	   }
        $.ajax({
		cache:false,
		url:'scripts/passwordGen.php',
		type:'POST',
		data:'pLen='+pLen,
		success:function(data){
        $('#lbl_Pwl').html(data);
		}
    });
}

$('#pwl_GenCode').mousedown(function (e){	  	  
	e.preventDefault();
	$(this).css('transform','scale(.95)');	
    });			
    $('#pwl_GenCode').mouseup(function (e){		
	  e.preventDefault();
	 $(this).css('transform','scale(1)');
	 genPWL_4me();
    });	
    $('#pwl_GenCode').on('mousedown click',function (e){		
    });


	$('#pwlBtn2').on('mousedown click',function(f){
		$(this).css({"cursor":"default"});
		pwlBtn_pos();
	  });

	$('#pwlBtn2').click(function(f){
		$(this).css({"cursor":"default"});
		pwlBtn_pos();
	  }); 
	  
	  function pwlBtn_pos(){
		var this_btn= $('#pwlBtn2');
			if( $(this_btn).css('left') == '22px' ){
			 $(this_btn).animate({left:'2px'},500,'easeOutQuint');
			  $('#lbl_Pwl').css({"left":"100px"}); 
			  $('#lbl_Pwl').html('');
					   setTimeout(() => {
			genPWL_4me();
			   },500);
				 } 
			 if( $(this_btn).css('left') == '2px' ){
		   $(this_btn).animate({left:'22px'},500,'easeOutQuint');
		   $('#lbl_Pwl').css({"left":"60px"});
		   $('#lbl_Pwl').html('');
			   setTimeout(() => {
			genPWL_4me();
			   },500);
		  }	
	}
	/* Finally send the auto-generated password to the mPassword field! 
	 Using blur() at the end of the val() updates the pwl strength meter for us! */	 
   $('#pwl_Send').mousedown(function (e){ 
	$('#mPassword').val($('#lbl_Pwl').html()).blur();
	});


///////////////////////////////////////////////////////////////////////////////////////////////

	/* We are trying to keep our HTML on the index.php page as free
	   from clutter as possible with these functions we requier onload */
	function mon_Sw3_pos(){
		if(	localStorage.getItem("Member")=="Bus"){
			$('#setSW_3').css({"left":"22px"});
			$('#setSW_3_frm').css({"background-position":"left"});
			$('#res_Inner').hide();
			$('#bus_Inner').show();
			$('#pwLBL').hide();
			   } else {
			$('#setSW_3').css({"left":"0px"});
			$('#setSW_3_frm').css({"background-position":"right"});
			$('#res_Inner').show();
			$('#bus_Inner').hide();  
		  }
	}
////////////////////////// Update our system info from "sysVAR.php" to HTML ////////////////

function updateInfo(){
	$('#dev').html('Device: '+usr_Device);
	$('#brw').html('Browser: '+this_browser);
	$('#bIn').html('BrowserIcon: '+this_browser_Icon );
	$('#osS').html('Operating System: '+this_system);
	$('#sTy').html('System Type: '+system_type);
	$('#info_data').html(hpX_sl1[7]);
	// $('#ccU').html('can_use_skey: '+can_use_sKey); place this in the console.log instead!
	}
/////////////////////////////////////////////////////////////////////////////////////////	

	function winDim(){
		const wXc = window.innerWidth  || document.documentElement.clientWidth || document.body.clientWidth;
		const hXc = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		document.getElementById("sWidth").value='W '+wXc;
		document.getElementById("sHeight").value='H '+hXc;
		//document.title = wXc + ' X ' + hXc;

		uTop =  hXc /2 - 220;
		uLeft = wXc /2 - 152.5;

		//  Created this function to work with windows.onload and windows.onresize to fill in the 
		// gaps when the client side changes (in real time!) other than using Media-queries it can use more work
		
			  $('#regWnd').css('top', parseInt(uTop) +'px');
			  $('#regWnd').css('left', parseInt(uLeft) +'px');
		
	 $('#regWnd').draggable({ containment: [1, 60, parseInt($('#sWidth').val()) - 370, parseInt($('#sHeight').val()) - 500 ], cursor: "move" });			
	} /* End WinDim() */

////////////////////////// Displays (fadeIn/fadeOut) a reminder atop a Dialogs /////////////////////////////////////// 
	
	$('#regWnd').on('mouseenter',function(){
		if( usr_Device =='phone'){ return }
	   $('.lbl_canDrag').fadeIn("slow");
	   setTimeout(function () {
		$('.lbl_canDrag').fadeOut();
	   },5000);
	  });

	$('#regWnd').on('mouseleave',function(){
	if( usr_Device =='phone'){ return }
	$('.lbl_canDrag').fadeOut();
	});



	
















	


















	





  
