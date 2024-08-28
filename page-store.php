<?php get_header()?>

<!-- Product Banner -->
    <section class="productBanner bg--primary">
      <div class="container">
        <div class="productBanner__wrapper">
          <div class="productBanner__products">

          <?php $menu = new WP_Query(array(
                'post_type' => 'menus',
                'posts_per_page' => -1    
            ))?>

            <?php if($menu->have_posts()) : while($menu->have_posts()) : $menu->the_post();?>
            <div class="productBanner__card">
              <?php if(has_post_thumbnail()) {
                the_post_thumbnail();
            }?>
              <h3><?php the_title()?></h3>
              <p>$<?php echo get_post_meta(get_the_ID(), 'Price', true)?></p>
              <a href="" class="btn bg--product"
                ><i class="fa-solid fa-cart-shopping mr--1"></i>ADD TO CART</a
              >
            </div>
            <?php endwhile;
            else:
                echo 'no more menu';
            endif;
            wp_reset_postdata();
          ?>
           
            
          </div>
          <div class="productBanner__right">
            <div class="productBanner__search">
              <input type="text" placeholder="Search Item" />
              <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
            <div class="productBanner__category">
              <h3>Category:</h3>
              <table>
                <tr>
                  <td>
                    <a href="">Chicken Menu</a>
                  </td>
                  <td>
                    <a href="">(10)</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="">Rice Menu</a>
                  </td>
                  <td>
                    <a href="">(5)</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="">Beef Menu</a>
                  </td>
                  <td>
                    <a href="">(5)</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="">Mutton Menu</a>
                  </td>
                  <td>
                    <a href="">(5)</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="">Salad</a>
                  </td>
                  <td>
                    <a href="">(15)</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="">Dessert</a>
                  </td>
                  <td>
                    <a href="">(15)</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="">Paan & Masala</a>
                  </td>
                  <td>
                    <a href="">(5)</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php get_footer()?>