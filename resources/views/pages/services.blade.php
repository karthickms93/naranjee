@extends('layouts.default')
@section('content')
<title>Poornatha</title>
<div class="col-12 p-0" id="service_page">
	<div class="col-xs-12 tech_bg section pt-5" id="section1">
		<div class="services_inner_rel animatedParent container pt-5 mt-5" data-sequence="500">
			<div class="mw-500 mt-5 pt-3 px-3">
				<h3 class="animated text-white bold_font heading_line fadeInUpShort mb-4 slow" data-id='1'>We have the tools to support your growth!</h3>
				<p class="animated text-white fadeInUpShort font-9 slow heading mb-5" data-id='2'>Our products and services foster entrepreneurship and address MSME challenges through <b>'Prevent, Assess and Enhance'</b> approach</p>
			</div>
			<div class="row align-items-center mx-0 service_content mb-5">
				<h4 class="bold_font w-100 col-lg-9 mx-auto py-3 pl-4 btn_action semi_bold_font text-center effect2 position-relative mw-280 text-white mt-5 mb-4 violet text-white violet">Prevent</h4>	
				<div class="col-xs-12 col-lg-12 mx-auto row m-0 p-0 pb-5 animated animatedParent">
					<div class="col-lg-4 row m-0 col-xs-12">
						<div class="col-xs-12 py-3 mw-500  delay-250 animated fadeInUpShort mx-auto px-0">
							<div class="d-flex align-items-center justify-content-center flex-wrap bg-white radius_10 z-depth-3 service px-3 py-5">
								<div class="w-100 text-center">
									<img src="{{url('assets/images/mentoring.png')}}" class="service_icon mb-3" />
								</div>
								<h4 class="semi_bold_font font-14 text-capitalize mb-4 text-center">Journey in Joy</h4>
								<p class="font-9 text-center text-uppercase m-0">A Business leadership program - by Entrepreneurs for Entrepreneurs.</p> <p class="font-9 text-center m-0">Our flagship program bundles entrepreneurial finance and mantras for  holistic development and dramatic transformation.</p></p>
								<a href="{{url('jnj')}}" class="bold_font font-9 text-decor-none dark-text-color position-relative">Read more</a>
								<!-- <p class="font-9 text-center">You are capable of much more profits than you know! We help you unlock your true potential with a three-year plan so you can truly OWN YOUR COMPANY AND NUMBERS. The Roadmap is based on extensive research and data collation about your business,conversion of this data into numerical formats, and finally setting them into structures so that it can be analysed further for setting time-appropriate goals.</p> -->
							</div>
						</div>		
					</div>
					<div class="col-lg-4 row m-0 col-xs-12">
						<div class="col-xs-12 py-3 mw-500  delay-750 animated fadeInUpShort mx-auto px-0">
							<div class="d-flex align-items-center justify-content-center flex-wrap bg-white radius_10 z-depth-3 service px-3 py-5">
								<div class="w-100 text-center">
									 <img src="{{url('assets/images/distance.png')}}" class="service_icon mb-3" />
								</div>
								<h4 class="semi_bold_font font-14 text-capitalize mb-4 text-center">Business Roadmap</h4>
								<p class="font-9 text-center">We help you unlock your true potential with a three-year plan so you can truly OWN YOUR COMPANY AND NUMBERS.</p>
								<p class="w-100">&nbsp;</p>
								<a href="javascript:void(0)" class="bold_font font-9 text-decor-none dark-text-color position-relative" data-toggle="modal" data-target="#service_3">Read more</a>
								<!-- <p class="font-9 text-center">A select panel of expert entrepreneurial minds at Poornatha, acting as an ad-hoc virtual board, that will handhold and shed light on your company’s processes.</p> -->
							</div>
						</div>
					</div>
					<div class="col-lg-4 row m-0 col-xs-12">
						<div class="col-xs-12 py-3 mw-500  delay-1000 animated fadeInUpShort mx-auto px-0">
							<div class="d-flex align-items-center justify-content-center flex-wrap bg-white radius_10 z-depth-3 service px-3 py-5">
								<div class="w-100 text-center">
									<img src="{{url('assets/images/leadership.png')}}" class="service_icon mb-3" />
								</div>
								<h4 class="semi_bold_font font-14 text-capitalize mb-4 text-center"> Structured Leadership Support </h4>
								<p class="font-9 text-center">Organisational design, diagnosis of existing leadership and HR challenges for organisational development and HR solutions in terms of KPO and shared services. <span class="primary-text-color">(Beta Version).</span></p>
								<!-- <p class="font-9 text-center">A complete transformation plan for your business earmarking positive qualitative changes. A happy employee is tantamount to a happy leader and vice versa. We help you understand how a GREAT BUSINESS LEADER TREASURES HIS PEOPLE.</p> -->
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-4 mt-5 mt-lg-5 pt-lg-5">
					<h4 class="bold_font primary-text-color mt-lg-5 mb-3 pt-lg-5 mt-lg-6">Get Return on Technology</h4>
					<p class="animated font-9 text-muted" data-id='2'>We have the tools to get you back into reckoning! Poornatha offers diagnostic tools for better organisational assessment.</p>
					<p class="animated font-9 text-muted" data-id='2'>Coaching services for better entrepreneurial management, and a supportive ecosystem through a network of like-minded entrepreneurs. Read on to know more.</p>
				</div> -->
			</div>
		</div>
	</div>
	<div class="col-xs-12 p-3" id="">
		<div class="row align-items-center mx-0 service_content mb-5">
			<div class="w-100"><h4 class="bold_font w-100 col-lg-9 mx-auto py-3 pl-4 btn_action text-white violet semi_bold_font text-center effect2 position-relative mw-280 mb-4">Assess</h4>	</div>
			<div class="col-xs-12 col-lg-9 mx-auto row m-0 p-0 animated animatedParent">
				<div class="col-lg-6 row m-0 col-xs-12">
					<div class="col-xs-12 py-3 mw-500  delay-250 animated fadeInUpShort mx-auto px-0">
						<div class="d-flex align-items-center justify-content-center flex-wrap bg-white radius_10 z-depth-3 service px-3 py-5">
							<div class="w-100 text-center">
								<img src="{{url('assets/images/assessment.png')}}" class="service_icon mb-3" />
							</div>
							<h4 class="semi_bold_font font-14 text-capitalize mb-4 text-center">Poornatha Assess</h4>
							<p class="font-9 text-center">A powerful assessment tool in collaboration with the prestigious Michigan Academy for Developing Entrepreneurs that gives you a quick insight at areas that need your urgent attention. <span class="primary-text-color">(Coming soon)</span></p>
							<!-- <p class="font-9 text-center">You are capable of much more profits than you know! We help you unlock your true potential with a three-year plan so you can truly OWN YOUR COMPANY AND NUMBERS. The Roadmap is based on extensive research and data collation about your business,conversion of this data into numerical formats, and finally setting them into structures so that it can be analysed further for setting time-appropriate goals.</p> -->
						</div>
					</div>		
				</div>
				<div class="col-lg-6 row m-0 col-xs-12">
					<div class="col-xs-12 py-3 mw-500  delay-750 animated fadeInUpShort mx-auto px-0">
						<div class="d-flex align-items-center justify-content-center flex-wrap bg-white radius_10 z-depth-3 service px-3 py-5">
							<div class="w-100 text-center">
								<img src="{{url('assets/images/tracker.png')}}" class="service_icon mb-3" />
							</div>
							<h4 class="semi_bold_font font-14 text-capitalize mb-4 text-center">Tracker</h4>
							<p class="font-9 text-center">Software assessment tools to compare forecast and actuals that will enable you to take remedial actions at the appropriate time <span class="primary-text-color">(Coming soon)</span></p>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<p>&nbsp;</p>

							<!-- <p class="font-9 text-center">A select panel of expert entrepreneurial minds at Poornatha, acting as an ad-hoc virtual board, that will handhold and shed light on your company’s processes.</p> -->
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="col-lg-4 mt-5 mt-lg-5 pt-lg-5">
				<h4 class="bold_font primary-text-color mt-lg-5 mb-3 pt-lg-5 mt-lg-6">Get Return on Technology</h4>
				<p class="animated font-9 text-muted" data-id='2'>We have the tools to get you back into reckoning! Poornatha offers diagnostic tools for better organisational assessment.</p>
				<p class="animated font-9 text-muted" data-id='2'>Coaching services for better entrepreneurial management, and a supportive ecosystem through a network of like-minded entrepreneurs. Read on to know more.</p>
			</div> -->
		</div>
		<div class="row align-items-center mx-0 service_content">
			<div class="w-100"><h4 class="bold_font w-100 col-lg-9 mx-auto py-3 pl-4 btn_action text-white violet semi_bold_font text-center effect2 position-relative mw-280 mb-4">Enhance</h4>	</div>
			<div class="col-xs-12 col-lg-9 mx-auto row m-0 p-0 animated animatedParent">
				<div class="col-lg-6 mx-auto row m-0 col-xs-12">
					<div class="col-xs-12 py-3 mw-500  delay-250 animated fadeInUpShort mx-auto px-0">
						<div class="d-flex align-items-center justify-content-center flex-wrap bg-white radius_10 z-depth-3 service px-3 py-5">
							<div class="w-100 text-center">
								<img src="{{url('assets/images/consultant.png')}}" class="service_icon mb-3" />
							</div>
							<h4 class="semi_bold_font font-14 text-capitalize mb-4 text-center">Consulting capabilities</h4>
							<p class="font-9 text-center mb-0">Specific need-based corrective recommendations and solutions</p>
							<p>&nbsp;</p>
						</div>
					</div>		
				</div>	
				<div class="col-lg-6 mx-auto row m-0 col-xs-12">
					<div class="col-xs-12 py-3 mw-500  delay-500 animated fadeInUpShort mx-auto px-0">
						<div class="d-flex align-items-center justify-content-center flex-wrap bg-white radius_10 z-depth-3 service px-3 py-5">
							<div class="w-100 text-center">
								<img src="{{url('assets/images/virtual.png')}}" class="service_icon mb-3" />
							</div>
							<h4 class="semi_bold_font font-14 text-capitalize mb-4 text-center">Virtual Board</h4>
							<p class="font-9 text-center">Get the advantages of having a corporate board for your business minus the complexities. A select panel of expert entrepreneurial minds at Poornatha, act as an ad-hoc virtual board.</p>
							<!-- <p class="font-9 text-center">The Poornatha Litmus Test/ The Poornatha Scan/ Eagle’s EYE View/The Poornatha Assessment: A powerful diagnostic survey in collaboration with the prestigious Michigan Academy for Developing Entrepreneurs that gives you a quick insight at areas that need your urgent attention. Just take this quick survey to find out!</p> -->
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="col-lg-4 mt-5 mt-lg-5 pt-lg-5">
				<h4 class="bold_font primary-text-color mt-lg-5 mb-3 pt-lg-5 mt-lg-6">Get Return on Technology</h4>
				<p class="animated font-9 text-muted" data-id='2'>We have the tools to get you back into reckoning! Poornatha offers diagnostic tools for better organisational assessment.</p>
				<p class="animated font-9 text-muted" data-id='2'>Coaching services for better entrepreneurial management, and a supportive ecosystem through a network of like-minded entrepreneurs. Read on to know more.</p>
			</div> -->
		</div>
		<div class="container">
			<div class="row m-0 pt-5">
				<div class="col-xs-12 col-md-12">
					<h2 class="text-center bold_font col-xs-12 mb-3">Our Expertise</h2>
					<p class="text-muted mb-5 text-center l-h-28 col-md-9 mx-auto">Our expertise spans across three core areas that form the basis of entrepreneurship and leadership: <b class="bold_font">Financial Management, Human Resource Development and Change Management Processes</b>. With our expertise and services, we convert your needs into actionable deliverables to ensure that your businesses succeed.</p>
				</div>
			</div>
			<div class="row m-0 col-xs-12 animated animatedParent">
				<div class="col-lg-4 col-xs-12 col-sm-6 p-3">
					<div class="mx-auto pb-4 border-bottom-xs delay-250 animated fadeInUpShort">
						<div class="w-100 delay-250 animated pulse"><span class="expertise-icons d-inline-block develop"></span></div>
						<h5 class="bold_font mb-3 pr-3">Financial Management</h5>
						<p class="font-9 text-muted l-h-28">Our team has over 30 years of combined domain expertise in auditing, financial statement preparation, financial analysis, and other accounting services. We will help you develop acumen to appreciate your numbers, prepare and analyse your financial statements, and draw insights on the performance of your business so that you can take well-informed business decisions.</p>
					</div>
				</div>
				<div class="col-lg-4 col-xs-12 col-sm-6 p-3">
					<div class="mx-auto pb-4 border-bottom-xs delay-500 animated fadeInUpShort">
						<div class="w-100 delay-500 animated pulse"><span class="expertise-icons d-inline-block analytics"></span></div>
						<h5 class="bold_font mb-3 pr-3">Human Resource Development</h5>
						<p class="font-9 text-muted l-h-28">With extensive experience in workforce management and HR development, we collaborate with local and foreign partners so your company can adhere to professional standards. Our aim is to create a positive work culture that improves collaboration, accountability, and efficiency for your organization and fosters trust and empathetic professionalism. </p>
					</div>
				</div>
				<div class="col-lg-4 col-xs-12 col-sm-6 p-3">
					<div class="mx-auto pb-4 delay-750 animated fadeInUpShort">
						<div class="w-100 delay-750 animated pulse"><span class="expertise-icons d-inline-block user_exp"></span></div>
						<h5 class="bold_font mb-3 pr-3">Change Management Process</h5>
						<p class="font-9 text-muted l-h-28">Our team comprises of successful entrepreneurs with sustainable organisations. Our mentors have not only observed but also practised the best possible methods for a leader to prepare, manage, and reinforce change on a personal and organisational level. Our offerings include mantras rooted in a culture that explores themes of personal development needed to drive change.</p>
					</div>
				</div>
			</div>
			<!-- <div class="row m-0">
				<div class="col-12 text-center pb-5">
					<a href="javascript:void(0)" class="py-3 pl-4 btn_action text-uppercase semi_bold_font">Learn more <i class="fa fa-angle-right leran_more_icon p-2 rounded-circle bg-white ml-4 mr-1" aria-hidden="true"></i></a>
				</div>
			</div> -->
		</div>
	</div>

	<div class="modal fade" id="service_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body p-5">
	      	<h4 class="bold_font mb-3">Business Plan</h4>
	      	<p class="font-9">
	      		You are capable of much more profits than you know! We help you unlock your true potential with a three-year plan so you can truly OWN YOUR COMPANY AND NUMBERS. The Roadmap is based on extensive research and data collation about your business,conversion of this data into numerical formats, and finally setting them into structures so that it can be analysed further for setting time-appropriate goals.
	      	</p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="service_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body p-5">
	      	<h4 class="bold_font mb-3">Business Roadmap</h4>
	      	<p class="font-9">
	      	</p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="service_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body p-5">
	      	<h4 class="bold_font mb-3">Business Roadmap</h4>
	      	<p class="font-9">
	      		We help you unlock your true potential with a three-year plan so you can truly OWN YOUR COMPANY AND NUMBERS. The Roadmap is based on extensive research and data collation about your business, conversion of this data into numerical formats, and finally setting them into structures so that it can be analysed further for setting time-appropriate goals.
	      	</p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="service_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body p-5">
	      	<h4 class="bold_font mb-3">Transformation Plan</h4>
	      	<p class="font-9">
	      		A complete transformation plan for your business earmarking positive qualitative changes. A happy employee is tantamount to a happy leader and vice versa. We help you understand how a GREAT BUSINESS LEADER TREASURES HIS PEOPLE.
	      	</p>
	        <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    </div>
	  </div>
	</div>
@include('includes.footer')
@endsection