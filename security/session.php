<?php
class session
{
    public static function startSession(){
        session_start();
        $id = $_SESSION['id'] ?? '';
        $username = $_SESSION['username'] ?? '';

        if(empty($id || $username)){
            header('Location: ../template/login.php');
        }
    }

    public static function validationToken($id){
        if(!count_chars($id, 11)){
            return false;
        }
        return true;
    }
}