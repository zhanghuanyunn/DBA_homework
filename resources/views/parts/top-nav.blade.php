{{--<header class="top-nav">--}}
    {{--<div class="top-nav-inner">--}}
        {{--<div class="nav-header">--}}
            {{--<button type="button" class="navbar-toggle pull-left sidebar-toggle" id="sidebarToggleSM">--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a href="{{ url('/') }}" class="brand">--}}
                {{--<i class="fa fa-dashboard"></i><span class="brand-name"> {{ config('app.name', 'Laravel') }} </span>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="nav-container">--}}
            {{--<button type="button" class="navbar-toggle pull-left sidebar-toggle" id="sidebarToggleLG">--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<ul class="nav-notification">--}}
                {{--<li class="search-list">--}}
                    {{--<div class="search-input-wrapper">--}}
                        {{--<div class="search-input">--}}
                            {{--<input type="text" class="form-control input-sm inline-block">--}}
                            {{--<a href="#" class="input-icon text-normal"><i class="ion-ios7-search-strong"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<div class="pull-right m-right-sm">--}}
                {{--<div class="user-block hidden-xs">--}}
                    {{--<a href="#" id="userToggle" data-toggle="dropdown">--}}
                        {{--<img src="{{asset('/images/profile/profile0.png')}}" alt="" class="img-circle inline-block user-profile-pic">--}}
                        {{--<div class="user-detail inline-block">--}}
                            {{--{{ Auth::user()->name }}--}}
                            {{--<i class="fa fa-angle-down"></i>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                    {{--<div class="panel border dropdown-menu user-panel">--}}
                        {{--<div class="panel-body paddingTB-sm">--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<a href="#">--}}
                                        {{--<i class="fa fa-edit fa-lg"></i><span class="m-left-xs">My Profile</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">--}}
                                        {{--<i class="fa fa-inbox fa-lg"></i><span class="m-left-xs">Inboxes</span>--}}
                                        {{--<span class="badge badge-danger bounceIn animation-delay3">2</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="{{ url('/logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--<i class="fa fa-power-off fa-lg"></i><span class="m-left-xs">Sign out</span>--}}
                                    {{--</a>--}}
                                    {{--<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">--}}
                                        {{--{{ csrf_field() }}--}}
                                    {{--</form>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<ul class="nav-notification">--}}
                    {{--<li>--}}
                        {{--<a href="#" data-toggle="dropdown"><i class="fa fa-envelope fa-lg"></i></a>--}}
                        {{--<span class="badge badge-purple bounceIn animation-delay5 active">2</span>--}}
                        {{--<ul class="dropdown-menu message pull-right">--}}
                            {{--<li><a>You have XXX new unread messages</a></li>--}}
                            {{--<li>--}}
                                {{--<a class="clearfix" href="#">--}}
                                    {{--<img src="{{asset('/images/profile/profile0.png')}}" alt="User Avatar">--}}
                                    {{--<div class="detail">--}}
                                        {{--<strong>User 1</strong>--}}
                                        {{--<p class="no-margin">--}}
                                            {{--Lorem ipsum dolor sit amet...--}}
                                        {{--</p>--}}
                                        {{--<small class="text-muted"><i class="fa fa-check text-success"></i> 5hr ago</small>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a class="clearfix" href="#">--}}
                                    {{--<img src="{{asset('/images/profile/profile0.png')}}" alt="User Avatar">--}}
                                    {{--<div class="detail m-left-sm">--}}
                                        {{--<strong>User 2</strong>--}}
                                        {{--<p class="no-margin">--}}
                                            {{--Lorem ipsum dolor sit amet...--}}
                                        {{--</p>--}}
                                        {{--<small class="text-muted"><i class="fa fa-reply"></i> Yesterday</small>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">View all messages</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#" data-toggle="dropdown"><i class="fa fa-bell fa-lg"></i></a>--}}
                        {{--<span class="badge badge-info bounceIn animation-delay6 active">4</span>--}}
                        {{--<ul class="dropdown-menu notification dropdown-3 pull-right">--}}
                            {{--<li><a href="#">You have 5 new notifications</a></li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
												{{--<span class="notification-icon bg-warning">--}}
													{{--<i class="fa fa-warning"></i>--}}
												{{--</span>--}}
                                    {{--<span class="m-left-xs">Server #2 not responding.</span>--}}
                                    {{--<span class="time text-muted">Just now</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
												{{--<span class="notification-icon bg-success">--}}
													{{--<i class="fa fa-plus"></i>--}}
												{{--</span>--}}
                                    {{--<span class="m-left-xs">New user registration.</span>--}}
                                    {{--<span class="time text-muted">2m ago</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
												{{--<span class="notification-icon bg-danger">--}}
													{{--<i class="fa fa-bolt"></i>--}}
												{{--</span>--}}
                                    {{--<span class="m-left-xs">Application error.</span>--}}
                                    {{--<span class="time text-muted">5m ago</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
												{{--<span class="notification-icon bg-success">--}}
													{{--<i class="fa fa-file-text"></i>--}}
												{{--</span>--}}
                                    {{--<span class="m-left-xs">5 new messages.</span>--}}
                                    {{--<span class="time text-muted">1hr ago</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
												{{--<span class="notification-icon bg-success">--}}
													{{--<i class="fa fa-plus"></i>--}}
												{{--</span>--}}
                                    {{--<span class="m-left-xs">New user registration.</span>--}}
                                    {{--<span class="time text-muted">1hr ago</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">View all notifications</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="chat-notification">--}}
                        {{--<a href="#" class="sidebarRight-toggle"><i class="fa fa-comments fa-lg"></i></a>--}}
                        {{--<span class="badge badge-danger bounceIn">1</span>--}}

                        {{--<div class="chat-alert">--}}
                            {{--Hello, Are you there?--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div><!-- ./top-nav-inner -->--}}
{{--</header>--}}