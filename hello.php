<?php 
$bookName = 'Stevenson voyage avec un âne dans les Cévennes';
$readBook = true;
$publicationYearsBook = 2017;
$priceBook = 9.95;

if($readBook == true) {
    echo 'Tu as lu le livre ';
}
else {
    echo 'Tu n\'as pas lu le livre';
}

echo "$bookName \n $readBook \n $publicationYearsBook \n $priceBook"
;