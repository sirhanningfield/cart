@extends('main')

@section('title','Contact')

@section('content')
 	<div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Contact</li>
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

                <!-- *** PAGES MENU END *** -->

            </div>

            <div class="col-md-9">


                <div class="box" id="contact">
                    <h1>Contact</h1>

                    <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                    <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>

                    <hr>

                    <div class="row">
                        <div class="col-sm-4">
                            <h3><i class="fa fa-map-marker"></i> Address</h3>
                            <p><strong>Sirhanningfield Inc.</strong>
                            <br>H-2 Bringnam Street
                            <br>New Town
                            <br>190014
                            <br>England
                            <br>
                            <strong>Great Britain</strong>
                            </p>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <h3><i class="fa fa-phone"></i> Call Us</h3>
                            <p class="text-muted">Feel free to give us a call in case of any enquiries.</p>
                            <p><strong>+91 941 940 9293</strong>
                            </p>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                            <p class="text-muted">Please feel free to write an email to us.</p>
                            <ul>
                                <li><strong><a href="mailto:">info@sirhanningfield.com</a></strong>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- /.col-sm-4 -->
                    </div>
                    <!-- /.row -->

                    <hr>

                    <div id="map" >

                    </div>

                    <hr>
                    <h2>Contact form</h2>

                    <form action="">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" class="form-control" id="lastname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>

                            </div>
                        </div>
                        <!-- /.row -->
                    </form>


                </div>


            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.container -->
    </div>

@endsection