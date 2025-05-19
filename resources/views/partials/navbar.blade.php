     <div data-layout="drop" class="rey-accountPanel-wrapper --layout-drop --invisible rey-header-dropPanel --manual">
         <div class="rey-accountPanel rey-header-dropPanel-content" data-lazy-hidden="" aria-modal="true" role="dialog"
             tabindex="-1">

             <div class="rey-accountTabs">

                 <div class="rey-accountTabs-item --active" data-item="account">
                     <span>ACCOUNT</span>
                 </div>

                 <div class="rey-accountTabs-item" data-item="wishlist">
                     <span>Wishlist</span><span class="rey-wishlistCounter-number" data-count=""></span>
                 </div>

             </div>

             <div class="rey-accountWishlist-wrapper " data-account-tab="wishlist">
                 <div class="rey-accountPanel-title">
                     <a href="/wishlist">Wishlist</a><span class="rey-wishlistCounter-number" data-count=""></span>
                 </div>
                 <div class="rey-wishlistPanel-container" data-type="grid">
                     <div class="rey-accountWishlist rey-wishlistPanel"></div>
                     <div class="rey-lineLoader"></div>
                 </div>
             </div>

             <div class="rey-accountForms --active" data-redirect-type="load_menu" data-redirect-url=""
                 data-account-tab="account">

                 <div class="rey-accountPanel-form rey-loginForm --active">
                     <div class="rey-accountPanel-title">Login</div>

                     <form class="woocommerce-form woocommerce-form-login js-rey-woocommerce-form-login login"
                         method="post">


                         <p class="rey-form-row rey-form-row--text ">
                             <input type="text" class="rey-input rey-input--text" name="username" id="username"
                                 autocomplete="username" value="" required
                                 onInput="(function(e){e.target.closest('.rey-form-row').classList.toggle('--has-value',e.target.value)})(arguments[0]);" />
                             <label for="username" class="rey-label">Username or email address&nbsp;<span
                                     class="required">*</span></label>
                         </p>

                         <p class="rey-form-row rey-form-row--text">
                             <input class="rey-input rey-input--text --suports-visibility" type="password"
                                 name="password" id="password" autocomplete="current-password" required
                                 onInput="(function(e){e.target.closest('.rey-form-row').classList.toggle('--has-value',e.target.value)})(arguments[0]);" />
                             <label for="password" class="rey-label">Password&nbsp;<span
                                     class="required">*</span></label>
                         </p>


                         <div class="rey-form-row rey-form-row--reset-mobile">
                             <p class="col">
                                 <label class="rey-label rey-label--checkbox" for="rememberme">
                                     <input class="rey-input rey-input--checkbox" name="rememberme" type="checkbox"
                                         id="rememberme" value="forever" />
                                     <span></span>
                                     <span class="rey-label-text">Remember me</span>
                                 </label>
                             </p>

                             <p class="col text-right">
                                 <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
                                     value="4a57c33c61" /><input type="hidden" name="_wp_http_referer"
                                     value="/london/" /> <button type="submit" class="btn btn-line-active submit-btn"
                                     name="login" value="SIGN IN" aria-label="SIGN IN">SIGN IN</button>
                             </p>
                         </div>

                         <div class="rey-accountForms-notice"></div>

                         <div class="rey-accountPanel-links rey-accountForms-links">
                             <button class="btn btn-line" data-location="rey-registerForm">Create
                                 Account</button><button class="btn btn-line" data-location="rey-forgetForm">Forgot
                                 password</button>
                         </div>


                     </form>

                 </div>

                 <div class="rey-accountPanel-form rey-registerForm ">
                     <div class="rey-accountPanel-title">Create an account</div>

                     <form method="post"
                         class="register woocommerce-form woocommerce-form-register js-rey-woocommerce-form-register">



                         <p class="rey-form-row rey-form-row--text ">
                             <label class="rey-label" for="reg_email">Email address&nbsp;<span
                                     class="required">*</span></label>
                             <input type="email" class="rey-input rey-input--text" name="email" id="reg_email"
                                 autocomplete="email" value="" required
                                 pattern="[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                 onInput="(function(e){e.target.closest('.rey-form-row').classList.toggle('--has-value',e.target.value)})(arguments[0]);" />
                         </p>


                         <div class="rey-form-row rey-form-row--text --small-text">

                             <p>A link to set a new password will be sent to your email address.</p>

                         </div>

                         <wc-order-attribution-inputs></wc-order-attribution-inputs>
                         <div class="woocommerce-privacy-policy-text">
                             <p>Your personal data will be used to support your experience throughout this website, to
                                 manage access to your account, and for other purposes described in our <a
                                     href="{{ route('terms-conditions') }}" class="woocommerce-privacy-policy-link"
                                     target="_blank">privacy policy</a>.</p>
                         </div>
                         <p class="">
                             <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce"
                                 value="e8a46130d6" />
                             <input type="hidden" name="_wp_http_referer" value="/london/" />
                             <button type="submit" class="btn btn-line-active submit-btn" name="register"
                                 value="Register" aria-label="Register">CREATE ACCOUNT</button>
                         </p>

                         <div class="rey-accountForms-notice"></div>
                         <div class="rey-accountPanel-links rey-accountForms-links">
                             <button class="btn btn-line" data-location="rey-loginForm">Login</button><button
                                 class="btn btn-line" data-location="rey-forgetForm">Forgot password</button>
                         </div>


                     </form>

                 </div>


                 <div class="rey-accountPanel-form rey-forgetForm ">
                     <div class="rey-accountPanel-title">Password Recovery</div>

                     <form method="post"
                         class="woocommerce-form woocommerce-form-forgot js-rey-woocommerce-form-forgot">

                         <div class="woocommerce-form-forgot-formData">

                             <p>Lost your password? Please enter your username or email address. You will receive a link
                                 to create a new password via email.</p>
                             <p class="rey-form-row rey-form-row--text ">
                                 <label class="rey-label" for="user_login">Username or email</label>
                                 <input class="rey-input rey-input--text" type="text" name="user_login"
                                     id="user_login" autocomplete="username" required value=""
                                     onInput="(function(e){e.target.closest('.rey-form-row').classList.toggle('--has-value',e.target.value)})(arguments[0]);" />
                             </p>


                             <p class="">
                                 <input type="hidden" name="wc_reset_password" value="true" />
                                 <button type="submit" class="btn btn-line-active submit-btn" value="Reset password"
                                     aria-label="Reset password">Reset password</button>
                             </p>

                             <input type="hidden" id="woocommerce-lost-password-nonce"
                                 name="woocommerce-lost-password-nonce" value="d457ea8e9f" /><input type="hidden"
                                 name="_wp_http_referer" value="/london/" />
                         </div>

                         <div class="rey-accountForms-notice"></div>
                         <div class="rey-accountPanel-links rey-accountForms-links">
                             <button class="btn btn-line" data-location="rey-registerForm">Create
                                 Account</button><button class="btn btn-line"
                                 data-location="rey-loginForm">Login</button>
                         </div>
                     </form>
                 </div>
             </div>

         </div>
     </div>

     <header class="rey-siteHeader rey-siteHeader--custom rey-siteHeader--2249 header-pos--rel">

         <div data-elementor-type="wp-post" data-elementor-id="2249" class="elementor elementor-2249"
             data-elementor-gstype="header" data-page-el-selector="body.elementor-page-2249">
             <section
                 class="elementor-section elementor-top-section elementor-element elementor-element-58330f9f elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                 data-id="58330f9f" data-element_type="section">
                 <div class="elementor-container elementor-column-gap-default">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7436cccf"
                         data-id="7436cccf" data-element_type="column">
                         <div
                             class="elementor-column-wrap--7436cccf elementor-widget-wrap elementor-element-populated">
                             <div class="elementor-element elementor-element-6281e6f4 elementor-widget__width-auto elementor-widget elementor-widget-reycore-header-logo"
                                 data-id="6281e6f4" data-element_type="widget"
                                 data-widget_type="reycore-header-logo.default">
                                 <div class="elementor-widget-container">

                                     <div class="rey-logoWrapper">


                                         <div class="rey-siteLogo">
                                             <a href="{{ route('home') }}" data-no-lazy="1" data-skip-lazy="1"
                                                 class="no-lazy custom-logo-link" rel="home" itemprop="url"><img
                                                     src="{{ asset('images/logo.png') }}" data-no-lazy="1"
                                                     data-skip-lazy="1" class="no-lazy custom-logo" alt="London Demo"
                                                     loading="eager" width="107" height="44"
                                                     decoding="async" /></a>
                                         </div>

                                     </div>
                                     <!-- .rey-logoWrapper -->
                                 </div>
                             </div>
                             <div class="elementor-element elementor-element-9e34f80 elementor-widget__width-auto --il--left --il--tablet-right --il--mobile-right --icons-start --submenu-display-collapsed --tap-open --panel-dir--left elementor-widget elementor-widget-reycore-header-navigation"
                                 data-id="9e34f80" data-element_type="widget"
                                 data-widget_type="reycore-header-navigation.default">
                                 <div class="elementor-widget-container">

                                     <button class="btn rey-mainNavigation-mobileBtn rey-headerIcon __hamburger"
                                         aria-label="Open menu">
                                         <div class="__bars">
                                             <span class="__bar"></span>
                                             <span class="__bar"></span>
                                             <span class="__bar"></span>
                                         </div>
                                         <svg aria-hidden="true" role="img" id="rey-icon-close-681785628d6e2"
                                             class="rey-icon rey-icon-close " viewbox="0 0 110 110">
                                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                                 stroke-linecap="square">
                                                 <path
                                                     d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
                                                     stroke="currentColor" stroke-width="var(--stroke-width, 12px)">
                                                 </path>
                                                 <path
                                                     d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
                                                     stroke="currentColor" stroke-width="var(--stroke-width, 12px)">
                                                 </path>
                                             </g>
                                         </svg>
                                     </button>
                                     <!-- .rey-mainNavigation-mobileBtn -->

                                     <nav id="site-navigation-9e34f80"
                                         class="rey-mainNavigation rey-mainNavigation--desktop --style-default --shadow-1"
                                         data-id="-9e34f80" aria-label="Main Menu" data-sm-indicator="circle"
                                         itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">

                                         <ul id="main-menu-desktop-9e34f80"
                                             class="rey-mainMenu rey-mainMenu--desktop id--mainMenu--desktop --has-indicators  --megamenu-support">
                                             <li id="menu-item-2749"
                                                 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1702 current_page_item menu-item-2749 depth--0 --is-regular o-id-1702">
                                                 <a href="{{ route('home') }}"
                                                     aria-current="page"><span>HOME</span></a>
                                             </li>
                                             <li id="menu-item-688"
                                                 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-688 depth--0 --is-mega o-id-4 --is-mega-gs --mega-full menu-item-has-children">
                                                 <a href="{{ route('shop') }}"><span>SHOP</span><i
                                                         class="--submenu-indicator --submenu-indicator-circle"></i></a>
                                                 <div class="rey-mega-gs">
                                                     <div data-elementor-type="wp-post" data-elementor-id="720"
                                                         class="elementor elementor-720"
                                                         data-elementor-gstype="megamenu"
                                                         data-page-el-selector="body.elementor-page-720">
                                                         <div class="elementor-section elementor-top-section elementor-element elementor-element-edd6ce1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                             data-id="edd6ce1" data-element_type="section">
                                                             <div
                                                                 class="elementor-container elementor-column-gap-default">
                                                                 <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-04b50c7 elementor-hidden-mobile"
                                                                     data-id="04b50c7" data-element_type="column">
                                                                     <div
                                                                         class="elementor-column-wrap--04b50c7 elementor-widget-wrap elementor-element-populated">
                                                                         <div class="elementor-element elementor-element-231f9b9 elementor-widget elementor-widget-image"
                                                                             data-id="231f9b9"
                                                                             data-element_type="widget"
                                                                             data-widget_type="image.default">
                                                                             <div class="elementor-widget-container">
                                                                                 <img fetchpriority="high"
                                                                                     width="883" height="565"
                                                                                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20883%20565'%3E%3C/svg%3E"
                                                                                     class="attachment-large size-large wp-image-852"
                                                                                     alt=""
                                                                                     data-lazy-srcset="{{ asset('images/global/cat-img.jpg') }} 883w, {{ asset('images/global/cat-img-300x192.jpg') }}  300w, {{ asset('images/global/cat-img-768x491.jpg') }} 768w,"
                                                                                     data-lazy-sizes="(max-width: 883px) 100vw, 883px"
                                                                                     data-lazy-src="{{ asset('images/global/cat-img.jpg') }}" /><noscript><img
                                                                                         fetchpriority="high"
                                                                                         width="883" height="565"
                                                                                         src="{{ asset('images/global/cat-img.jpg') }}"
                                                                                         class="attachment-large size-large wp-image-852"
                                                                                         alt=""
                                                                                         srcset="{{ asset('images/global/cat-img.jpg') }} 883w, {{ asset('images/global/cat-img-300x192.jpg') }}  300w, {{ asset('images/global/cat-img-768x491.jpg') }} 768w,"
                                                                                         sizes="(max-width: 883px) 100vw, 883px" /></noscript>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div data-column-link="{&quot;url&quot;:&quot;#&quot;,&quot;target&quot;:&quot;_self&quot;}"
                                                                     class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-09b2825 rey-colbg--classic elementor-hidden-mobile"
                                                                     data-id="09b2825" data-element_type="column"
                                                                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                     <div
                                                                         class="elementor-column-wrap--09b2825 elementor-widget-wrap elementor-element-populated">
                                                                         <div class="elementor-background-overlay">
                                                                         </div>
                                                                         <div class="elementor-element elementor-element-b385aea elementor-heading--stroke elementor-heading--vertical elementor-widget__width-auto --il--right elementor-widget elementor-widget-heading"
                                                                             data-id="b385aea"
                                                                             data-element_type="widget"
                                                                             data-widget_type="heading.default">
                                                                             <div class="elementor-widget-container">
                                                                                 <div
                                                                                     class="elementor-heading-title elementor-size-default">
                                                                                     just in</div>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-2aaeaee"
                                                                     data-id="2aaeaee" data-element_type="column">
                                                                     <div
                                                                         class="elementor-column-wrap--2aaeaee elementor-widget-wrap elementor-element-populated">
                                                                         <div class="elementor-element elementor-element-7b13800 elementor-widget elementor-widget-heading"
                                                                             data-id="7b13800"
                                                                             data-element_type="widget"
                                                                             data-widget_type="heading.default">
                                                                             <div class="elementor-widget-container">
                                                                                 <h3
                                                                                     class="elementor-heading-title elementor-size-default">
                                                                                     BROWSE ITEMS</h3>
                                                                             </div>
                                                                         </div>
                                                                         <div class="elementor-element elementor-element-0003aca reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                             data-id="0003aca"
                                                                             data-element_type="widget"
                                                                             data-widget_type="reycore-menu.default">
                                                                             <div class="elementor-widget-container">

                                                                                 <div class="rey-element reyEl-menu">
                                                                                     <div
                                                                                         class="reyEl-menu-navWrapper">
                                                                                         <ul data-menu-qid="1702"
                                                                                             id="menu-categories"
                                                                                             class="reyEl-menu-nav rey-navEl --menuHover-">
                                                                                             <li id="menu-item-740"
                                                                                                 class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-740 o-id-82">
                                                                                                 <a
                                                                                                     href="{{ route('shop') }}?category=casual-urban-wear"><span>Coats
                                                                                                         &#038;
                                                                                                         Jackets</span></a>
                                                                                             </li>
                                                                                             <li id="menu-item-741"
                                                                                                 class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-741 o-id-82">
                                                                                                 <a
                                                                                                     href="{{ route('shop') }}?category=men/casual-urban-wear"><span>Down
                                                                                                         Coats,
                                                                                                         Jackets
                                                                                                         &#038;
                                                                                                         Vests</span></a>
                                                                                             </li>
                                                                                             <li id="menu-item-742"
                                                                                                 class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-742 o-id-82">
                                                                                                 <a
                                                                                                     href="{{ route('shop') }}?category=men/casual-urban-wear"><span>Jeans</span></a>
                                                                                             </li>
                                                                                             <li id="menu-item-743"
                                                                                                 class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-743 o-id-82">
                                                                                                 <a
                                                                                                     href="{{ route('shop') }}?category=men/casual-urban-wear"><span>Jumpers
                                                                                                         &#038;
                                                                                                         Cardigans</span></a>
                                                                                             </li>
                                                                                             <li id="menu-item-744"
                                                                                                 class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-744 o-id-82">
                                                                                                 <a
                                                                                                     href="{{ route('shop') }}?category=men/casual-urban-wear"><span>Loungewear
                                                                                                         &#038;
                                                                                                         Pyjamas</span></a>
                                                                                             </li>
                                                                                             <li id="menu-item-745"
                                                                                                 class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-745 o-id-82">
                                                                                                 <a
                                                                                                     href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Parkas</span></a>
                                                                                             </li>
                                                                                             <li id="menu-item-746"
                                                                                                 class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-746 o-id-82">
                                                                                                 <a
                                                                                                     href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Shirts</span></a>
                                                                                             </li>
                                                                                             <li id="menu-item-747"
                                                                                                 class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-747 o-id-82">
                                                                                                 <a
                                                                                                     href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Sweatshirts
                                                                                                         &#038;
                                                                                                         Hoodies</span></a>
                                                                                             </li>
                                                                                             <li id="menu-item-748"
                                                                                                 class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-748 o-id-82">
                                                                                                 <a
                                                                                                     href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Shorts</span></a>
                                                                                             </li>
                                                                                             <li id="menu-item-749"
                                                                                                 class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-749 o-id-82">
                                                                                                 <a
                                                                                                     href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Socks</span></a>
                                                                                             </li>
                                                                                             <li id="menu-item-750"
                                                                                                 class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-750 o-id-82">
                                                                                                 <a
                                                                                                     href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>T-Shirts
                                                                                                         &#038;
                                                                                                         Tops</span></a>
                                                                                             </li>
                                                                                             <li id="menu-item-751"
                                                                                                 class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-751 o-id-82">
                                                                                                 <a
                                                                                                     href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Trousers,
                                                                                                         Chinos
                                                                                                         &#038;
                                                                                                         Sweatpants</span></a>
                                                                                             </li>
                                                                                         </ul>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-c100077"
                                                                     data-id="c100077" data-element_type="column">
                                                                     <div
                                                                         class="elementor-column-wrap--c100077 elementor-widget-wrap elementor-element-populated">
                                                                         <div class="elementor-element elementor-element-b341eee elementor-widget elementor-widget-heading"
                                                                             data-id="b341eee"
                                                                             data-element_type="widget"
                                                                             data-widget_type="heading.default">
                                                                             <div class="elementor-widget-container">
                                                                                 <h3
                                                                                     class="elementor-heading-title elementor-size-default">
                                                                                     SHOP BRANDS</h3>
                                                                             </div>
                                                                         </div>
                                                                         <div class="elementor-element elementor-element-aaaaf9b elementor-widget elementor-widget-reycore-wc-attributes"
                                                                             data-id="aaaaf9b"
                                                                             data-element_type="widget"
                                                                             data-widget_type="reycore-wc-attributes.default">
                                                                             <div class="elementor-widget-container">

                                                                                 <div
                                                                                     class="rey-element reyEl-wcAttr reyEl-wcAttr--list rey-filterList rey-filterList--list">

                                                                                     <ul class="reyEl-wcAttr-list">
                                                                                         <li><a href="{{ route('shop') }}?brand=cerveo"
                                                                                                 class="__item">Cerveo</a>
                                                                                         </li>
                                                                                         <li><a href="{{ route('shop') }}?brand=dumark"
                                                                                                 class="__item">Dumark</a>
                                                                                         </li>
                                                                                         <li><a href="{{ route('shop') }}?brand=guaraxu/"
                                                                                                 class="__item">Guaraxu</a>
                                                                                         </li>
                                                                                         <li><a href="h{{ route('shop') }}?brand=iguera/"
                                                                                                 class="__item">Iguera</a>
                                                                                         </li>
                                                                                         <li><a href="{{ route('shop') }}?brand=quisuito/"
                                                                                                 class="__item">Quisuito</a>
                                                                                         </li>
                                                                                         <li><a href="{{ route('shop') }}?brand=zenuro/"
                                                                                                 class="__item">Zenuro</a>
                                                                                         </li>
                                                                                     </ul>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li id="menu-item-683"
                                                 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-683 depth--0 --is-regular o-id-681">
                                                 <a href="{{ route('shop') }}?new=true"><span>New In</span></a>
                                             </li>
                                             <li id="menu-item-28"
                                                 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28 depth--0 --is-regular o-id-25">
                                                 <a href="{{ route('blog') }}"><span>Blog</span></a>
                                             </li>
                                             <li id="menu-item-1720"
                                                 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1720 depth--2 o-id-935">
                                                 <a href="{{ route('about_us') }}"><span>About
                                                         us</span></a>
                                             </li>
                                         </ul>
                                     </nav><!-- .rey-mainNavigation -->



                                     <nav id="site-navigation-mobile-9e34f80"
                                         class="rey-mainNavigation rey-mainNavigation--mobile rey-mobileNav "
                                         data-id="-9e34f80" aria-label="Main Menu"
                                         itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
                                         <div class="rey-mobileNav-container">
                                             <div class="rey-mobileNav-header">


                                                 <div class="rey-siteLogo">
                                                     <a href="{{ route('home') }}" data-no-lazy="1"
                                                         data-skip-lazy="1" class="no-lazy custom-logo-link"
                                                         rel="home" itemprop="url"><img
                                                             src="{{ asset('images/logo.png') }}" data-no-lazy="1"
                                                             data-skip-lazy="1" class="no-lazy custom-logo"
                                                             alt="London Demo" loading="eager" width="60"
                                                             height="40" decoding="async" /></a>
                                                 </div>

                                                 <button
                                                     class="__arrClose btn rey-mobileMenu-close js-rey-mobileMenu-close"
                                                     aria-label="Close menu"><span class="__icons"><svg
                                                             aria-hidden="true" role="img"
                                                             id="rey-icon-close-6817856299782"
                                                             class="rey-icon rey-icon-close " viewbox="0 0 110 110">
                                                             <g stroke="none" stroke-width="1" fill="none"
                                                                 fill-rule="evenodd" stroke-linecap="square">
                                                                 <path
                                                                     d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
                                                                     stroke="currentColor"
                                                                     stroke-width="var(--stroke-width, 12px)">
                                                                 </path>
                                                                 <path
                                                                     d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
                                                                     stroke="currentColor"
                                                                     stroke-width="var(--stroke-width, 12px)">
                                                                 </path>
                                                             </g>
                                                         </svg><svg aria-hidden="true" role="img"
                                                             id="rey-icon-arrow-classic-681785629978a"
                                                             class="rey-icon rey-icon-arrow-classic "
                                                             viewbox="0 0 16 16">
                                                             <polygon fill="var(--icon-fill, currentColor)"
                                                                 points="8 0 6.6 1.4 12.2 7 0 7 0 9 12.2 9 6.6 14.6 8 16 16 8">
                                                             </polygon>
                                                         </svg></span></button>
                                             </div>

                                             <div class="rey-mobileNav-main">
                                                 <ul id="main-menu-mobile-9e34f80"
                                                     class="rey-mainMenu rey-mainMenu-mobile  --has-indicators  --megamenu-support">
                                                     <li id="mobile-menu-item-2749"
                                                         class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1702 current_page_item menu-item-2749 depth--0 --is-regular o-id-1702">
                                                         <a href="{{ route('home') }}"
                                                             aria-current="page"><span>HOME</span></a>
                                                     </li>
                                                     <li id="mobile-menu-item-688"
                                                         class="menu-item menu-item-type-post_type menu-item-object-page menu-item-688 depth--0 --is-mega o-id-4 --is-mega-gs --mega-full menu-item-has-children">
                                                         <a href="{{ route('shop') }}"><span>SHOP</span><i
                                                                 class="--submenu-indicator --submenu-indicator-circle"></i></a>
                                                         <div class="rey-mega-gs">
                                                             <div data-elementor-type="wp-post"
                                                                 data-elementor-id="720"
                                                                 class="elementor elementor-720"
                                                                 data-elementor-gstype="megamenu"
                                                                 data-page-el-selector="body.elementor-page-720">
                                                                 <div class="elementor-section elementor-top-section elementor-element elementor-element-edd6ce1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                     data-id="edd6ce1" data-element_type="section">
                                                                     <div
                                                                         class="elementor-container elementor-column-gap-default">
                                                                         <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-04b50c7 elementor-hidden-mobile"
                                                                             data-id="04b50c7"
                                                                             data-element_type="column">
                                                                             <div
                                                                                 class="elementor-column-wrap--04b50c7 elementor-widget-wrap elementor-element-populated">
                                                                                 <div class="elementor-element elementor-element-231f9b9 elementor-widget elementor-widget-image"
                                                                                     data-id="231f9b9"
                                                                                     data-element_type="widget"
                                                                                     data-widget_type="image.default">
                                                                                     <div
                                                                                         class="elementor-widget-container">
                                                                                         <img fetchpriority="high"
                                                                                             width="883"
                                                                                             height="565"
                                                                                             src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20883%20565'%3E%3C/svg%3E"
                                                                                             class="attachment-large size-large wp-image-852"
                                                                                             alt=""
                                                                                             data-lazy-srcset="{{ asset('images/global/cat-img.jpg') }} 883w, {{ asset('images/global/cat-img-300x192.jpg') }}  300w, {{ asset('images/global/cat-img-768x491.jpg') }} 768w,"
                                                                                             data-lazy-sizes="(max-width: 883px) 100vw, 883px"
                                                                                             data-lazy-src="{{ asset('images/global/cat-img.jpg') }}" /><noscript><img
                                                                                                 fetchpriority="high"
                                                                                                 width="883"
                                                                                                 height="565"
                                                                                                 src="{{ asset('images/global/cat-img.jpg') }}"
                                                                                                 class="attachment-large size-large wp-image-852"
                                                                                                 alt=""
                                                                                                 srcset="{{ asset('images/global/cat-img.jpg') }} 883w, {{ asset('images/global/cat-img-300x192.jpg') }}  300w, {{ asset('images/global/cat-img-768x491.jpg') }} 768w,"
                                                                                                 sizes="(max-width: 883px) 100vw, 883px" /></noscript>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                         <div data-column-link="{&quot;url&quot;:&quot;#&quot;,&quot;target&quot;:&quot;_self&quot;}"
                                                                             class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-09b2825 rey-colbg--classic elementor-hidden-mobile"
                                                                             data-id="09b2825"
                                                                             data-element_type="column"
                                                                             data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                             <div
                                                                                 class="elementor-column-wrap--09b2825 elementor-widget-wrap elementor-element-populated">
                                                                                 <div
                                                                                     class="elementor-background-overlay">
                                                                                 </div>
                                                                                 <div class="elementor-element elementor-element-b385aea elementor-heading--stroke elementor-heading--vertical elementor-widget__width-auto --il--right elementor-widget elementor-widget-heading"
                                                                                     data-id="b385aea"
                                                                                     data-element_type="widget"
                                                                                     data-widget_type="heading.default">
                                                                                     <div
                                                                                         class="elementor-widget-container">
                                                                                         <div
                                                                                             class="elementor-heading-title elementor-size-default">
                                                                                             just in</div>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                         <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-2aaeaee"
                                                                             data-id="2aaeaee"
                                                                             data-element_type="column">
                                                                             <div
                                                                                 class="elementor-column-wrap--2aaeaee elementor-widget-wrap elementor-element-populated">
                                                                                 <div class="elementor-element elementor-element-7b13800 elementor-widget elementor-widget-heading"
                                                                                     data-id="7b13800"
                                                                                     data-element_type="widget"
                                                                                     data-widget_type="heading.default">
                                                                                     <div
                                                                                         class="elementor-widget-container">
                                                                                         <h3
                                                                                             class="elementor-heading-title elementor-size-default">
                                                                                             BROWSE ITEMS</h3>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div class="elementor-element elementor-element-0003aca reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                                     data-id="0003aca"
                                                                                     data-element_type="widget"
                                                                                     data-widget_type="reycore-menu.default">
                                                                                     <div
                                                                                         class="elementor-widget-container">

                                                                                         <div
                                                                                             class="rey-element reyEl-menu">
                                                                                             <div
                                                                                                 class="reyEl-menu-navWrapper">
                                                                                                 <ul data-menu-qid="1702"
                                                                                                     id="menu-categories"
                                                                                                     class="reyEl-menu-nav rey-navEl --menuHover-">
                                                                                                     <li id="mobile-menu-item-740"
                                                                                                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-740 o-id-82">
                                                                                                         <a
                                                                                                             href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Coats
                                                                                                                 &#038;
                                                                                                                 Jackets</span></a>
                                                                                                     </li>
                                                                                                     <li id="mobile-menu-item-741"
                                                                                                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-741 o-id-82">
                                                                                                         <a
                                                                                                             href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Down
                                                                                                                 Coats,
                                                                                                                 Jackets
                                                                                                                 &#038;
                                                                                                                 Vests</span></a>
                                                                                                     </li>
                                                                                                     <li id="mobile-menu-item-742"
                                                                                                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-742 o-id-82">
                                                                                                         <a
                                                                                                             href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Jeans</span></a>
                                                                                                     </li>
                                                                                                     <li id="mobile-menu-item-743"
                                                                                                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-743 o-id-82">
                                                                                                         <a
                                                                                                             href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Jumpers
                                                                                                                 &#038;
                                                                                                                 Cardigans</span></a>
                                                                                                     </li>
                                                                                                     <li id="mobile-menu-item-744"
                                                                                                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-744 o-id-82">
                                                                                                         <a
                                                                                                             href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Loungewear
                                                                                                                 &#038;
                                                                                                                 Pyjamas</span></a>
                                                                                                     </li>
                                                                                                     <li id="mobile-menu-item-745"
                                                                                                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-745 o-id-82">
                                                                                                         <a
                                                                                                             href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Parkas</span></a>
                                                                                                     </li>
                                                                                                     <li id="mobile-menu-item-746"
                                                                                                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-746 o-id-82">
                                                                                                         <a
                                                                                                             href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Shirts</span></a>
                                                                                                     </li>
                                                                                                     <li id="mobile-menu-item-747"
                                                                                                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-747 o-id-82">
                                                                                                         <a
                                                                                                             href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Sweatshirts
                                                                                                                 &#038;
                                                                                                                 Hoodies</span></a>
                                                                                                     </li>
                                                                                                     <li id="mobile-menu-item-748"
                                                                                                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-748 o-id-82">
                                                                                                         <a
                                                                                                             href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Shorts</span></a>
                                                                                                     </li>
                                                                                                     <li id="mobile-menu-item-749"
                                                                                                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-749 o-id-82">
                                                                                                         <a
                                                                                                             href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Socks</span></a>
                                                                                                     </li>
                                                                                                     <li id="mobile-menu-item-750"
                                                                                                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-750 o-id-82">
                                                                                                         <a
                                                                                                             href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>T-Shirts
                                                                                                                 &#038;
                                                                                                                 Tops</span></a>
                                                                                                     </li>
                                                                                                     <li id="mobile-menu-item-751"
                                                                                                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-751 o-id-82">
                                                                                                         <a
                                                                                                             href="{{ route('shop') }}?category=men/casual-urban-wear/"><span>Trousers,
                                                                                                                 Chinos
                                                                                                                 &#038;
                                                                                                                 Sweatpants</span></a>
                                                                                                     </li>
                                                                                                 </ul>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                         <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-c100077"
                                                                             data-id="c100077"
                                                                             data-element_type="column">
                                                                             <div
                                                                                 class="elementor-column-wrap--c100077 elementor-widget-wrap elementor-element-populated">
                                                                                 <div class="elementor-element elementor-element-b341eee elementor-widget elementor-widget-heading"
                                                                                     data-id="b341eee"
                                                                                     data-element_type="widget"
                                                                                     data-widget_type="heading.default">
                                                                                     <div
                                                                                         class="elementor-widget-container">
                                                                                         <h3
                                                                                             class="elementor-heading-title elementor-size-default">
                                                                                             SHOP BRANDS</h3>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div class="elementor-element elementor-element-aaaaf9b elementor-widget elementor-widget-reycore-wc-attributes"
                                                                                     data-id="aaaaf9b"
                                                                                     data-element_type="widget"
                                                                                     data-widget_type="reycore-wc-attributes.default">
                                                                                     <div
                                                                                         class="elementor-widget-container">

                                                                                         <div
                                                                                             class="rey-element reyEl-wcAttr reyEl-wcAttr--list rey-filterList rey-filterList--list">

                                                                                             <ul
                                                                                                 class="reyEl-wcAttr-list">
                                                                                                 <li><a href="{{ route('shop') }}?brand=cerveo/"
                                                                                                         class="__item">Cerveo</a>
                                                                                                 </li>
                                                                                                 <li><a href="{{ route('shop') }}?brand=dumark/"
                                                                                                         class="__item">Dumark</a>
                                                                                                 </li>
                                                                                                 <li><a href="{{ route('shop') }}?brand=guaraxu/"
                                                                                                         class="__item">Guaraxu</a>
                                                                                                 </li>
                                                                                                 <li><a href="{{ route('shop') }}?brand=iguera/"
                                                                                                         class="__item">Iguera</a>
                                                                                                 </li>
                                                                                                 <li><a href="{{ route('shop') }}?brand=quisuito/"
                                                                                                         class="__item">Quisuito</a>
                                                                                                 </li>
                                                                                                 <li><a href="{{ route('shop') }}?brand=zenuro/"
                                                                                                         class="__item">Zenuro</a>
                                                                                                 </li>
                                                                                             </ul>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </li>
                                                     <li id="mobile-menu-item-683"
                                                         class="menu-item menu-item-type-post_type menu-item-object-page menu-item-683 depth--0 --is-regular o-id-681">
                                                         <a href="{{ route('shop') }}?new=true"><span>New
                                                                 In</span></a>
                                                     </li>
                                                     <li id="mobile-menu-item-683"
                                                         class="menu-item menu-item-type-post_type menu-item-object-page menu-item-683 depth--0 --is-regular o-id-681">
                                                         <a href="{{ route('blog') }}"><span>Blog</span></a>
                                                     </li>
                                                     <li id="mobile-menu-item-28"
                                                         class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28 depth--0 --is-regular o-id-25">
                                                         <a href="{{ route(name: 'about_us') }}"><span>About
                                                                 Us</span></a>
                                                     </li>
                                                 </ul>
                                             </div>

                                             <div class="rey-mobileNav-footer">

                                                 <a href="https://demos.reytheme.com/london/my-account/"
                                                     class="rey-mobileNav--footerItem">
                                                     Connect to your account <svg aria-hidden="true" role="img"
                                                         id="rey-icon-user-68178562998eb"
                                                         class="rey-icon rey-icon-user " viewbox="0 0 24 24">
                                                         <path
                                                             d="M8.68220488,13 L5.8,13 C4.7,11.6 4,9.9 4,8 C4,3.6 7.6,0 12,0 C16.4,0 20,3.6 20,8 C20,9.9 19.3,11.6 18.2,13 L15.3177951,13 C16.9344907,11.9250785 18,10.0869708 18,8 C18,4.6862915 15.3137085,2 12,2 C8.6862915,2 6,4.6862915 6,8 C6,10.0869708 7.06550934,11.9250785 8.68220488,13 Z">
                                                         </path>
                                                         <path
                                                             d="M18,14 L6,14 C2.7,14 0,16.7 0,20 L0,23 C0,23.6 0.4,24 1,24 L23,24 C23.6,24 24,23.6 24,23 L24,20 C24,16.7 21.3,14 18,14 Z M22,22 L2,22 L2,20 C2,17.8 3.8,16 6,16 L18,16 C20.2,16 22,17.8 22,20 L22,22 Z">
                                                         </path>
                                                     </svg></a>

                                             </div>
                                         </div>

                                     </nav>

                                 </div>
                             </div>
                             <div class="elementor-element elementor-element-1102f891 elementor-widget__width-auto --il--right --inline-layout-ov --inline-mobile-icon --has-button-no elementor-widget elementor-widget-reycore-header-search"
                                 data-id="1102f891" data-element_type="widget"
                                 data-widget_type="reycore-header-search.default">
                                 <div class="elementor-widget-container">

                                     <div
                                         class="rey-headerSearch rey-headerIcon js-rey-headerSearch  --tp-before --hit-before">

                                         <button
                                             class="btn rey-headerIcon-btn rey-headerSearch-toggle js-rey-headerSearch-toggle">


                                             <span class="__icon rey-headerIcon-icon" aria-hidden="true"><svg
                                                     aria-hidden="true" role="img"
                                                     id="rey-icon-search-681785629a156"
                                                     class="rey-icon rey-icon-search icon-search" viewbox="0 0 24 24">
                                                     <circle stroke="currentColor" stroke-width="2.2" fill="none"
                                                         cx="11" cy="11" r="10">
                                                     </circle>
                                                     <path
                                                         d="M20.0152578,17.8888876 L23.5507917,21.4244215 C24.1365782,22.010208 24.1365782,22.9599554 23.5507917,23.5457419 C22.9650053,24.1315283 22.0152578,24.1315283 21.4294714,23.5457419 L17.8939375,20.010208 C17.3081511,19.4244215 17.3081511,18.4746741 17.8939375,17.8888876 C18.4797239,17.3031012 19.4294714,17.3031012 20.0152578,17.8888876 Z"
                                                         fill="currentColor" stroke="none"></path>
                                                 </svg> <svg data-abs="" data-transparent="" aria-hidden="true"
                                                     role="img" id="rey-icon-close-681785629a167"
                                                     class="rey-icon rey-icon-close icon-close" viewbox="0 0 110 110">
                                                     <g stroke="none" stroke-width="1" fill="none"
                                                         fill-rule="evenodd" stroke-linecap="square">
                                                         <path
                                                             d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
                                                             stroke="currentColor"
                                                             stroke-width="var(--stroke-width, 12px)"></path>
                                                         <path
                                                             d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
                                                             stroke="currentColor"
                                                             stroke-width="var(--stroke-width, 12px)"></path>
                                                     </g>
                                                 </svg></span>
                                             <span class="screen-reader-text">Search open</span>

                                         </button>
                                         <!-- .rey-headerSearch-toggle -->

                                     </div>
                                 </div>
                             </div>
                             <div class="elementor-element elementor-element-3af0c577 elementor-widget__width-auto elementor-widget elementor-widget-reycore-header-cart"
                                 data-id="3af0c577" data-element_type="widget"
                                 data-widget_type="reycore-header-cart.default">
                                 <div class="elementor-widget-container">

                                     <div class="rey-headerCart-wrapper rey-headerIcon  " data-rey-cart-count="0">
                                         <button class="btn rey-headerIcon-btn rey-headerCart js-rey-headerCart">
                                             <span class="__icon rey-headerIcon-icon " aria-hidden="true"><svg
                                                     aria-hidden="true" role="img"
                                                     id="rey-icon-bag-681785629a73e" class="rey-icon rey-icon-bag "
                                                     viewbox="0 0 24 24">
                                                     <path
                                                         d="M21,3h-4.4C15.8,1.2,14,0,12,0S8.2,1.2,7.4,3H3C2.4,3,2,3.4,2,4v19c0,0.6,0.4,1,1,1h18c0.6,0,1-0.4,1-1V4  C22,3.4,21.6,3,21,3z M12,1c1.5,0,2.8,0.8,3.4,2H8.6C9.2,1.8,10.5,1,12,1z M20,22H4v-4h16V22z M20,17H4V5h3v4h1V5h8v4h1V5h3V17z" />
                                                 </svg></span> <span class="rey-headerIcon-counter --bubble"><span
                                                     class="__cart-count">0</span></span>
                                             <span class="screen-reader-text">Open cart</span>
                                         </button>
                                     </div>
                                     <!-- .rey-headerCart-wrapper -->
                                 </div>
                             </div>
                             <div class="elementor-element elementor-element-6aa9db0b elementor-widget__width-initial elementor-widget elementor-widget-reycore-header-account"
                                 data-id="6aa9db0b" data-element_type="widget"
                                 data-widget_type="reycore-header-account.default">
                                 <div class="elementor-widget-container">

                                     <div class="rey-headerAccount rey-headerIcon ">
                                         <button
                                             class="btn rey-headerIcon-btn js-rey-headerAccount rey-headerAccount-btn rey-headerAccount-btn--text --hit-text">

                                             <span class="screen-reader-text">ACCOUNT</span>

                                             <span
                                                 class="rey-headerAccount-btnText rey-headerIcon-btnText">ACCOUNT</span><span
                                                 class="__icon rey-headerIcon-icon" aria-hidden="true"><svg
                                                     aria-hidden="true" role="img"
                                                     id="rey-icon-user-681785629aec4"
                                                     class="rey-icon rey-icon-user rey-headerAccount-btnIcon"
                                                     viewbox="0 0 24 24">
                                                     <path
                                                         d="M8.68220488,13 L5.8,13 C4.7,11.6 4,9.9 4,8 C4,3.6 7.6,0 12,0 C16.4,0 20,3.6 20,8 C20,9.9 19.3,11.6 18.2,13 L15.3177951,13 C16.9344907,11.9250785 18,10.0869708 18,8 C18,4.6862915 15.3137085,2 12,2 C8.6862915,2 6,4.6862915 6,8 C6,10.0869708 7.06550934,11.9250785 8.68220488,13 Z">
                                                     </path>
                                                     <path
                                                         d="M18,14 L6,14 C2.7,14 0,16.7 0,20 L0,23 C0,23.6 0.4,24 1,24 L23,24 C23.6,24 24,23.6 24,23 L24,20 C24,16.7 21.3,14 18,14 Z M22,22 L2,22 L2,20 C2,17.8 3.8,16 6,16 L18,16 C20.2,16 22,17.8 22,20 L22,22 Z">
                                                     </path>
                                                 </svg></span>
                                             <span
                                                 class="rey-headerAccount-count rey-headerIcon-counter --hidden --minimal">

                                                 <span class="rey-wishlistCounter-number" data-count=""></span><svg
                                                     data-transparent="" data-abs="" aria-hidden="true"
                                                     role="img" id="rey-icon-close-681785629b0af"
                                                     class="rey-icon rey-icon-close __close-icon"
                                                     viewbox="0 0 110 110">
                                                     <g stroke="none" stroke-width="1" fill="none"
                                                         fill-rule="evenodd" stroke-linecap="square">
                                                         <path
                                                             d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
                                                             stroke="currentColor"
                                                             stroke-width="var(--stroke-width, 12px)"></path>
                                                         <path
                                                             d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
                                                             stroke="currentColor"
                                                             stroke-width="var(--stroke-width, 12px)"></path>
                                                     </g>
                                                 </svg>
                                             </span>
                                         </button>

                                     </div>
                                     <!-- .rey-headerAccount-wrapper -->
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
         </div>
         <div class="rey-overlay rey-overlay--header" style="opacity:0;"></div>
         <div class="rey-overlay rey-overlay--header-top" style="opacity:0;"></div>

     </header>



     <div class="rey-cartPanel-wrapper rey-sidePanel js-rey-cartPanel woocommerce" data-lazy-hidden>


         <div class="rey-cartExtraProducts" id="rey-cart-extra-products" data-status="open">
             <button class="__toggle"><svg aria-hidden="true" role="img" id="rey-icon-chevron-68178562b1625"
                     class="rey-icon rey-icon-chevron  " viewbox="0 0 40 64">
                     <polygon fill="currentColor" points="39.5 32 6.83 64 0.5 57.38 26.76 32 0.5 6.62 6.83 0">
                     </polygon>
                 </svg></button>
             <div class="__inner">
                 <div class="__title">Our bestsellers:</div>
                 <div class="__content">
                     <div class="rey-lineLoader"></div>
                 </div>
             </div>
         </div>


         <div class="rey-cartPanel --btns-inline">

             <div class="rey-cartPanel-header">

                 <div class="__tabs">

                     <div class="__tab --active" data-item="cart">
                         <div class="rey-cartPanel-title">
                             SHOPPING BAG <span class="__cart-count">0</span> </div>
                     </div>

                     <div class="__tab" data-item="recent">
                         <div class="rey-cartPanel-title">
                             RECENTLY VIEWED <span class="__recent-count __nb">0</span> </div>
                     </div>

                 </div>

             </div>

             <div class="__tab-content --active" data-item="cart">

                 <div class="widget woocommerce widget_shopping_cart">
                     <div class="widget_shopping_cart_content"></div>
                 </div>

             </div>

             <div class="__tab-content rey-cartRecent-itemsWrapper --loading" data-item="recent">
                 <div class="rey-lineLoader"></div>
             </div>
         </div>


     </div>

     {{-- <div class="rey-demoPanel-wrapper --loading" id="rey-demoPanel-wrapper">
         <div class="rey-demoPanel-overlay"></div>
         <div class="rey-demoPanel-panelWrapper">
             <div class="rey-demoPanel-buttonsWrapper">
                 <div class="rey-demoPanel-buttons">
                     <a href="#" class="rey-demoPanel-btn js-rey-moreDemos">
                         <span>MORE DEMOS</span>
                         <span class="rey-demoPanel-arr"><svg aria-hidden="true" role="img"
                                 id="rey-icon-chevron-68178562b1bad" class="rey-icon rey-icon-chevron  "
                                 viewbox="0 0 40 64">
                                 <polygon fill="currentColor"
                                     points="39.5 32 6.83 64 0.5 57.38 26.76 32 0.5 6.62 6.83 0"></polygon>
                             </svg></span>
                     </a>
                     <a href="https://1.envato.market/5bY379" class="rey-demoPanel-btn">BUY AT &nbsp;$69</a>
                     <a href="#" class="rey-demoPanel-btn rey-demoPanel-remove"
                         data-rey-demos-tooltip="REMOVE PANEL">
                         <svg aria-hidden="true" role="img" id="rey-icon-logo-68178562b1bbb"
                             class="rey-icon rey-icon-logo " viewbox="0 0 78 40">
                             <path
                                 d="M78,0.857908847 L68.673913,0.857908847 L63.5869565,15.1206434 L58.5,0.857908847 L49.173913,0.857908847 L59.4008152,24.9865952 L52.7086216,40 L62.0226252,40 L78,0.857908847 Z M8.47826087,5.63002681 L8.47826087,0.857908847 L0,0.857908847 L0,26.5951743 L8.47826087,26.5951743 L8.47826087,17.1045576 C8.47826087,12.922252 10.7038043,10.1340483 13.1413043,9.43699732 C14.6779891,9.0080429 16.2146739,8.95442359 17.8043478,9.43699732 L17.8043478,0 C13.0353261,0.321715818 10.2269022,1.93029491 8.47826087,5.63002681 Z M35.7146739,19.9463807 C34.7078804,19.9463807 33.701087,19.7855228 33.0652174,19.4101877 L48.1141304,10.2949062 C46.1535326,1.769437 39.6888587,0 36.0326087,0 C27.1834239,0 21.8315217,6.11260054 21.8315217,13.7265416 C21.8315217,21.3404826 27.1834239,27.4530831 36.0326087,27.4530831 C40.1127717,27.4530831 43.6100543,25.9517426 46.4184783,23.2171582 L42.0733696,17.4798928 C40.5366848,18.9276139 38.2581522,19.9463807 35.7146739,19.9463807 Z M36.0326087,7.50670241 C37.4103261,7.50670241 38.3641304,8.20375335 38.7880435,8.90080429 L29.9918478,14.2091153 C29.4619565,10.1876676 32.4293478,7.50670241 36.0326087,7.50670241 Z"
                                 fill="currentColor" fill-rule="nonzero"></path>
                         </svg> <svg aria-hidden="true" role="img" id="rey-icon-close-68178562b1bc4"
                             class="rey-icon rey-icon-close " viewbox="0 0 110 110">
                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                 stroke-linecap="square">
                                 <path d="M4.79541854,4.29541854 L104.945498,104.445498 L4.79541854,4.29541854 Z"
                                     stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path>
                                 <path d="M4.79541854,104.704581 L104.945498,4.55450209 L4.79541854,104.704581 Z"
                                     stroke="currentColor" stroke-width="var(--stroke-width, 12px)"></path>
                             </g>
                         </svg> </a>
                 </div>
             </div>
             <div class="rey-demoPanel" data-size="1">
                 <div class="rey-demoPanel-handler js-demoPanel-handler" data-rey-demos-tooltip="CLICK TO RESIZE">
                 </div>
                 <div class="rey-demoPanel-header">
                     <ul class="rey-demoPanel-tabs">
                         <li><a href="#" class="--active" data-tab="demos">DEMOS</a></li>
                         <li><a href="#" data-tab="pages" data-supports="categories, search">PAGES</a></li>
                         <li data-rey-demos-tooltip="COMING SOON!"><a href="#" data-tab="sections"
                                 class="--disabled">SECTIONS</a></li>
                         <li data-rey-demos-tooltip="COMING SOON!"><a href="#" data-tab="features"
                                 class="--disabled">FEATURES</a></li>
                     </ul>
                     <div class="rey-demoPanel-search js-demoPanel-search">
                         <svg class="rey-icon u-icon" height="100%" width="100%"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                             <title>Search</title>
                             <path
                                 d="M29.784,26.394 L25.103,21.831 C25.056,21.785 24.995,21.764 24.943,21.727 C29.501,16.417 28.792,8.956 23.676,3.969 C21.055,1.414 17.571,0.006 13.865,0.006 C10.158,0.006 6.673,1.414 4.053,3.969 C-1.358,9.244 -1.358,17.827 4.053,23.101 C6.673,25.657 10.158,27.065 13.865,27.065 C17.155,27.065 19.831,26.323 22.322,24.285 C22.361,24.336 22.381,24.394 22.428,24.441 L26.726,28.630 C26.975,28.873 27.301,28.995 27.627,28.995 C27.953,28.995 29.099,28.873 29.347,28.630 C29.845,28.145 30.282,26.879 29.784,26.394 ZM13.865,23.834 C7.538,23.834 3.588,19.596 3.526,13.649 C3.460,7.397 7.666,3.397 13.865,3.397 C20.087,3.397 24.519,7.410 24.477,13.609 C24.436,19.609 20.169,23.834 13.865,23.834 Z" />
                         </svg>
                         <input type="search" placeholder="Type to search..">
                     </div>


                     <ul class="rey-demoPanel-links">

                         <li class="rey-demoPanel-links--askQuestion">
                             <svg class="rey-icon" height="100%" width="100%" viewBox="0 0 56 53" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <path
                                         d="M43.3,29.5 C43.3,30 42.9,30.6 42.6,30.9 C40.9,33.4 35.8,37.6 28,37.6 C20.2,37.6 15.1,33.4 13.4,30.9 C13.1,30.5 12.8,30.1 12.8,29.6 C12.8,29 13.2,28.4 13.9,28.4 C14.2,28.4 14.5,28.5 14.7,28.7 C17.6,31.2 22.3,33.5 28.1,33.5 C33.9,33.5 38.7,31.2 41.5,28.7 C41.7,28.5 41.9,28.4 42.2,28.4 C42.8,28.4 43.3,28.9 43.3,29.5 Z M51,49 C51.5,49.2 51.8,49.7 51.8,50.4 C51.8,51.4 51.2,52.4 49.6,52.4 C44.6,52.4 38.9,50.5 35.1,48.1 C34.7,47.9 34.4,47.8 33.9,47.9 C32,48.2 30,48.4 28,48.4 C12.5,48.4 0,37.5 0,24.2 C0,10.8 12.5,0 28,0 C43.5,0 56,10.9 56,24.2 C56,31.4 52.4,37.8 46.7,42.2 C46.3,42.5 46.1,42.9 46.3,43.4 C47.1,46 49,47.9 51,49 Z M43.5,46.6 C42.1,44.8 41.1,42 41.1,40.9 C41.1,40.4 41.5,39.9 41.9,39.7 C47.6,36.2 51.3,30.5 51.3,24.2 C51.3,13.6 40.9,5 28,5 C15.1,5 4.7,13.6 4.7,24.2 C4.7,34.8 15.1,43.4 28,43.4 C30,43.4 32,43.2 33.9,42.8 C34.6,42.6 35,42.7 35.3,43 C37.6,44.9 41.9,47.2 43.3,47.2 C43.4,47.2 43.6,47.1 43.6,46.9 C43.6,46.8 43.6,46.7 43.5,46.6 Z"
                                         fill="currentColor" fill-rule="nonzero"></path>
                                 </g>
                             </svg>
                             <a href="https://themeforest.net/item/rey-multipurpose-woocommerce-theme/24689383/comments"
                                 target="_blank">
                                 <span>ASK ANY QUESTION</span>
                             </a>
                         </li>
                         <li>
                             <svg class="rey-icon" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" height="100%" width="100%"
                                 viewBox="0 0 41 33" version="1.1" class="u-icon" role="img">
                                 <path
                                     d="M39.9,7.9 C39.1,7 38,6.4 36.8,6.4 L21.4,6.4 C20.9,6.4 20.4,6.8 20.4,7.4 C20.4,8 20.9,8.4 21.4,8.4 L36.8,8.4 C37.4,8.4 38,8.7 38.4,9.1 C38.8,9.6 39,10.2 38.8,10.8 L37.9,15.8 L26.9,15.8 C26.4,15.8 25.9,16.2 25.9,16.8 C25.9,17.4 26.4,17.8 26.9,17.8 L37.6,17.8 L36.7,22.6 C36.6,23.3 35.9,23.8 35.2,23.8 L16,23.8 C15.3,23.8 14.7,23.3 14.5,22.6 L10.6,0.9 C10.5,0.4 10.1,0.1 9.6,0.1 L1.9,0.1 C1.4,0.1 0.9,0.5 0.9,1.1 C0.9,1.7 1.4,2.1 1.9,2.1 L8.8,2.1 L12.6,23.1 C12.8,24.5 13.8,25.5 15.1,25.9 C14.6,26.6 14.2,27.5 14.2,28.5 C14.2,31 16.2,33 18.7,33 C21.2,33 23.2,31 23.2,28.5 C23.2,27.6 22.9,26.7 22.4,26 L28.5,26 C28,26.7 27.7,27.6 27.7,28.5 C27.7,31 29.7,33 32.2,33 C34.7,33 36.7,31 36.7,28.5 C36.7,27.5 36.4,26.6 35.9,25.9 C37.2,25.6 38.3,24.5 38.6,23.1 L40.8,11.3 C41,10.1 40.7,8.9 39.9,7.9 Z M21.2,28.4 C21.2,29.8 20.1,30.9 18.7,30.9 C17.3,30.9 16.2,29.8 16.2,28.4 C16.2,27 17.3,25.9 18.7,25.9 C20.1,25.9 21.2,27 21.2,28.4 Z M32.3,30.9 C30.9,30.9 29.8,29.8 29.8,28.4 C29.8,27 30.9,25.9 32.3,25.9 C33.7,25.9 34.8,27 34.8,28.4 C34.8,29.8 33.7,30.9 32.3,30.9 Z"
                                     fill="currentColor" fill-rule="nonzero"></path>
                             </svg>
                             <a href="https://1.envato.market/5bY379" target="_blank">
                                 <span>BUY AT &nbsp;$69</span>
                             </a>
                         </li>
                     </ul>
                     <div class="rey-demoPanel-controls">
                         <ul>
                             <li>
                                 <a href="#" class="demoPanel-sizeControls" data-sizing="1"
                                     data-rey-demos-tooltip="ENLARGE PANEL">
                                     <svg class="rey-icon" width="24px" height="15px" viewBox="0 0 24 15"
                                         version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                         <polygon fill="currentColor" fill-rule="nonzero"
                                             points="24 11.71 12 -0.01 0 11.71 2.71 14.39 12 5.31 21.29 14.39">
                                         </polygon>
                                     </svg>
                                 </a>
                             </li>
                             <li class="demoPanel-sizeControls-dots"><span></span> <span></span> <span></span></li>
                             <li>
                                 <a href="#" class="demoPanel-sizeControls" data-sizing="-1"
                                     data-rey-demos-tooltip="SHRINK PANEL">
                                     <svg class="rey-icon --flip-vertical" width="24px" height="15px"
                                         viewBox="0 0 24 15" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                         <polygon fill="currentColor" fill-rule="nonzero"
                                             points="24 11.71 12 -0.01 0 11.71 2.71 14.39 12 5.31 21.29 14.39">
                                         </polygon>
                                     </svg>
                                 </a>
                             </li>
                         </ul>
                         <a href="#" class="rey-demoPanel-close" data-rey-demos-tooltip="CLOSE PANEL">
                             <svg class="rey-icon" width="17px" height="17px" viewBox="0 0 17 17" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                 <polygon fill="currentColor" fill-rule="nonzero"
                                     points="11.33 8.5 16.99 14.16 14.16 16.99 8.5 11.33 2.84 16.99 0.01 14.16 5.67 8.5 0.01 2.84 2.84 0.01 8.5 5.67 14.16 0.01 16.99 2.84">
                                 </polygon>
                             </svg>
                         </a>
                     </div>

                 </div>
                 <!-- .rey-demoPanel-header -->
                 <div class="rey-demoPanel-contentWrapper">
                     <div class="rey-demoPanel-content">
                         <div class="rey-demoPanel-contentTab --active" data-tab="demos"></div>
                         <div class="rey-demoPanel-contentTab" data-tab="pages" data-per-row="7"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div> --}}

     <div class="rey-wishlist-notice-wrapper" data-lazy-hidden>
         <div class="rey-wishlist-notice"><span>Added to wishlist!</span> <a href="{{ route('wishlist') }}"
                 class="btn btn-line-active">VIEW WISHLIST</a>
         </div>
     </div>

     <script type="rocketlazyloadscript">
				const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );

			</script>


     <script type="rocketlazyloadscript" data-rocket-type='text/javascript'>
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>

     <div id="rey-searchPanel" class="rey-searchPanel rey-searchForm rey-searchAjax js-rey-ajaxSearch --hidden"
         data-style="wide">

         <div class="rey-searchPanel-inner">

             <form role="search" action="https://demos.reytheme.com/london/" method="get">

                 <label for="search-input-68178562b2708">Search {{ config('custom.site_name') }} Collections</label>
                 <div class="rey-searchPanel-innerForm">

                     <input type="search" name="s" placeholder="type to search.."
                         id="search-input-68178562b2708" value="" />

                     <div class="rey-headerSearch-actions">
                         <input type="hidden" name="post_type" value="product" />
                     </div>

                 </div>

             </form>


             <div class="rey-searchResults js-rey-searchResults "></div>
             <div class="rey-lineLoader"></div>


             <nav class="rey-searchPanel__qlinks" aria-label="Search Menu" data-lazy-hidden>
                 <div class="rey-searchPanel__qlinksTitle">Quicklinks</div>
                 <ul data-menu-qid="1702" id="menu-quicklinks" class="rey-searchMenu list-unstyled">
                     <li id="menu-item-1023"
                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1023 o-id-82">
                         <a href="{{ route('shop') }}?category=men/casual-urban-wear/">Casual
                             &#038; Urban Wear</a>
                     </li>
                     <li id="menu-item-1024"
                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1024 o-id-32">
                         <a href="{{ route('shop') }}?category=men/t-shirts-tops/">T-Shirts
                             &#038; Tops</a>
                     </li>
                     <li id="menu-item-1025"
                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1025 o-id-35">
                         <a href="{{ route('shop') }}?category=men/shorts/">Shorts</a>
                     </li>
                     <li id="menu-item-1026"
                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1026 o-id-26">
                         <a href="{{ route('shop') }}?category=men/down-coats-vests/">Down
                             Coats,
                             Jackets &#038; Vests</a>
                     </li>
                     <li id="menu-item-1027"
                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1027 o-id-33">
                         <a href="{{ route('shop') }}?category=men/jeans/">Jeans</a>
                     </li>
                     <li id="menu-item-1028"
                         class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1028 o-id-27">
                         <a href="{{ route('shop') }}?category=men/jackets/">Coats &#038;
                             Jackets</a>
                     </li>
                 </ul>
             </nav><!-- .rey-searchPanel__qlinks -->
             <!-- .row -->
         </div>

     </div>

     <div class="rey-searchPanel-wideOverlay rey-overlay --no-js-close" style="opacity:0;"></div>
