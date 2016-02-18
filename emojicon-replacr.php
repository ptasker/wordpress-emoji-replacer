<?php
/*
Plugin Name: Emojicon Replacr
Plugin URI: http://petetasker.com
Description: Replace keywords with Emojicons!
Author: Peter Tasker
Version: 0.1
Author URI: http://petetasker.com
*/
//Use the composer autoloader
require_once __DIR__ .'/vendor/autoload.php';


//@todo move somewhere else?
use EmojiconPlugin\Admin;

class Emojis{

  function init(){
      $admin = new Admin;
      $admin->init();
  }
}

$E = new Emojis;

$E->init();
