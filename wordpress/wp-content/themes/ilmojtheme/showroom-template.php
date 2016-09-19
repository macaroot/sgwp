<?php

/*
Template Name: Showroom Layout
*/

get_header();

$the_query = new WP_Query( array( 'category_name' => 'showroom' ));

if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts()) : $the_query->the_post(); ?>

    <article class="post showroom">
        <?php the_content(); ?>
    </article>

<?php endwhile;

else :
    echo ' <p>No content found</p> ';

endif;

get_footer();

?>
