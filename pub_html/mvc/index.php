<?php
error_reporting(E_ALL);
inni_set('display_error', 'On');
/*
 * to intergrate and coordinate on everything.
 */

require("model/database.php");
require("model/categories.php");

$categories = getCategories();
include("view/category_list.php");

?>