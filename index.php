<?php

$arr = array('one','two','three','four','stop','five');
$count = 0;

while (list(, $val) = each($arr)){
    $arr[$count] = 'hi';
    $count++;
}

while (list(, $val) = each($arr)){
    echo "$val<br />\n";
}

?>