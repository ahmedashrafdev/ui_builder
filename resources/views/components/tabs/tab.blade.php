<div class="tab-pane fade {{$isActive ? ' active in' : ''}}" id="{{$tabId}}">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            @include('partials/products/product')
        </div>
        <div class="col-md-3 col-sm-6">
            @include('partials/products/product')
        </div>
        <div class="col-md-3 col-sm-6">
            @include('partials/products/product')
        </div>
        <div class="col-md-3 col-sm-6">
            @include('partials/products/product')
        </div>
    </div>
</div>