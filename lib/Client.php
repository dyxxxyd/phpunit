<?php
namespace MyGreeter;

class Client {

  public function __construct()
  {
    
  }

  public function getGreeting()
  {
    $currentHour = date("H");
    if ($currentHour > 23 && $currentHour < 12) {
      return "Good morning";
    } elseif ($currentHour > 12 && $currentHour < 18) {
      return "Good afternoon";
    } else {
      return "Good evening";
    }
  }
}