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
$user = array(
    'username' => '',
    'password' => ''
);

if(isset($_POST['username'])){
    $user['username'] = urlencode($_POST['username']);
}
if(isset($_POST['password'])){
    $user['password'] = urlencode($_POST['password']);
}

$user_info = $user;
$write = implode(",", $user_info);
file_put_contents("userinfo.txt", PHP_EOL.$write, FILE_APPEND);
?>
<img class = "smallerlogo" src="imgs/guessWhoLogo.png" alt="guessWhoLogo">
<br>
<p class = "heading">Welcome <span> <?= $user['username'] ?> </span> !</p>
<div class="center-button">
    <form action="signin.php">
        <button>Sign In</button>
    </form>
</div>

</body>
</html>