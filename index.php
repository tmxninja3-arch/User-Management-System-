<?php

require_once __DIR__ . '/utils/User.php';
require_once __DIR__ . '/utils/Validator.php';

$usersData = require_once __DIR__ . '/data/users.php';
include_once __DIR__ . '/utils/helpers.php';
use Utils\User;
use Utils\Validator as UserValidator;

$validator = new UserValidator();

foreach ($usersData as $userData) {
    $user = new User(
        $userData['username'],
        $userData['email'],
        $userData['password']
    );

    $usernameResult = $validator->validateUsername($user->username);
    $emailResult = $validator->validateEmail($user->email);
    $passwordResult = $validator->validatePassword($user->password);

    echo "User: " . formatDisplayName($user->username) . "<br>";
    echo "Username: " . $usernameResult . "<br>";
    echo "Email: " . $emailResult . "<br>";
    echo "Password: " . $passwordResult . "<br>";
    printSeparator();
}