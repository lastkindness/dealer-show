<?php get_header(); ?>
	<section id="content">
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <div class="title">
                    <h1><?php printf( __( 'Search Results for: %s', 'prime' ), '<span>' . get_search_query() . '</span>'); ?></h1>
                </div>
                <?php while ( have_posts() ) : the_post(); ?>
                    <!--				<?php //get_template_part( 'blocks/content', get_post_type() ); ?>-->
                    <div class="content">
                        <?php
                            the_title( '<h2>', '</h2>' );
                            the_excerpt();
                        ?>
                        <a href="<?php the_permalink(); ?>">Перейти</a>
                    </div>
                <?php endwhile; ?>
                <?php get_template_part( 'blocks/pager' ); ?>
            <?php else : ?>
                <?php get_template_part( 'blocks/not_found' ); ?>
            <?php endif; ?>
        </div>
	</section>
<?php get_footer(); ?>
