<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mogo
 */

get_header();
?>

<main>

	<?php if (have_rows("content")) :
		while (have_rows("content")) : the_row();
			if ($layout = get_row_layout()) {
				get_template_part("sections/section", $layout);
			}
		endwhile;
	endif; ?>

</main>



<?php
get_footer();
