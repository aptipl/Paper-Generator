<!--Top Navigation-->
        <nav class="navbar navbar-default navbar-fixed-top main-top-navbar">
            <!--Navbar Brand-->
            <a href="/dashboard" class="navbar-brand hidden-xs hidden-sm">Paper Generator</a>
            <a href="/dashboard" class="navbar-brand visible-xs visible-sm">Paper Generator</a>
            <!--Navbar Brand-->
            <!--Notifications Bar-->
            <ul class="nav navbar-nav navbar-left">
                <li class="hidden-xs">
                    <button class="sidebar-toggle btn" data-tooltip="tooltip" data-placement="bottom" title="Sidebar"><i class="dripicons-menu"></i></button>
                </li>
                <li class="visible-xs">
                    <button class="sidebar-toggle-xs btn" data-tooltip="tooltip" data-placement="bottom" title="Sidebar"><i class="dripicons-menu"></i></button>
                </li>
            </ul>
            <!--/Notifications Bar-->


            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img alt="User Image" class="img-circle" src="{{  asset("images/user-blue.png") }}"><span class="hidden-xs">{{ Auth::user()->name }}</span></a>
                    <ul class="dropdown-menu dropdown-menu-right launcher-pad" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        </li>
                        <li class="col-xs-6"><a class="hvr-pop" href="/paper"><i class="dripicons-view-list"></i>Paper</a>
                        </li>
                        <li class="col-xs-6"><a class="hvr-pop" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="dripicons-exit"></i>Sign Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
            {{ csrf_field() }}
        </form>
        <!--/Top Navigation-->