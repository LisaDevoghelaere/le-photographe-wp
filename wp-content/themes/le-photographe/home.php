<?php get_header();?>
<section class="container" id="actu">
    <div class="actu-titre row">
        <h1><?php echo get_bloginfo( 'name' ); ?> • <?= wp_title(); ?></h1>
    </div>
     <div class="row">
         <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <div class="col-sm-4">
            <article class="post card" style="width: 18rem;">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt'=>'', 'style' => 'height : auto;']); ?>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <h6 class="post__meta card-subtitle mb-2 text-muted">
                        Publié le <?php the_time( get_option( 'date_format' ) ); ?> • Par <?php the_author(); ?> 
                    </h6>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary post__link">Lire la suite</a>
                </div>
            </article>
        </div>
        <?php endwhile; endif; ?>
     </div>
</section>
<?php get_footer(); ?> =>