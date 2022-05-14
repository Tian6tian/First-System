<?php
    

//连接数据库信息
$dsn = 'mysql:dbname=mybook;host=localhost;charset=utf8';
$user = 'root';//数据库账号
$pwd = 'root';//数据库密码

try
{
    $dbh = new PDO($dsn, $user, $pwd);
}catch(PDOException $e)
{
    echo '数据库连接错误'.$e->getMessage();
    exit;
}

?>