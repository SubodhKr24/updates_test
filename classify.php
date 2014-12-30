<?php
/**
 * Short description for reminder.php
 *
 * @package reminder
 * @author root <root@students>
 * @version 0.1
 * @copyright (C) 2014 root <root@students>
 * @license MIT
 */

//class to contain methods to categorize a given string into different categories.
class classify {

  //the string to be classified.
  public $sentence;

  //the categories array which has all the key value pairs.
  public $categories;  

  //the result array, which will contain the list of categories the given string belongs to.
  public $result = array();

  //constructor function, where the variables are set and the check function is called.
  function __construct($sentence,$categories) {
    $this->sentence = $sentence;
    $this->categories = $categories;
    $this->check();
  }

  //the function which checks for every category match.
  public function check() {
    $split_sentence = preg_split("/<[^<>@]*>/",$sentence);
    for($x = 0; $x < sizeof($split_sentence); $x++) {
      echo $split_sentence[$x];
    }
  }

}

?>

