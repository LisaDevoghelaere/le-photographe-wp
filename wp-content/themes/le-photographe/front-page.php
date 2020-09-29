<?php get_header(); ?>
<section id="hero-accueil">
    <div class="container" class="hero">
        <img class="hero-img" src="<?php echo get_template_directory_uri(); ?>/img/header1.jpg" alt="image du header">
            <div class="titre-hero">
                <h1><?php echo get_bloginfo( 'name' ); ?></h1>
                <p><span><?php echo get_bloginfo( 'description' ); ?></span></p>
            </div>
    </div>
</section>

<section id="bienvenue" class="container">
   <div>
       <img src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg"" alt="avatar du photographe" id="avatar">
   </div>
   <div>
       <h2>Hello</h2>
       <p>Cupcake ipsum dolor sit amet wafer sesame snaps gummi bears. Jelly-o wafer donut. Donut carrot cake lollipop jelly-o donut tart. Gingerbread muffin gummi bears macaroon tart croissant. Chocolate bar cake caramels halvah chocolate cake liquorice halvah jelly-o chocolate bar. Liquorice chocolate lollipop sesame snaps apple pie muffin.</p>
   </div>
</section>
<section id="actus" class="container">
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
                    par <?php the_author(); ?> • <?php echo get_comments_number(); ?>
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
            $littlePosts->query(array(
                'showposts' =>  3,
                'post_type' => 'post',
                'order_by' => 'date',
                'order' => 'DESC',
                'post_per_page'=>3,
                'offset'=>2)
            );
        ?>
        <?php while ($littlePosts->have_posts()) : $littlePosts->the_post(); ?>
            <div>
                <p><?php the_post_thumbnail(); ?></p> 
                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3> 
                <p class="post__meta">
                    Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                    par <?php the_author(); ?> • <?php echo get_comments_number(); ?>
                    <?php the_excerpt(); ?> 
                    <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
                </p>
            </div>
        <?php endwhile; ?>
    </div>
</section>
<?php get_footer();