<?php
require "conn.php";
if (isset($_POST["txt"])){
    $data = $_POST["txt"];
    $title= wordwrap($data,34,"*",TRUE);
    $title = explode("*",$title);
    $title2 = $title[0];
    $sql = "INSERT INTO `text`(`title`,`text`) VALUES ('$title2','$data');";
    if ($conn -> query($sql)){
        header("location: index.php");
    }else{
        echo "error";
    }

}

?>
