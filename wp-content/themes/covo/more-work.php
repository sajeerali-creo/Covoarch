 <?php
/* Template Name: All-Works */
?>
<?php get_header(); ?>  

<section class="inner">
<div class="second-header visible-lg visible-sm visible-md visible-xs">
<div class="container">
  <nav> 

  <div class="col-lg-6 col-xs-6">  <a href="http://www.dwuthi.com/index/" class="second-logo"><img src="<?php bloginfo('template_url'); ?>/images/logo-second.svg" class="img-responsive"></a></div>

  <div class="col-lg-6 col-xs-6">
     <ul class="nav navbar-nav">  
     <li><a href="http://www.covoarch.com/home/" class="back">back</a></li> 
     </ul> 
  </div>
           
   </nav>
</div>  
</div>
</section>




<section class="creatives">
  <div class="container">
     <div class="col-lg-4 col-lg-offset-4">
      <h1 class="scrollpoint sp-effect2"><span>Rec</span>ent CREATIVES</h1>
      <div class="border"></div>
    </div>
    <div class="sec">
      
     
<!-- works -->
      <?php
           query_posts('category_name=recentcreatives' );
          while ( have_posts() ) : the_post();
      ?>
                  
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="work">
           <a href="<?php the_permalink();?>">
            <div class="work-over">
              <i class="zmdi zmdi-chevron-right"></i>
              <h4 class="scrollpoint sp-effect1">Go to this</h4>
            </div>
            </a>
            <?php the_post_thumbnail('full',array("class"=>"img_fit")); ?>
          </div>
        </div>
       
       <?php
          endwhile;
       ?>

       
      
 

  

         

     

      

   

        
     
      </div>
  </div>
</section>




<?php get_footer(); ?>