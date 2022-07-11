<?php 
    include("header.html");
    include("gameInit.php"); 
    session_start();
    $strMP=$_SESSION['mysteryPerson']->get_pic() ?? null;
?>

    <table>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="imgs/backofcard.png" alt="backofcard">
                        </div>
                        <div class="flip-card-back">
                            <img src="<?php print $strMP ?>" alt="mysteryPerson">
                        </div>
                    </div>
                </div></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><img src="imgs/backsolid.png" alt="background"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][0]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][1]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][2]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][3]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][4]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][5]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][6]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][7]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][8]->get_pic() ?? null; ?>" alt="1"></td>
        </tr>
        <tr>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][9]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][10]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][11]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][12]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][13]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][14]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][15]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][16]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][17]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img class="profile" src="<?php print $_SESSION['randomPeople'][18]->get_pic() ?? null; ?>" alt="1"></td>
        </tr>
    </table>

<?php include("footer.html"); ?>