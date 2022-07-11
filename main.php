<?php 
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Guess Who?</title>
    <link rel="stylesheet" href="startpage.css" />
  </head>
  <body>
    <div class="topnav">
        <a href="main.php">Home</a>
        <a href="guesswho.php">Play</a>
        <a href="leaderboard.php">Leaderboards</a>
        <a id="logout" href="starpage.php">Logout</a>
    </div>
    <?php include 'gameInit.php'; 
    $_SESSION['randomPeople'] = $randomPeople;
    $_SESSION['mysteryPerson'] = $mysteryPerson;
    //print $mysteryPerson->get_name() ?? null;   //debug: gets name of mystery person
    //print $randomPeople[0]->get_pic() ?? null

    //print_r($_SESSION);
  
    ?>
    <img src="imgs/guessWhoLogo.png" alt="guessWhoLogo" />

    <div class="start-page-buttons">
     <form action="guesswho.php">
        <button>Play</button>
      </form>
      <br />
      <br />
      <br />
      <form action="leaderboard.php">
        <button>Leaderboard</button>
      </form>
    </div>
  </body>
</html>
