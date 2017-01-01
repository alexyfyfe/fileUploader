<?php

$arr = array('one','two','three','four','stop','five');

foreach ($arr as $day){
    $day = 'hi';
};

while (list(,$val) = each($arr)){
    echo "$val<br />\n";
};

?>