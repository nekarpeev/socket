
<?php

error_reporting(E_ALL);
//setlocale(LC_ALL, 'en-US');

#192.168.1.35
#127.0.0.1

//$address = '192.168.1.225';
//$port = 8880;

$address = '127.0.0.1';
$port = 10000;

$fp = fsockopen($address, $port, $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
    $out = "PRIVETqqq";
    fwrite($fp, $out, strlen($out));
    while (!feof($fp)) {
        echo fgets($fp, 128);
    }

    if(fclose($fp)) die;
}

