<?php
  //練習問題1
  //文字列連結を用いて、自分の名前をブラウザ上に表示する。
  $first_name = 'Ankyu';
  $last_name = 'Masakazu';
  echo $last_name . " " . $first_name . "<br>";
  echo "<br>";

  //練習問題2
  //以下の計算をそれぞれ行い、ブラウザ上に表示する。
  //8 * 3の計算
  echo 8 * 3 . "<br>";
  //24 / 8の計算
  echo 24 / 8 . "<br>";
  //6 + 10の計算
  echo 6 + 10 . "<br>";
  //6 - 10の計算
  echo 6 - 10 . "<br>";
  //10 % 7の計算
  echo 10 % 7 . "<br>";
  echo "<br>";

  //練習問題3
  //下記のプログラムのコメント部分をそれぞれ実行し、ブラウザ上に表示する。
  //※自己代入演算子を用いること
  $var = 2;
  //$varに12を足す
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

  //練習問題4
  //配列内に、伊達、櫻井、伊藤、藤尾を入れて、ブラウザ上にそれぞれを表示せよ。
  $list = array('伊達', '櫻井', '伊藤', '藤尾');
  echo $list[0] . "<br>";
  echo $list[1] . "<br>";
  echo $list[2] . "<br>";
  echo $list[3] . "<br>";
  echo "<br>";

  //練習問題5
  //連想配列内に、nameキーに'櫻井'、ageキーに'22'、placeキーに'富山'を入力して、ブラウザ上にそれぞれを表示せよ。
  $lists = array('name' => '櫻井', 'age' => '22', 'place' => '富山');
  echo $lists['name'] . "<br>";
  echo $lists['age'] . "<br>";
  echo $lists['place'] . "<br>";
  echo "<br>";

  //練習問題6
  //以下の$a, $b, $cは三角形の辺の長さである。
  //この3辺で三角形は成立可能か($a + $b > $c)を求めよ。もし、三角形が成立可能ならばブラウザに「可能」、成立不可能ならば「不可能」と表示せよ。
  $a = 2;
  $b = 3;
  $c = 4;

  if($a + $b > $c){
    echo '可能' . "<br>";
  }else{
    echo '不可能' . "<br>";
  }
  echo "<br>";

  //練習問題7
  //ある学校のこれまでの成績表では 5 ~ 1 までのアルファベットで成績をつけていました。今年度から成績を A ~ E の数字で成績をつけることになりました。
  //これまでの成績も以下の様に変換することになりました。これを、switch文を用いてこの問題を解きなさい。
  /*
  変換前 -> 変換後
    5   ->   A
    4   ->   B
    3   ->   C
    2   ->   D
    1   ->   E
  */
  $score = 3;
  switch($score){
    case 5:
      echo 'A' . "<br>";
      break;
    case 4:
      echo 'B' . "<br>";
      break;
    case 3:
      echo 'C' . "<br>";
      break;
    case 2:
      echo 'D' . "<br>";
      break;
    case 1:
      echo 'E' . "<br>";
      break;
    default:
      echo '正しい成績を入力してください。' . "<br>";
      break;
  }
  echo "<br>";

  //練習問題8
  //変数$i = 10; を用意し、10から1まで1つずつカウントダウンするプログラムを作成せよ。(1つずつ改行して表示せよ)
  //この問題にはwhileを用いること
  $i = 10;
  while($i > 0){
    echo $i . "<br>";
    $i--;
  }
  echo "<br>";

  //練習問題9
  //正の整数1から9に、それぞれ5を掛けた数を半角スペース区切りでブラウザに表示せよ。
  //この問題にはforを用いること
  for($i = 1; $i <= 9; $i++){
    echo $i . ' ';
  }
  echo "<br>";
  echo "<br>";

  //練習問題10
  //以下の配列を表示せよ。(1つずつ改行して表示せよ)
  //この問題にはforeachを用いること
  $food = array('carry', 'onigiri', 'candy', 'ham', 'meet', 'rice');
  foreach($food as $value){
    echo $value . "<br>";
  }
  echo "<br>";

  //課題1
  //西暦の計算
  //以下の配列に2つの西暦a, bがあります。その2つのaからbが何年間か出力しなさい。
  $year = array(1994, 2017);
  $dif = $year[1] - $year[0];
  echo $dif . "<br>";
  echo "<br>";

  //課題2
  //かまくらづくり
  //櫻井がはしゃいでかまくらを作り始めました。どれだけの体積の雪が必要か計算しなさい。
  //そのかまくらは四角形であり、以下の配列に外側の1辺と内側の1辺の長さが入っている。(r1 > r2)
  //下の行のecho文のコメントを外すとimageが出てくるのでこちらも参照するとわかりやすい。
  echo '<img src="./assets/img/img1.png">';
  echo "<br>";
  $size = array(6, 4);
  $out = $size[0] * $size[0] * $size[0];
  $in = $size[1] * $size[1] * $size[1];
  $v = $out - $in;
  echo $v . "<br>";
  echo "<br>";

  //課題3
  //行列の計算
  //まず、以下のecho文のコメントをはずしてください。
  //以下の配列内にa = 10, b = -20, c = 12, d = 6がそれぞれ代入されている。
  //この行列を表す配列を用いて、行列の計算を行いなさい。
  echo '<img src="./assets/img/matrix1.png">';
  echo "<br>";
  $matrix = array(10, -20, 12, 6);
  $cal_mat = $matrix[0] * $matrix[3] - $matrix[1] * $matrix[2];
  echo $cal_mat . "<br>";
  echo "<br>";

  //課題4
  //自己紹介
  //練習問題5を参考にして、自己紹介をせよ。
  //例) 私は、安久昌和です。出身は石川県で、年齢は22歳、趣味はバスケットボールです。電子・情報工学科に所属しています。
  //必ず、連想配列を用いること
  $me = array('name' => '安久昌和', 'locate' => '石川県', 'age' => '22', 'hobby' => 'バスケットボール', 'major' => '電子・情報工学科');
  echo '私は、' . $me['name'] . 'です。' . "<br>";
  echo '出身は' . $me['locate'] . 'で、年齢は' . $me['age'] . '歳、趣味は' . $me['hobby'] . 'です。' . "<br>";
  echo $me['major'] . 'に所属しています。' . "<br>";
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
  for($i = 1; $i <= 100; $i++){
    echo $i . ' ';
    if($i % 10 == 0){
      echo "<br>";
    }
  }
  echo "<br>";
?>
