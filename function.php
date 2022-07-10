<?php

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

function translate($q, $sl, $tl){
    $q = str_replace(' ', '+', $q);
      $res= sacms('https://api.shakib.cyou/translate.php?q='.$q.'&sl='.$sl.'&tl='.$tl);
    $res = json_decode($res);
    return mb_convert_encoding($res->text, "UTF-8");
}


?>
