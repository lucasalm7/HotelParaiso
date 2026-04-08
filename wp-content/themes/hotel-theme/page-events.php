<?php get_header() ?>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            
        <div class="events-header">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/lobby.png' ); ?>" alt="hotel lobby">
        </div>
        <div class="events-section">
            <h2>Upcoming Events</h2>
            <div class="event-card-grid">
                <?php get_template_part("template-parts/events", "list") ?>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer() ?>