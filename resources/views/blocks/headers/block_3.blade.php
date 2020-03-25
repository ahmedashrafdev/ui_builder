<body id="home" class="wide header-style-3">
    <!-- PRELOADER -->
    @include("layouts.loader")

    <!-- /PRELOADER -->

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- Popup: Shopping cart items -->
        @include('components.modals.shoppingcart')

        <!-- /Popup: Shopping cart items -->

        <!-- Header top bar -->
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-left">
                    @include('components.header.actions_list')
                </div>
                <div class="top-bar-right">
                    @include('components.header.options_list')
                </div>
            </div>
        </div>
        <!-- /Header top bar -->

        <!-- HEADER -->
        <header class="header">
            <div class="header-wrapper">
                <div class="container">

                    @include('components.header.logo' , ['hiddenLg' => true])
                    

                    <!-- Header search -->
                    @include('components.header.search_bar')

                    <!-- /Header search -->

                    <!-- Header shopping cart -->
                    @include('components.header.cart')

                    <!-- Header shopping cart -->

                </div>
            </div>
            <div class="navigation-wrapper">
                <div class="container">

                    <!-- Logo -->
                    @include('components.header.logo')
                    <!-- /Logo -->
                    <nav class="navigation header-nav-3 closed clearfix">
                        <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>

                    <!-- Navigation -->
                    @include('components.header.nav_1')
                    </nav>
                    <!-- /Navigation -->
                </div>
            </div>
        </header>