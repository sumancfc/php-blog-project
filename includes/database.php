<?php

// $connection = mysqli_connect('localhost', 'root', '', 'blog');

// if($connection){
//        echo 'Database is Connected!!!';
// }else{
//        echo 'Connection Failed!!!';
// }

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_password'] = '';
$db['db_name'] = 'blog';

foreach($db as $key => $value){
       define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($connection){
       echo 'Database is Connected!!!!';
}else{
       echo 'Connection Failed!!!!';
}

?>