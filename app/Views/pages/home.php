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
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FEATURES</a>
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

<main>




    <!----Carousel Start------>
    <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#my" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active"> <img src="images/Carousel-2.jpg" class="d-block w-100"> </div>
            <div class="carousel-item"> <img src="images/Carousel-3.jpg" class="d-block w-100 h-100"> </div>
            <div class="carousel-item"> <img src="images/Carousel-4.jpg" class="d-block w-100"> </div>
            <div class="carousel-item"> <img src="images/Carousel-5.jpeg" class="d-block w-100"> </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
            <div class="icon"> <span class="fas fa-arrow-left"></span> </div> <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
            <div class="icon"> <span class="fas fa-arrow-right"></span> </div> <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!----Carousel End------>

    <!--? Popular Items Start -->
    <div class="popular-items pt-50 p-5">
        <div class="container-fluid">
            <h1 class="below-fold">MEN'S WEAR</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="popular-img">
                            <img src="images/Official-Man-7.jpeg" alt="">
                            <div class="img-cap">
                                <span>Official Wear</span>
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
                            <img src="images/Casual-Man-4.jpg" alt="">
                            <div class="img-cap">
                                <span>Casual Wear</span>
                            </div>
                            <div class="favorit-items">
                                <a href="shop.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="popular-img">
                            <img src="images/Sport-Man-2.jpg" alt="">
                            <div class="img-cap">
                                <span>Sports Wear</span>
                            </div>
                            <div class="favorit-items">
                                <a href="shop.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="below-fold">WOMEN'S WEAR</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="popular-img">
                            <img src="images/Official-Lady-1.jpg" alt="">
                            <div class="img-cap">
                                <span>Official Wear</span>
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
                                <span>Casual Wear</span>
                            </div>
                            <div class="favorit-items">
                                <a href="shop.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="popular-img">
                            <img src="images/Sport-Lady.jpg" alt="">
                            <div class="img-cap">
                                <span>Sports Wear</span>
                            </div>
                            <div class="favorit-items">
                                <a href="shop.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="below-fold">KIDS' WEAR</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="popular-img">
                            <img src="images/Official-Child-2.jpg" alt="">
                            <div class="img-cap">
                                <span>Official Wear</span>
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
                            <img src="images/Official-Child-2.jpg" alt="">
                            <div class="img-cap">
                                <span>Casual Wear</span>
                            </div>
                            <div class="favorit-items">
                                <a href="shop.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="popular-img">
                            <img src="images/Sport-Children.jpg" alt="">
                            <div class="img-cap">
                                <span>Sports Wear</span>
                            </div>
                            <div class="favorit-items">
                                <a href="shop.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="below-fold">PETS' WEAR</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="popular-img">
                            <img src="images/Dog-2.jpg" alt="">
                            <div class="img-cap">
                                <span>Dog Wear</span>
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
                            <img src="images/Cat-1.PNG" alt="">
                            <div class="img-cap">
                                <span>Cat Wear</span>
                            </div>
                            <div class="favorit-items">
                                <a href="shop.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="popular-img">
                            <img src="images/Cat-2.PNG" alt="">
                            <div class="img-cap">
                                <span>Others</span>
                            </div>
                            <div class="favorit-items">
                                <a href="shop.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Items End -->



<!--    <div class="parallax"></div>-->

    <?= $this->include('partials/footer') ?>
    <?= $this->endSection();?>


