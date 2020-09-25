<?php get_header(); ?>
	<div class="last-one-article">
    <?php
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=1');
    ?>
    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
        <div>
            <p><?php the_post_thumbnail(); ?></p> 
            <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3> 
            <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> • <?php comments_number(); ?>
                <?php the_excerpt(); ?> 
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
        </div>
    <?php endwhile; ?>
</div>
<div class="little-post">
    <?php
        $littlePosts = new WP_Query(
            );
        $littlePosts->query('showposts=3',(array(
            'post_type' => 'post',
            'order_by' => 'date',
            'order' => 'DESC',
            'post_per_page'=>3,
            'offset'=>2)
        ));
    ?>
    <?php while ($littlePosts->have_posts()) : $littlePosts->the_post(); ?>
        <div>
            <p><?php the_post_thumbnail(); ?></p> 
            <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3> 
            <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> • <?php comments_number(); ?>
                <?php the_excerpt(); ?> 
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
        </div>
    <?php endwhile; ?>
</div>
<?php get_footer();