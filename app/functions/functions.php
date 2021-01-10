<?php
class Functions {

	public function LogIPAddress(){

		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];

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

		return $ip;
	}

       public function GetOS(){

	    $user_agent = $_SERVER['HTTP_USER_AGENT'];
	    $os_platform  = "Unknown OS Platform";

	    $os_array     = array(
				  '/windows nt 10/i'      =>  'Windows 10',
				  '/windows nt 6.3/i'     =>  'Windows 8.1',
				  '/windows nt 6.2/i'     =>  'Windows 8',
				  '/windows nt 6.1/i'     =>  'Windows 7',
				  '/windows nt 6.0/i'     =>  'Windows Vista',
				  '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
				  '/windows nt 5.1/i'     =>  'Windows XP',
				  '/windows xp/i'         =>  'Windows XP',
				  '/windows nt 5.0/i'     =>  'Windows 2000',
				  '/windows me/i'         =>  'Windows ME',
				  '/win98/i'              =>  'Windows 98',
				  '/win95/i'              =>  'Windows 95',
				  '/win16/i'              =>  'Windows 3.11',
				  '/macintosh|mac os x/i' =>  'Mac OS X',
				  '/mac_powerpc/i'        =>  'Mac OS 9',
				  '/linux/i'              =>  'Linux',
				  '/ubuntu/i'             =>  'Ubuntu',
				  '/iphone/i'             =>  'iPhone',
				  '/ipod/i'               =>  'iPod',
				  '/ipad/i'               =>  'iPad',
				  '/android/i'            =>  'Android',
				  '/blackberry/i'         =>  'BlackBerry',
				  '/webos/i'              =>  'Mobile'
			    );

			    foreach ($os_array as $regex => $value)
				if (preg_match($regex, $user_agent))
				    $os_platform = $value;

			    return $os_platform;
	}

	public function GetBrowser(){

            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            $browser = "N/A";


            $browsers = array(
            '/msie/i' => 'Internet explorer',
            '/firefox/i' => 'Firefox',
            '/safari/i' => 'Safari',
            '/chrome/i' => 'Chrome',
            '/edge/i' => 'Edge',
            '/opera/i' => 'Opera',
            '/mobile/i' => 'Mobile browser'
            );

            foreach ($browsers as $regex => $value) {
            if (preg_match($regex, $user_agent)) { $browser = $value; }
            }
            return $browser;
	}

	public function EncryptData($string, $key) {
	  $result = '';
	  for($i=0; $i<strlen($string); $i++) {
		$char = substr($string, $i, 1);
		$keychar = substr($key, ($i % strlen($key))-1, 1);
		$char = chr(ord($char)+ord($keychar));
		$result.=$char;
	  }

	  return base64_encode($result);
	}

    public function DecryptData($string, $key) {
	  $result = '';
	  $string = base64_decode($string);

	  for($i=0; $i<strlen($string); $i++) {
		$char = substr($string, $i, 1);
		$keychar = substr($key, ($i % strlen($key))-1, 1);
		$char = chr(ord($char)-ord($keychar));
		$result.=$char;
	  }

	  return $result;
	}

	public function GenerateRandom($length) {
	    $characters = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	public function RedirectTo($url){
		header('Location:'.$url);
	}

	public function FileExists($file,$path){
		if(file_exists($path.$file)){
			return true;
		} else {
			return false;
		}
	}

}


?>
