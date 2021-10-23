<?= $this->extend('Layouts/master');?>
<?= $this->section('content');?>

<header>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-4 col-12 "></div>

            <div class="col-md-4 col-12 text-center ">
                <h2 class="my-md-3 site-title">ManSan Boutique</h2>
            </div>
            <div class="col-md-4 col-12 text-end ">
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


    <!--Full Slider-->


    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/Carousel-Man-3.jfif  " alt="" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>Men Wear</h3>
                    <p>Feel Great!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/Carousel-2.jpg" alt="" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>Women Wear</h3>
                    <p>Feel Great!</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="/images/Carousel-3.jpg" alt="" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>Kids' Wear</h3>
                    <p>Feel Great!</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="/images/Carousel-4.jpg" alt="" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>Pets' Wear</h3>
                    <p>Feel Great!</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>



</main>

<section class="specials">

    <h1 class="below-fold">MEN'S WEAR</h1>

    <div class="row">
        <div class="col-3 px-0">
            <div class="card" >
                <img src="/images/Official-Man-3.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Official Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

        <div class="col-3 px-0">
            <div class="card" >
                <img src="/images/Casual-Man-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casual Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

        <div class="col-3 px-0">
            <div class="card" >
                <img src="/images/Sport-Man-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sport Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

    </div>


    <hr>



    <h1 class="below-fold">WOMEN'S WEAR</h1>

    <div class="row">
        <div class="col-3 px-0">
            <div class="card" >
                <img src="/images/Official-Lady-1.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Official Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

        <div class="col-3 px-0">
            <div class="card" >
                <img src="/images/Slide-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casual Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

        <div class="col-3 px-0">
            <div class="card" >
                <img src="/images/Sport-Lady.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sport Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

    </div>


    <hr>



    <h1 class="below-fold">KIDS' WEAR</h1>

    <div class="row">
        <div class="col-3 px-0">
            <div class="card" >
                <img src="/images/Official-Child-2.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Official Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

        <div class="col-3 px-0">
            <div class="card" >
                <img src="/images/Casual-Child.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casual Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

        <div class="col-3 px-0">
            <div class="card" >
                <img src="/images/Sport-Children.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sport Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

    </div>


    <hr>


    <h1 class="below-fold">PETS' WEAR</h1>

    <div class="row">
        <div class="col-3 px-0">
            <div class="card" >
                <img src="/images/Dog-2.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Dog Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

        <div class="col-3 px-0">
            <div class="card" >
                <img src="/images/Cat-1.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cat Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

        <div class="col-3 px-0">
            <div class="card" >
                <img src="/images/Cat-2.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Others</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

    </div>



</section>

<footer>
    <div class="info">

        <div class="rows">

            <div class="column_open">
                <h3>Opening Hours</h3>
                <ul>
                    <li>Mond - Fri: 8:00am - 10:00pm</li>
                    <li>Saturday: 9:00am - 10:00 pm</li>
                    <li>Sunday: 12:00pm - 10:00pm</li>

                </ul>
            </div>

            <div class="icons">
                <h3>Find Us</h3>
                <ul>
                    <li><a href="https://facebook.com/"><i class="fab fa-facebook" > Facebook </i></a></li>
                    <li><a href="https://instagram.com/"><i class="fab fa-instagram" > Instagram </i></a></li>
                    <li><a href="https://fa-linkedin.com/"><i class="fab fa-linkedin" > Linkedin </i></a></li>
                    <li><a href="https://fa-youtube.com/"><i class="fab fa-youtube" > YouTube </i></a></li>
                    <li><a href="https://fa-twitter.com/"><i class="fab fa-twitter" > Twitter </i></a></li>

                </ul>
            </div>
            <div class="column news" >
                <h1 class="column_news">News Letter</h1>
                <p class="column_news">Subscribe to stay Updated on our new Arrivals</p>
                <form action="#">
                    <input type="email" class="newsinput" placeholder="Enter email address">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="copy">
        <div class="rows">
            <div class="column1">
                <p>ManSan Boutique | 2021  &nbsp; - &nbsp; Assumpta </p>
            </div>

        </div>
    </div>

</footer>

<?= $this->endSection();?>

