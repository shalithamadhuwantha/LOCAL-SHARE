<?php
$host="localhost";
$usr="root";
$db="clip";
$pass="";

$conn= new mysqli($host,$usr,$pass,$db);
if ($conn -> connect_error){
    die("connection fail");
}

?>