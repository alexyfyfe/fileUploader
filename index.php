<?php

$arr = array('one','two','three','four','stop','five');

foreach ($arr as $day){
    $day = substr($day,0,3);
    echo "$day<br />\n";

}

?>