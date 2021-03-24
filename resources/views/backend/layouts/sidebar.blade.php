<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="{{ route('admin.home') }}"><span >IBD</span><i class="bi bi-bootstrap-fill mt-1"></i>
                     </a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item active ">
                <a href="{{ route('admin.home') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>


            <li class="sidebar-title">Members &amp; Settings</li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-people-fill"></i>
                    <span>Users</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{ route('admin.user.index') }}">Show</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-title">Subjects &amp; Functionality</li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-book-fill"></i>
                    <span>Books</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{ route('admin.book.index') }}">Show</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('admin.book.create') }}">Add</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-folder-fill"></i>
                    <span>Category</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{ route('admin.category.index') }}">Show</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('admin.category.create') }}">Add</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item ">
                <a href="{{ route('contact.index') }}" class='sidebar-link'>
                    <i class="bi bi-phone-fill"></i>
                    <span>Concats</span>
                </a>
            </li>

        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
