<aside class="sidebar-menu fixed">
    <div class="sidebar-inner scrollable-sidebar">
        <div class="main-menu">
            <ul class="accordion">
                <li class="menu-header">
                    Main Menu
                </li>
                <li class="bg-palette1">
                    <a href="{{ url('/home') }}">
									<span class="menu-content block">
										<span class="menu-icon"><i class="block fa fa-home fa-lg"></i></span>
										<span class="text m-left-sm">Dashboard</span>
									</span>
                        <span class="menu-content-hover block">
										Home
									</span>
                    </a>
                </li>
                <li class="openable bg-palette2" hidden>
                    <a href="#">
									<span class="menu-content block">
										<span class="menu-icon"><i class="block fa fa-book fa-lg"></i></span>
										<span class="text m-left-sm">微北洋</span>
										<span class="submenu-icon"></span>
									</span>
                        <span class="menu-content-hover block">
										微北洋 WPY
									</span>
                    </a>
                    <ul class="submenu bg-palette2">
                        <li><a href="{{ url('/wpy/download_data') }}"><span class="submenu-label">下载信息</span></a></li>
                        <li><a href="{{ url('/wpy/download_log') }}"><span class="submenu-label">下载日志</span></a></li>
                        <li><a href="{{ url('/wpy/install_info') }}"><span class="submenu-label">装机信息</span></a></li>
                        <li><a href="{{ url('/wpy/version') }}"><span class="submenu-label">版本信息</span></a></li>
                    </ul>
                </li>
                <li class="openable bg-palette2">
                    <a href="#">
									<span class="menu-content block">
										<span class="menu-icon"><i class="block fa fa-book fa-lg"></i></span>
										<span class="text m-left-sm">阅读 READING</span>
										<span class="submenu-icon"></span>
									</span>
                        <span class="menu-content-hover block">
										阅读 READING
									</span>
                    </a>
                    <ul class="submenu bg-palette2">
                        <li><a href="{{ url('/reading/summary') }}"><span class="submenu-label">SUMMARY</span></a></li>
                        <li><a href="{{ url('/reading/banner') }}"><span class="submenu-label">BANNER</span></a></li>
                        <li><a href="{{ url('/reading/starreview') }}"><span class="submenu-label">STARREVIEW</span></a></li>
                        <li><a href="{{ url('/reading/review') }}"><span class="submenu-label">REVIEW</span></a></li>
                    </ul>
                </li>
                <li class="openable bg-palette3">
                    <a href="#">
									<span class="menu-content block">
										<span class="menu-icon"><i class="block fa fa-tags fa-lg"></i></span>
										<span class="text m-left-sm">失物招领 LOST AND FOUND</span>
										<span class="submenu-icon"></span>
									</span>
                        <span class="menu-content-hover block">
										失物招领 LOST AND FOUND
									</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ url('/lostandfound/summary') }}"><span class="submenu-label">SUMMARY</span></a></li>
                    </ul>
                </li>
                <li class="openable bg-palette4">
                    <a href="#">
									<span class="menu-content block">
										<span class="menu-icon"><i class="block fa fa-flag fa-lg"></i></span>
										<span class="text m-left-sm">成绩查询 GPA</span>
										<span class="submenu-icon"></span>
									</span>
                        <span class="menu-content-hover block">
										成绩查询 GPA
									</span>
                    </a>
                    <ul class="submenu bg-palette4">
                        <li><a href="{{ url('/gpa/summary') }}"><span class="submenu-label">SUMMARY</span></a></li>
                    </ul>
                </li>
                <li class="openable bg-palette5">
                    <a href="#">
									<span class="menu-content block">
										<span class="menu-icon"><i class="block fa fa-book fa-lg"></i></span>
										<span class="text m-left-sm">自习室 STUDY ROOM</span>
										<span class="submenu-icon"></span>
									</span>
                        <span class="menu-content-hover block">
										自习室 STUDY ROOM
									</span>
                    </a>
                    <ul class="submenu bg-palette5">
                        <li><a href="{{ url('/studyroom/summary') }}"><span class="submenu-label">SUMMARY</span></a></li>
                    </ul>
                </li>
                <li class="openable bg-palette6">
                    <a href="#">
									<span class="menu-content block">
										<span class="menu-icon"><i class="block fa fa-book fa-lg"></i></span>
										<span class="text m-left-sm">课程表 Class Schedule</span>
										<span class="submenu-icon"></span>
									</span>
                        <span class="menu-content-hover block">
										课程表 Class Schedule
									</span>
                    </a>
                    <ul class="submenu bg-palette6">
                        <li><a href="{{ url('/classschedule/summary') }}"><span class="submenu-label">SUMMARY</span></a></li>
                    </ul>
                </li>
                <li class="openable bg-palette7">
                    <a href="#">
									<span class="menu-content block">
										<span class="menu-icon"><i class="block fa fa-book fa-lg"></i></span>
										<span class="text m-left-sm">新闻 NEWS</span>
										<span class="submenu-icon"></span>
									</span>
                        <span class="menu-content-hover block">
										新闻 NEWS
									</span>
                    </a>
                    <ul class="submenu bg-palette7">
                        <li><a href="{{ url('/news/summary') }}"><span class="submenu-label">SUMMARY</span></a></li>
                    </ul>
                </li>
                <li class="openable bg-palette8">
                    <a href="#">
									<span class="menu-content block">
										<span class="menu-icon"><i class="block fa fa-book fa-lg"></i></span>
										<span class="text m-left-sm">自行车 BICYCLE</span>
										<span class="submenu-icon"></span>
									</span>
                        <span class="menu-content-hover block">
										自行车 BICYCLE
									</span>
                    </a>
                    <ul class="submenu bg-palette8">
                        <li><a href="{{ url('/bicycle/summary') }}"><span class="submenu-label">SUMMARY</span></a></li>
                    </ul>
                </li>
                <li class="openable bg-palette9">
                    <a href="#">
									<span class="menu-content block">
										<span class="menu-icon"><i class="block fa fa-book fa-lg"></i></span>
										<span class="text m-left-sm">老乡查询 FELLOW</span>
										<span class="submenu-icon"></span>
									</span>
                        <span class="menu-content-hover block">
										老乡查询 FELLOW
									</span>
                    </a>
                    <ul class="submenu bg-palette9">
                        <li><a href="{{ url('/fellow/summary') }}"><span class="submenu-label">SUMMARY</span></a></li>
                    </ul>
                </li>
                <li class="openable bg-palette10">
                    <a href="#">
									<span class="menu-content block">
										<span class="menu-icon"><i class="block fa fa-book fa-lg"></i></span>
										<span class="text m-left-sm">管理 MANAGE</span>
										<span class="submenu-icon"></span>
									</span>
                        <span class="menu-content-hover block">
										管理 MANAGE
									</span>
                    </a>
                    <ul class="submenu bg-palette10">
                        <li><a href="{{ url('/manage/summary') }}"><span class="submenu-label">USER MANAGE</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="sidebar-fix-bottom clearfix">
            <div class="user-dropdown dropup pull-left">
                <a href="#" class="dropdwon-toggle font-18" data-toggle="dropdown"><i class="ion-person-add"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="inbox.html">
                            Inbox
                            <span class="badge badge-danger bounceIn animation-delay2 pull-right">1</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Notification
                            <span class="badge badge-purple bounceIn animation-delay3 pull-right">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebarRight-toggle">
                            Message
                            <span class="badge badge-success bounceIn animation-delay4 pull-right">7</span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">Setting</a>
                    </li>
                </ul>
            </div>
            <a href="" class="pull-right font-18"><i class="ion-log-out"></i></a>
        </div>
    </div><!-- sidebar-inner -->
</aside>