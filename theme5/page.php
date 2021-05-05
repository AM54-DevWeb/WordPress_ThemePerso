<?php get_header(); ?>
<h2><em>Ma page d'accueil</em></h2>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<?php the_title(); ?>
    
    	<?php the_content(); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
