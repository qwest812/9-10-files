<?php

$dir= "./";

foreach (glob("./*.php") as $filename) {
    echo "<pre>";
    echo "$filename размер " . filesize($filename) . "\n";
    echo "</pre>";
}