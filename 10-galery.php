<?php

$extension = [
    'jpeg'=>'image/jpeg',
    'png'=>'image/png',
];
$fileSize=  40000;
$badFileName=[];
$goodFileName=[];
$files = [];
if ($_FILES) {
//    echo "<pre>";
//    var_dump($_FILES);
//    echo "</pre>";

    foreach ($_FILES['my-file'] as $kValue => $file) {
        foreach ($file as $key => $name) {
            $files[$key][$kValue] = $name;
        }
    }

    foreach ($files as $file){
        if((isEquelType($file['type'], $extension)) && ($file['size']<=$fileSize)){
//        if((isEquelType($file['type'], $extension)) ){
            if(saveFile($file)){
               array_push($goodFileName,$file['name']);
            }else{

            }
        }else{
            array_push($badFileName,$file['name']);
        }
    }
}


function isEquelType($fileType, array $extension){
    foreach ($extension as $ext){
        if($ext==$fileType){
            return true;
        }
    }
    return false;
}


function saveFile($file, $path = "./file/")
{
    $uploadFile = $path . $file['name'];
    if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
        return true;
    } else {
        return false;
    }
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
<?php
if(!empty($goodFileName)){
    echo "Добавленные файлы:";
    foreach ($goodFileName as $gfile){
        echo " $gfile,";
    }
    echo "<br>";
}


if(!empty($badFileName)){
    echo "Єто не картинки, или размер картинки большe ".$fileSize."кб :";
    foreach ($badFileName as $bfile){
        echo " $bfile,";
    }
    echo "<br>";
}

?>
<form method="post" action="#" enctype="multipart/form-data">
    <input type="file" name="my-file[]" multiple="multiple">
    <input type="submit" value="upload">
</form>


<div><form method="post" ><input type="submit" name="show-images" value="Показать картинки"></form></div>
</body>
</html>
<?php
if(!empty($_POST['show-images'])){
    $files=scandir("./file");

    foreach ($files as $file){
        $pathInfo=pathinfo($file);
        foreach ($extension as $key=>$ext) {
            if($pathInfo['extension']==$key){
                echo '<img src="./file/'.$pathInfo['basename'].'">';
            }

        }
    }
}
?>