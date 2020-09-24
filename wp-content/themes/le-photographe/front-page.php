<?php get_header(); ?>
	
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        
        <div class="post__meta">
            <h2><?php the_title(); ?></h2>
            
            <?php the_post_thumbnail(); ?>
            
            <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?>
            </p>
            <p>
                <?php the_excerpt(); ?>
            </p>    
            <p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
            
        </div>
        <div> 
            <?php $query = new WP_Query( 
                array(
                    'post_type'=>'post',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post-per-page' => 3,
                    'offset' => 2
                    )
                    
                );
            ?>
        </div>
    <?php endwhile; endif;?>
<?php get_footer(); 