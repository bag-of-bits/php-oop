<?php
// Include files
include 'classes/recipe.php';

// Instantiating a new instance of class Recipe
$recipe1 = new Recipe();
$recipe1->setTitle("spaghetti and meatballs");
$recipe1->addIngredient("Sugar", 1, "tbsp"); // Works! 1 is a valid type and "tbsp" is in the $measurements property array
$recipe1->addIngredient("Egg", 1); // Works! Measurement type is optional
$recipe1->addIngredient("Flour");
echo $recipe1->displayRecipe();
echo "<BR>";
foreach($recipe1->getIngredients() as $ing) {
    echo $ing['amount'] . " " . $ing['measure'] . " " . $ing['item'] . "<BR>";
}