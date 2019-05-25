<!--https://www.php.net/manual/ru/function.fopen.php-->
<?php


$filepath='file/request2.txt';



$file=fopen($filepath,'a+');
fwrite($file, "привет");
$content=fread($file,filesize($filepath));

echo $content."<br>";
echo filesize($filepath);
//var_dump($content2);
//
fclose($file);
