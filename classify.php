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

class classify {
  public $sentence;
  public $result = array();

  function __construct($sentence) {
    $this->sentence = $sentence;
    $this->check_reminder($sentence);
    $this->check_sports($sentence);
    $this->check_academics($sentence);
    $this->check_exam($sentence);
    $this->check_fee($sentence);
    $this->check_hostel($sentence);
    $this->check_lecture($sentence);
    $this->check_art($sentence);
    $this->check_missing($sentence);
    $this->check_announcement($sentence);
  }

  public function check_reminder($sentence) {
    $split_sentence = preg_split("<[^<>@]*>",$sentence);
    for($x = 0; $x < sizeof($split_sentence); $x++) {
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

