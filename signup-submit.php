<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess Who?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$username = $_POST["username"];
$password = $_POST["password"];

$login = "$username,$password";
file_put_contents("userinfo.txt", $login, FILE_APPEND);
?>

<img class = "smallerlogo" src="imgs/guessWhoLogo.png" alt="guessWhoLogo">
<br>
<p class = "heading">Welcome <span> <?= $username ?> </span> !</p>
<div class="center-button">
    <form action="signin.php">
        <button>Sign In</button>
    </form>
</div>

</body>
</html>