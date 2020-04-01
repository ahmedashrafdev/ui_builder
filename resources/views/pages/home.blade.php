@extends('layouts.app')

@section('content')
<!-- CONTENT AREA -->
<div class="content-area">
    {{-- @include('blocks.banners.block_1') --}}
    @foreach($blocks as $block)
        @component($block->getFullPath())
        @endcomponent
    @endforeach
   
    {{-- <x-
        blocks.categories.block-one categories="['s']"/> --}}
    {{-- <x-blocks.sliders.block-one sliders="sliders"/> --}}
    {{-- @include('components.blocks.sliders.block-one' , ['slider' => 'slider']) --}}
    {{-- <x-blocks.banners.block-one banners="['kk']"/>
     <x-blocks.posts.block-one posts="posts"/>
    <x-blocks.posts.block-two posts="posts"/>
    <x-blocks.partners.block-one partners="partners"/>
    <x-blocks.tabs.block-one tabs="tabs" products="products"/>
    <x-blocks.testemonials.block-one testemonials="testemonials"/>
    <x-blocks.products.block-one products="products"/>
    <x-blocks.products.block-two  products="products"/>
    <x-blocks.products.block-three products="products"/>
    <x-blocks.products.block-four products="products"/>
    <x-blocks.products.block-five products="products"/>
    <x-blocks.products.block-six products="products"/>
    <x-blocks.products.block-seven products="products"/> --}}


   {{-- <x-blocks.posts.block-one/>
    <x-blocks.posts.block-two/>
    <x-blocks.products.block-one/>
    <x-blocks.products.block-two/>
    <x-blocks.products.block-three/>
    <x-blocks.products.block-four/>
    <x-blocks.products.block-five/>
    <x-blocks.products.block-six/>
    <x-blocks.products.block-seven/>
    <x-blocks.products.block-eight/>
    <x-blocks.products.block-nine/>
    <x-blocks.products.block-nine/> --}}
    {{-- @include('blocks.tabs.block_1') --}}
    {{-- @include('blocks.categories.block_1') --}}
    <!-- PAGE slider-->
    {{-- @foreach($blocks as $block)
        @include($block->getFullPath())
    @endforeach --}}

    <!-- /PAGE -->
</div>
<!-- /CONTENT AREA -->
@endsection
