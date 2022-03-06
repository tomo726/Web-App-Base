<form action="sample6.php" method="post">
    <input name="sample" type="text">
    <input type="submit">
</form>

<?php
echo $_POST["sample"];
for($i=0;$i<10;$i++){
    echo $i;
}
if(false){
    echo "あっています";
}else{
    echo "あってません";
}
$array = ["name"=>2,"name2"=>3];
print_r($array);
?>

<h1 class="red_class">hello</h1>
<div class="photo_container">
  <div class="label">植物図鑑</div>
  <div class="photo">
    <img src="sea.jpeg" />
  </div>
  <div class="description">
    <div class="photo_title">ユキノシタ</div>
    <p>本州、四国、九州及び中国に分布し、湿った半日陰地の岩場などに自生する常緑の多年草である。<br />人家の日陰に栽培されることも多い。葉は円形に近く（腎円形）、裏は赤みを帯びる。根本から匍匐枝を出して繁殖する。</p>
  </div>
</div>

<style>

.red_class{
    color:red;
    font-size:50px;
}

.photo_container{
  background: #334006;
  border: 10px solid #000;
  border-radius: 6px;
  height: 500px;
  margin: 0 auto;
  overflow: hidden;
  position: relative;
  width: 500px;
}

.photo_container *{
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.photo_container img {
  height: 520px;
  margin: -10px 0 0 -10px;
  width: 520px;
}

.photo_containerhover .photo img,
.photo_container:hover .photo img{
  height: 500px;
  margin: 0 ;
  opacity: 0.5;
  width: 500px;
}

.photo_container .label {
  color: #fff;
  font-family: "Ryumin Ultra KL", serif;
  font-size: 28px;
  left: 20px;
  letter-spacing: 6px;
  opacity: 1;
  position: absolute;
  top: 14px;
  z-index: 999;
}


.photo_container .description {
  color: #fff;
  left: 0;
  opacity: 0;
  position: absolute;
  -moz-transform: scale(0.95);
  -ms-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  text-align: left;
  top: 100px;
  transform: scale(0.95);
  width: 500px;
}

.photo_container.hover .description,
.photo_container:hover .description {
  opacity: 1;
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -webkit-transform: scale(1);
 transform: scale(1);
}

.photo_container .description .photo_title{
  border-bottom : 4px solid #fff;
  font-family: "Ryumin Ultra KL", serif;
  font-size: 48px;
  margin: 0 20px 10px 20px;
  padding-bottom: 10px;
}

.photo_container .description p{
  font-family: " Ryumin Heavy KL", serif;
  font-size: 24px;
  margin: 0;
  padding: 20px;
}

</style>

