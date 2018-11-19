<?php

class Render
{
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
        $output .= $recipe->gettitle() . " by " . $recipe->getSource();
        $output .= "<BR>";
        $output .= "<em>" . implode(", ", $recipe->getTags()) . "</em>";
        $output .= "<BR>";
        // Use self:: to call another static method within the same class
        $output .= self::listIngredients($recipe->getIngredients());
        $output .= implode("<BR>", $recipe->getInstructions());
        $output .= "<BR>";
        $output .= "<em>" . $recipe->getYield() . "</em>";
        $output .= "<HR>";
        return $output;
    }
}