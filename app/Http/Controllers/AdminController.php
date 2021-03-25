<?php


namespace App\Http\Controllers;

use App\Http\Requests ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Mail;
use View;
use File;
use Image;
use App\Models\AdminUser;
use App\Models\Blogs;
use App\Models\MsmeForm;
class AdminController extends Controller
{
	public function login()
	{
		if(!session('admin_loggedin'))
        {
        	return View::make('admin/login');		
        }
        else
        {
			return redirect('admin/dashboard');        	
        }
		
	}
	public function logout()
	{
        $userdata['admin_loggedin']=false;
		session($userdata);
		return redirect('admin/dashboard');		
	}
	public function dashboard()
	{
		return View::make('admin/dashboard');
	}
    public function check_login(Request $request)
	{	
		$get_users=AdminUser::where('email',$request->email)->get();
        if($get_users->count())
        {
            if (Hash::check($request->password, $get_users->first()->password)) {
                $userdata['admin_loggedin']=true;
				session($userdata);
				echo  "success";
            }
            else
            {
                echo "fail";
            }
        }
        else
        {
        	$new_admin = new AdminUser();
        	$new_admin->username="admin";
        	$new_admin->email="admin@poornatha.com";
        	$new_admin->password=bcrypt("poornatha");
        	$new_admin->status="Active";
        	$new_admin->save();
        	$userdata['admin_loggedin']=true;
			session($new_admin);
			echo  "success";
        }
	}
	public function view_blog_add(Request $request)
	{
		$data['blog']="";
		$data['page_title']="Add Blog";
		return View::make('admin.blogs.update_blog',$data);		
	}
	public function view_blog_edit(Request $request)
	{
		$data['blog']=Blogs::find($request->id);
		$data['page_title']="Edit Blog";
		return View::make('admin.blogs.update_blog',$data);
	}
	
	public function view_blog_update(Request $request)
	{

		$files = request()->file('short_image');
		if($request->type=="add")
		{
			unset($request['type'],$request['id'],$request['_token']);
			//$request['short_description'] = substr($request['blog_content'],0,100).'...';
			$request['created_at']=date('Y-m-d H:i:s',time());
			$blogs=Blogs::insertGetId($request->all());
		}
		else
		{
			unset($request['type'],$request['_token'],$request['short_image']);
			//$request['short_description'] = substr($request['blog_content'],0,100).'...';
			Blogs::where('id',$request->id)->update($request->all());
			$blogs=$request->id;
		}	
		if($files!=null)
		{
			$ext=$files->getClientOriginalExtension();
        	$name=$blogs.'_'.time().'.'.$ext;
        	$files->storeAs('images/blogs/',$name);
	        $this->compress_image("storage/app/images/blogs/".$name, "storage/app/images/blogs/".$name, 80, 1440, 960);
	        $get_blog=Blogs::find($blogs);
	        $get_blog->short_image=$name;
	        $get_blog->save();
		}
		return redirect('admin/blogs');
	}

    public function view_blogs()
	{
		$data['blogs']=Blogs::get();		
		return View::make('admin/blogs/view_blog',$data);
	}
/*msme*/
    public function view_msme()
	{
		$data['msme']=MsmeForm::get();		
		return View::make('admin/msme/view_msme',$data);
	}


	/*msme*/
	public function delete_blog(Request $request)
	{
		$get_user=Blogs::find($request->id);
		if($get_user)
		{
			$get_user->delete();
		}
		return redirect('admin/blogs');
	}


	public function compress_image($source_url, $destination_url, $quality, $width = 225, $height = 225) 
    {
        $info = getimagesize($source_url);
        if($info['mime'] == 'image/jpeg')
            $image = imagecreatefromjpeg($source_url);
        elseif($info['mime'] == 'image/gif')
            $image = imagecreatefromgif($source_url);
        elseif ($info['mime'] == 'image/png')
            $image = imagecreatefrompng($source_url);
        
        imagejpeg($image, $destination_url, $quality);
        $this->crop_image($source_url,$width, $height,'',$image);
        return $destination_url;
    }
    public function crop_image($source_url='', $crop_width=225, $crop_height=225, $destination_url = '',$image){
        $image = Image::make($image);
        $image_width = $image->width();
        $image_height = $image->height();
        if($image_width < $crop_width && $crop_width < $crop_height){
            $image = $image->fit($crop_width, $image_height);
        }
        if($image_height < $crop_height  && $crop_width > $crop_height){
            $image = $image->fit($crop_width, $crop_height);
        }
        
        $primary_cropped_image = $image;
        $croped_image = $primary_cropped_image->fit($crop_width, $crop_height);

        if($destination_url == ''){
            $source_url_details = pathinfo($source_url); 
            $destination_url = @$source_url_details['dirname'].'/'.@$source_url_details['filename'].'_'.$crop_width.'x'.$crop_height.'.'.@$source_url_details['extension']; 
        }
        $croped_image->save($destination_url); 
        return $destination_url; 
    }
}