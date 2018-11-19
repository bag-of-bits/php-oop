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

    // Specifies how we want to convert this object to a string. If we call the object directly it will get the title.
    // E.g.) echo $recipe would normally return an error saying failed to convert object to string. Now it will return the title.
    // For security reasons you should NOT display the full directory path on a production server. It can give hackers more info that you want.
    public function __toString()
    {
        $output = "<b>Class name of object:</b> " . __CLASS__ . "<BR>";
        $output .= "<b>Title:</b> " . $this->getTitle() . "<BR>";
        $output .= "<b>Full path:</b> " . __FILE__ . "<BR>";
        $output .= "<b>Base name:</b> " . basename(__FILE__) . "<BR>";
        // __DIR__ is useful when you want to link to another file within the same directory as this file.
        // It even works if this file is included in another file.
        $output .= "<b>Full path without basename:</b>" . __DIR__ . "<BR>";
        $output .= "<b>Line Number</b>: " . __LINE__ . "<BR>";
        $output .= "<b>Class method name:</b> : " . __METHOD__ . "<BR>";
        $output .= "<b>The following methods are available for objects of this " . __CLASS__ . " class:</b><BR>";
        $output .= implode("<BR>", get_class_methods(__CLASS__));
        return $output;
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