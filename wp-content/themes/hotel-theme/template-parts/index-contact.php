<?php
    $contactPhone = get_field('contact_phone');
    $contactEmail = get_field('contact_email');
    $contactAddress = get_field('contact_address');
    $contactImage = get_field('contact_image');
?>
<div class="contact-grid">
    <h2>Get In Touch</h2>
        <img src="<?php if ($contactImage) { echo $contactImage['url']; } ?>" alt="Contact Image">
    <div class="contact-info"> 
        <h4 class="contact-titles">Address:</h4>
        <p class="contact-text"><?= $contactAddress ?></p>
        <h4 class="contact-titles">Phone:</h4>
        <p class="contact-text"><?= $contactPhone ?></p>
        <h4 class="contact-titles">Email:</h4>
        <p class="contact-text"><?= $contactEmail ?></p>
    </div>
</div>

