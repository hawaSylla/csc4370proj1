<?php

    include 'person.php';
    global $randomPeople;
    global $mysteryPerson;

    $alex = new Person("alex", True, "black", "short", "straight", "brown", "small", False, True, True, False, False, False, "imgs/alex.jpg");
    $alfred = new Person("alfred", True, "red", "long", "straight", "blue", "small", False, True, True, False, False, False, "imgs/alfred.jpg");
    $anita = new Person("anita", False, "blonde", "long", "straight", "blue", "small", False, False, False, False, True, False, "imgs/anita.jpg");
    $anne = new Person("anne", False, "black", "short", "curly", "brown", "small", False, False, False, False, False, False, "imgs/anne.jpg");
    $bernard = new Person("bernard", True, "brown", "short", "straight", "brown", "big", False, False, False, False, False, True, "imgs/bernard.jpg");
    $bill = new Person ("bill", True, "red", "bald", "straight", "brown", "small", False, True, False, True, True, False, "imgs/bill.jpg");
    $charles = new Person ("charles", True, "blonde", "short", "straight", "brown", "small", False, True, True, False, False, False, "imgs/charles.jpg");
    $claire = new Person ("claire", False, "red", "short", "curly", "brown", "small", True, False, False, False, False, True, "imgs/claire.jpg");
    $david = new Person ("david", True, "blonde", "short", "straight", "brown", "small", False, True, False, True, False, False, "imgs/david.jpg");
    $eric = new Person ("eric", True, "blonde", "short", "straight", "brown", "small", False, False, False, False, False, True, "imgs/eric.jpg");
    $frans = new Person ("frans", True, "red", "short", "curly", "brown", "small", False, False, False, False, False, False, "imgs/frans.jpg");
    $george = new Person ("george", True, "white", "short", "straight", "brown", "small", False, False, False, False, False, True, "imgs/george.jpg");
    $herman = new Person ("herman", True, "red", "bald", "curly", "brown", "big", False, False, False, False, False, False, "imgs/Herman.jpg");
    $joe = new Person ("joe", True, "blonde", "short", "curly", "brown", "small", True, False, False, False, False, False, "imgs/Joe.jpg");
    $maria = new Person ("maria", False, "brown", "long", "wavy", "brown", "small", False, False, False, False, False, True, "imgs/maria.jpg");
    $max = new Person ("max", True, "black", "short", "curly", "brown", "big", False, True, True, False, False, False, "imgs/max.jpg");
    $paul = new Person ("paul", True, "white", "short", "wavy", "brown", "small", True, False, False, False, False, False, "imgs/paul.jpg");
    $peter = new Person ("peter", True, "white", "short", "straight", "blue", "big", False, False, False, False, False, False, "imgs/peter.jpg");
    $philip = new Person ("philip", True, "black", "short", "curly", "brown", "small", False, True, False, True, True, False, "imgs/philip.jpg");
    $richard = new Person ("richard", True, "brown", "bald", "straight", "brown", "small", False, True, True, True, False, False, "imgs/Richard.jpg");
    $robert = new Person ("robert", True, "brown", "short", "straight", "blue", "big", False, False, False, False, True, False, "imgs/Robert.jpg");
    $sam = new Person ("sam", True, "white", "bald", "straight", "brown", "small", True, False, False, False, False, False, "imgs/Sam.jpg");
    $susan = new Person ("susan", False, "white", "long", "straight", "brown", "small", False, False, False, False, True, False, "imgs/Susan.jpg");
    $tom = new Person ("tom", True, "black", "bald", "straight", "blue", "small", True, False, False, False, False, False, "imgs/Tom.jpg");

    //array of all possible people
    $people = array($alex, $alfred, $anita, $anne, $bernard, $bill, $charles, $claire, $david, $eric, $frans, $george, $herman, $joe, $maria, $max, $paul, $peter, $philip, $richard, $robert, $sam, $susan, $tom);

    $randomPeople = [];
    
    //put people in random order and pop 18 into new array to use for the game
    shuffle($people);
    for($i=0;$i<18;$i++) {
        $randomPeople[$i] = $people[count($people)-1];
        array_pop($people);
    }

    //randomly select one person to be the mystery person for the game and remove them from the array
    $rand = rand(0, 17);
    //print $rand;  debug
    $mysteryPerson = $randomPeople[$rand];

//}
?>