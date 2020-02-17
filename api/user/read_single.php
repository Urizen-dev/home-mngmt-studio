<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once($_SERVER["DOCUMENT_ROOT"].'/config/Database.php');
include_once($_SERVER["DOCUMENT_ROOT"].'/dao/UserDao.php');
include_once($_SERVER["DOCUMENT_ROOT"].'/models/User.php');

$database = new Database();
$db = $database->connect();

$userDao = new UserDao($db);

$name = isset($_GET['name']) ? $_GET['name'] : die();

$user = $userDao->findUserByName($name);

$user_arr = array(
    'name' => $user->getName(),
    'email' => $user->getEmail(),
    'password' => $user->getPassword()
);

print_r(json_encode($user_arr));


