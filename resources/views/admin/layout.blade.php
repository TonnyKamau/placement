<!doctype html>
<!--
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KHSSSPB | Admin Portal </title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">

            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="/admin"><i class="fas fa-home"></i> Dashboard</a>
                </li>

                </li>
                 <li>
                    <a href="#uielementsmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-school"></i> Schools</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu">
                        <li>
                            <a href="/CreatePrimary"><i class="fas fa-file"></i> Add Primary</a>
                        </li>
                        <li>
                            <a href="/UpdatePrimary"><i class="fas fa-edit"></i> Update Primary</a>
                        </li>
                        <li>
                            <a href="/RemovePrimary"><i class="fas fa-trash"></i> Delete Primary</a>
                        </li>
                        <li>
                            <a href="CreateHighschool"><i class="fas fa-file"></i> Add Highschool</a>
                        </li>
                        <li>
                            <a href="/UpdateHighschool"><i class="fas fa-edit"></i> Update Highschool</a>
                        </li>
                         <li>
                            <a href="/RemoveHighschool"><i class="fas fa-trash"></i> Delete Highschool</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#authmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-friends"></i> Users</a>
                    <ul class="collapse list-unstyled" id="authmenu">


                         <li>
                            <a href="/userregistration"><i class="fas fa-file"></i>User Register</a>
                        </li>
                        <li>
                            <a href="/userupdate"><i class="fas fa-user-edit"></i>User Update</a>
                        </li>

                        <li>
                            <a href="/userdelete"><i class="fas fa-user-slash"></i>User Delete</a>
                        </li>
                    </ul>
                </li>


                 <li>
                    <a href="/MarksRecord"><i class="fas fa-clipboard"></i>Record Marks</a>
                </li>

                <li>
                    <a href="/setting"><i class="fas fa-cog"></i>Settings</a>
                </li>
            </ul>
        </nav>
        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-user"></i> <span>{{ __('Profile') }}</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="/user/profile" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="/settings" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="/logout" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
