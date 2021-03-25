@extends('layouts.admin.head_foot')
@section('body')
<?php
if($blog=="")
{
  $title="";
  $description="";
  $image="";
  $popular="";
  $id="";
  $type="add";
  $url="";
  $short_description="";
  $meta_keyword="";
  $meta_title="";
  $blog_type="";
  $pdf_url="";
  $author="";
  $status = "Active";
}
else
{
  $title=$blog->title;
  $description=$blog->blog_content;
  $image=$blog->show_image;
  $status=$blog->status;
  $popular=$blog->popular;
  $id=$blog->id;
  $type="edit";
  $url=$blog->url;
  $short_description=$blog->short_description;
  $meta_keyword=$blog->meta_keyword;
  $meta_title=$blog->meta_title;
  $blog_type=$blog->blog_type;
  $pdf_url=$blog->pdf_url;
  $author=$blog->author;
}
?>

<div class="container update_blog_div login_page users_section" ng-controller="add_user">
  <div class=" col s12 m12 l12 main_section" >
    <h5>{{ $page_title }}</h5>
    <form method="post" id="add_blog" enctype="multipart/form-data" name="add_blog" action="{{ url('admin/blogs/update') }}" class="blog_form">
      <input type="hidden" value="{{ csrf_token() }}" name="_token">
      <input type="hidden" id="id" name="id" value="{{ $id }}">
      <div class="form-group">
        <input type="text"  autocomplete="off" name="title" id="title" value="{{ $title }}" class="form-control contact_form_input" required>
        <label class="form-control-placeholder" for="title">Title</label>
      </div>
      <div class="clear-both">&nbsp;</div>
      <div class="form-group">
        <label class="" for="description">Description</label>
        <div id="editor">{!! $description !!}</div>
        <textarea type="text"  autocomplete="off" style="display:none" name="blog_content" id="description" class="">{{$description}}</textarea>
      </div>
      @if($image!="")
      <img class="update_blog_image" src="{{$image}}" />
      @endif
      <div class="form-group">
        <label class="placeholder">Image</label>
        <input type="file"  id="image"  name="short_image" class="form-control contact_form_input">
      </div>
      <div class="clear-both">&nbsp;</div> 
       <div class="form-group">
         <input type="text"  autocomplete="off" name="url" id="url" value="{{ $url }}" class="form-control contact_form_input" required>
         <label class="form-control-placeholder" for="url">PageURL</label>
       </div>
       <div class="clear-both">&nbsp;</div>
       <div class="form-group"> 
         <input type="text"  autocomplete="off" name="short_description" id="short_description" value="{{ $short_description }}" class="form-control contact_form_input" required>
         <label class="form-control-placeholder" for="short_description">Meta Description</label>
       </div>
       <div class="clear-both">&nbsp;</div>
       <div class="form-group"> 
         <input type="text"  autocomplete="off" name="meta_keyword" id="meta_keyword" value="{{ $meta_keyword }}" class="form-control contact_form_input" required>
         <label class="form-control-placeholder" for="meta_keyword">Meta Keywords</label>
       </div>
       <div class="clear-both">&nbsp;</div>
       <div class="form-group"> 
         <input type="text"  autocomplete="off" name="meta_title" id="meta_title" value="{{ $meta_title }}" class="form-control contact_form_input" required>
         <label class="form-control-placeholder" for="meta_title">Meta Title</label>
       </div>
       <div class="clear-both">&nbsp;</div>
       <div class="form-group"> 
         <input type="text"  autocomplete="off" name="pdf_url" id="pdf_url" value="{{ $pdf_url }}" class="form-control contact_form_input" required>
         <label class="form-control-placeholder" for="pdf_url">PDF Url</label>
       </div>
       <div class="clear-both">&nbsp;</div>
       <div class="form-group"> 
         <input type="text"  autocomplete="off" name="author" id="author" value="{{ $author }}" class="form-control contact_form_input" required>
         <label class="form-control-placeholder" for="author">Author</label>
       </div>
       <div class="form-group">
        <label class="placeholder">Type</label>
        <select name="blog_type" class="material_selects">
          <option value="blog" {{($blog_type=='blog')?'selected':''}}>Blog</option>
          <option value="kc" {{($blog_type=='kc')?'selected':''}}>Knowledge center</option>          
        </select>
      </div>
      <div class="form-group">
        <label class="placeholder">Status</label>
        <select name="status" class="material_selects">
          <option value="Active" {{($status=='Active')?'selected':''}}>Active</option>
          <option value="InActive" {{($status=='InActive')?'selected':''}}>InActive</option>          
        </select>
      </div>
      <div class="form-group">
        <label class="placeholder">Popular</label>
        <select name="popular" class="material_selects">
          <option value="Yes" {{($popular=='Yes')?'selected':''}}>Yes</option>
          <option value="No" {{($popular=='No')?'selected':''}}>No</option>          
        </select>
      </div>
      <div class="clear-both">&nbsp;</div>
      <input type="hidden" name="type" value="{{$type}}">
      <button type="button" ng-click="update_user('{{$type}}')" class="waves-effect btn_a waves-light btn-large login_btn" >
        <span ng-show="!btn_loading">Submit</span>
        <div ng-show="btn_loading" class="preloader-wrapper small active btn_loader">
          <div class="spinner-layer btn_white">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div><div class="gap-patch">
              <div class="circle"></div>
            </div><div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
      </button>
      <div class="clear-both">&nbsp;</div>
    </form>
  </div>
</div>
@stop