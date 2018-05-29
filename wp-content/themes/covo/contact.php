 <?php
/* Template Name: Contact */
?>
<?php get_header(); ?>  

<body class="loading">
<!-- <div class="loading" id="load"></div> -->
<!-- header -->



<div class="inner-header">
  <div class="container">
    <div class="logo-sp"><i class="icon-logo"></i></div>
    <div class="back-bt-sp">
      <button class="back-bt"><a href=" http://www.covoarch.com/home/">Back</a></button>
    </div>
  </div>
</div>


<!-- Activity -->
<section class="each contact2" >
  <div class="container">
    <div class="row">
      <div class="col l12 s12 m12">
        <div class="heading-block">
          <h1>Get in touch</h1>
          <span>This is a stunning WordPress theme packed with the best website,</span>
        </div>
      </div>

      <div class="col s12 m6 l6">
                <?php $cfsignupname='[contact-form-7 id="51" title="Arnett Creek - Lower Picketpost Mesa (UI) - 60 Nov 2016"]'?>
    <?php echo do_shortcode($cfsignupname);?>

      </div>
    </div>
   <!--  <div class="row">
      <div class="col s12 m6 l6">
            <div class="input-field">
              <input id="password" type="password" class="validate">
              <label for="password">Email</label>
            </div>
      </div>
    </div> -->
   <!--  <div class="row">
      <div class="col s12 m6 l6">
            <div class="input-field">
              <input id="password" type="password" class="validate">
              <label for="password">Subject</label>
            </div>
      </div>
    </div> -->
   <!--  <div class="row">
      <div class="col s12 m6 l6">
            <div class="input-field">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Message</label>
            </div>
      </div>
    </div> -->

     <!-- <div class="row hiddendiv">
      <div class="col s12 m6 l6">
            <form action="#">
          <div class="file-field input-field">
            <div class="btn black-bt">
              <span>File</span>
              <input type="file" multiple>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Upload one or more files">
            </div>
          </div>
        </form>
      </div>
    </div> -->
    


  </div>
</section>


<?php get_footer(); ?>