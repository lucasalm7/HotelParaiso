<?php
    $descriptionTitle = get_field('description_title');
    $descriptionText = get_field('description_text');
    $descriptionsubtitle = get_field('description_subtitle');
    $descriptionsubtitletext = get_field('description_subtitle_text');
    $descriptionslogan = get_field('description_slogan');
    $descriptionPhotoLeft = get_field('description_photo_left');
    $descriptionPhotoRight = get_field('description_photo_right');
?>

<div class="description_grid">

    <div class="description-main-content">
        <h2 class="description-title"><?= $descriptionTitle ?></h2>
        <p class="description-text"><?= $descriptionText ?></p>
    </div>

    <div class="description-photos">
        <img src="<?php if ($descriptionPhotoLeft) { echo $descriptionPhotoLeft['url']; } ?>" alt="Description Photo Left">
        <img src="<?php if ($descriptionPhotoRight) { echo $descriptionPhotoRight['url']; } ?>" alt="Description Photo Right">
    </div>

    <div class="description-sub-content">
        <h3 class="description-subtitle"><?= $descriptionsubtitle ?></h3>
        <p class="description-subtitle-text"><?= $descriptionsubtitletext ?></p>
    </div>

    <div class="description-slogan">
        <h4 class="description-slogan"><?= $descriptionslogan ?></h4>
    </div>

</div>
