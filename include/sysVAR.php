<?php
 error_reporting(E_ERROR|E_WARNING);


$uagent = $systemName = $systemIcon = $browserName = $browserIcon = $systemType = $deviceType = "";
	
if( empty($_SERVER['HTTP_USER_AGENT']) ){
    $uagent  = "Unknown";} else { $uagent = $_SERVER['HTTP_USER_AGENT']."<br/>";}
 
   function os_info($uagent){
    global $uagent;
    $oses   = array(
'Windows 3.11' => 'Win16',
'Windows XP' => '(Windows NT 5.1)|(Windows XP)',
'Windows Server 2003' => '(Windows NT 5.2)',
'Windows 7' => '(Windows NT 7.0)',
'Windows' => '(Windows NT 10.0)',
'Windows NT 4.0' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
'Open BSD' => 'OpenBSD',
'Sun OS' => 'SunOS',
'Linux' => '(Linux)|(X11)',
'Mac OS' => '(Mac_PowerPC)|(Macintosh)',
'QNX' => 'QNX',
'BeOS' => 'BeOS',
'OS/2' => 'OS/2',
'Search Bot'=>'(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp)|(MSNBot)|(Ask Jeeves/Teoma)|(ia_archiver)');
        
 $uagent = strtolower($uagent ? $uagent : $_SERVER['HTTP_USER_AGENT']);

foreach ($oses as $os => $pattern)
    if (preg_match('/' . $pattern . '/i', $uagent))
        return $os;

$systemName = 'Unknown';
}
$systemName = os_info($uagent);

if (empty($_SERVER['HTTP_USER_AGENT'])) {
    $browserName = 'Unknown';
    $browserIcon = 'http_unknown';
} else {
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0') !== FALSE) {
        $browserName = 'iExplorer (11)';
        $browserIcon = 'explorer_11';

    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
        $browserName = 'Microsoft Edge';
        $browserIcon = 'explorer_12';

    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/6.0') !== FALSE) {
        $browserName = 'iExplorer (10)';
        $browserIcon = 'explorer_10';

    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/5.0') !== FALSE) {
        $browserName = 'iExplorer (9)';
        $browserIcon = 'explorer_9';

    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/4.0') !== FALSE) {
        $browserName = 'iExplorer (8)';
        $browserIcon = 'explorer_8';

    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'OPR') !== FALSE) {
        $browserName = 'Opera (Presto)';
        $browserIcon = 'opera';

    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
        $browserName = 'Chrome (Webkit)';
        $browserIcon = 'chrome';

    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE) {
        $browserName = 'Firefox (Gecko)';
        $browserIcon = 'mozilla';

    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') && strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') === FALSE) {
        $browserName = 'Safari (Webkit)';
        $browserIcon = 'apple_safari';

    } else {
        $browserName = 'unknown';
        $browserIcon = 'unknown';
    }
}


if (isset($_COOKIE['isBrave']) && $_COOKIE['isBrave'] === '1') {
    $browserName = 'Brave (Webkit)';
    $browserIcon = 'brave';
}

	  switch (os_info($uagent)) {
		case'BlackBerry':$systemName ='BlackBerry';$systemIcon = 'blackberry';break;
		case'Win7':$systemName ='Win7';$systemIcon = 'win7';break;
		case'Win8':$systemName ='Wind8';$systemIcon = 'win8';break;
		case'Win8.1':$systemName ='Win8.1';$systemIcon = 'win8.1';break;
		case'Windows':$systemName ='Windows';$systemIcon = 'win10';break; /* Sorry, no detection after windows 10 */
		case'Ubuntu':$systemName ='Ubuntu';$systemIcon = 'ubuntu';break;
		case'Fedora':$systemName ='Fedora';$systemIcon = 'fedora';break;
		case'Android':$systemName ='Android';$systemIcon = 'android';break;
		case'Linux':$systemName ='linux';$systemIcon = 'linux';break;
		case'iPhone':$systemName ='Apple iOS';$systemIcon = 'iOS';break;
		case'iPad':$systemName ='Apple iOS';$systemIcon = 'iOS';break;
		case'iPod':$systemName ='Apple iOS';$systemIcon = 'iOS';break;
		case'MacOS X':$systemName ='MacOS X';$systemIcon = 'MacOS';break;
		default:$systemName ='unknown';$systemIcon = 'unknown';break;
	}    


 
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
       $ip=$_SERVER['HTTP_CLIENT_IP'];
     }
     elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
       $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
     }
     else{
       $ip=$_SERVER['REMOTE_ADDR'];
     }
     
    function bits() {
   return PHP_INT_SIZE * 8;
 }
 $systemType = '('.bits().') Bit';

?>
<script>
if(localStorage.getItem("Member") === null){localStorage.setItem("Member","Res");}
var this_browser_Icon = '<?php echo $browserIcon; ?>'; 
var this_browser = '<?php echo $browserName ?>';
var this_system = '<?php echo $systemName ?>';
var system_type = '<?php echo $systemType; ?>';
var can_use_sKey = true;   
</script>