<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php FoundationPress_title_tag(); ?></title>

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/app.css" />

		<?php FoundationPress_icon_links(); ?>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action('foundationPress_after_body'); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">

	<?php do_action('foundationPress_layout_start'); ?>

	<?php get_template_part('parts/tab-bar'); ?>

	<?php get_template_part('parts/off-canvas-menu'); ?>

	<?php get_template_part('parts/top-bar'); ?>

<section class="container" role="document">
	<?php do_action('foundationPress_after_header'); ?>