@extends('main')

@section('title','Payment Details')

@section('content')
	<div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="/">Home</a>
                </li>
                <li>Shopping cart</li>
                <li>Checkout</li>
                <li>Order-Review</li>

            </ul>
        </div>

        <div class="col-md-9" id="basket">

            <div class="box">

                <form method="post" action="">

                    <h1>Order-review</h1>
                    <p class="text-muted">Please review your order and proceed to payment.</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Unit price</th>                                   
                                    <th class="text-center">Total</th>

                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                {!!Form::open(['route'=>['item.update',$item->rowId],'method'=>'POST'])!!}

                                <tr>
                                    <td><a href="#">{{$item->name}}</a></td>
                                    <td width="8" class="text-center">{{$item->qty}}</td>                                     
                                    </td>
                                    <td class="text-center">${{$item->price}}</td>
                                    
                                    <td class="text-center">${{$item->price * $item->qty}}</td>
                                  
                                {!!Form::close()!!}
                                            
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3">Total</th>
                                    <th colspan="1" class="text-center">${{Cart::subtotal()}}</th>
                                                                       
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                    <!-- /.table-responsive -->

                    <div class="box-footer">
                        
                        <div class="pull-right">
                            
                            <form action="{{ route('checkout.makepayment') }}" method="POST">
                            {{ csrf_field() }}
							  <script
							    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
							    data-key="pk_test_P0PVugPL8cdYtdnuvLcOA2WZ"
							    data-amount="{{Cart::total()*100}}"
							    data-name="Sirhanningfield"
							    data-description="Payway"
							    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
							    data-locale="auto">
							  </script>
							</form>
                        
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-md-9 -->

            <div class="col-md-3">
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Order summary</h3>
                    </div>
                    <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order subtotal</td>
                                    <th>${{Cart::subtotal()}}</th>
                                </tr>
                            
                                <tr>
                                    <td>Tax</td>
                                    <th>${{Cart::tax()}}</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>${{Cart::total()}}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                
            </div>
            <!-- /.col-md-3 -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->
@endsection