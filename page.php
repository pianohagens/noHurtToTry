<?php get_header(); ?>
<!-- Begin Content -->
	 
    <div id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>

    <h2><?php the_title(); // get the page or posting title ?></h2> 

    <?php the_content(''); // get page or posting written content ?>

    <?php endwhile; endif; // end the loop ?>
    </div>
	
<!-- End Content -->
<?php 
    if (!(is_page('contact'))) {
        get_sidebar();
    }
?> 
<?php get_footer(); ?>


   