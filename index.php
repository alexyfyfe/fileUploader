<?php

$cent = 10;

static $coins_of_usa = array(1=>"penny", 5=>"nickel", 10=>"dime", 25=>"quarter", 50=>"half dollar", 100=>"dollar");

foreach ($coins_of_usa as $coins){
    echo "$coins";
}


?>