<!doctype html>
<html>
<head>
    <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Movie</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
    
    <!-- Mobile Specific Metas-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
        <!-- Open Sans -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->

        <!-- Mobile menu -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="css/external/jquery.selectbox
        .css" rel="stylesheet" />

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/rs-plugin/css/settings.css" media="screen" />
    
        <!-- Custom -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css?v=1" rel="stylesheet" />


        <!-- Modernizr --> 
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/external/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
        <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
        <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>       
    <![endif]-->
</head>

<body>
     <div class="wrapper">
        <!-- Banner -->
        <div class="banner-top">
            <img alt='top banner' src="<?php echo Yii::app()->request->baseUrl; ?>/images/banners/nen.jpeg">
        </div>

        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
                <a href='<?php echo Yii::app()->request->baseUrl; ?>' class="logo">
                    <img alt='logo' src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png">
                </a>
                
                <!-- Main website navigation-->
                <!-- Thanh menu-- gọi widgets>-->

               
                <?php  $this->widget('application.widgets.menu'); ?>
                


                <!-- Additional header buttons / Auth and direct link to booking-->
                <div class="control-panel">
                    <div class="auth auth--home">
                      <div class="auth__show">
                        <span class="auth__image">
                          <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/client-photo/auth.png">
                        </span>
                      </div>
                      <a href="" class="btn btn--sign btn--singin">
                          me
                      </a>
                        <ul class="auth__function">
                            <li><a href="#" class="auth__function-item">Watchlist</a></li>
                            <li><a href="#" class="auth__function-item">Booked tickets</a></li>
                            <li><a href="#" class="auth__function-item">Discussion</a></li>
                            <li><a href="#" class="auth__function-item">Settings</a></li>
                        </ul>

                    </div>
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/login">Đăng nhập</a>
                </div>

            </div>
        </header>

           <?php  $this->widget('application.widgets.slideshow'); ?>   

        <section class="container">
            <div class="movie-best">
                <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Phim hấp dẫn</div>
                <div class="col-sm-12 change--col">
                    <?php echo $content; ?>
                </div>
            </div>
        </section>        
                
        <div class="clearfix"></div>

        <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="" class="nav-link__item">Cities</a></li>
                        <li><a href="movie-list-left.html" class="nav-link__item">Movies</a></li>
                        <li><a href="trailer.html" class="nav-link__item">Trailers</a></li>
                        <li><a href="rates-left.html" class="nav-link__item">Rates</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="coming-soon.html" class="nav-link__item">Coming soon</a></li>
                        <li><a href="cinema-list.html" class="nav-link__item">Cinemas</a></li>
                        <li><a href="offers.html" class="nav-link__item">Best offers</a></li>
                        <li><a href="news-left.html" class="nav-link__item">News</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="/menuLeft.php" class="nav-link__item">Terms of use</a></li>
                        <li><a href="gallery-four.html" class="nav-link__item">Gallery</a></li>
                        <li><a href="contact.html" class="nav-link__item">Contacts</a></li>
                        <li><a href="page-elements.html" class="nav-link__item">Shortcodes</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small">A.Movie<br><span class="title-edition">in the social media</span></p>

                        <div class="social">
                            <a href='/menuLeft.php' class="social__variant fa fa-facebook"></a>
                            <a href='/menuLeft.php' class="social__variant fa fa-twitter"></a>
                            <a href='/menuLeft.php' class="social__variant fa fa-vk"></a>
                            <a href='/menuLeft.php' class="social__variant fa fa-instagram"></a>
                            <a href='/menuLeft.php' class="social__variant fa fa-tumblr"></a>
                            <a href='/menuLeft.php' class="social__variant fa fa-pinterest"></a>
                        </div>
                        
                        <div class="clearfix"></div>
                        <p class="copy">&copy; Movie, 2013. All rights reserved. Done by Olia Gozha</p>
                    </div>
                </div>
            </section>
        </footer>
    </div>

    <!-- open/close -->
        <div class="overlay overlay-hugeinc">
            
            <section class="container">

                <div class="col-sm-4 col-sm-offset-4">
                    <button type="button" class="overlay-close">Close</button>
                    <form id="login-form" class="login" method='get' novalidate=''>
                        <p class="login__title">sign in <br><span class="login-edition">welcome to Movie</span></p>

                        <div class="social social--colored">
                                <a href='/menuLeft.php' class="social__variant fa fa-facebook"></a>
                                <a href='/menuLeft.php' class="social__variant fa fa-twitter"></a>
                                <a href='/menuLeft.php' class="social__variant fa fa-tumblr"></a>
                        </div>

                        <p class="login__tracker">or</p>
                        
                        <div class="field-wrap">
                        <input type='email' placeholder='Email' name='user-email' class="login__input">
                        <input type='password' placeholder='Password' name='user-password' class="login__input">

                        <input type='checkbox' id='/menuLeft.phpinformed' class='login__check styled'>
                        <label for='/menuLeft.phpinformed' class='login__check-info'>remember me</label>
                         </div>
                        
                        <div class="login__control">
                            <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                            <a href="/menuLeft.php" class="login__tracker form__tracker">Forgot password?</a>
                        </div>
                    </form>
                </div>

            </section>
        </div>
    <!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- jQuery REVOLUTION Slider -->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Mobile menu -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/external/jquery.selectbox-0.2.min.js"></script>
        <!-- Stars rate -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/external/jquery.raty.js"></script>
        
        <!-- Form element -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/form.js"></script>

        <!-- Twitter feed -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/external/twitterfeed.js"></script>

        <!-- Custom -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
        
          <script type="text/javascript">
              $(document).ready(function() {
                init_Home();
              });
            </script>

</body>
</html>
