<?php
// Желаемая структура папок
$structure = './test';

// Для создания вложенной структуры необходимо указать параметр
// $recursive в mkdir().

if (!mkdir($structure, 0777, true)) {
    die('Не удалось создать директории...');
}