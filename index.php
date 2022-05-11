<?php
require "conn.php";

    $sql= "SELECT * FROM text ORDER BY id DESC";
    $data=$conn ->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCAL SHARE</title>

    <!-- file link -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="IMG/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="IMG/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="IMG/favicon-16x16.png">
<link rel="manifest" href="IMG/site.webmanifest">

</head>
<body>
    <h1 id="title">LOCAL SHARE</h1>
    <form action="insert.php" method="post">
        <div class="form-group">
            <textarea class="form-control widtbl" id="txt" name="txt" cols="30" rows="1" placeholder="enter text hear" required></textarea>
            <input type="submit" class="btn btn-info btnwid" value="ADD">
        </div>
    </form>

    <table class="table widtbl">
        <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col cont">content</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                   
                </tr>
            </thead>
        <tbody>
        <?php   while ($row = $data -> fetch_assoc()){
            echo '<tr>';     
            echo     '<td>' . $row["id"] .'</td>';
            echo     '<td>' .$row["title"]  .'</td>';
            echo     '<td> <a href="copy.php?cp='.$row["id"].'"  class="btn btn-primary">COPY</a></td>';
            echo     '<td> <a href="delete.php?del=' .$row["id"].'" class="btn btn-danger">DELETE</a> </td>';
            echo     '<td> <a href="read.php?red='.$row["id"].'" class="btn btn-success"> READ</a></td>';
            echo' </tr>';}
            ?>
        </tbody>
    </table>
   
 <p id="lks"></p>
</body>
<script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>