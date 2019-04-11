<?php
require 'UserModel.php';

class UserController{
    public static function home(){
        $test = "test var";
        include 'views/home.php';
    }

    public static function getAllUsers()
    {
        $user = new UserModel();
        $posts = $user->getAll();

        echo json_encode($posts);
    }
}