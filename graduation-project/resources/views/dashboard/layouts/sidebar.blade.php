<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">--}}
{{--                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span>--}}
{{--                            </div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="dashboard" class="collapse" data-parent="#sidebarnav">--}}
{{--                            <li> <a href="index.html">Dashboard 01</a> </li>--}}
{{--                            <li> <a href="index-02.html">Dashboard 02</a> </li>--}}
{{--                            <li> <a href="index-03.html">Dashboard 03</a> </li>--}}
{{--                            <li> <a href="index-04.html">Dashboard 04</a> </li>--}}
{{--                            <li> <a href="index-05.html">Dashboard 05</a> </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>
                    <!-- menu item users-->
                    <li class="@yield('users')">
                        <a href="{{ route('dashboard.users.index') }}"><i class="fas fa-users"></i><span class="right-nav-text">Users</span> </a>
                    </li>
                    <!-- menu item articles-->
                    <li class="@yield('articles')">
                        <a href="{{ route('dashboard.articles.index') }}"><i class="fas fa-newspaper"></i><span class="right-nav-text">Articles</span> </a>
                    </li>
                    <!-- menu item labs-->
                    <li class="@yield('labs')">
                        <a href="{{ route('dashboard.labs.index') }}"><i class="fas fa-vials"></i><span class="right-nav-text">Labs</span> </a>
                    </li>
                    <!-- menu item sponsors-->
                    <li class="@yield('sponsors')">
                        <a href="{{ route('dashboard.sponsors.index') }}"><i class="fas fa-donate"></i><span class="right-nav-text">Sponsors</span> </a>
                    </li>
                    <!-- menu item tools-->
                    <li class="@yield('tools')">
                        <a href="{{ route('dashboard.tools.index') }}"><i class="fas fa-tools"></i><span class="right-nav-text">Tools</span> </a>
                    </li>
                    <!-- menu item tutorials-->
                    <li class="@yield('tutorials')">
                        <a href="{{ route('dashboard.tutorials.index') }}"><i class="fas fa-fast-backward"></i><span class="right-nav-text">Tutorials</span> </a>
                    </li>
                    <!-- menu item questions-->
                    <li class="@yield('questions')">
                        <a href="{{ route('dashboard.questions.index') }}"><i class="fas fa-question"></i><span class="right-nav-text">Questions</span> </a>
                    </li>
                    <!-- menu item tests-->
                    <li class="@yield('tests')">
                        <a href="{{ route('dashboard.tests.index') }}"><i class="fas fa-cubes"></i><span class="right-nav-text">Tests</span> </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
