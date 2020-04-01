<body id="home" class="wide header-style-2">
    <!-- PRELOADER -->
    @include("layouts.loader")
    <!-- /PRELOADER -->

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- Popup: Shopping cart items -->
        {{-- @include('components.modals.shoppingcart') --}}
        <x-modals.shoppingcart/>
        <!-- /Popup: Shopping cart items -->

        <!-- Header top bar -->
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-left">
                    {{-- @include('components.header.actions_list') --}}
                    <x-header.actions-list/>
                </div>
                <div class="top-bar-right">
                    {{-- @include('components.header.options_list') --}}
                    <x-header.options-list/>
                </div>
            </div>
        </div>
        <!-- /Header top bar -->

        <!-- HEADER -->
        <header class="header">
            <div class="header-wrapper">
                <div class="container">

                    <!-- Logo -->
                    {{-- @include('components.header.logo') --}}
                    <x-header.logo/>

                    <!-- /Logo -->

                    <!-- Header search -->
                    {{-- @include('components.header.search_bar') --}}
                    <x-header.search-bar/>

                    <!-- /Header search -->

                    <!-- Header shopping cart -->
                    {{-- @include('components.header.cart') --}}
                    <x-header.cart/>

                    <!-- Header shopping cart -->

                </div>
            </div>
            <div class="navigation-wrapper">
                <div class="container">
                    <!-- Navigation -->
                    <nav class="navigation header-nav-2 closed clearfix">
                        <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                        {{-- @include('components.header.nav_1') --}}
                        <x-header.nav-one/>
                    </nav>

                    <!-- /Navigation -->
                </div>
            </div>
        </header>
        <!-- /HEADER -->