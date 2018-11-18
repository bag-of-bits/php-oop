<?php

// Standard is to name class in UpperCamelCase (Studly Caps) with curly braces on the next line down
class Recipe
{
    // Properties - Naming convention is camelCase
    private $title; 
    public $ingredients = array();  // Initialize with empty array, makes class easier to read
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Chef Chuckie";  // default value

    // Getters and Setters (Used to format data before it gets stored tot he object)
    // Getters and Setters work together to access private properties
    
    // Sets the $title property
    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }
    // Gets the $title property
    public function getTitle()
    {
        return $this->title;
    }

    // Methods - Naming convention is camelCase. Convention is for curley braces to start on the next line
    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }

}

// Instantiating a new instance of the class
$recipe1 = new Recipe();
// $recipe1->title = "spaghetti and meatballs"; // We can nolonger add a value directly to the title since we changed the access modifier to private
// We must now use the setter method to set the title and the getter method to retrieve the title
$recipe1->setTitle("spaghetti and meatballs");

echo $recipe1->displayRecipe();
echo "<BR>";
// echo $recipe1->title; // This would return an error since we set the property to private, we need to access using a getter, see below
echo $recipe1->getTitle();

// NOTE: $recipe1->displayRecipe() works because displayRecipe() is calling the property from within the class