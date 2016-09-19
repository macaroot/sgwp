<?php

get_header();

$the_query = new WP_Query( array( 'category_name' => 'uncategorized' ));

if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts()) : $the_query->the_post(); ?>

    <article class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
    </article>

<?php endwhile;

else :
    echo ' <p>No content found</p> ';

endif;

get_footer();

?>
