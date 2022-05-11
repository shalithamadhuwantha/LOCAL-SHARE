<?php
require "conn.php";
if (isset($_GET['del'])){
    $id=$_GET['del'];
    $sql="DELETE FROM text WHERE id=$id";
    $conn -> query($sql);
    header("location: index.php");
}

?>