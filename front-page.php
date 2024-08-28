<?php get_header()?>

    <section class="homeBanner bg--dark">
      <div class="container">
        <div class="homeBanner__wrapper">
          <?php echo get_the_content() ?>
          <ul class="homeBanner__button">
            <li><a href="<?php echo site_url('/menu')?>" class="btn bg--secondary">Order Online</a></li>
            <li><a href="" class="btn bg--secondary">Book A Table</a></li>
          </ul>
        </div>
      </div>
    </section>

    <section class="homeMenu bg--primary">
      <div class="container">
        <div class="homeMenu__title">
          <h2>Delicia Special Menu</h2>
          <p>
            Our menu has been crafted with a list of the most delicious Indian
            dishes <br />
            that we prepare with love
          </p>
        </div>
        <div class="homeMenu__wrapper">

          <?php $rice = new WP_QUERY(array ('post_type' => 'rice',))?>
          <?php $chicken = new WP_QUERY(array ('post_type' => 'chicken',))?>
          <?php $salad = new WP_QUERY(array ('post_type' => 'salad',))?>

          <div class="homeMenu__card">
            <img src="<?php echo get_template_directory_uri()?>./img/rice.png" alt="" />
            <div class="homeMenu__details">
              <h4>The Rice Menu</h4>

              <p><?php print_r($rice->found_posts)?> Items</p>
              <a href="<?php echo site_url('/rice')?>" class="btn bg--secondary-outline">View All Items</a>
            </div>
          </div>
          <div class="homeMenu__card">
            <img src="<?php echo get_template_directory_uri()?>./img/chicken.png" alt="" />
            <div class="homeMenu__details">
              <h4>The Chicken Menu</h4>
              <p><?php print_r($chicken->found_posts)?> Items</p>
              <a href="<?php echo site_url('/chicken')?>" class="btn bg--secondary-outline">View All Items</a>
            </div>
          </div>
          <div class="homeMenu__card">
            <img src="<?php echo get_template_directory_uri()?>./img/salad and greens.png" alt="" />
            <div class="homeMenu__details">
              <h4>Salad & Greens</h4>
              <p><?php print_r($salad->found_posts)?> Items</p>
              <a href="<?php echo site_url('/Salad')?>" class="btn bg--secondary-outline">View All Items</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Home About -->
    <section class="homeAbout bg--dark">
      <div class="container">
        <div class="homeAbout__wrapper">
          <div class="homeAbout__details">
            <small class="text--secondary mb--2">.Welcome to Delicia</small>
            <h4>About our Restaurant</h4>
            <p class="mb--3">
              Since its inauguration in the Summer of 1968, Delicia has gained
              fame as one of the best <br />
              Indian food restaurants in the world - serving mouthwatering fresh
              flavors, and a great <br />
              range of dishes characterized by a high-quality, rich, Indian
              flare.
            </p>
          </div>
          <a href="" class="btn bg--secondary">Book a Table</a>
        </div>
      </div>
    </section>


    <!-- Home Menu List -->
    <section class="homeMenulist bg--primary">
      <div class="container">
        <div class="homeMenulist__title">
          <h2>Explore Our Menu</h2>
          <p>
            Crafted with a list of the most delicious Indian dishes, prepared
            with love and a <br />
            high passion for cooking.
          </p>
        </div>
        <div class="homeMenulist__wrapper">

      <?php $menu = new WP_Query(array(
        'post_type' => 'menus',
        'posts_per_page' => -1
      ))?>    


      <?php if($menu->have_posts()) : while($menu->have_posts()) : $menu->the_post()?>
            <div class="menuList_food">
              <ul>
                <li><?php the_title()?></li>
                <li>$<?php echo get_post_meta(get_the_ID(), 'Price', true)?> </li>
              </ul>
              <p>
                <?php echo get_the_content()?>
              </p>
            </div>
      <?php endwhile;
        else:
          echo "no menus";
        endif;
        wp_reset_postdata();
      ?>

          </div>

      </div>
    </section>


    <!-- Book A Table -->
    <section class="bat bg--primary">
      <div class="container">
        <div class="bat__wrapper">
          <div class="bat__table bg--primary">
            <h4 class="text--secondary text--center mb--2">. Book A Table .</h4>
            <form>
              <div class="bat__name">
                <input type="text" placeholder="First Name" />
                <input type="text" placeholder="Last Name" />
              </div>
              <input type="email" placeholder="Email Address" />
              <input type="text" placeholder="Subject" />
              <textarea placeholder="Your Message"></textarea>
              <div class="bat__button mt--1">
                <a href="" class="btn radius">Submit Form</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- Testimonial -->
    <section class="testimonial bg--primary pb--5">
      <div class="container">
        <div class="testimonial__wrapper">
          <div class="testimonial__slider">

          <?php $testimonial = new WP_Query(array(
          'post_type' => 'testimonials',
          'posts_per_page' => -1
        ))?>     

        <?php if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post()?>  
            <div class="testimonial__clients">
              <i class="fa-solid fa-quote-right"></i>
              <p>
                <?php the_content()?>
              </p>
              <h5><?php the_title()?></h5>
              <small><?php echo get_post_meta(get_the_ID(), 'Position', true)?></small>
            </div>
             <?php endwhile;
        else:
          echo "no testimonials";
        endif;
        wp_reset_postdata();
      ?>

            
          </div>
        </div>

        <div class="testimonial__controls" id="controls">
          <a class="prev"><i class="fa-solid fa-chevron-left"></i></a>
          <a class="next"><i class="fa-solid fa-chevron-right"></i></a>
        </div>
      </div>
    </section>


     <!-- Video -->
    <section class="video bg--primary">
      <div class="container">
        <div class="video__wrapper">
          <iframe
            width="1000"
            height="500"
            src="https://www.youtube.com/embed/<?php echo get_post_meta(get_the_ID(), 'Video', true)?>"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </section>


    <!-- Home Blog -->
    <section class="homeBlog bg--primary py--5">
      <div class="container">
        <div class="homeBlog__title">
          <h2>From Our Blog</h2>
          <p>
            Keep up with our latest food trends, new items, and other updates
            and news from <br />
            our fun blogs and articles that explore the world of Indian cuisine.
          </p>
        </div>

        <div class="homeBlog__wrapper">
        <?php $blog = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => -1
      ))?>  
        <?php if($blog->have_posts()) : while($blog->have_posts()) : $blog->the_post()?>
          <div class="homeBlog__card">
          <?php if(has_post_thumbnail()) {
                the_post_thumbnail();    
            }?>
            <div class="homeBlog__text">
              <a href="<?php the_permalink()?>">
              <h4><?php the_title()?></h4>
              </a>
              <p>
                <?php echo get_the_content()?>
              </p>
            </div>
          </div>
          <?php endwhile;
          else:
            echo "no blog";
          endif;
          wp_reset_postdata();
        ?>

        </div>
      </div>
    </section>





<?php get_footer()?>