<?php include("header.html"); ?>
<?php include 'gameInit.php'; 

    print $mysteryPerson->get_name() ?? null;   //debug: gets name of mystery person

    ?>