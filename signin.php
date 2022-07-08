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
<div>
    <form action="signup-submit.php" method="post">
        <fieldset>
            <p class= "heading">Welcome Back!</p>
            <input type ="text" id = "username" name = "username" maxlength="20" placeholder = "Username" required> 
            <br>
            <br>
            <br>
            <input type ="password" id = "password" name = "password" maxlength="20" placeholder = "Password" required> 
            <br>
            <br>
            <br>
            <input class = "button" type = "submit" value = "Login">
        </fieldset>
    </form>
</div>
</body>
</html>