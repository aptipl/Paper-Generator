<!-- Sidebar Wrapper-->
<nav class="sidebar-wrapper navbar sidebar">
    <div class="sidebar-inner">
        <ul class="nav" id="side-menu">
            <li class="@if ($page == 'dashboard') active @endif"><a href="/dashboard"><i class="dripicons-home"></i><span class="li-text">Dashboard</span></a></li>
            <li class="@if ($page == 'subject') active @endif"><a href="#"><i class="fa fa-book"></i><span class="li-text">subject</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/subject"><span class="li-text">List</span></a></li>
                    <li><a href="/subject/create"><span class="li-text">Create</span></a></li>
                </ul>
            </li>
            <li class="@if ($page == 'question') active @endif"><a href="#"><i class="fa fa-question"></i><span class="li-text">question</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/question"><span class="li-text">List</span></a></li>
                    <li><a href="/question/create"><span class="li-text">Create</span></a></li>
                </ul>
            </li>
            <li class="@if ($page == 'paper') active @endif"><a href="#"><i class="fa fa-list"></i><span class="li-text">Paper</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/paper"><span class="li-text">List</span></a></li>
                    <li><a href="/paper/create"><span class="li-text">Generate</span></a></li>
                </ul>
            </li>
            <li><a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="dripicons-exit"></i><span class="li-text">Logout</span></a></li>
        </ul>
    </div>
</nav>
<!-- /#sidebar-wrapper -->