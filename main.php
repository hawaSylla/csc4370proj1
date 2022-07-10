<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Guess Who?</title>
    <link rel="stylesheet" href="startpage.css" />
  </head>
  <body>
    <div class="topnav">
        <a href="startpage.php"><img class="nav" src="imgs/guessWhoLogo.png" alt="guessWhoLogo" /></a>
        <a href="guesswho.php">Play</a>
        <a href="leaderboard.php">Leaderboards</a>
        <a id="logout" href="starpage.php">Logout</a>
    </div>
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
