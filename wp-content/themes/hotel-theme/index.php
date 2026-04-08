<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">

<?php get_header() ?>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

            <div class="hero-image">
                <?php get_template_part("template-parts/index", "hero") ?>
            </div>
            <div class="hotel-description">
                <?php get_template_part("template-parts/index", "description") ?>
            </div>

            <div class="hotel-reviews">
                <?php get_template_part("template-parts/index", "reviews") ?>
            </div>

            <div class="hotel-contact">
                <?php get_template_part("template-parts/index", "contact") ?>
            </div>

            <div class="hotel-amenities">
                <?php get_template_part("template-parts/index", "amenities") ?>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer() ?>