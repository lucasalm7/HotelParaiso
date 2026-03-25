<?php
    $reviews = get_field("review_section");
?>

<div class="review-section">
    <h2>What Our Guests Say</h2>
        <?php foreach($reviews as $review): ?>
        <div class="review-grid">
            <p class="reviews-text"><?php echo $review["review_text"]; ?></p>
            <p class="review_author"><?php echo $review["review_author"]; ?></p>
            <p class="review_background"><?php echo $review["review_background"]; ?></p>
        </div>
        <?php endforeach; ?>
</div>