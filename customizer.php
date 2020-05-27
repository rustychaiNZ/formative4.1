<?php
//Hook1: customize-register to define new Cutomizer panels, settings, controls
function mytheme_customize_register( $wp_customize ){
	//All our sections, settings, and controls will be added here

	// --- Content Controller --- //
	// Footer Title, sets the echo value
	$wp_customize->add_section('footer_section', array(
		// Gives the variable a name
		'title' => __('Footer Conetent', 'smokeFreeTheme'),
		// Where the option to edit appears
		'priority' => 30,
	));

	// Settings for the footer title
	$wp_customize->add_setting('footer_navHeading', array(
		// Default value for footer heading
		'default' => 'Latest',
		'transport' => 'refresh',
	));
	// Ui for content manager
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_NavHeadingControl', array(
		'lable' => __('Footer Nav Heading', 'smokeFreeTheme'),
		'description' => 'Controls footer nav heading',
		'section' => 'footer_section',
		'settings' => 'footer_navHeading',
	)));
	// Social media title
	$wp_customize->add_setting('footer_socialMedia', array(
		'default' => 'Check Us Out On',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_socialMediaContainerControl', array(
		'lable' => __('Social media links title', 'smokeFreeTheme'),
		'description' => 'Contorls the heading for the social media area of the footer',
		'section' => 'footer_section',
		'settings' => 'footer_socialMedia'
	)));
	// Copyright holder
	$wp_customize->add_setting('footer_copyrightContainer', array(
		'default' => '© 2010 Nurses for Smokefree Aotearoa. All rights reserved.',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_copyrightContainerControl', array(
		'lable' => __('Footer copyright container', 'smokeFreeTheme'),
		'description' => 'Controls footer copyright container',
		'section' => 'footer_section',
		'settings' => 'footer_copyrightContainer',
	)));


	// Featured homepage image
	$wp_customize->add_setting('banner_imageSetting', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_imageControl', array(
		'label' => __('Front page banner image', 'smokeFreeTheme'),
		'section' => 'banner_image',
		'settings' => 'banner_imageSetting',
	)));
	// --- Content controller end --- //

	// --- Colour Control --- //
	// Top bar nav
	$wp_customize->add_setting('topNav_backgroundColor', array(
		'default' => '#18393d',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'topNav_backgroundColorControl', array(
		'label' => __('Top nav background colour', 'smokeFreeTheme'),
		'description' => 'Changes the background colour of the navigation bar',
		'section' => 'colors',
		'settings' => 'topNav_backgroundColor'
	)));
	// Top bar nav link colours
	$wp_customize->add_setting('topNav_linkColor', array(
		'default' => '#ffffff',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'topNav_linkColorControl', array(
		'label' => __('Top nav link colour', 'smokeFreeTheme'),
		'description' => 'Changes the link colour of the top navigation bar',
		'section' => 'colors',
		'settings' => 'topNav_linkColor',
	)));
	// top bar nav link colours hover
	$wp_customize->add_setting('topNav_linkColorHover', array(
		'default' => '#a72a02',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'topNav_linkColorHoverControl', array(
		'label' => __('Top nav link hover', 'smokeFreeTheme'),
		'description' => 'Changes the link hover colour of the top navigation bar',
		'section' => 'colors',
		'settings' => 'topNav_linkColorHover',
	)));
	// top bar nav link colour active
	$wp_customize->add_setting('topNav_linkColorActive', array(
		'default' => 'black',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'topNav_linkColorActiveControl', array(
		'label' => __('Top nav link active', 'smokeFreeTheme'),
		'description' => 'Changes the link active colour of the top navigation bar',
		'section' => 'colors',
		'settings' => 'topNav_linkColorActive',
	)));

	// link colour
	$wp_customize->add_setting('general_linkColor', array(
		'default' => '#d62655',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'general_linkColorControl', array(
		'label' => __('Link colour', 'smokeFreeTheme'),
		'description' => 'Changes the colour of links on the page',
		'section' => 'colors',
		'settings' => 'general_linkColor',
	)));

	// Table colour
	$wp_customize->add_setting('table_backgroundColor', array(
		'default' => '#ededed',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'table_backgroundColorControl', array(
		'label' => __('Table colour', 'smokeFreeTheme'),
		'description' => 'Changes colour of the tables background',
		'section' => 'colors',
		'settings' => 'table_backgroundColor'
	)));
	// Table header colour
	$wp_customize->add_setting('table_headerColor', array(
		'default' => '#1f1f1f',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'table_headerColorControl', array(
		'label' => __('Table background header colour', 'smokeFreeTheme'),
		'description' => 'Changes colour of the tables header background',
		'section' => 'colors',
		'settings' => 'table_headerColor'
	)));
	// Table stripe colour
	$wp_customize->add_setting('table_stripeColor', array(
		'default' => '#808080',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'table_stripeColorControl', array(
		'label' => __('Table background stripe colour', 'smokeFreeTheme'),
		'description' => 'Changes colour of the tables stripe background',
		'section' => 'colors',
		'settings' => 'table_stripeColor'
	)));

	// - Footer colour controls -
	// Footer background colour controls
	$wp_customize->add_setting('footer_backgroundColor', array(
		'default' => '#333',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_backgroundColorControl', array(
		'label' => __('Footer background colour', 'smokeFreeTheme'),
		'description' => 'Change the background colour of the footer',
		'section' => 'colors',
		'settings' => 'footer_backgroundColor',
	)));
	// Footer title colour controls
	$wp_customize->add_setting('footer_headingColor', array(
		'default' => '#ffffff',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_headingColorControl', array(
		'label' => __('Footer heading colour', 'smokeFreeTheme'),
		'description' => 'Change the heading colour of the footer headings',
		'section' => 'colors',
		'settings' => 'footer_headingColor',
	)));
	// Footer Nav link colour controls
	$wp_customize->add_setting('footer_navLinkColor', array(
		'default' => '#d62655',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_navLinkColorControl', array(
		'label' => __('Footer Navigation Link Colours', 'smokeFreeTheme'),
		'description' => 'Changes the colour of the links for site updates in the footer',
		'section' => 'colors',
		'settings' => 'footer_navLinkColor',
	)));
	// Social media icon colour controls
	$wp_customize->add_setting('footer_socialMediaLinkColor', array(
		'default' => '#d62655',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_socialMediaLinkColorControl', array(
		'label' => __('Social media links colours', 'smokeFreeTheme'),
		'description' => 'Changes the colour of the links for the sites social media links',
		'section' => 'colors',
		'settings' => 'footer_socialMediaLinkColor',
	)));
	// --- Colour control ends --- //
}
add_action('customize_register', 'mytheme_customize_register');

//Hook2: wp_head to output custom-generated CSS
function mytheme_customize_css(){
?>
<style type="text/css">
	/* --- Universal controls --- */
	a{
		color: <?php echo get_theme_mod('general_linkColor', '#d62655') ?>;
	}
	/* --- Footer controls --- */
	.footer-heading-color{
		color: <?php echo get_theme_mod('footer_headingColor', '#ffffff') ?>;
	}
	.gradient-footer{
		background-color: <?php echo get_theme_mod('footer_backgroundColor', '#333'); ?>!important;
	}
	.bottom-list .menu-item a{
		color: <?php echo get_theme_mod('footer_navLinkColor', '#d62655'); ?>!important;
	}
	/* Social media links */
	.social-list a{
		color: <?php echo get_theme_mod('footer_socialMediaLinkColor', '#d62655') ?> !important;
	}
	/* --- Top bar controls --- */
	.top-bar{
		background-color: <?php echo get_theme_mod('topNav_backgroundColor', '#18393d'); ?>!important;
	}
	.dropdown-menu{
		background-color: <?php echo get_theme_mod('topNav_backgroundColor', '#18393d'); ?>!important;
	}
	.top-bar a{
		color: <?php echo get_theme_mod('topNav_linkColor', '#ffffff') ?>!important;
	}
	.top-bar a:hover{
		color: <?php echo get_theme_mod('topNav_linkColorHover', '#a72a02') ?> !important;
	}
	.current-menu-item a{
		color: <?php echo get_theme_mod('topNav_linkColorActive', 'black') ?> !important;
	}
	/* --- Table Colours ---*/
	table{
		background-color: <?php echo get_theme_mod('table_backgroundColor', '#ededed') ?>;
	}
	table th{
		background-color: <?php echo get_theme_mod('table_headerColor', '#1f1f1f') ?>;
	}
	table tr:nth-child(even){
		background-color: <?php echo get_theme_mod('table_stripeColor', '#808080') ?>;
	}
</style>
<?php
}
add_action('wp_head', 'mytheme_customize_css');
