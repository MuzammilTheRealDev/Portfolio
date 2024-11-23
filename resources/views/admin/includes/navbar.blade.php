<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <ul class="navbar-nav" style="margin-right:0px">
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-circle-user profile fa-2xl"></i> {{ Auth::user()->name}}
                <span class="caret"> <img  src="{{asset('./admin/img/icons/arrow.png')}}" height="14px" alt=""></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" style="color: black ; text-align: center " href="{{ route('profile.edit') }}"><i class="fa-solid fa-user"></i>  Profile</a>
                <div class="dropdown-divider"></div>
                <form method="POST" style="color: black ; text-align: center " action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="color: black ; text-align: center " class="btn btn-link"><i class="fa-solid fa-right-from-bracket"></i>  Logout</button>
                </form>
            </div>
        </li>
    </ul>
</nav>