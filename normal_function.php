<?php


function translate($q, $sl, $tl){
    $q = str_replace(' ', '+', $q);
   $res= file_get_contents('https://api.shakib.cyou/translate.php?q='.$q.'&sl='.$sl.'&tl='.$tl);
       $res = json_decode($res);
    return mb_convert_encoding($res->text, "UTF-8");
}


echo translate('Hello there, i am sam now i testing my normal project', 'en', 'bn');
?>
