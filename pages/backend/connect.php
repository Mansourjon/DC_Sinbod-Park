<?php
$conn= @mysqli_connect('localhost', 'root', '', 'itashkhis') or die('Хатоги ҳангоми пайвастшави ба БМ');
if(!$conn) die(mysqli_connect_error());
mysqli_set_charset($conn, "utf8") or die('кодировка номаълум');

?>