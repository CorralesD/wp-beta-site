<?php get_header();

while(have_posts()) { 
    the_post(  ); 
    pageBanner(array(
        'title' => get_field('banner_header'),
        'subtitle' => get_field('banner_subheader')
    ))?>

<section class="page-banner">
	<header class="container page-banner__content">
        <h1 class="page-banner__title"><?php echo get_field('banner_header'); ?></h1>
        <p class="page-banner__subtitle lead"><?php echo get_field('banner_subheader'); ?></p>
    </header>
</section>

<div class="container">
    <div class="row">

    <?php echo the_content(); ?>

    </div>
</div>

<?php }

get_footer();
?>
