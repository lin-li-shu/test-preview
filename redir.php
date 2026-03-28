<?php
// какой порт дергать (можешь менять в ссылке)
$port = $_GET['p'] ?? '80';

// логируем каждый заход бота
$log = date('c') . " | HIT from: " . $_SERVER['REMOTE_ADDR'] . "\n";
file_put_contents("log.txt", $log, FILE_APPEND);

// редирект на цель
header("Location: http://127.0.0.1:$port", true, 302);
exit;
?>
