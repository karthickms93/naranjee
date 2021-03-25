<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs';
    protected $appends = ['show_image','show_date','custom_url','show_title'];
    public function getShowImageAttribute()
    {
    	if($this->attributes['short_image']==NULL)
    	{
    		return url('/').'/assets/images/blog2.png';
    	}
    	else
    	{
    		return url('/').'/storage/app/images/blogs/'.$this->attributes['short_image'];
    	}
    } 
    public function getShowDateAttribute()
    {
        return date('M d, Y',strtotime($this->attributes['created_at']));
    }
    public function getCustomUrlAttribute()
    {
        return url('/').'/blog/'.$this->attributes['url'];
    }
    public function getShowTitleAttribute()
    {
        if($this->attributes['meta_title']!="")
            return $this->attributes['meta_title'];
        else
            return $this->attributes['title'];
    }
}
