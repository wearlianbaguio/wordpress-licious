<?php get_header()?>

<!-- Chef Banner -->
    <section class="chefBanner bg--primary">
      <div class="container">
        <div class="chefBanner__title">
          <h2>Our Chefs</h2>
        </div>
        <div class="chefBanner__wrapper">
            <?php $chef = new WP_Query(array(
                'post_type' => 'chefs',
                'posts_per_page' => -1    
            ))?>

            <?php if($chef->have_posts()) : while($chef->have_posts()) : $chef->the_post();?>
          <div class="chefBanner__card" data-aos="fade-right">

            <?php if(has_post_thumbnail()) {
                the_post_thumbnail();
            }?>
            <h3><?php the_title()?></h3>
            <h4><?php echo get_post_meta(get_the_ID(), 'Position', true)?></h4>
          </div>

          <?php endwhile;
            else:
                echo 'no more chef';
            endif;
            wp_reset_postdata();
          ?>
          
        </div>
      </div>
    </section>

<?php get_footer()?>