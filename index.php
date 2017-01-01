<?php

$arr = array('one','two','three','four','stop','five');
$count = 0;


while (list(, $val) = each($arr)){
    echo "hi";
    echo "$val<br />\n";
}

?>