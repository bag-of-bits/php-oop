<?php
// Include files
include 'classes/recipe.php';

// Instantiating a new instance of class Recipe
$recipe1 = new Recipe();
// Set Title
$recipe1->setTitle("spaghetti and meatballs");
// Add Ingredients
$recipe1->addIngredient("Sugar", 1, "tbsp"); // Works! 1 is a valid type and "tbsp" is in the $measurements property array
$recipe1->addIngredient("Egg", 1); // Works! Measurement type is optional
$recipe1->addIngredient("Flour");
// Add Instructions
$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");
$recipe1->addInstruction("This is my third instruction");
// Add Tags
$recipe1->addTag("dinner");
$recipe1->addTag("pasta");
$recipe1->addTag("italian");
// Add Yield
$recipe1->setYield("Serves 6");
// Set Source Author
$recipe1->setSource("fred flinstone"); // Overwrites the default source "Chef Chuckie"

// Display recipe title
echo $recipe1->displayRecipe() . "<BR>";
// Display recipe ingredients
foreach($recipe1->getIngredients() as $ing) {
    echo $ing['amount'] . " " . $ing['measure'] . " " . $ing['item'] . "<BR>";
}
// Display recipe instructions
echo implode("<BR>", $recipe1->getInstructions()) . "<BR>";
// Display recipe tags
echo implode(", ", $recipe1->getTags()) . "<BR>";
// Display yield
echo $recipe1->getYield();