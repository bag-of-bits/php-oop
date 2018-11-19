<?php

class Render
{
    // Moved displayRecipe() from class Recipe in the recipe.php file to here because
    // the display can change based on how we're using it.
    // We don't need to store any data in this class. We can pass a recipe object into this method.
    // Then we replace the keyword $this with $recipe
    // Since we don't need to store any data or keep the state of this class, we don't need to instantiate an object.
    // By declaring a method as static we make it accessible outside of the class without needing to make an instance of the class.
    // To declare a method as static we add the keyword static
    public static function displayRecipe($recipe)
    {
        // return $this->title . " by " . $this->source;   // Old code when it was inside of the class, before we made it static
        // We are nolonger in the same class so we can't access it directy and need to use our "Getters"
        return $recipe->gettitle() . " by " . $recipe->getSource();
    }
}