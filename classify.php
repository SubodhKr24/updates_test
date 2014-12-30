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
  function __construct($sentence) {
    $this->sentence = $sentence;
    $this->categories = $this->get_categories();
    $this->check();
    $this->print_result();
  }

  //the function which checks for every category match.
  public function check() {
    for ($x = 0; $x < sizeof($this->categories); $x++) {
      $values = preg_split("/,/",$this->categories[$x][1]);
      for ($y = 0; $y < sizeof($values); $y++) {
        if(preg_match("/$values[$y]/",$this->sentence)) {
          array_push($this->result,$this->categories[$x][0]);
          break;
        }
      }
    }
  }

  //checking if the sentence is a html sentence.
  public function check_html() {
    $split_sentence = preg_split("/<[^<>@]*>/",$this->sentence);
    if(sizeof($split_sentence) > 3) {
      return true;
    } else {
      return false;
    }
  }

  //printing out the result array, for testing purposes.
  public function print_result() {
    for ($x = 0; $x < sizeof($this->result); $x++) {
      echo $this->result[$x];
      echo "\n";
    }
  }

  public function get_categories() {

    //Initializing categories array, containing the categories along with their keys.
    $categories_array = array();

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
        array_push($categories_array,$intermediate);
      }
    }

    //close the file connection after the categories are obtained.
    fclose($myfile);

    //return the categories array with the final list of keys and values.
    return $categories_array;
  }

}

?>

