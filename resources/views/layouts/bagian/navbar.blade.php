<div class="navbar-header">
        <a class="navbar-brand" href="index.html">Oclo Official</a>
    </div>

    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i><b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li class="divider"></li>
                <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </li>
    </ul>
    <!-- /.navbar-top-links -->
