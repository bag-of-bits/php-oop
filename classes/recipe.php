<?php

// Standard is to name class in UpperCamelCase (Studly Caps) with curly braces on the next line down
class Recipe
{
    // Properties - Naming convention is camelCase (Humps in the middle) e.g.) myPropertyName
    public $title; 
    public $ingredients = array();  // Initialize with empty array, makes class easier to read
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Chef Chuckie";  // default value

}

// Instantiating a new instance of the class
$recipe1 = new Recipe();
// Dumping the var tells us the new object is an Object and is an instance of the class Recipe
var_dump($recipe1);