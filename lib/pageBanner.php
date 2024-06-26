<?php
function pageBanner() {
if(!$arg = null) {
    $args['title'] = get_the_title();
}

?>
<section class="page-banner">
	<header class="container page-banner__content">
        <h1 class="page-banner__title"><?php echo get_field('banner_header'); ?></h1>
        <?php if($arg['subtitle']) { ?>
            <p class="page-banner__subtitle lead"><?php echo get_field('banner_subheader'); ?></p>
        <?php } ?>
    </header>
</section>

       <?php }