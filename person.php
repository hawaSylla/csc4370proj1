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

?>