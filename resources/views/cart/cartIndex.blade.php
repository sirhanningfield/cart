@extends('main')

@section('title','Cart')

@section('content')
	<div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="/">Home</a>
                </li>
                <li>Shopping cart</li>
            </ul>
        </div>

        <div class="col-md-9" id="basket">

            <div class="box">

                <form method="post" action="">

                    <h1>Shopping cart</h1>
                    <p class="text-muted">You currently have {{Cart::count()}} item(s) in your cart.</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th class="text-left">Quantity</th>
                                    <th class="text-center">Unit price</th>                                   
                                    <th class="text-center">Total</th>

                                    <th></th>
                                    <th></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                {!!Form::open(['route'=>['item.update',$item->rowId],'method'=>'POST'])!!}

                                <tr>
                                    <td><a href="#">{{$item->name}}</a></td>
                                    <td width="8">                                               
                                        <input type="number" value="{{$item->qty}}" class="form-control" name="qty">                                     
                                    </td>
                                    <td class="text-center">${{$item->price}}</td>
                                    
                                    <td class="text-center">${{$item->price * $item->qty}}</td>
                                    
                                    <td class="text-right">                                        
                                        <input type="submit" class="btn btn-default btn-sm" value="Update"> 
                                    </td>
                                {!!Form::close()!!}

                                    <td class="pull-left">
                                        {!!Form::open(['route'=>['item.delete',$item->rowId],'method'=>'POST'])!!}        
                                            <button class="btn btn-sm btn-default" type="submit"><i class="fa fa-trash-o"></i></button>
                                        {!!Form::close()!!}
                                    </td>                                             
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3">Total</th>
                                    <th colspan="3">${{Cart::subtotal()}}</th>
                                                                       
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                    <!-- /.table-responsive -->

                    <div class="box-footer">
                        <div class="pull-left">
                            <a href="{{ route('home') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                        </div>
                        <div class="pull-right">
                            
                            <a href="{{ route('checkout.address') }}" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></a>
                        
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