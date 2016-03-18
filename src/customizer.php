<?php
/**
 */
namespace EmojiconPlugin;

class Customizer {


	public function init() {
		add_action( 'customize_register', [ $this, 'register' ] );
	}

	/**
	 * @param $wp_customize
	 */
	public function register( $wp_customize ) {

		$wp_customize->add_setting( 'emojicon_replacements', array(
			'sanitize_callback' => [ $this, 'sanitize_input' ],
		) );


		$textarea = new Textarea_Control( $wp_customize, 'emojicon_plugin_control', array(
			'label'    => __( "Emojicon Replacements\n\n 😙 😚 😜 😝 😛 🤑 🤓 😎", 'emojiconplugin' ),
			'section'  => 'emojicon_plugin',
			'settings' => 'emojicon_replacements',
		) );

		$wp_customize->add_control( $textarea );

		$wp_customize->add_setting( 'emojicon_replace_type', array(
			'default'    => 'replace',
			'capability' => 'edit_theme_options',
			'type'       => 'theme_mod',

		) );
		$wp_customize->add_control( 'emojicon_replace', array(
			'settings' => 'emojicon_replace_type',
			'label'    => 'What kind of replacement?',
			'section'  => 'emojicon_plugin',
			'type'     => 'select',
			'choices'  => array(
				'replace' => 'Replace',
				'before'  => 'Before',
				'after'   => 'After',
			),
		) );

		$wp_customize->add_section( 'emojicon_plugin', array(
			'title' => __( 'Emojicon Plugin', 'emojiconplugin' ),
		) );
	}

	public function sanitize_input( $value ) {
		return sanitize_text_field($value);
	}
}
