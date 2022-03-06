<?php
session_start();
// $_SESSION['name'] = '佐藤';
$name = $_SESSION['name'];
echo $name;
print('セッションIDは '.$_COOKIE['PHPSESSID'].' 。');
?>
