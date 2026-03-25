<?php
    $heroImage = get_field('hero_image');
?>

<img class="hero" src="<?php if ($heroImage) { echo $heroImage['url']; } ?>" alt="Hero Image">
