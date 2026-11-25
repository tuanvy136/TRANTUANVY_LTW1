<?php
$chuoi = "      TRAN TUAN VY   ";
echo "Goc: [" . $chuoi . "]<br>";
echo "Sau : [" . trim($chuoi) . "]<br>";
echo "<hr>";


echo "ltrim: [" . ltrim($chuoi) . "]<br>";
echo "rtrim: [" . rtrim($chuoi) . "]<br>";
echo "<hr>";

$dai = "mai mai dang cap";
echo "10 ky tu dau: " . substr($dai, 0, 10) . "<br>";
echo "Tu ky tu thu 5 den het: " . substr($dai, 4) . "<br>";


echo "Sau khi thay: " . str_replace("xau", "hello word", $dai) . "<br>";
