<?php

class Render
{
    // Moved __toString() magic method from Recipe class to Render class because the output changes depending on where this is used.
    // On a production server would hide some of this info for security reasons.
    // Leaving unnecessary info  here since this is for tutorial purposes.
    public function __toString()
    {
        $output = "<b>Class name of object:</b> " . __CLASS__ . "<BR>";
        // $output .= "<b>Title:</b> " . $this->getTitle() . "<BR>";  
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
    
    // To declare a method as static use the keyword static
    
    // Whenever you have a loop in a method it's a good place to evaluate if it's something that could be moved
    // to it's own method. listIngredients() seems like something we can use elsewhere so we create listIngredients()
    // We pass in an associative array of $ingredients
    public static function listIngredients($ingredients)
    {
        $output = ""; // Instantiate the $output
        foreach($ingredients as $ing) {
            $output .= $ing['amount'] . " " . $ing['measure'] . " " . $ing['item'] . "<BR>";
        }
        return $output;
    }
    // Replace the keyword $this with $recipe
    // By declaring a method as static we make it accessible outside of the class without needing to make an instance of the class.
    public static function displayRecipe($recipe)
    {
        // return $this->title . " by " . $this->source;   // Old code when it was inside of the class, before we made it static
        // We are nolonger in the same class so we can't access it directy and need to use our "Getters"
        $output = "";
        $output .= "<b>" . $recipe->gettitle() . " by " . $recipe->getSource() . "</b>";
        $output .= "<BR>";
        $output .= "<em>" . implode(", ", $recipe->getTags()) . "</em>";
        $output .= "<BR><BR>";
        // Use self:: to call another static method within the same
        $output .= self::listIngredients($recipe->getIngredients());
        $output .= "<BR>";
        $output .= implode("<BR>", $recipe->getInstructions());
        $output .= "<BR><BR>";
        $output .= "<em>" . $recipe->getYield() . "</em>";
        $output .= "<HR>";
        return $output;
    }
}