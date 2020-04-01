<body id="home" class="wide header-style-4">
    <!-- PRELOADER -->
    @include("layouts.loader")

    <!-- /PRELOADER -->

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- Popup: Shopping cart items -->
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
                    @include('components.header.logo')
                    <x-header.logo/>

                    <!-- /Logo -->


                    <!-- Header search -->
                    {{-- @include('components.header.search_bar') --}}
                    <x-header.search-bar/>

                    <!-- /Header search -->

                    <!-- Header shopping cart -->
                    @include('components.header.cart' , ['headerCartHiddenLg' => true])
                    <x-header.cart :headerCartHiddenLg="true"/>

                    <!-- Header shopping cart -->

                </div>
            </div>
            <div class="navigation-wrapper">
                <div class="container">


                    <!-- Navigation -->
                    <nav class="navigation header-nav-4 closed clearfix">
                        <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                        {{-- @include('components.header.nav_1') --}}
                        <x-header.nav-one/>

                    </nav>
                    <!-- /Navigation -->


                    <!-- Header shopping cart -->

                    <div class="cart-wrapper visible-lg">
                        <a href="wishlist.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-heart"></i></a>
                        <a href="compare-products.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-exchange"></i></a>
                        <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> 0 item(s) - $0.00 </span> <i class="fa fa-angle-down"></i></a>
                        <!-- Mobile menu toggle button -->
                        <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                        <!-- /Mobile menu toggle button -->
                    </div>

                    <!-- Header shopping cart -->

                </div>
            </div>
        </header>
        <!-- /HEADER -->