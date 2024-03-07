<?php
error_reporting(0);
echo " HAPPY LOOTING!! \n";
unlink('cookie.txt');




$rd = rand(0,999);
$vvv = "Mozilla/5.0 (Linux; Android 13 QPR5; vivo 1915) AppleWebKit/537.36 (KHTML, like Gecko) Brave/117.0.5938.22 Mobile Safari/537.36/".$rd."";


function ofer($url, $method, $data = null) {
	global $vvv;
    $header = array(
        "Host: excentiv.com",
        "content-type: application/x-www-form-urlencoded",
        "user-agent: ".$vvv.""
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, "");
    curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function batt($url, $method, $data = null) {
	global $vvv;
    $header = array(
        "Host: coins-battle.com",
        "upgrade-insecure-requests: 1",
        "content-type: application/x-www-form-urlencoded",
        "X-Requested-With: XMLHttpRequest",
        "user-agent: ".$vvv.""
    );
    //$proxy = 'http://jmdzpqpq:imrbe2ogb5md@2.56.119.93:5074';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, "");
    curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}


function curl($url, $method, $data = null) {
	global $vvv;
    $header = array(     
        "X-Forwarded-For: 188.74.210.207",
        "Content-Type: application/json",
        "User-Agent: ".$vvv.""
    );
    $proxy = 'socks5://temera88:temera88@188.74.210.207:6286';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, "");
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);       
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function cap($url, $method, $data = null) {
	global $vvv;
    $header = array(        
        
        "Content-Type: application/json",
        "User-Agent: ".$vvv.""
    );
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, "");
      
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
$hh="611";
xx:
if($hh=="621"){echo "Complete!!! \n";sleep(99999);}
//$url = "https://excentiv.com/offerwall/?userid=43981&key=kMb1m7Rirq8Hpta06GcU";
$url = "https://excentiv.com/offerwall/?userid=9039f689ef4f&key=5eaQHDSVYcwbdACp6ZB7";
$of = ofer($url, 'GET');

sleep(5);
//if (strpos($of, "Games") === false) {echo" Game Hilang \n";sleep(99999);}

$tokk = explode('"',explode('<button value="https://coins-battle.com?token=', $of)[1])[0];

if($tokk==""){sleep(3);goto xx;}
$url = "https://coins-battle.com/?token=".$tokk."";
$bat = batt($url, 'GET');


while(true):
$url = "https://coins-battle.com/game/play/".$hh."";
$btc = batt($url, 'GET');
$sit = explode('"',explode('<div class="g-recaptcha" data-sitekey="', $btc)[1])[0];
$idd = explode('">',explode('<input type="hidden" name="game_id" value="', $btc)[1])[0];
$csf = explode('">',explode('<input type="hidden" name="csrf_token" value="', $btc)[1])[0];
$tim = explode("';",explode("let ctimer = '", $btc)[1])[0];
$lef = explode(' today',explode('<p><b>You have already play ', $btc)[1])[0];
if($idd==""){goto xx;}

a:
$url = "http://sctg.xyz/in.php?";
$data = array(
    'key' => '3AZ9DG7S3JvRITp5qaovctLQZIesH19w',
    'method' => 'userrecaptcha',
    'googlekey' => $sit,
    'json' => '1',
    'pageurl' => 'https://coins-battle.com/game/claimreward'
);
$datax = http_build_query($data);
$respo = cap($url, 'POST', $datax);
$re = json_decode($respo);
$id = $re->request;
if($id==''){goto a;}
$r = 1;

c:
$url = "http://sctg.xyz/res.php?key=3AZ9DG7S3JvRITp5qaovctLQZIesH19w&action=get&id=".$id."";
$res = curl($url, 'GET');
if ($res == 'CAPCHA_NOT_READY') {          
        sleep(6);
        goto c;
    }
if($res=="ERROR_CAPTCHA_UNSOLVABLE"){sleep(80);goto a;}

$captcha = str_replace("OK|", "", $res);


$url = 'https://coins-battle.com/game/claimreward';
$data = "game_id=".$idd."&csrf_token=".$csf."&captcha=recaptchav2&g-recaptcha-response=".$captcha."";
$las = batt($url, 'POST', $data);

$suc = explode(', to continue earning',explode('<div class="alert text-center alert-success"><i class="fa fa-check-circle"></i> ', $las)[1])[0];
date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i]", $timestamp);
if (strpos($suc, "obtained") !== false) {echo"".$wak." ID [".$hh."] $suc \n";}
sleep($tim);
if($lef=="29/30"){$hh=$hh+1;goto xx;}
endwhile;
?>
