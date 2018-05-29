 <?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
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

<section class="detail">
  <div class="container">
  <div class="row">
    <div class="dx-arae">


         <div class="dx-work-detail-area">

          <h3><?php echo get_the_title(); ?></h3>
          <strong><?php the_time('l, F jS, Y') ?></strong>
          <br>
          <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
              ADDTOANY_SHARE_SAVE_KIT( array( 
                  'buttons' => array( 'facebook', 'twitter', 'google_plus', 'whatsapp', 'pinterest',),
              ) );
          } ?>
          <br>
    </div>


    <div class="dx-work-area">
      <div class="detail-image">
       
        
        <?php if (class_exists('MultiPostThumbnails')) :
              MultiPostThumbnails::the_post_thumbnail(
                  get_post_type(),
                  'secondary-image'
              );
          endif; ?>
      </div>
      <br>
      
      <div class="detail-image">
        <h3>Related Views</h3>
        <br>
        <div class="each-pic">
             <div id="primary" class="content-area">
                  <div id="content" class="site-content" role="main">
                    <?php
                      // Start the loop.
                      while ( have_posts() ) : the_post();

                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );

                      
                      // End the loop.
                      endwhile;
                      ?>
                  </div><!-- #content -->
              </div><!-- #primary -->
        </div>
      </div>
      
    </div>


    <div class="dx-work-detail-area">
          <h4>Comments</h4>
          
          <?php comments_template(); ?>
          
    </div>

    </div>

    </div>

   
  </div>
</section>


<?php get_footer(); ?>