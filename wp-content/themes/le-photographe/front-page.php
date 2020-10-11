<?php get_header(); ?>
<!-- *****************************HERO*************************** -->
<section id="hero-accueil">
    <div class="row hero">
        <img class="hero-img" src="<?php echo get_template_directory_uri(); ?>/img/header1.jpg" alt="image du header" class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="titre-hero col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="titre-hero-flex">
                <h1><?php echo get_bloginfo( 'name' ); ?></h1>
                <div class="ligne"></div>
                <p><?php echo get_bloginfo( 'description' ); ?></p>
            </di>
        </div>
    </div>
</section>

<!-- *****************************Message bienvenue*************************** -->

<section id="bienvenue" class="container">
   <div class="row ph-margin-top">
       <div class="col-lg-6 col-md-6 col-sm-6 col-12">
           <p><img src="<?php echo get_template_directory_uri(); ?>/img/avatar.jpg"" alt="avatar du photographe" id="avatar" class="col-12"></p>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-6 col-12">
           <h2>Hello</h2>
           <p>Cupcake ipsum dolor sit amet wafer sesame snaps gummi bears. Jelly-o wafer donut. Donut carrot cake lollipop jelly-o donut tart. Gingerbread muffin gummi bears macaroon tart croissant. Chocolate bar cake caramels halvah chocolate cake liquorice halvah jelly-o chocolate bar. Liquorice chocolate lollipop sesame snaps apple pie muffin.</p>
       </div>
   </div>
</section>
<!-- *****************************Services*************************** -->
<section id="services" class="container">
    <h2 class="titre-h2-front-page">Services</h2>
    <div class="row">
    <a href="<?php echo get_template_directory_uri(); ?>/mariage" class="a-block col-3" id="service-mariage"><div><p class="center col-12">Mariage</p></div></a>
    <a href="<?php echo get_template_directory_uri(); ?>/evenement" class="a-block col-3"><div><p class="center col-12">Évènement</p></div></a>
    <a  href="<?php echo get_template_directory_uri(); ?>/immobillier" class="a-block col-3"><div><p class="center col-12">Immobillier</p></div></a>
    <a  href="<?php echo get_template_directory_uri(); ?>/portrait" class="a-block col-3"><div><p class="center col-12">Portrait</p></div></a>
    </div>

</section> 
<!-- *****************************Derniers Articles*************************** -->
<section id="actus" class="container">
<h2 class="titre-h2-front-page">Derniers Articles</h2>

    <div class="row">
        <div id="last-one-article" class="col-lg-6 col-md-6 col-sm-6 col-12">
            <?php
                $recentPosts = new WP_Query();
                $recentPosts->query('showposts=1');
            ?>
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                <div>
                    <?php the_post_thumbnail('medium', ['class' => 'col-12', 'alt'=>'', 'style' => 'height : auto;']); ?> 
                    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3> 
                    <p class="post__meta">
                        Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                        par <?php the_author(); ?> • <?php the_terms(get_the_ID(), 'service') ?> • <?php echo get_comments_number(); ?>
                        <?php the_excerpt(); ?> 
                        <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
                    </p>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="little-post col-lg-6 col-md-6 col-sm-6 col-12"">
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
                <div class="col-12">
                    <div class="row ph-margin-bottom">
                        <div class="col-6">
                            <?php the_post_thumbnail('medium', ['class' => 'col-12', 'alt'=>'', 'style' => 'height : auto;']); ?> 
                        </div>
                        <div class="col-6">
                            <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3> 
                            <p class="post__meta">
                                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                                par <?php the_author(); ?> • <?php echo get_comments_number(); ?>
                                •
                                <a href="<?php the_permalink(); ?>" class="post__link">Lire l'article</a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- *****************************Galerie*************************** -->
<section id="galerie" class="container">
    <h2 class="titre-h2-front-page">Galerie</h2>
    <div class="row">
    <?php echo do_shortcode('[modula id="195"]'); ?>
    </div>
<?php get_footer();