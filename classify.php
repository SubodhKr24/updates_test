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

class Classify {
  public $sentence;
  public $result = array();

  function __construct($sentence) {
    $this->sentence = $sentence;
    check_reminder($sentence);
    check_sports($sentence);
    check_academics($sentence);
    check_exam($sentence);
    check_fee($sentence);
    check_hostel($sentence);
    check_lecture($sentence);
    check_art($sentence);
    check_missing($sentence);
    check_announcement($sentence);
  }

  public function check_reminder($sentence) {
    $split_sentence = preg_split("<[^<>]*>",$sentence);
    for($x = 0; $x < $split_sentence.sizeof(); $x++) {
      echo $split_sentence[$x];
    }
  }

  public function check_sports($sentence){
  //nothing here yet...
  }

  public function check_academics($sentence){
  //nothing here yet...
  }
  
  public function check_exam($sentence){
  //nothing here yet...
  }
  
  public function check_fee($sentence){
  //nothing here yet...
  }
  
  public function check_hostel($sentence){
  //nothing here yet...
  }

  public function check_lecture($sentence){
  //nothing here yet...
  }

  public function check_art($sentence){
  //nothing here yet...
  }

  public function check_missing($sentence){
  //nothing here yet...
  }

  public function check_announcement($sentence){
  //nothing here yet...
  }

}

?>

