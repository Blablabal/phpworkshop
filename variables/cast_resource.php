<?php
// Открываем файл
$fd = fopen('is_resource.php', 'r');

// Проверяем, является ли переменная $fd
// дескриптором открытого файла
if(is_resource($fd)) {
    // Дескриптор успешно получен, осуществляем
    // дальнейшие действия
    ...
}
