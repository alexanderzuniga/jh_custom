<!DOCTYPE html>
<head>
    <title>JH Customs</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Css Global Compulsory -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/template/css/animate.css">
    <!-- Css Theme -->
    <link rel="stylesheet" href="/assets/template/css/style.css">
    <link rel="stylesheet" href="/assets/template/color/default.css">
@yield('topscript')
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>JH Customs</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">Products</a></li>
		<li><a href="#service">Service</a></li>
		<li><a href="#contact">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Example menu</a></li>
            <li><a href="#">Example menu</a></li>
            <li><a href="#">Example menu</a></li>
          </ul>
        </li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
<!-- Content -->
<!--/////////////////// -->
@yield('content')
<!--/////////////////// -->
<!-- End Content  -->


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright 2014 - Squad. All rights reserved.</p>
				</div>
			</div>	
		</div>
	</footer>
  
</body>
<!-- End Footer -->
<!-- Js Global Compulsory  -->
<script src="/assets/plugins/jquery-1.11.1.js"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Js Theme  -->
<script src="/assets/template/js/jquery.easing.min.js"></script>
<script src="/assets/template/js/jquery.scrollTo.js"></script>
<script src="/assets/template/js/wow.min.js"></script>
<script src="/assets/template/js/custom.js"></script>

@yield('bottomscript')  
</html>
    