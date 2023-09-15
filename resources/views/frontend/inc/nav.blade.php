<!-- Top Bar Banner -->
@if(get_setting('topbar_banner') != null)
<div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner" data-value="removed">
    <a href="{{ get_setting('topbar_banner_link') }}" class="d-block text-reset">
        <img src="{{ uploaded_asset(get_setting('topbar_banner')) }}" class="d-none d-xl-block img-fit"> <!-- For Large device -->
        <img src="{{ get_setting('topbar_banner_medium') != null ? uploaded_asset(get_setting('topbar_banner_medium')) : uploaded_asset(get_setting('topbar_banner')) }}" class="d-none d-md-block d-xl-none img-fit"> <!-- For Medium device -->
        <img src="{{ get_setting('topbar_banner_small') != null ? uploaded_asset(get_setting('topbar_banner_small')) : uploaded_asset(get_setting('topbar_banner')) }}" class="d-md-none img-fit"> <!-- For Small device -->
    </a>
    <button class="btn text-white h-100 absolute-top-right set-session" data-key="top-banner" data-value="removed" data-toggle="remove-parent" data-parent=".top-banner">
        <i class="la la-close la-2x"></i>
    </button>
</div>
@endif



<header class="@if(get_setting('header_stikcy') == 'on') sticky-top @endif z-1020  bg-white">
    <!-- Search Bar -->
    <div class="position-relative logo-bar-area  border-md-nonea z-1025">
        <div class="container-xl">
            <div class="d-flex align-items-center">
                <!-- top menu sidebar button -->
                <button type="button" class="btn d-lg-none mr-3 mr-sm-4 p-0 active" data-toggle="class-toggle" data-target=".aiz-top-menu-sidebar" style="opacity: 0.8;">
                    <svg id="Component_43_1" data-name="Component 43 – 1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <rect id="Rectangle_19062" data-name="Rectangle 19062" width="16" height="2" transform="translate(0 7)" fill="#fff"/>
                        <rect id="Rectangle_19063" data-name="Rectangle 19063" width="16" height="2" fill="#fff"/>
                        <rect id="Rectangle_19064" data-name="Rectangle 19064" width="16" height="2" transform="translate(0 14)" fill="#fff"/>
                    </svg>
                    
                </button>
                <!-- Header Logo -->
                <div class="col-auto pl-0  d-flex align-items-center" id="topbarmenu" >
                    <a class="d-block py-10px mr-3 ml-0" href="{{ route('home') }}">
                        @php
                            $header_logo = get_setting('header_logo');
                        @endphp
                        @if($header_logo != null)
                            <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-60px" height="60">
                        @else
                            <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-40px" height="40">
                        @endif
                    </a>
                </div>
                <!-- Search Icon for small device -->
                <div class="d-lg-none ml-auto mr-0">
                    <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                        <i class="las la-search la-flip-horizontal la-2x" style="color:#fff"></i>
                    </a>
                </div>
                <!-- Search field -->
                <div class="front-header-search d-flex align-items-center " id="searchmenu">
                    <div class="position-relative  px-3 px-lg-0" id="navflex">
                        <form action="{{ route('search') }}" method="GET" class="stop-propagation">
                            <div class="d-flex position-relative align-items-center">
                                <div class="d-lg-none" data-toggle="class-toggle" data-target=".front-header-search">
                                    <button class="btn px-2" type="button"><i class="la la-2x la-long-arrow-left" id="navarrow"></i></button>
                                </div>
                                <div class="search-input-box">
                                    <input type="text" class="border border-soft-light form-control fs-14 hov-animate-outline" id="search" name="keyword" @isset($query)
                                        value="{{ $query }}"
                                    @endisset placeholder="Search" autocomplete="off">

                                    <svg id="Group_723" data-name="Group 723" xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 20.001 20">
                                        <path id="Path_3090" data-name="Path 3090" d="M9.847,17.839a7.993,7.993,0,1,1,7.993-7.993A8,8,0,0,1,9.847,17.839Zm0-14.387a6.394,6.394,0,1,0,6.394,6.394A6.4,6.4,0,0,0,9.847,3.453Z" transform="translate(-1.854 -1.854)" fill="#fff"/>
                                        <path id="Path_3091" data-name="Path 3091" d="M24.4,25.2a.8.8,0,0,1-.565-.234l-6.15-6.15a.8.8,0,0,1,1.13-1.13l6.15,6.15A.8.8,0,0,1,24.4,25.2Z" transform="translate(-5.2 -5.2)" fill="#fff"/>
                                    </svg>                    
                                </div>
                            </div>
                        </form>
                        <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px">
                            <div class="search-preloader absolute-top-center">
                                <div class="dot-loader"><div></div><div></div><div></div></div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16">

                            </div>
                            <div id="search-content" class="text-left">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search box -->
                <div class="d-none d-lg-none ml-3 mr-0">
                    <div class="nav-search-box">
                        <a href="#" class="nav-box-link">
                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                        </a>
                    </div>
                </div>

                <li class="list-inline-item dsk  border-right  border-left-0 pr-2 " id="storelocator" >
                            <a href="https://demo.vk-groups.com/Storelocator" class="text-white d-inline-block  py-2">
                                <span>Store Locator</span>  
                            </a>
                </li>
                <li class="list-inline-item dsk border-right  border-left-0 pr-2">
                            <a href="https://demo.vk-groups.com/buy-in-bulk" class="text-white d-inline-block  py-2">
                                <span>Buy In Bulk</span>  
                            </a>
                </li>
                <li class="list-inline-item dsk">
                            <a href="https://demo.vk-groups.com/track-your-order" class="text-white d-inline-block  py-2">
                                <span>Track Order</span>  
                            </a>
                </li>
                <!-- <li class="list-inline-item dsk">-->
                <!--            <a href="#" class="text-white d-inline-block  py-2">-->
                <!--                <span>Customer Complaints</span>  -->
                <!--            </a>-->
                <!--</li>-->

              
                <!-- Compare -->
                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="compare">
                        @include('frontend.partials.compare')
                    </div>
                </div>
                <!-- Wishlist -->
                <div class="d-none d-lg-block mr-3" id="whitelisticon">
                    <div class="" id="wishlist">
                        @include('frontend.partials.wishlist')
                    </div>
                </div>
                <!-- Notifications -->
                <ul class="list-inline mb-0 h-100 d-none d-xl-flex justify-content-end align-items-center">
                    <li class="list-inline-item ml-3 mr-3 pr-3 pl-0 dropdown">
                        <a class="dropdown-toggle no-arrow text-secondary fs-12" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="">
                                <span class="position-relative d-inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.668" height="16" viewBox="0 0 14.668 16">
                                        <path id="_26._Notification" data-name="26. Notification" d="M8.333,16A3.34,3.34,0,0,0,11,14.667H5.666A3.34,3.34,0,0,0,8.333,16ZM15.06,9.78a2.457,2.457,0,0,1-.727-1.747V6a6,6,0,1,0-12,0V8.033A2.457,2.457,0,0,1,1.606,9.78,2.083,2.083,0,0,0,3.08,13.333H13.586A2.083,2.083,0,0,0,15.06,9.78Z" transform="translate(-0.999)" fill="#fff"/>
                                    </svg>
                                    @if(Auth::check() && count(Auth::user()->unreadNotifications) > 0)
                                        <span class="badge badge-primary badge-inline badge-pill absolute-top-right--10px">{{ count(Auth::user()->unreadNotifications) }}</span>
                                    @endif
                            </span>
                        </a>

                        @auth
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0 rounded-0">
                                <div class="p-3 bg-light border-bottom">
                                    <h6 class="mb-0">{{ translate('Notifications') }}</h6>
                                </div>
                                <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                    <ul class="list-group list-group-flush" >
                                        @forelse(Auth::user()->unreadNotifications as $notification)
                                            <li class="list-group-item">
                                                @if($notification->type == 'App\Notifications\OrderNotification')
                                                    @if(Auth::user()->user_type == 'customer')
                                                    <a href="{{route('purchase_history.details', encrypt($notification->data['order_id']))}}" class="text-secondary fs-12">
                                                        <span class="ml-2">
                                                            {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                        </span>
                                                    </a>
                                                    @elseif (Auth::user()->user_type == 'seller')
                                                        <a href="{{ route('seller.orders.show', encrypt($notification->data['order_id'])) }}" class="text-secondary fs-12">
                                                            <span class="ml-2">
                                                                {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                            </span>
                                                        </a>
                                                    @endif
                                                @endif
                                            </li>
                                        @empty
                                            <li class="list-group-item">
                                                <div class="py-4 text-center fs-16">
                                                    {{ translate('No notification found') }}
                                                </div>
                                            </li>
                                        @endforelse
                                    </ul>
                                </div>
                                <div class="text-center border-top">
                                    <a href="{{ route('all-notifications') }}" class="text-secondary fs-12 d-block py-2">
                                        {{translate('View All Notifications')}}
                                    </a>
                                </div>
                            </div>
                        @endauth
                    </li>
                </ul>
       

                <div class="ml-auto mr-0">
                    @auth
                        <span class="d-none d-xl-flex align-items-center nav-user-info py-20px @if(isAdmin()) ml-5 @endif" id="nav-user-info">
                            <!-- Image -->
                            <span class="size-40px rounded-circle overflow-hidden border border-transparent nav-user-img">
                                @if (Auth::user()->avatar_original != null)
                                    <img src="{{ uploaded_asset(Auth::user()->avatar_original) }}" class="img-fit h-100"
                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                                @else
                                    <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="image"
                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                                @endif
                            </span>
                            <!-- Name -->
                            <h4 class="h5 fs-14 fw-700 text-white ml-2 mb-0">{{ Auth::user()->name }}</h4>
                        </span>
                    @else
                        <!--Login & Registration -->
                        <span class="d-none d-xl-flex align-items-center nav-user-info ml-3">
                            <!-- Image -->
                            <span class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012" viewBox="0 0 19.902 20.012">
                                    <path id="fe2df171891038b33e9624c27e96e367" d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z" transform="translate(-2.064 -1.995)" fill="#fff"/>
                                </svg>
                            </span>
                            <a href="#myModal" data-toggle="modal"  class="text-white  hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">{{ translate('Login')}}</a>
                            <a href="#myModal1" data-toggle="modal" class="text-white  hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">{{ translate('Registration')}}</a>
                        </span>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Loged in user Menus -->
        <div class="hover-user-top-menu position-absolute top-100 left-0 right-0 z-3">
            <div class="container-xl">
                <div class="position-static float-right">
                    <div class="aiz-user-top-menu bg-white rounded-0 border-top shadow-sm" style="width:220px;">
                        <ul class="list-unstyled no-scrollbar mb-0 text-left">
                            @if(isAdmin())
                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="{{ route('admin.dashboard') }}" class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <path id="Path_2916" data-name="Path 2916" d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z" fill="#b5b5c0"/>
                                        </svg>
                                        <span class="user-top-menu-name has-transition ml-3">{{ translate('Dashboard') }}</span>
                                    </a>
                                </li>
                            @else
                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="{{ route('dashboard') }}" class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <path id="Path_2916" data-name="Path 2916" d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z" fill="#b5b5c0"/>
                                        </svg>
                                        <span class="user-top-menu-name has-transition ml-3">{{ translate('Dashboard') }}</span>
                                    </a>
                                </li>
                            @endif
                            
                            @if(isCustomer())
                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="{{ route('purchase_history.index') }}" class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <g id="Group_25261" data-name="Group 25261" transform="translate(-27.466 -542.963)">
                                            <path id="Path_2953" data-name="Path 2953" d="M14.5,5.963h-4a1.5,1.5,0,0,0,0,3h4a1.5,1.5,0,0,0,0-3m0,2h-4a.5.5,0,0,1,0-1h4a.5.5,0,0,1,0,1" transform="translate(22.966 537)" fill="#b5b5bf"/>
                                            <path id="Path_2954" data-name="Path 2954" d="M12.991,8.963a.5.5,0,0,1,0-1H13.5a2.5,2.5,0,0,1,2.5,2.5v10a2.5,2.5,0,0,1-2.5,2.5H2.5a2.5,2.5,0,0,1-2.5-2.5v-10a2.5,2.5,0,0,1,2.5-2.5h.509a.5.5,0,0,1,0,1H2.5a1.5,1.5,0,0,0-1.5,1.5v10a1.5,1.5,0,0,0,1.5,1.5h11a1.5,1.5,0,0,0,1.5-1.5v-10a1.5,1.5,0,0,0-1.5-1.5Z" transform="translate(27.466 536)" fill="#b5b5bf"/>
                                            <path id="Path_2955" data-name="Path 2955" d="M7.5,15.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5" transform="translate(23.966 532)" fill="#b5b5bf"/>
                                            <path id="Path_2956" data-name="Path 2956" d="M7.5,21.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5" transform="translate(23.966 529)" fill="#b5b5bf"/>
                                            <path id="Path_2957" data-name="Path 2957" d="M7.5,27.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5" transform="translate(23.966 526)" fill="#b5b5bf"/>
                                            <path id="Path_2958" data-name="Path 2958" d="M13.5,16.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(20.966 531.5)" fill="#b5b5bf"/>
                                            <path id="Path_2959" data-name="Path 2959" d="M13.5,22.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(20.966 528.5)" fill="#b5b5bf"/>
                                            <path id="Path_2960" data-name="Path 2960" d="M13.5,28.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(20.966 525.5)" fill="#b5b5bf"/>
                                            </g>
                                        </svg>
                                        <span class="user-top-menu-name has-transition ml-3">{{ translate('Purchase History') }}</span>
                                    </a>
                                </li>
                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="{{ route('digital_purchase_history.index') }}" class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.001" height="16" viewBox="0 0 16.001 16">
                                            <g id="Group_25262" data-name="Group 25262" transform="translate(-1388.154 -562.604)">
                                            <path id="Path_2963" data-name="Path 2963" d="M77.864,98.69V92.1a.5.5,0,1,0-1,0V98.69l-1.437-1.437a.5.5,0,0,0-.707.707l1.851,1.852a1,1,0,0,0,.707.293h.172a1,1,0,0,0,.707-.293l1.851-1.852a.5.5,0,0,0-.7-.713Z" transform="translate(1318.79 478.5)" fill="#b5b5bf"/>
                                            <path id="Path_2964" data-name="Path 2964" d="M67.155,88.6a3,3,0,0,1-.474-5.963q-.009-.089-.015-.179a5.5,5.5,0,0,1,10.977-.718,3.5,3.5,0,0,1-.989,6.859h-1.5a.5.5,0,0,1,0-1l1.5,0a2.5,2.5,0,0,0,.417-4.967.5.5,0,0,1-.417-.5,4.5,4.5,0,1,0-8.908.866.512.512,0,0,1,.009.121.5.5,0,0,1-.52.479,2,2,0,1,0-.162,4l.081,0h2a.5.5,0,0,1,0,1Z" transform="translate(1324 486)" fill="#b5b5bf"/>
                                            </g>
                                        </svg>
                                        <span class="user-top-menu-name has-transition ml-3">{{ translate('Downloads') }}</span>
                                    </a>
                                </li>
                                @if (get_setting('conversation_system') == 1)
                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="{{ route('conversations.index') }}" class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <g id="Group_25263" data-name="Group 25263" transform="translate(1053.151 256.688)">
                                            <path id="Path_3012" data-name="Path 3012" d="M134.849,88.312h-8a2,2,0,0,0-2,2v5a2,2,0,0,0,2,2v3l2.4-3h5.6a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2m1,7a1,1,0,0,1-1,1h-8a1,1,0,0,1-1-1v-5a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Z" transform="translate(-1178 -341)" fill="#b5b5bf"/>
                                            <path id="Path_3013" data-name="Path 3013" d="M134.849,81.312h8a1,1,0,0,1,1,1v5a1,1,0,0,1-1,1h-.5a.5.5,0,0,0,0,1h.5a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v.5a.5.5,0,0,0,1,0v-.5a1,1,0,0,1,1-1" transform="translate(-1182 -337)" fill="#b5b5bf"/>
                                            <path id="Path_3014" data-name="Path 3014" d="M131.349,93.312h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(-1181 -343.5)" fill="#b5b5bf"/>
                                            <path id="Path_3015" data-name="Path 3015" d="M131.349,99.312h5a.5.5,0,1,1,0,1h-5a.5.5,0,1,1,0-1" transform="translate(-1181 -346.5)" fill="#b5b5bf"/>
                                            </g>
                                        </svg>
                                        <span class="user-top-menu-name has-transition ml-3">{{ translate('Conversations') }}</span>
                                    </a>
                                </li>
                                @endif

                                @if (get_setting('wallet_system') == 1)
                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="{{ route('wallet.index') }}" class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                                            <defs>
                                              <clipPath id="clip-path1">
                                                <rect id="Rectangle_1386" data-name="Rectangle 1386" width="16" height="16" fill="#b5b5bf"/>
                                              </clipPath>
                                            </defs>
                                            <g id="Group_8102" data-name="Group 8102" clip-path="url(#clip-path1)">
                                              <path id="Path_2936" data-name="Path 2936" d="M13.5,4H13V2.5A2.5,2.5,0,0,0,10.5,0h-8A2.5,2.5,0,0,0,0,2.5v11A2.5,2.5,0,0,0,2.5,16h11A2.5,2.5,0,0,0,16,13.5v-7A2.5,2.5,0,0,0,13.5,4M2.5,1h8A1.5,1.5,0,0,1,12,2.5V4H2.5a1.5,1.5,0,0,1,0-3M15,11H10a1,1,0,0,1,0-2h5Zm0-3H10a2,2,0,0,0,0,4h5v1.5A1.5,1.5,0,0,1,13.5,15H2.5A1.5,1.5,0,0,1,1,13.5v-9A2.5,2.5,0,0,0,2.5,5h11A1.5,1.5,0,0,1,15,6.5Z" fill="#b5b5bf"/>
                                            </g>
                                        </svg>
                                        <span class="user-top-menu-name has-transition ml-3">{{ translate('My Wallet') }}</span>
                                    </a>
                                </li>
                                @endif
                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="{{ route('support_ticket.index') }}" class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16.001" viewBox="0 0 16 16.001">
                                            <g id="Group_25259" data-name="Group 25259" transform="translate(-316 -1066)">
                                            <path id="Subtraction_184" data-name="Subtraction 184" d="M16427.109,902H16420a8.015,8.015,0,1,1,8-8,8.278,8.278,0,0,1-1.422,4.535l1.244,2.132a.81.81,0,0,1,0,.891A.791.791,0,0,1,16427.109,902ZM16420,887a7,7,0,1,0,0,14h6.283c.275,0,.414,0,.549-.111s-.209-.574-.34-.748l0,0-.018-.022-1.064-1.6A6.829,6.829,0,0,0,16427,894a6.964,6.964,0,0,0-7-7Z" transform="translate(-16096 180)" fill="#b5b5bf"/>
                                            <path id="Union_12" data-name="Union 12" d="M16414,895a1,1,0,1,1,1,1A1,1,0,0,1,16414,895Zm.5-2.5V891h.5a2,2,0,1,0-2-2h-1a3,3,0,1,1,3.5,2.958v.54a.5.5,0,1,1-1,0Zm-2.5-3.5h1a.5.5,0,1,1-1,0Z" transform="translate(-16090.998 183.001)" fill="#b5b5bf"/>
                                            </g>
                                        </svg>
                                        <span class="user-top-menu-name has-transition ml-3">{{ translate('Support Ticket') }}</span>
                                    </a>
                                </li>
                            @endif
                            <li class="user-top-nav-element border border-top-0" data-id="1">
                                <a href="{{ route('logout') }}" class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999" viewBox="0 0 16 15.999">
                                        <g id="Group_25503" data-name="Group 25503" transform="translate(-24.002 -377)">
                                          <g id="Group_25265" data-name="Group 25265" transform="translate(-216.534 -160)">
                                            <path id="Subtraction_192" data-name="Subtraction 192" d="M12052.535,2920a8,8,0,0,1-4.569-14.567l.721.72a7,7,0,1,0,7.7,0l.721-.72a8,8,0,0,1-4.567,14.567Z" transform="translate(-11803.999 -2367)" fill="#d43533"/>
                                          </g>
                                          <rect id="Rectangle_19022" data-name="Rectangle 19022" width="1" height="8" rx="0.5" transform="translate(31.5 377)" fill="#d43533"/>
                                        </g>
                                    </svg>
                                    <span class="user-top-menu-name text-primary has-transition ml-3">{{ translate('Logout') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Bar -->
    <div class="d-none d-lg-block position-relative menuheaderbar   h-50px">
        <div class="container-xl h-100">
            <div class="d-flex h-100">

                <!-- Categoty Menu Button -->
               <!--  <div class="d-none d-xl-block all-category has-transition bg-black-10" id="category-menu-bar">
                    <div class="px-3 h-100" style="padding-top: 12px;padding-bottom: 12px; width:270px; cursor: pointer;">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <span class="fw-700 fs-16 text-white mr-3">{{ translate('Categories') }}</span>
                                <a href="{{ route('categories.all') }}" class="text-reset">
                                    <span class="d-none d-lg-inline-block text-white hov-opacity-80">({{ translate('See All') }})</span>
                                </a>
                            </div>
                            <i class="las la-angle-down text-white has-transition" id="category-menu-bar-icon" style="font-size: 1.2rem !important"></i>
                        </div>
                    </div>
                </div> -->
                <!-- Header Menus -->


               <!--  <div class="ml-xl-4 w-100 overflow-hidden">
                    <div class="d-flex align-items-center justify-content-center justify-content-xl-start h-100">
                        <ul class="list-inline mb-0 pl-0 hor-swipe c-scrollbar-light">
                            @if (get_setting('header_menu_labels') != null)
                                @foreach (json_decode( get_setting('header_menu_labels'), true) as $key => $value)
                                <li class="list-inline-item mr-0 animate-underline-white">
                                    <a href="{{ json_decode( get_setting('header_menu_links'), true)[$key] }}" 
                                        class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                        @if (url()->current() == json_decode( get_setting('header_menu_links'), true)[$key]) active @endif">
                                        {{ translate($value) }}
                                    </a>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div> -->

                <div class="ml-xl-4 w-100 overflow-hidden menuheaderbar">
                    <div class="d-flex align-items-center justify-content-center justify-content-xl-start h-100">

                       <ul class="list-inline mb-0 pl-0 mobile-hor-swipe text-center">

                   <li class="list-inline-item " id="dropdown">
                        <a href="#" class="dropbtn">Furniture</a>
                         <div class="dropdown-content">
                    <div class="container">
                    <div class="row justify-content-center">
                        <div class="column">
                            <div class="headcss">
                          <h3><a href="https://demo.vk-groups.com/category/Sofas-P8T2o">Sofas Sets</a></h3>
                          <a href="https://demo.vk-groups.com/category/3-Seater-Sofas-3pDWS">3 Seater (F/W)</a>
                          <a href="https://demo.vk-groups.com/category/2-Seater-Sofas-OKxe4">2 Seater (F/W)</a>
                          <a href="https://demo.vk-groups.com/category/1-Seater-Sofa-WTDuV">1 Seater Sofa</a>
                           <a href="https://demo.vk-groups.com/category/311-Sofa-Sets-FW-B7yWJ">3+1+1 Sofa Sets (F/W)</a>
                         
                      </div>
                      <div class="headcss">
                         <h3><a href="https://demo.vk-groups.com/category/Sectional-Sofas-HjZuO">Corner Sofa</a></h3>
                          <!--<a href="https://demo.vk-groups.com/category/LHS-Sectionals-U0Ard">LHS Sectionals</a>
                          <a href="#">RHS Sectionals</a>-->
                          <a href="#"> Wooden Corner Sofa</a>
                           <a href="https://demo.vk-groups.com/category/Fabric-Corner-Sofa-38PDe"> Fabric Corner Sofa</a>
                      </div>
                      <div class="headcss">
                        <h3><a href="#">Sofa Cum Beds</a></h3>
                      </div>
                       <div class="headcss">
                        <!-- <h3><a href="#">Futons</a></h3> -->
                       </div>
                        <div class="headcss">
                        <h3><a href="https://demo.vk-groups.com/category/chaise-loungers-vqan9">Diwana Sets</a></h3>
                        </div>
                        <div class="headcss">
                        <h3><a href="#">Bean Bags</a></h3>
                       </div>
                        </div>

                        <div class="column">
                            <div class="headcss">
                                  <h3><a href="#">Recliners</a></h3>
                          <a href="https://demo.vk-groups.com/category/1-Seater-Recliners-dXwGp">1 Seater Recliners</a>
                          <a href="#">2 Seater Recliners</a>
                          <a href="#">3 Seater Recliners</a>
                          <a href="#">Recliner Sets</a>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Sofa Chairs</a></h3>
                          <a href="#">Wing Chairs</a>
                          <a href="#">Lounge Chairs</a>
                          <a href="#">Slipper Chairs</a>
                          <a href="#">Barrel Chairs</a>
                            </div>
                        <div class="headcss">
                           <!-- <h3><a href="#">Settees & Benches</a></h3>
                             <a href="#">Settees</a>
                         <a href="#">Benches</a>
                         <a href="#">Recamiers</a>
                            </div> -->
                        </div> 
                    </div>

                        <div class="column">
                            <div class="headcss">
                                <h3><a href="#">Chairs</a></h3>
                          <a href="#">Arm Chairs</a>
                          <a href="#">Rocking Chairs</a>
                          <a href="#">Iconic Chairs</a>
                          <a href="#">Cafe Chairs</a>
                            </div>
                              <div class="headcss">
                         <h3><a href="#">Shoe Racks</a></h3>
                         <a href="#">Shoe Cabinets</a>
                         <a href="#">Open Shoe Racks</a>
                         <a href="#">Shoe Rack & Seat</a>
                         <a href="#">Tilt Out Shoe Racks</a>
                            </div>
                        </div>

                        <div class="column">
                            <div class="headcss">
                                <h3><a href="#">Centre Tables</a></h3>
                          <a href="https://demo.vk-groups.com/category/coffee-table-G8SfE">Coffee Tables</a>
                          <a href="#">Coffee Table Sets</a>
                         <!-- <a href="#">Nesting Tables</a>
                          <a href="#">Trunks</a> -->
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Side Tables</a></h3>
                        <a href="#">End Tables</a>
                        <a href="#">C Shaped Tables</a>
                        <a href="#">Console Tables</a>
                        <a href="#">Nest of Tables</a>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">TV & Media Units</a></h3>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Cabinets & Sideboards</a></h3>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Book Shelves</a></h3>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Book Cases</a></h3>
                            </div>
                        </div>

                        <div class="column">
                             <div class="headcss">
                            <h3><a href="#">Dining Sets</a></h3>
                          <a href="https://demo.vk-groups.com/category/4-Seater-YTraZ">4 Seater</a>
                          <a href="https://demo.vk-groups.com/category/6-Seater-sZZUm">6 Seater</a>
                          <a href="#">8 Seater</a>
                          <a href="#">2 Seater</a>
                             </div>
                              <div class="headcss">
                                <h3><a href="#">Dining Chairs</a></h3>
                             </div>
                              <div class="headcss">
                                <h3><a href="#">Dining Tables</a></h3>
                             </div>
                              <div class="headcss">
                                <h3><a href="#">Crockery Units</a></h3>
                             </div>
                             <div class="headcss">
                             <!--    <h3><a href="#">Bar Furniture</a></h3>
                         <a href="#">Bar Cabinets</a>
                         <a href="#">Bar Trolley</a>
                         <a href="#">Bar Stools</a>
                         <a href="#">Bar Table Sets</a>-->
                             </div> 
                        </div>

                        <div class="column">
                            <div class="headcss">
                                 <h3><a href="#">Beds</a></h3>
                          <a href="https://demo.vk-groups.com/category/Queen-Size-Beds-3Zuqx">Queen Size Beds</a>
                          <a href="#">King Size Beds</a>
                          <a href="#">Single Beds</a>
                          <a href="#">Poster Beds</a>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Bedside Tables</a></h3>
                            </div>
                           <div class="headcss">
                                <!-- <h3><a href="#">Linen Trunks</a></h3> -->
                            </div> 
                            <div class="headcss">
                              <!--  <h3><a href="#">Chest of Drawers</a></h3> -->
                            </div> 
                            <div class="headcss">
                                <h3><a href="#">Dressing Tables</a></h3>
                         <a href="#">Dressers</a>
                         <a href="#">Dressing Cabinets</a>
                         <a href="#">Dressing Units</a>
                            </div>
                        </div>

                     <div class="column">
                            <div class="headcss">
                                <h3><a href="#">Wardrobes</a></h3>
                               <!-- <a href="#">Folding Beds</a> -->
                                <a href="#">1 Door Wardrobes</a>
                                <a href="#">2 Door Wardrobes</a>
                                <a href="#">3 Door Wardrobes</a>
                                <a href="#">4 Door Wardrobes</a>
                                <a href="#">4+ Door Wardrobes</a>
                                <a href="#">3 Door wardrobes with dressser</a>
                                <a href="#">Sliding Door</a>
                            </div>
                         <!--     <div class="headcss">
                                 <h3><a href="#">Kids and Teens</a></h3>
                         <a href="#">Cribs</a>
                         <a href="#">Beds</a>
                         <a href="#">Bunk Beds</a>
                         <a href="#">Study table</a>
                          <a href="#">Wardrobes</a>
                         <a href="#">Book Shelves</a>
                         <a href="#">Storage</a>
                         <a href="#">Seating</a>
                         <a href="#">Bean Bags</a>
                            </div>  -->
                        </div> 

                        <div class="column">
                            <div class="headcss">
                                 <h3><a href="#">Study Tables</a></h3>
                          <a href="#">Writing Tables</a>
                          <a href="https://demo.vk-groups.com/category/Computer-Tables-YCkdu">Computer Tables</a>
                          <a href="#">Hutch Desks</a>
                         <!-- <a href="#">Foldable Tables</a>
                          <a href="#">Wall Mounted</a>
                          <a href="#">Portable Tables</a> -->
                            </div>
                            <div class="headcss">
                                 <h3><a href="#">Office Furniture</a></h3>
                        <a href="#">Office Chairs</a>
                        <a href="#">Office Tables</a>
                        <a href="#">Office Cabinets</a>
                            </div>
                        <!--    <div class="headcss">
                                <h3><a href="#">Furniture Care</a></h3>
                        <a href="#">Furniture Care Kit</a>
                        <a href="#">Sofa Spa</a>
                            </div> -->
                        </div>

                        <div class="column">
                            <div class="headcss">
                                <h3><a href="#">Outdoor</a></h3>
                          <a href="#">Swings</a>
                          <a href="#">Tables</a>
                          <a href="#">Table & Chair Sets</a>
                          <a href="#">Seating</a>
                          <a href="#">Plastic Chairs</a>
                            </div>
                        </div>

              </div>
              </div>
              </div>
                    </li>

                    
                     <li class="list-inline-item " id="dropdown">
                        <a href="#" class="dropbtn">Mattresses</a>
                         <div class="dropdown-content">
                    <div class="container">
                    <div class="row justify-content-center">
                        <div class="column">
                          <div class="headcss">
                               <h3><a href="#">King Size</a></h3>
                          <a href="#">Foam</a>
                          <a href="#">Spring</a>
                          <a href="#">Latex</a>
                          <a href="#">Coir</a>
                          </div>
                           <div class="headcss">
                               <h3><a href="#">Queen Size</a></h3>
                           <a href="#">Foam</a>
                          <a href="#">Spring</a>
                          <a href="#">Latex</a>
                          <a href="#">Coir</a>
                          </div>
                       </div>

                       <div class="column">
                           <div class="headcss">
                                <h3><a href="#">Single</a></h3>
                          <a href="#">Foam</a>
                          <a href="#">Spring</a>
                          <a href="#">Latex</a>
                          <a href="#">Coir</a>
                           </div>
                           <div class="headcss">
                                <h3><a href="#">Foldable (sofa cum bed)</a></h3>
                             <a href="#">King Size</a>
                             <a href="#">Queen Size</a>
                             <a href="#">Single</a>
                           </div>
                       </div>

                       <div class="column">
                           <div class="headcss">
                                <h3><a href="#">Toppers</a></h3>
                            <a href="#">King Size</a>
                             <a href="#">Queen Size</a>
                             <a href="#">Single</a>
                           </div>
                           <div class="headcss">
                                 <h3><a href="#">Protectors</a></h3>
                            <a href="#">King Size</a>
                             <a href="#">Queen Size</a>
                             <a href="#">Single</a>
                           </div>
                       </div>

                       <div class="column">
                           <div class="headcss">
                                <h3><a href="#">Crib Mattresses</a></h3>
                           </div>
                            <div class="headcss">
                               <h3><a href="#">Pillows</a></h3>
                           </div>
                            <div class="headcss">
                               <h3><a href="#">Bed Wedges</a></h3>
                           </div>
                       </div>
                        
                    </div>
                </div>
            </div>
                     </li>


                <li class="list-inline-item " id="dropdown">
                        <a href="#" class="dropbtn">Home Decor</a>
                    <div class="dropdown-content">
                    <div class="container">
                    <div class="row justify-content-center">
                        <div class="column">
                            <div class="headcss">
                                <h3><a href="#">Vases</a></h3>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Figurines</a></h3>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Collectibles</a></h3>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Showpieces</a></h3>
                            </div>
                            <div class="headcss">
                                 <h3><a href="#">Photo Frames</a></h3>
                            <a href="#">Single</a>
                            <a href="#">Collage</a>
                            <a href="#">Table Photo</a>
                            </div>
                          <div class="headcss">
                                <h3><a href="#">Table Organizers</a></h3>
                           <a href="#">Table Clocks</a>
                           <a href="#">Pen Stands</a>
                           </div>
                       </div>

                       <div class="column">
                           <div class="headcss">
                                <h3><a href="#">Prayer Essentials</a></h3>
                             <a href="#">Pooja Metalware</a>
                             <a href="#">Haldi Kumkum Box</a>
                             <a href="#">Diyas</a>
                             <a href="#">Incense Holders</a>
                             <a href="#">Bells</a>
                             <a href="#">Prayer Mats</a>
                           </div>
                            <div class="headcss">
                                <h3><a href="#">Spiritual</a></h3>
                            <a href="#">Mandirs</a>
                            <a href="#">Pooja Shelves</a>
                            <a href="#">Religious Idols</a>
                            <a href="#">Religious Frames</a>
                            <a href="#">Feng Shui</a>
                           </div>
                       </div>

                       <div class="column">
                            <div class="headcss">
                               <h3><a href="#">Pots & Planters</a></h3>
                             <a href="#">Desk Pots</a>
                             <a href="#">Planters</a>
                             <a href="#">Planter Stands</a>
                           </div>
                             <div class="headcss">
                                <h3><a href="#">Artificial Plants & Flowers</a></h3>
                            <a href="#">Artificial Plants</a>
                           </div>
                       </div>

                        <div class="column">
                           <div class="headcss">
                                <h3><a href="#">Garden Decor</a></h3>
                           </div>
                           <div class="headcss">
                               <h3><a href="#">Indoor Fountains</a></h3>
                           </div>
                           <div class="headcss">
                                 <h3><a href="#">Kids Decor</a></h3>
                            <a href="#">Wall Shelves</a>
                            <a href="#">Book Ends</a>
                            <a href="#">Wall Art</a>
                            <a href="#">Clocks</a>
                            <a href="#">Height Charts</a>
                            <a href="#">Picture Frames</a>
                           </div>
                        </div>

                        <div class="column">
                            <div class="headcss">
                                <h3><a href="#">Wall Art</a></h3>
                            <a href="#">Metal Wall Art</a>
                            <a href="#">Wooden Wall Art</a>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Wall Plates & Tiles</a></h3>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Wall Masks</a></h3>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Faux Animal Busts</a></h3>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Ethnic Art</a></h3>
                            </div>
                        </div>

                        <div class="column">
                            <div class="headcss">
                                <h3><a href="#">Wall Shelves & Cabinets</a></h3>
                            <a href="#">Wall Shelves</a>
                             <a href="#">Wall Cabinet</a>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Key Holders</a></h3>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Hand Paintings</a></h3>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Art Panels</a></h3>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Wallpapers & Decals</a></h3>
                                <a href="#">Wallpapers</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>  
                </li>

                 <li class="list-inline-item " id="dropdown">
                        <a href="#" class="dropbtn">Furnishings</a>

                     <div class="dropdown-content">
                    <div class="container">
                    <div class="row justify-content-center">
                        <div class="column">
                          <div class="headcss">
                               <h3><a href="#">Bed Sheets</a></h3>
                            <a href="#">Single Bed Sheets</a>
                            <a href="#">Queen Bed Sheets</a>
                            <a href="#">King Bed Sheets</a>
                            <a href="#">Fitted Bed Sheets</a>
                          </div>
                          <div class="headcss">
                              <h3><a href="#">Quilts & Dohars</a></h3>
                           <a href="#">Blankets</a>
                           <a href="#">Quilts</a>
                           <a href="#">Dohars</a>
                          <a href="#">Duvet Covers</a>
                           <a href="#">Duvet Inserts</a>
                          </div>
                          
                       </div>

                       <div class="column">
                            <div class="headcss">
                               <h3><a href="#">Bath Linen</a></h3>
                            <a href="#">Bath Mats</a>
                            <a href="#">Shower Curtains</a>
                          </div>

                           <div class="headcss">
                               <h3><a href="#">Cushions & Covers</a></h3>
                            <a href="#">Cushions Covers</a>
                            <a href="#">Sofa Covers</a>
                            <a href="#">Sofa Throws</a>
                            <a href="#">Chair Pads</a>
                            <a href="#">Floor Cushions</a>
                            <a href="#">Cushion Inserts</a>
                           </div>
                            
                          
                       </div>

                       <div class="column">
                           <div class="headcss">
                               <h3><a href="#">Carpets</a></h3>
                            <a href="#">5 ft x 7 ft</a>
                            <a href="#">4 ft x 6 ft</a>
                            <a href="#">3 ft x 5 ft</a>
                            <a href="#">6 ft x 9 ft</a>
                            <a href="#">8 ft x 10 ft</a>
                            <a href="#">9 ft x 12 ft</a>
                            <a href="#">Round Carpets</a>
                           </div>
                             <div class="headcss">
                                <h3><a href="#">Curtain Accessories</a></h3>
                           <a href="#">Curtain Rods</a>
                           <a href="#">Tie Backs</a>
                           </div>

                           
                        </div>

                        <div class="column">

                            <div class="headcss">
                                <h3><a href="#">Curtains</a></h3>
                           <a href="#">Door Curtains</a>
                           <a href="#">Window Curtains</a>
                           <a href="#">Blinds & Shades</a>
                           </div>

                            <div class="headcss">
                                <h3><a href="#">Runners</a></h3>
                            <a href="#">Hand Woven</a>
                            <a href="#">Hand Tufted</a>
                            <a href="#">Shaggy</a>
                            <a href="#">Flat Weave</a>
                            <a href="#">Machine Made</a>
                            </div>
                           
                        </div>

                        <div class="column">
                              <div class="headcss">
                                <h3><a href="#">Door Mats</a></h3>
                                <a href="#">Curtain Steaming</a>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Kids Furnishings</a></h3>
                          <a href="#">Bed Sheets</a>
                          <a href="#">Bedding Sets</a>
                          <a href="#">Carpets & Mats</a>
                          <a href="#">Curtains</a>
                          <a href="#">Cushion Covers</a>
                          <a href="#">Towels</a>
                           <a href="#">Pillows and Covers</a>
                            </div>
                           
                        </div>

                        <div class="column">
                             <div class="headcss">
                               <h3><a href="#">Storage & Organizers</a></h3>
                           <a href="#">Cloth Organizers</a>
                           <a href="#">Laundry Baskets</a>
                           <a href="#">Drawer Organizers</a>
                           <a href="#">Shoe Organizers</a>
                           <a href="#">Hooks & Hangers</a>
                           </div>
                        </div>
                       
                    </div>
                </div>
            </div>

                </li>


                  <li class="list-inline-item " id="dropdown">
                        <a href="#" class="dropbtn">Kitchen & Dining</a>
                         <div class="dropdown-content">
                    <div class="container">
                    <div class="row justify-content-center">
                        <div class="column">
                            <div class="headcss">
                                <h3><a href="#">Serveware</a></h3>
                            <a href="#">Serving Trays</a>
                            <a href="#">Serving Bowls</a>
                            <a href="#">Serving Baskets</a>
                            <a href="#">Appetizer Platters</a>
                            <a href="#">Cake Stands</a>
                             <a href="#">Tray Sets</a>
                            <a href="#">Cheese Boards</a>
                            <a href="#">Serving Dishes</a>
                            </div>
                             <div class="headcss">
                                <h3><a href="#">Cookware</a></h3>
                            <a href="#">Pots and Pans</a>
                            <a href="#">Spatulas and Ladles</a>
                            <a href="#">Cooking Tools</a>
                            </div>
                       </div>

                       <div class="column">

                        <div class="headcss">
                                <h3><a href="#">Dinnerware</a></h3>
                            <a href="#">Dinnerware Sets</a>
                            <a href="#">Dinner Bowls</a>
                            <a href="#">Dinner Plates</a>
                            <a href="#">Side Plates</a>
                           </div>
                           
                           <div class="headcss">
                                <h3><a href="#">Teaware</a></h3>
                            <a href="#">Tea Cups and Saucer Sets</a>
                            <a href="#">Tea Pots</a>
                            <a href="#">Coffee Mugs</a>
                            <a href="#">Coffee Tumblers</a>
                           </div>
                       </div>

                       <div class="column">
                           <div class="headcss">
                                <h3><a href="#">Bakeware</a></h3>
                            <a href="#">Tins and Moulds</a>
                            <a href="#">Baking Dishes</a>
                           </div>
                           <div class="headcss">
                                 <h3><a href="#">Knives & Cutlery</a></h3>
                            <a href="#">Cutlery Sets</a>
                            <a href="#">Knife Sets</a>
                            <a href="#">Serving Cutlery</a>
                            <a href="#">Cutlery Holders</a>
                           </div>
                       </div>

                       <div class="column">
                           <div class="headcss">
                                 <h3><a href="#">Drinkware</a></h3>
                            <a href="#">Everyday Glasses</a>
                            <a href="#">Jugs</a>
                            <a href="#">Bottles</a>
                            <a href="#">Sippers</a>
                            <a href="#">Wine Glasses</a>
                             <a href="#">Whiskey Glasses</a>
                            <a href="#">Cocktail Glasses</a>
                            <a href="#">Champagne Glasses</a>
                            <a href="#">Shot Glasses</a>
                            <a href="#">Beer Mugs</a>
                           </div>
                       </div>

                       <div class="column">
                           <div class="headcss">
                               <h3><a href="#">Table Linen</a></h3>
                            <a href="#">Placemats</a>
                            <a href="#">Table Linen Sets</a>
                            <a href="#">Napkins</a>
                           </div>
                           <div class="headcss">
                                 <h3><a href="#">Table Essentials</a></h3>
                            <a href="#">Salt & Pepper Shakers</a>
                            <a href="#">Condiment Sets</a>
                            <a href="#">Coasters & Trivets</a>
                            <a href="#">Tissue Holders</a>
                           </div>
                       </div>
                       
                       <div class="column">
                           <div class="headcss">
                            <h3><a href="#">Kitchen Organizers</a></h3>
                            <a href="#">Jars & Containers</a>
                            <a href="#">Spice Boxes</a>
                            <a href="#">Casseroles</a>
                            <a href="#">Kitchen Racks</a>
                            <a href="#">Microwave Stands</a>
                             <a href="#">Lunch Boxes</a>
                            <a href="#">Dish Drainers</a>
                            </div>
                       </div>

                    </div>
                </div>
            </div>
                  </li>


            <!--     <li class="list-inline-item " id="dropdown">
                        <a href="#" class="dropbtn">Lamps & Lighting</a>
                         <div class="dropdown-content">
                    <div class="container">
                    <div class="row justify-content-center">
                        <div class="column">
                            <div class="headcss">
                                <h3><a href="#">Lamps</a></h3>
                            <a href="#">Floor Lamps</a>
                            <a href="#">Shelf Floor Lamps</a>
                            <a href="#">Table Lamps</a>
                            <a href="#">Night Lamps</a>
                            <a href="#">Work and Study Lamps</a>
                            </div>
                             <div class="headcss">
                                <h3><a href="#">Wall Lights</a></h3>
                            <a href="#">Wall Lamps</a>
                            <a href="#">Picture Lights</a>
                            <a href="#">Spot and Track Lights</a>
                            <a href="#">Flush Mounts</a>
                            </div>
                             
                        </div>

                        <div class="column">
                            <div class="headcss">
                                 <h3><a href="#">LED Lights</a></h3>
                            <a href="#">LED Ceiling Lights</a>
                            <a href="#">LED Lamps</a>
                            <a href="#">LED Wall Lights</a>
                            <a href="#">LED Bulbs</a>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Kids Lighting</a></h3>
                            <a href="#">Kids Lamps</a>
                            <a href="#">Kids Wall Lights</a>
                            </div>
                            
                            
                        </div>

                        <div class="column">
                            <div class="headcss">
                                <h3><a href="#">Smart Lights</a></h3>
                            <a href="#">Smart Ceiling Lights</a>
                            <a href="#">Smart Lamps</a>
                            <a href="#">Smart Bulbs</a>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Bulbs</a></h3>
                            <a href="#">Filament Bulbs</a>
                            </div>
                            
                            
                        </div>

                        <div class="column">
                            <div class="headcss">
                                <h3><a href="#">Outdoor Lights</a></h3>
                            <a href="#">Outdoor Wall Lights</a>
                            <a href="#">Gate Lights</a>
                            <a href="#">Garden Lights</a>
                            <a href="#">Outdoor Hanging</a>
                            </div>
                            <div class="headcss">
                                <h3><a href="#">Festive Lights</a></h3>
                            <a href="#">Decorative Lights</a>
                            <a href="#">String Lights</a>
                            </div>
                        </div>
                     
                       
                    </div>
                </div>
            </div>

                </li> -->

                  <li class="list-inline-item " id="dropdown">
                        <a href="#" class="dropbtn">Appliances</a>
                         <div class="dropdown-content">
                    <div class="container">
                    <div class="row justify-content-center">
                        <div class="column">
                          <div class="headcss">
                                <h3><a href="#">Mixers & Processors</a></h3>
                            <a href="#">Choppers</a>
                            <a href="#">Food Processors</a>
                            <a href="#">Hand Blenders</a>
                              <a href="#">Juicer Mixer Grinders</a>
                            <a href="#">Juicers</a>
                            <a href="#">Mixer & Grinders</a>
                          </div>
                          <div class="headcss">
                               <h3><a href="#">OTGs</a></h3>
                            <a href="#">Fryers</a>
                            <a href="#">Microwaves</a>
                            <a href="#">Ovens & OTGs</a>
                          </div>
                          <div class="headcss">
                               <h3><a href="#">Food Makers</a></h3>
                           <a href="#">Rice Cookers</a>
                          </div>
                       </div>

                       <div class="column">
                           <div class="headcss">
                                <h3><a href="#">Breakfast Appliances</a></h3>
                            <a href="#">Bread and Waffle Makers</a>
                            <a href="#">Coffee Makers</a>
                            <a href="#">Egg Boilers</a>
                             <a href="https://demo.vk-groups.com/category/Electric-Kettles-uOBX3">Electric Kettles</a>
                            <a href="#">Sandwich Makers</a>
                            <a href="#">Toasters</a>
                           </div>
                           <div class="headcss">
                                <h3><a href="#">Chimneys</a></h3>
                           <a href="#">Designer Chimneys</a>
                           <a href="#">Island Chimneys</a>
                           <a href="#">Wall-Mounted Chimneys</a>
                        </div>
                    </div>

                    <div class="column">
                        <div class="headcss">
                             <h3><a href="#">Cooktops</a></h3>
                            <a href="#">Gas Stoves</a>
                            <a href="#">Built-in Hobs</a>
                            <a href="#">Induction Cooktops</a>
                        </div>
                        <div class="headcss">
                            <h3><a href="#">Heating Appliances</a></h3>
                            <a href="#">Room Heaters</a>
                            <a href="#">Water Geysers</a>
                        </div>
                        <div class="headcss">
                            <h3><a href="#">Personal Grooming</a></h3>
                           <a href="#">Hair Dryers</a>
                           <a href="#">Hair Straighteners</a>
                           <a href="#">Massagers</a>
                           <a href="#">Trimmers & Shavers</a>
                        </div>
                    </div>

                    <div class="column">
                        <div class="headcss">
                            <h3><a href="#">Iron and Steamers</a></h3>
                        </div>
                         <div class="headcss">
                             <h3><a href="#">Purifiers</a></h3>
                            <a href="#">Water Purifiers</a>
                        </div>
                         <div class="headcss">
                            <h3><a href="#">Vacuum Cleaners</a></h3>
                        </div>
                         <div class="headcss">
                             <h3><a href="#">Fans</a></h3>
                            <a href="#">Ceiling Fans</a>
                            <a href="#">Pedestal Fans</a>
                            <a href="#">Table Fans</a>
                             <a href="#">Wall Fans</a>
                            <a href="#">Exhaust Fans</a>
                            <a href="#">Portable Fans</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
                </li>

                
                <li class="list-inline-item" id="dropdown">
                        <a href="#" class="dropbtn">Electronics</a>
                         <div class="dropdown-content">
                    <div class="container">
                    <div class="row justify-content-center">
                        <div class="column">
                            <div class="headcss">
                                 <h3><a href="#">Home Appliances</a></h3>
                            <a href="#">Air Conditioner</a>
                            <a href="#">Air Cooler</a>
                            <a href="#">Fan</a>
                            <a href="#">Inverter</a>
                            <a href="#">Iron Box</a>
                            <a href="#">Refrigerator</a>
                            <a href="#">Room Heater</a>
                            </div>
                       </div>
                        <div class="column">
                            <div class="headcss">
                                <a href="#">Vacuum Cleaner</a>
                            <a href="#">Washing Machine</a>
                            <a href="#">Water Dispenser</a>
                             <a href="#">Water Filter</a>
                           <a href="#">Water Heater</a>
                           <a href="#">Water Purifie</a>
                            </div>
                       </div>
                        <div class="column">
                            <div class="headcss">
                                 <h3><a href="#">Kitchen Appliances</a></h3>
                            <a href="#">Air Fryer</a>
                            <a href="#">Barbecue</a>
                            <a href="#">Beverage Maker</a>
                            <a href="#">Cookers</a>
                            <a href="#">Dish Washer</a>
                             <a href="#">Kitchenware</a>
                            <a href="#">Microwave Oven</a>
                            </div>
                       </div>
                        <div class="column">
                            <div class="headcss">
                                 <a href="#">Mixer Grinder</a>
                            <a href="#">OTG</a>
                            <a href="#">Roti Maker</a>
                            <a href="#">Sandwich Maker</a>
                            <a href="#">Stove</a>
                            <a href="#">Toaster</a>
                            <a href="#">Wet Grinder</a>
                            </div>
                       </div>

                       <div class="column">
                           <div class="headcss">
                               <h3><a href="#">CAMERAS & COMPUTERS</a></h3>
                            <a href="#">Camera</a>
                            <a href="#">Computer</a>
                            <a href="#">Printer</a>
                            <a href="#">Laptops</a>
                           </div>
                           <div class="headcss">
                                <h3><a href="#">PHONES & TABLETS</a></h3>
                             <a href="#">Cell Phones</a>
                             <a href="#">Smart Watch</a>
                             <a href="#">Telephone</a>
                           </div>
                          
                       </div>

                       <div class="column">
                            <div class="headcss">
                                <h3><a href="#">TV & AUDIO</a></h3>
                            <a href="#">Audio</a>
                            <a href="#">Tv</a>
                           </div>
                       </div>
                       
                    </div>
                </div>
            </div>
        </li>
    </ul>
                        
                    </div>
                </div>

                 @if (get_setting('helpline_number'))
                        <!-- Helpline -->
                        <ul class="d-none d-xl-block list-inline mb-0 pl-0">
                        <li class="list-inline-item ml-0 pl-0 mr-0 pr-0" style="width:209px;padding-top: 5px;">
                            <a href="tel:{{ get_setting('helpline_number') }}" class="text-white fs-15 d-inline-block py-2">
                                <span>{{ translate('Helpline')}}</span>  
                                <span>{{ get_setting('helpline_number') }}</span>    
                            </a>
                        </li>
                    </ul>
                    @endif

                <!-- Cart -->
                <div class="d-none d-xl-block align-self-stretch ml-5 mr-0 has-transition bg-black-10" data-hover="dropdown">
                    <div class="nav-cart-box dropdown h-100" id="cart_items" style="width: max-content;">
                        @include('frontend.partials.cart')
                    </div>
                </div>
            </div>
        </div>
        <!-- Categoty Menus -->
        <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 z-3 d-none" id="click-category-menu">
            <div class="container">
                <div class="d-flex position-relative">
                    <div class="position-static">
                        @include('frontend.partials.category_menu')
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Top Menu Sidebar -->
<div class="aiz-top-menu-sidebar collapse-sidebar-wrap sidebar-xl sidebar-left d-lg-none z-1035">
    <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-top-menu-sidebar" data-same=".hide-top-menu-bar"></div>
    <div class="collapse-sidebar c-scrollbar-light text-left">
        <button type="button" class="btn btn-sm p-4 hide-top-menu-bar" data-toggle="class-toggle" data-target=".aiz-top-menu-sidebar" >
            <i class="las la-times la-2x text-primary"></i>
        </button>
        @auth
            <span class="d-flex align-items-center nav-user-info pl-4">
                <!-- Image -->
                <span class="size-40px rounded-circle overflow-hidden border border-transparent nav-user-img">
                    @if (Auth::user()->avatar_original != null)
                        <img src="{{ uploaded_asset(Auth::user()->avatar_original) }}" class="img-fit h-100"
                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                    @else
                        <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="image"
                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                    @endif
                </span>
                <!-- Name -->
                <h4 class="h5 fs-14 fw-700 text-dark ml-2 mb-0">{{ Auth::user()->name }}</h4>
            </span>
        @else
            <!--Login & Registration -->
            <span class="d-flex align-items-center nav-user-info pl-4">
                <!-- Image -->
                <span class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012" viewBox="0 0 19.902 20.012">
                        <path id="fe2df171891038b33e9624c27e96e367" d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z" transform="translate(-2.064 -1.995)" fill="#91919b"/>
                    </svg>
                </span>
                <a href="{{ route('user.login') }}" class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">{{ translate('Login')}}</a>
                <a href="{{ route('user.registration') }}" class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">{{ translate('Registration')}}</a>
            </span>
        @endauth
        <hr>
        <ul class="mb-0 pl-3 pb-3 h-100">
            @if (get_setting('header_menu_labels') != null)
                @foreach (json_decode( get_setting('header_menu_labels'), true) as $key => $value)
                <li class="mr-0">
                    <a href="{{ json_decode( get_setting('header_menu_links'), true)[$key] }}" 
                        class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                        @if (url()->current() == json_decode( get_setting('header_menu_links'), true)[$key]) active @endif">
                        {{ translate($value) }}
                    </a>
                </li>
                @endforeach
            @endif
            @auth
                @if(isAdmin())
                    <hr>
                    <li class="mr-0">
                        <a href="{{ route('admin.dashboard') }}" 
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links">
                            {{ translate('My Account') }}
                        </a>
                    </li>
                @else
                    <hr>
                    <li class="mr-0">
                        <a href="{{ route('dashboard') }}" 
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            {{ areActiveRoutes(['dashboard'],' active')}}">
                            {{ translate('My Account') }}
                        </a>
                    </li>
                @endif
                @if(isCustomer())
                    <li class="mr-0">
                        <a href="{{ route('all-notifications') }}" 
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            {{ areActiveRoutes(['all-notifications'],' active')}}">
                            {{ translate('Notifications') }}
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="{{ route('wishlists.index') }}" 
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            {{ areActiveRoutes(['wishlists.index'],' active')}}">
                            {{ translate('Wishlist') }}
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="{{ route('compare') }}" 
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            {{ areActiveRoutes(['compare'],' active')}}">
                            {{ translate('Compare') }}
                        </a>
                    </li>
                @endif
                <hr>
                <li class="mr-0">
                    <a href="{{ route('logout') }}" 
                        class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-primary header_menu_links">
                        {{ translate('Logout') }}
                    </a>
                </li>
            @endauth
        </ul>
        <br>
        <br>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div id="order-details-modal-body">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" id="modaldiagcss">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         
    <section class="">
        <div class="profile">
            <div class="">
                <div class="row">
                    <div class="col-xl-12 col-lg-10 mx-auto">
                        <div class="card shadow-none rounded-0 border">
                            <div class="row">
                                <!-- Left Side -->
                                <div class="col-lg-6 col-md-7 p-4 p-lg-5">
                                    <!-- Titles -->
                                    <div class="text-center">
                                        <h1 class="fs-20 fs-md-24 fw-700 text-primary">{{ translate('Welcome Back !')}}</h1>
                                        <h5 class="fs-14 fw-400 text-dark">{{ translate('Login to your account')}}</h5>
                                    </div>
                                    <!-- Login form -->
                                    <div class="pt-3 pt-lg-4">
                                        <div class="">
                                            <form class="form-default" role="form" action="{{ route('login') }}" method="POST">
                                                @csrf
                                                
                                                <!-- Email or Phone -->
                                                @if (addon_is_activated('otp_system') && env("DEMO_MODE") != "On")
                                                    <div class="form-group phone-form-group mb-1">
                                                        <label for="phone" class="fs-12 fw-700 text-soft-dark">{{  translate('Phone') }}</label>
                                                        <input type="tel" id="phone-code" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }} rounded-0" value="{{ old('phone') }}" placeholder="" name="phone" autocomplete="off">
                                                    </div>

                                                    <input type="hidden" name="country_code" value="">
                                                    
                                                    <div class="form-group email-form-group mb-1 d-none">
                                                        <label for="email" class="fs-12 fw-700 text-soft-dark">{{  translate('Email') }}</label>
                                                        <input type="email" class="form-control rounded-0 {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{  translate('johndoe@example.com') }}" name="email" id="email" autocomplete="off">
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    
                                                    <div class="form-group text-right">
                                                        <button class="btn btn-link p-0 text-primary" type="button" onclick="toggleEmailPhone(this)"><i>*{{ translate('Use Email Instead') }}</i></button>
                                                    </div>
                                                @else
                                                    <div class="form-group">
                                                        <label for="email" class="fs-12 fw-700 text-soft-dark">{{  translate('Email') }}</label>
                                                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} rounded-0" value="{{ old('email') }}" placeholder="{{  translate('johndoe@example.com') }}" name="email" id="email" autocomplete="off">
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                @endif
                                                    
                                                <!-- password -->
                                                <div class="form-group">
                                                    <label for="password" class="fs-12 fw-700 text-soft-dark">{{  translate('Password') }}</label>
                                                    <input type="password" class="form-control rounded-0 {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ translate('Password')}}" name="password" id="password">
                                                </div>

                                                <div class="row mb-2">
                                                    <!-- Remember Me -->
                                                    <div class="col-6">
                                                        <label class="aiz-checkbox">
                                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                            <span class="has-transition fs-12 fw-400 text-gray-dark hov-text-primary">{{  translate('Remember Me') }}</span>
                                                            <span class="aiz-square-check"></span>
                                                        </label>
                                                    </div>
                                                    <!-- Forgot password -->
                                                    <div class="col-6 text-right">
                                                        <a href="{{ route('password.request') }}" class="text-reset fs-12 fw-400 text-gray-dark hov-text-primary"><u>{{ translate('Forgot password?')}}</u></a>
                                                    </div>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="mb-4 mt-4">
                                                    <button type="submit" class="btn btn-primary btn-block fw-700 fs-14 rounded-4">{{  translate('Login') }}</button>
                                                </div>
                                            </form>

                                            <!-- DEMO MODE -->
                                            @if (env("DEMO_MODE") == "On")
                                                <div class="mb-4">
                                                    <table class="table table-bordered mb-0">
                                                        <tbody>
                                                            {{-- <tr>
                                                                <td>{{ translate('Seller Account')}}</td>
                                                                <td>
                                                                    <button class="btn btn-info btn-sm" onclick="autoFillSeller()">{{ translate('Copy credentials') }}</button>
                                                                </td>
                                                            </tr> --}}
                                                            <tr>
                                                                <td>{{ translate('Customer Account')}}</td>
                                                                <td>
                                                                    <button class="btn btn-info btn-sm" onclick="autoFillCustomer()">{{ translate('Copy credentials') }}</button>
                                                                </td>
                                                            </tr>
                                                            {{-- <tr>
                                                                <td>{{ translate('Delivery Boy Account')}}</td>
                                                                <td>
                                                                    <button class="btn btn-info btn-sm" onclick="autoFillDeliveryBoy()">{{ translate('Copy credentials') }}</button>
                                                                </td>
                                                            </tr> --}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            @endif

                                            <!-- Social Login -->
                                            @if(get_setting('google_login') == 1 || get_setting('facebook_login') == 1 || get_setting('twitter_login') == 1 || get_setting('apple_login') == 1)
                                                <div class="text-center mb-3">
                                                    <span class="bg-white fs-12 text-gray">{{ translate('Or Login With')}}</span>
                                                </div>
                                                <ul class="list-inline social colored text-center mb-4">
                                                    @if (get_setting('facebook_login') == 1)
                                                        <li class="list-inline-item">
                                                            <a href="{{ route('social.login', ['provider' => 'facebook']) }}" class="facebook">
                                                                <i class="lab la-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if(get_setting('google_login') == 1)
                                                        <li class="list-inline-item">
                                                            <a href="{{ route('social.login', ['provider' => 'google']) }}" class="google">
                                                                <i class="lab la-google"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if (get_setting('twitter_login') == 1)
                                                        <li class="list-inline-item">
                                                            <a href="{{ route('social.login', ['provider' => 'twitter']) }}" class="twitter">
                                                                <i class="lab la-twitter"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if (get_setting('apple_login') == 1)
                                                        <li class="list-inline-item">
                                                            <a href="{{ route('social.login', ['provider' => 'apple']) }}"
                                                                class="apple">
                                                                <i class="lab la-apple"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            @endif
                                        </div>

                                        <!-- Register Now -->
                                        <div class="text-center">
                                            <p class="fs-12 text-gray mb-0">{{ translate('Dont have an account?')}}</p>
                                            <a href="{{ route('user.registration') }}" class="fs-14 fw-700 animate-underline-primary">{{ translate('Register Now')}}</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Right Side Image -->
                                <div class="col-lg-6 col-md-5 py-3 py-md-0">
                                    <img src="{{ uploaded_asset(get_setting('login_page_image')) }}" alt="" class="img-fit h-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@section('script')
    <script type="text/javascript">
        var isPhoneShown = true,
            countryData = window.intlTelInputGlobals.getCountryData(),
            input = document.querySelector("#phone-code");

        for (var i = 0; i < countryData.length; i++) {
            var country = countryData[i];
            if(country.iso2 == 'bd'){
                country.dialCode = '88';
            }
        }

        var iti = intlTelInput(input, {
            separateDialCode: true,
            utilsScript: "{{ static_asset('assets/js/intlTelutils.js') }}?1590403638580",
            onlyCountries: @php echo json_encode(\App\Models\Country::where('status', 1)->pluck('code')->toArray()) @endphp,
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                if(selectedCountryData.iso2 == 'bd'){
                    return "01xxxxxxxxx";
                }
                return selectedCountryPlaceholder;
            }
        });

        var country = iti.getSelectedCountryData();
        $('input[name=country_code]').val(country.dialCode);

        input.addEventListener("countrychange", function(e) {
            // var currentMask = e.currentTarget.placeholder;

            var country = iti.getSelectedCountryData();
            $('input[name=country_code]').val(country.dialCode);

        });

        function toggleEmailPhone(el){
            if(isPhoneShown){
                $('.phone-form-group').addClass('d-none');
                $('.email-form-group').removeClass('d-none');
                $('input[name=phone]').val(null);
                isPhoneShown = false;
                $(el).html('<i>*{{ translate('Use Phone Number Instead') }}</i>');
            }
            else{
                $('.phone-form-group').removeClass('d-none');
                $('.email-form-group').addClass('d-none');
                $('input[name=email]').val(null);
                isPhoneShown = true;
                $(el).html('<i>*{{ translate('Use Email Instead') }}</i>');
            }
        }

        function autoFillSeller(){
            $('#email').val('seller@example.com');
            $('#password').val('123456');
        }

        function autoFillCustomer(){
            $('#email').val('customer@example.com');
            $('#password').val('123456');
        }
        
        function autoFillDeliveryBoy(){
            $('#email').val('deliveryboy@example.com');
            $('#password').val('123456');
        }
    </script>
@endsection

        </div>
        
      </div>
    </div>
</div>


<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog" id="modaldiagcss">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">


             <section class="">
        <div class="profile">
            <div class="">
                <div class="row">
                    <div class="col-xl-12 col-lg-10 mx-auto">
                        <div class="card shadow-none rounded-0 border">
                            <div class="row">
                                <!-- Left Side -->
                                <div class="col-lg-6 col-md-7 p-4 p-lg-5">
                                    <!-- Titles -->
                                    <div class="text-center">
                                        <h1 class="fs-20 fs-md-24 fw-700 text-primary">{{ translate('Create an account')}}</h1>
                                    </div>
                                    <!-- Register form -->
                                    <div class="pt-3 pt-lg-4">
                                        <div class="">
                                            <form id="reg-form" class="form-default" role="form" action="{{ route('register') }}" method="POST">
                                                @csrf
                                                
                                                <!-- Name -->
                                                <div class="form-group">
                                                    <label for="name" class="fs-12 fw-700 text-soft-dark">{{  translate('Full Name') }}</label>
                                                    <input type="text" class="form-control rounded-0{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="{{  translate('Full Name') }}" name="name">
                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <!-- Email or Phone -->
                                                @if (addon_is_activated('otp_system'))
                                                    <div class="form-group phone-form-group mb-1">
                                                        <label for="phone" class="fs-12 fw-700 text-soft-dark">{{  translate('Phone') }}</label>
                                                        <input type="tel" id="phone-code" class="form-control rounded-0{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}" placeholder="" name="phone" autocomplete="off">
                                                    </div>

                                                    <input type="hidden" name="country_code" value="">

                                                    <div class="form-group email-form-group mb-1 d-none">
                                                        <label for="email" class="fs-12 fw-700 text-soft-dark">{{  translate('Email') }}</label>
                                                        <input type="email" class="form-control rounded-0 {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{  translate('Email') }}" name="email"  autocomplete="off">
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group text-right">
                                                        <button class="btn btn-link p-0 text-primary" type="button" onclick="toggleEmailPhone(this)"><i>*{{ translate('Use Email Instead') }}</i></button>
                                                    </div>
                                                @else
                                                    <div class="form-group">
                                                        <label for="email" class="fs-12 fw-700 text-soft-dark">{{  translate('Email') }}</label>
                                                        <input type="email" class="form-control rounded-0{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{  translate('Email') }}" name="email">
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                @endif

                                                <!-- password -->
                                                <div class="form-group">
                                                    <label for="password" class="fs-12 fw-700 text-soft-dark">{{  translate('Password') }}</label>
                                                    <input type="password" class="form-control rounded-0{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{  translate('Password') }}" name="password">
                                                    <div class="text-right mt-1">
                                                        <span class="fs-12 fw-400 text-gray-dark">{{ translate('Password must contain at least 6 digits') }}</span>
                                                    </div>
                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <!-- password Confirm -->
                                                <div class="form-group">
                                                    <label for="password_confirmation" class="fs-12 fw-700 text-soft-dark">{{  translate('Confirm Password') }}</label>
                                                    <input type="password" class="form-control rounded-0" placeholder="{{  translate('Confirm Password') }}" name="password_confirmation">
                                                </div>

                                                <!-- Recaptcha -->
                                                @if(get_setting('google_recaptcha') == 1)
                                                    <div class="form-group">
                                                        <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                                    </div>
                                                @endif

                                                <!-- Terms and Conditions -->
                                                <div class="mb-3">
                                                    <label class="aiz-checkbox">
                                                        <input type="checkbox" name="checkbox_example_1" required>
                                                        <span class="">{{ translate('By signing up you agree to our ')}} <a href="{{ route('terms') }}" class="fw-500">{{ translate('terms and conditions.') }}</a></span>
                                                        <span class="aiz-square-check"></span>
                                                    </label>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="mb-4 mt-4">
                                                    <button type="submit" class="btn btn-primary btn-block fw-600 rounded-4">{{  translate('Create Account') }}</button>
                                                </div>
                                            </form>
                                            
                                            <!-- Social Login -->
                                            @if(get_setting('google_login') == 1 || get_setting('facebook_login') == 1 || get_setting('twitter_login') == 1 || get_setting('apple_login') == 1)
                                                <div class="text-center mb-3">
                                                    <span class="bg-white fs-12 text-gray">{{ translate('Or Join With')}}</span>
                                                </div>
                                                <ul class="list-inline social colored text-center mb-4">
                                                    @if (get_setting('facebook_login') == 1)
                                                        <li class="list-inline-item">
                                                            <a href="{{ route('social.login', ['provider' => 'facebook']) }}" class="facebook">
                                                                <i class="lab la-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if(get_setting('google_login') == 1)
                                                        <li class="list-inline-item">
                                                            <a href="{{ route('social.login', ['provider' => 'google']) }}" class="google">
                                                                <i class="lab la-google"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if (get_setting('twitter_login') == 1)
                                                        <li class="list-inline-item">
                                                            <a href="{{ route('social.login', ['provider' => 'twitter']) }}" class="twitter">
                                                                <i class="lab la-twitter"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if (get_setting('apple_login') == 1)
                                                        <li class="list-inline-item">
                                                            <a href="{{ route('social.login', ['provider' => 'apple']) }}" class="apple">
                                                                <i class="lab la-apple"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            @endif
                                        </div>

                                        <!-- Log In -->
                                        <div class="text-center">
                                            <p class="fs-12 text-gray mb-0">{{ translate('Already have an account?')}}</p>
                                            <a href="{{ route('user.login') }}" class="fs-14 fw-700 animate-underline-primary">{{ translate('Log In')}}</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Right Side Image -->
                                <div class="col-lg-6 col-md-5 py-3 py-md-0">
                                    <img src="{{ uploaded_asset(get_setting('register_page_image')) }}" alt="" class="img-fit h-100">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



@section('script')
    @if(get_setting('google_recaptcha') == 1)
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif

    <script type="text/javascript">

        @if(get_setting('google_recaptcha') == 1)
        // making the CAPTCHA  a required field for form submission
        $(document).ready(function(){
            $("#reg-form").on("submit", function(evt)
            {
                var response = grecaptcha.getResponse();
                if(response.length == 0)
                {
                //reCaptcha not verified
                    alert("please verify you are humann!");
                    evt.preventDefault();
                    return false;
                }
                //captcha verified
                //do the rest of your validations here
                $("#reg-form").submit();
            });
        });
        @endif

        var isPhoneShown = true,
            countryData = window.intlTelInputGlobals.getCountryData(),
            input = document.querySelector("#phone-code");

        for (var i = 0; i < countryData.length; i++) {
            var country = countryData[i];
            if(country.iso2 == 'bd'){
                country.dialCode = '88';
            }
        }

        var iti = intlTelInput(input, {
            separateDialCode: true,
            utilsScript: "{{ static_asset('assets/js/intlTelutils.js') }}?1590403638580",
            onlyCountries: @php echo json_encode(\App\Models\Country::where('status', 1)->pluck('code')->toArray()) @endphp,
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                if(selectedCountryData.iso2 == 'bd'){
                    return "01xxxxxxxxx";
                }
                return selectedCountryPlaceholder;
            }
        });

        var country = iti.getSelectedCountryData();
        $('input[name=country_code]').val(country.dialCode);

        input.addEventListener("countrychange", function(e) {
            // var currentMask = e.currentTarget.placeholder;

            var country = iti.getSelectedCountryData();
            $('input[name=country_code]').val(country.dialCode);

        });

        function toggleEmailPhone(el){
            if(isPhoneShown){
                $('.phone-form-group').addClass('d-none');
                $('.email-form-group').removeClass('d-none');
                isPhoneShown = false;
                $(el).html('<i>*{{ translate('Use Phone Number Instead') }}</i>');
            }
            else{
                $('.phone-form-group').removeClass('d-none');
                $('.email-form-group').addClass('d-none');
                isPhoneShown = true;
                $(el).html('*{{ translate('Use Email Instead') }}');
            }
        }
    </script>


        </div>
    </div>
</div>
</div>

@section('script')
    <script type="text/javascript">
        function show_order_details(order_id)
        {
            $('#order-details-modal-body').html(null);

            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }

            $.post('{{ route('orders.details') }}', { _token : AIZ.data.csrf, order_id : order_id}, function(data){
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
                AIZ.plugins.bootstrapSelect('refresh');
            });
        }

    </script>
@endsection
