<?php
include("gameInit.php");
session_start();

$_SESSION['mysteryPerson'];
//print_r($_SESSION);

$userGuess = $_POST['name'];
$gGuess = $_POST['Gender'];
$hGuess = $_POST['HairC'];
$hLGuess = $_POST['HairL'];
$eGuess = $_POST['EyeC'];
$nGuess = $_POST['nose'];

if (isset($_SESSION['mysteryPerson'])) {
    if ($userGuess == $_SESSION['mysteryPerson']->get_name() ?? null) {
        echo "<center> you got it correct !</center>";
        echo $_SESSION['count'];
    } else if ($gGuess == $_SESSION['mysteryPerson']->get_isMale() ?? null) {
        echo "<center> an attribute is correct, see if you can get the final guess!</center>";
        $_SESSION['count']++;
        echo "Count : ";
        echo $_SESSION['count'];
    } else if ($hGuess == $_SESSION['mysteryPerson']->get_hairColor() ?? null) {
        echo "<center> an attribute is correct, see if you can get the final guess!</center>";
        $_SESSION['count']++;
        echo "Count : ";
        echo $_SESSION['count'];
    }
    // } else if ($hLGuess == $_SESSION['mysteryPerson']->get_hairLength() ?? null) {
    //     echo "<center> an attribute is correct, see if you can get the final guess!</center>";
    //     $_SESSION['count']++;
    //     echo "Count : ";
    //     echo $_SESSION['count'];
    // } else if ($eGuess == $_SESSION['mysteryPerson']->get_eyeColor() ?? null) {
    //     echo "<center> an attribute is correct, see if you can get the final guess!</center>";
    //     $_SESSION['count']++;
    //     echo "Count : ";
    //     echo $_SESSION['count'];
    // } else if ($nGuess == $_SESSION['mysteryPerson']->get_noseSize() ?? null) {
    //     echo "<center> an attribute is correct, see if you can get the final guess!</center>";
    //     $_SESSION['count']++;
    //     echo "Count : ";
    //     echo $_SESSION['count'];
    else {
        echo "<center>Wrong Guess.. Try again !</center>";
        $_SESSION['count']++;
        echo "<center>Count : </center>";
        echo $_SESSION['count'];
    }
}

// else {
//     echo "Uh oh";
// }


?>
<html>

<head>
    <style>
        .button {
            transition-duration: 0.4s;
        }

        .button:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<form action="guesswho.php">
    <button>Go Back</button>
</form>

</html>