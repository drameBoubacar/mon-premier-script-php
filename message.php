<?php 
$message1 = '0@sn9sirppa@#?ia’jgtvryko1';
$message2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$message3 = 'aopi?sgnirts@#?sedhtg+p9l!';

$lenghtMessage1 = mb_strlen($message1);
$divideLenghtMessage1 = $lenghtMessage1 /2;
$subChain1 = mb_substr($message1, 5, $divideLenghtMessage1);
$replaceCharacters1 = str_replace('@#?', ' ', $subChain1);
$reverseChain1 = strrev($replaceCharacters1);

$lenghtMessage2 = mb_strlen($message2);
$divideLenghtMessage2 = $lenghtMessage2 /2;
$subChain2 = mb_substr($message2, 5, $divideLenghtMessage2);
$replaceCharacters2 = str_replace('@#?', ' ', $subChain2);
$reverseChain2 = strrev($replaceCharacters2);

$lenghtMessage3 = mb_strlen($message3);
$divideLenghtMessage3 = $lenghtMessage3 /2;
$subChain3 = mb_substr($message3, 5, $divideLenghtMessage3);
$replaceCharacters3 = str_replace('@#?', ' ', $subChain3);
$reverseChain3 = strrev($replaceCharacters3);

echo $reverseChain1 . ' ' . $reverseChain2 . ' ' . $reverseChain3;
?>