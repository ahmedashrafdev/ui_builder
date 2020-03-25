<aside class="col-md-3 sidebar" id="sidebar">
    <!-- widget search -->
    <div class="widget">
        <div class="widget-search">
            <input class="form-control" type="text" placeholder="Search">
            <button><i class="fa fa-search"></i></button>
        </div>
    </div>
    <!-- /widget search -->
    <!-- widget shop categories -->
    @include('components.sidebar.categories')
    <!-- /widget shop categories -->
    <!-- widget product color -->
    @include('components.sidebar.colors')
    <!-- /widget product color -->
    <!-- widget price filter -->
   @include('components.sidebar.price')
    <!-- /widget price filter -->
    <!-- widget tabs -->
   @include('components.sidebar.tabs')
    <!-- /widget tabs -->
    <!-- widget tag cloud -->
    @include('components.sidebar.tags')
    <!-- /widget tag cloud -->
    <!-- widget products carousel -->
    @include('components.sidebar.carousel')
    <!-- /widget products carousel -->
    <!-- widget shop hot deals -->
    @include('components.sidebar.deals')
    <!-- /widget shop hot deals -->
</aside>