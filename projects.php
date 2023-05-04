<?php
/*
Template Name: Projects Template
*/
get_header()
?>

<div class="col-md-6 mx-auto">
    <div class="row">
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'category_name' => 'projects'
    );
    
    $query = new WP_Query( $args );
    
    while ( $query->have_posts() ) : $query->the_post();
    ?>
        <div class="col-md-4">
        <div class="card my-2">
            <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>
        </div>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
    </div>
</div>

<?php get_footer()?>