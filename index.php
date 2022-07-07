<?php

ini_set('display_errors', 0);
error_reporting(E_ALL);

function sacms($url) {
    $agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);
    curl_setopt($ch, CURLOPT_URL,$url);

    return curl_exec($ch);

    curl_close($ch);
   
}

$tr = sacms("https://expertskb.herokuapp.com/tr.php?q=amar+nam+shakib&sl=bn&tl=en");

$skb = json_decode($tr);

echo '
<b> Text: </b>'.mb_convert_encoding($skb->text, "UTF-8").' 
<br> <b> Main Text: </b>'.$skb->sl.'
<br> <b> Translate Text: </b>'.$skb->tl.'
<br> <b> Response: </b>'.$skb->response.'
    
    ?>
