<?php
$dns = "mysql:host=localhost;dbname=test";
$user = 'root';
$pass = "123123";
$lang = array(
PDO:: MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8", 
);

try{
$db = new PDO($dns,$user,$pass,$lang);
$db-> setAttribute ( PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "تم";
}
catch(PDOEception $e){
	echo "حدث خطأ" . $e->getLine();

}
