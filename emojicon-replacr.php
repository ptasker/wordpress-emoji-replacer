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
require_once __DIR__ . '/vendor/autoload.php';

use EmojiconPlugin\Emojis;

$EmojiconPlugin = new Emojis;
$EmojiconPlugin->init();
