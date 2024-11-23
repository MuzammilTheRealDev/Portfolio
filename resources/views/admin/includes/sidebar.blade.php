<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('logged')}}">
            <span class="align-middle">Dashboard</span>
        </a>

        <ul class="sidebar-nav">

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route("show")}}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Messages</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" data-toggle="collapse" href="#submenu">
                    <i class="fa-solid fa-shirt"></i> <span class="align-middle"> Products</span>  <span class="align-middle"><i class="align-middle" data-feather="chevron-down"></i></span>
                </a>
                <div class="collapse" id="submenu">
                    <ul style="list-style-type: none" class="sidebar flex-column">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="add.Product">
                                <i class="align-middle" data-feather="plus-square"></i><span class="align-middle">Add Products</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="show.admin.Product">
                                <i class="align-middle" data-feather="database"></i><span class="align-middle">Show Products</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>

