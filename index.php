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
$text = 'আমার সোনার বাংলা আমি তোমায় ভালোবাসি'; // text
$q = str_replace(' ', '+', $text);
$sl = 'bn'; // $q  & orginal text language code
$tl = 'hi'; // translate language code
$tr = sacms('https://expertskb.herokuapp.com/tr.php?q='.$q.'&sl='.$sl.'&tl='.$tl);

$skb = json_decode($tr);

$tr = mb_convert_encoding($skb->text, "UTF-8"); // encode text utf-8 to real text

echo '
<br> <b> Main Text: </b>'.$text.' <br>
<b>Translated Text: </b>'.$tr.' 
<br> <b> Main Text Language: </b>'.$skb->sl.'
<br> <b> Translated Text Language: </b>'.$skb->tl.'
<br> <b> Response: </b>'.$skb->response.'

</b>';
    
    ?>
