<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tasnm || Shopping-Cart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!-- google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- pe-icon-7-stroke -->
		<link rel="stylesheet" href="css/pe-icon-7-stroke.min.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Image Zoom CSS
		============================================ -->
        <link rel="stylesheet" href="css/img-zoom/jquery.simpleLens.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header section start -->
		<?php 
        include_once('header.php');
        ?>
        <!-- header section end -->
        <!-- pages-title-start -->
		<section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Shopping Cart</h2>
                            <p><a href="#">Home</a> | Shopping Cart</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- pages-title-end -->
		<!-- shopping-cart content section start -->
        <div class="shopping-cart-area s-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="s-cart-all">
                            <div class="cart-form table-responsive">
                                <table id="shopping-cart-table" class="data-table cart-table">
                                    <tr>
                                        <th class="low1">Product</th>
                                        <th class="low7">Quantity</th>
                                        <th class="low7">Price</th>
                                        <th class="low7">Total</th>
                                    </tr>
                                    <tr>
                                        <td class="sop-cart an-shop-cart">
                                            <a href="#"><img class="primary-image" alt="" src="img/products/10.jpg"></a>
                                            <a href="#">Vintage Lambskin</a>
                                        </td>
                                        <td class="sop-cart an-sh">
                                            <div class="quantity ray">
                                                <input class="input-text qty text" type="number" size="4" title="Qty" value="2" min="0" step="1">
                                            </div>
                                            <a class="remove" href="#">
                                                <span>x</span>
                                            </a>
                                        </td>
                                        <td class="sop-cart">
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount">$180.00</span>
                                            </div>
                                        </td>
                                        <td class="cen">
                                            <span class="amount">$180.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sop-cart an-shop-cart">
                                            <a href="#"><img class="primary-image" alt="" src="img/products/1.jpg"></a>
                                            <a href="#">Vintage Lambskin</a>
                                        </td>
                                        <td class="sop-cart an-sh">
                                            <div class="quantity ray">
                                                <input class="input-text qty text" type="number" size="4" title="Qty" value="2" min="0" step="1">
                                            </div>
                                            <a class="remove" href="#">
                                                <span>x</span>
                                            </a>
                                        </td>
                                        <td class="sop-cart">
                                            <div class="tb-product-price font-noraure-3">
                                                <span class="amount2 ana">$79.00 - </span>
                                                <span class="amount2 ana">$100.00</span>
                                            </div>
                                        </td>
                                        <td class="cen">
                                            <span class="amount">$180.00</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="last-check1">
                                <div class="yith-wcwl-share yit">
                                    <p class="checkout-coupon an-cop">
                                        <input type="submit" value="Update Cart">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="second-all-class">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="tb-tab-container2">
                                <ul class="etabs" role="tablist">
                                    <li role="presentation" class="vc_tta-tab active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Estimate Shipping & Taxe</a></li>
                                    <li class="vc_tta-tab " role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Use Coupon Code</a></li>
                                </ul>
                                <div class="tab-content another-cen">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="top-shopping4">
                                            <p class="shop9">Shipping Local Pickup (Free)</p>
                                            <p class="down-shop">Enter your destination to get a shipping estimate</p>
                                        </div>
                                        <form action="#" class="woocommerce-shipping-calculator">
                                            <p class="form-row form-row-wide">
                                                <label>
                                                    Country
                                                    <span class="required">*</span>
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label>
                                                    District 
                                                    <span class="required">*</span>
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>mymensingh</option>
                                                    <option>dhaka</option>
                                                    <option>khulna</option>
                                                    <option>kumillah</option>
                                                    <option>chadpur</option>
                                                </select>
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label>
                                                    Post Code  
                                                    <span class="required">*</span>
                                                </label>
                                                <input class="form-control" type="text" name="name" required="" placeholder="1234567">
                                            </p>
                                            <p class="checkout-coupon two">
                                                <input type="submit" value="Get Quotes">
                                            </p>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="2nd-copun-code">
                                            <form action="#">
                                                <p class="form-row form-row-wide">
                                                    <label>
                                                        Coupon:  
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input class="form-control again" type="text" name="name" required="" placeholder="Coupon code">
                                                </p>
                                                <p class="checkout-coupon full">
                                                    <input type="submit" value="Apply Coupon">
                                                </p>
                                            </form>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="sub-total">
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal:</th>
                                            <td>
                                                <span class="amount">$297.00</span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total:</th>
                                            <td>
                                                <strong>
                                                    <span class="amount">$297.00</span>
                                                </strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="wc-proceed-to-checkout">
                                <p class="return-to-shop">
                                    <a class="button wc-backward" href="#">Continue Shopping</a>
                                </p>
                                <a class="wc-forward" href="#">Confirm Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- shopping-cart  content section end -->
        <!-- quick view start -->
		<div class="quick-view modal fade in" id="quick-view">
			<div class="container">
				<div class="row">
					<div id="view-gallery" class="owl-carousel product-slider owl-theme">
						<div class="col-xs-12">
							<div class="d-table">
								<div class="d-tablecell">
									<div class="modal-dialog">
										<div class="main-view modal-content">
											<div class="modal-footer" data-dismiss="modal">
												<span>x</span>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-5">
													<div class="quick-image">
														<div class="single-quick-image tab-content text-center">
															<div class="tab-pane  fade in active" id="sin-pro-1">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-2">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-3">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-4">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
														</div>
														<div class="quick-thumb">
															<div class="nav nav-tabs">
																<ul>
																	<li><a data-toggle="tab" href="#sin-pro-1"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-2"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-3"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-4"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																</ul>
															</div>
														</div>
													</div>							
												</div>
												<div class="col-xs-12 col-sm-7">
													<div class="quick-right">
														<div class="quick-right-text">
															<h3><strong>product name title</strong></h3>
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-half-o"></i>
																<i class="fa fa-star-o"></i>
																<a href="#">06 Review</a>
																<a href="#">Add review</a>
															</div>
															<div class="amount">
																<h4>$65.00</h4>
															</div>
															<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrames bled it make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
															<div class="row m-p-b">
																<div class="col-sm-12 col-md-6">
																	<div class="por-dse responsive-strok clearfix">
																		<ul>
																			<li><span>Availability</span><strong>:</strong> In stock</li>
																			<li><span>Condition</span><strong>:</strong> New product</li>
																			<li><span>Category</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
																		</ul>
																	</div>
																</div>
																<div class="col-sm-12 col-md-6">
																	<div class="por-dse color">
																		<ul>
																			<li><span>color</span><strong>:</strong> <a href="#">Red</a> <a href="#">Green</a> <a href="#">Blue</a> <a href="#">Orange</a></li>
																			<li><span>size</span><strong>:</strong>  <a href="#">SL</a> <a href="#">SX</a> <a href="#">M</a> <a href="#">XL</a></li>
																			<li><span>tag</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="dse-btn">
																<div class="row">
																	<div class="col-sm-12 col-md-6">
																		<div class="por-dse clearfix">
																			<ul>
																				<li class="share-btn qty clearfix"><span>quantity</span>
																					<form action="#" method="POST">
																						<div class="plus-minus">
																							<a class="dec qtybutton">-</a>
																							<input type="text" value="02" name="qtybutton" class="plus-minus-box">
																							<a class="inc qtybutton">+</a>
																						</div>
																					</form>
																				</li>
																				<li class="share-btn clearfix"><span>share</span>
																					<a href="#"><i class="fa fa-facebook"></i></a>
																					<a href="#"><i class="fa fa-twitter"></i></a>
																					<a href="#"><i class="fa fa-google-plus"></i></a>
																					<a href="#"><i class="fa fa-linkedin"></i></a>
																					<a href="#"><i class="fa fa-instagram"></i></a>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="col-sm-12 col-md-6">
																		<div class="por-dse clearfix responsive-othre">
																			<ul class="other-btn">
																				<li><a href="#"><i class="fa fa-heart"></i></a></li>
																				<li><a href="#"><i class="fa fa-refresh"></i></a></li>
																				<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
																			</ul>
																		</div>
																		<div class="por-dse add-to">
																			<a href="#">add to cart</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- single-product item end -->
						<div class="col-xs-12">
							<div class="d-table">
								<div class="d-tablecell">
									<div class="modal-dialog">
										<div class="main-view modal-content">
											<div class="modal-footer" data-dismiss="modal">
												<span>x</span>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-5">
													<div class="quick-image">
														<div class="single-quick-image tab-content text-center">
															<div class="tab-pane  fade in active" id="sin-pro-5">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-6">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-7">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-8">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
														</div>
														<div class="quick-thumb">
															<div class="nav nav-tabs">
																<ul>
																	<li><a data-toggle="tab" href="#sin-pro-5"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-6"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-7"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-8"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																</ul>
															</div>
														</div>
													</div>							
												</div>
												<div class="col-xs-12 col-sm-7">
													<div class="quick-right">
														<div class="quick-right-text">
															<h3><strong>product name title</strong></h3>
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-half-o"></i>
																<i class="fa fa-star-o"></i>
																<a href="#">06 Review</a>
																<a href="#">Add review</a>
															</div>
															<div class="amount">
																<h4>$65.00</h4>
															</div>
															<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrames bled it make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
															<div class="row m-p-b">
																<div class="col-sm-6">
																	<div class="por-dse">
																		<ul>
																			<li><span>Availability</span><strong>:</strong> In stock</li>
																			<li><span>Condition</span><strong>:</strong> New product</li>
																			<li><span>Category</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
																		</ul>
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="por-dse color">
																		<ul>
																			<li><span>color</span><strong>:</strong> <a href="#">Red</a> <a href="#">Green</a> <a href="#">Blue</a> <a href="#">Orange</a></li>
																			<li><span>size</span><strong>:</strong>  <a href="#">SL</a> <a href="#">SX</a> <a href="#">M</a> <a href="#">XL</a></li>
																			<li><span>tag</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<div class="dse-btn">
																<div class="row">
																	<div class="col-sm-6">
																		<div class="por-dse">
																			<ul>
																				<li class="share-btn qty clearfix"><span>quantity</span>
																					<form action="#" method="POST">
																						<div class="plus-minus">
																							<a class="dec qtybutton">-</a>
																							<input type="text" value="02" name="qtybutton" class="plus-minus-box">
																							<a class="inc qtybutton">+</a>
																						</div>
																					</form>
																				</li>
																				<li class="share-btn clearfix"><span>share</span>
																					<a href="#"><i class="fa fa-facebook"></i></a>
																					<a href="#"><i class="fa fa-twitter"></i></a>
																					<a href="#"><i class="fa fa-google-plus"></i></a>
																					<a href="#"><i class="fa fa-linkedin"></i></a>
																					<a href="#"><i class="fa fa-instagram"></i></a>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="por-dse clearfix">
																			<ul class="other-btn">
																				<li><a href="#"><i class="fa fa-heart"></i></a></li>
																				<li><a href="#"><i class="fa fa-refresh"></i></a></li>
																				<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
																			</ul>
																		</div>
																		<div class="por-dse add-to">
																			<a href="#">add to cart</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- single-product item end -->
					</div>
				</div>
			</div>
		</div>
		<!-- quick view end -->
        <!-- brand section start -->
       <section class="section-padding-top">
           <div class="brand-logo">
				<div class="barnd-bg">
					<div class="container">
						<div class="row text-center">
							<div id="brand-logo" class="re-owl-carousel21 owl-carousel product-slider owl-theme">
								<div class="col-xs-12">
									<div class="single-brand">
										<a href="#"><img src="img/brand/1.png" alt="" /></a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-brand">
										<a href="#"><img src="img/brand/2.png" alt="" /></a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-brand">
										<a href="#"><img src="img/brand/3.png" alt="" /></a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-brand">
										<a href="#"><img src="img/brand/4.png" alt="" /></a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-brand">
										<a href="#"><img src="img/brand/5.png" alt="" /></a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-brand">
										<a href="#"><img src="img/brand/6.png" alt="" /></a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-brand">
										<a href="#"><img src="img/brand/1.png" alt="" /></a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-brand">
										<a href="#"><img src="img/brand/3.png" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
       </section>
       <!-- brand section end -->
       <!-- service section start -->
       <section class="re-section-padding">
			<div class="service section-padding">
				<div class="container">
					<div class="row text-center">
						<div class="col-xs-12 col-sm-4">
							<div class="single-service">
								<i class="pe-7s-plane"></i>
								<h4>Free Shipping</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="single-service res-single">
								<i class="pe-7s-headphones"></i>
								<h4>Customer Support</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="single-service">
								<i class="pe-7s-refresh"></i>
								<h4>15 days money back</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
       </section>
       <!-- service section end -->
        <!-- footer section start -->
		<?php include_once('footer.php'); ?>
        <!-- footer section end -->
        
        <!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- parallax js -->
        <script src="js/parallax.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Img Zoom js -->
		<script src="js/img-zoom/jquery.simpleLens.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- jquery.countdown js -->
        <script src="js/jquery.countdown.min.js"></script>
		<!-- Nivo slider js
		============================================ --> 		
		<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/home.js" type="text/javascript"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- sticky js -->
        <script src="js/sticky.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>
