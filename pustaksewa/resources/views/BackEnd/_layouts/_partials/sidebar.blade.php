
<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="devider"></li>
                    
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-emoticon fa-fw"></i> <span class="hide-menu">User<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="{{route('admin.admins')}}"><span class="hide-menu">Admin</span></a> </li>
                            <li> <a href="{{route('admin.user')}}"><span class="hide-menu">Users</span></a> </li>
                            
                        </ul>
                    </li>
                    <li> <a href="{{route('admin.category')}}" class="waves-effect"><i class="fa fa-archive"></i><span class="hide-menu">Category</span></a> </li>
                    <li> <a href="{{route('admin.product')}}" class="waves-effect"><i class="fa fa-book"></i><span class="hide-menu">Books</span></a> </li>
                    
                    
                    <li><a href="" class="waves-effect" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    <form action="{{route('logout')}}" id="logout-form" method="POST">
                            @csrf
                                

                        </form>


                    
                    </li>

                        
                    <li class="devider"></li>
                    
                </ul>
            </div>
        </div>