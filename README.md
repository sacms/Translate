# Translate
Translate Google by Shakib Ahmed

# Usages

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
