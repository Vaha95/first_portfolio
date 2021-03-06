<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tasnm || My-Account</title>
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
                            <h2 class="page-title">My Account</h2>
                            <p><a href="#">Home</a> | My Account</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- pages-title-end -->
		<!-- my account content section start -->
		<section class="collapse_area coll2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="check">
                            <h2>My Account </h2>
                        </div>
                        <div class="faq-accordion">
                            <div class="panel-group pas7" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a class="collapsed method" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Edit your account information <i class="fa fa-caret-down"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" >
                                        <div class="row">
                                            <div class="easy2">
                                                <h2>My Account Information</h2>
                                                <form class="form-horizontal" action="#">
                                                    <fieldset>
                                                        <legend>Your Personal Details</legend>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label">First Name </label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label">Last Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label">E-Mail</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="email" placeholder="E-Mail">
                                                            </div>
                                                        </div>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label">Telephone</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="tel" placeholder="Telephone">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Fax</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" placeholder="Fax">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="buttons clearfix">
                                                        <div class="pull-left">
                                                            <a class="btn btn-default ce5" href="#">Back</a>
                                                        </div>
                                                        <div class="pull-right">
                                                            <input class="btn btn-primary ce5" type="submit" value="Continue">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Change your password   <i class="fa fa-caret-down"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                                        <div class="row">
                                            <div class="easy2">
                                                <h2>Change Password</h2>
                                                <form class="form-horizontal" action="#">
                                                    <fieldset>
                                                        <legend>Your Password</legend>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label">Password</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="password" placeholder="password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label">Password Confirm</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="password" placeholder="password confirm">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="buttons clearfix">
                                                        <div class="pull-left">
                                                            <a class="btn btn-default ce5" href="#">Back</a>
                                                        </div>
                                                        <div class="pull-right">
                                                            <input class="btn btn-primary ce5" type="submit" value="Continue">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">Modify your address book entries   <i class="fa fa-caret-down"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                        <div class="easy2">
                                            <h2>Address Book Entries</h2>
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <td class="text-left">
                                                        Farhana hayder (shuvo)
                                                        <br>
                                                        hastech
                                                        <br>
                                                        Road#1 , Block#c
                                                        <br>
                                                        Rampura.
                                                        <br>
                                                        Dhaka
                                                        <br>
                                                        Bangladesh
                                                    </td>
                                                    <td class="text-right">
                                                        <a class="btn btn-info g6" href="#">Edit</a>
                                                        <a class="btn btn-danger g6" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="buttons clearfix">
                                                <div class="pull-left">
                                                    <a class="btn btn-default ce5" href="#">Back</a>
                                                </div>
                                                <div class="pull-right">
                                                    <input class="btn btn-primary ce5" type="submit" value="Continue">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="collap" href="wishlist.html">Modify your wish list   <i class="fa fa-caret-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- my account  content section end -->
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
