<?php
/* 
Template Name: Archives
*/
?>
<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


    <!--<article class="post">
        <h2><?php // the_title(); ?></h2>
  
        <?php //the_post_thumbnail(); ?>
        
        <p class="post__meta">
            Publié le <?php //the_time( get_option( 'date_format' ) ); ?> 
            par <?php// the_author(); ?> • <?php //comments_number(); ?>
        </p>
        
          <?php //the_excerpt(); ?>
          
          <p>
            <a href="<?php //the_permalink(); ?>" class="post__link">Lire la suite</a>
        </p>
    </article>-->
    
<div class="col-sm-4">
    <div class="post card" style="width: 18rem;">
        <img src="<?php the_post_thumbnail(); ?>" class="card-img-top" alt="photo article">
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <h6 class="post__meta card-subtitle mb-2 text-muted">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> • 
                par <?php the_author(); ?> 
            </h6>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a>
        </div>
    </div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
