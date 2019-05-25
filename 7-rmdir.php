<?php
$dir= "./test";
if (!is_dir($dir)) {
    mkdir("./tt");
}

rmdir($dir);