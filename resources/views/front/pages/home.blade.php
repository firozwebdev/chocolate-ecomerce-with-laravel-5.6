@extends('front.layout')
@section('slider')
    @include('front.partials.slider')
@endsection
@section('featured_product')
    @include('front.partials.featured_product')
@endsection

@section('main_content')
<div class="col-md-9"><!--Main content-->
    <div class="title-bg">
        <div class="title">About Shopping</div>
    </div>
    <p class="ct">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p class="ct">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <a href="index.html" class="btn btn-default btn-red btn-sm">Read More</a>

    <div class="title-bg">
        <div class="title">Lastest Products</div>
    </div>
    <div class="row prdct"><!--Products-->
        <div class="col-md-4">
            <div class="productwrap">
                <div class="pr-img">
                    <a href="product.html"><img src="{{ asset('front-end/ecommerce_asset/images/sample-2.jpg')}}" alt="" class="img-responsive"/></a>
                    <div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">$314</span>$199</span></div></div>
                </div>
                <span class="smalltitle"><a href="product.html">Black Shoes</a></span>
                <span class="smalldesc">Item no.: 1000</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="productwrap">
                <div class="pr-img">
                    <a href="product.html"><img src="{{ asset('front-end/ecommerce_asset/images/sample-1.jpg')}}" alt="" class="img-responsive"/></a>
                    <div class="pricetag"><div class="inner">$199</div></div>
                </div>
                <span class="smalltitle"><a href="product.html">Nikon Camera</a></span>
                <span class="smalldesc">Item no.: 1000</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="productwrap">
                <div class="pr-img">
                    <a href="product.html"><img src="{{ asset('front-end/ecommerce_asset/images/sample-3.jpg')}}" alt="" class="img-responsive"/></a>
                    <div class="pricetag"><div class="inner">$199</div></div>
                </div>
                <span class="smalltitle"><a href="product.html">Red T- Shirt</a></span>
                <span class="smalldesc">Item no.: 1000</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="productwrap">
                <div class="pr-img">
                    <a href="product.html"><img src="{{ asset('front-end/ecommerce_asset/images/sample-1.jpg')}}" alt="" class="img-responsive"/></a>
                    <div class="pricetag"><div class="inner">$199</div></div>
                </div>
                <span class="smalltitle"><a href="product.html">Nikon Camera</a></span>
                <span class="smalldesc">Item no.: 1000</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="productwrap">
                <div class="pr-img">
                    <a href="product.html"><img src="{{ asset('front-end/ecommerce_asset/images/sample-2.jpg')}}" alt="" class="img-responsive"/></a>
                    <div class="pricetag"><div class="inner">$199</div></div>
                </div>
                <span class="smalltitle"><a href="product.html">Black Shoes</a></span>
                <span class="smalldesc">Item no.: 1000</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="productwrap">
                <div class="pr-img">
                    <a href="product.html"><img src="{{ asset('front-end/ecommerce_asset/images/sample-3.jpg')}}" alt="" class="img-responsive"/></a>
                    <div class="pricetag"><div class="inner">$199</div></div>
                </div>
                <span class="smalltitle"><a href="product.html">Red T-Shirt</a></span>
                <span class="smalldesc">Item no.: 1000</span>
            </div>
        </div>
    </div><!--Products-->
    <div class="spacer"></div>
</div><!--Main content-->
    @endsection
@section('sidebar')
    @include('front.partials.sidebar')
@endsection