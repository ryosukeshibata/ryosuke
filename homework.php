<?php
  //練習問題1
  //文字列連結を用いて、自分の名前をブラウザ上に表示する。
  $first_name = 'Ryosuke';
  $last_name = 'Shibata';
  echo $first_name.$last_name; echo "<br>";
  //練習問題2
  //以下の計算をそれぞれ行い、ブラウザ上に表示する。
  //8 * 3の計算
  echo 8*3;
  //24 / 8の計算
  echo 24/8;
  //6 + 10の計算
  echo 6+10;
  //6 - 10の計算
  echo 6-10;
  //10 % 7の計算
  echo 10 % 7; echo "<br>";
  //練習問題3
  //下記のプログラムのコメント部分をそれぞれ実行し、ブラウザ上に表示する。
  //※自己代入演算子を用いること
  $var = 2;
  //$varに12を足す
  $var += 12;
  echo $var;
  //$varに7で割る
  $var /= 7;
  echo $var;
  //$varに5を掛ける
  $var *= 5;
  echo $var;
  //$varの3の剰余
  $var %= 3;
  echo $var; echo "<br>";
  //練習問題4
  //配列内に、伊達、櫻井、伊藤、藤尾を入れて、ブラウザ上にそれぞれを表示せよ。
  $list = array('伊達','櫻井','伊藤','藤尾');
  echo $list[0]; echo $list[1]; echo $list[2]; echo $list[3];
  echo "<br>";
  //練習問題5
  //連想配列内に、nameキーに'櫻井'、ageキーに'22'、placeキーに'富山'を入力して、ブラウザ上にそれぞれを表示せよ。
  $lists = array('name'=>'櫻井','age'=>'22','place'=>'富山');
  echo $lists['name']; echo $lists['age']; echo $lists['place'];
  echo '<br>';
  //練習問題6
  //以下の$a, $b, $cは三角形の辺の長さである。
  //この3辺で三角形は成立可能か($a + $b > $c)を求めよ。もし、三角形が成立可能ならばブラウザに「可能」、成立不可能ならば「不可能」と表示せよ。
  $a = 2; $b = 4; $c = 11;
  if($a + $b > $c) {
    echo "可能";
  }
  else{
    echo "不可能";
  }
  echo "<br>";
  //練習問題7
  //ある学校のこれまでの成績表では A ~ E までのアルファベットで成績をつけていました。今年度から成績を 5 ~ 1 の数字で成績をつけることになりました。
  //これまでの成績も以下の様に変換することになりました。これを、switch文を用いてこの問題を解きなさい。
  /*
  変換前 -> 変換後
    5   ->   A
    4   ->   B
    3   ->   C
    2   ->   D
    1   ->   E
  */
  for ($i=5; $i > 0; $i--) {
    $n = $i;
    echo "$n"."->";
    switch ($n) {
      case '5':
        $n = "A";
        break;

      case '4':
        $n = "B";
        break;

      case '3':
        $n = "C";
        break;

      case '2':
        $n = "D";
        break;

      case '1':
        $n = "E";
        break;
    }
    echo "$n<br>";
  }
  //練習問題8
  //変数$i = 10; を用意し、10から1まで1つずつカウントダウンするプログラムを作成せよ。(1つずつ改行して表示せよ)
  //この問題にはwhileを用いること
  $i = 10;
  while ($i > 0) {
    echo $i."<br>";
    $i--;
  }
  //練習問題9
  //正の整数1から9に、それぞれ5を掛けた数を半角スペース区切りでブラウザに表示せよ。
  //この問題にはforを用いること
  for ($i=1; $i <10 ; $i++) {
    echo $i * 5;
    echo " ";
  }
  echo "<br>";
  //練習問題10
  //以下の配列を表示せよ。(1つずつ改行して表示せよ)
  //この問題にはforeachを用いること
  $food = array('carry', 'onigiri', 'candy', 'ham', 'meet', 'rice');
 foreach ($food as $value) {
   echo $value."<br>";
 }

  //練習問題11
  //以下の変数を用いて加減乗除のそれぞれの関数を作成せよ。
  $a = 10;
  $b = 5;

  //課題1
  //西暦の計算
  //以下の配列に2つの西暦a, bがあります。その2つのaからbが何年間か出力しなさい。
  $year = array(1994, 2017);
  echo $year[1]-$year[0]."<br>";

  //課題2
  //かまくらづくり
  //櫻井がはしゃいでかまくらを作り始めました。どれだけの体積の雪が必要か計算しなさい。
  //そのかまくらは四角形であり、以下の配列に外側の1辺と内側の1辺の長さが入っている。(r1 > r2)
  //下の行のecho文のコメントを外すとimageが出てくるのでこちらも参照するとわかりやすい。
  echo '<img src="./assets/img/img1.png">';
  $size = array(6, 4);
  $size_r1 = $size[0]*$size[0]*$size[0];
  $size_r2 = $size[1]*$size[1]*$size[1];
  $V =$size_r1 -$size_r2;
  echo $V."<br>";
  //課題3
  //行列の計算
  //まず、以下のecho文のコメントをはずしてください。
  //以下の配列内にa = 10, b = -20, c = 12, d = 6がそれぞれ代入されている。
  //この行列を表す配列を用いて、行列の計算を行いなさい。
  echo '<img src="./assets/img/matrix1.png">';
  $matrix = array(10, -20, 12, 6);
  $det = $matrix[0]*$matrix[3]-$matrix[1]*$matrix[2];
  echo $det;
  echo "<br>";
  //課題4
  //自己紹介
  //練習問題5を参考にして、自己紹介をせよ。
  //例) 私は、安久昌和です。出身は石川県で、年齢は22歳、趣味はバスケットボールです。電子・情報工学科に所属しています。
  //必ず、連想配列を用いること
  $abc = array('name'=>'柴田凌輔','from'=>'富山','age'=>'22','habit'=>'サッカー','tpu'=>'知能デザイン工学科' );
  echo "私は、";
  echo $abc['name'];
  echo "です。出身は";
  echo $abc['from'];
  echo "で、年齢は";
  echo $abc['age'];
  echo "歳、趣味は";
  echo $abc['habit'];
  echo "です。";
  echo $abc['tpu'];
  echo "に所属しています。";
  echo "<br>";
  //課題5
  //1~100までの数字を表示するプログラムを作成せよ。
  //※出力のレイアウトは下記のように表示すること(数字を10個表示したタイミングで改行する)
  //for, ifのみを用いること
  /*
  1 2 3 4 5 6 7 8 9 10
  11 12 13 14 15 16 17 18 19 20
  ...
  ...
  91 92 93 94 95 96 97 98 99 100
  */
  for ($i= 1; $i <101 ; $i++) {
    echo $i;
    if ($i%10==0) {
      echo "<br>";
    }
    else{
      echo " ";
    }
  }
    //課題6
  //時差の問題
  //以下の配列に都市の個数、各都市の時差、ある都市の現在時刻が入っている。
  //この配列を用いて、各都市の現在時刻を表示せよ。
  //ちなみに、今シンガポールで22:38なので、東京では0:38である。
  //for, ifのみ用いること
  $jisa = array(6, array('tokyo', 9), array('beijing', 8), array('singapore', 7), array('london', 0), array('newyork', -5), array('singapore', '22:38'));

  for ($i=1; $i <4 ; $i++) {
    print_r($jisa[$i][1]);
//  print_r($jisa);
}
//  print_r($jisa);

  //課題7
  //練習問題1~10と課題1~5を関数化せよ。



  //課題7.1
  //練習問題1の関数化
  function rensyu1($last_name, $first_name){
  echo $last_name . " " . $first_name . "<br>";
  echo "<br>";
  }
  rensyu1('Ankyu', 'Masakazu');
  //課題7.2
  //練習問題2の関数化
function kuros($a,$b){
  echo $a * $b . "<br>";
}
function div($a,$b){
  echo $a / $b . "<br>";
}
function plus($a,$b){
  echo $a + $b . "<br>";
}
function mainas($a,$b){
  echo $a - $b . "<br>";
}
function ram($a,$b){
  echo $a % $b . "<br>";
}
  echo  "<br>";
  //課題7.3
  //練習問題3の関数化
  //$varに12を足
  $var = 2;
  function ziko($var){
      $var += 12;
      echo $var . "<br>";
  //$varに7で割る
      $var /= 7;
      echo $var . "<br>";
  //$varに5を掛ける
      $var *= 5;
      echo $var . "<br>";
  //$varの3の剰余
      $var %= 3;
      echo $var . "<br>";
      echo "<br>";
    }
  //課題7.4
  //練習問題4の関数化
  $list = array('伊達', '櫻井', '伊藤', '藤尾');
  function list($list){
  echo $list[0] . "<br>";
  echo $list[1] . "<br>";
  echo $list[2] . "<br>";
  echo $list[3] . "<br>";
  echo "<br>";
}
  //課題7.5
  //練習問題5の関数化
  $lists = array('name' => '櫻井', 'age' => '22', 'place' => '富山');
  function risuto($list){
    echo $lists['name'] . "<br>";
  echo $lists['age'] . "<br>";
  echo $lists['place'] . "<br>";
  echo "<br>";
}
  //課題7.6
  //練習問題6の関数化

  //課題7.7
  //練習問題7の関数化

  //課題7.8
  //練習問題8の関数化

  //課題7.9
  //練習問題9の関数化

  //課題7.10
  //練習問題10の関数化

  //課題7.11
  //課題1の関数化

  //課題7.12

  //課題2の関数化
  //課題7.13
  //課題3の関数化

  //課題7.14
  //課題4の関数化

  //課題7.15
  //課題5の関数化

  //課題8
  //以下のSQL問題を解け(SQL文のみ)
  //SELECT
  //課題8.1
  //membersテーブルからデータの全件取得

  //課題8.2
  //membersテーブルのmember_idが2のデータを取得

  //課題8.3
  //membersテーブルのmember_nameが櫻井築のデータを取得(完全一致)

  //課題8.4
  //membersテーブルのmember_nameに伊藤が含むデータの取得(部分一致)

  //課題8.5
  //membersテーブルのmember_nameが「伊藤」で始まるデータの取得(前方一致)

  //課題8.6
  //membersテーブルのmember_nameが「裕」で終わるデータの取得(後方一致)

  //課題8.7
  //membersテーブルのmember_idが5以下のデータを取得

  //課題8.8
  //membersテーブルのmember_idを降順で5件取得

  //INSERT
  //課題8.9
  //membersテーブルに自分の名前を追加する

  //UPDATE
  //課題8.10
  //membersテーブルのmember_idが7のデータの名前を自分の名前に変更

  //DELETE
  //課題8.11
  //membersテーブルの課題8.9で追加したデータの削除
/*>>>>>>> e5b357e57410d503fed986aa4a3280042bcbbad4:homework.php*/
?>
