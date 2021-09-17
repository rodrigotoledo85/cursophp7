<?php
function soma(int ...$valores):string{
    return array_sum($valores);
}

var_dump(soma(2, 2));
echo "<br>";
echo soma(2, 2);
echo "<br>";

var_dump(soma(1.5, 3.2));
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";