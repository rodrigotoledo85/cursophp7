<?php

$dir1 = "Pasta_01";
$dir2 = "Pasta_02";
$dir3 = "Pasta_03";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);
if(!is_dir($dir3)) mkdir($dir3);

$filename = "README.txt";

if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){
    
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
    fwrite($file, date("d/m/Y H:i:s"));
    fclose($file);
}

rename($dir1 . DIRECTORY_SEPARATOR . $filename, $dir2 . DIRECTORY_SEPARATOR . $filename);

echo "Arquivo movido com sucesso!!!";