<?php get_header()?>

<section class="food bg--dark">
    <div class="container">
        <h1>Rice Meal</h1>

        <div class="food_wrapper">

        <?php $rice = new WP_Query(array(
                'post_type' => 'rice',

                'posts_per_page'=> -1

            ))?>

            <?php if($rice->have_posts()) : while($rice->have_posts()) : $rice->the_post();?>
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