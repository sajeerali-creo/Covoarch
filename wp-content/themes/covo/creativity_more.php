 <?php
/* Template Name: Creativity_More */
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
<section class="each creatives inner-creative">
  <div class="container">
    <div class="row">
      <div class="col l12 m12 s12">
        <div class="col l12 s12 m12">
          <ul id="tabs-swipe-demo" class="tabs">
            <li class="tab"><a class="active" href="#test-swipe-1">EXTERIORS</a></li>
            <li class="tab"><a href="#test-swipe-2">INTERIOR</a></li>
            <li class="tab"><a href="#test-swipe-3">COMMERCIAL</a></li>
            <li class="tab"><a href="#test-swipe-4">RENOVATIONS</a></li>
            <li class="tab border-right-0"><a href="#test-swipe-5">ON GOING</a></li>
          </ul>
        </div>
        <div class="col l12 m12 s12">
          <div id="test-swipe-1" class="full-box">
            <div>
              <div class="left-w">

                  <?php
                  query_posts('category_name=exterior' );
              while ( have_posts() ) : the_post();
              ?>

                <div class="big-box two-one">
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
                      <button class="bt-dt"> <a href="<?php the_permalink();?>">More Detail</a></button>
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



              </div>
             

              <!-- button -->
             
            </div>
          </div>
          <div id="test-swipe-2" class="full-box">
            <div class="animatedParent">
              <div class="left-w">
 


              
               <?php
              query_posts('category_name=interior' );
              while ( have_posts() ) : the_post();
              ?>

                <div class="big-box two-one">
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
                      <button class="bt-dt"> <a href="<?php the_permalink();?>">More Detail</a></button>
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

             
              </div>
             
              <!-- button -->
             
            </div>
          </div>
          <div id="test-swipe-3" class="full-box">
            <div class="animatedParent">
              <div class="left-w">
                


                      <?php
              query_posts('category_name=commercial' );
              while ( have_posts() ) : the_post();
              ?>

                <div class="big-box two-one">
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
                      <button class="bt-dt"> <a href="<?php the_permalink();?>">More Detail</a></button>
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
              
              </div>
             
              <!-- button -->
             
            </div>
          </div>
          <div id="test-swipe-4" class="full-box">
            <div class="animatedParent">
              <div class="left-w">

                         <?php
              query_posts('category_name=renovation' );
              while ( have_posts() ) : the_post();
              ?>

                <div class="big-box two-one">
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
                      <button class="bt-dt"> <a href="<?php the_permalink();?>">More Detail</a></button>
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

               </div>

              
              <!-- button -->
              
            </div>
          </div>
          <div id="test-swipe-5" class="full-box">
            <div class="animatedParent">
              <div class="left-w">


                   <?php
              query_posts('category_name=ongoing' );
              while ( have_posts() ) : the_post();
              ?>

                <div class="big-box two-one">
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
                      <button class="bt-dt"> <a href="<?php the_permalink();?>">More Detail</a></button>
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
               
              </div>
             
              <!-- button -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>

<?php get_footer(); ?>