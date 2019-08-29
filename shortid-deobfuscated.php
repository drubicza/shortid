<?php
error_reporting(0);

function spliter($a,$b,$c)
{
  $aa = explode($a, $c)[1];
  $bb = explode($b, $aa)[0];
  return $bb;
}

function bacod(){
  $url = 'https://linkduit.net/fen6j';
  $c   = curl_init($url);
  $opt = array(
         CURLOPT_REFERER=>"http://m.facebook.com",
         CURLOPT_FOLLOWLOCATION=>true,
         CURLOPT_RETURNTRANSFER=>true,
         CURLOPT_HTTPHEADER=>array("Host: linkduit.net", "Connection: keep-alive", "Upgrade-Insecure-Requests: 1", "User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi 4A Build/OPM7.181105.004; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36", "dnt: 1", "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8", "Accept-Language: id-ID,en-US;q=0.8", "X-Requested-With: com.android.chrome"),
         CURLOPT_USERAGENT=>"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36",
         CURLOPT_POSTFIELDS=>$body,
         CURLOPT_CUSTOMREQUEST=>"GET",
         CURLOPT_COOKIEJAR=>"bacod.log",);

  curl_setopt_array($c, $opt);
  $r = curl_exec($c);
  curl_close($c);

  $id    = spliter('class="btn btn-success" target="_blank" rel="nofollow" href="','">Get Link',$r);
  $ch    = curl_init('https://linkduit.net'.$id);
  $chopt = array(
           CURLOPT_REFERER=>"http://linkduit.net",
           CURLOPT_FOLLOWLOCATION=>true,
           CURLOPT_RETURNTRANSFER=>true,
           CURLOPT_HTTPHEADER=>array("Host: linkduit.net", "Connection: keep-alive", "Upgrade-Insecure-Requests: 1", "User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi 4A Build/OPM7.181105.004; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36", "dnt: 1", "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8", "Accept-Language: id-ID,en-US;q=0.8", "X-Requested-With: com.android.chrome"),
           CURLOPT_USERAGENT=>"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36",
           CURLOPT_POSTFIELDS=>$body,
           CURLOPT_CUSTOMREQUEST=>"GET",
           CURLOPT_COOKIEFILE=>"bacod.log");

  curl_setopt_array($ch, $chopt);
  $asik = curl_exec($ch);
  curl_close($ch);
  return $asik;
}

function id($url)
{
  $c   = curl_init($url);
  $opt =  array(
          CURLOPT_REFERER=>"http://shortid.co",
          CURLOPT_FOLLOWLOCATION=>true,
          CURLOPT_RETURNTRANSFER=>true,
          CURLOPT_HTTPHEADER=>array("Host: shortid.co", "Connection: keep-alive", "Upgrade-Insecure-Requests: 1", "User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi 4A Build/OPM7.181105.004; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36", "dnt: 1", "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8", "Accept-Language: id-ID,en-US;q=0.8", "X-Requested-With: com.android.chrome"),
          CURLOPT_USERAGENT=>"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36",
          CURLOPT_POSTFIELDS=>$body,
          CURLOPT_CUSTOMREQUEST=>"GET",
          CURLOPT_COOKIEJAR=>"cookie.txt",
          CURLOPT_TIMEOUT=>20
          );

  curl_setopt_array($c, $opt);
  $r        = curl_exec($c);
  $dom_obj  = new DOMDocument();
  $dom_obj->loadHTML($r);
  $meta_val = null;

  foreach ($dom_obj->getElementsByTagName('a') as $meta) {
    if ($meta->getAttribute('id') == 'makingdifferenttimer') {
      $id = $meta->getAttribute('href');
    }
  }
  return "https://shortid.co/".$id;
}

function get($url)
{
  $c   = curl_init(id($url));
  $opt = array(
         CURLOPT_REFERER=>"http://shortid.co",
         CURLOPT_FOLLOWLOCATION=>true,
         CURLOPT_RETURNTRANSFER=>true,
         CURLOPT_HTTPHEADER=>array("Host: shortid.co", "Connection: keep-alive", "Upgrade-Insecure-Requests: 1", "User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi 4A Build/OPM7.181105.004; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36", "dnt: 1", "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8", "Accept-Language: id-ID,en-US;q=0.8", "X-Requested-With: com.android.chrome"),
         CURLOPT_USERAGENT=>"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36",
         CURLOPT_POSTFIELDS=>$body,
         CURLOPT_CUSTOMREQUEST=>"GET",
         CURLOPT_COOKIEFILE=>"cookie.txt",
         CURLOPT_TIMEOUT=>20);

  curl_setopt_array($c, $opt);
  $r = curl_exec($c);

  if (preg_match("/kt5850pjz0/",$r)) {
    $io = "TRUE";
  } else {
    $io = "FALSE";
  }
  return $io;
}

function getIPs($withV6 = true)
{
  preg_match_all('/inet'.($withV6 ? '6?' : '').' addr: ?([^ ]+)/', `ifconfig`, $ips);
  return $ips[1];
}

$url = $_SERVER['argv'][1];

if ($url == "") {
  die("Penggunaan\n\$php namafile.php [url]\n\nmasih bingung? chat saya t.me/alfian_oktafireza\n");
}

echo "#####################
namescript  : tuyul shortid.co
@author     : Alfian
@telegram   : @alfian_oktafireza
#####################
\n";

while (1) {
  if (getIPs()[1] != null) {
    echo "\033[97;1mIP kamu : ".getIPs()[1]."\n";
    if (bacod()) { echo ""; }
    $req = get($url);

    if (preg_match("/TRUE/",$req)) {
      echo "\033[92;1mBerhasil Boss.. ✌️\033[97;1m\nOn-Off Mode Pesawat Untuk Ganti IP Boss\n\n";
    } else {
      echo "\033[91;1mGagal Impresi 😥\033[97;1m\nOn-Off Mode Pesawat Untuk Ganti IP Boss\n\n";
    }
    sleep(3);
  } else {
    echo "\033[91;1mGk ada internet 😥\033[97;1m\nHidupkan Datanya Boss\n\n";
    sleep(3);
  }
}
echo "Mantap ✌️";
?>
