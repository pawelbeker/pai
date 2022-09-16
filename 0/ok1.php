<?php


$wys=5;
$szer=9;


$a="x";
$b="o";


$wys1=$wys-2;
$szer1=$szer-2;
for($j=1;$j<=$szer;++$j)
{
    echo"$a";
}
echo"<br>";
for($i=1;$i<=$wys1;++$i)
{
    echo"$a";
    for($x=1;$x<=$szer1;++$x)
    {
        echo"$b";
    }
    echo"$a <br>";
}
for($j=1;$j<=$szer;++$j)
{
    echo"$a";
}


?>