<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Le styles -->
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    

   <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>

  <body>

 

<div class="container center-block">
  <div class="row">
    <div class="col-md-offset-1">
    <img class="img-responsive" src="http://felixroad.didesignbristol.com/wp-content/uploads/2014/11/home-banner.png" style="width: 1000px, height: 200px;">
    </div>
 </div>
</div>




<div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
                <?php wp_list_pages(array('title_li' => ''))wp_loginout();  ?>
                
                    
                
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>