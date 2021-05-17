<?php
/** setting **/
define('BASEURL' , 'http://localhost/ShopOnline');
define('BASEPATH', dirname(__FILE__) . '/');
define('PATH_URL', 'http://localhost/ShopOnline');
define('PATH_URL_IMG', PATH_URL.'/public/upload/images/');
define('PATH_URL_IMG_PRODUCT', PATH_URL. '/public/upload/product/');

$ketnoi['Server']['name'] = 'localhost';
$ketnoi['Database']['dbname'] = 'ecommerce';
$ketnoi['Database']['username'] = 'duonghue1';
$ketnoi['Database']['password'] = 'duonghue';
$connect=mysqli_connect(
    "{$ketnoi['Server']['name']}",
    "{$ketnoi['Database']['username']}",
    "{$ketnoi['Database']['password']}")
or
die("Can not connect database");
@mysqli_select_db($connect,
    "{$ketnoi['Database']['dbname']}")
or
die("Can not connect database");
mysqli_query($connect,"SET NAMES utf8");
return $connect;

?>