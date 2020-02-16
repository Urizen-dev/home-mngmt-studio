<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once($_SERVER["DOCUMENT_ROOT"].'/config/Database.php');
include_once($_SERVER["DOCUMENT_ROOT"].'/dao/UserDao.php');

$database = new Database();
$db = $database->connect();

$userDao = new UserDao($db);
$result = $userDao->findAll();
$num = $result->rowCount();

if ($num > 0) {
    $user_arr = array();
    $users_array['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $user_item = array(
            'name' => $name,
            'email' => $email,
            'password' => $password
        );
        array_push($users_array['data'], $user_item);
    }
    echo json_encode($users_array);
} else {
    echo json_encode(
        array('message' => 'no users found')
    );
}