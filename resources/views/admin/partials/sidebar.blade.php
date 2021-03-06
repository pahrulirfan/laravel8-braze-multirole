<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">{{ env('APP_NAME') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ Request::route()->getName() == 'dashboard' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}"><i
                    class="fa fa-columns"></i> <span>Dashboard</span></a></li>
       @can('admin')
            <li class="menu-header">Users</li>
            <li class="menu-header">Users</li>
            <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('admin.users') }}"><i
                        class="fa fa-users"></i> <span>Users</span></a></li>
        @endcan
    </ul>
</aside>
