@extends('main')

@section('title','Add Product')

@section('content')

	<div id="content">
        <div class="container">
			<div class="box" id="contact">
				{{Form::open(['route'=>'products.store','files'=>true])}}
					<div class="row text-center">
						<h3>ADD NEW PRODUCT</h3>
					</div><br><br>
					<div class="row">
						<div class="col-md-2 col-md-offset-2">
							<div class="form-group">
								{{form::label('productno','Product #')}}
								{{form::text('productno',NULL,['class'=>'form-control'])}}
							</div>							
						</div>
						<div class="col-md-6 ">
							<div class="form-group">
								{{form::label('title','Product Name')}}
								{{form::text('title',NULL,['class'=>'form-control'])}}
							</div>							
						</div>
						<div class="col-md-8 col-md-offset-2">
							<div class="form-group">
								{{form::label('description','Product description')}}
								{{form::textarea('description',NULL,['class'=>'form-control','rows'=>5])}}
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-2">
							{{form::select('category',['men'=>'Men','ladies'=>'Ladies'],null,['class'=>'form-control','placeholder'=>'Select a Category...'])}}
						</div>					
						<div class="col-md-4 ">
							{{form::select('subcategory',['t-shits'=>'T-shits','shirts'=>'Shirts','pants'=>'Pants','trainers'=>'Trainers','sandals'=>'Sandals','casual'=>'casual','necklace'=>'Necklace','earings'=>'Earings','bands'=>'Bands'],null,['class'=>'form-control','placeholder'=>'Select a Subcategory...'])}}<br>
						</div>						
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-2">
							<div class="form-group">
								{{form::label('price','Price')}}
								{{form::text('price',NULL,['class'=>'form-control'])}}
								
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								{{form::label('quantity','Quantity')}}
								{{form::text('quantity',NULL,['class'=>'form-control'])}}
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								{{form::label('image','Choose an image')}}
								{{form::file('image')}}
							</div>
						</div>											
					</div><br>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							{{form::submit('Add new Product',['class'=>'btn btn-primary btn-block'])}}
						</div>
					</div><br>					
				{{Form::close()}}
			</div>
        </div>
    </div>

@endsection