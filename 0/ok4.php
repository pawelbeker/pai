<?php
//zad 1
$a = 70;

if($a <=39)
{
    echo "Dostales 1";
}
else if($a > 39 && $a <= 54)
{
    echo "Dostales 2";
}
else if($a > 55 && $a <= 69)
{
    echo "Dostales 3";
}
else if($a > 69 && $a <= 84)
{
    echo "Dostales 4";
}
else if($a > 84 && $a <= 95)
{
    echo "Dostales 5";
}
else if($a > 95 && $a <= 100)
{
    echo "Dostales 6";
}
echo"<br><br><br><br><br>";

//zad 2
for($b=-10;$b<=10;++$b){
    if($b==0) continue;
    echo "$b <br>";
}
?>