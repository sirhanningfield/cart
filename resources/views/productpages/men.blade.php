@extends('main')

@section('title','Men\'s Wear')

@section('content')
	
	<div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Men</li>
                </ul>

            </div>
        </div>        
    </div>
    <div id="hot">
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
    </div>
    

@endsection