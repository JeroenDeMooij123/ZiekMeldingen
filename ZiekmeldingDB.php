<?php
$host = "localhost";
$dbname = "ziekmelding";
$user = "root";
$password = "";
try{

    $con = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);

} catch(PDOException $ex){

    echo "Verbinding mislukt: $ex";
}
?>