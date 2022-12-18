<?php

$login = $_POST['login'];
$password = $_POST['password'];


$users = [
	0 => [
		'login' => 'adam123',
		'password' => 'test12345',
		'fullName' => 'Adam Nowak',
	],
	1 => [
		'login' => 'anna0000',
		'password' => 'tajneHaslo',
		'fullName' => 'Anna Kowalska',
	],
	2 => [
		'login' => '999tomasz',
		'password' => '1234567890',
		'fullName' => 'Tomasz Kwiatkowski',
	],
	3 => [
		'login' => 'admin123',
		'password' => 'AdminAdmin',
		'fullName' => 'Administrator',
	],
    4=> [
        'login' => 'horbachuk',
        'password' => 'horbachuk',
        'fullName' => 'Bohdan Horbachuk'
    ]
];

foreach ($users as $user) {
	if (
		$user['login'] == $login
		&& $user['password'] == $password
	) {
		header('Location:projekt_11_12_2022-po-zalogowaniu.php?fullName=' . $user['fullName']);
		exit;
	}
}

header('Location:projekt_11_12_2022.php?error=001');
?>