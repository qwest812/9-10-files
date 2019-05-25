<?php
echo "<pre>";
var_dump($_REQUEST);
//var_dump($_GET);
if (!empty($_REQUEST)) {

//    var_dump($_GET);
//    var_dump($_POST);
//    var_dump($_REQUEST);

    $file = fopen('file/request.txt', 'a+');
    var_dump($file);
    fwrite($file, serialize($_REQUEST));
    fclose($file);
}

echo "</pre>";


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
<!--<form action="" method="post">-->
    <form action="" method="post">
<!--    <span>login</span>-->
<!--    <input type="text" name="login2">-->
<!--    <span>password</span>-->
<!--    <input type="password" name="pass2">-->

        <div>first<input type="checkbox" name="questions[]" value="first"></div>
        <div>second<input type="checkbox" name="questions[]" value="second"></div>
        <div>third<input type="checkbox" name="questions[]" value="third"></div>
    <input type="submit" name="submit2" value="Sent">

</form>

</body>
</html>

