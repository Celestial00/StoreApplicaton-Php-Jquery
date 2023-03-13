<?php


$USER_NAME = 'root';
$PASSWORD = '';
$SERVER = 'localhost';
$DATABASE = 'store';

$conn = mysqli_connect($SERVER, $USER_NAME, $PASSWORD, $DATABASE);

if(!$conn){

    echo "nope";

}

$Query = "SELECT * FROM `product`";

$res = mysqli_query($conn, $Query);

if(!$res){

    echo "nope";

}

$Result_arrray = [];

while($rows = mysqli_fetch_assoc($res)){

    array_push($Result_arrray, $rows);

}


echo json_encode($Result_arrray);

?>