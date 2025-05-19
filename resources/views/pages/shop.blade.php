@extends('layouts.app')

@section('title', 'Shop')

@section('body_attributes')
    data-rsssl=1
    class="archive post-type-archive post-type-archive-product wp-custom-logo wp-theme-rey wp-child-theme-rey-child
    theme-rey woocommerce-shop woocommerce woocommerce-page woocommerce-no-js rey-no-js ltr elementor-default
    elementor-kit-2331 rey-cwidth--default --no-acc-focus elementor-opt r-notices"
    data-id="4"
    itemtype="https://schema.org/WebPage"
    itemscope="itemscope"
@endsection

@section('custom_head')
    <script src="{{ asset('js/custom/shop/one.js') }}"></script>
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
    <link data-minify="1" id="rey-hs-css" type="text/css" href="{{ asset('css/rey/hs-af12f4a036.css') }}" rel="stylesheet"
        media="all" />

    <link id="rey-ds-css" type="text/css" href="{{ asset('css/rey/ds-f8bad02cbd.css') }}?ver=3.1.5.1744839878"
        data-noptimize="" data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1"
        rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet';" media="all" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/rey/ds-f8bad02cbd.css') }}" data-no-minify="1">
    </noscript>
    <link rel='stylesheet' id='elementor-post-1148-css' href='{{ asset('css/posts/post-1148.css') }}' type='text/css'
        media='all' />
@endsection

@section('header')
    <div id="rey-siteHeader-helper" class="rey-siteHeader-helper --dnone-lg --dnone-md --dnone-sm"></div>
    <section class="rey-pageCover rey-pageCover--h-absolute">
        <div data-elementor-type="wp-post" data-elementor-id="1148" class="elementor elementor-1148"
            data-elementor-gstype="cover" data-page-el-selector="body.elementor-page-1148">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-dabcdfc rey-section-bg--video elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="dabcdfc" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/vimeo.com\/113226729&quot;,&quot;background_video_start&quot;:15,&quot;background_video_end&quot;:67}">
                <div class="elementor-background-video-container elementor-hidden-mobile">
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

                                    <div class="rey-element reyEl-menu" data-compact-list="scroll">
                                        <div class="reyEl-menu-navWrapper">
                                            <ul class="reyEl-menu-nav rey-navEl --menuHover-ulr">
                                                <li class="menu-item "><a
                                                        href="https://demos.reytheme.com/london/product-category/men/casual-urban-wear/"><span>Casual
                                                            & Urban Wear</span></a></li>
                                                <li class="menu-item "><a
                                                        href="https://demos.reytheme.com/london/product-category/men/jeans/"><span>Jeans</span></a>
                                                </li>
                                                <li class="menu-item "><a
                                                        href="https://demos.reytheme.com/london/product-category/men/jumpers-cardigans/"><span>Jumpers
                                                            & Cardigans</span></a></li>
                                                <li class="menu-item "><a
                                                        href="https://demos.reytheme.com/london/product-category/men/shorts/"><span>Shorts</span></a>
                                                </li>
                                                <li class="menu-item "><a
                                                        href="https://demos.reytheme.com/london/product-category/men/sweatshirts-hoodies/"><span>Sweatshirts
                                                            & Hoodies</span></a></li>
                                                <li class="menu-item "><a
                                                        href="https://demos.reytheme.com/london/product-category/men/t-shirts-tops/"><span>T-Shirts
                                                            & Tops</span></a></li>
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
                <main id="main" class="rey-siteMain --filter-panel">
                    <header class="woocommerce-products-header">

                    </header>
                    <div class="reyajfilter-before-products --anim-default">
                        <div class="reyajfilter-updater --invisible">
                            <div class="rey-lineLoader"></div>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="rey-loopHeader --has-filter-btn">
                            <div class="woocommerce-result-count">
                                <span>Showing 1&ndash;16 of 35 results</span>
                            </div>

                            <div class=" rey-viewSelector rey-loopInlineList">

                                <span class="rey-loopInlineList__label">VIEW</span>

                                <ul class="rey-loopInlineList-list rey-viewSelector-list-dk">
                                    <li data-count="2">2</li>
                                    <li data-count="3">3</li>
                                    <li data-count="4">4</li>
                                </ul>


                                <div class="__loop-separator --dnone-md --dnone-sm"></div>

                            </div>

                            <form class="woocommerce-ordering rey-loopSelectList" method="get">

                                <label class="btn btn-line" for="catalog-orderby-list">
                                    <span>Default sorting</span>
                                    <select name="orderby" class="orderby" aria-label="Shop order"
                                        id="catalog-orderby-list">
                                        <option value="menu_order" selected='selected'>Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </label>

                                <input type="hidden" name="paged" value="1" />
                            </form>

                            <div class="rey-filterBtn rey-filterBtn--pos-right  " data-target="filters-sidebar">

                                <div class="__loop-separator --dnone-md --dnone-sm"></div>

                                <button class="btn btn-line rey-filterBtn__label js-rey-filterBtn-open"
                                    aria-label="Open filters">

                                    <svg aria-hidden="true" role="img" id="rey-icon-sliders-6822b2fc5260a"
                                        class="rey-icon rey-icon-sliders " viewbox="0 0 32 32">
                                        <path
                                            d="M24.4766968,14.7761548 L24.4766968,9.88088774 L31.8197368,9.88088774 L31.8197368,4.98552774 L24.4766968,4.98552774 L24.4766968,0.0901677419 L19.5814297,0.0901677419 L19.5814297,4.98552774 L1.03225807e-05,4.98552774 L1.03225807e-05,9.88088774 L19.5814297,9.88088774 L19.5814297,14.7761548 L24.4766968,14.7761548 Z M12.2408258,31.9098839 L12.2408258,27.0145239 L31.8197677,27.0145239 L31.8197677,22.1191639 L12.2408258,22.1191639 L12.2408258,17.2238968 L7.34304,17.2238968 L7.34304,22.1191639 L2.84217094e-14,22.1191639 L2.84217094e-14,27.0145239 L7.34304,27.0145239 L7.34304,31.9098839 L12.2408258,31.9098839 Z"
                                            id="Shape" fill-rule="nonzero"></path>
                                    </svg>
                                    <span>FILTER</span>


                                </button>


                            </div>
                        </div>
                        <ul class="products --skin-basic rey-wcGap-default rey-wcGrid-default --paginated --infinite columns-4"
                            data-cols="4" data-cols-tablet="2" data-cols-mobile="2" data-skin="basic"
                            data-discount-mobile-top="yes" data-params="[]">

                            <li class="rey-swatches product type-product post-380 status-publish first instock product_cat-casual-urban-wear product_cat-men product_cat-t-shirts-tops has-post-thumbnail taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="380">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/black-paradise-slogan-t-shirt/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Black Paradise Slogan T-Shirt"><img width="600" height="800"
                                                src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/23-600x800.jpg"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Black Paradise Slogan T-Shirt" decoding="async"
                                                srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/23-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/23-400x533.jpg 400w"
                                                sizes="(max-width: 600px) 100vw, 600px" /></a></div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/zenuro/">Zenuro</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/black-paradise-slogan-t-shirt/">Black
                                            Paradise Slogan T-Shirt</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>29.00</bdi></span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/black-paradise-slogan-t-shirt/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="380" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Black Paradise Slogan T-Shirt&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_380"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="380" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="380" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true" role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-446 status-publish instock product_cat-casual-urban-wear product_cat-men product_cat-shorts has-post-thumbnail taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="446">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/plus-size-black-leaf-print-tie-waist-shorts/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Black-Leaf Print Tie Waist Shorts"><img width="600"
                                                height="800"
                                                src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/31-600x800.jpg"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Black-Leaf Print Tie Waist Shorts" decoding="async"
                                                srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/31-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/31-400x533.jpg 400w"
                                                sizes="(max-width: 600px) 100vw, 600px" /></a></div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/quisuito/">Quisuito</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/plus-size-black-leaf-print-tie-waist-shorts/">Black-Leaf
                                            Print Tie Waist Shorts</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>24.00</bdi></span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/plus-size-black-leaf-print-tie-waist-shorts/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="446" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Black-Leaf Print Tie Waist Shorts&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_446"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="446" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="446" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true" role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-404 status-publish instock product_cat-casual-urban-wear product_cat-men product_cat-shorts has-post-thumbnail taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="404">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/blue-bleach-wash-denim-western-short/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Blue Bleach Wash Denim Western Short"><img width="600"
                                                height="800"
                                                src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/26-600x800.jpg"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Blue Bleach Wash Denim Western Short" decoding="async"
                                                srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/26-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/26-400x533.jpg 400w"
                                                sizes="(max-width: 600px) 100vw, 600px" /></a></div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/cerveo/">Cerveo</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/blue-bleach-wash-denim-western-short/">Blue
                                            Bleach Wash Denim Western Short</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>24.00</bdi></span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/blue-bleach-wash-denim-western-short/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="404" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Blue Bleach Wash Denim Western Short&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_404"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="404" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="404" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true" role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-272 status-publish last instock product_cat-casual-urban-wear product_cat-jeans product_cat-men product_tag-elastic product_tag-loose product_tag-pockets has-post-thumbnail taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="272">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/carrot-fit-jeans/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Carrot fit jeans"><img width="600" height="800"
                                                src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/11-600x800.jpg"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Carrot fit jeans" decoding="async"
                                                srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/11-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/11-400x533.jpg 400w"
                                                sizes="(max-width: 600px) 100vw, 600px" /></a></div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/zenuro/">Zenuro</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/carrot-fit-jeans/">Carrot
                                            fit jeans</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>59.00</bdi></span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/carrot-fit-jeans/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="272" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Carrot fit jeans&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_272"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="272" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="272" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true" role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-256 status-publish first instock product_cat-casual-urban-wear product_cat-jeans product_cat-men product_tag-elastic product_tag-loose product_tag-pockets has-post-thumbnail sale taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="256">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/cropped-slim-fit-jeans/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Cropped slim fit jeans"><img width="600" height="800"
                                                src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/9-600x800.jpg"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Cropped slim fit jeans" decoding="async"
                                                srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/9-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/9-400x533.jpg 400w"
                                                sizes="(max-width: 600px) 100vw, 600px" /></a>
                                        <div class="rey-thPos rey-thPos--top-left" data-position="top-left">
                                            <span class="rey-discount">-34% OFF</span>
                                        </div>
                                    </div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/dumark/">Dumark</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/cropped-slim-fit-jeans/">Cropped
                                            slim fit jeans</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><del
                                                aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>59.00</bdi></span></del>
                                            <span class="screen-reader-text">Original price was:
                                                &#036;59.00.</span><ins aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>39.00</bdi></span></ins><span
                                                class="screen-reader-text">Current price is:
                                                &#036;39.00.</span><span class="rey-discount">-34%
                                                OFF</span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/cropped-slim-fit-jeans/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="256" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Cropped slim fit jeans&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_256"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="256" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="256" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true" role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-538 status-publish instock product_cat-casual-urban-wear product_cat-men product_cat-sweatshirts-hoodies has-post-thumbnail taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="538">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/cut-and-sew-sweatshirt/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Cut and sew sweatshirt"><img width="600" height="800"
                                                src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/2-600x800.jpg"
                                                class="rey-productThumbnail__second" alt="" decoding="async"
                                                srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/2-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/2-400x533.jpg 400w"
                                                sizes="(max-width: 600px) 100vw, 600px" /><img width="600"
                                                height="800"
                                                src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/3-600x800.jpg"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Cut and sew sweatshirt" decoding="async"
                                                srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/3-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/3-400x533.jpg 400w"
                                                sizes="(max-width: 600px) 100vw, 600px" /></a></div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/quisuito/">Quisuito</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/cut-and-sew-sweatshirt/">Cut
                                            and sew sweatshirt</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>24.00</bdi></span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/cut-and-sew-sweatshirt/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="538" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Cut and sew sweatshirt&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_538"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="538" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="538" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true" role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-248 status-publish instock product_cat-casual-urban-wear product_cat-jeans product_cat-men product_tag-elastic product_tag-loose product_tag-pockets has-post-thumbnail taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="248">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/denim-sweatpants/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Denim sweatpants"><img width="600" height="800"
                                                src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/8-600x800.jpg"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Denim sweatpants" decoding="async"
                                                srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/8-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/8-400x533.jpg 400w"
                                                sizes="(max-width: 600px) 100vw, 600px" /></a></div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/quisuito/">Quisuito</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/denim-sweatpants/">Denim
                                            sweatpants</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>189.00</bdi></span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/denim-sweatpants/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="248" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Denim sweatpants&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_248"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="248" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="248" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true" role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-428 status-publish last instock product_cat-casual-urban-wear product_cat-men product_cat-shorts has-post-thumbnail taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="428">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/green-check-print-swimming-shorts/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Green Check Print Swimming Shorts"><img width="600"
                                                height="800"
                                                src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/29-600x800.jpg"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Green Check Print Swimming Shorts" decoding="async"
                                                srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/29-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/29-400x533.jpg 400w"
                                                sizes="(max-width: 600px) 100vw, 600px" /></a></div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/cerveo/">Cerveo</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/green-check-print-swimming-shorts/">Green
                                            Check Print Swimming Shorts</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>24.00</bdi></span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/green-check-print-swimming-shorts/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="428" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Green Check Print Swimming Shorts&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_428"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="428" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="428" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true" role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-372 status-publish first instock product_cat-casual-urban-wear product_cat-men product_cat-t-shirts-tops has-post-thumbnail taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="372">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/green-camo-long-sleeve-shacket/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Green Camo Long Sleeve Shacket"><img width="600"
                                                height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Green Camo Long Sleeve Shacket" decoding="async"
                                                data-lazy-srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/22-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/22-400x533.jpg 400w"
                                                data-lazy-sizes="(max-width: 600px) 100vw, 600px"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/22-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/22-600x800.jpg"
                                                    class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="Green Camo Long Sleeve Shacket" decoding="async"
                                                    srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/22-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/22-400x533.jpg 400w"
                                                    sizes="(max-width: 600px) 100vw, 600px" /></noscript></a>
                                    </div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/quisuito/">Quisuito</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/green-camo-long-sleeve-shacket/">Green
                                            Camo Long Sleeve Shacket</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>29.00</bdi></span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/green-camo-long-sleeve-shacket/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="372" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Green Camo Long Sleeve Shacket&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_372"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="372" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="372" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true" role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>

                            <li class="--ba-item --ba-item-before --ba-type-gs post-x143 rey-swatches product type-product post-143 status-publish instock product_cat-jackets product_cat-men product_cat-parkas product_tag-biker product_tag-black product_tag-bomber product_tag-leather has-post-thumbnail taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="x143">
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
                                <div data-elementor-type="wp-post" data-elementor-id="2471"
                                    class="elementor elementor-2471" data-elementor-gstype="generic"
                                    data-page-el-selector="body.elementor-page-2471" data-disable-padding="">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-545513d rey-section-bg--classic elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="545513d" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0b8143e column-flex-dir--vertical"
                                                data-id="0b8143e" data-element_type="column">
                                                <div
                                                    class="elementor-column-wrap--0b8143e elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-5ba4e80 elementor-heading--stroke m-auto--bottom elementor-widget elementor-widget-heading"
                                                        data-id="5ba4e80" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-heading-title elementor-size-default">
                                                                brand focus</div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-dc9c0d1 elementor-widget elementor-widget-image"
                                                        data-id="dc9c0d1" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img width="51" height="95"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2051%2095'%3E%3C/svg%3E"
                                                                class="attachment-full size-full wp-image-2468"
                                                                alt=""
                                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2020/11/guarajo.svg" /><noscript><img
                                                                    width="51" height="95"
                                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2020/11/guarajo.svg"
                                                                    class="attachment-full size-full wp-image-2468"
                                                                    alt="" /></noscript>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-56b0eab elementor-widget elementor-widget-heading"
                                                        data-id="56b0eab" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h3 class="elementor-heading-title elementor-size-default">
                                                                IGUERA</h3>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-ebeb70c elementor-hidden-phone elementor-widget elementor-widget-text-editor"
                                                        data-id="ebeb70c" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>A curated experience of clothing, footwear and
                                                                accessories.</p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-282aa32 elementor-button-underline-1 elementor-widget elementor-widget-button"
                                                        data-id="282aa32" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                    href="#">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-text">SHOP
                                                                            NOW</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </li>
                            <li class="rey-swatches product type-product post-143 status-publish instock product_cat-jackets product_cat-men product_cat-parkas product_tag-biker product_tag-black product_tag-bomber product_tag-leather has-post-thumbnail taxable shipping-taxable purchasable product-type-variable --ba-item is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="143">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/faux-leather-biker-jacket/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Faux leather biker jacket"><img width="600" height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-productThumbnail__second" alt="" decoding="async"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/1420514800_1_1_3-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/1420514800_1_1_3-600x800.jpg"
                                                    class="rey-productThumbnail__second" alt=""
                                                    decoding="async" /></noscript><img width="600" height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Faux leather biker jacket" decoding="async"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/1420514800_2_2_3-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/1420514800_2_2_3-600x800.jpg"
                                                    class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="Faux leather biker jacket" decoding="async" /></noscript></a>
                                    </div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/iguera/">Iguera</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/faux-leather-biker-jacket/">Faux
                                            leather biker jacket</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>99.00</bdi></span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/faux-leather-biker-jacket/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="143" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Faux leather biker jacket&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_143"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="143" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="143" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true" role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-396 status-publish last instock product_cat-casual-urban-wear product_cat-men product_cat-t-shirts-tops has-post-thumbnail sale taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="396">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/green-muscle-fit-polo-shirt/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Green Muscle Fit Polo Shirt"><img width="600" height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Green Muscle Fit Polo Shirt" decoding="async"
                                                data-lazy-srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/25-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/25-400x533.jpg 400w"
                                                data-lazy-sizes="(max-width: 600px) 100vw, 600px"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/25-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/25-600x800.jpg"
                                                    class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="Green Muscle Fit Polo Shirt" decoding="async"
                                                    srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/25-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/25-400x533.jpg 400w"
                                                    sizes="(max-width: 600px) 100vw, 600px" /></noscript></a>
                                        <div class="rey-thPos rey-thPos--top-left" data-position="top-left">
                                            <span class="rey-discount">-34% OFF</span>
                                        </div>
                                    </div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/iguera/">Iguera</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/green-muscle-fit-polo-shirt/">Green
                                            Muscle Fit Polo Shirt</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><del
                                                aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>29.00</bdi></span></del>
                                            <span class="screen-reader-text">Original price was:
                                                &#036;29.00.</span><ins aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>19.00</bdi></span></ins><span
                                                class="screen-reader-text">Current price is:
                                                &#036;19.00.</span><span class="rey-discount">-34%
                                                OFF</span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/green-muscle-fit-polo-shirt/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="396" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Green Muscle Fit Polo Shirt&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_396"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="396" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="396" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true" role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-388 status-publish first instock product_cat-casual-urban-wear product_cat-men product_cat-t-shirts-tops has-post-thumbnail taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="388">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/grey-marl-roll-sleeve-t-shirt/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Grey Marl Roll Sleeve T-Shirt"><img width="600" height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Grey Marl Roll Sleeve T-Shirt" decoding="async"
                                                data-lazy-srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/24-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/24-400x533.jpg 400w"
                                                data-lazy-sizes="(max-width: 600px) 100vw, 600px"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/24-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/24-600x800.jpg"
                                                    class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="Grey Marl Roll Sleeve T-Shirt" decoding="async"
                                                    srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/24-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/24-400x533.jpg 400w"
                                                    sizes="(max-width: 600px) 100vw, 600px" /></noscript></a>
                                    </div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/quisuito/">Quisuito</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/grey-marl-roll-sleeve-t-shirt/">Grey
                                            Marl Roll Sleeve T-Shirt</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>29.00</bdi></span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/grey-marl-roll-sleeve-t-shirt/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="388" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Grey Marl Roll Sleeve T-Shirt&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_388"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="388" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="388" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true" role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-210 status-publish instock product_cat-casual-urban-wear product_cat-down-coats-vests product_cat-men product_tag-hood product_tag-parka product_tag-pockets product_tag-snap-button has-post-thumbnail taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="210">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/hooded-nylon-parka/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Hooded nylon parka"><img width="600" height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-productThumbnail__second" alt="" decoding="async"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/1561816800_2_1_3-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/1561816800_2_1_3-600x800.jpg"
                                                    class="rey-productThumbnail__second" alt=""
                                                    decoding="async" /></noscript><img width="600" height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Hooded nylon parka" decoding="async"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/1561816800_1_1_3-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/1561816800_1_1_3-600x800.jpg"
                                                    class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="Hooded nylon parka" decoding="async" /></noscript></a>
                                    </div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/cerveo/">Cerveo</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/hooded-nylon-parka/">Hooded
                                            nylon parka</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>99.00</bdi></span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/hooded-nylon-parka/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="210" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Hooded nylon parka&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_210"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="210" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="210" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true"
                                                        role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-185 status-publish instock product_cat-casual-urban-wear product_cat-men product_cat-parkas product_tag-biker product_tag-black product_tag-bomber product_tag-leather has-post-thumbnail sale taxable shipping-taxable purchasable product-type-variable is-animated  --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-center --stretch-image-images"
                                data-pid="185" data-colspan="3">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/khaki-puffer-jacket/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Khaki puffer jacket"><img width="600" height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Khaki puffer jacket" decoding="async"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552505_2_3_3-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552505_2_3_3-600x800.jpg"
                                                    class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="Khaki puffer jacket" decoding="async" /></noscript><img
                                                width="600" height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-thumbImg img--2" alt="" decoding="async"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552505_1_1_3-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552505_1_1_3-600x800.jpg"
                                                    class="rey-thumbImg img--2" alt=""
                                                    decoding="async" /></noscript><img width="600" height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-thumbImg img--3" alt="" decoding="async"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552505_2_1_3-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552505_2_1_3-600x800.jpg"
                                                    class="rey-thumbImg img--3" alt=""
                                                    decoding="async" /></noscript></a>
                                        <div class="rey-thPos rey-thPos--top-left" data-position="top-left">
                                            <span class="rey-discount">-61% OFF</span>
                                        </div>
                                    </div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/guaraxu/">Guaraxu</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/khaki-puffer-jacket/">Khaki
                                            puffer jacket</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><del
                                                aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>99.00</bdi></span></del>
                                            <span class="screen-reader-text">Original price was:
                                                &#036;99.00.</span><ins aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>39.00</bdi></span></ins><span
                                                class="screen-reader-text">Current price is:
                                                &#036;39.00.</span><span class="rey-discount">-61%
                                                OFF</span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/khaki-puffer-jacket/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="185" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Khaki puffer jacket&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_185"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="185" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="185" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true"
                                                        role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-159 status-publish last instock product_cat-casual-urban-wear product_cat-jackets product_cat-men product_tag-biker product_tag-black product_tag-bomber product_tag-leather has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="159">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/lightweight-puffer-jacket/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Lightweight puffer jacket"><img width="600" height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-productThumbnail__second" alt="" decoding="async"
                                                data-lazy-srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552600_2_1_3-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552600_2_1_3-400x533.jpg 400w"
                                                data-lazy-sizes="(max-width: 600px) 100vw, 600px"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552600_2_1_3-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552600_2_1_3-600x800.jpg"
                                                    class="rey-productThumbnail__second" alt=""
                                                    decoding="async"
                                                    srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552600_2_1_3-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552600_2_1_3-400x533.jpg 400w"
                                                    sizes="(max-width: 600px) 100vw, 600px" /></noscript><img
                                                width="600" height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Lightweight puffer jacket" decoding="async"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552600_2_3_3-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552600_2_3_3-600x800.jpg"
                                                    class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="Lightweight puffer jacket" decoding="async" /></noscript></a>
                                    </div>
                                    <div data-attribute="color" data-position="first"
                                        class="rey-productVariations2 --single-attr ">
                                        <form class="variations_form cart --catalog"
                                            action="https://demos.reytheme.com/london/product/lightweight-puffer-jacket/"
                                            method="post" enctype="multipart/form-data" data-product_id="159"
                                            data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;reds&quot;,&quot;attribute_pa_size&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;20&quot;,&quot;width&quot;:&quot;10&quot;,&quot;height&quot;:&quot;50&quot;},&quot;dimensions_html&quot;:&quot;20 &amp;times; 10 &amp;times; 50 cm&quot;,&quot;display_price&quot;:99,&quot;display_regular_price&quot;:99,&quot;image&quot;:{&quot;title&quot;:&quot;6220552600_2_3_3&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3.jpg&quot;,&quot;alt&quot;:&quot;6220552600_2_3_3&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3-800x1025.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3-800x1025.jpg 800w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3-234x300.jpg 234w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3-799x1024.jpg 799w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3-768x984.jpg 768w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3-480x615.jpg 480w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3-240x308.jpg 240w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3.jpg 1024w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3-574x735.jpg 574w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3-600x769.jpg 600w&quot;,&quot;sizes&quot;:&quot;(max-width: 800px) 100vw, 800px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1312,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552600_2_3_3-600x800.jpg&quot;,&quot;thumb_src_w&quot;:600,&quot;thumb_src_h&quot;:800,&quot;src_w&quot;:800,&quot;src_h&quot;:1025},&quot;image_id&quot;:167,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:160,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;1.20&quot;,&quot;weight_html&quot;:&quot;1.20 kg&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1},{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;navy&quot;,&quot;attribute_pa_size&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;20&quot;,&quot;width&quot;:&quot;10&quot;,&quot;height&quot;:&quot;50&quot;},&quot;dimensions_html&quot;:&quot;20 &amp;times; 10 &amp;times; 50 cm&quot;,&quot;display_price&quot;:99,&quot;display_regular_price&quot;:99,&quot;image&quot;:{&quot;title&quot;:&quot;6220552401_2_3_3&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3.jpg&quot;,&quot;alt&quot;:&quot;6220552401_2_3_3&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3-800x1026.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3-800x1026.jpg 800w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3-234x300.jpg 234w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3-799x1024.jpg 799w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3-768x985.jpg 768w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3-480x615.jpg 480w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3-240x308.jpg 240w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3.jpg 1024w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3-573x735.jpg 573w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3-600x769.jpg 600w&quot;,&quot;sizes&quot;:&quot;(max-width: 800px) 100vw, 800px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1313,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552401_2_3_3-600x800.jpg&quot;,&quot;thumb_src_w&quot;:600,&quot;thumb_src_h&quot;:800,&quot;src_w&quot;:800,&quot;src_h&quot;:1026},&quot;image_id&quot;:170,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:161,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;1.20&quot;,&quot;weight_html&quot;:&quot;1.20 kg&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1},{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;mustard&quot;,&quot;attribute_pa_size&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;20&quot;,&quot;width&quot;:&quot;10&quot;,&quot;height&quot;:&quot;50&quot;},&quot;dimensions_html&quot;:&quot;20 &amp;times; 10 &amp;times; 50 cm&quot;,&quot;display_price&quot;:99,&quot;display_regular_price&quot;:99,&quot;image&quot;:{&quot;title&quot;:&quot;6220552305_2_2_3&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3.jpg&quot;,&quot;alt&quot;:&quot;6220552305_2_2_3&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3-800x1026.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3-800x1026.jpg 800w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3-234x300.jpg 234w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3-799x1024.jpg 799w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3-768x985.jpg 768w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3-480x615.jpg 480w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3-240x308.jpg 240w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3.jpg 1024w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3-573x735.jpg 573w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3-600x769.jpg 600w&quot;,&quot;sizes&quot;:&quot;(max-width: 800px) 100vw, 800px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1313,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552305_2_2_3-600x800.jpg&quot;,&quot;thumb_src_w&quot;:600,&quot;thumb_src_h&quot;:800,&quot;src_w&quot;:800,&quot;src_h&quot;:1026},&quot;image_id&quot;:176,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:162,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;1.20&quot;,&quot;weight_html&quot;:&quot;1.20 kg&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1},{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;blues&quot;,&quot;attribute_pa_size&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;20&quot;,&quot;width&quot;:&quot;10&quot;,&quot;height&quot;:&quot;50&quot;},&quot;dimensions_html&quot;:&quot;20 &amp;times; 10 &amp;times; 50 cm&quot;,&quot;display_price&quot;:99,&quot;display_regular_price&quot;:99,&quot;image&quot;:{&quot;title&quot;:&quot;6220552408_2_3_3&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3.jpg&quot;,&quot;alt&quot;:&quot;6220552408_2_3_3&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3-800x1026.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3-800x1026.jpg 800w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3-234x300.jpg 234w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3-799x1024.jpg 799w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3-768x985.jpg 768w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3-480x615.jpg 480w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3-240x308.jpg 240w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3.jpg 1024w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3-573x735.jpg 573w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3-600x769.jpg 600w&quot;,&quot;sizes&quot;:&quot;(max-width: 800px) 100vw, 800px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1313,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552408_2_3_3-600x800.jpg&quot;,&quot;thumb_src_w&quot;:600,&quot;thumb_src_h&quot;:800,&quot;src_w&quot;:800,&quot;src_h&quot;:1026},&quot;image_id&quot;:179,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:163,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;1.20&quot;,&quot;weight_html&quot;:&quot;1.20 kg&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1},{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;blacks&quot;,&quot;attribute_pa_size&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;20&quot;,&quot;width&quot;:&quot;10&quot;,&quot;height&quot;:&quot;50&quot;},&quot;dimensions_html&quot;:&quot;20 &amp;times; 10 &amp;times; 50 cm&quot;,&quot;display_price&quot;:99,&quot;display_regular_price&quot;:99,&quot;image&quot;:{&quot;title&quot;:&quot;6220552800_2_3_3&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3.jpg&quot;,&quot;alt&quot;:&quot;6220552800_2_3_3&quot;,&quot;src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3-800x1025.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3-800x1025.jpg 800w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3-234x300.jpg 234w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3-799x1024.jpg 799w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3-768x984.jpg 768w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3-480x615.jpg 480w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3-240x308.jpg 240w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3.jpg 1024w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3-574x735.jpg 574w, https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3-600x769.jpg 600w&quot;,&quot;sizes&quot;:&quot;(max-width: 800px) 100vw, 800px&quot;,&quot;full_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3.jpg&quot;,&quot;full_src_w&quot;:1024,&quot;full_src_h&quot;:1312,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/demos.reytheme.com\/london\/wp-content\/uploads\/sites\/8\/2019\/03\/6220552800_2_3_3-600x800.jpg&quot;,&quot;thumb_src_w&quot;:600,&quot;thumb_src_h&quot;:800,&quot;src_w&quot;:800,&quot;src_h&quot;:1025},&quot;image_id&quot;:183,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:164,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;1.20&quot;,&quot;weight_html&quot;:&quot;1.20 kg&quot;,&quot;stock_status&quot;:&quot;instock&quot;,&quot;step_qty&quot;:1}]"
                                            data-atc-text="Add to cart">
                                            <div class="variations">
                                                <div class="__s-wrapper"><select style="display:none" id="pa_color159"
                                                        class="" name="attribute_pa_color"
                                                        data-attribute_name="attribute_pa_color"
                                                        data-show_option_none="yes">
                                                        <option value="">Choose an option</option>
                                                        <option value="blacks">Blacks</option>
                                                        <option value="blues">Blues</option>
                                                        <option value="mustard">Mustard</option>
                                                        <option value="navy">Navy</option>
                                                        <option value="reds" selected='selected'>Reds</option>
                                                    </select>
                                                    <div aria-label="color" data-attribute_name="attribute_pa_color"
                                                        style=""
                                                        class="rey-swatchList --type-color --light-tooltips --disabled-dim --deselection-clear">
                                                        <div data-title="Blacks" data-term-id="49"
                                                            data-term-slug="blacks" data-attribute-name="pa_color"
                                                            aria-label="Blacks" role="radio" aria-checked="false"
                                                            class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                            data-description=""><span
                                                                data-bg="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552800_2_3_3-600x800.jpg"
                                                                class="rey-swatchList-itemContent rocket-lazyload"
                                                                style=""></span>
                                                            <div class="__tooltip">
                                                                <div class="__holder"><span
                                                                        class="__title">Blacks</span>
                                                                    <div class="__corner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-title="Blues" data-term-id="53"
                                                            data-term-slug="blues" data-attribute-name="pa_color"
                                                            aria-label="Blues" role="radio" aria-checked="false"
                                                            class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                            data-description=""><span
                                                                data-bg="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552408_2_3_3-600x800.jpg"
                                                                class="rey-swatchList-itemContent rocket-lazyload"
                                                                style=""></span>
                                                            <div class="__tooltip">
                                                                <div class="__holder"><span class="__title">Blues</span>
                                                                    <div class="__corner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-title="Mustard" data-term-id="72"
                                                            data-term-slug="mustard" data-attribute-name="pa_color"
                                                            aria-label="Mustard" role="radio" aria-checked="false"
                                                            class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                            data-description=""><span
                                                                data-bg="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552305_2_2_3-600x800.jpg"
                                                                class="rey-swatchList-itemContent rocket-lazyload"
                                                                style=""></span>
                                                            <div class="__tooltip">
                                                                <div class="__holder"><span
                                                                        class="__title">Mustard</span>
                                                                    <div class="__corner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-title="Navy" data-term-id="71" data-term-slug="navy"
                                                            data-attribute-name="pa_color" aria-label="Navy"
                                                            role="radio" aria-checked="false"
                                                            class="rey-swatchList-item --type-color rey-swatchList-item--regular "
                                                            data-description=""><span
                                                                data-bg="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552401_2_3_3-600x800.jpg"
                                                                class="rey-swatchList-itemContent rocket-lazyload"
                                                                style=""></span>
                                                            <div class="__tooltip">
                                                                <div class="__holder"><span class="__title">Navy</span>
                                                                    <div class="__corner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-title="Reds" data-term-id="54" data-term-slug="reds"
                                                            data-attribute-name="pa_color" aria-label="Reds"
                                                            role="radio" aria-checked="true"
                                                            class="rey-swatchList-item --type-color rey-swatchList-item--regular --selected"
                                                            data-description=""><span
                                                                data-bg="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/6220552600_2_3_3-600x800.jpg"
                                                                class="rey-swatchList-itemContent rocket-lazyload"
                                                                style=""></span>
                                                            <div class="__tooltip">
                                                                <div class="__holder"><span class="__title">Reds</span>
                                                                    <div class="__corner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/cerveo/">Cerveo</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/lightweight-puffer-jacket/">Lightweight
                                            puffer jacket</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>99.00</bdi></span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/lightweight-puffer-jacket/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="159" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Lightweight puffer jacket&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_159"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="159" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="159" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true"
                                                        role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>


                            <li class="rey-swatches product type-product post-296 status-publish first instock product_cat-casual-urban-wear product_cat-jumpers-cardigans product_cat-men has-post-thumbnail sale taxable shipping-taxable purchasable product-type-variable is-animated --extraImg-second --extraImg-mobile rey-wc-skin--basic rey-wc-loopAlign-left"
                                data-pid="296">

                                <div class="rey-productInner ">
                                    <div class="rey-productThumbnail"><a
                                            href="https://demos.reytheme.com/london/product/ottoman-bomber-jacket/"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                            aria-label="Ottoman bomber jacket"><img width="600" height="800"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20800'%3E%3C/svg%3E"
                                                class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Ottoman bomber jacket" decoding="async"
                                                data-lazy-srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/14-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/14-400x533.jpg 400w"
                                                data-lazy-sizes="(max-width: 600px) 100vw, 600px"
                                                data-lazy-src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/14-600x800.jpg" /><noscript><img
                                                    loading="lazy" width="600" height="800"
                                                    src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/14-600x800.jpg"
                                                    class="rey-thumbImg img--1 attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="Ottoman bomber jacket" decoding="async"
                                                    srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/14-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/14-400x533.jpg 400w"
                                                    sizes="(max-width: 600px) 100vw, 600px" /></noscript></a>
                                        <div class="rey-thPos rey-thPos--top-left" data-position="top-left">
                                            <span class="rey-discount">-41% OFF</span>
                                        </div>
                                    </div>
                                    <div class="rey-brandLink --catalog"><a
                                            href="https://demos.reytheme.com/london/brand/cerveo/">Cerveo</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title"><a
                                            href="https://demos.reytheme.com/london/product/ottoman-bomber-jacket/">Ottoman
                                            bomber jacket</a></h2>
                                    <div class="rey-productLoop-footer">
                                        <div class="__break"></div><span class="price rey-loopPrice"><del
                                                aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>49.00</bdi></span></del>
                                            <span class="screen-reader-text">Original price was:
                                                &#036;49.00.</span><ins aria-hidden="true"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>29.00</bdi></span></ins><span
                                                class="screen-reader-text">Current price is:
                                                &#036;29.00.</span><span class="rey-discount">-41%
                                                OFF</span></span>
                                        <div class="__break"></div>
                                        <div class="rey-productFooter-item rey-productFooter-item--addtocart">
                                            <div class="rey-productFooter-inner"><a
                                                    href="https://demos.reytheme.com/london/product/ottoman-bomber-jacket/"
                                                    data-quantity="1"
                                                    class="button product_type_variable add_to_cart_button rey-btn--under"
                                                    data-product_id="296" data-product_sku=""
                                                    aria-label="Select options for &ldquo;Ottoman bomber jacket&rdquo;"
                                                    rel="nofollow"><span class="__text">Select
                                                        options</span></a></div>
                                        </div> <span id="woocommerce_loop_add_to_cart_link_describedby_296"
                                            class="screen-reader-text">
                                            This product has multiple variants. The options may be chosen on the
                                            product page </span>
                                        <div class="rey-productFooter-item rey-productFooter-item--quickview">
                                            <div class="rey-productFooter-inner">
                                                <button class="button rey-btn--under rey-quickviewBtn js-rey-quickviewBtn"
                                                    data-id="296" title="QUICKVIEW">QUICKVIEW</button>
                                            </div>
                                        </div>
                                        <div class="rey-productFooter-item rey-productFooter-item--wishlist">
                                            <div class="rey-productFooter-inner"><button
                                                    class=" rey-wishlistBtn rey-wishlistBtn-link" data-lazy-hidden
                                                    data-id="296" title="Add to wishlist"
                                                    aria-label="Add to wishlist"><svg aria-hidden="true"
                                                        role="img"
                                                        class="rey-icon rey-icon-heart rey-wishlistBtn-icon"
                                                        viewbox="0 0 24 24">
                                                        <path fill="var(--icon-fill, none)" stroke="currentColor"
                                                            stroke-width="var(--stroke-width, 1.8px)"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <!-- /.rey-productLoop-footer -->
                                </div>

                            </li>

                        </ul>
                        <div data-colspans="3"></div>
                        <nav class="rey-ajaxLoadMore --invisible"><a data-post-type="product"
                                data-target=".rey-siteMain ul.products, .elementor-widget-reycore-woo-loop-products ul.products"
                                data-items="li.product, .rey-postItem" data-text="SHOW MORE" aria-label="SHOW MORE"
                                data-end-text="END" href="https://demos.reytheme.com/london/shop/page/2/"
                                class="rey-ajaxLoadMore-btn btn js-rey-ajaxLoadMore btn-line-active"
                                data-history="1"></a>
                            <div class="rey-lineLoader"></div>
                        </nav>
                    </div><!-- .reyajfilter-before-products -->
                </main>
                <!-- .rey-siteMain -->

            </div>


        </div>
        <!-- .rey-siteContainer -->
        <div data-elementor-type="wp-post" data-elementor-id="2786" class="elementor elementor-2786"
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
                class="--tabs-effect-default elementor-section elementor-top-section elementor-element elementor-element-205ba691 rey-tabs-section elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="205ba691" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9b90143"
                        data-id="9b90143" data-element_type="column">
                        <div class="elementor-column-wrap--9b90143 elementor-widget-wrap elementor-element-populated">
                            <div data-lazy-load="{&quot;element_id&quot;:&quot;7d210afb&quot;,&quot;skin&quot;:&quot;&quot;,&quot;trigger&quot;:&quot;scroll&quot;,&quot;qid&quot;:2786,&quot;pid&quot;:296,&quot;options&quot;:{&quot;prevent_ba_content&quot;:&quot;yes&quot;,&quot;prevent_stretched&quot;:&quot;yes&quot;},&quot;cache&quot;:true}"
                                class="elementor-element elementor-element-7d210afb elementor-widget elementor-widget-reycore-product-grid"
                                data-id="7d210afb" data-element_type="widget"
                                data-widget_type="reycore-product-grid.default">
                                <div class="elementor-widget-container">
                                    <div class="__placeholder-wrapper placeholder_products products">
                                        <div class="__placeholders "
                                            style="--cols: 4; --cols-tablet: 2; --cols-mobile: 2;">
                                            <div class="__placeholder-item">
                                                <div class="__placeholder-thumb"></div>
                                                <div class="__placeholder-title"></div>
                                                <div class="__placeholder-subtitle"></div>
                                            </div>
                                            <div class="__placeholder-item">
                                                <div class="__placeholder-thumb"></div>
                                                <div class="__placeholder-title"></div>
                                                <div class="__placeholder-subtitle"></div>
                                            </div>
                                            <div class="__placeholder-item">
                                                <div class="__placeholder-thumb"></div>
                                                <div class="__placeholder-title"></div>
                                                <div class="__placeholder-subtitle"></div>
                                            </div>
                                            <div class="__placeholder-item">
                                                <div class="__placeholder-thumb"></div>
                                                <div class="__placeholder-title"></div>
                                                <div class="__placeholder-subtitle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-51e2d863"
                        data-id="51e2d863" data-element_type="column">
                        <div class="elementor-column-wrap--51e2d863 elementor-widget-wrap elementor-element-populated">
                            <div data-lazy-load="{&quot;element_id&quot;:&quot;3d54e53d&quot;,&quot;skin&quot;:&quot;&quot;,&quot;trigger&quot;:&quot;scroll&quot;,&quot;qid&quot;:2786,&quot;pid&quot;:296,&quot;options&quot;:{&quot;prevent_ba_content&quot;:&quot;yes&quot;,&quot;prevent_stretched&quot;:&quot;yes&quot;},&quot;cache&quot;:true}"
                                class="elementor-element elementor-element-3d54e53d elementor-widget elementor-widget-reycore-product-grid"
                                data-id="3d54e53d" data-element_type="widget"
                                data-widget_type="reycore-product-grid.default">
                                <div class="elementor-widget-container">
                                    <div class="__placeholder-wrapper placeholder_products products">
                                        <div class="__placeholders "
                                            style="--cols: 4; --cols-tablet: 2; --cols-mobile: 2;">
                                            <div class="__placeholder-item">
                                                <div class="__placeholder-thumb"></div>
                                                <div class="__placeholder-title"></div>
                                                <div class="__placeholder-subtitle"></div>
                                            </div>
                                            <div class="__placeholder-item">
                                                <div class="__placeholder-thumb"></div>
                                                <div class="__placeholder-title"></div>
                                                <div class="__placeholder-subtitle"></div>
                                            </div>
                                            <div class="__placeholder-item">
                                                <div class="__placeholder-thumb"></div>
                                                <div class="__placeholder-title"></div>
                                                <div class="__placeholder-subtitle"></div>
                                            </div>
                                            <div class="__placeholder-item">
                                                <div class="__placeholder-thumb"></div>
                                                <div class="__placeholder-title"></div>
                                                <div class="__placeholder-subtitle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
@endsection
