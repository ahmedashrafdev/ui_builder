@extends('layouts.app')

@section('content')
<!-- CONTENT AREA -->
<!-- CONTENT AREA -->
<div class="content-area">

    @include('layouts.breadcrumbs')

    <!-- PAGE WITH SIDEBAR -->
    <section class="page-section with-sidebar">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR -->
                @include('layouts.sidebar')
                <!-- /SIDEBAR -->
                <!-- CONTENT -->
                <div class="col-md-9 content" id="content">

                   @include('components.carousels.shop_slider')

                   @include('components.shop.sorting')

                   {{-- @include('blocks.products.block_8') --}}
                   @include('blocks.products.block_9')

                   @include('components.paginations.pagination_1')

                </div>
                <!-- /CONTENT -->

            </div>
        </div>
    </section>
    <!-- /PAGE WITH SIDEBAR -->

   @include('blocks.banners.block_1')

</div>
<!-- /CONTENT AREA -->
<!-- /CONTENT AREA -->
@endsection
