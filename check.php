<?php
session_start();
$_SESSION['count'] = 0 ;
$_SESSION['mysteryPerson'] = $_POST['mysteryPerson'];

$userGuess = $_GET['name'];
$gGuess = $_GET['Gender'];
$hGuess = $_GET['HairC'];

if (isset($_SESSION['mysteryPerson'])) {
    if ($userGuess = $mysteryPerson->get_name() ?? null) {
            echo "<center> you got it correct !</center>";
            echo $_SESSION['count'];
        }
        else if($mysteryPerson->get_isMale() ?? null){
            echo "<center> an attribute is correct, see if you can get the final guess!</center>";
            $_SESSION['count'] ++ ;
        }
        else if($hGuess = $mysteryPerson->get_hairColor() ?? null){
            echo "<center> an attribute is correct, see if you can get the final guess!</center>";
            $_SESSION['count'] ++ ;
        }
}


else {
    echo "Uh oh";
}


?>