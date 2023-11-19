<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package final_groupwork
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- font links -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- End of font links -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'final-groupwork' ); ?></a>

	<header id="masthead" class="site-header groupwork-header <?php echo is_user_logged_in() ? 'logged-in' : ''?>">
		<div class="container">
			<div class="header-content">
				<div class="site-branding">
					<?php
					the_custom_logo();
					?>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation groupwork-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'final-groupwork' ); ?></button>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'header menu'
							)
						);
    				?>
				</nav><!-- #site-navigation -->
				<div class="menu-icons">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/clarity_favorite-line.png'?>" alt="favorite-icon">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/healthicons_ui-user-profile-outline.png'?>" alt="user-profile-icon">
            	</div>
			</div>
		</div>
	</header><!-- #masthead -->
