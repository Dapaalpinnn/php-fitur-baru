<?php 

/* 
    * Allow operasi class pada object
    * Mendapatkan nama class
*/

class Feature {

}

$feature = new Feature();

var_dump(($feature::class)); // Recomendation
var_dump(get_class($feature));
var_dump(Feature::class);

?>