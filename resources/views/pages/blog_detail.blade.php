@extends('layouts.default')
@section('content')
<title>{{ $blog->title }}</title>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c7792d3e65b26b9"></script>

<div class="col-md-12 p-0" id="product_page">
	<div class="col-md-12 section p-0" id="section1">
		<div class="product_inner_rel animatedParent" data-sequence="500">
			<div class="blogs">
				<div class="container other_blog_container">
					<div class="row blog_detail">
						<div class="col-md-9 col-sm-12 col-xs-12">
							<h2 class="animated slow">{{ $blog->title }} </h2>
							<div class="row">
								<p class="col-md-6 col-sm-6 col-6 delay-250 animated slow time text-left">
									<i class="fa fa-user-circle-o"></i> By: <span>{{ ($blog->author!="")?$blog->author:'Poornatha' }}</span>
								</p>
								<p class="col-md-6 col-sm-6 col-6 delay-{250 animated slow time text-right">
									<i class="fa fa-calendar"></i> {{ $blog->show_date }} 
								</p>
							</div>
							<article class="blog_detail">
								<p class="images"><img src="{{ $blog->show_image }}" /></p>
								<div class="content">{!! $blog->blog_content !!}</div>
								@if($blog->pdf_url!="")
								<div class="col-12 d-flex"><a href="{{ $blog->pdf_url }}" class="view_more" target="_blank">View More</a></div>
								@endif
							</article>
						</div>
						@if($popular_blogs_2->count())
						<div class="col-md-3 col-sm-12 col-xs-12 detail_popular_blogs">
							<p class="head">Popular Posts </p>
							@foreach($popular_blogs_2 as $popular)
									<img src="{{ $popular->show_image  }}" alt="blog_image"/>
									<p class="animated slow time "><i class="fa fa-calendar"></i>{{ $popular->show_date}} </p>
									<p class="delay-250 animated slow link"><a href="{{ url('blog') }}/{{ $popular->url }}" title="{{ $popular->title }}">{{ $popular->title }}</a></p>
							@endforeach
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>

@include('includes.footer')
@stop