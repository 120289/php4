<?php

  namespace views;

  class secondview extends \mvc\View {
    public function getHTML() {
      $output = "<h1>Second view</h1>";
      return $output;
    }
  }

?>
