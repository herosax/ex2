<?php
error_reporting(0);
echo " •HAPPY LOOTING• \n";



function get($url){
	global $vvv;

  $header = array(
     "User-Agent: $vvv",
     
     "upgrade-insecure-requests: 1",
     "Connection: keep-alive"
);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  return curl_exec($ch);
}
$result = get("https://raw.githubusercontent.com/Todorokix/api/main/user.txt");
$array = explode("\n", $result);
$usern = $array[1];
echo " $usern \n";

function http_get($url){
	global $vvv;
  $header = array(
     "User-Agent: $vvv",
     "Host: api.sctg.xyz",
     "upgrade-insecure-requests: 1",
     "Connection: keep-alive"
);
  $proxy = "socks5://kabbesul:qmp4dftcd06c@185.199.229.156:7492";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
  curl_setopt($ch, CURLOPT_PROXY, $proxy);       
  curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
  return curl_exec($ch);
}
function recpt() {
    $sit = "6Lcd0SYpAAAAAPZk7LMsCwVld1y8gAGhjbbHM5x1";
    $key = "LtPy3TlWHBZFzxJTJDdr3SNC1T4a9H6B";
    $loginUrl = "http://api.sctg.xyz/in.php?key=$key&method=userrecaptcha&googlekey=$sit&json=1&pageurl=https://acryptominer.io/user/login";

    while (true) {        
        $result = get($loginUrl);
        $re = json_decode($result);
        $id = $re->request ?? '';
        if ($id == '') {
            continue;
        }
        while (true) {
            $url = "http://api.sctg.xyz/res.php?key=$key&action=get&id=$id";
            $res = http_get($url);
            if ($res == 'CAPCHA_NOT_READY') {
                sleep(6);
                continue;
            }
            if ($res == "ERROR_CAPTCHA_UNSOLVABLE") {
                sleep(8);
                break;
            }
            $cha = explode('|', $res);
            if (isset($cha[1])) {
                return $cha[1];
            }
            sleep(6);
        }
    }
}

function solve() {
    $sit = "6Lcd0SYpAAAAAPZk7LMsCwVld1y8gAGhjbbHM5x1";
    $key = "LtPy3TlWHBZFzxJTJDdr3SNC1T4a9H6B";
    $loginUrl = "http://api.sctg.xyz/in.php?key=$key&method=userrecaptcha&googlekey=$sit&json=1&pageurl=https://acryptominer.io/user/faucet";

    while (true) {        
        $result = get($loginUrl);
        $re = json_decode($result);
        $id = $re->request ?? '';
        if ($id == '') {
            continue;
        }
        while (true) {
            $url = "http://api.sctg.xyz/res.php?key=$key&action=get&id=$id";
            $res = http_get($url);
            if ($res == 'CAPCHA_NOT_READY') {
                sleep(6);
                continue;
            }
            if ($res == "ERROR_CAPTCHA_UNSOLVABLE") {
                sleep(8);
                break;
            }
            $cha = explode('|', $res);
            if (isset($cha[1])) {
                return $cha[1];
            }
            sleep(6);
        }
    }
}
function solveCaptcha() {
	global $site;
	
    $key = "LtPy3TlWHBZFzxJTJDdr3SNC1T4a9H6B";
    $loginUrl = "http://api.sctg.xyz/in.php?key=$key&method=turnstile&sitekey=".$site."&json=1&pageurl=https://acryptominer.io/user/faucet";

    while (true) {        
        $result = get($loginUrl);
        $re = json_decode($result);
        $id = $re->request ?? '';
        if ($id == '') {
            continue;
        }
        while (true) {
            $url = "http://api.sctg.xyz/res.php?key=$key&action=get&id=$id";
            $res = http_get($url);
            if ($res == 'CAPCHA_NOT_READY') {
                sleep(6);
                continue;
            }
            if ($res == "ERROR_CAPTCHA_UNSOLVABLE") {
                sleep(8);
                break;
            }
            $cha = explode('|', $res);
            if (isset($cha[1])) {
                return $cha[1];
            }
            sleep(6);
        }
    }
}



function http_request($url, $method = 'GET', $data = null, $headers = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIE,TRUE);
    curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
    if (strtoupper($method) === 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        return "cURL Error: $error_msg";
    }
    curl_close($ch);
    return $response;
}


$n=5;
function getName($n) {
    $characters = '0123456789';
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}

zz:
unlink('cookie.txt');
function generateRandomIP() {
    $octet1 = rand(1, 255);
    $octet2 = rand(0, 255);
    $octet3 = rand(0, 255);
    $octet4 = rand(1, 255);
    $randomIP = "$octet1.$octet2.$octet3.$octet4";
    return $randomIP;
}
$ipp = generateRandomIP();

$mnk = getName($n);
$rd = rand(0,999);
$vvv = "Mozilla/5.0 (Linux; Android) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36 X/".$mnk."";


$headers = [
       "Host: acryptominer.io",
       "X-Forwarded-For: ".$ipp."",
        "content-type: application/x-www-form-urlencoded",
        "Connection: keep-alive",      
        "origin: https://acryptominer.io",
        "user-agent: $vvv"
];
function run(){
	global $headers;
$url = "https://acryptominer.io/user/faucet";
$xxx = http_request($url, 'GET', null, $headers);

return $xxx;
}

function dorr(){
	global $lef,$cap,$cok,$headers;
$url = 'https://acryptominer.io/user/faucet';
$data = "_token=".$lef."&cf-turnstile-response=".$cap."&g-recaptcha-response=".$cok."";
$response = http_request($url, 'POST', $data, $headers);

return $response;
}

$url = "https://acryptominer.io/user/login";
$str = http_request($url, 'GET', null, $headers);
$tok = explode('">',explode('<input type="hidden" name="_token" value="', $str)[1])[0];

$capt = recpt();

$url = "https://acryptominer.io/user/login";
$data = "_token=".$tok."&username=".$usern."&password=Nung1234&g-recaptcha-response=".$capt."&remember=on";
$response = http_request($url, 'POST', $data, $headers);
$url = "https://acryptominer.io/user/dashboard";
$das = http_request($url, 'GET', null, $headers);
$bal = explode('POINT</h4>',explode('<h4 class="dashboard-widget__title">', $das)[1])[0];
if($bal == ""){echo " Balance Hilang \n";sleep(60);goto zz;}
echo " Balance: ".$bal." \n";

while(true):
$site = "0x4AAAAAAAZWGl4XNAQLb9Uf";
$cok = solve();
$cap = solveCaptcha();

$gg = run();
$sitte = explode('"',explode('<div class="cf-turnstile" data-sitekey="', $gg)[1])[0];
if($sitte=="0x4AAAAAAAZWGl4XNAQLb9Uf"){}else{echo "csf hilang \n";sleep(60);goto zz;}
$lef = explode('">',explode('<input type="hidden" name="_token" value="', $gg)[1])[0];
sleep(1);
$pot = dorr();
$res = explode('",',explode('message: "', $pot)[1])[0];
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i]", $timestamp);
if (strpos($res, "Max") !== false) {echo" ".$wak." ".$res." Max Daily!!\n";sleep(999999);}
if (strpos($res, "successfully") !== false) {echo" ".$wak." ".$res." \n";}else{echo " Claim Gagal! ".$res." \n";sleep(60);goto zz;}
$tim = explode(';',explode('var timeUntilNextClaim = ', $pot)[1])[0];
if ($tim > 0) {
    sleep($tim);
}
endwhile;
?>
