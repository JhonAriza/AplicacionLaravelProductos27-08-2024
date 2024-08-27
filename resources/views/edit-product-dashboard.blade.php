<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
</head>

<body>
    <style>
        @import 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet';

        :root {
            --dk-gray-100: #F3F4F6;
            --dk-gray-200: #E5E7EB;
            --dk-gray-300: #D1D5DB;
            --dk-gray-400: #9CA3AF;
            --dk-gray-500: #6B7280;
            --dk-gray-600: #4B5563;
            --dk-gray-700: #374151;
            --dk-gray-800: #1F2937;
            --dk-gray-900: #111827;
            --dk-dark-bg: #313348;
            --dk-darker-bg: #2a2b3d;
            --navbar-bg-color: #6f6486;
            --sidebar-bg-color: #252636;
            --sidebar-width: 250px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--dk-darker-bg);
            font-size: .925rem;
        }

        #wrapper {
            margin-left: var(--sidebar-width);
            transition: all .3s ease-in-out;
        }

        #wrapper.fullwidth {
            margin-left: 0;
        }



        /** --------------------------------
         -- Sidebar
        -------------------------------- */
        .sidebar {
            background-color: var(--sidebar-bg-color);
            width: var(--sidebar-width);
            transition: all .3s ease-in-out;
            transform: translateX(0);
            z-index: 9999999
        }

        .sidebar .close-aside {
            position: absolute;
            top: 7px;
            right: 7px;
            cursor: pointer;
            color: #EEE;
        }

        .sidebar .sidebar-header {
            border-bottom: 1px solid #2a2b3c
        }

        .sidebar .sidebar-header h5 a {
            color: var(--dk-gray-300)
        }

        .sidebar .sidebar-header p {
            color: var(--dk-gray-400);
            font-size: .825rem;
        }

        .sidebar .search .form-control~i {
            color: #2b2f3a;
            right: 40px;
            top: 22px;
        }

        .sidebar>ul>li {
            padding: .7rem 1.75rem;
        }

        .sidebar ul>li>a {
            color: var(--dk-gray-400);
            text-decoration: none;
        }

        /* Start numbers */
        .sidebar ul>li>a>.num {
            line-height: 0;
            border-radius: 3px;
            font-size: 14px;
            padding: 0px 5px
        }

        .sidebar ul>li>i {
            font-size: 18px;
            margin-right: .7rem;
            color: var(--dk-gray-500);
        }

        .sidebar ul>li.has-dropdown>a:after {
            content: '\eb3a';
            font-family: unicons-line;
            font-size: 1rem;
            line-height: 1.8;
            float: right;
            color: var(--dk-gray-500);
            transition: all .3s ease-in-out;
        }

        .sidebar ul .opened>a:after {
            transform: rotate(-90deg);
        }

        /* Start dropdown menu */
        .sidebar ul .sidebar-dropdown {
            padding-top: 10px;
            padding-left: 30px;
            display: none;
        }

        .sidebar ul .sidebar-dropdown.active {
            display: block;
        }

        .sidebar ul .sidebar-dropdown>li>a {
            font-size: .85rem;
            padding: .5rem 0;
            display: block;
        }

        /* End dropdown menu */

        .show-sidebar {
            transform: translateX(-270px);
        }

        @media (max-width: 767px) {
            .sidebar ul>li {
                padding-top: 12px;
                padding-bottom: 12px;
            }

            .sidebar .search {
                padding: 10px 0 10px 30px
            }
        }




        /** --------------------------------
         -- welcome
        -------------------------------- */
        .welcome {
            color: var(--dk-gray-300);
        }

        .welcome .content {
            background-color: var(--dk-dark-bg);
        }

        .welcome p {
            color: var(--dk-gray-400);
        }




        /** --------------------------------
         -- Statistics
        -------------------------------- */
        .statistics {
            color: var(--dk-gray-200);
        }

        .statistics .box {
            background-color: var(--dk-dark-bg);
        }

        .statistics .box i {
            width: 60px;
            height: 60px;
            line-height: 60px;
        }

        .statistics .box p {
            color: var(--dk-gray-400);
        }




        /** --------------------------------
         -- Charts
        -------------------------------- */
        .charts .chart-container {
            background-color: var(--dk-dark-bg);
        }

        .charts .chart-container h3 {
            color: var(--dk-gray-400)
        }




        /** --------------------------------
         -- users
        -------------------------------- */
        .admins .box .admin {
            background-color: var(--dk-dark-bg);
        }

        .admins .box h3 {
            color: var(--dk-gray-300);
        }

        .admins .box p {
            color: var(--dk-gray-400)
        }




        /** --------------------------------
         -- statis
        -------------------------------- */
        .statis {
            color: var(--dk-gray-100);
        }

        .statis .box {
            position: relative;
            overflow: hidden;
            border-radius: 3px;
        }

        .statis .box h3:after {
            content: "";
height: 2px;
        width: 70%;
        margin: auto;
        background-color: rgba(255, 255, 255, 0.12);
        display: block;
        margin-top: 10px;
        }

        .statis .box i {
            position: absolute;
            height: 70px;
            width: 70px;
            font-size: 22px;
            padding: 15px;
            top: -25px;
            left: -25px;
            background-color: rgba(255, 255, 255, 0.15);
            line-height: 60px;
            text-align: right;
            border-radius: 50%;
        }





        .main-color {
            color: #ffc107
        }

        /** --------------------------------
         -- Please don't do that in real-world projects!
         -- overwrite Bootstrap variables instead.
        -------------------------------- */

        .navbar {
            background-color: var(--navbar-bg-color) !important;
            border: none !important;
        }

        .navbar .dropdown-menu {
            right: auto !important;
            left: 0 !important;
        }

        .navbar .navbar-nav>li>a {
            color: #EEE !important;
            line-height: 55px !important;
            padding: 0 10px !important;
        }

        .navbar .navbar-brand {
            color: #FFF !important
        }

        .navbar .navbar-nav>li>a:focus,
        .navbar .navbar-nav>li>a:hover {
            color: #EEE !important
        }

        .navbar .navbar-nav>.open>a,
        .navbar .navbar-nav>.open>a:focus,
        .navbar .navbar-nav>.open>a:hover {
            background-color: transparent !important;
            color: #FFF !important
        }

        .navbar .navbar-brand {
            line-height: 55px !important;
            padding: 0 !important
        }

        .navbar .navbar-brand:focus,
        .navbar .navbar-brand:hover {
            color: #FFF !important
        }

        .navbar>.container .navbar-brand,
        .navbar>.container-fluid .navbar-brand {
            margin: 0 !important
        }

        @media (max-width: 767px) {
            .navbar>.container-fluid .navbar-brand {
                margin-left: 15px !important;
            }

            .navbar .navbar-nav>li>a {
                padding-left: 0 !important;
            }

            .navbar-nav {
                margin: 0 !important;
            }

            .navbar .navbar-collapse,
            .navbar .navbar-form {
                border: none !important;
            }
        }

        .navbar .navbar-nav>li>a {
            float: left !important;
        }

        .navbar .navbar-nav>li>a>span:not(.caret) {
            background-color: #e74c3c !important;
            border-radius: 50% !important;
            height: 25px !important;
            width: 25px !important;
            padding: 2px !important;
            font-size: 11px !important;
            position: relative !important;
            top: -10px !important;
            right: 5px !important
        }

        .dropdown-menu>li>a {
            padding-top: 5px !important;
            padding-right: 5px !important;
        }

        .navbar .navbar-nav>li>a>i {
            font-size: 18px !important;
        }




        /* Start media query */

        @media (max-width: 767px) {
            #wrapper {
                margin: 0 !important
            }

            .statistics .box {
                margin-bottom: 25px !important;
            }

            .navbar .navbar-nav .open .dropdown-menu>li>a {
                color: #CCC !important
            }

            .navbar .navbar-nav .open .dropdown-menu>li>a:hover {
                color: #FFF !important
            }

            .navbar .navbar-toggle {
                border: none !important;
                color: #EEE !important;
                font-size: 18px !important;
            }

            .navbar .navbar-toggle:focus,
            .navbar .navbar-toggle:hover {
                background-color: transparent !important
            }
        }


        ::-webkit-scrollbar {
            background: transparent;
            width: 5px;
            height: 5px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #3c3f58;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: rgba(0, 0, 0, 0.3);
        }
    </style>

    <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
        <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
        <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
            <img class="rounded-pill img-fluid" width="65"
                src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance"
                alt="">
            <div class="ms-2">
                <h5 class="fs-6 mb-0">
                    <a class="text-decoration-none" href="#">{{ Auth::user()->name }}</a>
                </h5>
            </div>
        </div>
        <ul class="categories list-unstyled">
            <li class="has-dropdown">
                <i class="uil-estate fa-fw"></i><a href="#"> Panel Administrativo</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesión') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>

    <section id="wrapper">
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid mx-2">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="uil-bars text-white"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="toggle-navbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i data-show="show-side-navigation1" class="uil-bars show-side-btn"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="p-4">
            <div class="welcome">
                <div class="content rounded-3 p-3">
                    <form action="{{ url('updateProductDashboard') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <section class="statistics mt-4">
                            <div class="row">
                                <h1 class="text-center">Editar Producto</h1>
                                <div class="col-md-4">
                                    <label for="">Nombre del producto</label>
                                    <input value="{{ $product->name }}" type="text" class="input-group-text" name="name">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Precio</label>
                                    <input value="{{ $product->price }}" type="number" name="price" class="input-group-text">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Cantidad</label>
                                    <input value="{{ $product->quantity }}" type="number" name="quantity" class="input-group-text">
                                </div>
                                <div class="col-md-8 mt-3">
                                    <label for="">Descripción</label>
                                    <textarea name="description" class="input-group-text" cols="71" rows="3">{{ $product->description }}</textarea>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="">Imagen</label>
                                    <img src="{{ $product->image }}" width="350" class="mb-1">
                                    <input value="{{ $product->image }}" type="file" name="image" class="input-group-text">
                                </div>
                                <div class="col-md-12 mt-3 text-center">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.jshttps://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    </script>
    <script>
        'use strict'

        function $(selector) {
            return document.querySelector(selector)
        }

        function find(el, selector) {
            let finded
            return (finded = el.querySelector(selector)) ? finded : null
        }

        function siblings(el) {
            const siblings = []
            for (let sibling of el.parentNode.children) {
                if (sibling !== el) {
                    siblings.push(sibling)
                }
            }
            return siblings
        }

        const showAsideBtn = $('.show-side-btn')
        const sidebar = $('.sidebar')
        const wrapper = $('#wrapper')

        showAsideBtn.addEventListener('click', function() {
            $(`#${this.dataset.show}`).classList.toggle('show-sidebar')
            wrapper.classList.toggle('fullwidth')
        })

        if (window.innerWidth < 767) {
            sidebar.classList.add('show-sidebar');
        }

        window.addEventListener('resize', function() {
            if (window.innerWidth > 767) {
                sidebar.classList.remove('show-sidebar')
            }
        })

        // dropdown menu in the side nav
        var slideNavDropdown = $('.sidebar-dropdown');

        $('.sidebar .categories').addEventListener('click', function(event) {
            event.preventDefault()

            const item = event.target.closest('.has-dropdown')

            if (!item) {
                return
            }

            item.classList.toggle('opened')

            siblings(item).forEach(sibling => {
                sibling.classList.remove('opened')
            })

            if (item.classList.contains('opened')) {
                const toOpen = find(item, '.sidebar-dropdown')

                if (toOpen) {
                    toOpen.classList.add('active')
                }

                siblings(item).forEach(sibling => {
                    const toClose = find(sibling, '.sidebar-dropdown')

                    if (toClose) {
                        toClose.classList.remove('active')
                    }
                })
            } else {
                find(item, '.sidebar-dropdown').classList.toggle('active')
            }
        })

        $('.sidebar .close-aside').addEventListener('click', function() {
            $(`#${this.dataset.close}`).classList.add('show-sidebar')
            wrapper.classList.remove('margin')
        })
    </script>
</body>

</html>
