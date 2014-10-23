<?php
if (!function_exists('FoundationPress_title_tag')) :
	function FoundationPress_title_tag() {
		if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		}
	}
endif;

if (!function_exists('FoundationPress_icon_links')) :
	function FoundationPress_icon_links() {
		$directory = get_stylesheet_directory_uri() . "/assets/img/icons/";
		$icon_sizes = array(
				'large'		=>	'144x144',
				'medium'	=>	'114x114',
				'small'		=>	'72x72',
				'none'		=>	''
			);
		echo '<link rel="icon" href="' . $directory . 'favicon.ico" type="image/x-icon">';
		foreach ($icon_sizes as $size) {
			$link = '<link rel="apple-touch-icon-precomposed" sizes="' . $size;
			$link .= '" href="' . $directory . 'apple-touch-icon-' . $size;
			if ($size == '') {
				$link .= 'precomposed.png">';
			} else {
				$link .= '-precomposed.png">';
			}
			echo $link;
		}
	}
endif;
?>
