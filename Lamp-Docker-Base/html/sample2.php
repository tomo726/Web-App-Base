
<!-- 変数と関数 -->
<?php
// 変数
$a = 10;
// 関数
function sample($name){
    echo $name.'さん、こんにちは';
}
echo $a."</br>";
// 関数の呼び出し
sample("太郎")
?>


<!-- クラスとインスタンス -->
<?php
// コンストラクタはpythonの__init__
// PHPの -> はpythonのクラス.プロパティのときの「.」

class User
{
  //メンバー
  //public $name;
  //private $nickname;

  //コンストラクタ
  function __construct($name,$nickname){
    //引数をメンバー変数に格納
    $this->a = $name;
    $this->b = $nickname;
  }
  function echo_name($c){
      echo $this->a.$c."<br>";
  }
}

//インスタンス化
$user = new User('sato','unko');

// インスタンスのプロバティを呼び出す
echo $user->a."<br>";
echo $user->b."<br>";//Fatal error: Cannot access private property

// インスタンスのメソッドを呼び出す
$user -> echo_name('やっほー');
?>

<!-- 配列と辞書 -->
<?php
$dic = [
    "a" => 11,
    "b" => 22
];
$array = [123, 222, 333];
echo $array[0]."<br>";
echo $dic["a"]."<br>";

if (in_array(123, $array)){
    echo "arrayの中には123が含まれています<br>";
}
?>


<!-- ループの使い方 -->
<?php
// pythonだと rows.append(i)に相当
for ($i=0; $i<5; $i++) {
    $rows[] = $i;
}

foreach ($rows as $row) {
    echo $row;
}
?>