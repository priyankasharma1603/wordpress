<?php
/**
 * Add Theme info Page
 */

function smarttrack_fse_menu() {
	add_theme_page( esc_html__( 'SmartTrack FSE', 'smarttrack-fse' ), esc_html__( 'About SmartTrack FSE', 'smarttrack-fse' ), 'edit_theme_options', 'about-smarttrack-fse', 'smarttrack_fse_theme_page_display' );
}
add_action( 'admin_menu', 'smarttrack_fse_menu' );

function smarttrack_fse_admin_theme_style() {
	wp_enqueue_style('smarttrack-fse-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'smarttrack_fse_admin_theme_style');

/**
 * Display About page
 */
function smarttrack_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'smarttrack-fse' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'The SmartTrack FSE is free cargo company WordPress theme for shipping businesses, couriers companies, postal services, cargo, transport agencies, and similar businesses. ', 'smarttrack-fse' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'smarttrack-fse' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'smarttrack-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'smarttrack-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'smarttrack-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'smarttrack-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'smarttrack-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'smarttrack-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'smarttrack-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'smarttrack-fse' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get SmartTrack PRO', 'smarttrack-fse' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'smarttrack-fse' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/shipment-tracking-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'smarttrack-fse' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'smarttrack-fse' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/smarttrack/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'smarttrack-fse' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/documentation/smarttrack/#homepage-lite' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'smarttrack-fse' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'smarttrack-fse' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'smarttrack-fse' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with SmartTrack FSE, please give your feedback.', 'smarttrack-fse' ); ?></p>
							<a href="https://wordpress.org/support/theme/smarttrack-fse/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'smarttrack-fse' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>