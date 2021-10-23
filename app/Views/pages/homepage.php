<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    <!--Slick Slider-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    
    <!--Custom StyleSheet-->
    <link rel="stylesheet" href="CSS/style.css">

    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@300&display=swap" rel="stylesheet">

    <!----Bootstrap carousel---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
      /*import fonts from google fonts*/
@import url("https://fonts.googleapis.com/css2?family=Anton&family=Gugi&family=Lato:wght@100&family=Roboto:wght@300&family=Sofia&display=swap");

:root {
  --light-blue: #64dfdf;
  --light-gray: #2b3032a1;
  --text-color: #ff686b;
  --roboto: "Roboto", sans-serif;
  --gugi: "Gugi", cursive;
  --sofia: "Sofia", cursive;
}

.light-gray {
  color: var(--light-gray);
}

.bg-primary-color {
  background-color: var(--light-blue) !important;
}

.text-color {
  color: var(--text-color);
}

.font-roboto {
  font-family: var(--roboto);
}

/*---everything---*/
/* html,body{
    margin: 0;
    padding: 0;
} */



/*header*/

header {
  background-color: var(--light-blue);
  font-family: var(--roboto);
}

header .site-title {
  font-family: var(--gugi);
}

.header-links a {
  font-size: 0.9em;
  text-decoration: none;
  color: black;
}

/*Navigation Menu*/

.navbar-nav {
  padding: 0.8em 0em;
}

.navbar-nav .nav-link {
  font-size: 0.9em;
  font-weight: 500;
  color: var(--light-gray) !important;
}

.navbar-nav .nav-item .nav-link {
  padding: 0 1.3em;
}

.navbar-nav .cart-icon {
  margin-right: 6.5rem !important;
}
.fa-search,
.fa-shopping-cart {
  position: relative;
}
.num-cart-product {
  position: absolute;
  top: -17px;
  right: -17px;
  width: 25px;
  height: 25px;
  font-size: 0.8rem;
  border-radius: 50%;
  background-color: #fdbb04;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  font-weight: 400;
}


.carousel-item img{
  min-height: 100vh;
  position: relative;
  height: auto;
  border: 0;
}


/*-----Below Fold Categories ------*/

.specials {
  width: 80%;
  margin: auto;
  text-align: center;
  padding-top: 100px;
}

.row {
  margin-top: 5%;
  display: flex;
  justify-content: space-between;
}

.special-col {
  flex: 1 0 0;
  flex-basis: 31%;
  background: #fff3f3;
  border-radius: 10px;
  margin-bottom: 5%;
  padding: 20px 12px;
  box-sizing: border-box;
  transition: 0.5s;
  /* display: inline-block; */
}
.specials .card {
  width: 110%;
  background: #fff3f3;
  padding: 0.7rem;
  border: none;
  justify-content: space-between;
}
.specials img {
  width: 100%;
  border-radius: 10px;
}

h3 {
  text-align: center;
  font-weight: 600;
  margin: 10px 0;
}

.specials .card:hover {
  box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
}

@media (max-width: 700px) {
  .row {
    flex-direction: column;
  }
}

.below-fold {
  font-family: "Raleway", sans-serif;
}

.below-fold-men {
  display: flex;
  justify-content: space-around;
}

.below-fold-men-images {
  width: 33%;
  transform: scale(0.9);
}

h1.below-fold {
  color: rgb(34, 33, 33);
  text-align: center;
  margin-top: 2%;
}

.below-fold-wears {
  display: flex;
  width: 96%;
  margin-left: 2%;
}

h2.below-fold-official {
  margin-left: 12%;
  margin-right: 10%;
  background: rgb(0, 195, 255);
  margin-bottom: 0;
}

h2.below-fold-casual {
  margin-left: 15%;
  background: rgb(231, 179, 7);
  margin-bottom: 0;
}

h2.below-fold-sports {
  margin-left: 27%;
  background: rgb(10, 168, 5);
  margin-bottom: 0;
}

.below-fold-ladies {
  display: flex;
}

.visit-btn {
  margin-left: 44.6%;
  margin-top: 2%;
  margin-bottom: 2%;
  font-size: 1.4rem;
  border-radius: 5%;
  cursor: pointer;
}

h1.below-fold-ladies {
  color: rgb(34, 33, 33);
  margin-top: 2%;
  margin-left: 41.5%;
}

h1.below-fold-kids {
  color: rgb(34, 33, 33);
  margin-top: 2%;
  margin-left: 41.5%;
}

h1.below-fold-pets {
  color: rgb(34, 33, 33);
  margin-top: 2%;
  margin-left: 41.5%;
}

/* Footer */
footer {
  margin-top: 4%;
  padding: 0.3rem 0;
  background: black;
}

footer .column_open {
  color: #ffffff;
}

footer .icons {
  color: #ffffff;
}

footer .icons a {
  color: #64dfdf;
}

footer .icons a:hover {
  background: rgb(211, 172, 172);
  transition: 1s;
}

footer .column_news {
  color: #64dfdf;
}

footer .info {
  padding: 0 7rem;
}

footer .info li {
  padding: 0.2rem;
  list-style-type: none;
}

footer .news input {
  display: block;
  width: 100%;
  padding: 0.3rem 0.7rem;
  margin-bottom: 0.5rem;
}

footer .news button {
  display: inline-block;
  text-align: center;
  cursor: pointer;
  border: 1px solid #64dfdf;
  padding: 0.3rem 0.7rem;
  font-size: 1rem;
  border-radius: 0.25rem;
  background-color: #fdbb04;
}

footer .copy .column p {
  text-align: center;
  color: #777;
}

.icon .fa {
  color: #64dfdf;
  margin: 0 13px;
  cursor: pointer;
  padding: 18px 0;
}

.column1 {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  flex: 1 0 0;
  height: 10vh;
  color: #ffffff;
}

.rows {
  margin-top: 5%;
  display: flex;
  justify-content: space-between;
}

  </style>
</head>


<body>

<!--Header-->

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-12 ">
                
            </div>
                
            <div class="col-md-4 col-12 text-center ">
                <h2 class="my-md-3 site-title">ManSan Boutique</h2>
            </div>
            <div class="col-md-4 col-12 text right ">
                <p class="my-md-4 header-links">
                    <a href="login.php" class="px-2">Login</a> 
                    <a href="register.php" class="px-1">Register</a>
                  
                </p>
            </div>
            
        </div>
    </div>


    <div class="container-fluid p-0">
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

  <div class="navbar-nav">
      <li class="nav-item border rounded-circle mx-2 search-icon">
          <i class="fas fa-search p-2"></i>
      </li>
      <li class="nav-item border rounded-circle mx-2 cart-icon">
          <i class="fas fa-shopping-cart p-2">
          <!--number of items in the cart-->
          <span class="num-cart-product">0</span>
          </i>
      </li>
  </div>
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
      <img src="images/Carousel-Man-3.jfif  " alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Men Wear</h3>
        <p>Feel Great!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Carousel-2.jpg" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Women Wear</h3>
        <p>Feel Great!</p>
      </div> 
    </div>

    <div class="carousel-item">
        <img src="images/Carousel-3.jpg" alt="" class="d-block" style="width:100%">
        <div class="carousel-caption">
            <h3>Kids' Wear</h3>
            <p>Feel Great!</p>
        </div>  
    </div>

    <div class="carousel-item">
        <img src="images/Carousel-4.jpg" alt="" class="d-block" style="width:100%">
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
                <img src="images/Official-Man-3.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Official Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>
        
        <div class="col-3 px-0">
            <div class="card" >
                <img src="images/Casual-Man-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casual Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

        <div class="col-3 px-0">
            <div class="card" >
                <img src="images/Sport-Man-2.jpg" class="card-img-top" alt="...">
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
                <img src="images/Official-Lady-1.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Official Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>
        
        <div class="col-3 px-0">
            <div class="card" >
                <img src="images/Slide-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casual Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

        <div class="col-3 px-0">
            <div class="card" >
                <img src="images/Sport-Lady.jpg" class="card-img-top" alt="...">
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
                <img src="images/Official-Child-2.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Official Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>
        
        <div class="col-3 px-0">
            <div class="card" >
                <img src="images/Casual-Child.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casual Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

        <div class="col-3 px-0">
            <div class="card" >
                <img src="images/Sport-Children.jpg" class="card-img-top" alt="...">
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
                <img src="images/Dog-2.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Dog Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>
        
        <div class="col-3 px-0">
            <div class="card" >
                <img src="images/Cat-1.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cat Wear</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
            </div>
        </div>

        <div class="col-3 px-0">
            <div class="card" >
                <img src="images/Cat-2.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Others</h5>
                    <a href="menu.php" class="btn btn-secondary">View</a>
                </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</div>
</body>
</html>
