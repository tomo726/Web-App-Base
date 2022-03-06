<?php

$servername = "mysql";
$username = "root";
$password = "root";
$database = "test";
// $port = "3306";
// $socket = "/tmp/mysql.sock";

// Create connection 
// linkはインスタンス
$link = mysqli_connect($servername, $username, $password, $database);


//SQL文の発行
$num = 22;
// 入れ子内のクオーテーションにはバックスラッシュをつける
// 二重括弧の場合は変数を埋め込める
// linkからresultにクラス継承
mysqli_query($link, "create table test2(id int, name varchar(10)");
$tables = mysqli_query($link, "select * from test2");
print_r($tables);
foreach ($tables as $table){
	print_r($table);
}
$result = mysqli_query($link, "insert into test(id, name) values ($num, \"aa\");");
$result = mysqli_query($link, "insert into test2(id, name) values (123, \"aa\");");
echo mysqli_error($link);
$result = mysqli_query($link, "select * from test;");
mysqli_query($link, "delete from test where id=22");

//レコード件数
$row_count = $result->num_rows;
 
//連想配列で取得
while($row = $result->fetch_array(MYSQLI_ASSOC)){
	$rows[] = $row;
}
 
//結果セットを解放
$result->free();
$link->close();

?>

レコード件数：<?php echo $row_count; ?>
 
<table border='1'>
<tr><th>id</th><th>name</th></tr>
 

<!-- PHP内にhtmlを書くことはできないのでこうなる -->
<?php foreach($rows as $row){ ?> 
<tr> 
	<td><?php echo $row['id']; ?></td> 
	<td><?php echo htmlspecialchars($row['name'],ENT_QUOTES,'UTF-8'); ?></td> 
</tr> 
<?php } ?>


</table>

