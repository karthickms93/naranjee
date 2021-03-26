<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Blogs;
use App\Models\MsmeForm;
use App\Models\SubscribeDetails;
use App\Models\ContactDetails;
use View;
class HomeController extends Controller
{
	public function home_page()
	{
		return View::make('pages/home');
	}
	public function another_home_page()
	{
		return View::make('pages/home2');
	}

	public function under_construction()
	{
		return View::make('pages/under_construction');	
	}

	public function products()
	{
		return View::make('pages/products');	
	}
	public function products_new()
	{
		return View::make('pages/products_new');	
	}

	public function comming_soon()
	{
		return View::make('pages/comming_soon');		
	}
	
	public function technologies()
	{
		return View::make('pages/technology');	
	}

	public function services()
	{
		return View::make('pages/services');	
	}

	public function company()
	{
		return View::make('pages/about');	
	}

	public function jnj() {
		return View::make('pages/jnj');	
	}
		public function msme() {
		return View::make('pages/msme');	
	}

	public function made() {
		return View::make('pages/made');	
	}

	public function blog(Request $request)
	{
		$active_blogs = Blogs::where('status','Active');
		$popular_blogs_2 = Blogs::where('status','Active')->where('popular','Yes');
		if($request->segment(1)=='blog')
		{
			$active_blogs = $active_blogs->where('blog_type','blog');
		}
		else
		{
			$active_blogs = $active_blogs->where('blog_type','kc');
		}
		$data['active_blogs']=$active_blogs->orderBy('created_at','desc')->paginate(9)->appends(request()->query());
		$data['popular_blogs_2']=$popular_blogs_2->orderBy('created_at','desc')->limit(2)->get();
		return View::make('pages/blog',$data);	 
	}
	public function blog_detail(Request $request)
	{
		$get_blogs=Blogs::where('url',$request->url)->get();
		
		if($get_blogs->count())
		{
			$data['blog']=$get_blogs->first();
			$popular_blogs_2 = Blogs::where('status','Active')->where('popular','Yes');
			if($request->segment(1)=='blog')
			{
				$popular_blogs_2 = $popular_blogs_2->where('blog_type','blog');
			}
			else
			{
				$popular_blogs_2 = $popular_blogs_2->where('blog_type','kc');
			}
			$data['popular_blogs_2']=$popular_blogs_2->orderBy('created_at','desc')->limit(2)->get();
			return View::make('pages/blog_detail',$data);
		}
		else
		{
			return redirect('blog');
		}
	}
	
	public function contacts()
	{
		return View::make('pages/contacts');
	}
	public function jiffy_page(){
		return View::make('pages/jiffy');
	}
	public function dwell_page(){
		return View::make('pages/dwell');
	}
	public function trippy_page(){
		return View::make('pages/trippy');
	}
	public function check_animation(){
		return View::make('pages/check');
	}
	public function ios()
	{
		return View::make('pages/ios');	
	}
	public function android()
	{
		return View::make('pages/android');	
	}
	public function web()
	{
		return View::make('pages/web');	
	}
	public function contact_details(Request $request)
	{
		$data['subject']="You have a new enquiry";
		$data['contact_name']=$request->name;
		$data['contact_email']=$request->email;
		$data['contact_message']=$request->message;
        Mail::send('emails.contact_form', $data, function($message) use($data) {
            $message->from(FROM_MAIL, SITE_NAME)->to(CONTACT_MAIL,CONTACT_NAME)->subject($data['subject']);
			return "true";
        });
	}
	public function subscribe(Request $request)
	{
		$subscribe=new SubscribeDetails();
		$subscribe->email=$request->email;
		$subscribe->save();
		return "true";
	}
	public function check_mail()
	{
		// Send Forgot password email to give user email
		$data['subject']="You have new contact";
		$data['contact_name']="Praveen";
		$data['contact_email']="Praveen";
		$data['contact_phone']="Praveen";
		$data['contact_message']="Praveen";
		$data['contact_budget']="Praveen";
		return View::make('emails/contact_form',$data);	
		exit;
        Mail::send('emails.contact_form', $data, function($message) use($data) {
            $message->from(FROM_MAIL, SITE_NAME)->to(CONTACT_MAIL,CONTACT_NAME)->subject($data['subject']);
        });
	}
	/*msme*/
	  public function msme_data(Request $request)
	  	{
         	$new_form = new MsmeForm();
			$new_form->name = $request->name;
			$new_form->company = $request->company;
			$new_form->contact = $request->contact;
			$new_form->email = $request->email;
            $new_form->save();
	
			
		$data['subject']="You have a new enquiry";
		$data['contact_name']=$request->name;
		$data['contact_email']=$request->email;
		$data['contact_message']=$request->company;
		$data['contact_no']=$request->contact;
        Mail::send('emails.msme_form', $data, function($message) use($data) {
            $message->from(FROM_MAIL, SITE_NAME)->to(CONTACT_MAIL,CONTACT_NAME)->subject($data['subject']);
			return "true";
        });


  		}

}