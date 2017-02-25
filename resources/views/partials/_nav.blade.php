<!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="/">
                    <img src="images/logo1.png">
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="#">
                        <i class="fa fa-shopping-cart" ></i>  <span class="hidden-xs"> items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="{{Request::is('/') ? "active" :" "}}"><a href="/">Home</a>
                    </li>
                    <li  class="dropdown yamm-fw {{Request::is('men') ? "active" :" "}}" >
                        <a href="/men" class="dropdown-toggle" data-hover="dropdown" data-delay="200"> Men <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h5>Clothing</h5>
                                            <ul>
                                                <li><a href="#">T-shirts</a>
                                                </li>
                                                <li><a href="#">Shirts</a>
                                                </li>
                                                <li><a href="#">Pants</a>
                                                </li>
                                                <li><a href="#">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="#">Trainers</a>
                                                </li>
                                                <li><a href="#">Sandals</a>
                                                </li>
                                                <li><a href="#">Hiking shoes</a>
                                                </li>
                                                <li><a href="#">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="#">Trainers</a>
                                                </li>
                                                <li><a href="#">Sandals</a>
                                                </li>
                                                <li><a href="#">Hiking shoes</a>
                                                </li>
                                                <li><a href="#">Casual</a>
                                                </li>
                                                <li><a href="#">Hiking shoes</a>
                                                </li>
                                                <li><a href="#">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw {{Request::is('ladies') ? "active" :" "}}">
                        <a href="/ladies" class="dropdown-toggle" data-hover="dropdown" data-delay="200">Ladies <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h5>Clothing</h5>
                                            <ul>
                                                <li><a href="#">T-shirts</a>
                                                </li>
                                                <li><a href="#">Shirts</a>
                                                </li>
                                                <li><a href="#">Pants</a>
                                                </li>
                                                <li><a href="#">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="#">Trainers</a>
                                                </li>
                                                <li><a href="#">Sandals</a>
                                                </li>
                                                <li><a href="#">Hiking shoes</a>
                                                </li>
                                                <li><a href="#">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="#">Trainers</a>
                                                </li>
                                                <li><a href="#">Sandals</a>
                                                </li>
                                                <li><a href="#">Hiking shoes</a>
                                                </li>
                                                <li><a href="#">Casual</a>
                                                </li>
                                                <li><a href="#">Hiking shoes</a>
                                                </li>
                                                <li><a href="#">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="#" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">() items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->