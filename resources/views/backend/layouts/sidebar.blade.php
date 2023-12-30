    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3"> Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>



<!-- Divider -->
<hr class="sidebar-divider">





<!-- Nav Item - Users -->
@can('User Mangement')
<li class="nav-item">
    <a class="nav-link " href="{{route('user.index')}}" >
        <i class="fas fa-fw fa-user"></i>
        <span> Users</a> </span>
    </a>
    
</li> 
@endcan
<!-- Nav Item - Categories -->
@can('Categories Mangement')
<li class="nav-item">
    <a class="nav-link " href="{{route('category.index')}}" >
        <i class="fas fa-fw fa-sitemap"></i>
        <span> Categories</a> </span>
    </a>
    
</li> 
@endcan
<!-- Nav Item - permissions -->
@can('role-list')
<li class="nav-item">
    <a class="nav-link " href="{{route('roles.index')}}" >
        <i class="fas fa-fw fa-lock"></i>
        <span> Permissions</a> </span>
    </a>
    
</li> 
@endcan


@can('SubCategories Mangement')
<li class="nav-item">
    <a class="nav-link " href="{{route('subcategory.index')}}" >
        <i class="fas fa-fw fa-lock"></i>
        <span> subcategory</a> </span>
    </a>
    
</li> 
@endcan
@can('stores Mangement')
<li class="nav-item">
    <a class="nav-link " href="{{route('store.index')}}" >
        <i class="fas fa-fw fa-lock"></i>
        <span> stores</a> </span>
    </a>
    
</li> 
@endcan

<!-- Nav Item - ProductCategory Mangement -->

@can('ProductCategory Mangement')
<li class="nav-item">
    <a class="nav-link " href="{{route('ProductCat.index')}}" >
        <i class="fas fa-fw fa-list"></i>
        <span> Products Categories</a> </span>
    </a>
    
</li> 
@endcan


@can('create Mystore')

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Mystores</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('stores.create')}}">add stores</a>
            <a class="collapse-item" href="{{route('stores.show',Auth::user()->id)}}">show stores</a>

                </div>
    </div>
</li>@endcan

<!-- Nav Item - Product Mangement -->
@can('Product Mangement')
<li class="nav-item">
    <a class="nav-link " href="{{route('product.index')}}" >
        <i class="fas fa-fw fa-list"></i>
        <span> Products </a> </span>
    </a>
    
</li> 
@endcan
<!--subdomin-->
<li class="nav-item">
    <a class="nav-link " href="{{route('showdomain')}}" >
        <i class="fas fa-fw fa-list"></i>
        <span> subdomin </a> </span>
    </a>
    
</li> 

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->

</ul>
<!-- End of Sidebar -->