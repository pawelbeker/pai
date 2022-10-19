<!doctype html>
<html>
    <head><title>ok9</title><meta charset="utf-8"></head>
    <?php
$a = array();
for($i=0;$i<=9;++$i){
    $a[$i] = rand(0, 99);
    echo $a[$i] . " ";
}
echo "<br> Jest ".count($a)." liczb <br>";echo "<br>";echo "<br>";
sort($a, SORT_REGULAR);
for($i=0;$i<=9;++$i){
    echo $a[$i] . " ";
}
rsort($a, SORT_REGULAR);
echo" < Sort<br>";
echo "<br>";
for($i=0;$i<=9;++$i){
    echo $a[$i] . " ";
}
echo" < RSort";echo "<br>";
echo "<br>";
shuffle($a);
for($i=0;$i<=9;++$i){
    echo $a[$i] . " ";
}
echo " < Shuffle";

$zdanie = "Co zenon ma w kieszeni";
$zdanie2 = explode(" ", $zdanie);
echo "<br><br><hr><br>";
echo $zdanie."<br><br>";
print_r($zdanie2);
echo "<br> Jest ".count($zdanie2)." wyrazow<br><br>";
sort($zdanie2, SORT_REGULAR);
for($i=0;$i<=4;++$i){
    echo $zdanie2[$i] . " ";
}
rsort($zdanie2, SORT_REGULAR);
echo" < Sort<br><br>";
for($i=0;$i<=4;++$i){
    echo $zdanie2[$i] . " ";
}
echo" < RSort";
echo "<br><br>";
shuffle($zdanie2);
for($i=0;$i<=4;++$i){
    echo $zdanie2[$i] . " ";
}
echo " < Shuffle<br><br>";
echo current($zdanie2);
next($zdanie2);next($zdanie2);
echo " " . current($zdanie2);
echo "<br><br><hr><br>";
$array1= array(9, 2, 5);$array2= array('a', 'b', 'c');
?>
<body>
        <form method="post">
            <input type="text" value="text" name="text1">
            <input type="submit" name="sub1">
            <input type="number" value="12345" name="number1">
            <input type="submit" name="sub2">
            Usuń pozycje: <input type="number" name="num">
        </form>
        <?php
        if($_POST['num'] == ""){
            if(isset($_POST['sub1'])){
                array_push($array2, $_POST['text1']);
                unset($array2, $_POST['num']);
                print_r($array1);
            }
            elseif(isset($_POST['sub2'])){
                array_push($array1, $_POST['number1']);
                unset($array1, $_POST['num']);
                print_r($array1);
            }
        }
        else{
            if(isset($_POST['sub1'])){
                array_push($array1, $_POST['text1']);
                print_r($array1);
            }
            elseif(isset($_POST['sub2'])){
                array_push($array1, $_POST['number1']);
                print_r($array1);
            }
        }
        
        ?>
    </body>
</html>