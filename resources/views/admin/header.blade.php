<div class="navbar-fixed">
    <nav class="mynav">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo" title="Poornatha | Admin Panel">Poornatha</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse" title="menu"><i
                    class="material-icons">menu</i></a>
            <ul id="mobile-demo" class="side-nav fixed">
                <li class="side_li no-padding site_li"><img class="login_img"
                        src="{{ url('assets/images/poornatha_logo.png') }}"></li>
                <li class="side_li no-padding"><a href="{{ url('admin/dashboard') }}" class="waves-effect"><i
                            class="material-icons">widgets</i>Dashboard</a></li>
                <li class="side_li no-padding"><a href="{{ url('admin/msme') }}" class="waves-effect"><i
                            class="material-icons">account_box</i>Msme Content</a></li>
                <li class="side_li no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="{{ (Request::segment(2) == 'users') ? 'active' : ''  }}">
                            <a class="collapsible-header {{ (Request::segment(2) == 'blogs') ? 'active' : ''  }}"><i
                                    class="material-icons">forum</i>Blogs<i
                                    class="fa fa-chevron-down down {{ (Request::segment(2) == 'blogs') ? 'rotate' : ''  }}"
                                    aria-hidden="true"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="{{ url('admin/blogs') }}">List Blogs</a></li>
                                    <li><a href="{{ url('admin/blogs/add') }}">Add New Blogs</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('admin/logout') }}" class="logout">Logout</a></li>
            </ul>
        </div>
    </nav>
</div>