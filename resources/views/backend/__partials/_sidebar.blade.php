<!-- Left side column. contains the sidebar -->
<div class="main-sidebar">
    <!-- Inner sidebar -->
    <div class="sidebar">
        <!-- user panel (Optional) -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
           <li class="treeview">
                <a href="#"> <i class="fa fa-home "></i> <span>Example Products</span> </a>
                <ul class="treeview-menu menu-open" style="display: block;">
                    <li class="{{ (Request::is('backend/products*') ? 'active' : '') }}">
                        <a href="{{ route('products.index') }}"> <i class="fa fa-building-o"></i> <span>Products</span> <span class="pull-left-container"></span> </a>
                    </li>
                    
                    <li class="{{ (Request::is('backend/categories*') ? 'active' : '') }}">
                        <a href="{{ route('categories.index') }}"> <i class="fa fa-list-alt"></i> <span>Categories</span> <span class="pull-left-container"> </span> </a>
                    </li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
</div><!-- /.main-sidebar -->