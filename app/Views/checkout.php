<?php include ("./Layout/header.php"); ?>
<?php include ("./Partials/navbar.php"); ?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <span>Shopping cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!--Checkout Section Begin--->
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shop__cart__table">
                    <table>
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="cart__product__item">
                                <img src="images/Official-Man-2.jpg" alt="" style="width:80px; height:90px;">
                                <div class="cart__product__item__title">
                                    <h6>Chain bucket bag</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </td>
                            <td class="cart__price">$ 150.0</td>
                            <td class="cart__quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </td>
                            <td class="cart__total">$ 300.0</td>
                            <td class="cart__close"><span class="icon_close"></span></td>
                        </tr>
                        <tr>
                            <td class="cart__product__item">
                                <img src="images/Official-Man-5.jpg" alt="" style="width:80px; height:90px;">
                                <div class="cart__product__item__title">
                                    <h6>Zip-pockets pebbled tote briefcase</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </td>
                            <td class="cart__price">$ 170.0</td>
                            <td class="cart__quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </td>
                            <td class="cart__total">$ 170.0</td>
                            <td class="cart__close"><span class="icon_close"></span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="checkout__order">
                    <h5>Your order</h5>
<!--                    <div class="checkout__order__product">-->
<!--                        <ul>-->
<!--                            <li>-->
<!--                                <span class="top__text">Product</span>-->
<!--                                <span class="top__text__right">Total</span>-->
<!--                            </li>-->
<!--                            <li>01. Chain buck bag <span>$ 300.0</span></li>-->
<!--                            <li>02. Zip-pockets pebbled<br /> tote briefcase <span>$ 170.0</span></li>-->
<!--                            <li>03. Black jean <span>$ 170.0</span></li>-->
<!--                            <li>04. Cotton shirt <span>$ 110.0</span></li>-->
<!--                        </ul>-->
<!--                    </div>-->
                    <div class="checkout__order__total">
                        <ul>
                            <li>Subtotal <span>$ 750.0</span></li>
                            <li>Shipping <span>$ 20.0</span></li>
                            <li>Total <span>$ 770.0</span></li>
                        </ul>
                    </div>
                    <div class="checkout__order__widget">
                        <p class="fw-bold">Payment Method</p>
                        <div class="card">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span> PayPal </span> <img src="https://i.imgur.com/7kQEsHU.png" width="30">
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="card-body"> <input type="text" class="form-control" placeholder="Paypal email"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="d-flex align-items-center justify-content-between"> <span>Credit card</span>
                                                <div class="icons"> <img src="https://i.imgur.com/2ISgYja.png" width="30"> <img src="https://i.imgur.com/W1vtnOV.png" width="30"> <img src="https://i.imgur.com/35tC99g.png" width="30"> <img src="https://i.imgur.com/2ISgYja.png" width="30"> </div>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="card-body payment-card-body"> <span class="font-weight-normal card-text">Card Number</span>
                                                <div class="input"> <i class="fa fa-credit-card"></i> <input type="text" class="form-control" placeholder="0000 0000 0000 0000"> </div>
                                                <div class="row mt-3 mb-3">
                                                    <div class="col-md-6"> <span class="font-weight-normal card-text">Expiry Date</span>
                                                        <div class="input"> <i class="fa fa-calendar"></i> <input type="text" class="form-control" placeholder="MM/YY"> </div>
                                                    </div>
                                                    <div class="col-md-6"> <span class="font-weight-normal card-text">CVC/CVV</span>
                                                        <div class="input"> <i class="fa fa-lock"></i> <input type="text" class="form-control" placeholder="000"> </div>
                                                    </div>
                                                </div> <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your transaction is secured with ssl certificate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>MPesa</span><img src="images/mpesa.png" width="30">
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="btn btn-primary mt-2"> Lipa Na MPesa </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="site-btn">Place order</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Checkout Section End--->



<?php include('./Partials/FOOTER.php'); ?>
<?php include('./Layout/footer.php'); ?>
