@extends('main')

@section('title','Home')

@section('content')
	<div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="images/main_slider/slider1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/main_slider/slider2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/main_slider/slider3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/main_slider/slider4.jpg" alt="">
                        </div>
                         <div class="item">
                            <img class="img-responsive" src="images/main_slider/slider5.jpg" alt="">
                        </div>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div> <!-- container end -->

            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
            <div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="#">Best customer service</a></h3>
                                <p>We provide the best service ever</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">Best prices</a></h3>
                                <p>best brands at the best prices.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                <p>Free returns on everything for 3 months.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>
            <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->
            <div id="hot">
            	<div class="box">
		            <div class="container">
		                <div class="col-md-12">
		                    <h2>Our Products</h2>
		                </div>
		            </div>
	        	</div>	
            </div>
            <div id="content">
            	<div class="row">
	            	<div class="container">
	            		<div class="col-md-3 col-sm-6">
	                        <div class="product">
	                            <div class="flip-container">
	                                <a href="#">
	                                    <img src="images/product/product1.jpg" alt="" class="img-responsive">
	                                </a>                             
	                            </div>
	                            
	                            <div class="text">
	                                <h3><a href="detail.html">Product Title</a></h3>
	                                <p class="price">$Product Price</p>
	                                <p class="buttons">
	                                    <a href="#" class="btn btn-default">View detail</a>
	                                    <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
	                                </p>
	                            </div><!-- /.text -->
	                        </div><!-- /.product -->
	                    </div>   
	            	</div>
            	</div>
            </div>
            

            
            


@endsection