<?php
$ts = strtotime("2001-09-11");
echo "Pegar o codigo timestamp da data e converte-la em data<br>";
echo date("l d/m/Y", $ts);
echo "<hr><br>";

$ts = strtotime("now");
echo "Pegar a data atual<br>";
echo date("l d/m/Y", $ts);
echo "<hr><br>";

$ts = strtotime("+1 day");
echo "Pegar a data atual e somar um dia<br>";
echo date("l d/m/Y", $ts);
echo "<hr><br>";

$ts = strtotime("+1 week");
echo "Pegar a data atual e somar uma semana<br>";
echo date("l d/m/Y", $ts);
echo "<hr><br>";

$ts = strtotime("+1 year");
echo "Pegar a data atual e somar um ano<br>";
echo date("l d/m/Y", $ts);
echo "<hr><br>";