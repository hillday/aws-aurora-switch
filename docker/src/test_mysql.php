<?php
$serve = 'xxx.cluster-c7e7km2ddkcx.xxxx.rds.amazonaws.com:3306';
$username = 'user';
$password = '12345';
$dbname = 'test';

print('begin connect to db, get host by name:');
print(gethostbyname('xxx.cluster-c7e7km2ddkcx.xxxx.rds.amazonaws.com'));

$mysqli = new Mysqli($serve,$username,$password,$dbname);
if($mysqli->connect_error){
	die('connect error:'.$mysqli->connect_errno);
}
$mysqli->set_charset('UTF-8');

$result = $mysqli->query('select count(1) from xxxx');
$data = $result->fetch_all();
print_r($data);
?>
