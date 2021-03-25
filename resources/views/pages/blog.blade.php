@extends('layouts.default')
@section('content')
<title>Poornatha</title>
<div class="col-12 p-0" id="service_page">
	<div class="col-md-12 row p-0 m-0 pt-5 section blogs">
		<div class="container other_blog_container position-relative">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						@if(count($active_blogs))
						<?php $now = 250; ?>
						@foreach($active_blogs as $active)
							<div class="col-md-4 col-sm-4 col-xs-12 active_blogs nopadding animatedParent">
								<div class="  text-center blog_image_div delay-{{$now}}">
									<img src="{{ $active->show_image  }}" class="blog_image noCover " />
									<div class="text padding-10 blog_content" >
										<div class="row m-0">
											<p class="col-md-6 col-sm-6 col-6 innerBlog_p1 delay-250 time ">By: <span>{{ ($active->author!="")?$active->author:'Poornatha' }}</span></p>
											<p class="col-md-6 col-sm-6 col-6 innerBlog_p2 delay-250 time "><i class="fa fa-calendar"></i> {{ $active->show_date }} </p>
											<p class="delay-250 heading"><a href="{{ url('blog') }}/{{ $active->url }}" title="{{ $active->title }}">{{ $active->title }}</a></p>
											<p class="delay-250 description"> {{ $active->short_description }} </p>
											<a class="delay-250 seemore-btn" title="{{ $active->title }}" href="{{ ($active->blog_type=='blog')?url('blog'):url('knowledge-center') }}/{{ $active->url }}">
												<button class="cbtn dwellbtn btn-arrow btn-border read_more_blog">
													<span>Read more</span>
												</button>
											</a>	
										</div>
									</div>
								</div>
							</div>
						<?php $now += 0 ?>
						@endforeach
						<div class="col-md-12">
						{{ $active_blogs->appends(request()->query())->links("pagination::bootstrap-4") }}
						</div>
						@else
						<img src="{{ url('assets/images/blog2.png') }}">
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
@include('includes.footer')
@endsection