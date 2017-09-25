<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <!-- Bootstrap -->

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
<img style="display: none" src="<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/imgfooter.jpg" alt="">
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
            <h1 id="editorName" class="wow fadeInDown animated" data-wow-delay=".8s">Joey Shi</h1>
            <div class="wow fadeInDown animated" data-wow-delay=".6s">
            <h2>Passionate Developer</h2>
            </div>
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
              <a href="<?php echo get_template_directory_uri(); ?>/assets/img/work/fight2.png" data-lightbox="img1"><i class="fa fa-search"></i></a>
            </div>
          </div>
          <div class="grid-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/mobile.png" alt="">
            <div class="overlay">
               <a href="<?php echo get_template_directory_uri(); ?>/assets/img/work/mobile2.png" data-lightbox="img2"><i class="fa fa-search"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-5 grid-right wow fadeInRight animated" data-wow-delay="1.6s">
          <div class="grid-box large">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/website.png" alt="">
            <div class="overlay">
               <a href="<?php echo get_template_directory_uri(); ?>/assets/img/work/blog.png" data-lightbox="img4"><i class="fa fa-search"></i></a>
            </div>
          </div>
          <div class="grid-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/php1.png" alt="">
            <div class="overlay">
               <a href="<?php echo get_template_directory_uri(); ?>/assets/img/work/php2.png" data-lightbox="img5"><i class="fa fa-search"></i></a>
            </div>
          </div>
          <div class="browse-box">
            <div class="more">
              <a href="https://github.com/JiyunShi"><i class="fa fa-arrow-circle-right"></i>BROWSE ALL</a>
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
        <h1 class="section-title wow fadeInLeft animated" data-wow-delay=".6s">What My<br>Friends <br><span>Says</span></h1>
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
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/Stephen.jpg" alt="">
                    </div>
                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="info">
                        
                      <p><br /><br />   <br />Simply talented! <br /><br />
Can work independently, less or no supervision required, and get things done without a glitch<br/><br /><br /></p>
                      <h4>Stephen Chiong</h4>
                      
                      <h5>Professor in the Computer Science department, Douglas</h5>
                      
                    </div>
                  </div>
                </div>
              
            </div>

            <div class="item">
              
                <div class="commant">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="claint">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/Shiv.jpeg" alt="">
                    </div>
                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="info">
                      <p>It's is rare to come across a guy who is really hardworking and has a real passion for what they do and Joey is one of them. Unlike other guys who just like to study for getting good grades, Joey likes to look at the practical aspects of the stuff and try to enlarge the scope, so that it can be applicable for wider area of application. We have worked together for many projects and I can say he's really a good team player - very responsible and friendly. As a business graduate and a decade of working experience, he has good knowledge of how to work with others as a team and this knowledge comes handy while we working together on new project.</p>
                      <h4>Shiv Kumar</h4>
                      <h5>Student - Computer and Information System, Douglas</h5>
                    </div>
                  </div>
                </div>
              
            </div>
            <div class="item">
              
                <div class="commant">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="claint">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/Bland.jpg" alt="">
                    </div>
                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="info">
                      <p>I have been worked with Joey in same company for around 5 years, I have watched him rapidly advanced from Junior assistant to be Senior responsible for this department. He has excelent analysis and creative problem-solving capability, we are all impressed by his logic sense in daily work. His personality is very easy-going and open minded. He has great relationship with company oversea office as well as local teammates. As a member of company social committee, he always takes active part in charity activities and company outdoor activities<br/><br/></p>
                      <h4>Bland Zhao</h4>
                      <h5>Senior product developer, H&M Asia headquarter</h5>
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
      <div class="col-sm-6 col-md-3 wow fadeInUp animated skillStart" data-wow-delay="1.2s">
        <div class="fact-block">
          <div class="circle one">
            <div class="count-info">
              <h3><span id="circleOne" class="counter">65%</span></h3>
              <h4>JS/Node</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
        <div class="fact-block">
          <div class="circle two">
            <div class="count-info">
              <h3><span id="circleTwo" class="counter">75%</span></h3>
              <h4>HTML/CSS</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
        <div class="fact-block">
          <div class="circle three">
            <div class="count-info">
              <h3><span id="circleThree" class="counter">70%</span></h3>
              <h4>WORDPRESS</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="1.2s">
        <div class="fact-block">
          <div class="circle Four">
            <div class="count-info">
              <h3><span id="circleFour" class="counter">65%</span></h3>
              <h4>JAVA/ANDROID</h4>
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
        
        <?php  if ( have_posts() && wp_count_posts()->publish>=5 ) :  
            $args = array( 'numberposts' => '5' ,'post_status' => 'publish');
            $recent_posts = wp_get_recent_posts( $args, OBJECT );

            $this_post = $recent_posts[0];
            
       ?>
       <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
          <div class="blog-large wow fadeInLeft animated"  data-wow-delay="1.2s">
            <?php if( has_post_thumbnail($this_post)): ?>
            <img src="<?php echo get_the_post_thumbnail_url($this_post)?>" alt="">
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img1.jpg" alt="">
            <?php endif; ?>
            <div class="large">
              <a class="title" href="<?php echo esc_url( get_permalink($this_post) ); ?>"><?php echo get_the_title($this_post); ?> </a>
              <p><?php echo wp_trim_words($this_post->post_content, 20); $this_post = $recent_posts[1];?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight animated" data-wow-delay="1.6s">
          <div class="blog-item">
            <?php if( has_post_thumbnail($this_post)): ?>
            <img src="<?php echo get_the_post_thumbnail_url($this_post)?>" alt="">
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img2.jpg" alt="">
            <?php endif; ?>
            <div class="content">
              <a class="title" href="<?php echo esc_url( get_permalink($this_post) ); ?>"><?php echo get_the_title($this_post); ?> </a>
              <p><?php echo wp_trim_words($this_post->post_content, 10); $this_post = $recent_posts[2];?></p>
            </div>
          </div>
          <div class="blog-item">
            <?php if( has_post_thumbnail($this_post)): ?>
            <img src="<?php echo get_the_post_thumbnail_url($this_post)?>" alt="">
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img3.jpg" alt="">
            <?php endif; ?>
            <div class="content">
              <a class="title" href="<?php echo esc_url( get_permalink($this_post) ); ?>"><?php echo get_the_title($this_post); ?> </a>
              <p><?php echo wp_trim_words($this_post->post_content, 10); $this_post = $recent_posts[3];?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight animated" data-wow-delay="1.8s">
          <div class="blog-item">
            <?php if( has_post_thumbnail($this_post)): ?>
            <img src="<?php echo get_the_post_thumbnail_url($this_post)?>" alt="">
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img3.jpg" alt="">
            <?php endif; ?>
            <div class="content">
              <a class="title" href="<?php echo esc_url( get_permalink($this_post) ); ?>"><?php echo get_the_title($this_post); ?> </a>
              <p><?php echo wp_trim_words($this_post->post_content, 10); $this_post = $recent_posts[4];?></p>
            </div>
          </div>
          <div class="blog-item">
            <?php if( has_post_thumbnail($this_post)): ?>
            <img src="<?php echo get_the_post_thumbnail_url($this_post)?>" alt="">
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img2.jpg" alt="">
            <?php endif; ?>
            <div class="content">
              <a class="title" href="<?php echo esc_url( get_permalink($this_post) ); ?>"><?php echo get_the_title($this_post); ?> </a>
              <p><?php echo wp_trim_words($this_post->post_content, 10); wp_reset_query();?></p>
            </div>
          </div>
        </div>     
            
            
        <?php  else: ?><!-- if no post in database -->
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
        <?php endif; ?>
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
          <form action="<?php echo admin_url( 'admin-post.php' ) ?>" name="contact" method="post">
              <input type="hidden" name="action" value="process_form">
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
              <li><i class="fa fa-mobile"></i> （778）302-7625</li>
             
              <li><i class="fa fa-envelope-o"></i> brightnk@outlook.com</li>
            </ul>
          
          <h2>Follow Me</h2>
            <ul class="social-icon">
              <li><a href="https://github.com/JiyunShi"><i class="fa fa-github"></i></a></li>
              <li><a href="https://www.facebook.com/jiyun.shi.35"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.linkedin.com/in/jiyunshi/"><i class="fa fa-linkedin"></i></a></li>

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
   <!-- Jumble JS plugin for animation -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jumble.js"></script>
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