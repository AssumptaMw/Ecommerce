<?= $this->extend('Layouts/master');?>
<?= $this->section('content');?>

<header>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-4 col-12 "></div>

            <div class="col-md-4 col-12 text-center ">
                <h2 class="my-md-3 site-title">ManSan Boutique</h2>
            </div>
            <div class="col-md-4 col-12 text-right ">
                <p class="my-md-4 header-links">
                    <?php if (session()->get('isLoggedIn')):?>
                        <a href="<?=route_to('logout')?>" class="px-2">Logout</a>

                    <?php else:?>
                        <a href="<?=route_to('login')?>" class="px-2">Login</a>
                        <a href="<?=route_to('register')?>" class="px-1">Register</a>
                    <?php endif;?>
                </p>
            </div>

        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="features.php">FEATURES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CATEGORIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT US</a>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="navbar-nav">
                <li class="nav-item border rounded-circle mx-2 search-icon">
                    <i class="fas fa-search p-2"></i>
                </li>
                <li class="nav-item border rounded-circle mx-2 cart-icon">
                    <i class="fas fa-shopping-cart p-2">
                        <!--number of items in the cart-->
                        <span class="num-cart-product">0</span>
                    </i>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>We Are ManSan Boutique</h4>
                            <span>Always on Fashion</span>
                            <div class="main-border-button">
                                <a href="#">Purchase Now!</a>
                            </div>
                        </div>
                        <img src="images/Background.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Women</h4>
                                        <span>Best Clothes For Women</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Women</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/Carousel-2.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Men</h4>
                                        <span>Best Clothes For Men</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Men</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/Carousel-5.jpeg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Kids</h4>
                                        <span>Best Clothes For Kids</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Kids</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/Carousel-3.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Pets</h4>
                                        <span>Best Trend For Pets</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Pets</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/Carousel-4.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!----Popular Items Start -->
<div class="popular-items pt-50 p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="popular-img">
                        <img src="images/Official-Man-7.jpeg" alt="">
                        <div class="img-cap">
                            <span>MEN</span>
                        </div>
                        <div class="favorit-items">
                            <a href="shop.php" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="popular-img">
                        <img src="images/Slide-2.jpg" alt="">
                        <div class="img-cap">
                            <span>WOMEN</span>
                        </div>
                        <div class="favorit-items">
                            <a href="shop.php" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="popular-img">
                        <img src="images/Official-Child-2.jpg" alt="">
                        <div class="img-cap">
                            <span>KIDS</span>
                        </div>
                        <div class="favorit-items">
                            <a href="shop.php" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="popular-img">
                        <img src="images/Dog.jpg" alt="">
                        <div class="img-cap">
                            <span>PETS</span>
                        </div>
                        <div class="favorit-items">
                            <a href="shop.php" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----Popular Items Start -->

<?= $this->include('partials/footer') ?>
<?= $this->endSection();?>
