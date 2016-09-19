    <footer class="site-footer">

        <?php
        $args = array(
            'theme_location' => 'footer'
        );
         ?>
        <!-- Creates ul>li nav menu -->
        <?php wp_nav_menu( $args ); ?>

        <p><?php bloginfo( 'name' ); ?> - &copy; <?php echo date( 'Y' ); ?></p>

    </footer>

</div><!-- /container -->

<!-- WordPress inserts default things e.g. for plugins -->
<?php wp_footer(); ?>
</body>
</html>
