{{-- Powerful Blade layouting in action. Instead of typing the repetitive <html> blah blah, we just extend whatever's in the layout file at /resources/views/layouts/master.blade.php. No more repetitive html styling. Cool, eh? --}}
@extends ('layouts.master')

{{--
Remember the @yield('content') in layouts/master.blade.php? Well, this is the section that replaces it. Here we put the actual body of our welcome page.
--}}
@section ('content')

{{-- Praise the LORD for HTML5 sections and headers! --}}
<header class="masthead text-center text-white d-flex">
	{{-- my-auto: automatic Bootstrap layouting --}}
	<div class="container my-auto">
		<div class="row">

			<div class="col-lg-10 mx-auto">
				<h1 class="text-uppercase">
					<strong>Welcome to the <br> Student Wellness Centre</strong>
				</h1>
				<hr>
			</div>

			<div class="col-lg-8 mx-auto">
				<p class="text-faded mb-5">Make an appointment at the University of Saskatchewan Student Wellness Center. Get started today!</p>

				<a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Book by Service</a><strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong><a class="btn btn-primary btn-xl js-scroll-trigger" href="#practitioners">Book by Practitioner</a>
			</div>

		</div>
	</div>
</header>



<section class="pt-4" id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Our services</h2>
				<article>Click on a service to book an appointment today</article>
				<hr class="my-4">
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">

			@guest
			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('log') }}">
						<i class="fa fa-4x fa-stethoscope text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('log') }}" style="color:black;">Medical Appointment</a></h3>
					<p class="text-muted mb-0">Doctor and nurse appointments</p>
				</div>
			</div>



			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('log') }}">
						<i class="fa fa-4x fa-users text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('log') }}" style="color:black;">Mental Health Assessment</a></h3>
					<p class="text-muted mb-0">Professional assistance with mental health and counselling</p>
				</div>
			</div>


			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('log') }}">
						<i class="fa fa-4x fa-cutlery text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('log') }}" style="color:black;">Nutritional Counseling</a></h3>
					<p class="text-muted mb-0">Meet with a dietitian</p>
				</div>
			</div>


			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('log') }}">
						<i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('log') }}" style="color:black;">Sexual Health Care</a></h3>
					<p class="text-muted mb-0">Contraception counselling and STI prevention, testing and treatment</p>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('log') }}">
						<i class="fa fa-4x fa-wheelchair-alt text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('log') }}" style="color:black;">Physiotherapy</a></h3>
					<p class="text-muted mb-0">Make an appointment with a physiotherapist</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('log') }}">
						<i class="fa fa-4x fa-bed text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('log') }}" style="color:black;">MassageTherapy</a></h3>
					<p class="text-muted mb-0">Make an appointment with a massage therapist</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('log') }}">
						<i class="fa fa-4x fa-gear text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('log') }}" style="color:black;">Chiropractice</a></h3>
					<p class="text-muted mb-0">Make an appointment with a chiropractor</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('log') }}">
						<i class="fa fa-4x fa-plane text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('log') }}" style="color:black;">Travel Immunization</a></h3>
					<p class="text-muted mb-0">Get vaccination for Hepatitis A and/or B before short-term travel</p>
				</div>
			</div>

			@else
			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('/appointments/create') }}">
						<i class="fa fa-4x fa-stethoscope text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('/appointments/create') }}" style="color:black;">Medical Appointment</a></h3>
					<p class="text-muted mb-0">Doctor and nurse appointments</p>
				</div>
			</div>


			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('/appointments/create') }}">
						<i class="fa fa-4x fa-users text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('/appointments/create') }}" style="color:black;">Mental Health Assessment</a></h3>
					<p class="text-muted mb-0">Professional assistance with mental health and counselling</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('/appointments/create') }}">
						<i class="fa fa-4x fa-cutlery text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('/appointments/create') }}" style="color:black;">Nutritional Counseling</a></h3>
					<p class="text-muted mb-0">Meet with a dietitian</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('/appointments/create') }}">
						<i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('/appointments/create') }}" style="color:black;">Sexual Health Care</a></h3>
					<p class="text-muted mb-0">Contraception counselling and STI prevention, testing and treatment</p>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('/appointments/create') }}">
						<i class="fa fa-4x fa-wheelchair-alt text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('/appointments/create') }}" style="color:black;">Physiotherapy</a></h3>
					<p class="text-muted mb-0">Make an appointment with a physiotherapist</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('/appointments/create') }}">
						<i class="fa fa-4x fa-bed text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('/appointments/create') }}" style="color:black;">MassageTherapy</a></h3>
					<p class="text-muted mb-0">Make an appointment with a massage therapist</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('/appointments/create') }}">
						<i class="fa fa-4x fa-gear text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('/appointments/create') }}" style="color:black;">Chiropractice</a></h3>
					<p class="text-muted mb-0">Make an appointment with a chiropractor</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 text-center">
				<div class="service-box mt-5 mx-auto">
					<a href="{{ URL::to('/appointments/create') }}">
						<i class="fa fa-4x fa-plane text-primary mb-3 sr-icons"></i>
					</a>
					<h3 class="mb-3"><a href="{{ URL::to('/appointments/create') }}" style="color:black;">Travel Immunization</a></h3>
					<p class="text-muted mb-0">Get vaccination for Hepatitis A and/or B before short-term travel</p>
				</div>
			</div>


			@endguest
		</div>

	</div>
</div>
</section>




<section class="bg-dark text-white" id="practitioners" >

<div class="container pb-5 mt-0">
	<div class="row">
		<div class="col-lg-8 mx-auto text-center">
			<h2 class="section-heading text-lighter">Meet our Practitioners</h2>
			<hr class="primary my-4">
			<p class="text-faded mb-4">This website is part of a CMPT370 student project we so lovingly call the Wacky Waving Wellness Booking System. We used modern web frameworks to design and code this site, and all of our work is properly documented and available to view!</p>

			<a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Find practitioners</a>
		</div>
	</div>
</div>

<div class="container-fluid p-0">
	<div class="row popup-gallery">
		<div class="col-lg-4 col-sm-6">
			<a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
				<img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<div class="project-category text-faded">
							Category
						</div>
						<div class="project-name">
							Project Name
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-sm-6">
			<a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
				<img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<div class="project-category text-faded">
							Category
						</div>
						<div class="project-name">
							Project Name
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-sm-6">
			<a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
				<img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<div class="project-category text-faded">
							Category
						</div>
						<div class="project-name">
							Project Name
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-sm-6">
			<a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
				<img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<div class="project-category text-faded">
							Category
						</div>
						<div class="project-name">
							Project Name
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-sm-6">
			<a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
				<img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<div class="project-category text-faded">
							Category
						</div>
						<div class="project-name">
							Project Name
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-4 col-sm-6">
			<a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
				<img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
				<div class="portfolio-box-caption">
					<div class="portfolio-box-caption-content">
						<div class="project-category text-faded">
							Category
						</div>
						<div class="project-name">
							Project Name
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
</section>

<section class="bg-primary" id="about">
<div class="container">
	<div class="row">
		<div class="col-lg-8 mx-auto text-center">
			<h2 class="section-heading text-white">What's WWWBS?</h2>
			<hr class="light my-4">
			<p class="text-faded mb-4">This website is part of a CMPT370 student project we so lovingly call the Wacky Waving Wellness Booking System. We used modern web frameworks to design and code this site, and all of our work is properly documented and available to view!</p>
			<a class="btn btn-light btn-xl" href="https://git.cs.usask.ca/hih050/Wacky-Waving-Wellness-Booking-System" target="_blank">Check out the developer page!</a>
		</div>
	</div>
</div>
</section>

<section id="contact">
<div class="container">
	<div class="row">
		<div class="col-lg-8 mx-auto text-center">
			<h2 class="section-heading">Keep in Touch!</h2>
			<hr class="my-4">
			<p class="mb-5">The Wellness Centre can also be reached via phone or email, or you could drop by the centre at the third floor (Rm. 310) and fourth floor of the Place Riel Student Centre.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 ml-auto text-center">
			<i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
			<p>1-306-966-5768</p>
		</div>
		<div class="col-lg-4 mr-auto text-center">
			<i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
			<p>
				<a href="mailto:student.wellness@usask.ca">student.wellness@usask.ca</a>
			</p>
		</div>
	</div>
</div>
</section>

@endsection

{{-- We don't need to define a footer here because it's already in the master layout.
If we wanted a special footer, we could create a @section('footer') here --}}
