<?php

$arr = array('one','two','three','four','stop','five');
$count = 0;

while (list(, $val) = each($arr)){
    $arr[0] = substr($val,0,3);
    $count++;
}

while (list(, $val) = each($arr)){
    echo "$val<br />\n";
}

?>