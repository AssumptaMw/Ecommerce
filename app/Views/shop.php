<?php include ("./Layout/header.php"); ?>
<?php include ("./Partials/navbar.php"); ?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="shop__sidebar">
                    <div class="sidebar__categories">
                        <div class="section-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="categories__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading active">
                                        <a data-toggle="collapse" data-target="#collapseOne">Women</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="#">Formal</a></li>
                                                <li><a href="#">Casual</a></li>
                                                <li><a href="#">Sports</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Men</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="#">Formal</a></li>
                                                <li><a href="#">Casual</a></li>
                                                <li><a href="#">Sports</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Kids</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="#">Formal</a></li>
                                                <li><a href="#">Casual</a></li>
                                                <li><a href="#">Sports</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour">Pets</a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="#">Dogs</a></li>
                                                <li><a href="#">Cats</a></li>
                                                <li><a href="#">Others</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="sidebar__filter">
                        <div class="section-title">
                            <h4>Shop by price</h4>
                        </div>
                        <div class="filter-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                 data-min="33" data-max="99"></div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <p>Price:</p>
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                        <a href="#">Filter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg"  style="background-image: url('images/Carousel-2.jpg');" >
<!--                                <img src="images/Official-Man-7.jpeg" alt="">-->
                                <div class="label">Sale</div>
                                <ul class="product__hover">
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="details.php">Water resistant zips backpack</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" style="background-image: url('images/Carousel-3.jpg');">
                                <div class="label stockout stockblue">Out Of Stock</div>
                                <ul class="product__hover">
                                    <li><a href="images/Carousel-3.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Cotton T-Shirt</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" style="background-image: url('images/Carousel-4.jpg');">
                                <ul class="product__hover">
                                    <li><a href="img/shop/shop-7.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Circular pendant earrings</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="pagination__option">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End

<?php include('./Partials/FOOTER.php'); ?>
<?php include('./Layout/footer.php'); ?>