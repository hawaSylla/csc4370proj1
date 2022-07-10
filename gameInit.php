<?php

    include 'person.php';
    global $randomPeople;
    global $mysteryPerson;

    //initating all people who will be used in guess who
    $alex = new Person("alex", True, "black", "short", "straight", "brown", "small", False, True, True, False, False, False, "alex.jpg");
    $alfred = new Person("alfred", True, "red", "long", "straight", "blue", "small", False, True, True, False, False, False, "alfred.jpg");
    $anita = new Person("anita", False, "blonde", "long", "straight", "blue", "small", False, False, False, False, True, False, "anita.jpg");
    $anne = new Person("anne", False, "black", "short", "curly", "brown", "small", False, False, False, False, False, False, "anne.jpg");
    $bernard = new Person("bernard", True, "brown", "short", "straight", "brown", "big", False, False, False, False, False, True, "bernard.jpg");
    $bill = new Person ("bill", True, "red", "bald", "straight", "brown", "small", False, True, False, True, True, False, "bill.jpg");
    $charles = new Person ("charles", True, "blonde", "short", "straight", "brown", "small", False, True, True, False, False, False, "charles.jpg");
    $claire = new Person ("claire", False, "red", "short", "curly", "brown", "small", True, False, False, False, False, True, "claire.jpg");
    $david = new Person ("david", True, "blonde", "short", "straight", "brown", "small", False, True, False, True, False, False, "david.jpg");
    $eric = new Person ("eric", True, "blonde", "short", "straight", "brown", "small", False, False, False, False, False, True, "eric.jpg");
    $frans = new Person ("frans", True, "red", "short", "curly", "brown", "small", False, False, False, False, False, False, "frans.jpg");
    $george = new Person ("george", True, "white", "short", "straight", "brown", "small", False, False, False, False, False, True, "george.jpg");
    $herman = new Person ("herman", True, "red", "bald", "curly", "brown", "big", False, False, False, False, False, False, "Herman.jpg");
    $joe = new Person ("joe", True, "blonde", "short", "curly", "brown", "small", True, False, False, False, False, False, "Joe.jpg");
    $maria = new Person ("maria", False, "brown", "long", "wavy", "brown", "small", False, False, False, False, False, True, "maria.jpg");
    $max = new Person ("max", True, "black", "short", "curly", "brown", "big", False, True, True, False, False, False, "max.jpg");
    $paul = new Person ("paul", True, "white", "short", "wavy", "brown", "small", True, False, False, False, False, False, "paul.jpg");
    $peter = new Person ("peter", True, "white", "short", "straight", "blue", "big", False, False, False, False, False, False, "peter.jpg");
    $philip = new Person ("philip", True, "black", "short", "curly", "brown", "small", False, True, False, True, True, False, "philip.jpg");
    $richard = new Person ("richard", True, "brown", "bald", "straight", "brown", "small", False, True, True, True, False, False, "Richard.jpg");
    $robert = new Person ("robert", True, "brown", "short", "straight", "blue", "big", False, False, False, False, True, False, "Robert.jpg");
    $sam = new Person ("sam", True, "white", "bald", "straight", "brown", "small", True, False, False, False, False, False, "Sam.jpg");
    $susan = new Person ("susan", False, "white", "long", "straight", "brown", "small", False, False, False, False, True, False, "Susan.jpg");
    $tom = new Person ("tom", True, "black", "bald", "straight", "blue", "small", True, False, False, False, False, False, "Tom.jpg");

    //array of all possible people
    $people = array($alex, $alfred, $anita, $anne, $bernard, $bill, $charles, $claire, $david, $eric, $frans, $george, $herman, $joe, $maria, $max, $paul, $peter, $philip, $richard, $robert, $sam, $susan, $tom);

    $randomPeople = [];
    
    //put people in random order and pop 17 into new array to use for the game
    shuffle($people);
    for($i=0;$i<17;$i++) {
        $randomPeople[$i] = $people[count($people)-1];
        array_pop($people);
    }

    //randomly select one person to be the mystery person for the game
    $rand = rand(0, 16);
    //print $rand;  debug
    $mysteryPerson = $randomPeople[$rand];
?>