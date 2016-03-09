<?php
/**
 * Created by PhpStorm.
 * User: petertasker
 * Date: 2016-02-18
 * Time: 4:02 PM
 */

namespace EmojiconPlugin;

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return NULL;
}

class Textarea_Control extends \WP_Customize_Control {

	public $type = 'textarea';

	public function render_content() {
		?>
		<label>
			<span
				class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea rows="15"
			          style="" <?php $this->link(); ?>><?php echo wp_kses( $this->value(), [ ] ); ?></textarea>
		</label>
		<?php
	}
}
