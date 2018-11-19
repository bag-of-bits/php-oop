<?php

// Standard is to name class in UpperCamelCase (Studly Caps) with curly braces on the next line down
class Recipe
{
    // Properties - Naming convention is camelCase
    private $title; 
    private $ingredients = array();  // Initialize with empty array, makes class easier to read
    private $instructions = array();
    private $yield;
    private $tags = array();
    private $source = "Chef Chuckie";  // default value
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
  
    // Magic Methods and Magic Constants // e.g.) Magic Method: __construct  Magic Constant: __DIR__

    // Allows us to assign values to properties at the same time as we instantiate the object. null means optional 
    public function __construct($title = null)
    {
        $this->setTitle($title);
    }

    // Setters and Getters
    public function setTitle($title)
    {
        // Sets title value as null if a null value is passed when we instantiate the recipe object
        if(empty($title)) {
            $this->title = null;
        } else {
            $this->title = ucwords($title);
        }
    }
    public function getTitle()
    {
        return $this->title;
    }

    // Setter that accepts three args, $item is the only required $arg, the other two are optional.
    public function addIngredient($item, $amount = null, $measure = null)
    {
        // Controls the format of $amount to make sure the type is either a float or integer.
        if(!is_null($amount) && !is_float($amount) && !is_int($amount)) {
            exit("The amount must be a float or an integer: " . gettype($amount) . " \"" . $amount . "\" was given");
        }
        // Check to see if the $measure passed is a valid measurement and exists in the $measurements property array.
        if(!is_null($measure) && !in_array(strtolower($measure), $this->measurements)) {
            exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
        }

        $this->ingredients[] = array(
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => strtolower($measure)
        );   
    }

    public function getIngredients() 
    {
        return $this->ingredients;
    }

    // Set instructions
    public function addInstruction($string)
    {
        $this->instructions[] = $string;
    }

    public function getInstructions()
    {
        return $this->instructions;
    }

    public function setYield($input)
    {
        $this->yield = $input;
    }

    public function getYield()
    {
        return $this->yield;
    }
    
    public function addTag($tag)
    {
        $this->tags[] = strtolower($tag);
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setSource($author)
    {
        $this->source = ucwords($author);
    }

    public function getSource()
    {
        return $this->source;
    }

}