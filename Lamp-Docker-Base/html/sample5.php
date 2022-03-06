
<?php
setcookie("namae", "suzuki",time()+60*60*24);
// setcookie("namae", "suzuki");
echo $_COOKIE["namae"];
echo "<br>";
echo time();
echo "<br>";
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s");
?>

