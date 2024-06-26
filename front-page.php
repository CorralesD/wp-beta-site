<?php get_header();

while(have_posts(  )) {
    the_post();
    hero();

$today = date('Ymd');
$eventsFeed = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'event',
    'meta_key' => 'event_date',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'meta_query' => array(
        array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric'
        )
    )
));

$servicesFeed = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'service',
    'orderby' => 'meta_value_num',
    'order' => 'ASC'
));
?>
<section class="pb-3">
<div class="row">
<?php sectionHeader(); ?>
<?php
while($servicesFeed->have_posts()) {
    $servicesFeed->the_post();
         ?>
    <div class="card m-3" style="width: 15rem;">
        <div class="card-body">
            <a href="<?php echo the_permalink(); ?>" class="card-link">
            <h5 class="card-title"><?php the_title(); ?></h5>
            </a>
        </div>
    </div>
<?php }

?>   
</div> 
</section>  
<section>
    <div class="row">
        <h1 class="display-3">Emergency Services</h1>
        <div class="col-xs-6">
        </div>
        <div class="col-xs-6">
        </div>
    </div>
    <div class="row">
    </div>  
</section>  
<section>
    <div class="row">
        <h1 class="display-3">News and Updates</h1>
        <div class="col-xs-6">
        </div>
        <div class="col-xs-6">
        </div>
    </div>
    <div class="row">
    </div>  
</section>
<section>
    <div class="row">
        <h1 class="display-3">Government</h1>
        <div class="col-xs-6">
        </div>
        <div class="col-xs-6">
        </div>
    </div>
    <div class="row">
    </div>  
</section>
<section class="pb-3">
<div class="row">
    <h1 class="display-3">Events</h1>
<?php
while($eventsFeed->have_posts()) {
    $eventsFeed->the_post();
        $eventDate = new DateTime(get_field('event_date'));
         ?>
    <div class="card m-3" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $eventDate->format('M'); echo $eventDate->format('d'); ?></h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?php echo the_permalink(); ?>" class="card-link">read more</a>
        </div>
    </div>
<?php }

?>   
</div> 
</section>         
<?php }
get_footer();

?>