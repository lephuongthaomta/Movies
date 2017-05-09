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
            <img alt='top banner' src="<?php echo Yii::app()->request->baseUrl; ?>/images/banners/bra.jpg">
        </div>

        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
                <a href='index.html' class="logo">
                    <img alt='logo' src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png">
                </a>
                
                <!-- Main website navigation-->
                <!-- Thanh menu-- gọi widgets>-->
               
                 <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                    </a>
                    
                    <!-- Link navigation -->
                    <ul id="navigation">
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Trang chủ</a>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Giới thiệu</a>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="page-elements.html">Lịch chiếu</a>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="page-elements.html">Phim</a>
                            <ul>
                                <li class="menu__nav-item"><a href="#">Phim đang chiếu</a></li>
                                <li class="menu__nav-item"><a href="#">Phim bán vé sớm</a></li>
                                <li class="menu__nav-item"><a href="#">Phim hay sắp chiếu</a></li>
                                <li class="menu__nav-item"><a href="#">Liên hoan phim</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="gallery-four.html">Tin tức</a>
                            <ul>
                                <li class="menu__nav-item"><a href="gallery-four.html">Tin tức</a></li>
                                <li class="menu__nav-item"><a href="gallery-three.html">Khuyến mãi</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Giá vé</a>
                            
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Hỏi đáp</a>
                        </li>
                         <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Thành viên</a>
                        </li>
                    </ul>
                </nav>
                


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
                    <a href="#" class="btn btn-md btn--warning btn--book btn-control--home login-window">Đăng ký</a>
                </div>

            </div>
        </header>
        
        
        <!-- Main content -->
       <div class="search-wrapper">
            <div class="container container--add">
                <form id='search-form' method='get' class="search">
                    <input type="text" class="search__field" placeholder="Search">
                    <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="1" selected='selected'>By title</option>
                        <option value="2">By year</option>
                        <option value="3">By producer</option>
                        <option value="4">By title</option>
                        <option value="5">By year</option>
                    </select>
                    <button type='submit' class="btn btn-md btn--danger search__button">search a movie</button>
                </form>
            </div>
        </div>
        
        <!-- Main content -->
        <section class="container">
            <div class="overflow-wrapper">
                <div class="col-sm-8 col-md-9">
                
                    <h2 class="page-heading">News</h2>
                    
                    <!-- News post article-->
                    <article class="post post--news">
                        <a href='single-page-left.html' class="post__image-link">
                            <img alt='' src="http://placehold.it/1600x600">
                        </a>

                        <h1><a href="single-page-left.html" class="post__title-link">Donec eu mollis augue, ut egestas leo</a></h1>
                        <p class="post__date">29 October 2013 </p>

                        <div class="wave-devider"></div>

                        <p class="post__text">Mauris gravida ipsum vitae libero molestie eget dignissim ipsum egestas. Quisque in eros id velit molestie placerat a ut arcu. Etiam consequat, turpis ac commodo rhoncus, justo enim consequat tortor, vitae interdum odio tellus at sem. Aliquam lacus quam, lobortis sed lacus eget, commodo volutpat nunc. Text link sample. Proin accumsan diam vel nulla ultrices congue.</p> 

                        <div class="tags">
                                <ul>
                                    <li class="item-wrap"><a href="#" class="tags__item">news</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">movie</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">ceremony</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">award</a></li>
                                </ul>
                        </div>

                        <div class="devider-huge"></div>
                    </article> 
                    <!-- end news post article-->

                    

                    <!-- News post article-->
                    <article class="post post--news">
                        <a href='single-page-left.html' class="post__image-link">
                            <img alt='' src="http://placehold.it/1600x600">
                        </a>

                        <h1><a href="single-page-left.html" class="post__title-link">Donec eu mollis augue, ut egestas leo</a></h1>
                        <p class="post__date">29 October 2013 </p>

                        <div class="wave-devider"></div>

                        <p class="post__text">Mauris gravida ipsum vitae libero molestie eget dignissim ipsum egestas. Quisque in eros id velit molestie placerat a ut arcu. Etiam consequat, turpis ac commodo rhoncus, justo enim consequat tortor, vitae interdum odio tellus at sem. Aliquam lacus quam, lobortis sed lacus eget, commodo volutpat nunc. Text link sample. Proin accumsan diam vel nulla ultrices congue.</p> 

                        <div class="tags">
                                <ul>
                                    <li class="item-wrap"><a href="#" class="tags__item">news</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">movie</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">ceremony</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">award</a></li>
                                </ul>
                        </div>

                        <div class="devider-huge"></div>
                    </article> 
                    <!-- end news post article-->

                    <!-- News post article-->
                    <article class="post post--news">
                        <a href='single-page-left.html' class="post__image-link">
                            <img alt='' src="http://placehold.it/1600x600">
                        </a>

                        <h1><a href="single-page-left.html" class="post__title-link">Donec eu mollis augue, ut egestas leo</a></h1>
                        <p class="post__date">29 October 2013 </p>

                        <div class="wave-devider"></div>

                        <p class="post__text">Mauris gravida ipsum vitae libero molestie eget dignissim ipsum egestas. Quisque in eros id velit molestie placerat a ut arcu. Etiam consequat, turpis ac commodo rhoncus, justo enim consequat tortor, vitae interdum odio tellus at sem. Aliquam lacus quam, lobortis sed lacus eget, commodo volutpat nunc. Text link sample. Proin accumsan diam vel nulla ultrices congue.</p> 

                        <div class="tags">
                                <ul>
                                    <li class="item-wrap"><a href="#" class="tags__item">news</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">movie</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">ceremony</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">award</a></li>
                                </ul>
                        </div>

                        <div class="devider-huge"></div>
                    </article> 
                    <!-- end news post article-->

                    <!-- News post article-->
                    <article class="post post--news">
                        <a href='single-page-left.html' class="post__image-link">
                            <img alt='' src="http://placehold.it/1600x600">
                        </a>

                        <h1><a href="single-page-left.html" class="post__title-link">Donec eu mollis augue, ut egestas leo</a></h1>
                        <p class="post__date">29 October 2013 </p>

                        <div class="wave-devider"></div>

                        <p class="post__text">Mauris gravida ipsum vitae libero molestie eget dignissim ipsum egestas. Quisque in eros id velit molestie placerat a ut arcu. Etiam consequat, turpis ac commodo rhoncus, justo enim consequat tortor, vitae interdum odio tellus at sem. Aliquam lacus quam, lobortis sed lacus eget, commodo volutpat nunc. Text link sample. Proin accumsan diam vel nulla ultrices congue.</p> 

                        <div class="tags">
                                <ul>
                                    <li class="item-wrap"><a href="#" class="tags__item">news</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">movie</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">ceremony</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">award</a></li>
                                </ul>
                        </div>

                        <div class="devider-huge"></div>
                    </article> 
                    <!-- end news post article-->

                    <!-- News post article-->
                    <article class="post post--news">
                        <a href='single-page-left.html' class="post__image-link">
                            <img alt='' src="http://placehold.it/1600x600">
                        </a>

                        <h1><a href="single-page-left.html" class="post__title-link">Donec eu mollis augue, ut egestas leo</a></h1>
                        <p class="post__date">29 October 2013 </p>

                        <div class="wave-devider"></div>

                        <p class="post__text">Mauris gravida ipsum vitae libero molestie eget dignissim ipsum egestas. Quisque in eros id velit molestie placerat a ut arcu. Etiam consequat, turpis ac commodo rhoncus, justo enim consequat tortor, vitae interdum odio tellus at sem. Aliquam lacus quam, lobortis sed lacus eget, commodo volutpat nunc. Text link sample. Proin accumsan diam vel nulla ultrices congue.</p> 

                        <div class="tags">
                                <ul>
                                    <li class="item-wrap"><a href="#" class="tags__item">news</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">movie</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">ceremony</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">award</a></li>
                                </ul>
                        </div>

                        <div class="devider-huge"></div>
                    </article> 
                    <!-- end news post article-->

                    <!-- News post article-->
                    <article class="post post--news">
                        <a href='single-page-left.html' class="post__image-link">
                            <img alt='' src="http://placehold.it/1600x600">
                        </a>

                        <h1><a href="single-page-left.html" class="post__title-link">Donec eu mollis augue, ut egestas leo</a></h1>
                        <p class="post__date">29 October 2013 </p>

                        <div class="wave-devider"></div>

                        <p class="post__text">Mauris gravida ipsum vitae libero molestie eget dignissim ipsum egestas. Quisque in eros id velit molestie placerat a ut arcu. Etiam consequat, turpis ac commodo rhoncus, justo enim consequat tortor, vitae interdum odio tellus at sem. Aliquam lacus quam, lobortis sed lacus eget, commodo volutpat nunc. Text link sample. Proin accumsan diam vel nulla ultrices congue.</p> 

                        <div class="tags">
                                <ul>
                                    <li class="item-wrap"><a href="#" class="tags__item">news</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">movie</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">ceremony</a></li>
                                    <li class="item-wrap"><a href="#" class="tags__item">award</a></li>
                                </ul>
                        </div>

                        <div class="devider-huge"></div>
                    </article> 
                    <!-- end news post article-->

                    <div class="pagination">
                        <a href='#' class="pagination__prev">prev</a>
                        <a href='#' class="pagination__next">next</a>
                    </div>

                </div>
        
            <aside class="col-sm-4 col-md-3">
                <div class="sitebar">
                    <div class="category category--popular marginb-sm">
                        <h3 class="category__title">the Most <br><span class="title-edition">popular posts</span></h3>
                        <ul>
                            <li><a href="#" class="category__item">The best movie to see this month</a></li>
                            <li><a href="#" class="category__item">Look forward to films such as 'Saving Mr Banks', 'The Book Thief' and 'Robocop'</a></li>
                            <li><a href="#" class="category__item">The 100 best romantic movies</a></li>
                            <li><a href="#" class="category__item">The 50 greatest animated films</a></li>
                            <li><a href="#" class="category__item">Tickets to Taste of Christmas</a></li>
                            <li><a href="#" class="category__item">10 best film pop-ups this week</a></li>
                            <li><a href="#" class="category__item">How to take a part in ‘Star Wars’</a></li>
                        </ul>
                    </div>

                    <div class="banner-wrap">
                        <img alt='banner' src="http://placehold.it/500x500">
                    </div>

                    <div class="category category--discuss marginb-sm">
                        <h3 class="category__title">the Most <br><span class="title-edition">discussed posts</span></h3>
                        <ul>
                            <li><a href="#" class="category__item">The best movie to see this month</a></li>
                            <li><a href="#" class="category__item">Look forward to films such as 'Saving Mr Banks', 'The Book Thief' and 'Robocop'</a></li>
                            <li><a href="#" class="category__item">The 100 best romantic movies</a></li>
                            <li><a href="#" class="category__item">The 50 greatest animated films</a></li>
                            <li><a href="#" class="category__item">Tickets to Taste of Christmas</a></li>
                            <li><a href="#" class="category__item">10 best film pop-ups this week</a></li>
                            <li><a href="#" class="category__item">How to take a part in ‘Star Wars’</a></li>
                        </ul>
                    </div>
                    
                    <div class="banner-wrap">
                        <img alt='banner' src="http://placehold.it/500x500">
                    </div>

                    <div class="category category--light categoty--position marginb-sm">
                        <h3 class="category__title">browse<br><span class="title-edition">by section</span></h3>
                        <ul>
                            <li><a href="#" class="category__item">Showtimes &amp; Tickets (12345)</a></li>
                            <li><a href="#" class="category__item">Latest Trailers (3153)</a></li>
                            <li><a href="#" class="category__item">Coming Soon (3153)</a></li>
                            <li><a href="#" class="category__item">In Theaters (31)</a></li>
                            <li><a href="#" class="category__item">Release Calendar (314)</a></li>
                            <li><a href="#" class="category__item">Movies (654)</a></li>
                            <li><a href="#" class="category__item">Stars (241)</a></li>
                            <li><a href="#" class="category__item">In Theaters (8423)</a></li>
                            <li><a href="#" class="category__item">Release Calendar (246)</a></li>
                            <li><a href="#" class="category__item">Movies (18)</a></li>
                            <li><a href="#" class="category__item">Stars (471)</a></li>
                        </ul>
                    </div>

                    <h3 class="heading-special lower--hight">tags</h3>
                    <ul class="tags tags--dark">
                        <li class="item-wrap"><a href="#" class="tags__item">lorem ipsum </a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">consectetur</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">gravida</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">adipiscing</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">nunc ante</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">dapibus nec</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">commodo nec</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">quis justo</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">lorem ipsum </a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">consectetur</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">adipiscing</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">nunc ante</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">dapibus nec</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">commodo nec</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item">quis justo</a></li>
                    </ul>

                    <h3 class="heading-special">accordion<br><span class="heading-edition">widget</span></h3>

                    <!-- Light accordion-->
                    <!-- Accordion markup-->
                        <div class="panel-group accordion-light" id="accordion">

                          <!-- Accordion item -->
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                  <span class="marker">
                                    <span class="custom1">+</span>
                                    <span class="custom2">-</span>
                                  </span>
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                              <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras scelerisque libero a ante viverra vel scelerisque orci tristique. Nullam nisl massa, ullamcorper id condimentum porta, cursus a lorem. 
                              </div>
                            </div>
                          </div>
                          <!-- end accordion item -->
                        
                          <!-- Accordion item -->
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                  <span class="marker">
                                    <span class="custom1">+</span>
                                    <span class="custom2">-</span>
                                  </span>
                                  Aenean sed neque rhoncus. 
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in">
                              <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras scelerisque libero a ante viverra vel scelerisque orci tristique. Nullam nisl massa, ullamcorper id condimentum porta, cursus a lorem. 
                              </div>
                            </div>
                          </div>
                          <!-- end accordion item -->
                        
                          <!-- Accordion item -->
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                 <span class="marker">
                                    <span class="custom1">+</span>
                                    <span class="custom2">-</span>
                                  </span>
                                 Sed adipiscing vel felis et placerat.
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras scelerisque libero a ante viverra vel scelerisque orci tristique. Nullam nisl massa, ullamcorper id condimentum porta, cursus a lorem. 
                              </div>
                            </div>
                          </div>
                          <!-- end accordion item -->
                        </div>
                    <!-- end accordion -->

                    <h3 class="heading-special">latest<br><span class="heading-edition">tweets</span></h3>
                    <div id="twitter-feed" class="twitter--large"></div>

                </div>
            </aside>
            </div>
        </section>
        
        
        <div class="clearfix"></div>

        <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="/menuLeft.php" class="nav-link__item">Cities</a></li>
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
                        <p class="copy">&copy; A.Movie, 2013. All rights reserved. Done by Olia Gozha</p>
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
