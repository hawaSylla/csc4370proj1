<?php
include("gameInit.php");
session_start();
$profile = $_SESSION['mysteryPerson']->get_pic() ?? null;

if(isset($_POST['username'])){
    $user['username'] = urlencode($_POST['username']);
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess Who?</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table,
        td {
            border: 1px solid #333;
        }

        thead,
        tfoot {
            background-color: #333;
            color: #fff;
        }
    </style>
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
                <td><?= $_SESSION['username'] ?></td>
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



<?php include("footer.html"); ?>