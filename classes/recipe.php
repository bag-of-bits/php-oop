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

// Accessing the property of an object
echo $recipe1->source . "<BR>"; // Displays "Chef Chuckie"

// Change the value of an object's property
$recipe1->source = "Grand Master Chef";
// Now when we echo the object's same property it will be updated with the new value "Grand Master Chef"
echo $recipe1->source . "<BR>";

// More than one object can be built from the same class at the same time, each one independent of the others. Here we instantiate $recipe2
$recipe2 = new Recipe();
echo $recipe2->source . "<BR>"; // Displays default value "Chef Chuckie"