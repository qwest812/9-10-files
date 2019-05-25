<?php
$dir = "./";

// Открыть известный каталог и начать считывать его содержимое
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo '<pre>';
            echo "файл: $file : тип: " . filetype($dir . $file) . "\n";
            echo '</pre>';
        }
        closedir($dh);
    }
}