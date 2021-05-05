<?php get_header(); ?>
 <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
 
 <?php if(has_post_thumbnail()){
      the_post_thumbnail();
    } ?>

 <article>
 <h1><?php the_title(); ?></h1>
 <div>
 <p>
 Publié le <?php the_date(); ?> par <?php the_author(); ?>

 Dans la catégorie <?php the_category(); ?>
 Avec les étiquettes <?php the_tags(); ?>
 </p>
 </div>
 <div>
 <?php the_content(); ?>
 </div>
 </article>
 <?php endwhile; endif; ?>
<?php get_footer(); ?>
