<?php
//スネークケース
$name_sakurai = '';
//キャメルケース
//$nameSakurai = '';

//変数
$name = 'sakurai';
//echo $name;
$name .= 'kizuku';
echo $name;

echo "<br>";

//自己代入を用いた四則演算
$num = 10;
echo $num;
$num += 2; // $num = $num + 2;
echo $num;
$num -= 10;
echo $num;

echo "<br>";

//配列
$hoge = array('hoge', 'fuga', 'hogehoge');
echo $hoge[0];
echo $hoge[1];
echo $hoge[2];

echo "<br>";

//連想配列
$fruits = array('keniti' => 'orange', 'tanikawa' => 'grape', 'shibata' => 'apple');
echo $fruits['keniti'] . ' ';
echo $fruits['tanikawa'] . ' ';
echo $fruits['shibata'];

//if文
echo "<br>";
$str = 'hoge';
if($str == 'hoge'){
  echo 'hoge';
}elseif($str == 'fuga'){
  echo 'fuga';
}else{
  echo 'no';
}

echo "<br>";

//switch文
$str = 'hoge';
switch($str){
  case 'hoge':
  echo 'hoge';
  break;
  case 'fuga':
  echo 'fuga';
  break;
  default:
  echo 'no';
  break;
}

echo "<br>";

//while
$a = 1;
while($a < 4){
  echo $a;
  $a++;
  //$a += 1;
}

echo "<br>";

//for
for($a = 1; $a < 4; $a++){
  echo $a;
}

echo "<br>";

//foreach
$sakurai = array('sakurai', 'toyama', '22');
for($b = 0; $b < 3; $b++){
  echo $sakurai[$b] . "<br>";
}
foreach($sakurai as $value){
  echo $value;
  echo "<br>";
}

$anq = array('name' => 'ankyu', 'location' => 'toyama', 'age' => '22');
foreach($anq as $key => $value){
  echo $value;
  echo "<br>";
}

?>
