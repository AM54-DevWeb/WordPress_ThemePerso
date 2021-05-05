<?php get_header(); ?>
<h2><em>Ma page d'accueil</em></h2>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	
    <div class="articles">
        <?php the_title(); ?>
    
    	<?php the_post_thumbnail(); the_excerpt(); ?>
        Publié le <?php the_date(); ?> par <?php the_author(); ?>

        <div class="cat"><text class="category">Dans la catégorie <?php the_category(); ?></text></div>

        
        <a href="<?php the_permalink(); ?>">Lire l'article</a>
        <br>
        <?php comments_number(); ?>

        <div class="space"></div>
    </div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
