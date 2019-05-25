<?php
if($_FILES){
    $dir= "./file/";
    $uploadFile=$dir.$_FILES['my-file']['name'];
    if (move_uploaded_file($_FILES['my-file']['tmp_name'], $uploadFile)) {
        echo "Файл корректен и был успешно загружен.\n";
    } else {
        echo "Возможная атака с помощью файловой загрузки!\n";
    }


    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";


}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="my-file">
    <input type="submit" value="upload">
</form>
</body>
</html>
