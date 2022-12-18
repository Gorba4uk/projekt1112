<?php
$config = [
    'host' => 'localhost',
    'user' => 'teb03',
    'password' => 'teb03',
    'database' => 'testy181222'
];
//echo '<pre>';
//var_dump($config);
//echo '</pre>';

$db = new PDO(
    'mysql:host=' . $config['host'] . ';dbname=' . $config
    ['database'] . ';charset=utf8',
    $config['user'],
    $config['password']
);

if($db){
    echo "Connection OK";
}
else{
    echo "No connection";
}
//pdo - funkcja polaczenia z baza danych
