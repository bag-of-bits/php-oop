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
    // Acceptable measurement types
    private $measurements = array(
        "tsp",
        "tbsp",
        "cup",
        "oz",
        "lb",
        "fl oz",
        "pint",
        "quart",
        "gallon"
    );
    // Setters and Getters
    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }
    public function getTitle()
    {
        return $this->title;
    }

    // Setter that accepts three arguments so we can control the format
    // Only $item is required, $amount and $measure are optional so we pass a default value of null
    // E.g.) 1 tsp sugar
    public function addIngredient($item, $amount = null, $measure = null)
    {
        // Conditional to control the format of $amount that makes sure the type is either a float or integer.
        // Otherwise we exit the script and an error message is displayed. 
        // Used !is_null($amount) function instead of $amount != null which instructor used. Gives the same result. 
        if(!is_null($amount) && !is_float($amount) && !is_int($amount)) {
            exit("The amount must be a float or an integer: " . gettype($amount) . " \"" . $amount . "\" was given");
        }
        // Contitional to ensure a valid measurement type is used. Valid measurements are indicated in $measurements property
        if(!is_null($measure) && !in_array(strtolower($measure), $this->measurements)) {
            exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
        }

        // Ingredients is a list that has a sub-array that is an associative
        // The sub-array has 3 items, 1 for each arg passed to the addIngredient() function
        $this->ingredients[] = array(
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => strtolower($measure)
        );
        
    }

    // Methods - Naming convention is camelCase. Convention is for curley braces to start on the next line
    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }

}

// Instantiating a new instance of the class
$recipe1 = new Recipe();
$recipe1->setTitle("spaghetti and meatballs");
$recipe1->addIngredient("Sugar", 1, "tbsp"); // Works! 1 is a valid type and "tbsp" is in the $measurements property array
$recipe1->addIngredient("Egg", 1); // Works! Measurement type is optional
$recipe1->addIngredient("Flour");

echo $recipe1->displayRecipe();
