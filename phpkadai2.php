<?php
echo 'hello php!' . "\n";

$a = 3;
$b = 7;
echo $a + $b . "\n";

$array_month = ["1月", "２月", "３月", "４月", "5月", "6月", "７月", "８月", "９月", "１０月", "１１月", "１２月"];
echo $array_month[7]. "\n";

$name = [
"hello" =>"Hello, ",
"name" =>"川島",
"world " =>"‘s World!"
];
echo $name["hello"];
echo $name["name"];
echo $name["world "]. "\n";
    
$tech_boost ="tech";
$tech_boost.="_boost";
echo $tech_boost. "\n";

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"]. "\n";