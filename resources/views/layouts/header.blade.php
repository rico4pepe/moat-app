<nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
    <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
        <i class="icon-align-justify"></i>
    </a>
    <!-- LOGO SECTION -->
    <header class="navbar-header">

        <a href="" class="navbar-brand">
        <img src="assets/img/logo.png" alt="" /></a>
    </header>
    <!-- END LOGO SECTION -->
    <ul class="nav navbar-top-links navbar-right">


        @auth
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
            </a>

             <ul class="dropdown-menu dropdown-user">
                 <li><a href="/login"><i class="icon-user"></i> Login </a>
                </li>
                <li class="divider"></li>

                <li>
                    <form action="/logout" method="POST">
                    @csrf
                    <button name="btn" style="width: 100%; margin-top:5px;" id="btn" type="submit"><i class="icon-signout"></i> Logout </button>
                    </form>
                </li>
               
            </ul>

        </li>
        @endauth
        <!--END ADMIN SETTINGS -->
    </ul>
</nav>




            <!--END ADMIN SETTINGS -->
        </ul>
    </nav>

