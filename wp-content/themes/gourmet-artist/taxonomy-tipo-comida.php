<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GourmetArtist
 */

get_header(); ?>

	<div id="primary" class="content-area medium-8 columns">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
                <div class="header-taxonomia-comida">
				<?php
                    $termino_actual = get_queried_object(  );
                    $taxonomia = get_taxonomy( $termino_actual->taxonomy );
                    echo "<h1 class='page-tittle text-center'>" . $termino_actual->name . "</h1>";
				?>
                </div>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
