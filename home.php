<?php get_header()?>

<section class="blogBanner bg--primary">
      <div class="container">
        <div class="blogBanner__wrapper">

        <?php if(have_posts()) : while (have_posts()): the_post(); ?>

          <div class="blogBanner__content">
            <?php if(has_post_thumbnail()) {
                the_post_thumbnail();
            }?>
            <h3><?php echo get_the_title()?></h3>
            <p>
                <?php echo wp_trim_words(get_the_excerpt(), 10) ?>
            </p>
            <a href="<?php the_permalink()?>" class="btn bg--secondary">Read More</a>
          </div>
          <?php endwhile;
          else :
            echo "No More blog";
          endif;
          ?>


        </div>
      </div>
</section>

<?php get_footer()?>

