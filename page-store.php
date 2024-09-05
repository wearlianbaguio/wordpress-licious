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
              <p><?php echo get_post_meta(get_the_ID(), 'Price', true)?></p>
              <a href="#" class="btn bg--product btnAddToCart"
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


    <div class="cart">
      <div class="cart-header">
        <h4>Cart</h4>
        <button id="btnCartClose">x</button>  
      </div>
      
      <div class="cart-body"></div> 
      <ul>
        <li>Total</li>
        <li id="total"></li>
      </ul>      
    </div>




<script>
  const btnCart = document.querySelector('#btnCart');
  const btnCartClose = document.querySelector('#btnCartClose');
  const cart = document.querySelector('.cart');
  const btnAddToCarts = document.querySelectorAll('.btnAddToCart');
  const total = document.querySelector('#total');
  const count = document.querySelector('.header-cart span');

  let cartitem = [];

  btnCartClose.addEventListener('click', () => cart.classList.remove('open'));
  btnCart.addEventListener('click', () => cart.classList.add('open'));

  btnAddToCarts.forEach((btn, e) => {
    e.preventDefault;
    btn.addEventListener('click', () => {

      cartitem.push({
        price: btn.previousElementSibling.innerHTML,
        title: btn.previousElementSibling.previousElementSibling.innerHTML,
        img: btn.previousElementSibling.previousElementSibling.previousElementSibling.getAttribute('src')}
      ) 
      cart.querySelector('.cart-body').innerHTML = "";
      cartitem.map((item, idx) => {
        cart.querySelector('.cart-body').insertAdjacentHTML('beforeend', `  
          <div class="cart-item">
            <img src="${item.img}">
            <div class="cart-info">
              <h6>${item.title}</h6>
              <small>${item.price}</small>
            </div>
          </div>`);
    })

    if(cartitem.length === 0) {
  count.classList.remove('show')
} else {
  count.classList.add('show')
}

count.innerHTML = cartitem.length
    total.innerHTML = getTotal()
  })
})

const getTotal = () => cartitem.reduce(
  (a, c) => a + Number(c.price),0);


</script>



<?php get_footer()?>