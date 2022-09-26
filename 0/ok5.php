<?php
/*
$okej[] = "aa";
$okej[] = "bb";
$okej[] = "cc";
$okej[] = "dd";
echo"<br>";
for($a=3;$a>=0;--$a){
    echo $okej[$a] . "<br>";
}
*/
$okej['a'] = "AAAAA";
$okej['b'] = "BBBBB";
$okej['c'] = "CCCCC";
foreach($okej as $e){
    echo $e." . ";
}
echo"<br><br><br>";
echo $okej['a'] . " . " . $okej['c'];
?>