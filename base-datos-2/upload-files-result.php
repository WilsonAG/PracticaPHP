<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        if ($_FILES['foto1']['tmp_name'] != "") {
            copy($_FILES['foto1']['tmp_name'], "files/".$_FILES['foto1']['name']);
            $fileSource = "files/".$_FILES['foto1']['name'];
            echo "<img src=\"$fileSource\">";
          }
          if ($_FILES['foto2']['tmp_name'] != "") {
            copy($_FILES['foto2']['tmp_name'], "files/".$_FILES['foto2']['name']);
            $fileSource = "files/".$_FILES['foto2']['name'];
            echo "<img src=\"$fileSource\">";
          }
          if ($_FILES['foto3']['tmp_name'] != "") {
            copy($_FILES['foto3']['tmp_name'], "files/".$_FILES['foto3']['name']);
            $fileSource = "files/".$_FILES['foto3']['name'];
            echo "<img src=\"$fileSource\">";
          }
    ?>
</body>
</html>