 <?php
/* Template Name: Culyure_more */
?>
<?php get_header(); ?>  

<body class="loading">
<!-- <div class="loading" id="load"></div> -->
<!-- header -->



<div class="inner-header">
  <div class="container">
    <div class="logo-sp"><i class="icon-logo"></i></div>
    <div class="back-bt-sp">
      <button class="back-bt"><a href="http://www.covoarch.com/home/">Back</a></button>
    </div>
  </div>
</div>


<!-- Activity -->
<section class="each culture" id="activities">
  <div class="container">
    <div class="row">
      <div class="col l12 m12 s12">
        <div class="col l12 s12 m12">
          <div class="heading-block">
            <h1>COVO Culture</h1>
            <span>We deliver creatively and commercially</span>
          </div>
        </div>
        <div class="negative-space">
          <!-- Service -->
          <div class="culture-box">
         
          <?php
              query_posts('category_name=culture' );
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

      
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>