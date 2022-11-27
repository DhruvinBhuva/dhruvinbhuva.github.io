<?php
namespace WTS_EAE\Modules\ContentSwitcher\skins;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class Skin_2 extends Skin_Base {

	public function get_id() {
		return 'skin2';
	}

	public function get_title() {
		return __( 'Skin 2', 'wts-eae' );
	}

	public function render() {
		$settings = $this->parent->get_settings_for_display();

		$on_load_display = $settings['display_Section'];
		$content_len     = count( $settings['content_list'] );
		if ( $on_load_display <= $content_len ) {
			$active_sec_id = $on_load_display;
		} else {
			$active_sec_id = 1;
		}
		//Label Attribute
		$this->parent->add_render_attribute( 'switch-wrapper', 'class', 'eae-cs-label-wrapper' );

		//Label Section Attribute
		$this->parent->add_render_attribute( 'switch-wrapper', 'class', 'eae-cs-label-wrapper' );
		$this->parent->add_render_attribute( 'switch-label', 'class', 'eae-content-switch-label' );

		//Content Section Attribute
		$this->parent->add_render_attribute( 'switch-content', 'class', 'eae-cs-content-section' );
		?>
		<div class="eae-content-switcher-wrapper eae-cs-layout-<?php echo $settings['_skin']; ?>" data-style="<?php echo $settings['_skin']; ?>">
			<!--Header Secion Start-->
			<?php
			$this->render_header_button_skin( $settings, $active_sec_id );
			?>
			<!--Header Secion End-->
			<?php
			//Call Content Section from SKin Base Class
			$this->render_content( $settings, $active_sec_id );
			?>
		</div>
		<?php
	}
}
