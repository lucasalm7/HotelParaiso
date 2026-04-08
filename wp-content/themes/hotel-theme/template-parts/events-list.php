<?php
    $events = new WP_Query([
        "post_type" => "event",
        "posts_per_page" => -1,
        "orderby" => "date",
        "order" => "ASC",
        "meta_query" => [
            [
                "key" => "event_date",
                "value" => date("Y-m-d"),
                "compare" => ">="
            ]
        ]
    ]);
?>

<?php if ($events->have_posts()): ?>
       <?php while ($events->have_posts()): $events->the_post(); ?>

            <?php 
                $image = get_field("event_image");
                $title = get_field("event_title");
                $description = get_field("event_description");
                $time = get_field("event_time");
                $duration = get_field("event_duration");
                $price = get_field("event_price");
                $date = get_field("event_date");
            ?>

            <div class="event-card">
                <img src="<?php if ($image) { echo $image['url']; } ?>" alt="<?php echo $title; ?>">
                <div class="event-info">
                    <h3><?php echo $title; ?></h3>
                    <p><?php echo $description; ?></p>
                    <div class="event-info-details-grid">
                        <p><strong>Date:</strong> <?php echo date("F j, Y", strtotime($date)); ?></p>
                        <p><strong>Time:</strong> <?php echo $time; ?></p>
                        <p><strong>Duration:</strong> <?php echo $duration; ?> hours</p>
                        <p><strong>Price:</strong> <?php echo $price; ?></p>
                    </div>
                </div>
            </div>

       <?php endwhile; ?>
   <?php else: echo "<p>No upcoming events at the moment. Please check back later!</p>";?>
<?php endif; ?>