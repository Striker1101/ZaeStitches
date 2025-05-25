 @extends('layouts.app')

 @section('title', 'Blog')

 @section('body_attributes')
     data-rsssl="1" class="blog wp-custom-logo wp-theme-rey wp-child-theme-rey-child theme-rey woocommerce-js ltr
     elementor-default elementor-kit-2331 rey-cwidth--default --no-acc-focus elementor-opt r-notices rey-js e--ua-blink
     e--ua-chrome e--ua-mac e--ua-webkit" data-id="25" itemtype="https://schema.org/Blog" itemscope="itemscope"
     data-rey-device="desktop" data-elementor-device-mode="desktop" data-at-top=""
 @endsection

 @section('custom_head')
     <style>
         img:is([sizes="auto" i],
         [sizes^="auto," i]) {
             contain-intrinsic-size: 3000px 1500px
         }
     </style>
     <link rel="stylesheet" href="{{ asset('css/posts/post-1148.css') }}">
     <link data-minify="1" id="rey-hs-css" type="text/css" href="{{ asset('css/rey/hs-6494715c0a.css') }}?ver=1746075724"
         rel="stylesheet" media="all" />
     <link id="rey-ds-css" type="text/css" href="{{ asset('css/rey/ds-58521f8e71.css') }}" data-noptimize=""
         data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1" rel="preload"
         as="style" onload="this.onload=null;this.rel='stylesheet';" media="all" />
     <noscript>
         <link rel="stylesheet" href="{{ asset('css/rey/ds-58521f8e71.css') }}" data-no-minify="1">
     </noscript>
     <link rel='stylesheet' id='elementor-post-1117-css' href='{{ asset('css/posts/post-1117.css') }}' type='text/css'
         media='all' />
     <link rel="stylesheet" href="{{ asset('css/rey/ds-f8bad02cbd.css') }}">
     <link rel="stylesheet" href="{{ asset('css/rey/hs-af12f4a036.css') }}">
     <link rel="stylesheet" href="{{ asset('css/posts/post-2786.css') }}">
 @endsection

 @section('header')
     <section class="rey-pageCover rey-pageCover--h-absolute">
         <div data-elementor-type="wp-post" data-elementor-id="1148" class="elementor elementor-1148"
             data-elementor-gstype="cover" data-page-el-selector="body.elementor-page-1148">
             <section
                 class="elementor-section elementor-top-section elementor-element elementor-element-dabcdfc rey-section-bg--video elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                 data-id="dabcdfc" data-element_type="section"
                 data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/vimeo.com\/113226729&quot;,&quot;background_video_start&quot;:15,&quot;background_video_end&quot;:67}"
                 style="overflow: hidden;">
                 <div class="elementor-background-video-container elementor-hidden-mobile" style="height: 540px;">
                     <div class="elementor-background-video-embed"></div>
                 </div>
                 <div class="elementor-background-overlay"></div>
                 <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c15bcbc"
                         data-id="c15bcbc" data-element_type="column">
                         <div class="elementor-column-wrap--c15bcbc elementor-widget-wrap elementor-element-populated">
                             <div class="elementor-element elementor-element-16537cd u-title-dashes elementor-heading--stroke elementor-widget elementor-widget-heading"
                                 data-id="16537cd" data-element_type="widget" data-widget_type="heading.default">
                                 <div class="elementor-widget-container">
                                     <h1 class="elementor-heading-title elementor-size-default">SHOP</h1>
                                 </div>
                             </div>
                             <div class="elementor-element elementor-element-8188904 reyEl-menu--horizontal --icons-start elementor-widget elementor-widget-reycore-menu"
                                 data-id="8188904" data-element_type="widget"
                                 data-widget_type="reycore-menu.product-categories">
                                 <div class="elementor-widget-container">

                                     <div class="rey-element reyEl-menu" data-compact-list="scroll" data-loaded="">
                                         <div class="reyEl-menu-navWrapper">
                                             <ul class="reyEl-menu-nav rey-navEl --menuHover-ulr rey-inView">

                                                 <li>
                                                     <a href="{{ route('shop') }}"><span>All</span></a>
                                                 </li>

                                                 @foreach ($categories as $category)
                                                     <li class="menu-item ">
                                                         <a href="{{ route('shop', ['category' => $category->slug]) }}">
                                                             <span>{{ $category->name }}</span>
                                                         </a>
                                                     </li>
                                                 @endforeach
                                             </ul>
                                             <span class="__compactScroll __right"></span><span
                                                 class="__compactScroll __left"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
         </div>
     </section>

     <style>
         .elementor-2471 .elementor-element.elementor-element-545513d:not(.elementor-motion-effects-element-type-background),
         .elementor-2471 .elementor-element.elementor-element-545513d>.elementor-motion-effects-container>.elementor-motion-effects-layer {
             background-color: #BF1B1B;
         }

         .elementor-2471 .elementor-element.elementor-element-545513d,
         .elementor-2471 .elementor-element.elementor-element-545513d>.elementor-background-overlay {
             border-radius: 5px 5px 5px 5px;
         }

         .elementor-2471 .elementor-element.elementor-element-545513d {
             transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
             padding: 40px 40px 40px 40px;
         }

         .elementor-2471 .elementor-element.elementor-element-545513d>.elementor-background-overlay {
             transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
         }

         .elementor-2471 .elementor-element.elementor-element-5ba4e80 .elementor-heading-title {
             -webkit-text-fill-color: transparent;
             -webkit-text-stroke-color: currentColor;
             -webkit-text-stroke-width: var(--heading-stroke-size, 2px);
             font-family: "Arial Black", Sans-serif;
             font-size: 50px;
             font-weight: 900;
             letter-spacing: -3.1px;
             color: #FFFFFF;
         }

         .elementor-2471 .elementor-element.elementor-element-5ba4e80 {
             --heading-stroke-size: 1px;
         }

         .elementor-2471 .elementor-element.elementor-element-dc9c0d1 {
             text-align: left;
         }

         .elementor-2471 .elementor-element.elementor-element-56b0eab .elementor-heading-title {
             font-size: 34px;
             color: #FFFFFF;
         }

         .elementor-2471 .elementor-element.elementor-element-ebeb70c {
             font-size: 18px;
             color: #FFFFFF;
         }

         .elementor-2471 .elementor-element.elementor-element-ebeb70c p:last-of-type {
             margin-bottom: 0;
         }

         .elementor-2471 .elementor-element.elementor-element-282aa32 .elementor-button {
             font-weight: 600;
             fill: #FFFFFF;
             color: #FFFFFF;
         }

         @media(max-width:767px) {
             .elementor-2471 .elementor-element.elementor-element-5ba4e80 .elementor-heading-title {
                 font-size: 31px;
             }

             .elementor-2471 .elementor-element.elementor-element-dc9c0d1 img {
                 width: 30px;
             }

             .elementor-2471 .elementor-element.elementor-element-56b0eab .elementor-heading-title {
                 font-size: 16px;
             }
         }
     </style>
 @endsection

 @section('content')
     <div id="content" class="rey-siteContent ">

         <div class="rey-siteContainer ">
             <div class="rey-siteRow">


                 <main id="main" class="rey-siteMain --filter-panel">
                     <header class="woocommerce-products-header">

                     </header>
                     <div class="reyajfilter-before-products --anim-default">


                         <!-- Pagination -->
                         @php
                             $queryParams = request()->except('page'); // Get all filters except page
                         @endphp
                         <nav class="mt-8 flex flex-col items-center justify-between gap-4 sm:flex-row">
                             {{-- Showing X–Y of Z --}}
                             <div class="text-sm text-gray-600"> Showing <span
                                     class="font-medium">{{ $brandsWithProducts->firstItem() ?? 0 }}</span> to <span
                                     class="font-medium">{{ $brandsWithProducts->lastItem() ?? 0 }}</span> of <span
                                     class="font-medium">{{ $brandsWithProducts->total() }}</span> results </div>
                             {{-- Filter Controls --}}
                             <form method="GET" class="flex flex-wrap items-center gap-2 text-sm" style="display: flex;">
                                 {{-- Example: Filter by Category --}}
                                 <select name="category" onchange="this.form.submit()" class="border rounded px-2 py-1">
                                     <option value="">All Categories</option>
                                     @foreach ($categories as $category)
                                         <option value="{{ $category->id }}"
                                             {{ request('category') == $category->id ? 'selected' : '' }}>
                                             {{ $category->name }}
                                         </option>
                                     @endforeach
                                 </select>

                                 {{-- Example: Sort by --}}
                                 <select name="sort" onchange="this.form.submit()" class="border rounded px-2 py-1">
                                     <option value="">Sort By</option>
                                     <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest
                                     </option>
                                     <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest
                                     </option>
                                 </select>

                                 {{-- Add more filters if needed --}}
                                 {{-- <input type="text" name="search" value="{{ request('search') }}" placeholder="Search..." class="border rounded px-2 py-1"> --}}
                             </form>

                             {{-- Pagination Controls --}}
                             <div class="inline-flex items-center gap-1">
                                 {{-- Previous --}}
                                 @if ($brandsWithProducts->onFirstPage())
                                     <span
                                         class="px-4 py-2 text-sm text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">←
                                         Previous</span>
                                 @else
                                     <a href="{{ $brandsWithProducts->appends($queryParams)->previousPageUrl() }}"
                                         class="px-4 py-2 text-sm text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">←
                                         Previous</a>
                                 @endif

                                 {{-- Ellipsis Page Logic --}}
                                 @php
                                     $currentPage = $brandsWithProducts->currentPage();
                                     $lastPage = $brandsWithProducts->lastPage();
                                     $start = max(1, $currentPage - 2);
                                     $end = min($lastPage, $currentPage + 2);
                                 @endphp

                                 @if ($start > 1)
                                     <a href="{{ $brandsWithProducts->appends($queryParams)->url(1) }}"
                                         class="px-3 py-2 text-sm text-blue-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">1</a>
                                     @if ($start > 2)
                                         <span class="px-2 py-2 text-gray-400">...</span>
                                     @endif
                                 @endif

                                 @for ($page = $start; $page <= $end; $page++)
                                     @if ($page == $currentPage)
                                         <span
                                             class="px-4 py-2 text-sm font-semibold text-white bg-blue-700 rounded-lg shadow">{{ $page }}</span>
                                     @else
                                         <a href="{{ $brandsWithProducts->appends($queryParams)->url($page) }}"
                                             class="px-4 py-2 text-sm text-blue-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">{{ $page }}</a>
                                     @endif
                                 @endfor

                                 @if ($end < $lastPage)
                                     @if ($end < $lastPage - 1)
                                         <span class="px-2 py-2 text-gray-400">...</span>
                                     @endif
                                     <a href="{{ $brandsWithProducts->appends($queryParams)->url($lastPage) }}"
                                         class="px-3 py-2 text-sm text-blue-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">{{ $lastPage }}</a>
                                 @endif

                                 {{-- Next --}}
                                 @if ($brandsWithProducts->hasMorePages())
                                     <a href="{{ $brandsWithProducts->appends($queryParams)->nextPageUrl() }}"
                                         class="px-4 py-2 text-sm text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">Next
                                         →</a>
                                 @else
                                     <span
                                         class="px-4 py-2 text-sm text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">Next
                                         →</span>
                                 @endif
                             </div>
                         </nav>

                         <div class="container mx-auto px-4 py-8">
                             <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                 @foreach ($brandsWithProducts as $brandGroup)
                                     <li class="col-span-full">
                                         <!-- Brand Section -->
                                         <div class="mb-6 bg-white shadow rounded-lg p-6">
                                             <div class="flex flex-col items-center text-center">
                                                 <img src="{{ $brandGroup['brand_logo'] }}"
                                                     alt="{{ $brandGroup['brand_name'] }}"
                                                     class="w-12 h-auto rounded-1 mb-2">
                                                 <h3 class="text-lg font-bold mb-1">
                                                     {{ $brandGroup['brand_name'] }}</h3>
                                                 <p class="text-gray-600 mb-2">{{ $brandGroup['brand_description'] }}</p>
                                                 <span class="text-sm text-gray-500">({{ $brandGroup['products_count'] }}
                                                     products)</span>
                                             </div>
                                         </div>

                                         <!-- Products Grid -->
                                         <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                             @foreach ($brandGroup['products'] as $product)
                                                 <x-product-card :product="$product" />
                                             @endforeach
                                         </div>
                                     </li>
                                 @endforeach
                             </ul>

                             <!-- Pagination -->
                             <nav class="mt-8 flex justify-center">
                                 <div class="inline-flex items-center gap-1">
                                     @if ($brandsWithProducts->onFirstPage())
                                         <span
                                             class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">Previous</span>
                                     @else
                                         <a href="{{ $brandsWithProducts->previousPageUrl() }}"
                                             class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">Previous</a>
                                         @endif @foreach ($brandsWithProducts->getUrlRange(1, $brandsWithProducts->lastPage()) as $page => $url)
                                             @if ($page == $brandsWithProducts->currentPage())
                                                 <span
                                                     class="px-4 py-2 text-sm font-semibold text-white bg-blue-700 rounded-lg shadow">{{ $page }}</span>
                                             @else
                                                 <a href="{{ $url }}"
                                                     class="px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition">{{ $page }}</a>
                                             @endif
                                         @endforeach

                                         @if ($brandsWithProducts->hasMorePages())
                                             <a href="{{ $brandsWithProducts->nextPageUrl() }}"
                                                 class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">Next</a>
                                         @else
                                             <span
                                                 class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">Next</span>
                                         @endif
                                 </div>
                             </nav>
                         </div>

                     </div><!-- .reyajfilter-before-products -->
                 </main>
                 <!-- .rey-siteMain -->

             </div>


         </div>
         <!-- .rey-siteContainer -->
         <div data-elementor-type="wp-post" data-elementor-id="2786" class="container elementor elementor-2786"
             data-elementor-gstype="generic" data-page-el-selector="body.elementor-page-2786">
             <section
                 class="elementor-section elementor-top-section elementor-element elementor-element-1ee72a0c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                 data-id="1ee72a0c" data-element_type="section">
                 <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-54f1ef67"
                         data-id="54f1ef67" data-element_type="column">
                         <div class="elementor-column-wrap--54f1ef67 elementor-widget-wrap elementor-element-populated">
                             <div class="elementor-element elementor-element-22acbbad --direction--mobile-h --direction--h --direction--tablet-v --active-hover-yes elementor-widget elementor-widget-reycore-toggle-boxes"
                                 data-id="22acbbad" data-element_type="widget"
                                 data-widget_type="reycore-toggle-boxes.default">
                                 <div class="elementor-widget-container">
                                     <div class="rey-toggleBoxes rey-toggleBoxes--h rey-toggleBoxes--default --hov-ulr"
                                         data-config="{&quot;target_type&quot;:&quot;tabs&quot;,&quot;tabs_target&quot;:&quot;tabs-611289f524f85&quot;,&quot;carousel_target&quot;:&quot;&quot;,&quot;parent_trigger&quot;:&quot;click&quot;}">
                                         <div class="rey-toggleBox --active rey-toggleBox--0" tabindex="0">
                                             <span class="rey-toggleBox-text-main btn btn-line-active"
                                                 tabindex="-1">BESTSELLERS</span>
                                         </div>
                                         <div class="rey-toggleBox rey-toggleBox--1" tabindex="0"><span
                                                 class="rey-toggleBox-text-main btn btn-line-active"
                                                 tabindex="-1">RECENTLY VIEWED</span></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
             <section data-tabs-id="tabs-611289f524f85"
                 class="container flex justify-content-center align-middle align-items-center --tabs-effect-default elementor-section elementor-top-section elementor-element elementor-element-205ba691 rey-tabs-section elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                 data-id="205ba691" data-element_type="section">
                 <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                     {{-- @dd($products) --}}
                     @foreach ($latestProducts as $product)
                         <x-product-card :product="$product" />
                     @endforeach
                 </div>
             </section>
         </div>

     </div>
 @endsection
