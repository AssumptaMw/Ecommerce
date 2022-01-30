<?php include ("./Layout/header.php"); ?>
<?php include ("./Partials/navbar.php"); ?>

<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product_image_content">
                    <div class="product__details__pic">
                        <img class="product__big__img" src="images/Carousel-2.jpg" alt="" style="width: 100%; height: auto; display: block; pointer-events: none;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product__details__text">
                    <h3>Essential structured blazer <span>Brand: SKMEIMore Men Watches from SKMEI</span></h3>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>( 138 reviews )</span>
                    </div>
                    <div class="product__details__price">$ 75.0 <span>$ 83.0</span></div>
                    <p>Nemo enim ipsam voluptatem quia aspernatur aut odit aut loret fugit, sed quia consequuntur
                        magni lores eos qui ratione voluptatem sequi nesciunt.</p>
                    <ul class="tags">
                        <li><span>Category :</span> Men’s Wear</li>
                        <li><span>Tags :</span> man, shirt, dotted, elegant, cool</li>
                    </ul>
                    <div class="product__details__button">
                        <div class="quantity">
                            <span>Quantity:</span>
                            <div class="pro-qty">
                                    <span class="dec qtybtn">-</span>
                                    <input type="text" value="1">
                                    <span class="inc qtybtn">+</span>
                            </div>
                        </div>
                        <a href="#" class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a>
                    </div>
                    <div class="product__details__widget">
                        <ul>
                            <li>
                                <span>Available color:</span>
                                <div class="color__checkbox">
                                    <label for="red">
                                        <input type="radio" name="color__radio" id="red" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="black">
                                        <input type="radio" name="color__radio" id="black">
                                        <span class="checkmark black-bg"></span>
                                    </label>
                                    <label for="grey">
                                        <input type="radio" name="color__radio" id="grey">
                                        <span class="checkmark grey-bg"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Available size:</span>
                                <div class="size__btn">
                                    <label for="xs-btn" class="active">
                                        <input type="radio" id="xs-btn">
                                        xs
                                    </label>
                                    <label for="s-btn">
                                        <input type="radio" id="s-btn">
                                        s
                                    </label>
                                    <label for="m-btn">
                                        <input type="radio" id="m-btn">
                                        m
                                    </label>
                                    <label for="l-btn">
                                        <input type="radio" id="l-btn">
                                        l
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Promotions:</span>
                                <p>Free shipping</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('./Partials/FOOTER.php'); ?>
<?php include('./Layout/footer.php'); ?>
