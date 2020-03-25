@extends('layouts.app')

@section('content')
<!-- CONTENT AREA -->
<div class="content-area">
    <!-- PAGE slider-->
    @include('blocks/sliders/block_1')
    <!-- /PAGE -->
    <!-- resources/views/components/sliders/slider.blade.php -->
    @include("blocks.products.block_1")
    @include("blocks.products.block_2")
    @include("blocks.products.block_3")
    @include("blocks.products.block_4")
    @include("blocks.products.block_5")
    @include("blocks.products.block_6")
    @include("blocks.products.block_7")
    
    @include("blocks.categories.block_1")
    <!-- PAGE -->
    @include("blocks.tabs.block_1")
    <!-- /PAGE -->

    @include("blocks.testemonials.block_1")


    @include("blocks.posts.block_1")
    @include("blocks.posts.block_2")

    @include("blocks.partners.block_1")
  

    <!-- PAGE -->
    @include("blocks.banners.block_1")
    <!-- /PAGE -->
</div>
<!-- /CONTENT AREA -->
@endsection
