<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'onlinedairysystem';

$conn = new mysqli($server,$username,$password,$dbname);

if($conn->connect_error)
{
    die('conction failed'.$conn->connect_error);
}
function pagechange($name)
{
    header("location:$name");
}

?>