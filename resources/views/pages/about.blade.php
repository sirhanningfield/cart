@extends('main')

@section('title','About')

@section('content')
	
	<div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li>About us</li>
                </ul>
            </div>

            
                <!-- *** PAGES MENU ***
_________________________________________________________ -->
			<div class="col-md-3">
                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Pages</h3>
                    </div>

                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <a href="/about">About us</a>
                            </li>
                            <li>
                                <a href="/contact">Contact page</a>
                            </li>                            
                        </ul>
                    </div>
                </div>               
            </div>

            <div class="col-md-9">

                <div class="box " id="text-page">
                    <h2>About Us</h2>

                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, omnis voluptatum iure expedita sequi obcaecati iste dolores debitis numquam, reprehenderit eum consequuntur cum, quam nesciunt esse tenetur architecto molestiae adipisci.</p>


                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada
                            tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
                    </blockquote>
                    
                </div>
            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->


@endsection