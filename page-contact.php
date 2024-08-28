<?php get_header()?>

<!-- contactPage -->
    <section class="contactPage bg--primary">
      <div class="container">
        <div class="contactPage__wrapper">
          <ul class="contactPage__info">
            <li>
              <i class="fa-solid fa-phone-volume"></i>
              <span><?php echo get_post_meta(get_the_ID(), 'Phone', true)?></span>
            </li>
            <li>
              <i class="fa-solid fa-location-dot"></i>
              <span
                ><?php echo get_post_meta(get_the_ID(), 'Address', true)?></span
              >
            </li>
            <li>
              <i class="fa-solid fa-earth-americas"></i>
              <span><?php echo get_post_meta(get_the_ID(), 'Email', true)?></span>
            </li>
          </ul>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.3721465689828!2d121.34546637491333!3d14.055188386369128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd5cd2d6006569%3A0x9075b8a72b9d5fb0!2sFrontline%20Business%20Solutions%2C%20Inc.!5e0!3m2!1sen!2sph!4v1723556752973!5m2!1sen!2sph"
            width="1050"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
          <h2>Get In Touch</h2>
          <h4>Make it happen in 4 easy steps! Best of Luck</h4>
          <form class="contactPage__input">
            <div class="contactPage__input--name">
              <label for="firstname"
                ><p>First Name</p>
                <input type="text" id="firstname"
              /></label>
              <label for="lastname"
                ><p>Last Name</p>
                <input type="text" id="lastname"
              /></label>
            </div>
            <label for="email"
              ><p>Email</p>
              <input type="email" id="email"
            /></label>
            <label for="subject"
              ><p>Subject</p>
              <input type="text" id="subject"
            /></label>
            <label for="message"
              ><p>Your Message</p>
              <textarea id="message"></textarea>
            </label>
            <div class="contactPage__input--btn mt--2">
              <a href="" class="btn bg--secondary">Submit Form</a>
            </div>
          </form>
        </div>
      </div>
    </section>


<?php get_footer()?>