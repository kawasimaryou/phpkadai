<?php
function nibai($val) {
  return $val * 2;
}
echo nibai(2) . "\n";

function f($a, $b){
    return $a + $b;
}
echo f(1, 2) . "\n";

function kakeru($arr) {
    $result = 1;
    foreach ($arr as $val) {
        $result *= $val;
    }
    return $result;
}
echo kakeru(array(1,3,5,7,9)) . "\n";

function max_array($arr) {
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a) {
         $max_number = $a;
     }
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
 echo max_array(array(11,1,22,2,33)) . "\n";
 
 //HTMLタグを含む文字列からタグを取り除く
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除くよっ！</p>";
echo strip_tags($str) ."\n";

//１つ以上の要素を配列の最後に追加する
$members=array("一郎","二郎","三郎");  
array_push($members,"四郎","五郎");
print_r($members) ."\n";

//配列の要素の最後にひとつまたは複数の配列を結合
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];

$array = array_merge($array1, $array2, $array3);
 
print_r($array) ."\n";

//現在の Unix タイムスタンプを返す
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
// あるいは strtotime() を使用します
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";

//日付を Unix のタイムスタンプとして取得する
// デフォルトのタイムゾーンを設定します。PHP 5.1 以降で使用可能です
date_default_timezone_set('UTC');

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006)) ."\n";

//日時を任意の形式でフォーマットし、日付文字列を返す
// 現在日付をフォーマットする
echo date('Y/m/d');
echo '<br>';
 
// 現在日時をフォーマットする
echo date('Y-m-d H:i:s');
echo '<br>';
echo date('Y年m月d日 H時i分s秒');
echo '<br>' ."\n";
