<?php

include '../../api_connection.php';

$recipeObject = json_decode($result);
//var_dump($recipeObject);
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


/* foreach ($recipeObject -> hits as $recipe) {
    echo '<div class="w3ls-add-grids" style="background-image: url('. $recipe -> recipe -> image .')">';
    echo '<a href="singleRecipe.php?recipe_id=' . $recipe -> recipe -> uri . '"> ';
    echo '<h4>mMmmm.. <span><br>' . $recipe -> recipe -> label . '</span></h4>';
    echo '<h6>Get me the recipe! <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>';
    echo '</a>';';
    echo '</div>';
} */

/* foreach ($recipeObject -> hits as $recipe) {
    echo '<div class="w3ls-add-grids" style="background-image: url('. $recipe -> recipe -> image .')">';
    echo '<a href="singleRecipe.php?recipe_id=' . $recipe -> recipe -> uri . '"> ';
    echo '<h4> <span><br>' . $recipe -> recipe -> label . '</span></h4>';
    echo '<h6>Get me the recipe! <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>';
    echo '<h5>' ;
    foreach($recipe -> recipe -> ingredientLines as $ingredientsALL){
        echo $ingredientsALL;
    };
    echo '</h5>';
    echo '</a>';
    echo '</div>';
} */


foreach ($recipeObject -> hits as $recipe) {
    echo '<ul class="faq">';
    echo '<li class="item1"><a href="#" title="click here">'. $recipe -> recipe -> image .'</a>';
    echo '<ul>';
    echo '<li class="subitem1"><p><img scr="'. $recipe -> recipe -> uri .'</p></li>';										
    echo '</ul>';
    echo '</li>';
    /* echo '<li class="item2"><a href="#" title="click here">'.  .'</a>';
    echo '<ul>';
    echo '<li class="subitem1"><p>'.  .'</p></li>';										
    echo '</ul>';
    echo '</li>';
    echo '<li class="item3"><a href="#" title="click here">'.  .'</a>';
    echo '<ul>';
    echo '<li class="subitem1"><p>'.  .'</p></li>';										
    echo '</ul>';
    echo '</li>';
    echo '<li class="item4"><a href="#" title="click here">'.  .'</a>';
    echo '<ul>';
    echo '<li class="subitem1"><p>'.  .'</p></li>';										
    echo '</ul>';
    echo '</li>';
    echo '<li class="item5"><a href="#" title="click here">'.  .'</a>';
    echo '<ul>';
    echo '<li class="subitem1"><p>'.  .'</p></li>';										
    echo '</ul>';
    echo '</li>';
    echo '<li class="item6"><a href="#" title="click here">'.  .'</a>';
    echo '<ul>';
    echo '<li class="subitem1"><p>'.  .'</p></li>';										
    echo '</ul>';
    echo '</li>';
    echo '<li class="item7"><a href="#" title="click here">'.  .'</a>';
    echo '<ul>';
    echo '<li class="subitem1"><p>'.  .'</p></li>';										
    echo '</ul>';
    echo '</li>';
    echo '<li class="item8"><a href="#" title="click here">'.  .'</a>';
    echo '<ul>';
    echo '<li class="subitem1"><p>'.  .'</p></li>';										
    echo '</ul>';
    echo '</li>';
    echo '<li class="item9"><a href="#" title="click here">'.  .'</a>';
    echo '<ul>';
    echo '<li class="subitem1"><p>'.  .'</p></li>';										
    echo '</ul>';
    echo '</li>';
    echo '<li class="item10"><a href="#" title="click here">'.  .'</a>';
    echo '<ul>';
    echo '<li class="subitem1"><p>'.  .'</p></li>';
    echo '</ul>';
    echo '</li>';
    echo '</ul>';  */
}
?>