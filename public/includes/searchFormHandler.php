<?php

include '../api_connection.php';

$recipeObject = json_decode($result);

/* * * * *
*
* var_dump($apiURL);
* var_dump($result);
* var_dump($recipeObject);

* hits within this api means all recipes found
* var_dump($recipeObject -> hits[0] -> recipe -> image);
*
* var_dump ($ingredientLines);
*
* * * * * */

//var_dump ($recipeObject -> hits[0] -> recipe);

//var_dump($ingredientLines);
//$ingredientLines = json_encode($recipeObject -> hits[0] -> recipe -> ingredientLines);
//echo $ingredientLines;
echo '<hr/>';

/* $arr = array($ingredientLines = json_encode($recipeObject -> hits[0] -> recipe -> ingredientLines));
print_r(str_replace(" , ","/n",$arr,$i));
echo "<br>" . "Replacements: $i"; */

// close cURL resource, and free up system resources
curl_close($curl);

foreach ($recipeObject -> hits as $recipe) {

    echo '<div class="w3ls-add-grids" style="background-image: url('. $recipe -> recipe -> image .')">';
    echo '<a href="singleRecipe.php?recipe_id=' . $recipe -> recipe -> uri . '"> ';
    echo '<div class="recipeBox"><h4> <span><br/<br/>' . $recipe -> recipe -> label . '</span></h4>';

    echo '<h5>' ;
    foreach($recipe -> recipe -> ingredientLines as $ingredientsALL){
        echo $ingredientsALL;
    };
    echo '</h5></div>';
    echo '</a>';
    echo '</div>';
}

?>