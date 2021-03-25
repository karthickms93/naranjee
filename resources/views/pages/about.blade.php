<!DOCTYPE html>
@extends('layouts.default')
<title>Naranjee Hirjee</title>
@section('content')
<div class="col-12 p-0" id="about_page">
	<div class="col-12 px-0 pt-5 about_bg section" id="section1">
		<div class="about_inner_rel pt-5 animatedParent container position-relative" data-sequence="500">
			<div class="px-3 pt-5 position-relative l-0">
				<!-- <h3 class="text-white pt-5 animated bold_font heading_line fadeInUpShort slow" data-id='1'>About Us</h3>
				<p class="mw-650 text-white animated font-9 fadeInUpShort slow heading" data-id='2'>Anyone can be an entrepreneur but very few become revered and respected LEADERS. LEADERSHIP is an attitude cultivated over time and experience. We inspire entrepreneurs to be the IDEAL LEADERS that their employees and peers would look up to. </p> -->
				<div class="pt-md-5 pb-5 row m-0">
					<div class="col-6 pl-md-0 mb-3 d-flex align-items-center justify-content-center active_bg">
						<a href="{{url('about')}}" class="d-block radius_10 py-5 my-md-5 text-center overflow-hidden">
							<!-- <div class="h-500 z-depth-1 w-100 about_1"></div> -->
							<img src="{{url('assets/images/poornatha_logo.png')}}" class="mw-280 mw-sm-70 w-100 py-md-5" />
						</a>
					</div>
					<div class="col-6 mb-3 d-flex align-items-center justify-content-center">
						<a href="{{url('made')}}" class="d-block radius_10 py-5 my-md-5 text-white text-center overflow-hidden">
							<img src="{{url('assets/images/made_logo.png')}}" class="mw-350 w-100 dim_image mb-3" />
							<span class="d-block font-12 grey-text">Michigan Academy for Developing Entrepreneurs</span>
							<!-- <div class="h-400 z-depth-1 overlay w-100 about_2 d-flex align-items-center justify-content-center h3 m-0">
								<span>Made</span>
							</div> -->
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 px-3 pb-3 animated animatedParent" id="poornatha">
		<div class="container p-3">
			<div class="row m-0">
				<div class="col-xs-12 mx-auto col-md-9 delay-250 animated fadeInUpShort">
					<h2 class="text-center mb-3 bold_font col-xs-12">Poornatha</h2>
					<p class="text-muted l-h-28 text-center font-9 mb-3">Poornatha is a capacity building organisation, in the pursuit of propelling nation's growth by empowering Individuals and Institutions. We partner with entrepreneurs to enable them gain confidence in decision making, and create and maintain a culture of trust. We aim at creating an overarching ecosystem by offering diagnostic tools, coaching, and a support system to enable MSME business leaders to identify areas of growth and increase the confidence to make effective business decisions.</p>
					<p class="text-muted l-h-28 text-center font-9">We help bring about a holistic “Poornatha” transformation in both individuals and institutions for a renewed business outlook and amplified productivity.</p>
					<!-- <p class="text-muted l-h-28 text-center font-9">for a holistic “Poornatha” transformation into a brand new business avatar. (stand by phrase)</p> -->
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="col-xs-12 px-3 py-5 animated animatedParent who_we_are" id="">
		<div class="container p-3">
			<div class="row m-0">
				<div class="col-xs-12 mx-auto col-md-9 delay-250 animated fadeInUpShort who_we_are_content text-center p-0">
					<h2 class="mb-3 bold_font col-xs-12">Who we are</h2>
					<p class="text-muted l-h-28 font-9">We started in 2017 through the efforts of a prominent entrepreneur and philanthropist, Dr Bharath Krishna Sankar and his team of young, dynamic leaders based in Madurai. They embarked on this journey with the noble intention of imparting their professional life teachings to entrepreneurs seeking guidance. What started as a simple talk soon spiraled into a comprehensive, interactive workshop spanning weeks aimed at creating competent business leaders. Our mentors and advisors have an acute sense of the business climate in the MSME sector, especially in Tier II cities. This puts us in a formidable position to perceive and better understand the challenges faced by such entrepreneurs.</p>
					<p class="text-muted l-h-28 font-9">Today, our first batch of entrepreneurs and their ascending growth charts in the past couple of years have made our chests swell with pride and is a telling example of Poornatha’s impact.</p>
				</div>
			</div>
		</div>
	</div> -->
	<div class="col-xs-12 py-3 row m-0 align-items-center deliver_endure" id="value">
		<div class="container px-0">
			<div class="col-12 p-0">
				<h3 class="mb-3 text-center bold_font col-xs-12">Our Values</h3>
				<p class="font-9 text-muted pl-lg-5 p-3 text-center col-md-9 mx-auto l-h-28"> We breathe and live by our set of values, which we proudly call “Our Mantras.” These mantras provide clarity to the mind and are way of life. They help us tap into the essence of our being, thereby boosting us in our professional and personal pursuits by creating a transformation within, that leads to a transformation without. These mantras form the foundation of our identity as an organization and we strive to meaningfully reflect them in our day-to-day work and in our interactions with stakeholders.</p>
				<div class="col-12 p-0 deliver_carousel z-index0 owl-carousel owl-theme">
					<div class="item py-4">
						<div class="bg-white px-3 border-1 py-5 h-100 row m-0 justify-content-center position-relative align-items-center text-center">
							<div class="row m-0 justify-content-center align-items-center">
								<p><i class="fa fa-plus-square-o font-3 text_gradient"></i></p>
								<h5 class="bold_font mb-3 text_gradient w-100">We Treasure Our People</h5>
								<p class="font-9 text-white l-h-28 value_desc position-absolute t-0 l-0 m-0 row align-items-center z-index1">We are socially-minded and passionate about creating an impact in people’s lives. By providing you with the tools to be a more confident business leader, you are able to grow your profits and create a positive work culture resulting in a ripple effect on the economic, emotional and social well being of your employees and their families at large.</p>
							</div>
						</div>
					</div>
					<div class="item py-4">
						<div class="bg-white px-3 border-1 py-5 h-100 row m-0 justify-content-center position-relative align-items-center text-center">
							<div class="row m-0 justify-content-center align-items-center">
								<p><i class="fa fa-plus-square-o font-3 text_gradient"></i></p>
								<h5 class="bold_font mb-3 text_gradient w-100">We Cultivate Our Minds</h5>
								<p class="font-9 text-white l-h-28 value_desc position-absolute t-0 l-0 m-0 row align-items-center z-index1">Learning Matters, and we are relentlessly curious. We are constantly looking out for opportunities to widen our breadth of knowledge, improve our processes and provide the best offerings suitable to your needs with the combination of both creative and critical thinking.</p>
							</div>
						</div>
					</div>

					<div class="item py-4">
						<div class="bg-white px-3 border-1 py-5 h-100 row m-0 justify-content-center position-relative align-items-center text-center">
							<div class="row m-0 justify-content-center align-items-center">
								<p><i class="fa fa-plus-square-o font-3 text_gradient"></i></p>
								<h5 class="bold_font mb-3 text_gradient w-100">We Perceive Our Processes</h5>
								<p class="font-9 text-white l-h-28 value_desc position-absolute t-0 l-0 m-0 row align-items-center z-index1">We are thoughtful, detailed and structured. With the logical end in mind, we approach all our processes through an interesting and engaging step-by-step approach; working tirelessly towards results that have a long-lasting impact for you and for your organization.</p>
							</div>
						</div>
					</div>
					<div class="item py-4">
						<div class="bg-white px-3 border-1 py-5 h-100 row m-0 justify-content-center position-relative align-items-center text-center">
							<div class="row m-0 justify-content-center align-items-center">
								<p><i class="fa fa-plus-square-o font-3 text_gradient"></i></p>
								<h5 class="bold_font mb-3 text_gradient w-100">We Empower Our Team</h5>
								<p class="font-9 text-white l-h-28 value_desc position-absolute t-0 l-0 m-0 row align-items-center z-index1">We understand that we are on the same team with you as our client, and are working towards the same goals. As such, we provide all the support our entrepreneurs need; from hand-holding in the early steps to providing a network of support in the latter stages. We are fully dedicated to empowering you to make the best decisions every step of the way. We know that people don’t care how much we know unless they know how much we care.</p>
							</div>
						</div>
					</div>
					<div class="item py-4">
						<div class="bg-white px-3 border-1 py-5 h-100 row m-0 justify-content-center position-relative align-items-center text-center">
							<div class="row m-0 justify-content-center align-items-center">
								<p><i class="fa fa-plus-square-o font-3 text_gradient"></i></p>
								<h5 class="bold_font mb-3 w-100 text_gradient">We Raise Our Bar</h5>
								<p class="font-9 text-white l-h-28 value_desc position-absolute t-0 l-0 m-0 row align-items-center z-index1">Being good is never good enough, and we aim to constantly improve ourselves from good to great to glorious. This translates to our services; we evaluate ourselves continuously and challenge ourselves and our clients to higher standards.</p>
							</div>
						</div>
					</div>
					<div class="item py-4">
						<div class="bg-white px-3 border-1 py-5 h-100 row m-0 justify-content-center position-relative align-items-center text-center">
							<div class="row m-0 justify-content-center align-items-center">
								<p><i class="fa fa-plus-square-o font-3 text_gradient"></i></p>
								<h5 class="bold_font mb-3 w-100 text_gradient">We Earn Our Trust</h5>
								<p class="font-9 text-white l-h-28 value_desc position-absolute t-0 l-0 m-0 row align-items-center z-index1">In a world of volatility, complexity and ambiguity, we acknowledge your doubts and uncertainties. We insist on clarifying your expectations and our promises and we keep our word, do our part, and follow through on expectations set, making sure that you evolve to be the business leader better equipped to make strategic decisions.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="col-xs-12 p-0 mb-5" id="">
		<div class="row m-0 col-xs-12 p-0 animated align-items-center animatedParent">
			<div class="col-md-6 col-xs-12 pl-md-0 mb-3">
				<div class="mx-auto delay-250 animated fadeInUpShort">
					<div class="w-100 about_img h-400 z-depth-1 rounded-right"></div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12 p-3">
				<div class="mx-auto pb-lg-4 delay-500 animated fadeInUpShort">
					<h2 class="bold_font mb-3 col-xs-12">Our Goal</h2>
					<p class="font-9 text-muted">The MSME sector has proved to be a force to reckon with in our nation-building journey. As per the latest available government data, this sector employs around 11 crore individuals and contributes 29% to India’s rapidly growing GDP*. The government envisions pushing the growth arising from this sector to 50%. For this to become a reality, the MSME sector needs to overcome the basic challenges staring them in the face, namely availability of finance, adequate knowledge, availability of technology, availability of competent team members, constraints pertaining to expansion and modernisation among others.</p>
					<p class="font-9 text-muted mb-3">We realize that the challenges and the processes of the MSME sector are unique and therefore requires guidance to reach their highest potential. Our goal is to provide an end-to-end support system for the MSME entrepreneurs so they can develop the confidence to make better strategic decisions and create an engaging and result-oriented culture in the organisation.</p>
					<p class="font-55 text-muted text-right">* (Ministry of MSMEs - Annual Report 2018-19).</p>
				</div>
			</div>
		</div>
	</div> -->
	<div class="col-xs-12 p-3 animated animatedParent meet_leader">
		<div class="container p-3">
			<div class="row justify-content-center col-12 p-0 m-0">
				<h1 class="grey-text w-100 text-center font-5 bold_font m-0 text-uppercase">Leadership</h1>
				<div class="col-10 delay-250 animated fadeInUpShort mb-3">
					<h2 class="mb-4 bold_font text-center col-xs-12">Co-Founders</h2>
				</div>
				<div class="col-md-6 col-12 p-0">
					<div class="text-center align-items-center row m-0 col-12 px-3 pt-3 pb-3">
						<div class="col-6">							
							<div class="advise mw-200 mh-200 position-relative mx-auto">
								<img src="assets/images/suresht.png" class="rounded-circle w-100 h-100 o-cover" />
							</div>
						</div>
						<div class="col-6 text-left">
							<h5 class="bold_font mt-3">Suresh T</h5>
							<p class="font-9 bold_font light_blue mb-0">Co-Founder</p>
							<p class="d-flex align-items-center">
								<a target="_blank" href="https://linkedin.com/in/suresh-t/"><img src="assets/images/linkedin.svg" class="w-15 mr-1"></a>
								<a target="_blank" href="https://twitter.com/iamsuresh_19?s=09"><img src="assets/images/twitter.png" class="w-15 mr-1"></a>
							</p>
						</div>
					</div>
					<div class="text-center align-items-center row m-0 col-12 px-3 pt-3 pb-3">
						<div class="col-6 text-right">					
							<h5 class="bold_font mt-3">Kaushal Singh R D</h5>
							<p class="font-9 bold_font light_blue mb-0">Co-Founder</p>
							<p class="d-flex align-items-center justify-content-end">
								<a target="_blank" href="https://linkedin.com/in/kaushalsingh-rd/"><img src="assets/images/linkedin.svg" class="w-15 mr-1"></a>
								<a target="_blank" href="https://twitter.com/rd_kaush?s=09"><img src="assets/images/twitter.png" class="w-15 mr-1"></a>
							</p>
						</div>
						<div class="col-6">		
							<div class="advise mw-200 mh-200 position-relative mx-auto">
								<img src="assets/images/kaushal.png" class="rounded-circle w-100 h-100 o-cover" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 py-5 px-md-5 px-3 quotes">
					<p class="font-9 text-muted">Growing up, we witnessed both the struggles and growth of SME (Small and Medium Enterprises) entrepreneurs alike. We understood that the challenges of small and medium entrepreneurs are unique and requires a more nuanced approach which is different from what generally works for larger corporations.</p>
					<p class="font-9 text-muted">Our own aspiration to take up entrepreneurship coupled with burning desire to support SME entrepreneurs gave birth to Poornatha!</p>
					<p class="font-9 text-muted">Poornatha aims to make world class knowledge in entrepreneurship, leadership and business functions accessible to SME entrepreneurs in the form of small, bite sized, easy to use programs and service offerings.</p>
					<p class="font-9 text-muted">Simply put, Poornatha is here to support entrepreneurs and leaders in every which way we can.</p>
				</div>
				<!-- <div class="col-md-5 px-md-5 py-4 delay-500 animated fadeInUpShort">
					<div class="bg-white text-center z-depth-1 radius_10 h-100 team_section position-relative p-4">
						<h5 class="bold_font">Dr Bharath Krishna Sankar</h5>
						<h6 class="bold_font light_blue">Founder and Chief Mentor</h6>
						<div class="row m-0 align-items-center">
							<div class="col-lg-4 py-3 px-0">
								<img src="{{url('assets/images/team_1.jpg')}}" class="w-100 h-250 o-cover" />
							</div>
							<div class="col-lg-8 py-3 pr-0 text-left">
								<p class="font-9 text-muted l-h-28 text-left" id="founder"> Dr Bharath Krishna Sankar is the perfect epitome of how a first-generation entrepreneur can build an organisation from a tier 2 city. He has a postgraduate in commerce and has earned the national gold medal in both inter and final year of Chartered Accountancy. He is also an Associate of the Institute of Cost and Management. His doctoral...</p>
							 	<a href="javascript:void(0)" class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_1">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 px-md-5 py-4 delay-750 animated fadeInUpShort">
					<div class="bg-white text-center z-depth-1 radius_10 h-100 team_section position-relative p-4">
						<h5 class="bold_font">Mr Nagaraj Krishnan</h5>
						<h6 class="bold_font light_blue">Co-founder</h6>
						<div class="row m-0 align-items-center">
							<div class="col-lg-4 py-3 px-0">
								<img src="{{url('assets/images/team_2.jpg')}}" class="w-100 h-250 o-cover" />
							</div>
							<div class="col-lg-8 py-3 pr-0 text-left">
								<p class="font-9 text-muted l-h-28 text-left"> Nagaraj Krishnan possesses a number of qualifications across a wide spectrum. Having earned a graduate degree in Mathematics from The American College, Madurai in 1993, Nagaraj switched fields to pursue a Masters in Social Work with specialisation in Human Resources from the Madurai Institute of Social Sciences. He went on to complete his...</p>
							  	<a href="javascript:void(0)" class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_2">Read more</a>
							</div>
						</div>
					</div>
				</div>	 -->			
				<!-- <div class="col-10 delay-250 animated fadeInUpShort">
					<h2 class="my-4 bold_font text-center col-xs-12">Our Team</h2>
				</div>
				<div class="col-12 col-lg-10 row m-0 p-0">
					<div class="col-md-4 text-center col-12 px-3 pt-3 pb-3">
						<div class="advise w-200 h-200 position-relative mx-auto">
							<img src="assets/images/selvam.jpg" class="rounded-circle w-100 h-100 o-cover" />
						</div>
						<h5 class="bold_font mt-3">Selvam R</h5>
						<p class="font-9 bold_font light_blue">Co-Founder</p>
						<p class="d-flex align-items-center justify-content-center">
							<img src="assets/images/linkedin.svg" class="w-15 mr-1">
							<a target="_blank" href="https://www.linkedin.com/in/selva-r/">linkedin.com/in/selva-r/</a>
						</p>
					</div>
					<div class="col-md-4 text-center col-12 px-3 pt-3 pb-3">
						<div class="advise w-200 h-200 position-relative mx-auto">
							<img src="assets/images/suresht.png" class="rounded-circle w-100 h-100 o-cover" />
						</div>
						<h5 class="bold_font mt-3">Suresh T</h5>
						<p class="font-9 bold_font light_blue">Co-Founder</p>
						<p class="d-flex align-items-center justify-content-center">
							<img src="assets/images/linkedin.svg" class="w-15 mr-1">
							<a target="_blank" href="https://linkedin.com/in/suresh-t/">linkedin.com/in/suresh-t/</a>
						</p>
					</div>
					<div class="col-md-4 text-center col-12 px-3 pt-3 pb-3">
						<div class="advise w-200 h-200 position-relative mx-auto">
							<img src="assets/images/kaushal.png" class="rounded-circle w-100 h-100 o-cover" />
						</div>
						<h5 class="bold_font mt-3">Kaushal Singh R D</h5>
						<p class="font-9 bold_font light_blue">Co-Founder</p>
						<p class="d-flex align-items-center justify-content-center">
							<img src="assets/images/linkedin.svg" class="w-15 mr-1">
							<a target="_blank" href="https://linkedin.com/in/kaushalsingh-rd/">linkedin.com/in/kaushalsingh-rd/</a>
						</p>
					</div>
				</div>	 -->		
				<div class="col-10 delay-250 animated fadeInUpShort">
					<h2 class="my-4 bold_font text-center col-xs-12">Our Mentors</h2>
				</div>
				<div class="col-12 row m-0 p-0">
					<div class="col-md-3 col-sm-6 text-center col-12 px-3 pt-3 pb-5">
						<div class="advise one w-200 h-200 position-relative mx-auto">
							<img src="assets/images/team_1.jpg" class="rounded-circle w-100 h-100 o-cover" />
						</div>
						<h5 class="bold_font mt-3">Dr Bharath Krishna Sankar</h5>
						<p class="font-9 m-0">Chief Mentor – Poornatha</p>
						<p class="font-9 ">Chairman – Aparajitha Group</p>
						<span class="position-absolute l-0 r-0 b-0 mb-4"><a href="javascript:void(0)" class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_1">Read more</a></span>
					</div>
					<div class="col-md-3 col-sm-6 text-center col-12 px-3 pt-3 pb-5">
						<div class="advise one w-200 h-200 position-relative mx-auto">
							<img src="assets/images/durga.jpg" class="rounded-circle w-100 h-100 o-cover" />
						</div>
						<h5 class="bold_font mt-3">Ms Durga Krishnamurthy</h5>
						<p class="font-9">Mentor - Poornatha</p>
						<span class="position-absolute l-0 r-0 b-0 mb-4"><a href="javascript:void(0)" class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_6">Read more</a></span>
					</div>
					<div class="col-md-3 col-sm-6 text-center col-12 px-3 pt-3 pb-5">
						<div class="advise one w-200 h-200 position-relative mx-auto">
							<img src="assets/images/team_2.jpg" class="rounded-circle w-100 h-100 o-cover" />
						</div>
						<h5 class="bold_font mt-3">Mr Nagaraj Krishnan</h5>
						<p class="font-9 m-0">Managing Director - Aparajitha Corporate Services Pvt. Ltd.</p>
						<p class="font-9">Mentor - Poornatha</p>
						<span class="position-absolute l-0 r-0 b-0 mb-4"><a href="javascript:void(0)" class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_2">Read more</a></span>
					</div>
					<div class="col-md-3 col-sm-6 text-center col-12 px-3 pt-3 pb-5">
						<div class="advise one w-200 h-200 position-relative mx-auto">
							<img src="assets/images/selvam.jpg" class="rounded-circle object-top w-100 h-100 o-cover" />
						</div>
						<h5 class="bold_font mt-3">Mr Selvam R</h5> 
						<p class="font-9">Custodian - Poorna Family Office <br>Mentor - Poornatha</p>
						<span class="position-absolute l-0 r-0 b-0 mb-4"><a href="javascript:void(0)" class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_8">Read more</a></span>
					</div>
				</div>	
				<div class="col-10 delay-250 animated fadeInUpShort">
					<h2 class="my-4 bold_font text-center col-xs-12">Our Advisors</h2>
				</div>
				<div class="col-12 row m-0 p-0">
					<div class="col-md-3 col-sm-6 text-center col-12 px-3 pt-3 pb-5">
						<div class="advise one w-200 h-200 position-relative mx-auto">
							<img src="assets/images/advisor_1.jpg" class="rounded-circle w-100 h-100 o-cover" />
						</div>
						<h5 class="bold_font mt-3">Ms Akhila Rajeshwar</h5> <br>
						<p class="font-9 ">Executive Director of TiE Chennai and Member of AICTE’s taskforce for MBA/PGDM course development</p>
						<span class="position-absolute l-0 r-0 b-0 mb-4"><a href="javascript:void(0)" class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_3">Read more</a></span>
					</div>
					<div class="col-md-3 col-sm-6 text-center col-12 px-3 pt-3 pb-5">
						<div class="advise one w-200 h-200 position-relative mx-auto">
							<img src="assets/images/team_3.jpg" class="rounded-circle w-100 h-100 o-cover" />
						</div>
						<h5 class="bold_font mt-3">Mr Dinesh Ramachandran</h5>
						<p class="font-9 ">MD of TVS Logistics Services Ltd. and JMD of T V Sundram Iyengar & Sons (P) Ltd.</p>
						<span class="position-absolute l-0 r-0 b-0 mb-4"><a href="javascript:void(0)" class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_4">Read more</a></span>
					</div>
					<div class="col-md-3 col-sm-6 text-center col-12 px-3 pt-3 pb-5">
						<div class="advise one w-200 h-200 position-relative mx-auto">
							<img src="assets/images/advisor_2.jpg" class="rounded-circle w-100 h-100 o-cover" />
						</div>
						<h5 class="bold_font mt-3">Dr Venkatraman Anantha Nageswaran</h5>
						<p class="font-9 ">Member of the Prime Minister's Economic Advisory Council and Co-author of ‘Economics of Derivatives’, and ‘Derivatives’</p>
						<span class="position-absolute l-0 r-0 b-0 mb-4"><a href="javascript:void(0)" class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_5">Read more</a></span>
					</div>
					<div class="col-md-3 col-sm-6 text-center col-12 px-3 pt-3 pb-5">
						<div class="advise one w-200 h-200 position-relative mx-auto">
							<img src="assets/images/aravind.jpg" class="rounded-circle w-100 h-100 o-cover aravind_img" />
						</div>
						<h5 class="bold_font mt-3">Dr Aravind Srinivasan</h5><br>
						<p class="font-9 ">Chief Medical Officer at Aravind Eye Hospital and Founder of Livewell Institute of Rehabilitation Medicine</p>
						<span class="position-absolute l-0 r-0 b-0 mb-4"><a href="javascript:void(0)" class="bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_7">Read more</a></span>
					</div>
				</div>
				<!-- <div class="col-md-5 p-4 delay-500 animated fadeInUpShort">
					<div class="bg-white text-center z-depth-1 radius_10 h-100 team_section position-relative p-4">
						<h5 class="text-uppercase">Dinesh Ramachandran</h5>
						<div class="row m-0 align-items-center">
							<div class="col-lg-4 py-3 px-0">
								<img src="{{url('assets/images/team_3.jpg')}}" class="w-100 h-250 o-cover" />
							</div>
							<div class="col-lg-8 py-3 pr-0 text-left">
								<p class="font-9 text-muted l-h-28 text-left"> Dinesh Ramachandran is the Joint Managing Director of T V Sundram Iyengar & Sons Limited and Managing Director of TVS Logistics Services Limited. He is also the Director for various joint ventures / subsidiaries of these companies. A commerce graduate and an Associate member of both Institute of Chartered Accountants of India and Institute...</p>
							 	<a href="javascript:void(0)" class="text-uppercase bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_3">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 p-4 delay-750 animated fadeInUpShort">
					<div class="bg-white text-center z-depth-1 radius_10 h-100 team_section position-relative p-4">
						<h5 class="text-uppercase">Dr. Venkatraman Anantha Nageswaran</h5>
						<div class="row m-0 align-items-center">
							<div class="col-lg-4 py-3 px-0">
								<img src="{{url('assets/images/team_4.jpg')}}" class="w-100 h-250 o-cover" />
							</div>
							<div class="col-lg-8 py-3 pr-0 text-left">
								<p class="font-9 text-muted l-h-28 text-left"> Anantha-Nageswaran graduated with a Post-Graduate Diploma in Management (MBA) from the Indian Institute of Management, Ahmedabad in 1985. He obtained a doctoral degree in Finance from the University of Massachusetts in 1994 for his work on the empirical behaviour of exchange rates.</p>
							  	<a href="javascript:void(0)" class="text-uppercase bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_4">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 p-4 delay-500 animated fadeInUpShort">
					<div class="bg-white text-center z-depth-1 radius_10 h-100 team_section position-relative p-4">
						<h5 class="text-uppercase">Kazi Arif Uz Zaman</h5>
						<div class="row m-0 align-items-center">
							<div class="col-lg-4 py-3 px-0">
								<img src="{{url('assets/images/team_5.jpg')}}" class="w-100 h-250 o-cover" />
							</div>
							<div class="col-lg-8 py-3 pr-0 text-left">
								<p class="font-9 text-muted l-h-28 text-left"> Kazi Arif Uz Zaman has been serving as a Nominee Director on the board of Aparajitha since 2014. Kazi formerly served as Managing Director in the private equity team of Everstone Capital Advisors leading coverage of South India for Everstone based out of Bangalore. Everstone is a premier India focused alternative asset manager with assets...</p>
							 	<a href="javascript:void(0)" class="text-uppercase bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_5">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 p-4 delay-750 animated fadeInUpShort">
					<div class="bg-white text-center z-depth-1 radius_10 h-100 team_section position-relative p-4">
						<h5 class="text-uppercase">Venkatesh Srinivasan</h5>
						<div class="row m-0 align-items-center">
							<div class="col-lg-4 py-3 px-0">
								<img src="{{url('assets/images/team_6.jpg')}}" class="w-100 h-250 o-cover" />
							</div>
							<div class="col-lg-8 py-3 pr-0 text-left">
								<p class="font-9 text-muted l-h-28 text-left">Venkatesh Srinivasan (Venky) is a Managing Director in the private equity team of Everstone Capital Advisors, based out of Mumbai. Everstone is a premier India focused alternative asset manager with assets under management in excess of US$1.8 billion dedicated to private equity and real estate... </p>
							 	<a href="javascript:void(0)" class="text-uppercase bold_font font-9 text-decor-none dark-text-color position-relative stylish_link" data-toggle="modal" data-target="#team_6">Read more</a>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>


	<div class="col-xs-12 p-0" id="">
		<div class="row m-0">
			<div class="col-12">
				<h2 class="text-center mb-5 bold_font col-xs-12">Highlights</h2>
			</div>
		</div>
		<div class="row m-0 py-0 animated animatedParent">
			<div class="col-lg-4 col-md-6 p-1">
				<div class="mx-auto delay-250 animated fadeInUpShort overflow-hidden highlight">
					<img src="{{url('assets/images/about_8.JPG')}}" class="w-100 h-250 o-cover" />
				</div>
			</div>
			<div class="col-lg-4 col-md-6 p-1">
				<div class="mx-auto delay-250 animated fadeInUpShort overflow-hidden highlight">
					<img src="{{url('assets/images/about_7.png')}}" class="w-100 h-250 o-cover" />
				</div>
			</div>
			<div class="col-lg-4 col-md-6 p-1">
				<div class="mx-auto delay-250 animated fadeInUpShort overflow-hidden highlight">
					<img src="{{url('assets/images/about_2.jpg')}}" class="w-100 h-250 o-cover" />
				</div>
			</div>
			<div class="col-lg-4 col-md-6 p-1">
				<div class="mx-auto delay-250 animated fadeInUpShort overflow-hidden highlight">
					<img src="{{url('assets/images/about_3.jpg')}}" class="w-100 h-250 o-cover" />
				</div>
			</div>
			<div class="col-lg-4 col-md-6 p-1">
				<div class="mx-auto delay-250 animated fadeInUpShort overflow-hidden highlight">
					<img src="{{url('assets/images/about_4.jpg')}}" class="w-100 h-250 o-cover" />
				</div>
			</div>
			<div class="col-lg-4 col-md-6 p-1">
				<div class="mx-auto delay-250 animated fadeInUpShort overflow-hidden highlight">
					<img src="{{url('assets/images/about_5.jpg')}}" class="w-100 h-250 o-cover" />
				</div>
			</div>
			<div class="col-lg-4 col-md-6 p-1">
				<div class="mx-auto delay-250 animated fadeInUpShort overflow-hidden highlight">
					<img src="{{url('assets/images/about_6.jpeg')}}" class="w-100 h-250 o-cover" />
				</div>
			</div>
			<div class="col-lg-4 col-md-6 p-1">
				<div class="mx-auto delay-250 animated fadeInUpShort overflow-hidden highlight">
					<img src="{{url('assets/images/about_1.jpeg')}}" class="w-100 h-250 o-cover" />
				</div>
			</div>
			<div class="col-lg-4 col-md-6 p-1">
				<div class="mx-auto delay-250 animated fadeInUpShort overflow-hidden highlight">
					<img src="{{url('assets/images/about_9.jpg')}}" class="w-100 h-250 o-cover" />
				</div>
			</div>
		</div>
		<!-- <div class="row m-0">
			<div class="col-12 text-center py-5">
				<a href="javascript:void(0)" class="py-3 pl-4 btn_action text-uppercase semi_bold_font">View more <i class="fa fa-angle-right leran_more_icon p-2 rounded-circle bg-white ml-4 mr-1" aria-hidden="true"></i></a>
			</div>
		</div> -- >
	</div>
	<!-- <div class="col-xs-12 p-3 mt-4 animated animatedParent" id="">
		<div class="container p-3">
			<div class="col-12 p-0 delay-250 animated fadeInUpShort">
				<h2 class="mb-5 bold_font text-center">Our Impact</h2>
			</div>
			<div class="row m-0">
				<div class="col-md-3 p-3">
					<div class="py-5 px-3 text-center radius_10 bg-white z-depth-1">
						<h3 class="bold_font count text-danger mb-3">300</h3>
						<p class="mb-0">Pre-built websites</p>
					</div>
				</div>
				<div class="col-md-3 p-3">
					<div class="py-5 px-3 text-center radius_10 bg-white z-depth-1">
						<h3 class="bold_font count text-warning mb-3">300</h3>
						<p class="mb-0">Shortcodes</p>
					</div>
				</div>
				<div class="col-md-3 p-3">
					<div class="py-5 px-3 text-center radius_10 bg-white z-depth-1">
						<h3 class="bold_font count text-success mb-3">300</h3>
						<p class="mb-0">Happy Clients</p>
					</div>
				</div>
				<div class="col-md-3 p-3">
					<div class="py-5 px-3 text-center radius_10 bg-white z-depth-1">
						<h3 class="bold_font count text-primary mb-3">300</h3>
						<p class="mb-0">Header Styles</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- <div class="col-xs-12 p-3 animated animatedParent" id="">
		<div class="container p-3">
			<div class="col-12 p-0 delay-250 animated fadeInUpShort">
				<h2 class="bold_font text-center mb-3">Our Clients</h2>
			</div>
			<div class="row m-0 align-items-center m-h-280">
				<div class="col-md-3 p-3 text-center">
					<img src="{{url('assets/images/thangamayil_logo.svg')}}" class="mw-200 p-3 w-100 random_client" />
				</div>
				<div class="col-md-3 p-3 text-center">
					<img src="{{url('assets/images/farm_logo.png')}}" class="mw-200 p-3 w-100 random_client" />
				</div>
				<div class="col-md-3 p-3 text-center">
					<img src="{{url('assets/images/concretia_logo.png')}}" class="mw-200 p-3 w-100 random_client" />
				</div>
				<div class="col-md-3 p-3 text-center">
					<img src="{{url('assets/images/mac_logo.jpg')}}" class="mw-200 p-3 w-100 random_client" />
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 p-0 animated animatedParent" id="">
		<div class="col-12 p-3 delay-250 animated fadeInUpShort">
			<h2 class="bold_font text-center mb-5">Testimonials</h2>
		</div>
		<div class="row m-0 mt-4 p-3 bg-light">
			<div class="col-12 review-img-slider owl-carousel owl-theme animated bounceInRight delay-500">
				<div class="item mw-650 mx-auto text-center">
					<img src="{{url('assets/images/highlight_1.png')}}" class="rounded-circle w-50x mx-auto h-50x o-cover" />
				</div>
				<div class="item mw-650 mx-auto text-center">
					<img src="{{url('assets/images/highlight_2.png')}}" class="rounded-circle w-50x mx-auto h-50x o-cover" />
				</div>
				<div class="item mw-650 mx-auto text-center">
					<img src="{{url('assets/images/highlight_3.png')}}" class="rounded-circle w-50x mx-auto h-50x o-cover" />
				</div>
				<div class="item mw-650 mx-auto text-center">
					<img src="{{url('assets/images/highlight_4.png')}}" class="rounded-circle w-50x mx-auto h-50x o-cover" />
				</div>
			</div>
			<div class="col-12 py-5 review-slider owl-carousel owl-theme animated bounceInRight delay-500">
				<div class="item mw-650 mx-auto text-center">
					<h4 class="text-uppercase mb-3 bold_font">Micky Mouse</h4>
					<p class="font-9 text-muted l-h-28"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex consequat. Duis aute irure dolor in reprehenderit</p>
				</div>
				<div class="item mw-650 mx-auto text-center">
					<h4 class="text-uppercase mb-3 bold_font">John Peter</h4>
					<p class="font-9 text-muted l-h-28"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex consequat. Duis aute irure dolor in reprehenderit</p>
				</div>
				<div class="item mw-650 mx-auto text-center">
					<h4 class="text-uppercase mb-3 bold_font">Ravi Chandran</h4>
					<p class="font-9 text-muted l-h-28"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex consequat. Duis aute irure dolor in reprehenderit</p>
				</div>
				<div class="item mw-650 mx-auto text-center">
					<h4 class="text-uppercase mb-3 bold_font">Ashwin kumar</h4>
					<p class="font-9 text-muted l-h-28"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex consequat. Duis aute irure dolor in reprehenderit</p>
				</div>
			</div>
		</div>
	</div> -->

	<div class="modal fade" id="team_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body text-center p-5">
	      	<p>
	      		<img src="{{url('assets/images/team_1.jpg')}}" class="rounded-circle o-cover h-200 mw-200" />
	      	</p>
	      	<h4 class="bold_font">Dr Bharath Krishna Sankar</h4>
			<h6 class="mb-3">Chief Mentor – Poornatha <br> Chairman – Aparajitha Group</h6>
			<p class="font-9 text-muted l-h-28">Dr Bharath Krishna Sankar is the perfect epitome of how a first-generation entrepreneur can build an organisation from a tier 2 city. He has a postgraduate in commerce and has earned the national gold medal in both inter and final year of chartered accountancy. He is also an Associate of the Institute of Cost and Management. His doctoral thesis on “Determinants of entrepreneurship and its impact on MSME sector sustainability in Madurai district”, embodies his passion for uplifting the MSME sector.</p>
			<p class="font-9 text-muted l-h-28">Bharath is a well-known coach and mentor, with a passion for nurturing the entrepreneurial spirit in the younger generation. He specialises in human resource development, financial management and facilitation of change management through organizational development interventions. He has penned a column ‘Smilingly yours’ in The Hindu – Metroplus newspaper, which provided management insights for young entrepreneurs and established businessmen alike.</p>
			<p class="font-9 text-muted l-h-28">As the Chairman of the Aparajitha Corporate Services Private Ltd, an HR and compliance-related KPO headquartered at Madurai, Bharath has a string of accolades to his name. He was the recipient of TiE Chennai’s “Entrepreneur of the year” award in 2015. He was the Chairman of the Madurai Zone of CII and the Vice Chairman of ‘Celebrate Madurai’ Committee. He is a founding board member of Michigan Academy for Developing Entrepreneurs, USA. He is also on the Board of Indian Bank and  the Governing Board of Thiagarajar School of Management.</p>
			<p class="font-9 text-muted l-h-28">Bharath has overseen the growth of Aparajitha Corporate Services (P) Ltd from just 10 people and a turnover of about 20 lakhs to a massive staff of 1,400 with over 12,000 deputed staff and a turnover of over 350 crore rupees for the year ending March 2018.  It currently has branches all over the country. <a target="_blank" href="https://www.aparajitha.com">(www.aparajitha.com)</a>.</p>
			<p class="font-9 text-muted l-h-28">Aparajitha Foundations, a trust promoted by the group, started ‘TTT’ or ‘Thalir Thiran Thittam’ (in Tamil) or ‘Tim Tim Tare’ (in Hindi) – a life skills program for adolescents, that have already made an impact on 15 million students in 13 states of India covering five languages. <a target="_blank" href="https://www.aparajitha.org">(www.aparajitha.org)</a></p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="team_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body text-center p-5">
	      	<p>
	      		<img src="{{url('assets/images/team_2.jpg')}}" class="rounded-circle o-cover h-200 mw-200" />
	      	</p>
	      	<h4 class="bold_font">Mr Nagaraj Krishnan</h4>
			<h6 class="mb-3">Managing Director - Aparajitha Corporate Services Private Limited <br>Mentor - Poornatha</h6>
			<p class="font-9 text-muted l-h-28">Nagaraj Krishnan possesses a number of qualifications across a wide spectrum. Having earned a graduate degree in Mathematics from The American College, Madurai in 1993, Nagaraj switched fields to pursue a Masters in Social Work with specialisation in Human Resources from the Madurai Institute of Social Sciences. He went on to complete his MBA specialising in HR & Marketing from the Thiagarajar School of Management.</p>
			<p class="font-9 text-muted l-h-28">Nagaraj has aptly applied his varied professional qualifications, playing an instrumental role in conceptualising Aparajitha Corporate Services Ltd and helping it reach new heights as the MD of the company. His expertise in labour & industrial laws, combined with his logical process-oriented approach, and people-focused leadership has positioned Aparajitha as the market leader in “Compliance Knowledge Process Outsourcing Services” in India. Nagaraj is considered to be a thought leader for bringing corporate labour and industrial legal compliance as an organized sector in the country. <a target="_blank" href="https://www.aparajitha.com">(www.aparajitha.com)</a>.</p>
			<p class="font-9 text-muted l-h-28">Nagaraj has a number of achievements to his name. He was part of the CII – Young Indian delegation at the G20 Young Entrepreneurship Summit held at Nice – France (2011) and Mexico City – Mexico (2012). He was the Founding Chairman of YI – CII, Madurai Chapter. He is the current chairman of CII, Madurai Zone and actively participates in different forums of CII at the regional and national levels.</p>
			<p class="font-9 text-muted l-h-28">Nagaraj has also been awarded “Entrepreneur of the Year – 2015” by TieCon and featured as “Social Entrepreneur – 2011” by the Outlook Magazine. Under his leadership, Aparajitha was recognized as the Top 500 SME Companies in 2012, 2013 and Top 100 SME Companies in the year 2015. Aparajitha is one of the few companies from Tamil Nadu to have attracted private equity investment from Global player Everstone Capital from Singapore.</p>
			<p class="font-9 text-muted l-h-28">Nagaraj is also one of the Trustees in Aparajitha Foundations which is the CSR arm of Aparajitha Corporate Services, dedicated to transforming the youth by imparting training for the right attitude and greater awareness about their life. For a decade now the organisation has been making dedicated and effective efforts to build a stronger community through various programs. <a target="_blank" href="https://www.aparajitha.org">(www.aparajitha.org)</a></p>
			<p class="font-9 text-muted l-h-28">In his free time, Nagaraj is an avid sports person who passionately promotes badminton and golf.</p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="team_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body text-center p-5">
	      	<p>
	      		<img src="{{url('assets/images/advisor_1.jpg')}}" class="rounded-circle o-cover h-200 mw-200" />
	      	</p>
	      	<h4 class="bold_font">Ms Akhila Rajeshwar</h4>
			<h6 class="mb-3">Executive Director of TiE Chennai and Member of AICTE’s taskforce for MBA/PGDM course development</h6>
			<p class="font-9 text-muted l-h-28">As the Executive Director of TiE Chennai, Ms Akhila is responsible for running the Chennai chapter of TiE, world’s largest not for profit organization that fosters entrepreneurship. Under her leadership, the chapter won the ‘Best chapter’ award in 2014 and 2019 and was one among the best performing chapters in 2015 and 2017. She was also awarded “Best Executive Director” by TiE Global from amongst 61 chapters in 2016 and 2018.</p>
			<p class="font-9 text-muted l-h-28">With about 17 years of experience in top management, mentoring, training and development, she also possesses sector expertise ranging across youth empowerment, education, and healthcare. </p>
			<p class="font-9 text-muted l-h-28">Ms Akhila is an exceptional coach for Entrepreneurs and a regular speaker at Entrepreneurship forums. She is a “Certified Coach” of Marshall Goldsmith Stakeholder Centered Coaching.</p>
			<p class="font-9 text-muted l-h-28">Ms Akhila has served as the India Director for Project AIRSWEEE (All India Road Show for Women Economic Empowerment through Entrepreneurship), an initiative of TiE Global and funded by the US Mission in India, US Department of State. She is also a Member of All India Council for Technical Education’s (AICTE) taskforce for MBA/PGDM course development in Innovation, Entrepreneurship and Venture Development (IEV) as part of Start-up Innovation Mission initiative.</p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="team_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body text-center p-5">
	      	<p>
	      		<img src="{{url('assets/images/team_3.jpg')}}" class="rounded-circle o-cover h-200 mw-200" />
	      	</p>
	      	<h4 class="bold_font">Mr Dinesh Ramachandran</h4>
			<h6 class="mb-3">MD of TVS Logistics Services Ltd. and JMD of T V Sundram Iyengar & Sons (P) Ltd.</h6>
			<p class="font-9 text-muted l-h-28">Mr. R Dinesh, 53, is the fourth generation TVS Family member, has worked his way up the organization ladder – as is the tradition in the family. A Commerce Graduate and an Associate Member of Institute of Chartered Accountants of India and Institute of Cost & Works Accountants of India. He is the Managing Director of TVS Logistics Services Limited and Joint Managing Director of T V Sundram Iyengar & Sons Private Limited. Apart from the above, he is also Director for various joint ventures and subsidiaries of these companies.</p>
			<p class="font-9 text-muted l-h-28">He has been elected as the Chairman for CII Southern Region for the year 2018-2019. Mr. Dinesh is also the Chairman – Logistics Sector Skill Council & CII Institute of Logistics Advisory Council (2018-19).</p>
			<p class="font-9 text-muted l-h-28">Mr. Dinesh has won many awards including, ‘Entrepreneur of the Year’ award for ‘Services’ category by Ernst & Young in February 2017. He is also the recipient of TiECON’s ‘Next Gen Entrepreneur of the year 2014’ award and ‘Emerging Entrepreneur’ award by CII in 2010.</p>
			<p class="font-9 text-muted l-h-28">Mr. Dinesh, often referred as ‘game changer’ within the fraternity, has started TVS Logistics (TVS LSL) in 2004. Since then under his able leadership the company has grown multifold to become a billion-dollar company in 2017. TVS LSL is the first company to get private equity funding within the group. TVS Logistics has presence across the globe, making it a truly global company and serving customers in over 50 countries. TVS LSL employs around 19,000 strong work force in India. It’s UK arm also provides over 2500 jobs in the UK.</p>
			<p class="font-9 text-muted l-h-28">Currently, the companies under his management have a turnover of around USD 2 Billion and employ more than 25,000 people. Mr. Dinesh has been instrumental in expanding his companies’ operations globally and has set up subsidiaries in Sri Lanka, United Kingdom, Spain, Germany, Thailand, Bangladesh, United States of America, South Africa, Singapore, China and Australia.</p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="team_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body text-center p-5">
	      	<p>
	      		<img src="{{url('assets/images/advisor_2.jpg')}}" class="rounded-circle o-cover h-200 mw-200" />
	      	</p>
	      	<h4 class="bold_font">Dr Venkatraman Anantha Nageswaran</h4>
			<h6 class="mb-3">Member of the Prime Minister's Economic Advisory Council and Co-author of ‘Economics of Derivatives’, and ‘Derivatives’</h6>
			<p class="font-9 text-muted l-h-28">Anantha-Nageswaran graduated with a Post-Graduate Diploma in Management (MBA) from the Indian Institute of Management, Ahmedabad in 1985. He obtained a doctoral degree in Finance from the University of Massachusetts in 1994 for his work on the empirical behaviour of exchange rates.</p>
			<p class="font-9 text-muted l-h-28">Between 1994 and 2004, he worked for Union Bank of Switzerland (now UBS) and Credit Suisse in Switzerland and in Singapore. In July 2006, he joined Bank Julius Baer & Co. Ltd. in Singapore as the Head of Research for Asia. In March 2009, he was appointed as the Chief Investment Officer for the bank. Since July 2011, he has been a writer, consultant and teacher.</p>
			<p class="font-9 text-muted l-h-28">He is an adjunct faculty with the Singapore Management University and with the Wealth Management Institute at the Nanyang Technological University. He is a member of the Board of Directors of several companies in India and Singapore.</p>
			<p class="font-9 text-muted l-h-28">His co-authored book, ‘Economics of Derivatives’ and ‘Derivatives’ were published by the Cambridge University Press in March 2015 and October 2017 respectively. Another co-authored work, ‘Can India grow?’ has been published by Carnegie Endowment for International Peace in November 2016.</p>
			<p class="font-9 text-muted l-h-28">He writes a weekly column for MINT, an Indian financial daily, on Tuesdays ( <a target="_blank" href="https://www.livemint.com/Search/Link/Author/V.%20Anantha%20Nageswaran" class="primary-text-colot">www.livemint.com</a> ) and is an active blogger at <a target="_blank" href="https://www.thegoldstandardsite.wordpress.com">www.thegoldstandardsite.wordpress.com.</a></p>
			<p class="font-9 text-muted l-h-28">He has been appointed as a member of the Prime Minister's Economic Advisory Council from October 2019.</p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="modal fade" id="team_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body text-center p-5">
	      	<p>
	      		<img src="{{url('assets/images/durga.jpg')}}" class="rounded-circle o-cover h-200 mw-200" />
	      	</p>
	      	<h4 class="bold_font">Ms Durga Krishnamurthy</h4>
			<h6 class="mb-3">Mentor - Poornatha</h6>
			<p class="font-9 text-muted l-h-28">A founding member of the Aparajitha group. She has been a teacher for a major part of her career and is a sounding board for many youngsters. Social causes, especially education and healthcare are closest to her heart. She has been instrumental in the creation of the life skills programme ‘TTT’ or ‘Thalir Thiran Thittam’ (in Tamil) or ‘Tim Tim Tare’ (in Hindi) for adolescents and is a major driving force behind it. The program has reached 15 million students in 13 states of India covering five languages through Aparajitha Foundations. <a target="_blank" href="https://www.aparajitha.org/">(aparajitha.org)</a></p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="team_7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body text-center p-5">
	      	<p>
	      		<img src="{{url('assets/images/aravind.jpg')}}" class="rounded-circle o-cover h-200 mw-200" />
	      	</p>
	      	<h4 class="bold_font">Dr. Aravind Srinivasan</h4>
			<h6 class="mb-3">Chief Medical Officer at Aravind Eye Hospital and Founder of Livewell Institute of Rehabilitation Medicine</h6>
			<p class="font-9 text-muted l-h-28">Dr. Aravind Srinivasan holds a Graduates degree in Medicine from PSG Institute of Medical Sciences, Coimbatore and MS (Ophthalmology) from Aravind Eye Institute and Postgraduate Institute of Ophthalmology, Madurai.</p>
			<p class="font-9 text-muted l-h-28">Having worked in the medical field, he also has a passion for management. He holds an MBA with specialization in strategy from the University of Michigan, Ann Arbor, USA. After his MBA, he took over as the Administrator of Aravind Eye Care System and was instrumental in bringing changes to the various facets of the organization. From 2011, he is serving the organization in the role of Director-Projects of Aravind Eye Care System. He sits on Board of ‘Govel Trust’ that runs the Aravind Eye Hospitals. From 2017, he is leading the Aravind Eye Hospital Chennai as Chief Medical Officer.</p>
			<p class="font-9 text-muted l-h-28">On the clinical front, Dr. Aravind is a high-volume cataract surgeon.  And in Non-Clinical aspects, he is innovating, executing and working with all stake holders in the respective branches to ensure harmony in work, mentoring staff to invent and implement innovations in areas of need to ensure better patient-centred care.</p>
			<p class="font-9 text-muted l-h-28">He is involved in teaching eye health management courses. He is also a resource person for Indian Institute of Management IIM and Mentor for the MBA students of Wharton School of Business and University of Michigan. Besides administration of the hospitals and grooming managers, Dr.Aravind also evaluates new projects and ensures replication of the “ARAVIND Way” – As a Trainer and Mentor at Management courses, he contributes in extending the Aravind Model of high volume, high quality, affordable cost eye care to developing nation.</p>
			<p class="font-9 text-muted l-h-28">He is the recipient of QIMPRO GOLD STANDARD 2017 Award in the category - Role Model Leader for World-Class Quality in the field of health care. He has also received the Distinguished Alumnus Award for the year 2013 by the PSG Institute of Medical Sciences and Research.</p>
			<p class="font-9 text-muted l-h-28">He is the founder of LiveWell, an Institute of Rehabilitation Medicine which strives hard to improve the lives of people affected with stroke.</p>
			<p class="font-9 l-h-28 text-muted">Dr. Aravind has published several research papers in Peer Reviewed International and State Journals.</p>
			<a href="https://aravind.org/doctors/dr-s-aravind/#1549962585170-20ef3273-ae18026a-561b" target="_blank">https://aravind.org/doctors/dr-s-aravind/#1549962585170-20ef3273-ae18026a-561b</a>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="team_8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body text-center p-5">
	      	<p>
	      		<img src="{{url('assets/images/selvam.jpg')}}" class="rounded-circle w-200 object-top o-cover h-200 mw-200" />
	      	</p>
	      	<h4 class="bold_font">Mr Selvam R</h4>
			<h6 class="mb-3">Custodian - Poorna Family Office <br>Mentor - Poornatha</h6>
			<p class="font-9 text-muted l-h-28">Selvam earned his Bachelor’s degree in commerce and then earned his Master of Finance and Control degree from Madurai Kamaraj University in 2002. He went on to pursue his Master’s in Business Management, specialising in Finance from the Thiagarajar School of Management in 2012.</p>
			<p class="font-9 text-muted l-h-28">Selvam had a humble beginning to his professional career with Aparajitha Corporate Services and has now grown to the role of Custodian of Poorna Family Office. He has with sheer grit, determination and hard work grown to what he is today. As the custodian and operational head of the family office, he is responsible for activities ranging from, but not limited to wealth and investment management, tax planning, succession planning, stakeholder alignment, property management, relationship maintenance (family and friends), charity and philanthropy.</p>
			<p class="font-9 text-muted l-h-28">He has been instrumental in the growth of Poornatha and plays an important role as the representative of the Poorna Family office.</p>
			<p class="font-9 text-muted l-h-28">He is known for his charismatic smile that lights up the whole room.</p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- <div class="modal fade" id="team_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body text-center p-5">
	      	<p>
	      		<img src="{{url('assets/images/advisor_2.jpg')}}" class="rounded-circle o-cover h-200 mw-200" />
	      	</p>
	      	<h4 class="bold_font text-uppercase">Kazi Arif Uz Zaman</h4>
			<h6 class="mb-3">Managing Director</h6>
			<p class="font-9 text-muted l-h-28">Kazi Arif Uz Zaman has been serving as a Nominee Director on the board of Aparajitha since 2014. Kazi formerly served as Managing Director in the private equity team of Everstone Capital Advisors leading coverage of South India for Everstone based out of Bangalore. Everstone is a premier India focused alternative asset manager with assets under management in excess of US$2.5 billion dedicated to private equity and real estate.</p>
			<p class="font-9 text-muted l-h-28">Kazi has 22 years of experience in private equity, M&A and investment banking with organisations such as Everstone, ICICI Venture and ANZ Grindlays Bank / ANZ Investment Bank. He holds a degree in Electrical Engineering from IIT Kharagpur, Post Graduate Diploma in Management from IIM Ahmedabad and is a CFA charter holder from CFA Institute, U.S.A.</p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="team_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body text-center p-5">
	      	<p>
	      		<img src="{{url('assets/images/team_6.jpg')}}" class="rounded-circle o-cover h-200 mw-200" />
	      	</p>
	      	<h4 class="bold_font text-uppercase">Venkatesh Srinivasan (Venky)</h4>
			<h6 class="mb-3">Managing Director</h6>
			<p class="font-9 text-muted l-h-28">Venkatesh Srinivasan (Venky) is a Managing Director in the private equity team of Everstone Capital Advisors, based out of Mumbai. Everstone is a premier India focused alternative asset manager with assets under management in excess of US$1.8 billion dedicated to private equity and real estate.</p>
			<p class="font-9 text-muted l-h-28">Venky has over 16 years of experience in consulting, financial services, operations and entrepreneurship. Prior to joining Everstone, Venky worked with Future Capital Holdings as COO, at McKinsey as an Associate Partner in the financial services practice serving clients across India, China and South East Asia, and at Procter and Gamble in Category Marketing, Business Development and Demand Planning. Venky has a Post Graduate Diploma in Management from IIM-Ahmedabad and a Bachelors Degree in Engineering from Mumbai University.</p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div> -->

	@include('includes.footer')
	@stop
</div>