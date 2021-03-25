@extends('layouts.default')
@section('content')
<title>Contact Us</title>

<div id="contact_page" class="animated col-12 p-0 animatedParent">
	<div class="col-xs-12 contact_bg section pt-5" id="section1">
		<div class="jnj_inner_rel position-relative pt-5 animatedParent container" data-sequence="500">
			<div class="row mx-0">
				<div class="pt-5 px-3 mw-500">
					<h3 class="animated bold_font pt-5 heading_line mb-3 fadeInUpShort text-uppercase slow" data-id='1'>Write to Us</h3>
					<!-- <p class="animated text-muted l-h-28 fadeInUpShort font-9 slow heading" data-id='2'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. </p> -->
					<div class="row py-4 mx-0">
				        <div class="form-group w-100 position-relative pb-4">
				          <input autocomplete="off" id="name" name="name" type="text" class="form-control validate py-3 outline-0 border-top-0 border-left-0 rounded-0 px-0 border-right-0 z-depth-0" required>
				          <label for="name" class="form-control-placeholder font-9 primary-text-color bold_font z-index1">Name</label>
				        </div>
				        <div class="form-group w-100 position-relative pb-4">
				          <input autocomplete="off" id="email" name="email" type="text" class="form-control validate py-3 outline-0 border-top-0 border-left-0 rounded-0 px-0 border-right-0 z-depth-0" required>
				          <label for="email" class="form-control-placeholder font-9 primary-text-color bold_font z-index1">Email</label>
				        </div>
				        <div class="form-group w-100 position-relative pb-4">
				          <textarea autocomplete="off" id="message" name="message" type="text" class="form-control validate py-3 outline-0 border-top-0 border-left-0 rounded-0 px-0 border-right-0 z-depth-0 h-90x" required></textarea>
				          <label for="message" class="form-control-placeholder font-9 primary-text-color bold_font z-index1">Message</label>
				        </div>
						<a href="javascript:void(0)" class="bg-primary semi_bold_font font-9 text-decor-none py-3 px-5 radius_30 send_message_contact text-white text-uppercase">Submit</a>
				    </div><span id="snackbar" class=""></span>
				</div>
				<div class="pt-5 ml-auto px-3 my-5">
					<div class="bg-white z-depth-1 contact_details">
						<!-- <p class="d-flex align-items-baseline"><i class="fas fa fa-phone mr-2 primary-text-color"></i><span class="font-9 text-muted">+11 2587456666</span></p> -->
						<p class="d-flex align-items-baseline"><i class="fas fa fa-envelope mr-2 primary-text-color"></i><span class="font-9 text-muted">admin@poornatha.com</span></p>
						<p class="d-flex align-items-baseline"><i class="fas fa fa-phone mr-2 primary-text-color"></i><span class="font-9 text-muted">+91 9500504441</span></p>
						<p class="d-flex align-items-baseline mw-200"><i class="fas fa fa-map-marker mr-2 primary-text-color"></i><span class="font-9 text-muted">Madurai, Tamilnadu <br/>India</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- <div class="section active sections" id="section1">
		<div class="container">	
			<p class="text-center contact_title">Got a Project in mind ?</p>
			<div class="row col-xs-12 col-md-12 col-sm-12 contact_form position_relative">
			    <div class="col-md-6 col-xs-12 col-sm-12 contact_form_child">
			    	<div class="form-group">
			        	<input type="text" id="name" name="your_name" autocomplete="off" class="form-control contact_form_input" required>
			        	<label class="form-control-placeholder" for="name">Your name</label>
			    	</div>
			  	</div>
			  	<div class="col-md-6 col-xs-12 col-sm-12 contact_form_child">
			    	<div class="form-group">
			        	<input type="text" id="email" name="your_email" class="form-control contact_form_input" required>
			        	<label class="form-control-placeholder" for="email">Your email address</label>
			      	</div>
			    </div>
			    <div class="col-md-6 col-xs-12 col-sm-12 contact_form_child">
			    	<div class="form-group">
			        	<input type="text" id="phone" name="your_phone" class="form-control contact_form_input" required>
			        	<label class="form-control-placeholder" for="phone">Phone number (optional)</label>
			    	</div>
			  	</div>
			  	<div class="col-md-6 col-xs-12 col-sm-12 contact_form_child">
			    	<div class="form-group">
			        	<input type="text" id="budget" name="your_budget" class="form-control contact_form_input" required>
			        	<label class="form-control-placeholder" for="budget">Budget (optional)</label>
			      	</div>
			    </div>	
			    <div class="col-md-12 col-xs-12 col-sm-12 contact_form_child">
			    	<div class="form-group">
			        	<textarea type="text" name="your_message" id="message" class="resize_none form-control contact_form_input" required></textarea>
			        	<label class="form-control-placeholder" for="message">Message of Question</label>
			      	</div>
			    </div>
			    <div class="col-md-12 text-center col-xs-12 col-sm-12 contact_form_child">
					<button class="cbtn btn-arrow btn-border drop send_message_contact" >
				    	<i class="fa fa-refresh fa-spin hide"></i> Send Message
				  	</button>
			    </div>
			    <span id="snackbar">Some text some message..</span>
			</div>
		</div>
    </div>
    <div class="section container-fluid project_list sections" id="section2">
    	<div class="container map_container">
    		<div id="map"></div>
    	</div>
    </div> -->
    @include('includes.footer')
</div>
@stop