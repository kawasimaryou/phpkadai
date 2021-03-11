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


