# Translate
Translate Google by Shakib Ahmed

# Usages

$text = 'আমার সোনার বাংলা আমি তোমায় ভালোবাসি'; // text

$sl = 'bn'; // $q  & orginal text language code

$tl = 'hi'; // translate language code

# Warning 

Do not remove 

$tr = mb_convert_encoding($skb->text, "UTF-8"); // encode text utf-8 to real text

This code

# Usages Code

<br> <b> Main Text: </b> $text  <br>
<b>Translated Text: </b> $tr 
<br> <b> Main Text Language: </b> $skb->sl
<br> <b> Translated Text Language: </b> $skb->tl
<br> <b> Response: </b> $skb->response

# Screenshot

<img src="https://i.imgur.com/Ym1wA6A.png" height="200" width="100%"/>
