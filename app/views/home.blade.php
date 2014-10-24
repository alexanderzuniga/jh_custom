@extends('layouts.master')

@section('content')
	<!-- Section: intro -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/img/tree.jpg" alt="...">
      <div class="carousel-caption">
        <h2>WELCOME TO <span class="text_color">JH Customs</span></h2>
    		<h4>Where Quality and Creativity Meet</h4>
      </div>
    </div>
    <div class="item">
      <img src="/img/team/hunter_hd.jpg" alt="...">
      <div class="carousel-caption">
       	<h2>WELCOME TO <span class="text_color">JH Customs</span> </h2>
	   	<h4>Where Quality and Creativity Meet</h4>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
	<!-- /Section: intro -->
	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
  					<h2>Our Products</h2>
  					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
      <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-3">
  				<div class="wow bounceInUp" data-wow-delay="0.2s">
            <div class="team boxed-grey">
              <div class="inner">
  	            <h5>The Hunter</h5>
                <p class="subtitle">For him</p>
                <div class="avatar"><img src="img/team/hunter.jpg" alt="" class="img-responsive img-thumbnail" /></div>
              </div>
            </div>
  				</div>
        </div>
  			<div class="col-xs-6 col-sm-3 col-md-3">
  				<div class="wow bounceInUp" data-wow-delay="0.5s">
            <div class="team boxed-grey">
              <div class="inner">
  	            <h5>The Huntress</h5>
                <p class="subtitle">For her</p>
                <div class="avatar"><img src="img/team/pink_demo.jpg" alt="" class="img-responsive img-thumbnail" /></div>
              </div>
            </div>
  				</div>
        </div>
  			<div class="col-xs-6 col-sm-3 col-md-3">
  				<div class="wow bounceInUp" data-wow-delay="0.8s">
            <div class="team boxed-grey">
              <div class="inner">
  	            <h5>The Presidente</h5>
                <p class="subtitle">For the sophisticated</p>
                <div class="avatar"><img src="img/team/cigar_demo.jpg" alt="" class="img-responsive img-thumbnail" /></div>
              </div>
            </div>
  				</div>
        </div>
  			<div class="col-xs-6 col-sm-3 col-md-3">
  				<div class="wow bounceInUp" data-wow-delay="1s">
            <div class="team boxed-grey">
              <div class="inner">
  	            <h5>The Executive</h5>
                <p class="subtitle">For the Boss</p>
                <div class="avatar"><img src="img/team/executive_demo.jpg" alt="" class="img-responsive img-thumbnail" /></div>
              </div>
            </div>
  				</div>
        </div>
      </div>	
		</div>
	</section>
	<!-- /Section: about -->
	

	<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Our Services</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
           <div class="services">
           
           </div>
        </div>		
		</div>
	</section>
	<!-- /Section: services -->
	

	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Main Office</h5>
				
				<address>
				  <strong>JH Customs, Inc.</strong><br>
				  8000 Lobo Ln, San Antonio<br>
				  TX 78240<br>
				  <abbr title="Phone">P:</abbr> (210) 268-2018
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">jh.customs@hotmail.com</a>
				</address>	
				<address>
				  <strong>We're on social networks</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>	
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

@stop 
