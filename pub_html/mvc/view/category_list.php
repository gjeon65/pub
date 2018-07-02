<?php
include("header.php");

/*
 * At this point, let's suppose
 * category data are in the $categories variable
 */
foreach($categories as $cat){
    echo "<h2>" . $cat['id'].": " . $cat['name']. $cat['add'] . "</h2>";
}

include("footer.php");

?>
