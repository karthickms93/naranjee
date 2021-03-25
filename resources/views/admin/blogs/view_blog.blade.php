@extends('layouts.admin.head_foot')
@section('body')
<div class="row">
    <div class="col l12 s12 m12">
        <div class="col l12 s12 m12">
            <h5>Blogs</h5>
            <div class="input-field banner_search">
                <input id="search" placeholder="Search blogs" type="search" class="search_input">
                <span class="search_icon"></span>
            </div>
            <div class="panel panel-default panel-custom">
                <a class="floatbtn floating-button waves-effect waves-light" href="{{ url('admin/blogs/add') }}">
                    <span class="plus blog_plus">+</span>
                    <img class="edit" src="{{ url('assets/images/add.png') }}">
                </a>
                <table id="user_listing" class="display view_blog_table res_table">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Popular</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $i=1;
            foreach($blogs as $blog)
            {
              ?>
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->status }}</td>
                            <td>{{ $blog->popular }}</td>
                            <td>
                                <a href="blogs/edit/{{ $blog->id }}" title="Edit"><i class="material-icons">edit</i></a>
                                <a href="javascript:void(0)" data="/admin/blogs/delete/{{ $blog->id }}"
                                    data-model="#modal1" data-class=".user_delete" class="delete_list" title="Delete"><i
                                        class="material-icons">delete</i></a>
                            </td>
                        </tr>
                        <?php
            }
            ?>
                    </tbody>
                </table>
                <div id="modal1" class="modal bottom-sheet">
                    <div class="modal-content">
                        <h5>Delete Blog</h5>
                        <p>Are you sure that you want to delete this blog?</p>
                    </div>
                    <div class="modal-footer">
                        <a href="" class=" modal-action modal-close waves-effect waves-green btn user_delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop