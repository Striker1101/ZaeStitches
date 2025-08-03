<!DOCTYPE html>
<html lang="en-US" data-df data-container="1440" data-xl="2" data-admin-bar="0" class="elementor-kit-2331">

<head>
    <meta charset="UTF-8">
    @livewireStyles
    @livewireScripts
    <script src="{{ asset('js/custom_one.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') || {{ config('custom.site_name') }} </title>
    <link rel="preload" data-rocket-preload as="image" href="{{ asset('images/global/home-v4.jpg') }}"
        fetchpriority="high">
    <meta name='robots' content='max-image-preview:large' />
    <link rel="stylesheet" href="{{ asset('css/custom/global.css') }}" />
    <link rel="preload" as="image" type="image" media="(min-width:768px)"
        href="{{ asset('images/global/home-v4.jpg') }}" />
    <link rel="preload" as="image" type="image/jpeg" href="{{ asset('images/global/img1-v2.jpg') }}" />
    <link data-minify="1" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet';" media="all"
        data-no-rel='stylesheet' id='rey-wp-style-child-css' href='{{ asset('css/rey-child/style.css') }}'
        type='text/css' data-media='all' />
    <noscript>
        <link data-minify="1" rel='stylesheet' data-id='rey-wp-style-child-css'
            href='{{ asset('css/rey-child/style.css') }}' data-type='text/css' data-media='all' />
    </noscript>
    <link rel='stylesheet' id='elementor-frontend-css' href='{{ asset('css/plugin/frontend.min.css') }}' type='text/css'
        media='all' />

    <link rel='stylesheet' id='widget-heading-css' href='{{ asset('css/widget-heading.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='widget-social-icons-css' href='{{ asset('css/widget-social-icons.min.css') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='e-apple-webkit-css' href='{{ asset('css/apple-webkit.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='widget-divider-css' href='{{ asset('css/widget-divider.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='widget-image-css' href='{{ asset('css/widget-image.min.css') }}' type='text/css'
        media='all' />

    {{-- global --}}
    <link rel='stylesheet' id='elementor-post-2249-css' href='{{ asset('css/posts/post-2249.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-2331-css' href='{{ asset('css/posts/post-2331.css') }}' type='text/css'
        media='all' />
    {{-- global --}}
    <link rel="stylesheet" onload="this.onload=null;this.media='all';" media="print" data-noptimize=""
        data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1"
        data-no-rel='stylesheet' id='elementor-post-116-css' href='{{ asset('css/posts/post-116.css') }}'
        type='text/css' data-media='all' />
    <noscript>
        <link rel='stylesheet' data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer=""
            data-pagespeed-no-transform="" data-minify="1" data-id='elementor-post-116-css'
            href='{{ asset('css/posts/post-116.css') }}' data-type='text/css' data-media='all' />
    </noscript>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="{{ asset('js/jquery.min.js') }}" id="jquery-core-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="{{ asset('js/blockui.js') }}" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="{{ asset('js/add-to-cart.min.js') }}" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="{{ asset('js/js.cookie.min.js') }}" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="{{ asset('js/woocommerce.min.js') }}" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <link rel="https://api.w.org/" href="{{ asset('data/index.json') }}" />
    <link rel="alternate" title="JSON" type="application/json" href="{{ asset('data/1702.json') }}" />
    <link rel="canonical" href="/" />
    <link rel='shortlink' href='/' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="{{ asset('data/embed.json') }}" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="{{ asset('data/embed.json') }}&#038;format=xml" />
    <meta http-equiv="content-language" content="en-us" />
    <meta name="author" content="Marius H" />
    <meta name="copyright" content="Copyright (c)2019-2025 Zar Stitches. All Rights Reserved." />
    <meta name="description"
        content="Zae Stitches exists for the man who understands that personal style is a statement — and every detail is part of the story. Blending the precision of modern tailoring with subtle nods to African heritage, we craft pieces that speak with bold confidence and unmistakable presence." />
    <meta name="keywords" content="Zae_Stitches, Clothes, Agbadar" />
    <meta name="generator"
        content="Elementor 3.28.4; features: e_font_icon_svg, additional_custom_breakpoints, e_local_google_fonts; settings: css_print_method-external, google_font-disabled, font_display-auto">
    <link rel="icon" href="{{ asset('icon.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('icon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('icon.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('icon.png') }}" />
    @yield('custom_head')
    <link href="../../css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Include Toastify CSS & JS if not already in your layout -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" href="{{ asset('css/custom/test.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>

<body @yield('body_attributes')>

    <script>
        window.toast = function(message, type = 'success') {
            Toastify({
                text: message,
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: type === 'error' ? "#f44336" : "#4CAF50",
                close: true
            }).showToast();
        }
    </script>

    <x-view-currency :currencies="$currencies" />

    <script>
        if (!localStorage.getItem("guestToken")) {
            const guestToken = crypto.randomUUID(); // Generate unique ID
            localStorage.setItem('guestToken', guestToken);
        }
    </script>


    @yield('extras')

    <script type="text/javascript" id="rey-no-js" data-noptimize data-no-optimize="1" data-no-defer="1">
        document.body.classList.remove('rey-no-js');
        document.body.classList.add('rey-js');
    </script>
    <script type="text/javascript" id="rey-instant-js" data-noptimize="" data-no-optimize="1" data-no-defer="1"
        data-pagespeed-no-defer="" src="{{ asset('js/custom_two.js') }}"></script>

    <a href="#content" class="skip-link screen-reader-text">Skip to content</a>

    <div id="page" class="rey-siteWrapper ">


        <div class="rey-overlay rey-overlay--site" style="opacity:0;"></div>


        @include('partials.navbar')

        @yield('header')
        <!-- .rey-siteHeader -->


        @yield('content')
        <!-- .rey-siteContent -->


        @include('partials.footer')
        <!-- .rey-siteFooter -->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </div>

    <script type='text/javascript' id='reyscripts-loaded'>
        window.reyScripts = ["rey-script", "reycore-script", "reycore-module-mega-menu",
            "reycore-elementor-elem-column-click", "reycore-woocommerce", "rey-mobile-menu-trigger", "rey-main-menu",
            "reycore-elementor-elem-header-navigation", "reycore-sidepanel", "reycore-header-search",
            "reycore-wc-header-minicart", "rey-drop-panel", "reycore-wc-header-account-panel", "rey-tmpl",
            "reycore-wc-header-wishlist", "reycore-tooltips", "reycore-wishlist", "reycore-module-elementor-lazy-bg",
            "reycore-mc4wp", "reycore-elementor-elem-heading", "reycore-elementor-frontend",
            "reycore-widget-product-grid-scripts", "reycore-elementor-elem-lazy-load", "rey-videos",
            "reycore-elementor-elem-column-video", "reycore-widget-basic-post-grid-scripts",
            "reycore-widget-instagram-scripts", "rey-simple-scrollbar", "reycore-wc-header-account-forms",
            "reycore-module-minicart-extra-products", "reydemos", "reycore-wc-header-ajax-search"
        ];
    </script>
    <link data-minify="1" rel='stylesheet' id='wc-blocks-style-css' href='{{ asset('css/wc-blocks.css') }}'
        type='text/css' media='all' />
    <link rel="stylesheet" onload="this.onload=null;this.media='all';" media="print" data-noptimize=""
        data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1"
        data-no-rel='stylesheet' id='elementor-post-720-css' href='{{ asset('css/posts/post-720.css') }}'
        type='text/css' data-media='all' />
    <noscript>
        <link rel='stylesheet' data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer=""
            data-pagespeed-no-transform="" data-minify="1" data-id='elementor-post-720-css'
            href='{{ asset('css/posts/post-720.css') }}' data-type='text/css' data-media='all' />
    </noscript>
    <link rel="stylesheet" onload="this.onload=null;this.media='all';" media="print" data-noptimize=""
        data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1"
        data-no-rel='stylesheet' id='elementor-post-689-css' href={{ asset('css/posts/post-689.css') }}
        type='text/css' data-media='all' />
    <noscript>
        <link rel='stylesheet' data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer=""
            data-pagespeed-no-transform="" data-minify="1" data-id='elementor-post-689-css'
            href={{ asset('css/posts/post-689.css') }} data-type='text/css' data-media='all' />
    </noscript>
    <link rel='stylesheet' id='widget-icon-box-css' href='{{ asset('css/widget-icon-box.min.css') }}'
        type='text/css' media='all' />
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="{{ asset('js/sourcebuster.min.js') }}" id="sourcebuster-js-js" data-rocket-defer defer></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0000000000000000818030539140313095458623138256371021270751953125e-5,
                "session": 30,
                "base64": false,
                "ajaxurl": "https:\/\/demos.reytheme.com\/london\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": true
            },
            "fields": {
                "source_type": "current.typ",
                "referrer": "current_add.rf",
                "utm_campaign": "current.cmp",
                "utm_source": "current.src",
                "utm_medium": "current.mdm",
                "utm_content": "current.cnt",
                "utm_id": "current.id",
                "utm_term": "current.trm",
                "utm_source_platform": "current.plt",
                "utm_creative_format": "current.fmt",
                "utm_marketing_tactic": "current.tct",
                "session_entry": "current_add.ep",
                "session_start_time": "current_add.fd",
                "session_pages": "session.pgs",
                "session_count": "udata.vst",
                "user_agent": "udata.uag"
            }
        };
        /* ]]> */
    </script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="{{ asset('js/order-attribution.min.js') }}" id="wc-order-attribution-js" data-rocket-defer defer></script>
    <script type="text/javascript" id="wc-cart-fragments-js-extra">
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/london\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/london\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_17627a1f8fdd4572cfffb3e76525c2c3",
            "fragment_name": "wc_fragments_17627a1f8fdd4572cfffb3e76525c2c3",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" data-rocket-src="{{ asset('js/cart-fragments.js') }}" id="wc-cart-fragments-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="{{ asset('js/webpack.runtime.min.js') }}" id="elementor-webpack-runtime-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="{{ asset('js/elementor/frontend-modules.min.js') }}" id="elementor-frontend-modules-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" data-rocket-src="{{ asset('js/elementor/frontend.min.js') }}" id="elementor-frontend-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/forms.js') }}" id="mc4wp-forms-api-js"></script>
    <script type="text/javascript" id="rey-script-js-extra" src="{{ asset('js/custom_three.js') }}"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/c-helpers.js') }}" id="rey-script-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/general/c-general.js') }}" id="reycore-script-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/plugins/script.js') }}" id="reycore-module-mega-menu-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/elementor/elem-column-click.js') }}" id="reycore-elementor-elem-column-click-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/general/general.js') }}" id="reycore-woocommerce-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/components/c-mobile-menu-trigger.js') }}" id="rey-mobile-menu-trigger-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/components/c-main-menu.js') }}" id="rey-main-menu-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/elementor/elem-header-navigation.js') }}" id="reycore-elementor-elem-header-navigation-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/general/c-sidepanel.js') }}" id="reycore-sidepanel-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/general/c-header-search.js') }}" id="reycore-header-search-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/header-minicart.js') }}" id="reycore-wc-header-minicart-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/c-drop-panel.js') }}" id="rey-drop-panel-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/header-account-panel.js') }}" id="reycore-wc-header-account-panel-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/c-rey-template.js') }}" id="rey-tmpl-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/header-wishlist.js') }}" id="reycore-wc-header-wishlist-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/general/c-tooltips.js') }}" id="reycore-tooltips-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/wishlist/script.js') }}" id="reycore-wishlist-js"></script>
    <script data-minify="1" type="text/javascript" defer src="{{ asset('js/elementor-lazy-bg/script.js') }}"
        id="reycore-module-elementor-lazy-bg-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/mailchimp-for-wp/script.js') }}" id="reycore-mc4wp-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{asset('js/elementor/elem-heading.js')}}" id="reycore-elementor-elem-heading-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/elementor/general.js') }}" id="reycore-elementor-frontend-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/script.js') }}" id="reycore-widget-product-grid-scripts-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/elementor/elem-lazy-load.js') }}" id="reycore-elementor-elem-lazy-load-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/asset/general/c-videos.js') }}" id="rey-videos-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/elementor/elem-column-video.js') }}" id="reycore-elementor-elem-column-video-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/elementor/script.js') }}" id="reycore-widget-basic-post-grid-scripts-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/instagram/script.js') }}" id="reycore-widget-instagram-scripts-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/lib/simple-scrollbar.js') }}" id="rey-simple-scrollbar-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/lib/header-account-forms.js') }}" id="reycore-wc-header-account-forms-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/lib/script.js') }}" id="reycore-module-minicart-extra-products-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/script.js') }}" id="reydemos-js"></script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type="text/javascript" defer data-rocket-src="{{ asset('js/header-ajax-search.js') }} id="reycore-wc-header-ajax-search-js"></script>
    <div style="display:none !important" id="rey-svg-holder"><svg data-icon-id="close" aria-hidden="true"
            role="img" id="rey-icon-close-68178562b3a1a" class="rey-icon rey-icon-close " viewbox="0 0 110 110">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                <path d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z" stroke="currentColor"
                    stroke-width="var(--stroke-width, 12px)"></path>
                <path d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z" stroke="currentColor"
                    stroke-width="var(--stroke-width, 12px)"></path>
            </g>
        </svg><svg data-icon-id="arrow-classic" aria-hidden="true" role="img"
            id="rey-icon-arrow-classic-68178562b3a28" class="rey-icon rey-icon-arrow-classic " viewbox="0 0 16 16">
            <polygon fill="var(--icon-fill, currentColor)"
                points="8 0 6.6 1.4 12.2 7 0 7 0 9 12.2 9 6.6 14.6 8 16 16 8"></polygon>
        </svg></div>
    <script type="text/html" id="tmpl-reySearchPanel">
	<div class="rey-searchItems">
	</div>
</script>
    <script src="{{ asset('js/custom_four.js') }}"></script>
    <script data-no-minify="1" async src="{{ asset('js/lib/lazyload.min.js') }}"></script>
    <script>
        var rocket_beacon_data = {
            "ajax_url": "https:\/\/demos.reytheme.com\/london\/wp-admin\/admin-ajax.php",
            "nonce": "7632666e58",
            "url": "https:\/\/demos.reytheme.com\/london",
            "is_mobile": false,
            "width_threshold": 1600,
            "height_threshold": 700,
            "delay": 500,
            "debug": null,
            "status": {
                "atf": true,
                "lrc": false
            },
            "elements": "img, video, picture, p, main, div, li, svg, section, header, span",
            "lrc_threshold": 1800
        }
    </script>
    <script data-name="wpr-wpr-beacon" src='{{ asset('js/lib/wpr-beacon.min.js') }}' async></script>
    <script src="{{ asset('js/custom/five.js') }}"></script>
</body>

</html>

<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1746371938 -->
