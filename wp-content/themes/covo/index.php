 <?php
/* Template Name: Home */
?>
<?php get_header(); ?>  

<body class="loading">
<!-- <div class="loading" id="load"></div> -->
<!-- header -->
<div>
  <ul id="slide-out" class="side-nav">
      <li>
        <div class="userView">
          <div class="background">
           
          </div>
          <a href="#!user"><i class="icon-logo"></i></a>
          <a href="#!email"><span class="white-text email">covoarch@gmail.com</span></a>
        </div>
      </li>
      <li><a href="http://www.covoarch.com/contact/">Go to COVO</a></li>
  </ul>
</div>

<header>
  <ul class="main-menu">
    <li><a href="#covo">COVO</a></li>
    <li><a href="#about">WHAT COVO</a></li>
    <li><a href="#service">WHAT COVO DO</a></li>
    <li><a href="#creativites">COVO’S CREATIVITY</a></li>
    <li><a href="#activities">COVO’S ACTIVITIES</a></li>
    <li><a href="#team">COVO’S PILLARS</a></li>
    <li><a href="http://www.covoarch.com/contact/">GO TO COVO</a></li>
  </ul>
  <ul class="hide-on-large-only hide-on-med-only">
    <li><div class="menu-mobile"><a href="#" data-activates="slide-out" class="button-collapse"><i class="zmdi zmdi-menu"></i>&nbsp;Menu</i></a></div></li>
  </ul>
</header>

<!-- blogpost -->
<section class="banner" id="covo">
<div class="container">
<!-- Mobile header -->

<!-- Desktop Header -->
  <!-- Canvas -->
  <canvas id="canvas"></canvas>
</div>
</section>

<!-- About -->
<section class="each about" id="about">
  <div class="container">
    <div class="row animatedParent">
      <div class="col l12 s12 m12">
        <div class="col l8 m8 s12">
            <div class="heading-block">
              <h1>What COVO</h1>
              <span>We create inspiring experiences</span>
            </div>
            <p class="animated fadeInRightShort">Our mission is to create environments that deliver on every level. Aesthetic, practical, commercial, experiential. We achieve this by applying intelligence to design. By developing a personal vision for every project, setting the most uncompromising standards and working side by side with our clients to bring that vision to life. It’s an approach that has cemented our reputation as world-class designers of luxury hotels, resorts and private residences.</p>
        </div>
        <div class="col l4 m4 hide-on-small-and-down">
          <i class="icon-logo"></i>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- services -->
<section class="each service bg-light" id="service">
  <div class="container">
    <div class="row">
      <div class="col l12 m12 s12">
        <div class="col l6 m6 s12">
          <h5 class="center-align"><img src="<?php bloginfo('template_url'); ?>/images/s1.svg"></h5>
        </div>
        <div class="col l6 m6 m4">
          <div class="heading-block">
            <h1>What covo do</h1>
            <span>We apply intelligence to design</span>
          </div>

          <!-- Service -->
          <div class="service-box">
            <div class="icon-box">
              <i class="icon-house-plans orange-bg"></i>
            </div>
            <div class="service-text animatedParent">
              <h2>Interior</h2>
              <p class="animated fadeInRightShort">Our vision is ambitious, far-ranging and constantly innovating. Guided by clear style principles yet unfettered by a house ‘style’, we always see </p>
            </div>
          </div>

          <!-- Service -->
          <div class="service-box">
            <div class="icon-box">
              <i class="icon-building dark-bg"></i>
            </div>
            <div class="service-text animatedParent">
              <h2>Exterior</h2>
              <p class="animated fadeInRightShort">This is a stunning WordPress theme packed with the best website building features: Visual Composer, </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- services -->
<section class="each service dark">
  <div class="container">
    <div class="row">
      <div class="col l12 m12 s12">
        <div class="col l6 m6 m4">
          <div class="col l12 s12 m12">

            <!-- Service -->
            <div class="service-box">
              <div class="icon-box">
                <i class="icon-house-plans blue-bg"></i>
              </div>
              <div class="service-text animatedParent">
                <h2>Interior</h2>
                <p class="animated fadeInRightShort">Our vision is ambitious, far-ranging and constantly innovating. Guided by clear style principles yet unfettered by a house ‘style’, we always see </p>
              </div>
            </div>

            <!-- Service -->
            <div class="service-box">
              <div class="icon-box">
                <i class="icon-building silver-bg"></i>
              </div>
              <div class="service-text animatedParent">
                <h2>Exterior</h2>
                <p class="animated fadeInRightShort">This is a stunning WordPress theme packed with the best website building features: Visual Composer, </p>
              </div>
            </div>
          </div>

        </div>
        <div class="col l6 m6 s12">
          <h5 class="center-align"><img src="<?php bloginfo('template_url'); ?>/images/s2.svg"></h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Creatives -->
<section class="each creatives" id="creativites">
  <div class="container">
    <div class="row">
      <div class="col l12 m12 s12">
            <div class="heading-block">
              <h1>COVO’S Creativities</h1>
              <span>We set the highest standards</span>
            </div>

         

              <?php
              query_posts(array('category_name'=>'exterior,interior,commercial,renovation,ongoing','posts_per_page' => 1));
              while ( have_posts() ) : the_post();
          ?>

            <div class="big-box">
              <div class="bg-over">
                <h3><?php echo get_the_title(); ?></h3>
                  <strong><?php the_time('l, F jS, Y') ?></strong>
                  <br>
                  <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
                      ADDTOANY_SHARE_SAVE_KIT( array( 
                          'buttons' => array( 'facebook', 'twitter', 'google_plus', 'whatsapp', 'pinterest',),
                      ) );
                  } ?>
                  <div class="full-box-bt">
                  <button class="bt-dt"> <a href="<?php the_permalink();?>">Detail</a></button>
                  </div>
              </div>


              <?php if (class_exists('MultiPostThumbnails')) :
                  MultiPostThumbnails::the_post_thumbnail(
                      get_post_type(),
                      'secondary-image'
                  );
              endif; ?>

            </div>

             <?php
            endwhile;
            ?>

            <!-- button -->
              <div class="full-box-bt">
                <button class="bt-normal">
                  <a href="http://www.covoarch.com/creativity_more/">More Creativity</a>
                </button>
              </div>

      </div>
    </div>
  </div>  
</section>

<!-- Activity -->
<section class="each culture" id="activities">
  <div class="container">
    <div class="row">
      <div class="col l12 m12 s12">
        <div class="col l12 s12 m12">
          <div class="heading-block">
            <h1>COVO’s Activities</h1>
            <span>We deliver creatively and commercially</span>
          </div>
        </div>
        <div class="negative-space">
          <!-- Service -->
          <div class="culture-box">
           <?php
              query_posts(array('category_name'=>'culture','posts_per_page' => 6));
              while ( have_posts() ) : the_post();
          ?>
            <div class="col l4 m4 s12">
              <div class="culture-box-each">
                <!-- <div class="over-culture">
                  <h1><?php echo get_the_title();?></h1>
                </div> -->
                <?php the_post_thumbnail('full',array("class"=>"img_fit materialboxed")); ?>
               
              </div>
            </div>

            <?php
              endwhile;
           ?>
            
           
          </div>
        </div>

        <!-- button -->
        <div class="full-box-bt col l12 m12 s12">
          <button class="bt-normal team-bt">
            <a href="http://www.covoarch.com/culture_more">More</a>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- contact with us -->
<section class="each contact">
  <div class="container">
    <span class="icon-letter"></span>
    <h1>Want to Work with Us?</h1>
    <button class="bt-normal bt-center"><a href="http://www.covoarch.com/contact/">SEND ENQUIRY</a></button>
  </div>
</section>


<!-- Team -->
<section class="each team" id="team">
  <div class="container">
    <div class="row">
      <div class="col l12 m12 s12">
        <div class="col l12 s12 m12">
          <div class="heading-block">
            <h1>COVO’s Pillars</h1>
            <span>We create inspiring experiences</span>
          </div>
        </div>

        <div class="negative-space">
          <!-- team -->
           <?php
              query_posts(array('category_name'=>'team','posts_per_page' => 6));
              while ( have_posts() ) : the_post();
          ?>

          <div class="col l6 m6 s12">
            <div class="team-mb"><?php the_post_thumbnail('full',array("class"=>"img_fit")); ?></div>
            <div class="team-detail">
              <h4><?php echo get_the_title(); ?></h4>
              <span><?php echo get_post_meta($post->ID,'designation',true);?></span>
              <?php the_content(); ?>
            </div>
          </div>

          <?php
            endwhile;
         ?>

        <!-- button -->
        <div class="full-box-bt col l12 m12 s12">
          <button class="bt-normal team-bt">
            <a href="http://www.covoarch.com/team/">More</a>
          </button>
        </div>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>