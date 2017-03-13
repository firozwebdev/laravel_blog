<div class="text-center">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div class="side-bar-wrapper collapse navbar-collapse navbar-ex1-collapse">

    <div class="search-box">
        <input type="text" placeholder="SEARCH" class="form-control">
    </div>
    <ul class="side-menu">
        <li>
            <a href="notifications.html">
                <span class="badge badge-notifications pull-right alert-animated">5</span>
                <i class="icon-flag"></i> Notifications
            </a>
        </li>
    </ul>
    <div class="relative-w">
        <ul class="side-menu">
            <li class='current'>
                <a class='current' href="index.html">
                    <span class="badge pull-right">17</span>
                    <i class="icon-dashboard"></i> Dashboard
                </a>
            </li>
            <li>
            <li>
                <a href="#" class="is-dropdown-menu">
                    <span class="badge pull-right"></span>
                    <i class="icon-code-fork"></i> Category
                </a>
                <ul>
                    <li>
                        <a href="{{ route('add.category') }}">
                            <i class="icon-beaker"></i>
                            Add Category
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('manage.category') }}">
                            <i class="icon-picture"></i>
                            Manage Category
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="is-dropdown-menu">
                    <span class="badge pull-right"></span>
                    <i class="icon-bar-chart"></i> Blog
                </a>
                <ul>
                    <li>
                        <a href="{{ route('add.blog') }}">
                            <i class="icon-random"></i>
                            Add Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('manage.blog') }}">
                            <i class="icon-bullseye"></i>
                           Manage Blog
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="charts.html" class="is-dropdown-menu">
                    <span class="badge pull-right"></span>
                    <i class="icon-bar-chart"></i> Page
                </a>
                <ul>
                    <li>
                        <a href="{{ route('add.page') }}">
                            <i class="icon-random"></i>
                            Add Page
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('manage.page') }}">
                            <i class="icon-bullseye"></i>
                            Manage Pages
                        </a>
                    </li>


                </ul>
            </li>


            <li>
                <a href="datatable.html" class="is-dropdown-menu">
                    <span class="badge pull-right">24</span>
                    <i class="icon-th"></i> Tables
                </a>
                <ul>
                    <li>
                        <a href="datatable.html">
                            <i class="icon-list-alt"></i>
                            Data Tables
                        </a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="icon-table"></i>
                            Regular Tables
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="datatable.html" class="is-dropdown-menu">
                    <span class="badge pull-right">24</span>
                    <i class="icon-th"></i> Users
                </a>
                <ul>
                    <li>
                        <a href="{{ route('add.user') }}">
                            <i class="icon-list-alt"></i>
                            Add User
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('manage.user') }}">
                            <i class="icon-table"></i>
                           Manage Users
                        </a>
                    </li>
                </ul>
            </li>

            <?php
                $count = DB::table('contact')
                        ->where('message_status',0)
                        ->count();

            ?>



            <li>
                <a href="{{ route('manage.mail') }}">
                    @if($count>0)
                        <span class="badge pull-right alert-animated">
                            {{ $count }} new
                         </span>
                    @endif
                    <i class="icon-inbox"></i>
                    Inbox
                </a>
            </li>

            <li>
                <a href="login.html">
                    <span class="badge pull-right"></span>
                    <i class="icon-signin"></i> Login Page
                </a>
            </li>
        </ul>
    </div>
</div>