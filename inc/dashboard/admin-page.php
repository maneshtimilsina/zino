<?php
/**
 * Admin page for Zino theme.
 *
 * @package Zino
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

add_action( 'admin_menu', function() {
	add_theme_page(
		'Zino',
		'About Zino',
		'manage_options',
		'zino',
		'zino_admin_page'
	);
} );

add_action( 'admin_enqueue_scripts', function() {
	if ( ! isset( $_GET['page'] ) || 'zino' !== sanitize_text_field( wp_unslash( $_GET['page'] ) ) ) {
		return;
	}

	wp_enqueue_style( 'zino-admin-page', ZINO_URI . '/inc/dashboard/css/admin-page.css', array(), ZINO_VERSION );
} );

function zino_admin_page() {
	$demo_url    = 'https://demo.zinowp.com/zino/';
	$support_url = 'https://wordpress.org/support/theme/zino/';
	?>
	<div class="wrap zwp-wrap">
		<div class="zwp-header">
			<h1 class="zwp-brand">Zino <small>(<?php echo esc_html( ZINO_VERSION ); ?>)</small></h1>

			<div class="zwp-header-links">
				<a href="<?php echo esc_url( $demo_url ); ?>" target="_blank" rel="noopener">
					<span class="zwp-icon"><svg viewBox="0 0 24 24"><path d="M14 3h7v7"/><path d="M10 14 21 3"/><path d="M21 14v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h6"/></svg></span>
					View Demo
				</a>
				<a href="<?php echo esc_url( $support_url ); ?>" target="_blank" rel="noopener">
					<span class="zwp-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/><path d="M12 3v6M21 12h-6M12 21v-6M3 12h6"/></svg></span>
					Support
				</a>
			</div>
		</div>

		<div class="zwp-main">
			<div class="zwp-main-inner">
				<div class="zwp-cards">
					<a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" class="zwp-card">
						<div class="zwp-card-icon zwp-purple">
							<svg viewBox="0 0 24 24"><path d="m14 6 4 4"/><path d="M5 19l1-4L15.5 5.5a2.1 2.1 0 0 1 3 3L9 18z"/><path d="M12 20h7"/></svg>
						</div>
						<div class="zwp-card-content">
							<h3>Site Editor</h3>
							<p>Customize colors, typography, layouts, templates, and more.</p>
						</div>
						<div class="zwp-arrow">→</div>
					</a>

					<a href="<?php echo esc_url( $support_url ); ?>" class="zwp-card" target="_blank" rel="noopener">
						<div class="zwp-card-icon zwp-green">
							<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/><path d="M12 3v6M21 12h-6M12 21v-6M3 12h6"/></svg>
						</div>
						<div class="zwp-card-content">
							<h3>Need Help?</h3>
							<p>Have support questions or found a bug? Feel free to open a ticket on the WordPress.org support forum.</p>
						</div>
						<div class="zwp-arrow">→</div>
					</a>

					<a href="<?php echo esc_url( $support_url ); ?>" class="zwp-card" target="_blank" rel="noopener">
						<div class="zwp-card-icon zwp-yellow">
							<svg viewBox="0 0 24 24"><path d="m12 3 2.8 5.7L21 9.6l-4.5 4.4 1.1 6.2-5.6-3-5.6 3 1.1-6.2L3 9.6l6.2-.9Z"/></svg>
						</div>
						<div class="zwp-card-content">
							<h3 class="zwp-stars">★★★★★</h3>
							<p>Please consider sharing your feedback with the community.</p>
						</div>
						<div class="zwp-arrow">→</div>
					</a>
				</div>

				<div class="zwp-sidebar">
					<div class="zwp-extensions">
						<h3 class="zwp-extensions-title">Recommended Plugins</h3>

						<a href="https://zinowp.com/wordpress-plugins/zino-frequently-bought-together/" class="zwp-extension" target="_blank" rel="noopener">
							<img src="<?php echo esc_url( get_theme_file_uri( 'inc/dashboard/images/zfbt.webp' ) ); ?>" alt="Zino Frequently Bought Together" />
							<div class="zwp-extension-content">
								<h3>Zino Frequently Bought Together</h3>
								<p>Increase sales by showing products frequently bought together and letting customers add them all to their cart with a single click.</p>
							</div>

							<div class="zwp-read-more">
								<span class="zwp-icon"><svg viewBox="0 0 24 24"><path d="M14 3h7v7"/><path d="M10 14 21 3"/><path d="M21 14v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h6"/></svg></span>
								Read More
							</div>
						</a>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
