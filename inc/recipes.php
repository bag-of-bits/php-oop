<?php
/**
 * Included Recipes
 *
 ** By Alena Holligan **
 * I use whole wheat pastry flour or whole wheat white flour
 * in all my recipes, but feel free to use whatever you like
 *
 * $lemon_chicken
 * $granola_muffins
 * $belgian_waffles
 * $pepper_casserole
 * $lasagna
 *
 *
 ** By Ken Alger **
 *
 * $dried_mushroom_ragout
 * $rabbit_catalan
 * $grilled_salmon_with_fennel
 * $pistachio_duck
 * $chili_pork
 * $crab_cakes
 * $beef_medallions
 * $silver_dollar_cakes
 * $french_toast
 * $corn_beef_hash
 * $granola
 * $spicy_omelette
 * $scones
 *
*/

$lemon_chicken = new Recipe("Italian Lemon Chicken");

$lemon_chicken->addIngredient("Pasta", 1, "lb");
$lemon_chicken->addIngredient("Chicken Breast", 2, "lb");
$lemon_chicken->addIngredient("olive oil", .5, "Cup");
$lemon_chicken->addIngredient("garlic, chopped", 2, "tbsp");
$lemon_chicken->addIngredient("lemon juice", .25, "Cup");
$lemon_chicken->addIngredient("sugar", .5, "tsp");
$lemon_chicken->addIngredient("parsley", 2, "tsp");
$lemon_chicken->addIngredient("oregano", 2, "tsp");
$lemon_chicken->addIngredient("basil", 1, "tbsp");
$lemon_chicken->addIngredient("parmesian cheese to taste");

$lemon_chicken->addInstruction("Cook pasta according to package directions");
$lemon_chicken->addInstruction("In a large skillet on medium high heat, saute garlic in olive oil for 3 minutes. Cut chicken into bite sized pieces.");
$lemon_chicken->addInstruction("Add additional items to sauce pan and cover for 5 minutes or untill chicken is almost completely white.");
$lemon_chicken->addInstruction("Remove lid and cook until reduced to a thick sauce.");
$lemon_chicken->addInstruction("Serve over pasta with parmesian cheese to taste");

$lemon_chicken->setYield("6 Servings");
$lemon_chicken->addTag("Main Dish", "Dinner");


$granola_muffins = new Recipe("Granola Muffins");

$granola_muffins->addIngredient("egg", 2);
$granola_muffins->addIngredient("sugar", .25, "Cup");
$granola_muffins->addIngredient("oil", .5, "Cup");
$granola_muffins->addIngredient("milk", 1, "Cup");
$granola_muffins->addIngredient("vanilla", 1, "tsp");
$granola_muffins->addIngredient("white vinegar", .5, "tsp");
$granola_muffins->addIngredient("granola", 2, "Cup");
$granola_muffins->addIngredient("flour", 1, "Cup");
$granola_muffins->addIngredient("instant protein", 4, "tbsp");
$granola_muffins->addIngredient("baking powder", 2, "tsp");
$granola_muffins->addIngredient("cinnamon", 2, "tsp");
$granola_muffins->addIngredient("baking soda", .5, "tsp");
$granola_muffins->addIngredient("salt", .5, "tsp");

$granola_muffins->addInstruction("In a large bowl, combine wet items");
$granola_muffins->addInstruction("In a smaller bowl, dry items");
$granola_muffins->addInstruction("Combine wet and dry mixtures and fold together gently until just mixed. Spoon into a sprayed muffin pan. Sprinkle each muffin top with granola if desired. Bake at 400 for 15 to 20 minutes. Remove from pan and cool on rack.");
$granola_muffins->addInstruction("*An hour before you want to make these (or at least a half hour) mix your milk of choice with the white vinegar and allow it to \"sour\" at room temperature.");

$granola_muffins->setYield("12 large muffins.");
$granola_muffins->addTag("breakfast, snack, quick bread");/**/


$belgian_waffles = new Recipe("Belgian Waffles");

$belgian_waffles->addIngredient("Egg", 2);
$belgian_waffles->addIngredient("Butter", 1, "Cup");
$belgian_waffles->addIngredient("sugar", .5, "Cup");
$belgian_waffles->addIngredient("milk", 1.5, "cup");
$belgian_waffles->addIngredient("vanilla", 2, "tsp");
$belgian_waffles->addIngredient("flour", 2, "cup");
$belgian_waffles->addIngredient("baking powder", 1, "tbsp");

$belgian_waffles->addInstruction("Separate eggs. Whip egg whites until stiff peaks form. Set asside.");
$belgian_waffles->addInstruction("Melt butter, and combine with sugar. Add egg yokes and mix well.");
$belgian_waffles->addInstruction("Add milk and vanilla and mix well.");
$belgian_waffles->addInstruction("Add flour and sugar until just combined. ");
$belgian_waffles->addInstruction("Fold in egg whites.");
$belgian_waffles->addInstruction("Follow instructions on waffle maker or add .5 cup of batter to waffle iron and cook for 4 minutes.");

$belgian_waffles->setYield("10 waffles");
$belgian_waffles->setSource("Alena Holligan");
$belgian_waffles->addTag("breakfast, quick bread");


$pepper_casserole = new Recipe("Ground Turkey Pepper Casserole");

$pepper_casserole->addIngredient("bell peppers", 6);
$pepper_casserole->addIngredient("Ground Turkey", 1.5, "lb");
$pepper_casserole->addIngredient("Garlic cloves", 2);
$pepper_casserole->addIngredient("onion", 1);
$pepper_casserole->addIngredient("rice, cooked", 2, "cup");
$pepper_casserole->addIngredient("salt", 1, "tsp");
$pepper_casserole->addIngredient("tomato sauce", 15, "oz");
$pepper_casserole->addIngredient("Cheddar Cheese", 8, "oz");

$pepper_casserole->addInstruction("Cut peppers into bite sized pieces. In 4-quart pan, add enough water to cover peppers. Heat to boiling; add peppers. Cook about 4 minutes; drain.");
$pepper_casserole->addInstruction("In 10-inch skillet, cook turkey, garlic and onion over medium heat 8 to 10 minutes, stirring occasionally, until beef is brown; drain.");
$pepper_casserole->addInstruction("Stir in cooked rice, salt and 1 cup of the tomato sauce; cook until hot.");
$pepper_casserole->addInstruction("Pre-heat oven to 350°F.");
$pepper_casserole->addInstruction("Add turky and rice mixture to a 9x13in baking dish. Spread peppers over the rix mixture and poor the remaining tomato sauce over peppers.");
$pepper_casserole->addInstruction("Cover tightly with foil. Bake 10 minutes. Uncover and Sprinkle with cheese. Bake about 10 minutes longer or until peppers are tender and cheese is melted.");

$pepper_casserole->setYield("8 servings");
$pepper_casserole->setSource("Alena Holligan");
$pepper_casserole->addTag("dinner");


$lasagna = new Recipe("Lasagna");

$lasagna->addIngredient("Lasagna Noodles", 1, "lb");
$lasagna->addIngredient("Sweet Italian Sausage", 1, "lb");
$lasagna->addIngredient("Hot Italian Sausage", 1, "lb");
$lasagna->addIngredient("Sweet Onion", 2);
$lasagna->addIngredient("Garlic, chopped", 4, "tbsp");
$lasagna->addIngredient("Tomato Sauce", 64, "oz");
$lasagna->addIngredient("Sugar", 1, "tsp");
$lasagna->addIngredient("Oregano", 2, "tbsp");
$lasagna->addIngredient("Parsley", 2, "tbsp");
$lasagna->addIngredient("Basil", 4, "tbsp");
$lasagna->addIngredient("Salt & Pepper to taste");
$lasagna->addIngredient("Ricotta Cheese", 8, "oz");
$lasagna->addIngredient("Mozzarella Cheese", 16, "oz");
$lasagna->addIngredient("Parmesan cheese, grated", .75, "cup");

$lasagna->addInstruction("In a large skillet, brown sausage over medium high heat, with onions and garlic.");
$lasagna->addInstruction("In a large bowl combine tomato sauce, sugar, seasonings, ricotta cheese and sausage mixture. Mix until ricotta cheese is smooth.");
$lasagna->addInstruction("Preheat oven to 375 degrees F (190 degrees C).");
$lasagna->addInstruction("To assemble, spread 1 1/2 cups of sauce mixture in the bottom of a 9x13 inch baking dish. Arrange UNCOOKED noodles over sauce. Spread with a third of the remaining sauce mixture. Top with a third of the gratted mozzarella cheese. Sprinkle with 1/4 cup Parmesan cheese. Repeat layers of noodles, sauce mixture and cheese 2 more times. Cover with foil: to prevent sticking, either spray foil with cooking spray, or make sure the foil does not touch the cheese.");
$lasagna->addInstruction("Bake in preheated oven for 60 minutes. Remove foil, and bake an additional 15 minutes. Cool for 15 minutes before serving.");

$lasagna->setYield("12 servings");
$lasagna->setSource("Alena Holligan");
$lasagna->addTag("dinner,italian");


//Ken Alger
$dried_mushroom_ragout = new Recipe("Dried Mushroom Ragout");

$dried_mushroom_ragout->addIngredient("Pearl Onion", 11, "oz");
$dried_mushroom_ragout->addIngredient("Assorted Dried Mushrooms (morels, black fungus, shiitake", 1.3, "oz");
$dried_mushroom_ragout->addIngredient("Butter", 2, "oz");
$dried_mushroom_ragout->addIngredient("Olive Oil", 2, "tsp");
$dried_mushroom_ragout->addIngredient("Salt & Pepper to taste");
$dried_mushroom_ragout->addIngredient("Sour Cream", 3.5, "oz");

$dried_mushroom_ragout->addInstruction("Trim ends off pearl onions.");
$dried_mushroom_ragout->addInstruction("Cover with boiling water and let stand for one minute.");
$dried_mushroom_ragout->addInstruction("Drain and slip off skins.");
$dried_mushroom_ragout->addInstruction("Cook the onions in boiling water for 5 minutes.");
$dried_mushroom_ragout->addInstruction("Drain well and spread out on dry paper towels.");
$dried_mushroom_ragout->addInstruction("Cover the mushrooms generously with hot water and let soak for thirty minutes.");
$dried_mushroom_ragout->addInstruction("Pick out the mushrooms.");
$dried_mushroom_ragout->addInstruction("Strain water through a sieve lined with a double layer of cheesecloth.");
$dried_mushroom_ragout->addInstruction("Add enough water to make 2 cups.");
$dried_mushroom_ragout->addInstruction("Reserve liquid.");
$dried_mushroom_ragout->addInstruction("Fry the mushrooms gently in butter and oil for two minutes.");
$dried_mushroom_ragout->addInstruction("Add the onions, salt, pepper, and soaking liquid from the mushrooms.");
$dried_mushroom_ragout->addInstruction("Simmer until virtually all the liquid has evaporated.");
$dried_mushroom_ragout->addInstruction("Stir in the sour cream and simmer for a couple of minutes longer until slightly reduced.");
$dried_mushroom_ragout->addInstruction("Taste and adjust the seasoning and serve.");

$dried_mushroom_ragout->setYield("5, 4 ounce servings.");

$dried_mushroom_ragout->setSource("Alice Kingsleigh");

$dried_mushroom_ragout->addTag("dinner");



$rabbit_catalan = new Recipe("Rabbit Catalan");

$rabbit_catalan->addIngredient("Raisins", 1.5, "oz");
$rabbit_catalan->addIngredient("Rabbit", 14, "oz");
$rabbit_catalan->addIngredient("Seasoned flour");
$rabbit_catalan->addIngredient("Olive Oil", 4.5, "tsp");
$rabbit_catalan->addIngredient("Onions", .75);
$rabbit_catalan->addIngredient("Tomatoes, skinned, liquidized, and strained", 12, "oz");
$rabbit_catalan->addIngredient("Rabbit stock", 7.5, "oz");
$rabbit_catalan->addIngredient("Rosemary spring", 1);
$rabbit_catalan->addIngredient("Bay leaf", .5);
$rabbit_catalan->addIngredient("Parsley, finely chopped", 1.5, "tbsp");
$rabbit_catalan->addIngredient("Salt & Pepper to taste");
$rabbit_catalan->addIngredient("Garlic cloves", 2);
$rabbit_catalan->addIngredient("Blanched almonds", 10);
$rabbit_catalan->addIngredient("Hazlenuts", 10);
$rabbit_catalan->addIngredient("Saffron threads", .25, "tsp");
$rabbit_catalan->addIngredient("Xocolata a la pedra", .5, "oz");

$rabbit_catalan->addInstruction("Cover the raisins with water and soak 20 minutes.");
$rabbit_catalan->addInstruction("Coat the rabbit in the seasoned flour and brown in olive oil. Set aside.");
$rabbit_catalan->addInstruction("In the same oil, saute the onion until tender and golden.");
$rabbit_catalan->addInstruction("Add the tomatoes, stock, rosemary, bay leaf, half of the parsley, salt and pepper.");
$rabbit_catalan->addInstruction("Simmer gently roughly five minutes.");
$rabbit_catalan->addInstruction("Return the rabbit to the pan, cover, and simmer a further 20 minutes.");
$rabbit_catalan->addInstruction("Turn the rabbit pieces occasionally, adding additional stock if necessary.");
$rabbit_catalan->addInstruction("White the rabbit is simmering, mix the remaining parsley with the garlic (chopped), almonds, hazelnuts, affron, and chocolate.");
$rabbit_catalan->addInstruction("Process in a food processor until smooth.");
$rabbit_catalan->addInstruction("Gradually work in 6.5 ounces of sauce from the rabbit.");
$rabbit_catalan->addInstruction("Spoon this mixture over the rabbit, add the raisins, drained, and stir into the mix.");
$rabbit_catalan->addInstruction("Cover again and continue simmering until the rabbit is done.");
$rabbit_catalan->addInstruction("Taste and adjust seasoning.");

$rabbit_catalan->setYield("4, 7 ounce servings.");

$rabbit_catalan->setSource("Elmer Fudd");

$rabbit_catalan->addTag("dinner");



$grilled_salmon_with_fennel = new Recipe("Grilled Salmon with Fennel");

$grilled_salmon_with_fennel->addIngredient("Olive Oil", 2, "tsp");
$grilled_salmon_with_fennel->addIngredient("White onion, finely chopped", 1.25, "cup");
$grilled_salmon_with_fennel->addIngredient("Large fennel bulbs, finely chopped", 1.25, "cup");
$grilled_salmon_with_fennel->addIngredient("Orange liquor", .25, "oz");
$grilled_salmon_with_fennel->addIngredient("Salt and Pepper to taste");
$grilled_salmon_with_fennel->addIngredient("Fresh parsley, finely chopped", 2.5, "tbsp");
$grilled_salmon_with_fennel->addIngredient("Fennel leaves, finely chopped", 5, "tsp");
$grilled_salmon_with_fennel->addIngredient("Salmon steaks, 5 ounces each", 5);
$grilled_salmon_with_fennel->addIngredient("Vegetable Oil Spray");

$grilled_salmon_with_fennel->addInstruction("Heat grill to medium-hot.");
$grilled_salmon_with_fennel->addInstruction("For the sauce, briefly heat the olive oil in a large skillet.");
$grilled_salmon_with_fennel->addInstruction("Add the onions and saute until they soften.");
$grilled_salmon_with_fennel->addInstruction("Add the fennel bulb, orange liquor, salt, and pepper.");
$grilled_salmon_with_fennel->addInstruction("Saute until the vegetables are soft.");
$grilled_salmon_with_fennel->addInstruction("Turn off the heat and cover pan to keep warm.");
$grilled_salmon_with_fennel->addInstruction("Stir in parsley and fennel leaves just prior to service.");
$grilled_salmon_with_fennel->addInstruction("Season the salmon with salt and pepper and then spray with the vegetable oil.");
$grilled_salmon_with_fennel->addInstruction("Place on grill.");
$grilled_salmon_with_fennel->addInstruction("Grill for approximately five minutes, then turn and grill for five minutes on the second side or until the fish just starts to flake.");
$grilled_salmon_with_fennel->addInstruction("Serve fish over sauce.");

$grilled_salmon_with_fennel->setYield("4, 6 ounce servings");

$grilled_salmon_with_fennel->setSource("Lord Drinian");

$grilled_salmon_with_fennel->addTag("dinner");



$pistachio_duck = new Recipe("Duck Breast in Pistachio Crust");

$pistachio_duck->addIngredient("Duck Breast", 1);
$pistachio_duck->addIngredient("Pistachios, finely chopped", 1.5, "tbsp");
$pistachio_duck->addIngredient("Wild Rice, cooked", 1/3, "cup");
$pistachio_duck->addIngredient("White Rice, cooked", 1/3, "cup");
$pistachio_duck->addIngredient("Egg plant", 1/4);
$pistachio_duck->addIngredient("Asparagus spear", 1);
$pistachio_duck->addIngredient("Duck stock", 8, "oz");
$pistachio_duck->addIngredient("Port wine", .5, "oz");
$pistachio_duck->addIngredient("Dried cranberries", 10);
$pistachio_duck->addIngredient("Shallots, minced", 1, "tsp");

$pistachio_duck->addInstruction("Press pistachios into duck breast.");
$pistachio_duck->addInstruction("Dry fry the breast to give it color, finish in a 350 F oven.");
$pistachio_duck->addInstruction("With cooked rices, combine together along with five of the cranberries that have been allowed to soak in the duck stock long enough to reconstitute.");
$pistachio_duck->addInstruction("Cut egg plant into 1/4 inch slices");
$pistachio_duck->addInstruction("Grill over medium high heat.");
$pistachio_duck->addInstruction("Steam the one asparagus spear until al dente.");
$pistachio_duck->addInstruction("For the sauce, strain any fat off the duck stock.");
$pistachio_duck->addInstruction("Dry saute the shallots just until they start to color.");
$pistachio_duck->addInstruction("Add 2 ounces stock and deglaze the pan.");
$pistachio_duck->addInstruction("Add remaining duck stock, port wine, and the other five reconstituted cranberries and reduce until thickend.");
$pistachio_duck->addInstruction("Serve the eggplant sliced and fanned over a bed of the rice.");
$pistachio_duck->addInstruction("Slice the pistachio crusted duck breast over a pool of cranberry port sauce.");

$pistachio_duck->setYield("1 serving");

$pistachio_duck->setSource("S.J. Sharkie");

$pistachio_duck->addTag("dinner");



$chili_pork = new Recipe("Pan seared pork tenderloin rolled in a chili peppercrust");

$chili_pork->addIngredient("Pork tenderloin", 6);
$chili_pork->addIngredient("Dry chilis, finely ground", 2, "cup");
$chili_pork->addIngredient("Olive oil", 1, "cup");
$chili_pork->addIngredient("Green chilis, roasted", 10);
$chili_pork->addIngredient("Garlic, chopped", 2, "tsp");
$chili_pork->addIngredient("Cilantro", 3, "tbsp");
$chili_pork->addIngredient("Chicken stock", 2, "cup");
$chili_pork->addIngredient("Lime Juice", 3, "tbsp");
$chili_pork->addIngredient("Red onion, diced", 3, "tbsp");
$chili_pork->addIngredient("Olive oil", 2, "tbsp");

$chili_pork->addInstruction("Roll the tenderloins in the ground chili's.");
$chili_pork->addInstruction("Heat a saute pan, add a little olive oil and quickly brown tenderloins.");
$chili_pork->addInstruction("Remove from saute pan an dplace in a 350 F oven for about six minutes.");
$chili_pork->addInstruction("Remove from oven and keep warm until ready to serve.");
$chili_pork->addInstruction("For the sauce, clean the chili peppers after roasting, and dice them.");
$chili_pork->addInstruction("Heat a small pot, add olive oil, red onion, roasted garlic, and chili's.");
$chili_pork->addInstruction("Saute quickly until onion and garlic soften.");
$chili_pork->addInstruction("Add the chicken stock and lime juice and simmer for four minutes.");
$chili_pork->addInstruction("Place mixture into a blender and puree until smooth.");
$chili_pork->addInstruction("Add cilantro before serving with the sliced pork.");

$chili_pork->setYield("12 portions");

$chili_pork->setSource("B.B. Wolf");

$chili_pork->addTag("dinner");



$crab_cakes = new Recipe("Crab Cakes");

$crab_cakes->addIngredient("Bell peppers, finely diced", 2, "cup");
$crab_cakes->addIngredient("Onion, finely diced", .5);
$crab_cakes->addIngredient("Celery, finely diced", 2, "cup");
$crab_cakes->addIngredient("Fresh green chili, finely diced", 3);
$crab_cakes->addIngredient("Garlic cloves", 3);
$crab_cakes->addIngredient("Vegetable oil", .5, "cup");
$crab_cakes->addIngredient("Cilantro", 2, "tbsp");
$crab_cakes->addIngredient("Flour", 1, "cup");
$crab_cakes->addIngredient("Eggs, whipped", 2);
$crab_cakes->addIngredient("Milk, hot", 1, "cup");
$crab_cakes->addIngredient("Dijon Mustard", .25, "cup");
$crab_cakes->addIngredient("Salt and Pepper to taste");
$crab_cakes->addIngredient("Crab meat", 2.5, "lb");

$crab_cakes->addInstruction("Heat large saute pan, add the vegetable oil.");
$crab_cakes->addInstruction("Add vegetables and cook over medium heat until soft.");
$crab_cakes->addInstruction("Add flour and stir until smooth.");
$crab_cakes->addInstruction("Add milk, stir to make a very smooth mixture without lumps.");
$crab_cakes->addInstruction("Remove from heat and transfer to a large bowl.");
$crab_cakes->addInstruction("Add mustard and mix well.");
$crab_cakes->addInstruction("Add eggs and mix well.");
$crab_cakes->addInstruction("Add minced garlic, herbs, season to taste and let cool.");
$crab_cakes->addInstruction("Drain crab meat until dry.");
$crab_cakes->addInstruction("Add to mixture and form 1 1/2 ounce portions.");
$crab_cakes->addInstruction("Shape into rounds and place in refrigerator until time to prepare.");
$crab_cakes->addInstruction("To prepare for service, saute rounds until GBD (Golden Brown & Delicious).");
$crab_cakes->addInstruction("Serve with a fresh fruit salsa and creme fraiche.");

$crab_cakes->setYield("30 cakes");

$crab_cakes->setSource("S. Bob");

$crab_cakes->addTag("dinner");



$beef_medallions = new Recipe("Beef Medallions with Ruby Port Sauce");

$beef_medallions->addIngredient("Beef medallions, 2 ounces", 8);
$beef_medallions->addIngredient("Shallots", 1, "tbsp");
$beef_medallions->addIngredient("Ruby Port", 3, "oz");
$beef_medallions->addIngredient("Red wine", 2, "oz");
$beef_medallions->addIngredient("Thyme sprig", 1);
$beef_medallions->addIngredient("Black peppercorns", 1, "tsp");
$beef_medallions->addIngredient("Bay leaf", 1);
$beef_medallions->addIngredient("Demi-glace or meat glaze", 5, "oz");
$beef_medallions->addIngredient("Garlic, chopped", 1, "tsp");
$beef_medallions->addIngredient("Butter", 1, "tsp");

$beef_medallions->addInstruction("Pan sear the medallions to carmelize the exterior, finish in oven at 350 F to an internal temperature of 145 F.");
$beef_medallions->addInstruction("Reduce the shallots, port, red wine, thyme, peppercorns, and bay leaf by half.");
$beef_medallions->addInstruction("Add demi-glace and reduce.");
$beef_medallions->addInstruction("Strain sauce, add roasted garlic and finish with butter.");
$beef_medallions->addInstruction("Serve two ounces of sauce with each serving of two medallions.");

$beef_medallions->setYield("4 servings");

$beef_medallions->setSource("P. Buffay");

$beef_medallions->addTag("dinner");

$silver_dollar_cakes = new Recipe("Silver Dollar Pancakes");

$silver_dollar_cakes->addIngredient("Eggs", 4);
$silver_dollar_cakes->addIngredient("Salt", .5, "tsp");
$silver_dollar_cakes->addIngredient("Baking soda", .5, "tsp");
$silver_dollar_cakes->addIngredient("Cake flour", .25, "cup");
$silver_dollar_cakes->addIngredient("Sour cream", 2, "cup");
$silver_dollar_cakes->addIngredient("Sugar", 3, "tbsp");

$silver_dollar_cakes->addInstruction("Put eggs in bowl and blend thouroughly.");
$silver_dollar_cakes->addInstruction("Add the salt, baking soda, flour, sour cream, and sugar. Mix well.");
$silver_dollar_cakes->addInstruction("These cakes are very delicate and require a soft touch when turning.");
$silver_dollar_cakes->addInstruction("It is recommended to use only the tip of the spatula and do not attempt to 'flip' the entire cake.");
$silver_dollar_cakes->addInstruction("Instead, use a very gentle lift, raise the cake by 1/3 the surface area and fold them over to finish cooking.");
$silver_dollar_cakes->addInstruction("Serve warm.");

$silver_dollar_cakes->setYield("55 dollar size cakes");

$silver_dollar_cakes->setSource("General Bidwell");

$silver_dollar_cakes->addTag("breakfast");



$french_toast = new Recipe("French Toast");

$french_toast->addIngredient("Whole eggs", 1, "quart");
$french_toast->addIngredient("Milk", 1, "cup");
$french_toast->addIngredient("Cinnamon", .5, "tsp");
$french_toast->addIngredient("Nutmeg", .25, "tsp");
$french_toast->addIngredient("Zest of 1 lemon (blanched)", 1);
$french_toast->addIngredient("Cornflakes, coarsely crushed", 6, "cup");
$french_toast->addIngredient("Bread, sliced 1 inch thick", 24);
$french_toast->addIngredient("Butter", .25, "cup");

$french_toast->addInstruction("Whisk together eggs, milk, cinnamon, nutmeg and lemon zest.");
$french_toast->addInstruction("Put cornflakes into a separate shallow dish.");
$french_toast->addInstruction("Dip bread in egg mixture, soak on each side for ten seconds and then coat with cornflakes.");
$french_toast->addInstruction("Heat butter in a non-stick skillet over medium heat.");
$french_toast->addInstruction("Cook the bread in the pan, turning once, until both sides are GBD (Golden brown & delicious)");
$french_toast->addInstruction("Serve warm with choice of toppings.");

$french_toast->setYield("12 servings");

$french_toast->setSource("Rene Francois Artois");

$french_toast->addTag("breakfast");



$corn_beef_hash = new Recipe("Corn Beef Hash");

$corn_beef_hash->addIngredient("Cornbeef, small diced", 2, "lb");
$corn_beef_hash->addIngredient("Onion, small diced", 1);
$corn_beef_hash->addIngredient("Bell peppers, small diced", 4);
$corn_beef_hash->addIngredient("Potatoes, cooked, small diced", 6);

$corn_beef_hash->addInstruction("Saute the onion and bell pepper.");
$corn_beef_hash->addInstruction("Add corn beef, mix and saute for 2 minutes.");
$corn_beef_hash->addInstruction("Add potatoes, mix and saute for 2 minutes.");
$corn_beef_hash->addInstruction("Salt and pepper to taste.");
$corn_beef_hash->addInstruction("Serve warm.");

$corn_beef_hash->setYield("16, 4 ounce servings.");

$corn_beef_hash->setSource("Zygmund Zyzzyx");

$corn_beef_hash->addTag("breakfast");



$granola = new Recipe("Granola");

$granola->addIngredient("Rolled oats", 1, "quart");
$granola->addIngredient("Rolled wheat", 1, "cup");
$granola->addIngredient("Rolled rye", 1, "cup");
$granola->addIngredient("Rolled barley", 1, "cup");
$granola->addIngredient("Nutmeg", 1, "tsp");
$granola->addIngredient("Cinnamon", .5, "tsp");
$granola->addIngredient("Salt", .125, "tsp");
$granola->addIngredient("Honey", 1.25, "cup");
$granola->addIngredient("Vegetable oil", .75, "cup");
$granola->addIngredient("Almonds", 1.5, "cup");
$granola->addIngredient("Golden raisins", 1, "cup");

$granola->addInstruction("Mix grains and spices together.");
$granola->addInstruction("Combine honey and oil together until completely combined.");
$granola->addInstruction("Blend the grain mixture in with the honey mixture.");
$granola->addInstruction("Spread on a sheet pan and toast in oven at 300 F for approxmiately 7 minutes.");
$granola->addInstruction("Remove from oven and while cooling add in rasisns.");
$granola->addInstruction("Store in an air tight container.");

$granola->setYield("1 sheet pan");

$granola->setSource("H. Crowell");

$granola->addTag("breakfast");



$spicy_omelette = new Recipe("Spicy Omelette");

$spicy_omelette->addIngredient("Butter", 2, "tbsp");
$spicy_omelette->addIngredient("Green chili pepper, seeded & diced", 2);
$spicy_omelette->addIngredient("Kielbasa sausage", 4, "oz");
$spicy_omelette->addIngredient("Onion, diced", 3, "tbsp");
$spicy_omelette->addIngredient("Tomato concasse", 2, "tbsp");
$spicy_omelette->addIngredient("Eggs, beaten", 3);
$spicy_omelette->addIngredient("Pepper-Jack cheese, shredded", 3, "tbsp");

$spicy_omelette->addInstruction("Preheat a nonstick omelette pan and melt 1 Tbsp. butter in the pan.");
$spicy_omelette->addInstruction("Add the chili pepper, sausage, and onion.");
$spicy_omelette->addInstruction("Saute until the vegetables start to soften and the sausage is lightly browned.");
$spicy_omelette->addInstruction("Add the tomato and cook to heat through (about 20 seconds)");
$spicy_omelette->addInstruction("Transfer mixture to a bowl and cover to keep warm.");
$spicy_omelette->addInstruction("Melt the additional 1 Tbsp. butter. ");
$spicy_omelette->addInstruction("Add the eggs and cook, without stirring, for about two minutes.");
$spicy_omelette->addInstruction("Use a high temperature spatula to lift the edges allowing the uncooked egg to flow beneath the cooked portion.");
$spicy_omelette->addInstruction("Cook until the eggs are almost set and then flip the omelette in the pan.");
$spicy_omelette->addInstruction("Cook for 45 seconds to set eggs and then flip the omelette again.");
$spicy_omelette->addInstruction("Arrange the sausage mixture and then the cheese in the center of the omelette.");
$spicy_omelette->addInstruction("Tri-fold the eggs over the mixture and 'roll' the omlette seam side down");
$spicy_omelette->addInstruction("Cook an additional 30 seconds to finish cooking the eggs and to melt the cheese");
$spicy_omelette->addInstruction("Slide the omelette onto a plate, top with extra cheese. Serve hot");

$spicy_omelette->setYield("1 serving");

$spicy_omelette->setSource("S. Gonzales");

$spicy_omelette->addTag("breakfast");



$scones = new Recipe("Orange Cranberry Scones");

$scones->addIngredient("All purpose flour", 3, "cup");
$scones->addIngredient("Sugar", .333, "cup");
$scones->addIngredient("Baking powder", 2.5, "tsp");
$scones->addIngredient("Salt", 1, "tsp");
$scones->addIngredient("Baking soda", .5, "tsp");
$scones->addIngredient("Orange zest", 1, "tbsp");
$scones->addIngredient("Butter, unsalted & chilled, 1/2 pieces", .75, "cup");
$scones->addIngredient("Cranberries, dried", .75, "cup");
$scones->addIngredient("Heavy cream, cold", 1, "cup");
$scones->addIngredient("Confectioner's sugar", .5, "cup");
$scones->addIngredient("Orange juice, freshly squeezed", 4, "tsp");

$scones->addInstruction("Preheat oven to 400 F.");
$scones->addInstruction("Line a baking sheet with parchment paper.");
$scones->addInstruction("Sift together dry ingredients into a large bowl.");
$scones->addInstruction("Mix in orange zest.");
$scones->addInstruction("Add butter and cut into dry ingredients until the mixture resembles coarse meal.");
$scones->addInstruction("Mix in dried cranberries.");
$scones->addInstruction("Gradually add cream until moist clumbs form.");
$scones->addInstruction("Move dough to a lightly floured work surface and knead about four turns to bind the dough.");
$scones->addInstruction("Form dough into a round 1 inch thick.");
$scones->addInstruction("Cut into 10 pieces and transfer to baking sheet.");
$scones->addInstruction("Bake in oven until the tops are golden brown, approximately 25 minutes.");
$scones->addInstruction("Remove from oven and let cool on the baking sheet for 10 minutes.");
$scones->addInstruction("Whisk together the confectioner's sugar and orange juice.");
$scones->addInstruction("Lightly drizzle over the scones while still warm.");

$scones->setYield("10 scones");

$scones->setSource("Beryl Patmore");

$scones->addTag("breakfast");