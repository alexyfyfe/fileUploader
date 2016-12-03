
<?php
/*
 * Connect to your Azure server and select database
 * Your connection details are all on the azure portal
 */
$db = new mysqli(
    "eu-cdbr-azure-north-e.cloudapp.net", //Server Name
    "bcfb17955d26fa", //Username
    "f5e7a502",
    "database_ajafyfe" ); //Database
/*
 * If database fails to connect - error message displays
 */
if ($db->connect_errno){
    die ('Connection Failed :'.$db->connect_error);
}
?>