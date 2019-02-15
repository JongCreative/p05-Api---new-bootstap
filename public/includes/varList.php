<?php

include '../../api_connection.php';

//list of variables

$recipeObject = json_decode($result);
$hits = $recipeObject -> hits[0];
//var_dump($hits);
$recipe = $hits -> recipe;
//var_dump($recipe);
$ingredientLines = json_encode(array_values($recipe -> ingredientLines));
//echo $ingredientLines;
$Image = $recipe -> image;
//$ingredientLines = json_encode($recipeObject -> hits[0] -> recipe -> ingredientLines);
//echo json_encode($ingredientLines,JSON_PRETTY_PRINT);

//JSON; Curly braces hold objects ({}), Square brackets hold arrays ([])
    
/* Allowed characters:
*  letters a-z,
*  letters A-Z,
*  digits,
*  space (\\040),
*  hyphen (\\-),
*  underscore (\\_) 
*  backslash (\\\\),
*  forwardslash(\/),
*  everything else is to be removed from the string.
*  
*  $allowed = "/[^a-z0-9\\040\\.\\-\\_\\\\]/i";
*  $allowed = "/[^a-zA-Z0-9]+/"
*********/
$ingredientLinesPretty = json_encode($ingredientLines,JSON_PRETTY_PRINT);
$allowed = "/[^a-zA-Z0-9_\/]+/";

$ingredientLines = preg_replace($allowed, " ", $ingredientLinesPretty);
echo $ingredientLines;
/* * * * *
*
* var_dump($apiURL);
* var_dump($result);
* var_dump($recipeObject);

* hits within this api means all recipes found
* var_dump($recipeObject -> hits[0] -> recipe -> image);
*
*
* * * * * */


/* foreach ($recipeObject -> hits as $recipe) {
    echo '<div class="w3ls-add-grids" style="background-image: url('. $recipe -> recipe -> image .')">';
    echo '<a href="singleRecipe.php?recipe_id=' . $recipe -> recipe -> uri . '"> ';
    echo '<h4>mMmmm.. <span><br>' . $recipe -> recipe -> label . '</span></h4>';
    echo '<h6>Get me the recipe! <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>';
    echo '</a>';
    echo '</div>';
} */





?>