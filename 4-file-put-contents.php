<?php

$file = 'file/request.txt';

$current = file_get_contents($file);

$myName= "Iaroslav \n";

file_put_contents($file,$myName,FILE_APPEND | LOCK_EX);