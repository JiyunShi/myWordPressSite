<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/jasny-bootstrap.min.css">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
  
  <!-- Responsive Style -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
  
  <!--Fonts-->
  <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/font-awesome/font-awesome.min.css">

  <!-- Extras -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/extras/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/extras/lightbox.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/extras/owl/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/extras/owl/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/extras/owl/owl.transitions.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jspage' ); ?></a>
  <!-- Header Section Start -->
  
  <div id="header" 
       <?php if(get_header_image()&&(is_front_page()|| is_home())): ?>
       style="background-image: url(<?php echo get_header_image();?>);"
       <?php endif; ?>>
    <div class="container">
      <div class="col-md-12 top-header">
        <div class="logo-menu">
          <div class="logo pull-left wow fadeInDown animated" data-wow-delay=".2s">
            <?php
			the_custom_logo();  ?>
          </div> 
          <div class="pull-right wow fadeInDown animated" data-wow-delay=".2">
            <div id="menu" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
              <span>menu</span>
            </div> 
          </div> 
        </div>
        <div class="sidebar-nav">
          <!-- navigation start -->
          <div class="navmenu navmenu-default navmenu-fixed-right offcanvas" style="" id="navigation">
              <div class ="logo">
                  <?php
			the_custom_logo();  ?>
                  </div>
            <ul class="nav navmenu-nav">
              <li class="active"><a href="#header">Home</a></li>
              <li><a href="#works">Portfolio</a></li>
              <li><a href="#blog">Blog</a></li>
              <li><a href="#feedback">Hire/Contact Me</a></li>
            </ul>
          </div>
          <!-- navigation End -->
        </div>     
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="banner text-center">
            <h1 class="wow fadeInDown animated" data-wow-delay=".8s">Joey Shi</h1>
            <h2 class="wow fadeInDown animated" data-wow-delay=".6s">Passionate Web developer</h2>
            <a href="#feedback" class="btn btn-border lg wow fadeInLeft animated" data-wow-delay="1.0s">Hire Me</a>
            <a href="<?php echo get_home_url(); ?>/blog/" class="btn btn-common lg wow fadeInRight animated" data-wow-delay="1.0s">Blog</a>
            <div class="scroll">
              <a href="#works"><i class="fa fa-angle-down wow fadeInUp animated" data-wow-delay="1.2s"></i></a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header Section End -->
  
  <div id="content" class="site-content">
  <!-- Work Section Start -->
  <section id="works">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">Some of <br>My <br><span>Works</span></h1>
        <div class="col-md-7 col-lg-7 grid-left wow fadeInLeft animated" data-wow-delay="1.2s">
          <div class="large">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/img1.jpg" alt="">
            <div class="overlay">
              <a href="<?php echo get_template_directory_uri(); ?>/assets/img/work/img1.jpg" data-lightbox="img1"><i class="fa fa-search"></i></a>
            </div>
          </div>
          <div class="grid-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/img2.jpg" alt="">
            <div class="overlay">
               <a href="<?php echo get_template_directory_uri(); ?>/assets/img/work/img2.jpg" data-lightbox="img2"><i class="fa fa-search"></i></a>
            </div>
          </div>
          <div class="grid-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/img3.jpg" alt="">
            <div class="overlay">
               <a href="<?php echo get_template_directory_uri(); ?>/assets/img/work/img3.jpg" data-lightbox="img3"><i class="fa fa-search"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-5 grid-right wow fadeInRight animated" data-wow-delay="1.6s">
          <div class="grid-box large">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/img4.jpg" alt="">
            <div class="overlay">
               <a href="<?php echo get_template_directory_uri(); ?>/assets/img/work/img4.jpg" data-lightbox="img4"><i class="fa fa-search"></i></a>
            </div>
          </div>
          <div class="grid-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/img5.jpg" alt="">
            <div class="overlay">
               <a href="<?php echo get_template_directory_uri(); ?>/assets/img/work/img5.jpg" data-lightbox="img5"><i class="fa fa-search"></i></a>
            </div>
          </div>
          <div class="browse-box">
            <div class="more">
              <a href="#"><i class="fa fa-arrow-circle-right"></i>BROWSE ALL</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Work Section End  -->

  <!-- Testimonial Section Start -->
  <section id="testimonial">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">What My<br>Client <br><span>Says</span></h1>
        <div id="testimonial-carousel" class="carousel slide wow fadeInUp animated" data-ride="carousel" data-wow-delay="1.2s">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#testimonial-carousel" data-slide-to="1"></li>
            <li data-target="#testimonial-carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              
                <div class="commant">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="claint">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/img1.jpg" alt="">
                    </div>
                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="info">
                      <p>TLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                      <h4>Anamoul Rouf</h4>
                      <h5>CEO, CloudBee</h5>
                    </div>
                  </div>
                </div>
              
            </div>

            <div class="item">
              
                <div class="commant">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="claint">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/img2.jpg" alt="">
                    </div>
                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="info">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                      <h4>Imran Khan</h4>
                      <h5>Founder, WPBean</h5>
                    </div>
                  </div>
                </div>
              
            </div>
            <div class="item">
              
                <div class="commant">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="claint">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/img3.jpg" alt="">
                    </div>
                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="info">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                      <h4>Tanvir Ahmed</h4>
                      <h5>Contributor, GrayGrids</h5>
                    </div>
                  </div>
                </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial Section End -->

  <!-- Skills Section Start -->
  <section id="skills">
    <div class="container">
      <div class="row">
      <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">My<br>Passionate<br> <span>Skills</span></h1>
      <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
        <div class="fact-block">
          <div class="circle one">
            <div class="count-info">
              <h3><span class="counter">70%</span></h3>
              <h4>PHP</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
        <div class="fact-block">
          <div class="circle two">
            <div class="count-info">
              <h3><span class="counter">80%</span></h3>
              <h4>WordPress</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
        <div class="fact-block">
          <div class="circle three">
            <div class="count-info">
              <h3><span class="counter">50%</span></h3>
              <h4>CSS</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
        <div class="fact-block">
          <div class="circle four">
            <div class="count-info">
              <h3><span class="counter">90%</span></h3>
              <h4>HTML</h4>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  <!-- Skills Section End -->

  <!-- Blog Section Start -->
  <section id="blog">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">My<br>Homey<br><span>Blog</span></h1>
        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
          <div class="blog-large wow fadeInLeft animated"  data-wow-delay="1.2s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img1.jpg" alt="">
            <div class="large">
              <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>
              <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight animated" data-wow-delay="1.6s">
          <div class="blog-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img2.jpg" alt="">
            <div class="content">
              <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>
              <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>
            </div>
          </div>
          <div class="blog-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img3.jpg" alt="">
            <div class="content">
              <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>
              <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight animated" data-wow-delay="1.8s">
          <div class="blog-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img3.jpg" alt="">
            <div class="content">
              <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>
              <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>
            </div>
          </div>
          <div class="blog-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img2.jpg" alt="">
            <div class="content">
              <a class="title" href="#">This is Photoshop's vers ion  of Lorem Ipsum. Pro in gravida </a>
              <p>Nibh vel velit auc tor aliq uet. Aenean sollicitu din, lorem quis biben...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Section Start -->

  <!-- Feedback Section Start -->
  <section id="feedback">
    <div class="container">
      <div class="row">
        <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s"><span>Hire</span><br>or Contact <br> Me</h1>
        <div class="col-sm-6 col-md-6 wow fadeInLeft animated" data-wow-delay="1.4s">
          <form action="" name="contact">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" name="name" class="form-control" placeholder="Your name">
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-fire"></i></span>
              <input type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-comments"></i></span>
              <textarea name="message" class="form-control large" placeholder="Massage"></textarea>
            </div>
            <button type="submit" class="btn btn-send"><i class="fa fa-envelope-o"></i>Send</button>
          </form>
        </div>
        <div class="col-sm-4 col-md-4 col-md-offset-2 wow fadeInRight animated" data-wow-delay="1.4s">
          <div class="address">
            <h2>Contact Info</h2>
            <ul class="contact-info">
              <li><i class="fa fa-mobile"></i> +88 019788XYZ</li>
              <li><i class="fa fa-skype"></i> musa.xyz</li>
              <li><i class="fa fa-envelope-o"></i> musaxyz@gmail.com</li>
            </ul>
          
          <h2>Follow Me</h2>
            <ul class="social-icon">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Feedback Section End -->
  </div><!-- Content End-->
  <!-- Footer section Start -->
  <footer id="footer">
    
                
    <div class="container">
      <nav class="social-menu wow fadeInUp animated" data-wow-delay=".3s">
                <?php
                    wp_nav_menu(['theme_location' => 'menu-2',
                                 'menu_id'      => 'social-menu',
                                 'link_before'    => '<span class="screen-reader-text">',
				 'link_after'     => '</span>' 
                                 
                                ] );
		?>
                </nav><!-- .social-menu -->                  
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <div class="copyright wow fadeInUp animated" data-wow-delay=".8s">
            <div class="site-info">
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jspage' ) ); ?>"><?php
                        /* translators: %s: CMS name, i.e. WordPress. */
                        printf( esc_html__( 'Proudly powered by %s', 'jspage' ), 'WordPress' );
                ?></a>
                <span class="sep"> | </span>
                <?php
                        /* translators: 1: Theme name, 2: Theme author. */
                        printf( esc_html__( 'Theme: %1$s by %2$s.', 'jspage' ), 'jspage', '<a href="https://www.linkedin.com/in/jiyunshi/">Jiyun</a>' );
                ?>
		</div><!-- .site-info -->
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
          <div class="scroll-top text-center wow fadeInUp animated" data-wow-delay=".6s">
            <a href="#header"><i class="fa fa-chevron-circle-up fa-2x"></i></a>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <p class="text-center wow fadeInUp animated" data-wow-delay=".8s"></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer section End -->
  
  </div><!-- #page -->

  <?php wp_footer(); ?>
  <!-- jQuery Load -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-min.js"></script>
  <!-- Bootstrap JS -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
  <!-- WOW JS plugin for animation -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.js"></script>
  <!-- All JS plugin Triggers -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <!-- Smooth scroll -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/smooth-scroll.js"></script>
  <!--  -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jasny-bootstrap.min.js"></script>
  <!-- Counterup -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js"></script>
  <!-- waypoints -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints.min.js"></script>
  <!-- circle progress -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/circle-progress.js"></script>
  <!-- owl carousel -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
  <!-- lightbox -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lightbox.min.js"></script>

</body>
</html>