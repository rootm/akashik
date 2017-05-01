<?php  wp_head(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Akashik</title>
  <meta name="description" content="Akashik Record Reading">

 
</head>
<body <?php body_class(); ?>>
  
  <div id="particles-js"></div>



  <div class="header img-responsive" >

    <div class="my-bar navbar navbar-default">
      <div class="container-fluid" >



        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".menubar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse menubar">
          <ul class="nav navbar-nav navbar-left" id="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">serviceS</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right" id="menu">

            <li><a href="#">about us</a></li>
            <li><a href="#">contact</a></li>
          </ul>


        </div>

      </div>
      <hr  id="menuline">
    </div>


    <div class="container-fluid">

      <div class="col-md-8 col-md-offset-2 topic  wow fadeIn" data-wow-delay="0.1s">

        <div class="row main-topic text-center" >

          <h1 id="topic1"><?php echo get_option('main_title' ); ?></h1>

        </div>
        <p class="text-center" id="sub-topic"><?php echo get_option('sub_title' ); ?></p>
      </div>

    </div>

  </div>