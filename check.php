<?php
include ("gameInit.php");
session_start();
$_SESSION['count'] = 0 ;
$_SESSION['mysteryPerson'];
//print_r($_SESSION);

$userGuess = $_POST['name'];
$gGuess = $_POST['Gender'];
$hGuess = $_POST['HairC'];

if (isset($_SESSION['mysteryPerson'])) {
    if ($userGuess == $_SESSION['mysteryPerson']->get_name() ?? null) {
            echo "<center> you got it correct !</center>";
            echo $_SESSION['count'];
        }
        else if($gGuess == $_SESSION['mysteryPerson']->get_isMale() ?? null){
            echo "<center> an attribute is correct, see if you can get the final guess!</center>";
            $_SESSION['count'] ++ ;
            echo "Count : ";
            echo $_SESSION['count'];
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }
        else if($hGuess == $_SESSION['mysteryPerson']->get_hairColor() ?? null){
            echo "<center> an attribute is correct, see if you can get the final guess!</center>";
            $_SESSION['count'] ++ ;
            echo "Count : ";
            echo $_SESSION['count'];
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            } 
        }
}


else {
    echo "Uh oh";
}


?>