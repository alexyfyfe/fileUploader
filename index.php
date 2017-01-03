<?php

$payroll = array(
    123=>array("john smith", 10000.0),
    456=>array("jane smythe", 12000.0),
    789=>array("jeremy smithers", 14000.0)
);
payrise($payroll, 10.0);
var_dump($payroll);

function payrise (&$payroll, $rise){
    foreach ($payroll as $id => &$person){
        foreach ($person as $name => $pay){
            $person[$name] = $pay*($rise/100+1);
        }
    }
}

?>