<?php
include("header.html");
include("gameInit.php");
session_start();
$profile = $_SESSION['mysteryPerson']->get_pic() ?? null;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess Who?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
<h2>Leaderboard</h2>
        <table>
            <tr>
                <td>Ranking</td>
                <td>UserName</td>
                <td>Points</td>
            </tr>
            <tr>
                <td>1</td>
                <td><?= $user['username'] ?></td>
                <td><?= $_SESSION['count'] ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td></td>
                <td></td>
            </tr>
        </table>
</div>



</body>


<?php include("footer.html"); ?>