<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portfolio</title>
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/customStyle.css') }}">
    <!-- font styles for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- bootstrap 5.2-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- font awesome Version 6-->
    <script src="https://kit.fontawesome.com/25a6d913fa.js" crossorigin="anonymous"></script>
    <!-- links to use multiselect list  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-book" viewBox="0 0 16 16">
                        <path
                            d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                    </svg>
                </div>
                <div class="sidebar-brand-text mx-3 text-warning border border-warning"> Portfolio</div>
            </a>
            <!-- Nav Item - Home-->
            <li class="nav-item ">
                <a class="nav-link" href="{{route('portfolio')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Portfolio</span>
                </a>
            </li>
            <!-- Nav Item - Tables  Projects-->
            <li class="nav-item">
                <a class="nav-link" href="{{route('project.list')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Edit Projects</span>
                </a>
            </li>
            <!-- Nav Item - Tables  Contact Me -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('skill.list')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Edit Skill</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('contact_info.list')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Edit Contact Me</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Topbar -->
        <div class="col-xxl-10 col-lg-9 col-md-8  col-9 justify-between mx-lg-5 container-fluid">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-5  static-top  shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <!-- Topbar Search -->
                <ul class="navbar-nav ml-auto">
                    <li class="d-flex nav-item dropdown no-arrow ms-auto">
                        <a class="nav-link " href="#">Logout
                        </a>
                    </li>
                    <!-- Nav Item - User Information -->
                    <li class="d-flex nav-item dropdown no-arrow ms-auto">
                        <a class="nav-link " href="#" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                            <img class="img-profile rounded-circle" src="{{ asset('images/undraw_profile.svg') }}">
                        </a>
                    </li>
                    <li class="d-flex nav-item dropdown no-arrow  ms-auto">
                        <a class="nav-link text-light bg-dark" href="{{route('login')}}">Login
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- End of Topbar -->