<?php
class Person {
    public $name;
    public $isMale;
    public $hairColor;
    public $hairLength;
    public $hairTexture;
    public $eyeColor;
    public $noseSize;
    public $hasGlasses;
    public $facialHair;
    public $mustache;
    public $beard;
    public $rosyCheeks;
    public $hasHat;

    //constructor for person object
    function __construct($name, $isMale, $hairColor, $hairLength, $hairTexture, $eyeColor, $noseSize, $hasGlasses, $facialHair, $mustache, $beard, $rosyCheeks, $hasHat) {
        $this->name = $name;
        $this->isMale = $isMale;
        $this->hairColor = $hairColor;
        $this->hairLength = $hairLength;
        $this->hairTexture = $hairTexture;
        $this->eyeColor = $eyeColor;
        $this->noseSize = $noseSize;
        $this->hasGlasses = $hasGlasses;
        $this->facialHair = $facialHair;
        $this->mustache = $mustache;
        $this->beard = $beard;
        $this->rosyCheeks = $rosyCheeks;
        $this->hasHat = $hasHat;
    }
  
    //getters for all values
    function get_name() {
        return $this->name;
    }
    function get_isMale() {
        return $this->isMale;
    }
    function get_hairColor() {
        return $this->hairColor;
    }
    function get_hairLength() {
        return $this->hairLength;
    }
    function get_hairTexture() {
        return $this->hairTexture;
    }
    function get_eyeColor() {
        return $this->eyeColor;
    }
    function get_noseSize() {
        return $this->noseSize;
    }
    function get_hasGlasses() {
        return $this->hasGlasses;
    }
    function get_facialHair() {
        return $this->facialHair;
    }
    function get_mustache() {
        return $this->mustache;
    }
    function get_beard() {
        return $this->beard;
    }
    function get_rosyCheeks() {
        return $this->rosyCheeks;
    }
    function get_hasHat() {
        return $this->hasHat;
    }
  
}

//initating all people who will be used in guess who
$alex = new Person("alex", True, "black", "short", "straight", "brown", "small", False, True, True, False, False, False);
$alfred = new Person("alfred", True, "red", "long", "straight", "blue", "small", False, True, True, False, False, False);
$anita = new Person("anita", False, "blonde", "long", "straight", "blue", "small", False, False, False, False, True, False);
$anne = new Person("anne", False, "black", "short", "curly", "brown", "small", False, False, False, False, False, False);
$bernard = new Person("bernard", True, "brown", "short", "straight", "brown", "big", False, False, False, False, False, True);
$bill = new Person ("bill", True, "red", "bald", "straight", "brown", "small", False, True, False, True, True, False);
$charles = new Person ("charles", True, "blonde", "short", "straight", "brown", "small", False, True, True, False, False, False);
$claire = new Person ("claire", False, "red", "short", "curly", "brown", "small", True, False, False, False, False, True);
$david = new Person ("david", True, "blonde", "short", "straight", "brown", "small", False, True, False, True, False, False);
$eric = new Person ("eric", True, "blonde", "short", "straight", "brown", "small", False, False, False, False, False, True);
$frans = new Person ("frans", True, "red", "short", "curly", "brown", "small", False, False, False, False, False, False);
$george = new Person ("george", True, "white", "short", "straight", "brown", "small", False, False, False, False, False, True);
$herman = new Person ("herman", True, "red", "bald", "curly", "brown", "big", False, False, False, False, False, False);
$joe = new Person ("joe", True, "blonde", "short", "curly", "brown", "small", True, False, False, False, False, False);
$maria = new Person ("maria", False, "brown", "long", "wavy", "brown", "small", False, False, False, False, False, True);
$max = new Person ("max", True, "black", "short", "curly", "brown", "big", False, True, True, False, False, False);
$paul = new Person ("paul", True, "white", "short", "wavy", "brown", "small", True, False, False, False, False, False);
$peter = new Person ("peter", True, "white", "short", "straight", "blue", "big", False, False, False, False, False, False);
$philip = new Person ("philip", True, "black", "short", "curly", "brown", "small", False, True, False, True, True, False);
$richard = new Person ("richard", True, "brown", "bald", "straight", "brown", "small", False, True, True, True, False, False);
$robert = new Person ("robert", True, "brown", "short", "straight", "blue", "big", False, False, False, False, True, False);
$sam = new Person ("sam", True, "white", "bald", "straight", "brown", "small", True, False, False, False, False, False);
$susan = new Person ("susan", False, "white", "long", "straight", "brown", "small", False, False, False, False, True, False);
$tom = new Person ("tom", True, "black", "bald", "straight", "blue", "small", True, False, False, False, False, False);