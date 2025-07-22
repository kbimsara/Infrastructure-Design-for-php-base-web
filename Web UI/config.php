<?php
$serverName="db";
// $serverName="34.65.250.137:3306";
$userName = "root";
$password ="rootpass";
$databaseName = "aws-crud";

//connect database to variable
$Connector = new mysqli($serverName, $userName, $password, $databaseName);

//check database cpnnect or not
if($Connector->connect_error){
    die("Connection is failed" . $Connector->connect_error);

}