<?php

/***
 * Template Name: Special Menu
 * 
 * */ 

?>




<?php get_header()?>

<?php

$title;
if(is_page('rice')) {
        $pagename == "rice";
    } else if(is_page('chicken')) {
        $pagename == "chicken";
    } else if(is_page('salad')) {
        $pagename == "salad";
    }

?>

<section class="food bg--dark">
    <div class="container">
        <h1><?php echo $pagename;?> Meals</h1>

        <div class="food_wrapper">

        <?php $loop = new WP_Query(array(
                'post_type' => $pagename,
                'posts_per_page'=> -1,
                'orderby' => 'title',
                'order' => "ASC" 
                // Ascending per ID

            ))?>

            <?php if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post();?>
                <div class="food_item">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }?>
                    <h3><?php the_title()?></h3>
                    <p>PHP<?php echo get_post_meta(get_the_ID(), 'Price', true) ; ?></p>
                    <a href="*" class="btn bg--secondary">Add to Cart</a>
                </div>
            <?php endwhile;
                else:
                    echo "no rice";
            endif;
            ?>
        </div>

    </div>
</section>

<?php get_footer()?>