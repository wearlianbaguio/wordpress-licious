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
          <div class="homeMenu__card">
            <img src="<?php echo get_template_directory_uri()?>./img/rice.png" alt="" />
            <div class="homeMenu__details">
              <h4>The Rice Menu</h4>
              <p>25+ Items</p>
              <a href="<?php echo site_url('/rice')?>" class="btn bg--secondary-outline">View All Items</a>
            </div>
          </div>
          <div class="homeMenu__card">
            <img src="./desilicious/IMG/chicken.png" alt="" />
            <div class="homeMenu__details">
              <h4>The Chicken Menu</h4>
              <p>25+ Items</p>
              <a href="" class="btn bg--secondary-outline">View All Items</a>
            </div>
          </div>
          <div class="homeMenu__card">
            <img src="./desilicious/IMG/salad and greens.png" alt="" />
            <div class="homeMenu__details">
              <h4>Salad & Greens</h4>
              <p>25+ Items</p>
              <a href="" class="btn bg--secondary-outline">View All Items</a>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php get_footer()?>