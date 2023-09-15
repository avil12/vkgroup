@extends('frontend.layouts.app')

@section('content')
    
<!-- Sliders & Today's deal -->
<section class="slider-section">
<div class="container-fluid" id="slidercss">
    <div class="row gutter-sm">
          @php
                    $num_todays_deal = count($todays_deal_products);
        @endphp

        <div class="home-banner-area intro-slide-wrapper home-banner-area col-lg-7">
          @if (get_setting('home_slider_images') != null)
          <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true" data-autoplay="true">

             @php $slider_images = json_decode(get_setting('home_slider_images'), true);  @endphp
             @foreach ($slider_images as $key => $value)

                  <div class="carousel-box">
                   <a href="{{ json_decode(get_setting('home_slider_links'), true)[$key] }}">
                      <img class="d-block mw-100 img-fit overflow-hidden h-sm-auto  overflow-hidden"
                      src="{{ uploaded_asset($slider_images[$key]) }}"
                      alt="{{ env('APP_NAME')}} promo"
                      onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                  </a>
                </div>
            @endforeach  
      </div>
      @endif
  </div>


  @if (get_setting('home_banner1_images') != null)
  <div class="intro-banner-wrapper col-lg-5">
    <div class="row gutter-sm">
        @php 
        $banner_1_imags = json_decode(get_setting('home_banner1_images')); 
        $data_md = count($banner_1_imags) >= 2 ? 2 : 1;
        @endphp
        @foreach ($banner_1_imags as $key => $value)
        <div class="col-xl col-md-6 col-6">
            <div class="mb-3 mb-lg-0">
                <a href="{{ json_decode(get_setting('home_banner1_links'), true)[$key] }}" class="d-block text-reset overflow-hidden">
                    <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($value) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
</div>
</div>
</section>


    <!-- Featured Products -->
    <div id="section_featured">

    </div>


    @if (get_setting('home_banner2_images') != null)
    <div class="offer-section">
        <div class="container-fluid">
            <div class="row gutter-sm">
               @php
                $banner_2_imags = json_decode(get_setting('home_banner2_images'));
                $data_md = count($banner_2_imags) >= 2 ? 2 : 1;
            @endphp
                @foreach ($banner_2_imags as $key => $value)
                    <div class="col-xl col-md-6">
                        <div class="mb-3 mb-lg-0">
                            <a href="{{ json_decode(get_setting('home_banner2_links'), true)[$key] }}" class="d-block text-reset">
                                <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($value) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif



    <!-- New Products -->
    <div class="mb-2 mb-md-3 mt-2 mt-md-3 latestproducts">
          @if (count($newest_products) > 0)
        <div class="container">
             <h3 class="fs-16 fs-md-20 fw-800 mb-4 ">
                            <span class="">New Arrivals</span>
            </h3>
             <div class="px-sm-3">
            <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15"  data-items="3" data-xl-items="3" data-lg-items="2"  data-md-items="2" data-sm-items="1" data-xs-items="1" data-arrows='true' data-infinite='false'>
                 @foreach ($newest_products as $key => $new_product)
                    <div class="carousel-box  overflow-hidden  hov-shadow-out hov-scale-img " id="newarrivcss">
                     @include('frontend.partials.product_box_2',['product' => $new_product])
                    </div>
                @endforeach
            </div>
        </div>
        </div>
         @endif
    </div>





    <!-- Banner Section 3 -->
    @if (get_setting('home_banner3_images') != null)
    <div class="mb-2 mb-md-3 mt-2 mt-md-3 collectioncss">
        <div class="container">
             <h3 class="fs-16 fs-md-20 fw-800 mb-4">
                            <span>Discover Our Collection</span>
            </h3>
            @php 
                $banner_3_imags = json_decode(get_setting('home_banner3_images')); 
                $data_md = count($banner_3_imags) >= 2 ? 2 : 1;
            @endphp
            <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15" data-items="{{ count($banner_3_imags) }}" data-xxl-items="{{ count($banner_3_imags) }}" data-xl-items="{{ count($banner_3_imags) }}" data-lg-items="{{ $data_md }}" data-md-items="{{ $data_md }}" data-sm-items="1" data-xs-items="1" data-arrows="true" data-dots="false">
                @foreach ($banner_3_imags as $key => $value)
                    <div class="carousel-box overflow-hidden hov-scale-img">
                        <a href="{{ json_decode(get_setting('home_banner3_links'), true)[$key] }}" class="d-block text-reset overflow-hidden">
                            <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($value) }}" 
                            alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- Top Brands -->
    @if (get_setting('top_brands') != null)
        <section class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                
                <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                    <!-- Title -->
                    <h3 class="fw-800 mb-2 mb-sm-0">{{ translate('Top Brands') }}</h3>
                    <!-- Links -->
                    <div class="d-flex">
                        <a class="text-blue  fw-700 hov-text-primary animate-underline-primary" href="{{ route('brands.all') }}">
                        {{ translate('View All Brands') }}</a>
                    </div>
                </div>

                <!-- Brands Section -->
                <div class="bg-white px-3">
                        @php $top_brands = json_decode(get_setting('top_brands')); @endphp
                <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none  arrow-dark arrow-x-15" data-items="6" data-xxl-items="6" data-xl-items="5" data-lg-items="5" data-md-items="4" data-sm-items="2" data-xs-items="2" data-arrows="true" data-dots="false" data-infinite="false">

                        @foreach ($top_brands as $value)
                            @php $brand = \App\Models\Brand::find($value); @endphp
                            @if ($brand != null)
                                <div class="carousel-box overflow-hidden   hov-scale-img has-transition hov-shadow-out z-1" id="brandbox" >
                                    <a href="{{ route('products.brand', $brand->slug) }}" class="d-block p-sm-3" style="border-color:#000 !important;border:1px solid #000 !important">
                                        <img src="{{ uploaded_asset($brand->logo) }}" class="lazyload h-100px mx-auto has-transition "
                                            alt="{{ $brand->getTranslation('name') }}" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                            <p class="text-center text-dark fs-12 fs-md-14 fw-700 mt-2">{{ $brand->getTranslation('name') }}</p>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    </div>
            </div>
        </section>
    @endif
    

@endsection




@section('script')
    <script>
        $(document).ready(function(){
            $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.auction_products') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_sellers').html(data);
                AIZ.plugins.slickCarousel();
            });
        });
    </script>
@endsection
