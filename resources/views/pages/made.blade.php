<!DOCTYPE html>
@extends('layouts.default')
<title>Poornatha</title>
@section('content')
<div class="col-12 p-0" id="about_page">
	<div class="col-12 px-0 pt-5 about_bg section" id="section1">
		<div class="about_inner_rel pt-5 animatedParent container position-relative" data-sequence="500">
			<div class="px-3 pt-5 position-relative l-0">
				<!-- <h3 class="text-white pt-5 animated bold_font heading_line fadeInUpShort slow" data-id='1'>About us</h3>
				<p class="mw-650 text-white animated font-9 fadeInUpShort slow heading" data-id='2'>Honing our design and development skills, our talented team can work on projects of any magnitude to take on your business challenges and deliver a quality product. </p> -->
				<div class="pt-md-5 pb-5 row m-0">
					<div class="col-6 pl-md-0 mb-3 d-flex align-items-center justify-content-center">
						<a href="{{url('about')}}" class="d-block text-white py-5 my-md-5 text-center radius_10 overflow-hidden">
							<!-- <div class="h-400 z-depth-1 overlay w-100 about_1 d-flex align-items-center justify-content-center h3 m-0">
								<span>About us</span>
							</div> -->
							<img src="{{url('assets/images/poornatha_logo.png')}}" class="mw-280 mw-sm-70 w-100 py-md-5 dim_image" />
						</a>
					</div>
					<div class="col-6 mb-3 d-flex align-items-center justify-content-center active_bg_made">
						<a href="{{url('made')}}" class="d-block radius_10 py-5 my-md-5 text-white text-center overflow-hidden">
							<!-- <div class="h-500 z-depth-1 w-100 about_2"></div> -->
							<img src="{{url('assets/images/made_logo.png')}}" class="mw-350 w-100 mb-3" />
							<span class="d-block font-12 highlight_made">Michigan Academy for Developing Entrepreneurs</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 px-3 pb-5 animated animatedParent" id="">
		<div class="container p-3">
			<div class="row m-0">
				<div class="col-xs-12 mx-auto col-md-12 delay-250 animated fadeInUpShort">
					<h2 class="text-uppercase text-center mb-3 bold_font col-xs-12">Made</h2>
					<p class="text-muted l-h-28 text-center font-9 col-md-9 mx-auto">The Michigan Academy for Developing Entrepreneurs (MADE) is a US-based non-profit organization whose aim is to develop entrepreneurs in emerging economies. MADE was founded by the William Davidson and Zell-Lurie Institutes at the University of Michigan and Poornatha Partnering Entrepreneurs LLP in Madurai, India.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 px-3 py-5 animated animatedParent who_we_are_made" id="">
		<div class="container p-3">
			<div class="row m-0">
				<div class="col-xs-12 mx-auto delay-500 animated fadeInUpShort who_we_are_content p-0 text-center col-md-9 mx-auto">
					<h2 class="text-uppercase mb-3 bold_font col-xs-12">WHAT WE DO</h2>
					<p class="text-muted l-h-28 font-9">MADE provides Enterprise Development Organizations (EDOs) in emerging economies a repeatable, scalable, transferable and profitable service platform to develop entrepreneurs in their home countries.</p>
					<p class="text-muted l-h-28 font-9">The MADE entrepreneur development process centers around rigorous decision making while incorporating information about the company business model, external forces impacting that model, and even personal characteristics and business skills of the entrepreneur.</p>
					<p class="text-muted l-h-28 font-9">The MADE platform practically applies deep academic understanding of decision management, survey science, and the entrepreneurial method and therefore, empowers EDOs to help local entrepreneurs make strategic, evidence-based decisions that guide entrepreneur development, drive company value and foster community health.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="col-xs-12 p-0 mb-5" id="">
		<div class="row m-0 col-xs-12 p-0 animated align-items-center animatedParent">
			<div class="col-md-6 col-xs-12 pl-md-0 mb-3">
				<div class="mx-auto delay-250 animated fadeInUpShort">
					<div class="w-100 jnj_discription h-400 z-depth-1 rounded-right"></div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12 p-3">
				<div class="mx-auto pb-lg-4 delay-500 animated fadeInUpShort">
					<h2 class="text-uppercase bold_font mb-3 col-xs-12">Our Goal</h2>
					<p class="font-9 text-muted">Big Journeys begin with small steps…</p>
					<p class="font-9 text-muted l-h-28"> The MSME sector has proved to be a force to reckon with in our nation-building journey. As per the latest available data, this sector employs around 11 crore individuals and contributes 29% of India’s rapidly growing GDP. We realize that the challenges and the processes of the MSME sector are unique and therefore requires guidance to reach their highest potential. Our goal is to provide an end-to-end support system for the MSME entrepreneurs so they can develop the confidence to make better strategic decisions and create an engaging and result-oriented culture in the organisation.</p>
				</div>
			</div>
		</div>
	</div> -->
	<div class="col-xs-12 p-3 animated animatedParent" id="">
		<div class="container p-3">
			<div class="row justify-content-center col-12 p-0 text-center m-0">
				<div class="col-12 delay-250 animated fadeInUpShort">
					<h2 class="text-uppercase mb-5 bold_font col-xs-12">Meet our leadership team</h2>
				</div>
				<div class="col-lg-3 col-md-6 p-3">
					<img src="{{url('assets/images/team_3.png')}}" class="w-100 o-cover radius_10 mb-3">
					<h5 class="bold_font">Paul Clyde</h5>
					<p class="primary-text-color font-9">Founding board member and president of the William Davidson Institute at the University of Michigan</p>
				</div>
				<div class="col-lg-3 col-md-6 p-3 mt-5">
					<img src="{{url('assets/images/team_4.png')}}" class="w-100 o-cover radius_10 mb-3">
					<h5 class="bold_font">Michael Pape</h5>
					<p class="primary-text-color font-9">Executive director and professor at the University of Central Florida Business School</p>
				</div>
				<div class="col-lg-3 col-md-6 p-3">
					<img src="{{url('assets/images/team_5.png')}}" class="w-100 o-cover radius_10 mb-3">
					<h5 class="bold_font">Bharath Sankar</h5>
					<p class="primary-text-color font-9">Founding board member and Founder and Chief Mentor of Poornatha Partnering Entrepreneurs LLP</p>
				</div>
				<div class="col-lg-3 col-md-6 p-3 mt-5">
					<img src="{{url('assets/images/team_6.png')}}" class="w-100 o-cover radius_10 mb-3">
					<h5 class="bold_font">Stewart Thornhill</h5>
					<p class="primary-text-color font-9">Founding board member and executive director of the Zell Lurie Institute for Entrepreneurial Studies at the University of Michigan</p>
				</div>
			</div>
		</div>
	</div>
	@include('includes.footer')
	@stop
</div>