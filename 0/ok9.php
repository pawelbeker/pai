<?php
$a = array();
for($i=0;$i<=9;++$i){
    $a[$i] = rand(0, 99);
    echo $a[$i] . " ";
}
echo "<br> Jest ".count($a)." liczb <br>";
sort($a, SORT_REGULAR);
for($i=0;$i<=9;++$i){
    echo $a[$i] . " ";
}
rsort($a, SORT_REGULAR);
echo" < Sort<br>";
for($i=0;$i<=9;++$i){
    echo $a[$i] . " ";
}
echo" < RSort";
echo "<br>";
shuffle($a);
for($i=0;$i<=9;++$i){
    echo $a[$i] . " ";
}
echo " < Shuffle";

$zdanie = "Co zenon ma w kieszeni";
$zdanie2 = explode(" ", $zdanie);
echo "<br><br><br>";
echo $zdanie."<br>";
print_r($zdanie2);
echo "<br> Jest ".count($zdanie2)." wyrazow<br>";
sort($zdanie2, SORT_REGULAR);
for($i=0;$i<=4;++$i){
    echo $zdanie2[$i] . " ";
}
rsort($zdanie2, SORT_REGULAR);
echo" < Sort<br>";
for($i=0;$i<=4;++$i){
    echo $zdanie2[$i] . " ";
}
echo" < RSort";
echo "<br>";
shuffle($zdanie2);
for($i=0;$i<=4;++$i){
    echo $zdanie2[$i] . " ";
}
echo " < Shuffle";
?>