<?php

require "conn.php";
if (isset($_GET['cp'])){
    $id=$_GET['cp'];
    $sql="SELECT text FROM text WHERE id=$id";
    $data=$conn -> query($sql);
    while ($row = $data -> fetch_assoc()){
        $txt= $row["text"];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="apple-touch-icon" sizes="180x180" href="IMG/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="IMG/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="IMG/favicon-16x16.png">
<link rel="manifest" href="IMG/site.webmanifest">
</head>
<body>

<textarea type="text" value="Hello World" id="myInput" style="display: none;" ></textarea>


<Script>
    var dat = <?= json_encode($txt) ?>;
    document.getElementById("myInput").value = dat;
    function myFunction() {
        var copyText = document.getElementById("myInput");
        copyText.select();
  copyText.setSelectionRange(0, 99999);
  var copyText = document.getElementById("myInput");
  navigator.clipboard.writeText(copyText.value);
}
myFunction()
window.location.href = "index.php";
</Script>

</body>
</html>
