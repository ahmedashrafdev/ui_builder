

{{-- checking for is visible or hidden depending in header block type specifically header number 4 --}}

<div class="header-cart {{isset($headerCartHiddenLg) && $headerCartHiddenLg ? 'hidden-lg' : ''}}">
    <div class="cart-wrapper {{isset($headerCartHiddenLg) && $headerCartHiddenLg ? 'visible-lg' : ''}}">
        <a href="wishlist.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-heart"></i></a>
        <a href="compare-products.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-exchange"></i></a>
        <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> 0 item(s) - $0.00 </span> <i class="fa fa-angle-down"></i></a>
        <!-- Mobile menu toggle button -->
        <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
        <!-- /Mobile menu toggle button -->
    </div>
</div>