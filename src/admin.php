<?php

namespace EmojiconPlugin;

class Admin {

  public function init(){

    add_filter( 'the_content', [$this,'emoji_me']);

  }

  public function emoji_me($content){

    $content = str_replace(" the ", "(╯°□°)╯︵ ┻━┻", $content);

    return $content;
  }



}
