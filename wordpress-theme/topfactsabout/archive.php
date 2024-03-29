<?php
get_header();
?>
		<main class="main container">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>
			<ul class="main__posts">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content');
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
		</ul>
		</main>
<?php
get_sidebar();
get_footer();
