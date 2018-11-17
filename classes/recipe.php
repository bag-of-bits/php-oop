<?php

// Standard is to name class in UpperCamelCase (Studly Caps) with curly braces on the next line down
class Recipe
{
    // Properties - Naming convention is camelCase
    public $title; 
    public $ingredients = array();  // Initialize with empty array, makes class easier to read
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Chef Chuckie";  // default value

    // Methods - Naming convention is camelCase. Convention is for curley braces to start on the next line
    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }

}

// Instantiating a new instance of the class
$recipe1 = new Recipe();
// Access the objects property. Here we change the value
$recipe1->source = "Grand Master Chef";
// Here we add a value
$recipe1->title = "Spaghetti and Meatballs";

// Here we display the value of the public $source property belonging to the object named $recipe1
echo $recipe1->source . "<BR>"; // Displays "Chef Chuckie"

// Calling a method is the same as accessing a property except you add the () round brackets at the end to indicate you're calling a method
echo $recipe1->displayRecipe();