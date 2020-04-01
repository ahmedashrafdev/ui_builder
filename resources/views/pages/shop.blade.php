@extends('layouts.app')

@section('content')
<!-- CONTENT AREA -->
<!-- CONTENT AREA -->
<div class="content-area">
    <x-layouts.breadcrumbs/>

    <!-- PAGE WITH SIDEBAR -->
    <section class="page-section with-sidebar">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR -->
                <x-layouts.sidebar/>
                <!-- /SIDEBAR -->
                <!-- CONTENT -->
                <div class="col-md-9 content" id="content">
                   <x-carousels.shop-slider/>
                   <x-shop.sorting/>
                   {{-- list --}}
                   <x-blocks.products.block-nine/>

                   {{-- grid --}}
                   {{-- <x-blocks.products.block-eight/> --}}
                   <x-pagination.pagination-one/>
                </div>
                <!-- /CONTENT -->

            </div>
        </div>
    </section>
    <!-- /PAGE WITH SIDEBAR -->

   <x-blocks.banners.block-one/>

</div>
<!-- /CONTENT AREA -->
<!-- /CONTENT AREA -->
@endsection
