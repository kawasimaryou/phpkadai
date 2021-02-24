<?php
$name = "川島";
if ($name == "阿部") {
    echo "あなたの名前ではありません";
} else {
    echo "私は川島です" . "\n";
};

for($i = 1; $i < 10001; $i++){
    echo $i . "\n";
}

$fruits = array("apple", "orange", "remon", "banana", "yuzu");
foreach($fruits as $fruits){
    echo $fruits . "\n";
}

/* for文の始めの値を定義する /
/* for文の終わりの値を定義する */
$start = 1;

$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if( ($i % 5) == 0){
    echo $i . "\n";
   }
}