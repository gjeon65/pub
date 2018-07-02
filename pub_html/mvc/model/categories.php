<?php
/*
 * to retrieve data (all categories)
 * from the categories table on the
 * MySQL server.
 */
function getCategories(){
    global $db;
    $queryString = "select * from categories";
    $data = $db->query($queryString);
    return $data;
}

//$whatIget = getCategories();
//
//foreach($whatIget as $c){
//    echo
//}
