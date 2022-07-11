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

//print $hLGuess;
//print $_SESSION['mysteryPerson']->get_hairColor();

if (isset($_SESSION['mysteryPerson'])) {
    if ($userGuess == $_SESSION['mysteryPerson']->get_name()) {
        echo "<center> you got it correct !</center>";
        echo $_SESSION['count'];
        $_SESSION['finalS'] = $_SESSION['count'];
        //print "name";
    } else if ($hLGuess == $_SESSION['mysteryPerson']->get_hairColor()) {
        echo "<center> $hLGuess is correct, see if you can get the final guess!</center>";
        $_SESSION['count']++;
        echo "Count : ";
        echo $_SESSION['count'];
        //print "hair col";
    } else if ($hGuess == $_SESSION['mysteryPerson']->get_hairLength()) {
        echo "<center> $hGuess is correct, see if you can get the final guess!</center>";
        $_SESSION['count']++;
        echo "Count : ";
        echo $_SESSION['count'];
        //print "length";
    } else if ($eGuess == $_SESSION['mysteryPerson']->get_eyeColor()) {
        echo "<center> $eGuess is correct, see if you can get the final guess!</center>";
        $_SESSION['count']++;
        echo "Count : ";
        echo $_SESSION['count'];
        //print "eye col";
    } else if ($nGuess == $_SESSION['mysteryPerson']->get_noseSize()) {
        echo "<center> $nGuess is correct, see if you can get the final guess!</center>";
        $_SESSION['count']++;
        echo "Count : ";
        echo $_SESSION['count'];
        //print "nose Size";
    } else {
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