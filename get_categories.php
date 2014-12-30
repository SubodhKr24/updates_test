<?php
/**
 * Short description for categories.php
 *
 * @package categories
 * @author root <root@students>
 * @version 0.1
 * @copyright (C) 2014 root <root@students>
 * @license MIT
 */

//Initializing categories array, containing the categories along with their keys.
$categories = array();

//open file categories to read all the categories from there.
$myfile = fopen("categories","r");

//read everything from the file into the variable for further processing.
$filecontents = fread($myfile,filesize("categories"));

//splitting the file contents based on line break. Each new line indicates a new category.
$components = explode(PHP_EOL,$filecontents);

//var_dump($components);
//array_push("reminder","art","missing","academic","hostel","fee","exam","sports","lecture");

//from each category, separate out the key value pairs and push to the categories array.
for ($i = 0; $i < sizeof($components); $i++) {
  if($components[$i] != "") {
    $intermediate = preg_split("/=/",$components[$i]);
    array_push($categories,$intermediate);
  }
  else {
    continue;
  }
}

fclose("categories");

?>

