 <?php
/* Template Name: Team */
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
<!-- Team -->
<section class="each team" id="team">
  <div class="container">
    <div class="row">
      <div class="col l12 m12 s12">
        <div class="col l12 s12 m12">
          <div class="heading-block">
            <h1>Our Creative Team</h1>
            <span>This is a stunning WordPress theme packed with the best website,</span>
          </div>
        </div>

        <div class="negative-space">
          <!-- team -->
          <?php
              query_posts('category_name=team' );
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



      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>