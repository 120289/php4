<?php

  namespace views;

  class homeview extends \mvc\View {

    public function getHTML() {
      $output = "<h1>PHP-4</h1>";
      $output .= "<h2>Home Page</h2>";
      return $output;
    }

  }

?>
