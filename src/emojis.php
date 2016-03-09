<?php

namespace EmojiconPlugin;


class Emojis {

	function init() {
		$customizer = new Customizer;
		$customizer->init();
		add_filter( 'the_content', [ $this, 'emoji_me' ] );
	}

	public function emoji_me( $content ) {
		$content = $this->process_emojis( $content );
		return $content;
	}

	function process_emojis( $content ) {

		$replace_type = get_theme_mod('emojicon_replace_type');
		$emojis = get_theme_mod( "emojicon_replacements" );

		if ( ! empty( $emojis ) ) {
			//Explode on newlines
			$parts = explode( PHP_EOL, $emojis );

			if ( ! empty( $parts ) ) {

				foreach ( $parts as $part ) {

					$emoji_array = explode( ":==>", $part );

					if ( ! empty( $emoji_array ) ) {
						$clean = array_map( function ( $ele ) {
							return trim( $ele );
						}, $emoji_array );

						list( $term, $em ) = $clean;

						//Default straight up replacement
						$replacement = $em;

						switch($replace_type){
							case "before":
								$replacement = $em.'  $0';
								break;

							case "after":
								$replacement = '$0 '.$em;
								break;

						}
						$content = preg_replace( "/$term/", $replacement, $content);
					}
				}
			}
		}
		return $content;
	}

}
