<?php
require "conn.php";
if (isset($_GET["red"])){
    $id=$_GET["red"];
    $sql="SELECT text,date,title FROM text WHERE id=$id";
    $data=$conn-> query($sql);
    while ($row=$data->fetch_assoc()){
        $txt=$row["text"];
        $date=$row["date"];
        $title = $row['title'];
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>


    <link rel="apple-touch-icon" sizes="180x180" href="IMG/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="IMG/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="IMG/favicon-16x16.png">
<link rel="manifest" href="IMG/site.webmanifest">
    <style>
        #read{
            margin-top: 25px;
            width: 97%;
            height: auto;
            border: none;
            font-family: monospace;
            font-size: 15px;
            color: black;
            margin-left: 2%;
            margin-bottom: 15px;
        }
        #gohome{
            width: 50px;
            height: 50px;
            font-size: 49px;
            background-color:rgba(255, 196, 0, 0);
            border: none;
        }
        #gohome:active{
            font-size: 45px;
        }
        a{
            color: black;
            opacity: 0.8;
            z-index: 99;
            float: right;
            margin-right: 10px;
        }

    </style>
</head>
<body>
    <button id="gohome" onclick="window.location.href='index.php'"> <i class="fa fa-arrow-circle-left"></i></button>
    <div class="text">
        <textarea cols="50" rows="50" id="read">loading error</textarea>
        <hr>
        <p>DATE:</p>
        <small id="date">no_date available</small>
    </div>
    <a href="#gohome" id="up"><i class="fa fa-arrow-circle-up" style="font-size:36px"></i></a>
</body>
    <script>
        document.getElementById("read").innerHTML= <?= json_encode($txt) ?>; 
        document.getElementById("date").innerHTML= <?= json_encode($date) ?>; 
        document.title= <?= json_encode($title) ?>;
    </script>
</html>