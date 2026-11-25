<?php
echo "Ho va ten: TRAN TUAN VY NG <br>";
echo "Ngay sinh: 13/06/2006 <br>";
echo "<MSSV:2125110086> <br>";

$HOTEN ="TRAN TUAN VY";
$MSSV ="2125110086";
$SDT="0385399804";
$NGAYSINH="13/06/2006";
echo "Họ tên: " . $HOTEN . "<br>";
echo "MSSV: " . $MSSV . "<br>";
echo "Số điện thoại: " . $SDT . "<br>";
echo "Ngày sinh: " . $NGAYSINH . "<br>";

define("HOST", "localhost");
define("DATABASE", "ten_csdl");
define("USERNAME", "root");
define("PASSWORD", "");

echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: " . PASSWORD . "<br>";
echo "<hr>";

echo "Nháy kép: Xin chào $hoTen <br>"; 
echo 'Nháy đơn: Xin chào $hoTen <br>';