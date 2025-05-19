var reyParams = {
    theme_js_params: {
        menu_delays: true,
        menu_hover_overlay: "show",
        menu_mobile_overlay: "show",
        menu_hover_timer: 500,
        menu_items_hover_timer: 100,
        menu_items_leave_timer: 200,
        menu_items_open_event: "hover",
        embed_responsive: {
            src: "https://demos.reytheme.com/london/wp-content/themes/rey/assets/css/components/embed-responsive/embed-responsive.css",
            elements: [
                ".rey-postContent p > iframe",
                '.rey-wcPanel iframe[src*="youtu"]',
                '.woocommerce-Tabs-panel iframe[src*="youtu"]',
                '.woocommerce-product-details__short-description iframe[src*="youtu"]',
            ],
        },
        menu_badges_styles:
            "https://demos.reytheme.com/london/wp-content/themes/rey/assets/css/components/header-menu/menu-badges.css",
        header_height_on_first_interaction: true,
    },
    lazy_assets: {
        "a[href^='#offcanvas-']": {
            styles: {
                "reycore-offcanvas-panels":
                    "https://demos.reytheme.com/london/wp-content/plugins/rey-core/inc/modules/offcanvas-panels/style.css",
                "rey-simple-scrollbar":
                    "https://demos.reytheme.com/london/wp-content/plugins/rey-core/assets/css/lib/simple-scrollbar.css",
            },
            scripts: {
                "reycore-offcanvas-panels":
                    "https://demos.reytheme.com/london/wp-content/plugins/rey-core/inc/modules/offcanvas-panels/script.js",
                animejs:
                    "https://demos.reytheme.com/london/wp-content/plugins/rey-core/assets/js/lib/anime.min.js",
                "rey-simple-scrollbar":
                    "https://demos.reytheme.com/london/wp-content/plugins/rey-core/assets/js/lib/simple-scrollbar.js",
                "reycore-elementor-frontend":
                    "https://demos.reytheme.com/london/wp-content/plugins/rey-core/assets/js/elementor/general.js",
            },
        },
        "[data-reymodal],[data-rey-inline-modal]": {
            styles: {
                "reycore-modals":
                    "https://demos.reytheme.com/london/wp-content/plugins/rey-core/assets/css/general-components/modals/modals.css",
            },
            scripts: {
                "reycore-modals":
                    "https://demos.reytheme.com/london/wp-content/plugins/rey-core/assets/js/general/c-modal.js",
            },
        },
    },
    log_events: "",
    debug: "",
    ajaxurl: "https://demos.reytheme.com/london/wp-admin/admin-ajax.php",
    ajax_nonce: "5f2ca6349e",
    preloader_timeout: "",
    v: "1e4966dd2df8",
    wpch: "1",
    delay_forced_js_event: "",
    delay_final_js_event: "rocket-allScriptsLoaded",
    delay_js_dom_event: "rocket-DOMContentLoaded",
    lazy_attribute: "data-lazy-stylesheet",
    core: {
        js_params: {
            sticky_debounce: 200,
            dir_aware: false,
            panel_close_text: "Close Panel",
            refresh_forms_nonces: false,
        },
        v: "33f71c749256",
        r_ajax_debug: false,
        r_ajax_nonce: "46738fe741",
        r_ajax_url: "/london/?reycore-ajax=%%endpoint%%",
        ajax_queue: true,
    },
    check_for_empty: [
        ".--check-empty",
        ".rey-mobileNav-footer",
        ".rey-postFooter",
    ],
    mobile_click_event: "click",
    optimized_dom: "1",
    el_pushback_fallback: "",
    header_fix_elementor_zindex: "",
    woocommerce: "1",
    wc_ajax_url: "/london/?wc-ajax=%%endpoint%%",
    rest_url: "https://demos.reytheme.com/london/wp-json/rey/v1",
    rest_nonce: "7ecf4d5c75",
    catalog_cols: "4",
    catalog_mobile_cols: "2",
    added_to_cart_text: "ADDED TO CART",
    added_to_cart_text_timeout: "10000",
    cannot_update_cart: "Couldn't update cart!",
    site_id: "8",
    after_add_to_cart: "cart",
    ajax_add_review: "1",
    ajax_add_review_reload_text: "Reloading page...",
    ajax_add_review_await_approval_text: "Your review is awaiting approval",
    js_params: {
        select2_overrides: true,
        scattered_grid_max_items: 7,
        scattered_grid_custom_items: [],
        product_item_slideshow_nav: "dots",
        product_item_slideshow_disable_mobile: false,
        product_item_slideshow_hover_delay: 250,
        scroll_top_after_variation_change: false,
        scroll_top_after_variation_change_desktop: false,
        ajax_search_letter_count: 3,
        ajax_search_allow_empty: false,
        cart_update_threshold: 1000,
        cart_update_by_qty: true,
        force_qty_text_field: true,
        photoswipe_light: true,
        customize_pdp_atc_text: true,
        infinite_cache: true,
        acc_animation: 250,
        acc_scroll_top: false,
        acc_scroll_top_mobile_only: true,
    },
    currency_symbol: "$",
    total_text: "Total:",
    price_thousand_separator: ",",
    price_decimal_separator: ".",
    price_decimal_precision: "2",
    header_cart_panel: {
        apply_coupon_nonce: "85a9a0e417",
        remove_coupon_nonce: "b97215292f",
        cart_fragment_tweak: true,
    },
    quickview_only: "",
    quickview_mobile: "",
    updateCatalogPriceSingleAttribute: "",
    wishlist_after_add: "notice",
    wishlist_text_add: "Add to wishlist",
    wishlist_text_rm: "Remove from wishlist",
    wishlist_expire: "",
    wishlist_get_results: "",
    single_ajax_add_to_cart: "1",
    tabs_mobile_closed: "",
    qty_debounce: "50",
    search_texts: {
        NO_RESULTS:
            "Sorry, but nothing matched your search terms. Please try again with some different keywords.",
    },
    ajax_search_only_title: "",
    ajax_search: "1",
    wishlist_type: "native",
    wishlist_empty_text: "Your Wishlist is currently empty.",
    module_extra_variation_images: "",
    after_add_to_cart_popup_config: {
        autoplay: false,
        autoplay_speed: 3000,
        show_in_loop: false,
    },
    svg_icons_path: "https://demos.reytheme.com/london?get_svg_icon=%%icon%%",
    svg_icons: {
        close: '<svg role="img" viewbox="0 0 110 110" class="rey-icon rey-icon-close"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square"><path d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z" stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path><path d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z" stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path></g></svg>',
    },
    checkout: {
        error_text: "This information is required.",
    },
};
/* ]]> */
