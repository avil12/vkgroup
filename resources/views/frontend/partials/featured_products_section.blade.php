@php
    $featured_products = Cache::remember('featured_products',3600, function () {
        return filter_products(\App\Models\Product::where('published', 1)->where('featured', '1'))->latest()->limit(8)->get();
    });
@endphp

@if (count($featured_products) > 0)
    <section class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            <!-- Top Section -->
            <div class=" featuredcss mb-2 mb-md-3 align-items-baseline justify-content-between">
                <!-- Title -->
                <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                    <span class="">Best Seller</span>
                </h3>
          
            </div>
            <!-- Products Section -->
             <div class="px-sm-3 dsk">
                <div class="row sm-gutters-16 arrow-none">
                    @foreach ($featured_products as $key => $product)
                    <div class="col-lg-3 carousel-box  position-relative hov-shadow-out  has-transition  @if($key == 0)  @endif" id="bestcss" >
                        @include('frontend.partials.product_box_3',['product' => $product])
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="px-sm-3 mob">
                <div class="aiz-carousel sm-gutters-16 arrow-none" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="1" data-xs-items="1" data-autoplay="true" data-arrows='true' data-infinite='false'>
                    @foreach ($featured_products as $key => $product)
                    <div class="carousel-box  position-relative  hov-animate-outline  has-transition  @if($key == 0)  @endif" id="bestcss">
                        @include('frontend.partials.product_box_3',['product' => $product])
                    </div>
                    @endforeach
                </div>
            </div>
          



        </div>
    </section>   
@endif

