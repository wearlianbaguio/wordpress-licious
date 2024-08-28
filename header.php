<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php is_front_page() ? blogInfo('title') : wp_title('')?></title>
    <?php wp_head()?>
    <!-- <link rel="stylesheet" href="./dist/css/main.min.css" /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css"
    />
  </head>
  <body>
    <!-- Header -->
    <header class="header bg--dark">
      <div class="container">
        <div class="header__wrapper">

            <?php if(function_exists('the_custom_logo')) {
              the_custom_logo();
            }?>
       
          <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'header_menu',
                'menu_class' => 'header__nav'
            ))?>
          </nav>
          <div class="toggle__menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>