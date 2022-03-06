<!-- 最もシンプルなフォーム -->
<form method="post" action="sample3.php">
    <input type="text" name="user">
</form>

<?php
if ($_POST["user"]){
    echo $_POST["user"];
}
else{
    echo "何もなし";
}
?>