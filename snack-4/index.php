<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
$NumeriCasuali= [];
while (count($NumeriCasuali) < 15) {
$random= rand();
//se l'array non contiene il numero random generato lo inserisco nell'array
if (!in_array($random, $NumeriCasuali)) {
    //pusha dentro l'array
    $NumeriCasuali[]=$random;
}

};
var_dump($NumeriCasuali); 

?>