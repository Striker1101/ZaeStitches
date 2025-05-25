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
 @endsection

 @section('header')

     <div id="rey-siteHeader-helper" class="rey-siteHeader-helper --dnone-lg --dnone-md --dnone-sm"></div>
     <section class="rey-pageCover rey-pageCover--h-absolute">
         <div data-elementor-type="wp-post" data-elementor-id="1117" class="elementor elementor-1117"
             data-elementor-gstype="cover" data-page-el-selector="body.elementor-page-1117">
             <section
                 class="elementor-section elementor-top-section elementor-element elementor-element-dabcdfc rey-section-bg--classic elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                 data-id="dabcdfc" data-element_type="section"
                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                 <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c15bcbc"
                         data-id="c15bcbc" data-element_type="column">
                         <div class="elementor-column-wrap--c15bcbc elementor-widget-wrap elementor-element-populated">
                             <div class="elementor-element elementor-element-9ceb026 elementor-heading--stroke elementor-widget elementor-widget-heading"
                                 data-id="9ceb026" data-element_type="widget" data-widget_type="heading.dynamic_title">
                                 <div class="elementor-widget-container">
                                     <h1 class="elementor-heading-title">Journal</h1>
                                 </div>
                             </div>
                             <div class="elementor-element elementor-element-3a6abcf elementor-widget elementor-widget-heading"
                                 data-id="3a6abcf" data-element_type="widget" data-widget_type="heading.default">
                                 <div class="elementor-widget-container">
                                     <h2 class="elementor-heading-title elementor-size-default">LET'S TALK FASHION.
                                     </h2>
                                 </div>
                             </div>
                             <div class="elementor-element elementor-element-6be25ad elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                 data-id="6be25ad" data-element_type="widget" data-widget_type="divider.default">
                                 <div class="elementor-widget-container">
                                     <div class="elementor-divider">
                                         <span class="elementor-divider-separator">
                                         </span>
                                     </div>
                                 </div>
                             </div>
                             <div class="elementor-element elementor-element-290d959 reyEl-menu--horizontal elementor-widget__width-auto elementor-widget-mobile__width-inherit --icons-start elementor-widget elementor-widget-reycore-menu"
                                 data-id="290d959" data-element_type="widget" data-widget_type="reycore-menu.default">
                                 <div class="elementor-widget-container">

                                     <div class="rey-element reyEl-menu" data-compact-list="scroll">
                                         <div class="reyEl-menu-navWrapper">
                                             <ul class="reyEl-menu-nav rey-navEl --menuHover-ulr">
                                                 <li>
                                                     <a href="{{ route('blog') }}"><span>All</span></a>
                                                 </li>
                                                 @foreach ($categories as $category)
                                                     <li>
                                                         <a href="{{ route('blog', ['category' => $category->slug]) }}">
                                                             <span>{{ $category->name }}</span>
                                                         </a>
                                                     </li>
                                                 @endforeach
                                             </ul>

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
 @endsection

 @section('content')
     <div id="content" class="rey-siteContent ">

         <div class="rey-siteContainer ">
             <div class="rey-siteRow">


                 <main id="main" class="py-10 px-4 sm:px-6 lg:px-8 bg-gray-50">
                     <div class="max-w-7xl mx-auto">
                         <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                             @foreach ($blogs as $blog)
                                 <x-blog-card :blog="$blog" />
                             @endforeach
                         </div>

                         <!-- Pagination -->
                         <div class="mt-10">
                             {{ $blogs->links('vendor.pagination.tailwind') }}
                         </div>
                     </div>
                 </main>
                 <!-- .rey-siteMain -->

             </div>


         </div>
         <!-- .rey-siteContainer -->


     </div>
 @endsection
