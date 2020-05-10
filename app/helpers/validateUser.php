<?php

function validateUser($user) {

    $errors = array();

if(empty($user['username'])) {
    array_push($errors, "Username is Required");
}

if(empty($user['email'])) {
    array_push($errors, "Email is Required");
}

if(empty($user['password'])) {
    array_push($errors, "Password is Required");
}

if(($user['passwordConf'])!== $user['password']) {
    array_push($errors, "The two passwords do not match!");
}

    $existingUser = selectOne('users',['email' => $user['email']]);

    if($existingUser) {
      if (isset($post['update_user']) && $existingUser['id'!= $post['id']] ) {
        array_push($errors, " email Already Exists");      }
    }
    if (isset($post['create-admin'])){
      array_push($errors, "email Already Exists");
    }

    return $errors;
}

function validateLogin($user) {

    $errors = array();

if(empty($user['username'])) {
    array_push($errors, "Username is Required");
}

if(empty($user['password'])) {
    array_push($errors, "Password is Required");
}

    return $errors;
}
















?>
