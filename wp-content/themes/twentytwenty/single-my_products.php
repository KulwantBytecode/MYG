<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title" style="text-align: center !important;">', '</h1>' ); ?>
                </header><!-- .entry-header -->
              <?php  if ( has_post_thumbnail() && ! post_password_required() ) {

$featured_media_inner_classes = '';

// Make the featured media thinner on archive pages.
if ( ! is_singular() ) {
    $featured_media_inner_classes .= ' medium';
}
?>

<figure class="featured-media">

    <div class="featured-media-inner section-inner<?php echo $featured_media_inner_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">

        <?php
        the_post_thumbnail();

        $caption = get_the_post_thumbnail_caption();

        if ( $caption ) {
            ?>

            <figcaption class="wp-caption-text"><?php echo wp_kses_post( $caption ); ?></figcaption>

            <?php
        }
        ?>

    </div><!-- .featured-media-inner -->

</figure><!-- .featured-media -->

<?php
}?>
                <div class="entry-content">
                    <?php
                    the_content();
                    the_terms( get_the_ID(), 'product_category', 'Category: ', ', ' );
                    the_terms( get_the_ID(), 'product_tag', 'Tags: ', ', ' );
                    ?>
                </div><!-- .entry-content -->
            </article>

        <?php
        // End the loop.
        endwhile;
        ?>
    </main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
