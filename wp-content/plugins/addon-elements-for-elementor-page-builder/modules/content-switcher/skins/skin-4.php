<?php
namespace WTS_EAE\Modules\ContentSwitcher\skins;

use Elementor\Icons_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class Skin_4 extends Skin_Base {

	public function get_id() {
		return 'skin4';
	}

	public function get_title() {
		return __( 'Skin 3', 'wts-eae' );
	}


	public function render() {
		// TODO: Implement render() method.
		$settings    = $this->parent->get_settings_for_display();
		$add_checked = '';
		$active_sec  = $this->get_active_section( $settings['content_list'] );
		if ( empty( $active_sec ) ) {
			$active_sec['section_id'] = $settings['content_list'][0]['_id'];
			$active_sec['index_no']   = 0;
		}
		if ( $active_sec['index_no'] >= 1 ) {
			$active_sec['index_no'] = 1;
			$add_checked            = 'checked';
		}
		?>
		<div class="eae-content-switcher-wrapper eae-cs-layout-<?php echo $settings['_skin']; ?>" data-style="<?php echo $settings['_skin']; ?>">
			<div class="eae-cs-switch-container">
				<div class="eae-cs-switch-wrapper">
					<div class="eae-content-switch-label primary-label eae-cs-icon-align-<?php echo $settings['content_list'][0]['icon_align']; ?> <?php
					if ( $active_sec['index_no'] === 0 ) {
						echo 'active';}
					?>
					" item_id="<?php echo $settings['content_list'][0]['_id']; ?>">
						<?php
						if ( ! empty( $settings['content_list'][0]['icon'] ) && $settings['content_list'][0]['icon_align'] === 'left' ) {
							Icons_Manager::render_icon( $settings['content_list'][0]['icon'], [ 'aria-hidden' => 'true' ] );
						}
						?>
						<h5 class="eae-cs-label"> <?php echo $settings['content_list'][0]['title']; ?></h5>
						<?php
						if ( ! empty( $settings['content_list'][0]['icon'] ) && $settings['content_list'][0]['icon_align'] === 'right' ) {
							Icons_Manager::render_icon( $settings['content_list'][0]['icon'], [ 'aria-hidden' => 'true' ] );
						}
						?>
					</div>
					<div class="eae-cs-switch-button">
						<label class="eae-cs-switch-label">
							<input class="eae-content-toggle-switch" type="checkbox" <?php echo $add_checked; ?>>
							<span class="eae-content-toggle-switcher"></span>
						</label>
					</div>
					<div class="eae-content-switch-label secondary-label eae-cs-icon-align-<?php echo $settings['content_list'][1]['icon_align']; ?> <?php
					if ( $active_sec['index_no'] === 1 ) {
						echo 'active';}
					?>
					"item_id="<?php echo $settings['content_list'][1]['_id']; ?>">
						<?php
						if ( ! empty( $settings['content_list'][1]['icon'] ) && $settings['content_list'][1]['icon_align'] === 'left' ) {
							Icons_Manager::render_icon( $settings['content_list'][1]['icon'], [ 'aria-hidden' => 'true' ] );
						}
						?>
						<h5 class="eae-cs-label"><?php echo $settings['content_list'][1]['title']; ?> </h5>
						<?php
						if ( ! empty( $settings['content_list'][1]['icon'] ) && $settings['content_list'][1]['icon_align'] === 'right' ) {
							Icons_Manager::render_icon( $settings['content_list'][1]['icon'], [ 'aria-hidden' => 'true' ] );
						}
						?>
					</div>
				</div>
			</div>

			<?php
			//Call Content Section from SKin Base Class
			$this->render_content( $settings );
			?>
		</div>
		<?php
	}
}
