<?php
session_start();
ob_start();

if(isset($_POST['username']) && !isset($_SESSION['username'])){

    $lines = file("userinfo.txt");

    foreach ($lines as $line) {
        $exploded = explode(",", $line);
        $output[$exploded[0]] = $exploded[1];
    }

    if(isset($output[$_POST['username']])){
        if($output[$_POST['username']] == $_POST['password']){
            $_SESSION['username'] = $_POST['username'];
        }
    }
    
    if(isset($_SESSION['username'])){
        //redirects to main page
        header("Location:header.html");
        exit();
    }

    if(!isset($_SESSION['username'])){
        $loginFailed = true;
    }
}
?>