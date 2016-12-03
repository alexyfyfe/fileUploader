?<php
    $dbhost = "eu-cdbr-azure-north-e.cloudapp.net";
    $dbuser = "bcfb17955d26fa";
    $dbpass = "f5e7a502";
    $dbname = "database_ajafyfe";
    mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server');
mysql_select_db($dbname) or die('database selection problem');
?>