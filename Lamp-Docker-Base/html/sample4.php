<?php



$link = mysqli_connect("mysql", "root", "root", "test");

echo "<br>初期値<br>";
describe_table($link);

mysqli_query($link, "insert into test(id, name) values (12345, \"abcde\");");
echo "<br>insert into<br>";
describe_table($link);

mysqli_query($link, 'update test set id=123, name="hello";');
echo "<br>update set<br>";
describe_table($link);

mysqli_query($link, 'delete from test;');
echo "<br>削除後<br>";
describe_table($link);

mysqli_query($link, "create table test2(id int, name varchar(10));");
$rows = mysqli_query($link, "show tables;");

foreach($rows as $row){
    print_r($row);
}

mysqli_query($link, "drop table test2");
$rows = mysqli_query($link, "show tables;");

foreach($rows as $row){
    print_r($row);
}

$link->close();


function describe_table($link){
    $rows = mysqli_query($link, "select * from test;");
    foreach($rows as $row){
        print_r($row);
    }
}

// mysqli_query($link, "create table test2(id int, name varchar(10)");
// mysqli_query($link, "insert into test(id, name) values (12345, \"abcde\");");
// mysqli_query($link, 'update test set id=123, name="hello";');
// mysqli_query($link, "delete from test where name=\"abcde\";");
?>


