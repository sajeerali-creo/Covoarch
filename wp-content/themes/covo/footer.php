<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage creotopi
 * @since creotopi
 */
?>
<footer>
  <div class="container">
    <div class="row">
      <div class="col l7 m7 s12">
        <i class="icon-logo"></i>
        <p>Munduparamba Bypass Rd, Up Hill, Malappuram, Kerala 676505, Kavungal - Munduparamba Bypass Rd, Up Hill, Malappuram, Kerala 676505, India</p>
        <ul>
          <li><i class="zmdi zmdi-email"></i>&nbsp;&nbsp;covoads@gmail.com</li>
          <li><i class="zmdi zmdi-phone"></i>&nbsp;&nbsp;+91 99466074464, +91 9846607464</li>
          <li><i class="zmdi zmdi-phone"></i>&nbsp;&nbsp;+91 9656009001</li>
          <li class="social">
            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
            <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
          </li>
        </ul>
      </div>
      <div class="col l5 m5 s12 hide-on-small-and-down">
        <div class="map">
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.8949643590418!2d76.08903341422922!3d11.046501292138558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba63563ffb2cf1b%3A0x21f51138ae0b151d!2sCOVO+ARCHITECTURE+STUDIO!5e0!3m2!1sen!2sae!4v1496582454969" width="100%" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</footer>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquary.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/materialize.min.js"></script>
<script src='<?php bloginfo('template_url'); ?>/js/css3-animate-it.js'></script>
 <script src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
<script type="text/javascript">
  $(".button-collapse").sideNav();
</script>

<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});
</script>
<script>
  $(window).load(function() {
      // start up after 2sec no matter what
      window.setTimeout(function(){
          $('body').removeClass("loading").addClass('loaded');
      }, 2000);
  });
</script>

<script>
  $(document).ready(function() {
    $('a[href^="#"]').click(function(event) {
      var id = $(this).attr("href");
      var offset = 60;
      var target = $(id).offset().top - offset;

      $('html, body').animate({scrollTop:target}, 1000);
      event.preventDefault();
    });
  });
</script>

</body>
</html>
