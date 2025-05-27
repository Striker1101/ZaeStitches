 @extends('layouts.app')

 @section('title', 'Checkout')

 @section('body_attributes')
     data-rsssl=1
    class="wp-singular page-template page-template-template-builder page-template-template-builder-php page page-id-2432 logged-in wp-custom-logo wp-theme-rey wp-child-theme-rey-child theme-rey woocommerce-checkout woocommerce-page woocommerce-no-js rey-no-js ltr woocommerce elementor-default elementor-kit-2331 elementor-page elementor-page-2432 rey-cwidth--default --no-acc-focus elementor-opt r-notices"
    data-id="2432" itemtype="https://schema.org/WebPage" itemscope="itemscope"
 @endsection

 @section('custom_head')
     <style>
         img:is([sizes="auto" i],
         [sizes^="auto," i]) {
             contain-intrinsic-size: 3000px 1500px
         }
     </style>

     <link data-minify="1" id="rey-hs-css" type="text/css" href="{{ asset('css/rey/ds-1a63943882.css') }}" rel="stylesheet"
         media="all" />
     <link rel="stylesheet" href="{{ asset('css/rey/hs-7dee7f0f93.css') }}">
      <link data-minify="1" id="rey-hs-css" type="text/css" href="{{ asset('css/rey/hs-641e3c6e93.css') }}" rel="stylesheet"
         media="all" />
     <link rel="stylesheet" href="{{ asset('css/rey/ds-8c1da74ca4.css') }}">
 @endsection


 @section('content')

     <script type="text/javascript" id="rey-instant-header" data-noptimize data-no-optimize="1" data-no-defer="1">
         (function() {
             const header = document.querySelector(".rey-siteHeader");
             if (header) {
                 document.documentElement.style.setProperty("--header-default--height", header.offsetHeight + "px");
             }
         })();
     </script>
     <div id="content" class="rey-siteContent --tpl-template-builder-php --checkout-distraction-free">

         <div class="rey-siteContainer rey-pbTemplate" data-page-el-selector="body.elementor-page-2432">
             <div class="rey-siteRow">


                 <main id="main" class="rey-siteMain --filter-panel">
                     <div data-elementor-type="wp-page" data-elementor-id="2432" class="elementor elementor-2432">
                         <section
                             class="elementor-section elementor-top-section elementor-element elementor-element-5aa20f8 elementor-section-content-middle hide-in-order-received elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                             data-id="5aa20f8" data-element_type="section">
                             <div class="elementor-container elementor-column-gap-default">
                                 <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c67d8ea"
                                     data-id="c67d8ea" data-element_type="column">
                                     <div
                                         class="elementor-column-wrap--c67d8ea elementor-widget-wrap elementor-element-populated">
                                         <div class="elementor-element elementor-element-8a30028 elementor-widget elementor-widget-heading"
                                             data-id="8a30028" data-element_type="widget"
                                             data-widget_type="heading.default">
                                             <div class="elementor-widget-container">
                                                 <h1 class="elementor-heading-title elementor-size-medium">CHECKOUT
                                                 </h1>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0f28bd2"
                                     data-id="0f28bd2" data-element_type="column">
                                     <div
                                         class="elementor-column-wrap--0f28bd2 elementor-widget-wrap elementor-element-populated">
                                         <div class="elementor-element elementor-element-c297d9a elementor-align-right elementor-widget elementor-widget-reycore-header-logo"
                                             data-id="c297d9a" data-element_type="widget"
                                             data-widget_type="reycore-header-logo.default">
                                             <div class="elementor-widget-container">

                                                 <div class="rey-logoWrapper">


                                                     <div class="rey-siteLogo">
                                                         <a href="https://demos.reytheme.com/london/" data-no-lazy="1"
                                                             data-skip-lazy="1" class="no-lazy custom-logo-link"
                                                             rel="home" itemprop="url"><img decoding="async"
                                                                 src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/logo.svg"
                                                                 data-no-lazy="1" data-skip-lazy="1"
                                                                 class="no-lazy custom-logo" alt="London Demo"
                                                                 loading="eager" /></a>
                                                     </div>

                                                 </div>
                                                 <!-- .rey-logoWrapper -->
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </section>
                         <section
                             class="elementor-section elementor-top-section elementor-element elementor-element-645a9d6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                             data-id="645a9d6" data-element_type="section">
                             <div class="elementor-container elementor-column-gap-default">
                                 <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f7d1330"
                                     data-id="f7d1330" data-element_type="column">
                                     <div
                                         class="elementor-column-wrap--f7d1330 elementor-widget-wrap elementor-element-populated">
                                         <div class="elementor-element elementor-element-a3c47e6 elementor-widget elementor-widget-reycore-wc-checkout"
                                             data-id="a3c47e6" data-element_type="widget"
                                             data-widget_type="reycore-wc-checkout.default">
                                             <div class="elementor-widget-container">

                                                 <div data-steps="yes"
                                                     class="woocommerce rey-checkoutPage --layout-custom --crumbs-default --rearr-csz    --steps --sticky-review"
                                                     data-active-step="info">
                                                     <div class="woocommerce-notices-wrapper"></div>
                                                     <div class="woocommerce-notices-wrapper"></div>
                                                     <div class="rey-checkoutPage-inner">

                                                         <form name="checkout" method="post"
                                                             class="checkout rey-checkoutPage-form woocommerce-checkout"
                                                             action="https://demos.reytheme.com/london/checkout/"
                                                             enctype="multipart/form-data">

                                                             <div class="rey-checkoutPage-crumbs">
                                                                 <ul>
                                                                     <li><a href="https://demos.reytheme.com/london/cart/"
                                                                             data-step="cart" data-number="1">Cart</a></li>
                                                                     <li><svg aria-hidden="true" role="img"
                                                                             id="rey-icon-arrow-68339244147ad"
                                                                             class="rey-icon rey-icon-arrow --to-right"
                                                                             viewbox="0 0 22 13">
                                                                             <style type="text/css">
                                                                                 .rey-icon-arrow.--to-left {
                                                                                     transform: rotate(90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-right {
                                                                                     transform: rotate(-90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-top {
                                                                                     transform: rotate(180deg);
                                                                                 }
                                                                             </style>
                                                                             <g stroke="none" stroke-width="1"
                                                                                 fill="none" fill-rule="evenodd">
                                                                                 <polygon fill="currentColor"
                                                                                     points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008">
                                                                                 </polygon>
                                                                             </g>
                                                                         </svg></li>
                                                                     <li class="--active"><a href="#"
                                                                             data-step="info"
                                                                             data-number="2">Information</a></li>
                                                                     <li><svg aria-hidden="true" role="img"
                                                                             id="rey-icon-arrow-68339244147ad"
                                                                             class="rey-icon rey-icon-arrow --to-right"
                                                                             viewbox="0 0 22 13">
                                                                             <style type="text/css">
                                                                                 .rey-icon-arrow.--to-left {
                                                                                     transform: rotate(90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-right {
                                                                                     transform: rotate(-90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-top {
                                                                                     transform: rotate(180deg);
                                                                                 }
                                                                             </style>
                                                                             <g stroke="none" stroke-width="1"
                                                                                 fill="none" fill-rule="evenodd">
                                                                                 <polygon fill="currentColor"
                                                                                     points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008">
                                                                                 </polygon>
                                                                             </g>
                                                                         </svg></li>
                                                                     <li><a href="#" data-step="shipping"
                                                                             data-number="3">Shipping</a></li>
                                                                     <li><svg aria-hidden="true" role="img"
                                                                             id="rey-icon-arrow-68339244147ad"
                                                                             class="rey-icon rey-icon-arrow --to-right"
                                                                             viewbox="0 0 22 13">
                                                                             <style type="text/css">
                                                                                 .rey-icon-arrow.--to-left {
                                                                                     transform: rotate(90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-right {
                                                                                     transform: rotate(-90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-top {
                                                                                     transform: rotate(180deg);
                                                                                 }
                                                                             </style>
                                                                             <g stroke="none" stroke-width="1"
                                                                                 fill="none" fill-rule="evenodd">
                                                                                 <polygon fill="currentColor"
                                                                                     points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008">
                                                                                 </polygon>
                                                                             </g>
                                                                         </svg></li>
                                                                     <li><a href="#" data-step="payment"
                                                                             data-number="4">Payment</a></li>
                                                                 </ul>
                                                             </div>


                                                             <input type="hidden" name="rey_checkout_layout"
                                                                 value="custom"><input type="hidden"
                                                                 name="rey_review_coupon_enable" value="yes"><input
                                                                 type="hidden" name="rey_review_coupon_toggle"
                                                                 value="yes">
                                                             <div class="__step" data-step="info">


                                                                 <h3 class="rey-checkoutPage-title">Information</h3>

                                                                 <div class="__step-main">

                                                                     <div class="form-row-wrapper __email">

                                                                         <p class="form-row form-row-wide validate-required validate-email"
                                                                             id="billing_email_field" data-priority="110">
                                                                             <label for="billing_email"
                                                                                 class="required_field">Email
                                                                                 address&nbsp;<span class="required"
                                                                                     aria-hidden="true">*</span></label><span
                                                                                 class="woocommerce-input-wrapper"><input
                                                                                     type="email" class="input-text "
                                                                                     name="billing_email"
                                                                                     id="billing_email" placeholder=""
                                                                                     value="emibank@gmail.com"
                                                                                     aria-required="true"
                                                                                     autocomplete="email" /></span>
                                                                         </p>

                                                                     </div>


                                                                     <div class="woocommerce-shipping-fields ">


                                                                         <h3 class="rey-checkoutPage-title">Shipping
                                                                             address</h3>



                                                                         <div
                                                                             class="woocommerce-shipping-fields__field-wrapper ">
                                                                             <p class="form-row form-row-first validate-required"
                                                                                 id="shipping_first_name_field"
                                                                                 data-priority="10"><label
                                                                                     for="shipping_first_name"
                                                                                     class="required_field">First
                                                                                     name&nbsp;<span class="required"
                                                                                         aria-hidden="true">*</span></label><span
                                                                                     class="woocommerce-input-wrapper"><input
                                                                                         type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_first_name"
                                                                                         id="shipping_first_name"
                                                                                         placeholder="" value="Dubai Emit"
                                                                                         aria-required="true"
                                                                                         autocomplete="given-name" /></span>
                                                                             </p>
                                                                             <p class="form-row form-row-last validate-required"
                                                                                 id="shipping_last_name_field"
                                                                                 data-priority="20"><label
                                                                                     for="shipping_last_name"
                                                                                     class="required_field">Last
                                                                                     name&nbsp;<span class="required"
                                                                                         aria-hidden="true">*</span></label><span
                                                                                     class="woocommerce-input-wrapper"><input
                                                                                         type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_last_name"
                                                                                         id="shipping_last_name"
                                                                                         placeholder="" value="sammy"
                                                                                         aria-required="true"
                                                                                         autocomplete="family-name" /></span>
                                                                             </p>
                                                                             <p class="form-row form-row-wide"
                                                                                 id="shipping_company_field"
                                                                                 data-priority="30"><label
                                                                                     for="shipping_company"
                                                                                     class="">Company
                                                                                     name&nbsp;<span
                                                                                         class="optional">(optional)</span></label><span
                                                                                     class="woocommerce-input-wrapper"><input
                                                                                         type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_company"
                                                                                         id="shipping_company"
                                                                                         placeholder="" value=""
                                                                                         autocomplete="organization" /></span>
                                                                             </p>
                                                                             <p class="form-row form-row-wide address-field validate-required"
                                                                                 id="shipping_address_1_field"
                                                                                 data-priority="50"><label
                                                                                     for="shipping_address_1"
                                                                                     class="required_field">Street
                                                                                     address&nbsp;<span class="required"
                                                                                         aria-hidden="true">*</span></label><span
                                                                                     class="woocommerce-input-wrapper"><input
                                                                                         type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_address_1"
                                                                                         id="shipping_address_1"
                                                                                         placeholder="House number and street name"
                                                                                         value="no 34 jahi 1, dubi"
                                                                                         aria-required="true"
                                                                                         autocomplete="address-line1" /></span>
                                                                             </p>
                                                                             <p class="form-row form-row-wide address-field"
                                                                                 id="shipping_address_2_field"
                                                                                 data-priority="60"><label
                                                                                     for="shipping_address_2"
                                                                                     class="screen-reader-text">Apartment,
                                                                                     suite, unit, etc.&nbsp;<span
                                                                                         class="optional">(optional)</span></label><span
                                                                                     class="woocommerce-input-wrapper"><input
                                                                                         type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_address_2"
                                                                                         id="shipping_address_2"
                                                                                         placeholder="Apartment, suite, unit, etc. (optional)"
                                                                                         value="Block 3"
                                                                                         autocomplete="address-line2" /></span>
                                                                             </p>
                                                                             <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                                                 id="shipping_country_field"
                                                                                 data-priority="65"><label
                                                                                     for="shipping_country"
                                                                                     class="required_field">Country
                                                                                     / Region&nbsp;<span class="required"
                                                                                         aria-hidden="true">*</span></label><span
                                                                                     class="woocommerce-input-wrapper"><select
                                                                                         name="shipping_country"
                                                                                         id="shipping_country"
                                                                                         class="country_to_state country_select "
                                                                                         aria-required="true"
                                                                                         autocomplete="country"
                                                                                         data-placeholder="Select a country / region&hellip;"
                                                                                         data-label="Country / Region">
                                                                                         <option value="">
                                                                                             Select a country /
                                                                                             region&hellip;</option>
                                                                                         <option value="AF">
                                                                                             Afghanistan</option>
                                                                                         <option value="AX">
                                                                                             Åland Islands</option>
                                                                                         <option value="AL">
                                                                                             Albania</option>
                                                                                         <option value="DZ">
                                                                                             Algeria</option>
                                                                                         <option value="AS">
                                                                                             American Samoa</option>
                                                                                         <option value="AD">
                                                                                             Andorra</option>
                                                                                         <option value="AO">
                                                                                             Angola</option>
                                                                                         <option value="AI">
                                                                                             Anguilla</option>
                                                                                         <option value="AQ">
                                                                                             Antarctica</option>
                                                                                         <option value="AG">
                                                                                             Antigua and Barbuda
                                                                                         </option>
                                                                                         <option value="AR">
                                                                                             Argentina</option>
                                                                                         <option value="AM">
                                                                                             Armenia</option>
                                                                                         <option value="AW">
                                                                                             Aruba</option>
                                                                                         <option value="AU">
                                                                                             Australia</option>
                                                                                         <option value="AT">
                                                                                             Austria</option>
                                                                                         <option value="AZ">
                                                                                             Azerbaijan</option>
                                                                                         <option value="BS">
                                                                                             Bahamas</option>
                                                                                         <option value="BH">
                                                                                             Bahrain</option>
                                                                                         <option value="BD">
                                                                                             Bangladesh</option>
                                                                                         <option value="BB">
                                                                                             Barbados</option>
                                                                                         <option value="BY">
                                                                                             Belarus</option>
                                                                                         <option value="PW">
                                                                                             Belau</option>
                                                                                         <option value="BE">
                                                                                             Belgium</option>
                                                                                         <option value="BZ">
                                                                                             Belize</option>
                                                                                         <option value="BJ">
                                                                                             Benin</option>
                                                                                         <option value="BM">
                                                                                             Bermuda</option>
                                                                                         <option value="BT">
                                                                                             Bhutan</option>
                                                                                         <option value="BO">
                                                                                             Bolivia</option>
                                                                                         <option value="BQ">
                                                                                             Bonaire, Saint Eustatius
                                                                                             and Saba</option>
                                                                                         <option value="BA">
                                                                                             Bosnia and Herzegovina
                                                                                         </option>
                                                                                         <option value="BW">
                                                                                             Botswana</option>
                                                                                         <option value="BV">
                                                                                             Bouvet Island</option>
                                                                                         <option value="BR">
                                                                                             Brazil</option>
                                                                                         <option value="IO">
                                                                                             British Indian Ocean
                                                                                             Territory</option>
                                                                                         <option value="BN">
                                                                                             Brunei</option>
                                                                                         <option value="BG">
                                                                                             Bulgaria</option>
                                                                                         <option value="BF">
                                                                                             Burkina Faso</option>
                                                                                         <option value="BI">
                                                                                             Burundi</option>
                                                                                         <option value="KH">
                                                                                             Cambodia</option>
                                                                                         <option value="CM">
                                                                                             Cameroon</option>
                                                                                         <option value="CA">
                                                                                             Canada</option>
                                                                                         <option value="CV">Cape
                                                                                             Verde</option>
                                                                                         <option value="KY">
                                                                                             Cayman Islands</option>
                                                                                         <option value="CF">
                                                                                             Central African Republic
                                                                                         </option>
                                                                                         <option value="TD">Chad
                                                                                         </option>
                                                                                         <option value="CL">
                                                                                             Chile</option>
                                                                                         <option value="CN">
                                                                                             China</option>
                                                                                         <option value="CX">
                                                                                             Christmas Island
                                                                                         </option>
                                                                                         <option value="CC">
                                                                                             Cocos (Keeling) Islands
                                                                                         </option>
                                                                                         <option value="CO">
                                                                                             Colombia</option>
                                                                                         <option value="KM">
                                                                                             Comoros</option>
                                                                                         <option value="CG">
                                                                                             Congo (Brazzaville)
                                                                                         </option>
                                                                                         <option value="CD">
                                                                                             Congo (Kinshasa)
                                                                                         </option>
                                                                                         <option value="CK">Cook
                                                                                             Islands</option>
                                                                                         <option value="CR">
                                                                                             Costa Rica</option>
                                                                                         <option value="HR">
                                                                                             Croatia</option>
                                                                                         <option value="CU">Cuba
                                                                                         </option>
                                                                                         <option value="CW">
                                                                                             Cura&ccedil;ao</option>
                                                                                         <option value="CY">
                                                                                             Cyprus</option>
                                                                                         <option value="CZ">
                                                                                             Czech Republic</option>
                                                                                         <option value="DK">
                                                                                             Denmark</option>
                                                                                         <option value="DJ">
                                                                                             Djibouti</option>
                                                                                         <option value="DM">
                                                                                             Dominica</option>
                                                                                         <option value="DO">
                                                                                             Dominican Republic
                                                                                         </option>
                                                                                         <option value="EC">
                                                                                             Ecuador</option>
                                                                                         <option value="EG">
                                                                                             Egypt</option>
                                                                                         <option value="SV">El
                                                                                             Salvador</option>
                                                                                         <option value="GQ">
                                                                                             Equatorial Guinea
                                                                                         </option>
                                                                                         <option value="ER">
                                                                                             Eritrea</option>
                                                                                         <option value="EE">
                                                                                             Estonia</option>
                                                                                         <option value="SZ">
                                                                                             Eswatini</option>
                                                                                         <option value="ET">
                                                                                             Ethiopia</option>
                                                                                         <option value="FK">
                                                                                             Falkland Islands
                                                                                         </option>
                                                                                         <option value="FO">
                                                                                             Faroe Islands</option>
                                                                                         <option value="FJ">Fiji
                                                                                         </option>
                                                                                         <option value="FI">
                                                                                             Finland</option>
                                                                                         <option value="FR">
                                                                                             France</option>
                                                                                         <option value="GF">
                                                                                             French Guiana</option>
                                                                                         <option value="PF">
                                                                                             French Polynesia
                                                                                         </option>
                                                                                         <option value="TF">
                                                                                             French Southern
                                                                                             Territories</option>
                                                                                         <option value="GA">
                                                                                             Gabon</option>
                                                                                         <option value="GM">
                                                                                             Gambia</option>
                                                                                         <option value="GE">
                                                                                             Georgia</option>
                                                                                         <option value="DE">
                                                                                             Germany</option>
                                                                                         <option value="GH">
                                                                                             Ghana</option>
                                                                                         <option value="GI">
                                                                                             Gibraltar</option>
                                                                                         <option value="GR">
                                                                                             Greece</option>
                                                                                         <option value="GL">
                                                                                             Greenland</option>
                                                                                         <option value="GD">
                                                                                             Grenada</option>
                                                                                         <option value="GP">
                                                                                             Guadeloupe</option>
                                                                                         <option value="GU">Guam
                                                                                         </option>
                                                                                         <option value="GT">
                                                                                             Guatemala</option>
                                                                                         <option value="GG">
                                                                                             Guernsey</option>
                                                                                         <option value="GN">
                                                                                             Guinea</option>
                                                                                         <option value="GW">
                                                                                             Guinea-Bissau</option>
                                                                                         <option value="GY">
                                                                                             Guyana</option>
                                                                                         <option value="HT">
                                                                                             Haiti</option>
                                                                                         <option value="HM">
                                                                                             Heard Island and
                                                                                             McDonald Islands
                                                                                         </option>
                                                                                         <option value="HN">
                                                                                             Honduras</option>
                                                                                         <option value="HK">Hong
                                                                                             Kong</option>
                                                                                         <option value="HU">
                                                                                             Hungary</option>
                                                                                         <option value="IS">
                                                                                             Iceland</option>
                                                                                         <option value="IN">
                                                                                             India</option>
                                                                                         <option value="ID">
                                                                                             Indonesia</option>
                                                                                         <option value="IR">Iran
                                                                                         </option>
                                                                                         <option value="IQ">Iraq
                                                                                         </option>
                                                                                         <option value="IE">
                                                                                             Ireland</option>
                                                                                         <option value="IM">Isle
                                                                                             of Man</option>
                                                                                         <option value="IL">
                                                                                             Israel</option>
                                                                                         <option value="IT">
                                                                                             Italy</option>
                                                                                         <option value="CI">
                                                                                             Ivory Coast</option>
                                                                                         <option value="JM">
                                                                                             Jamaica</option>
                                                                                         <option value="JP">
                                                                                             Japan</option>
                                                                                         <option value="JE">
                                                                                             Jersey</option>
                                                                                         <option value="JO">
                                                                                             Jordan</option>
                                                                                         <option value="KZ">
                                                                                             Kazakhstan</option>
                                                                                         <option value="KE">
                                                                                             Kenya</option>
                                                                                         <option value="KI">
                                                                                             Kiribati</option>
                                                                                         <option value="KW">
                                                                                             Kuwait</option>
                                                                                         <option value="KG">
                                                                                             Kyrgyzstan</option>
                                                                                         <option value="LA">Laos
                                                                                         </option>
                                                                                         <option value="LV">
                                                                                             Latvia</option>
                                                                                         <option value="LB">
                                                                                             Lebanon</option>
                                                                                         <option value="LS">
                                                                                             Lesotho</option>
                                                                                         <option value="LR">
                                                                                             Liberia</option>
                                                                                         <option value="LY">
                                                                                             Libya</option>
                                                                                         <option value="LI">
                                                                                             Liechtenstein</option>
                                                                                         <option value="LT">
                                                                                             Lithuania</option>
                                                                                         <option value="LU">
                                                                                             Luxembourg</option>
                                                                                         <option value="MO">
                                                                                             Macao</option>
                                                                                         <option value="MG">
                                                                                             Madagascar</option>
                                                                                         <option value="MW">
                                                                                             Malawi</option>
                                                                                         <option value="MY">
                                                                                             Malaysia</option>
                                                                                         <option value="MV">
                                                                                             Maldives</option>
                                                                                         <option value="ML">Mali
                                                                                         </option>
                                                                                         <option value="MT">
                                                                                             Malta</option>
                                                                                         <option value="MH">
                                                                                             Marshall Islands
                                                                                         </option>
                                                                                         <option value="MQ">
                                                                                             Martinique</option>
                                                                                         <option value="MR">
                                                                                             Mauritania</option>
                                                                                         <option value="MU">
                                                                                             Mauritius</option>
                                                                                         <option value="YT">
                                                                                             Mayotte</option>
                                                                                         <option value="MX">
                                                                                             Mexico</option>
                                                                                         <option value="FM">
                                                                                             Micronesia</option>
                                                                                         <option value="MD">
                                                                                             Moldova</option>
                                                                                         <option value="MC">
                                                                                             Monaco</option>
                                                                                         <option value="MN">
                                                                                             Mongolia</option>
                                                                                         <option value="ME">
                                                                                             Montenegro</option>
                                                                                         <option value="MS">
                                                                                             Montserrat</option>
                                                                                         <option value="MA">
                                                                                             Morocco</option>
                                                                                         <option value="MZ">
                                                                                             Mozambique</option>
                                                                                         <option value="MM">
                                                                                             Myanmar</option>
                                                                                         <option value="NA">
                                                                                             Namibia</option>
                                                                                         <option value="NR">
                                                                                             Nauru</option>
                                                                                         <option value="NP">
                                                                                             Nepal</option>
                                                                                         <option value="NL">
                                                                                             Netherlands</option>
                                                                                         <option value="NC">New
                                                                                             Caledonia</option>
                                                                                         <option value="NZ">New
                                                                                             Zealand</option>
                                                                                         <option value="NI">
                                                                                             Nicaragua</option>
                                                                                         <option value="NE">
                                                                                             Niger</option>
                                                                                         <option value="NG"
                                                                                             selected='selected'>
                                                                                             Nigeria</option>
                                                                                         <option value="NU">Niue
                                                                                         </option>
                                                                                         <option value="NF">
                                                                                             Norfolk Island</option>
                                                                                         <option value="KP">
                                                                                             North Korea</option>
                                                                                         <option value="MK">
                                                                                             North Macedonia</option>
                                                                                         <option value="MP">
                                                                                             Northern Mariana Islands
                                                                                         </option>
                                                                                         <option value="NO">
                                                                                             Norway</option>
                                                                                         <option value="OM">Oman
                                                                                         </option>
                                                                                         <option value="PK">
                                                                                             Pakistan</option>
                                                                                         <option value="PS">
                                                                                             Palestinian Territory
                                                                                         </option>
                                                                                         <option value="PA">
                                                                                             Panama</option>
                                                                                         <option value="PG">
                                                                                             Papua New Guinea
                                                                                         </option>
                                                                                         <option value="PY">
                                                                                             Paraguay</option>
                                                                                         <option value="PE">Peru
                                                                                         </option>
                                                                                         <option value="PH">
                                                                                             Philippines</option>
                                                                                         <option value="PN">
                                                                                             Pitcairn</option>
                                                                                         <option value="PL">
                                                                                             Poland</option>
                                                                                         <option value="PT">
                                                                                             Portugal</option>
                                                                                         <option value="PR">
                                                                                             Puerto Rico</option>
                                                                                         <option value="QA">
                                                                                             Qatar</option>
                                                                                         <option value="RE">
                                                                                             Reunion</option>
                                                                                         <option value="RO">
                                                                                             Romania</option>
                                                                                         <option value="RU">
                                                                                             Russia</option>
                                                                                         <option value="RW">
                                                                                             Rwanda</option>
                                                                                         <option value="ST">
                                                                                             S&atilde;o Tom&eacute;
                                                                                             and Pr&iacute;ncipe
                                                                                         </option>
                                                                                         <option value="BL">
                                                                                             Saint Barth&eacute;lemy
                                                                                         </option>
                                                                                         <option value="SH">
                                                                                             Saint Helena</option>
                                                                                         <option value="KN">
                                                                                             Saint Kitts and Nevis
                                                                                         </option>
                                                                                         <option value="LC">
                                                                                             Saint Lucia</option>
                                                                                         <option value="SX">
                                                                                             Saint Martin (Dutch
                                                                                             part)</option>
                                                                                         <option value="MF">
                                                                                             Saint Martin (French
                                                                                             part)</option>
                                                                                         <option value="PM">
                                                                                             Saint Pierre and
                                                                                             Miquelon</option>
                                                                                         <option value="VC">
                                                                                             Saint Vincent and the
                                                                                             Grenadines</option>
                                                                                         <option value="WS">
                                                                                             Samoa</option>
                                                                                         <option value="SM">San
                                                                                             Marino</option>
                                                                                         <option value="SA">
                                                                                             Saudi Arabia</option>
                                                                                         <option value="SN">
                                                                                             Senegal</option>
                                                                                         <option value="RS">
                                                                                             Serbia</option>
                                                                                         <option value="SC">
                                                                                             Seychelles</option>
                                                                                         <option value="SL">
                                                                                             Sierra Leone</option>
                                                                                         <option value="SG">
                                                                                             Singapore</option>
                                                                                         <option value="SK">
                                                                                             Slovakia</option>
                                                                                         <option value="SI">
                                                                                             Slovenia</option>
                                                                                         <option value="SB">
                                                                                             Solomon Islands</option>
                                                                                         <option value="SO">
                                                                                             Somalia</option>
                                                                                         <option value="ZA">
                                                                                             South Africa</option>
                                                                                         <option value="GS">
                                                                                             South Georgia/Sandwich
                                                                                             Islands</option>
                                                                                         <option value="KR">
                                                                                             South Korea</option>
                                                                                         <option value="SS">
                                                                                             South Sudan</option>
                                                                                         <option value="ES">
                                                                                             Spain</option>
                                                                                         <option value="LK">Sri
                                                                                             Lanka</option>
                                                                                         <option value="SD">
                                                                                             Sudan</option>
                                                                                         <option value="SR">
                                                                                             Suriname</option>
                                                                                         <option value="SJ">
                                                                                             Svalbard and Jan Mayen
                                                                                         </option>
                                                                                         <option value="SE">
                                                                                             Sweden</option>
                                                                                         <option value="CH">
                                                                                             Switzerland</option>
                                                                                         <option value="SY">
                                                                                             Syria</option>
                                                                                         <option value="TW">
                                                                                             Taiwan</option>
                                                                                         <option value="TJ">
                                                                                             Tajikistan</option>
                                                                                         <option value="TZ">
                                                                                             Tanzania</option>
                                                                                         <option value="TH">
                                                                                             Thailand</option>
                                                                                         <option value="TL">
                                                                                             Timor-Leste</option>
                                                                                         <option value="TG">Togo
                                                                                         </option>
                                                                                         <option value="TK">
                                                                                             Tokelau</option>
                                                                                         <option value="TO">
                                                                                             Tonga</option>
                                                                                         <option value="TT">
                                                                                             Trinidad and Tobago
                                                                                         </option>
                                                                                         <option value="TN">
                                                                                             Tunisia</option>
                                                                                         <option value="TR">
                                                                                             Turkey</option>
                                                                                         <option value="TM">
                                                                                             Turkmenistan</option>
                                                                                         <option value="TC">
                                                                                             Turks and Caicos Islands
                                                                                         </option>
                                                                                         <option value="TV">
                                                                                             Tuvalu</option>
                                                                                         <option value="UG">
                                                                                             Uganda</option>
                                                                                         <option value="UA">
                                                                                             Ukraine</option>
                                                                                         <option value="AE">
                                                                                             United Arab Emirates
                                                                                         </option>
                                                                                         <option value="GB">
                                                                                             United Kingdom (UK)
                                                                                         </option>
                                                                                         <option value="US">
                                                                                             United States (US)
                                                                                         </option>
                                                                                         <option value="UM">
                                                                                             United States (US) Minor
                                                                                             Outlying Islands
                                                                                         </option>
                                                                                         <option value="UY">
                                                                                             Uruguay</option>
                                                                                         <option value="UZ">
                                                                                             Uzbekistan</option>
                                                                                         <option value="VU">
                                                                                             Vanuatu</option>
                                                                                         <option value="VA">
                                                                                             Vatican</option>
                                                                                         <option value="VE">
                                                                                             Venezuela</option>
                                                                                         <option value="VN">
                                                                                             Vietnam</option>
                                                                                         <option value="VG">
                                                                                             Virgin Islands (British)
                                                                                         </option>
                                                                                         <option value="VI">
                                                                                             Virgin Islands (US)
                                                                                         </option>
                                                                                         <option value="WF">
                                                                                             Wallis and Futuna
                                                                                         </option>
                                                                                         <option value="EH">
                                                                                             Western Sahara</option>
                                                                                         <option value="YE">
                                                                                             Yemen</option>
                                                                                         <option value="ZM">
                                                                                             Zambia</option>
                                                                                         <option value="ZW">
                                                                                             Zimbabwe</option>
                                                                                         &nbsp;<span class="required"
                                                                                             aria-hidden="true">*</span>
                                                                                     </select><noscript><button
                                                                                             type="submit"
                                                                                             name="woocommerce_checkout_update_totals"
                                                                                             value="Update country / region">Update
                                                                                             country /
                                                                                             region</button></noscript></span>
                                                                             </p>
                                                                             <p class="form-row form-row-wide address-field validate-required"
                                                                                 id="shipping_city_field"
                                                                                 data-priority="70"><label
                                                                                     for="shipping_city"
                                                                                     class="required_field">Town /
                                                                                     City&nbsp;<span class="required"
                                                                                         aria-hidden="true">*</span></label><span
                                                                                     class="woocommerce-input-wrapper"><input
                                                                                         type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_city"
                                                                                         id="shipping_city" placeholder=""
                                                                                         value="Jabi"
                                                                                         aria-required="true"
                                                                                         autocomplete="address-level2" /></span>
                                                                             </p>
                                                                             <p class="form-row form-row-wide address-field validate-required validate-state"
                                                                                 id="shipping_state_field"
                                                                                 data-priority="80"><label
                                                                                     for="shipping_state"
                                                                                     class="required_field">State&nbsp;<span
                                                                                         class="required"
                                                                                         aria-hidden="true">*</span></label><span
                                                                                     class="woocommerce-input-wrapper"><select
                                                                                         name="shipping_state"
                                                                                         id="shipping_state"
                                                                                         class="state_select "
                                                                                         aria-required="true"
                                                                                         autocomplete="address-level1"
                                                                                         data-placeholder="Select an option&hellip;"
                                                                                         data-input-classes=""
                                                                                         data-label="State">
                                                                                         <option value="">
                                                                                             Select an option&hellip;
                                                                                         </option>
                                                                                         <option value="AB">Abia
                                                                                         </option>
                                                                                         <option value="FC">
                                                                                             Abuja</option>
                                                                                         <option value="AD">
                                                                                             Adamawa</option>
                                                                                         <option value="AK">Akwa
                                                                                             Ibom</option>
                                                                                         <option value="AN">
                                                                                             Anambra</option>
                                                                                         <option value="BA">
                                                                                             Bauchi</option>
                                                                                         <option value="BY">
                                                                                             Bayelsa</option>
                                                                                         <option value="BE">
                                                                                             Benue</option>
                                                                                         <option value="BO">
                                                                                             Borno</option>
                                                                                         <option value="CR">
                                                                                             Cross River</option>
                                                                                         <option value="DE"
                                                                                             selected='selected'>
                                                                                             Delta</option>
                                                                                         <option value="EB">
                                                                                             Ebonyi</option>
                                                                                         <option value="ED">Edo
                                                                                         </option>
                                                                                         <option value="EK">
                                                                                             Ekiti</option>
                                                                                         <option value="EN">
                                                                                             Enugu</option>
                                                                                         <option value="GO">
                                                                                             Gombe</option>
                                                                                         <option value="IM">Imo
                                                                                         </option>
                                                                                         <option value="JI">
                                                                                             Jigawa</option>
                                                                                         <option value="KD">
                                                                                             Kaduna</option>
                                                                                         <option value="KN">Kano
                                                                                         </option>
                                                                                         <option value="KT">
                                                                                             Katsina</option>
                                                                                         <option value="KE">
                                                                                             Kebbi</option>
                                                                                         <option value="KO">Kogi
                                                                                         </option>
                                                                                         <option value="KW">
                                                                                             Kwara</option>
                                                                                         <option value="LA">
                                                                                             Lagos</option>
                                                                                         <option value="NA">
                                                                                             Nasarawa</option>
                                                                                         <option value="NI">
                                                                                             Niger</option>
                                                                                         <option value="OG">Ogun
                                                                                         </option>
                                                                                         <option value="ON">Ondo
                                                                                         </option>
                                                                                         <option value="OS">Osun
                                                                                         </option>
                                                                                         <option value="OY">Oyo
                                                                                         </option>
                                                                                         <option value="PL">
                                                                                             Plateau</option>
                                                                                         <option value="RI">
                                                                                             Rivers</option>
                                                                                         <option value="SO">
                                                                                             Sokoto</option>
                                                                                         <option value="TA">
                                                                                             Taraba</option>
                                                                                         <option value="YO">Yobe
                                                                                         </option>
                                                                                         <option value="ZA">
                                                                                             Zamfara</option>
                                                                                     </select></span></p>
                                                                             <p class="form-row form-row-wide address-field validate-postcode"
                                                                                 id="shipping_postcode_field"
                                                                                 data-priority="90"><label
                                                                                     for="shipping_postcode"
                                                                                     class="">Postcode&nbsp;<span
                                                                                         class="optional">(optional)</span></label><span
                                                                                     class="woocommerce-input-wrapper"><input
                                                                                         type="text"
                                                                                         class="input-text "
                                                                                         name="shipping_postcode"
                                                                                         id="shipping_postcode"
                                                                                         placeholder="" value="003156"
                                                                                         autocomplete="postal-code" /></span>
                                                                             </p>
                                                                             <p class="form-row form-row-wide validate-required validate-phone"
                                                                                 id="shipping_phone_field"
                                                                                 data-priority="100"><label
                                                                                     for="shipping_phone"
                                                                                     class="required_field">Phone&nbsp;<span
                                                                                         class="required"
                                                                                         aria-hidden="true">*</span></label><span
                                                                                     class="woocommerce-input-wrapper"><input
                                                                                         type="tel"
                                                                                         class="input-text "
                                                                                         name="shipping_phone"
                                                                                         id="shipping_phone"
                                                                                         placeholder=""
                                                                                         value="+44903232233"
                                                                                         aria-required="true"
                                                                                         autocomplete="tel"
                                                                                         aria-describedby="shipping_phone-description" /><span
                                                                                         class="description"
                                                                                         id="shipping_phone-description"
                                                                                         aria-hidden="true">In case
                                                                                         we need to contact you about
                                                                                         your order.</span></span>
                                                                             </p>
                                                                         </div>


                                                                     </div>
                                                                     <wc-order-attribution-inputs></wc-order-attribution-inputs>
                                                                 </div>

                                                                 <div class="__step-footer">
                                                                     <a href="https://demos.reytheme.com/london/cart/"
                                                                         class="btn btn-line __step-back">
                                                                         <svg aria-hidden="true" role="img"
                                                                             id="rey-icon-arrow-6833924415073"
                                                                             class="rey-icon rey-icon-arrow --to-left"
                                                                             viewbox="0 0 22 13">
                                                                             <style type="text/css">
                                                                                 .rey-icon-arrow.--to-left {
                                                                                     transform: rotate(90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-right {
                                                                                     transform: rotate(-90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-top {
                                                                                     transform: rotate(180deg);
                                                                                 }
                                                                             </style>
                                                                             <g stroke="none" stroke-width="1"
                                                                                 fill="none" fill-rule="evenodd">
                                                                                 <polygon fill="currentColor"
                                                                                     points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008">
                                                                                 </polygon>
                                                                             </g>
                                                                         </svg> <span>Return to Cart</span>
                                                                     </a>
                                                                     <a href="#" class="btn btn-primary __step-fwd">
                                                                         Continue to shipping &nbsp;&nbsp;<svg
                                                                             aria-hidden="true" role="img"
                                                                             id="rey-icon-arrow-68339244145ee"
                                                                             class="rey-icon rey-icon-arrow --to-right"
                                                                             viewbox="0 0 22 13">
                                                                             <style type="text/css">
                                                                                 .rey-icon-arrow.--to-left {
                                                                                     transform: rotate(90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-right {
                                                                                     transform: rotate(-90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-top {
                                                                                     transform: rotate(180deg);
                                                                                 }
                                                                             </style>
                                                                             <g stroke="none" stroke-width="1"
                                                                                 fill="none" fill-rule="evenodd">
                                                                                 <polygon fill="currentColor"
                                                                                     points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008">
                                                                                 </polygon>
                                                                             </g>
                                                                         </svg> </a>
                                                                 </div>

                                                             </div>
                                                             <!-- End Information -->

                                                             <div class="__step" data-step="shipping">

                                                                 <div class="rey-formReview">
                                                                     <div class="rey-formReview-block rey-formReview-block--email"
                                                                         data-type="email">
                                                                         <div class="rey-formReview-title">
                                                                             Contact </div>
                                                                         <div class="rey-formReview-content"
                                                                             data-fill="email">
                                                                             <div class="rey-formReview-content--email">
                                                                             </div>
                                                                         </div>
                                                                         <div class="rey-formReview-action">
                                                                             <a href="#" data-target="info">
                                                                                 Change </a>
                                                                         </div>
                                                                     </div>
                                                                     <div class="rey-formReview-block rey-formReview-block--address_ship"
                                                                         data-type="address_ship">
                                                                         <div class="rey-formReview-title">
                                                                             Ship to </div>
                                                                         <div class="rey-formReview-content"
                                                                             data-fill="address_ship">
                                                                             <div
                                                                                 class="rey-formReview-content--address_ship">
                                                                             </div>
                                                                         </div>
                                                                         <div class="rey-formReview-action">
                                                                             <a href="#" data-target="info">
                                                                                 Change </a>
                                                                         </div>
                                                                     </div>
                                                                 </div>

                                                                 <div class="__step-main">




                                                                     <div class="rey-checkout-shipping">


                                                                         <h3 class="rey-checkoutPage-title">Shipping
                                                                             Method</h3>


                                                                         <table class="rey-checkout-shippingMethods">
                                                                             <tr
                                                                                 class="woocommerce-shipping-totals shipping">
                                                                                 <th>Shipping</th>
                                                                                 <td data-title="Shipping">
                                                                                     <ul id="shipping_method"
                                                                                         class="woocommerce-shipping-methods">
                                                                                         <li>
                                                                                             <input type="hidden"
                                                                                                 name="shipping_method[0]"
                                                                                                 data-index="0"
                                                                                                 id="shipping_method_0_flat_rate2"
                                                                                                 value="flat_rate:2"
                                                                                                 class="shipping_method" /><label
                                                                                                 for="shipping_method_0_flat_rate2">Flat
                                                                                                 rate: <span
                                                                                                     class="woocommerce-Price-amount amount"><bdi><span
                                                                                                             class="woocommerce-Price-currencySymbol">&#36;</span>30.00</bdi></span></label>
                                                                                         </li>
                                                                                     </ul>


                                                                                 </td>
                                                                             </tr>
                                                                         </table>



                                                                     </div>

                                                                     <div class="woocommerce-additional-fields">




                                                                         <div
                                                                             class="woocommerce-additional-fields__field-wrapper">
                                                                             <p class="form-row notes"
                                                                                 id="order_comments_field"
                                                                                 data-priority=""><label
                                                                                     for="order_comments"
                                                                                     class="">Order
                                                                                     notes&nbsp;<span
                                                                                         class="optional">(optional)</span></label><span
                                                                                     class="woocommerce-input-wrapper">
                                                                                     <textarea name="order_comments" class="input-text " id="order_comments"
                                                                                         placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                                                                 </span></p>
                                                                         </div>


                                                                     </div>
                                                                 </div>

                                                                 <div class="__step-footer">
                                                                     <a href="#" class="btn btn-line __step-back">
                                                                         <svg aria-hidden="true" role="img"
                                                                             id="rey-icon-arrow-6833924415530"
                                                                             class="rey-icon rey-icon-arrow --to-left"
                                                                             viewbox="0 0 22 13">
                                                                             <style type="text/css">
                                                                                 .rey-icon-arrow.--to-left {
                                                                                     transform: rotate(90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-right {
                                                                                     transform: rotate(-90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-top {
                                                                                     transform: rotate(180deg);
                                                                                 }
                                                                             </style>
                                                                             <g stroke="none" stroke-width="1"
                                                                                 fill="none" fill-rule="evenodd">
                                                                                 <polygon fill="currentColor"
                                                                                     points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008">
                                                                                 </polygon>
                                                                             </g>
                                                                         </svg> <span>Return to Information</span>
                                                                     </a>
                                                                     <a href="#" class="btn btn-primary __step-fwd">
                                                                         Continue to payment &nbsp;&nbsp;<svg
                                                                             aria-hidden="true" role="img"
                                                                             id="rey-icon-arrow-68339244145ee"
                                                                             class="rey-icon rey-icon-arrow --to-right"
                                                                             viewbox="0 0 22 13">
                                                                             <style type="text/css">
                                                                                 .rey-icon-arrow.--to-left {
                                                                                     transform: rotate(90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-right {
                                                                                     transform: rotate(-90deg) scale(0.7);
                                                                                 }

                                                                                 .rey-icon-arrow.--to-top {
                                                                                     transform: rotate(180deg);
                                                                                 }
                                                                             </style>
                                                                             <g stroke="none" stroke-width="1"
                                                                                 fill="none" fill-rule="evenodd">
                                                                                 <polygon fill="currentColor"
                                                                                     points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008">
                                                                                 </polygon>
                                                                             </g>
                                                                         </svg> </a>
                                                                 </div>

                                                             </div>
                                                             <!-- End Shipping ( & Additional fields) -->


                                                             <div class="rey-customerDetails-payment __step"
                                                                 data-step="payment">

                                                                 <div class="rey-formReview">
                                                                     <div class="rey-formReview-block rey-formReview-block--email"
                                                                         data-type="email">
                                                                         <div class="rey-formReview-title">
                                                                             Contact </div>
                                                                         <div class="rey-formReview-content"
                                                                             data-fill="email">
                                                                             <div class="rey-formReview-content--email">
                                                                             </div>
                                                                         </div>
                                                                         <div class="rey-formReview-action">
                                                                             <a href="#" data-target="info">
                                                                                 Change </a>
                                                                         </div>
                                                                     </div>
                                                                     <div class="rey-formReview-block rey-formReview-block--address_ship"
                                                                         data-type="address_ship">
                                                                         <div class="rey-formReview-title">
                                                                             Ship to </div>
                                                                         <div class="rey-formReview-content"
                                                                             data-fill="address_ship">
                                                                             <div
                                                                                 class="rey-formReview-content--address_ship">
                                                                             </div>
                                                                         </div>
                                                                         <div class="rey-formReview-action">
                                                                             <a href="#" data-target="info">
                                                                                 Change </a>
                                                                         </div>
                                                                     </div>
                                                                     <div class="rey-formReview-block rey-formReview-block--method"
                                                                         data-type="method">
                                                                         <div class="rey-formReview-title">
                                                                             Method </div>
                                                                         <div class="rey-formReview-content"
                                                                             data-fill="method">
                                                                             <div class="rey-formReview-content--method">
                                                                             </div>
                                                                         </div>
                                                                         <div class="rey-formReview-action">
                                                                             <a href="#" data-target="shipping">
                                                                                 Change </a>
                                                                         </div>
                                                                     </div>
                                                                 </div>

                                                                 <div class="rey-checkoutDetails-billing">

                                                                     <h3 class="rey-checkoutPage-title">Billing
                                                                         details</h3>

                                                                     <div
                                                                         class="rey-checkoutChoose rey-checkoutBilling-choose">

                                                                         <div
                                                                             class="rey-checkoutChoose-item rey-checkoutBilling-chooseItem">
                                                                             <div class="rey-form-radio">
                                                                                 <input class="input-radio" type="radio"
                                                                                     value="same" checked="checked"
                                                                                     id="checkout_same"
                                                                                     name="rey_billing_type">
                                                                                 <label for="checkout_same">Same as
                                                                                     shipping address</label>
                                                                             </div>
                                                                         </div>

                                                                         <div
                                                                             class="rey-checkoutChoose-item rey-checkoutBilling-chooseItem">
                                                                             <div class="rey-form-radio">
                                                                                 <input class="input-radio" type="radio"
                                                                                     value="different"
                                                                                     id="checkout_different"
                                                                                     name="rey_billing_type">
                                                                                 <label for="checkout_different">Use
                                                                                     a different billing
                                                                                     address</label>
                                                                             </div>
                                                                         </div>

                                                                         <div class="woocommerce-billing-fields">


                                                                             <div
                                                                                 class="woocommerce-billing-fields__field-wrapper clearfix">
                                                                                 <p class="form-row form-row-first validate-required"
                                                                                     id="billing_first_name_field"
                                                                                     data-priority="10"><label
                                                                                         for="billing_first_name"
                                                                                         class="required_field">First
                                                                                         name&nbsp;<span class="required"
                                                                                             aria-hidden="true">*</span></label><span
                                                                                         class="woocommerce-input-wrapper"><input
                                                                                             type="text"
                                                                                             class="input-text "
                                                                                             name="billing_first_name"
                                                                                             id="billing_first_name"
                                                                                             placeholder=""
                                                                                             value="Dubai Emit"
                                                                                             aria-required="true"
                                                                                             autocomplete="given-name" /></span>
                                                                                 </p>
                                                                                 <p class="form-row form-row-last validate-required"
                                                                                     id="billing_last_name_field"
                                                                                     data-priority="20"><label
                                                                                         for="billing_last_name"
                                                                                         class="required_field">Last
                                                                                         name&nbsp;<span class="required"
                                                                                             aria-hidden="true">*</span></label><span
                                                                                         class="woocommerce-input-wrapper"><input
                                                                                             type="text"
                                                                                             class="input-text "
                                                                                             name="billing_last_name"
                                                                                             id="billing_last_name"
                                                                                             placeholder="" value="sammy"
                                                                                             aria-required="true"
                                                                                             autocomplete="family-name" /></span>
                                                                                 </p>
                                                                                 <p class="form-row form-row-wide"
                                                                                     id="billing_company_field"
                                                                                     data-priority="30"><label
                                                                                         for="billing_company"
                                                                                         class="">Company
                                                                                         name&nbsp;<span
                                                                                             class="optional">(optional)</span></label><span
                                                                                         class="woocommerce-input-wrapper"><input
                                                                                             type="text"
                                                                                             class="input-text "
                                                                                             name="billing_company"
                                                                                             id="billing_company"
                                                                                             placeholder="" value=""
                                                                                             autocomplete="organization" /></span>
                                                                                 </p>
                                                                                 <p class="form-row form-row-wide address-field validate-required"
                                                                                     id="billing_address_1_field"
                                                                                     data-priority="50"><label
                                                                                         for="billing_address_1"
                                                                                         class="required_field">Street
                                                                                         address&nbsp;<span
                                                                                             class="required"
                                                                                             aria-hidden="true">*</span></label><span
                                                                                         class="woocommerce-input-wrapper"><input
                                                                                             type="text"
                                                                                             class="input-text "
                                                                                             name="billing_address_1"
                                                                                             id="billing_address_1"
                                                                                             placeholder="House number and street name"
                                                                                             value="no 34 jahi 1, dubi"
                                                                                             aria-required="true"
                                                                                             autocomplete="address-line1" /></span>
                                                                                 </p>
                                                                                 <p class="form-row form-row-wide address-field"
                                                                                     id="billing_address_2_field"
                                                                                     data-priority="60"><label
                                                                                         for="billing_address_2"
                                                                                         class="screen-reader-text">Apartment,
                                                                                         suite, unit, etc.&nbsp;<span
                                                                                             class="optional">(optional)</span></label><span
                                                                                         class="woocommerce-input-wrapper"><input
                                                                                             type="text"
                                                                                             class="input-text "
                                                                                             name="billing_address_2"
                                                                                             id="billing_address_2"
                                                                                             placeholder="Apartment, suite, unit, etc. (optional)"
                                                                                             value="Block 3"
                                                                                             autocomplete="address-line2" /></span>
                                                                                 </p>
                                                                                 <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                                                     id="billing_country_field"
                                                                                     data-priority="65"><label
                                                                                         for="billing_country"
                                                                                         class="required_field">Country
                                                                                         / Region&nbsp;<span
                                                                                             class="required"
                                                                                             aria-hidden="true">*</span></label><span
                                                                                         class="woocommerce-input-wrapper"><select
                                                                                             name="billing_country"
                                                                                             id="billing_country"
                                                                                             class="country_to_state country_select "
                                                                                             aria-required="true"
                                                                                             autocomplete="country"
                                                                                             data-placeholder="Select a country / region&hellip;"
                                                                                             data-label="Country / Region">
                                                                                             <option value="">
                                                                                                 Select a country /
                                                                                                 region&hellip;
                                                                                             </option>
                                                                                             <option value="AF">
                                                                                                 Afghanistan</option>
                                                                                             <option value="AX">
                                                                                                 Åland Islands
                                                                                             </option>
                                                                                             <option value="AL">
                                                                                                 Albania</option>
                                                                                             <option value="DZ">
                                                                                                 Algeria</option>
                                                                                             <option value="AS">
                                                                                                 American Samoa
                                                                                             </option>
                                                                                             <option value="AD">
                                                                                                 Andorra</option>
                                                                                             <option value="AO">
                                                                                                 Angola</option>
                                                                                             <option value="AI">
                                                                                                 Anguilla</option>
                                                                                             <option value="AQ">
                                                                                                 Antarctica</option>
                                                                                             <option value="AG">
                                                                                                 Antigua and Barbuda
                                                                                             </option>
                                                                                             <option value="AR">
                                                                                                 Argentina</option>
                                                                                             <option value="AM">
                                                                                                 Armenia</option>
                                                                                             <option value="AW">
                                                                                                 Aruba</option>
                                                                                             <option value="AU">
                                                                                                 Australia</option>
                                                                                             <option value="AT">
                                                                                                 Austria</option>
                                                                                             <option value="AZ">
                                                                                                 Azerbaijan</option>
                                                                                             <option value="BS">
                                                                                                 Bahamas</option>
                                                                                             <option value="BH">
                                                                                                 Bahrain</option>
                                                                                             <option value="BD">
                                                                                                 Bangladesh</option>
                                                                                             <option value="BB">
                                                                                                 Barbados</option>
                                                                                             <option value="BY">
                                                                                                 Belarus</option>
                                                                                             <option value="PW">
                                                                                                 Belau</option>
                                                                                             <option value="BE">
                                                                                                 Belgium</option>
                                                                                             <option value="BZ">
                                                                                                 Belize</option>
                                                                                             <option value="BJ">
                                                                                                 Benin</option>
                                                                                             <option value="BM">
                                                                                                 Bermuda</option>
                                                                                             <option value="BT">
                                                                                                 Bhutan</option>
                                                                                             <option value="BO">
                                                                                                 Bolivia</option>
                                                                                             <option value="BQ">
                                                                                                 Bonaire, Saint
                                                                                                 Eustatius and Saba
                                                                                             </option>
                                                                                             <option value="BA">
                                                                                                 Bosnia and
                                                                                                 Herzegovina</option>
                                                                                             <option value="BW">
                                                                                                 Botswana</option>
                                                                                             <option value="BV">
                                                                                                 Bouvet Island
                                                                                             </option>
                                                                                             <option value="BR">
                                                                                                 Brazil</option>
                                                                                             <option value="IO">
                                                                                                 British Indian Ocean
                                                                                                 Territory</option>
                                                                                             <option value="BN">
                                                                                                 Brunei</option>
                                                                                             <option value="BG">
                                                                                                 Bulgaria</option>
                                                                                             <option value="BF">
                                                                                                 Burkina Faso
                                                                                             </option>
                                                                                             <option value="BI">
                                                                                                 Burundi</option>
                                                                                             <option value="KH">
                                                                                                 Cambodia</option>
                                                                                             <option value="CM">
                                                                                                 Cameroon</option>
                                                                                             <option value="CA">
                                                                                                 Canada</option>
                                                                                             <option value="CV">
                                                                                                 Cape Verde</option>
                                                                                             <option value="KY">
                                                                                                 Cayman Islands
                                                                                             </option>
                                                                                             <option value="CF">
                                                                                                 Central African
                                                                                                 Republic</option>
                                                                                             <option value="TD">
                                                                                                 Chad</option>
                                                                                             <option value="CL">
                                                                                                 Chile</option>
                                                                                             <option value="CN">
                                                                                                 China</option>
                                                                                             <option value="CX">
                                                                                                 Christmas Island
                                                                                             </option>
                                                                                             <option value="CC">
                                                                                                 Cocos (Keeling)
                                                                                                 Islands</option>
                                                                                             <option value="CO">
                                                                                                 Colombia</option>
                                                                                             <option value="KM">
                                                                                                 Comoros</option>
                                                                                             <option value="CG">
                                                                                                 Congo (Brazzaville)
                                                                                             </option>
                                                                                             <option value="CD">
                                                                                                 Congo (Kinshasa)
                                                                                             </option>
                                                                                             <option value="CK">
                                                                                                 Cook Islands
                                                                                             </option>
                                                                                             <option value="CR">
                                                                                                 Costa Rica</option>
                                                                                             <option value="HR">
                                                                                                 Croatia</option>
                                                                                             <option value="CU">
                                                                                                 Cuba</option>
                                                                                             <option value="CW">
                                                                                                 Cura&ccedil;ao
                                                                                             </option>
                                                                                             <option value="CY">
                                                                                                 Cyprus</option>
                                                                                             <option value="CZ">
                                                                                                 Czech Republic
                                                                                             </option>
                                                                                             <option value="DK">
                                                                                                 Denmark</option>
                                                                                             <option value="DJ">
                                                                                                 Djibouti</option>
                                                                                             <option value="DM">
                                                                                                 Dominica</option>
                                                                                             <option value="DO">
                                                                                                 Dominican Republic
                                                                                             </option>
                                                                                             <option value="EC">
                                                                                                 Ecuador</option>
                                                                                             <option value="EG">
                                                                                                 Egypt</option>
                                                                                             <option value="SV">El
                                                                                                 Salvador</option>
                                                                                             <option value="GQ">
                                                                                                 Equatorial Guinea
                                                                                             </option>
                                                                                             <option value="ER">
                                                                                                 Eritrea</option>
                                                                                             <option value="EE">
                                                                                                 Estonia</option>
                                                                                             <option value="SZ">
                                                                                                 Eswatini</option>
                                                                                             <option value="ET">
                                                                                                 Ethiopia</option>
                                                                                             <option value="FK">
                                                                                                 Falkland Islands
                                                                                             </option>
                                                                                             <option value="FO">
                                                                                                 Faroe Islands
                                                                                             </option>
                                                                                             <option value="FJ">
                                                                                                 Fiji</option>
                                                                                             <option value="FI">
                                                                                                 Finland</option>
                                                                                             <option value="FR">
                                                                                                 France</option>
                                                                                             <option value="GF">
                                                                                                 French Guiana
                                                                                             </option>
                                                                                             <option value="PF">
                                                                                                 French Polynesia
                                                                                             </option>
                                                                                             <option value="TF">
                                                                                                 French Southern
                                                                                                 Territories</option>
                                                                                             <option value="GA">
                                                                                                 Gabon</option>
                                                                                             <option value="GM">
                                                                                                 Gambia</option>
                                                                                             <option value="GE">
                                                                                                 Georgia</option>
                                                                                             <option value="DE">
                                                                                                 Germany</option>
                                                                                             <option value="GH">
                                                                                                 Ghana</option>
                                                                                             <option value="GI">
                                                                                                 Gibraltar</option>
                                                                                             <option value="GR">
                                                                                                 Greece</option>
                                                                                             <option value="GL">
                                                                                                 Greenland</option>
                                                                                             <option value="GD">
                                                                                                 Grenada</option>
                                                                                             <option value="GP">
                                                                                                 Guadeloupe</option>
                                                                                             <option value="GU">
                                                                                                 Guam</option>
                                                                                             <option value="GT">
                                                                                                 Guatemala</option>
                                                                                             <option value="GG">
                                                                                                 Guernsey</option>
                                                                                             <option value="GN">
                                                                                                 Guinea</option>
                                                                                             <option value="GW">
                                                                                                 Guinea-Bissau
                                                                                             </option>
                                                                                             <option value="GY">
                                                                                                 Guyana</option>
                                                                                             <option value="HT">
                                                                                                 Haiti</option>
                                                                                             <option value="HM">
                                                                                                 Heard Island and
                                                                                                 McDonald Islands
                                                                                             </option>
                                                                                             <option value="HN">
                                                                                                 Honduras</option>
                                                                                             <option value="HK">
                                                                                                 Hong Kong</option>
                                                                                             <option value="HU">
                                                                                                 Hungary</option>
                                                                                             <option value="IS">
                                                                                                 Iceland</option>
                                                                                             <option value="IN">
                                                                                                 India</option>
                                                                                             <option value="ID">
                                                                                                 Indonesia</option>
                                                                                             <option value="IR">
                                                                                                 Iran</option>
                                                                                             <option value="IQ">
                                                                                                 Iraq</option>
                                                                                             <option value="IE">
                                                                                                 Ireland</option>
                                                                                             <option value="IM">
                                                                                                 Isle of Man</option>
                                                                                             <option value="IL">
                                                                                                 Israel</option>
                                                                                             <option value="IT">
                                                                                                 Italy</option>
                                                                                             <option value="CI">
                                                                                                 Ivory Coast</option>
                                                                                             <option value="JM">
                                                                                                 Jamaica</option>
                                                                                             <option value="JP">
                                                                                                 Japan</option>
                                                                                             <option value="JE">
                                                                                                 Jersey</option>
                                                                                             <option value="JO">
                                                                                                 Jordan</option>
                                                                                             <option value="KZ">
                                                                                                 Kazakhstan</option>
                                                                                             <option value="KE">
                                                                                                 Kenya</option>
                                                                                             <option value="KI">
                                                                                                 Kiribati</option>
                                                                                             <option value="KW">
                                                                                                 Kuwait</option>
                                                                                             <option value="KG">
                                                                                                 Kyrgyzstan</option>
                                                                                             <option value="LA">
                                                                                                 Laos</option>
                                                                                             <option value="LV">
                                                                                                 Latvia</option>
                                                                                             <option value="LB">
                                                                                                 Lebanon</option>
                                                                                             <option value="LS">
                                                                                                 Lesotho</option>
                                                                                             <option value="LR">
                                                                                                 Liberia</option>
                                                                                             <option value="LY">
                                                                                                 Libya</option>
                                                                                             <option value="LI">
                                                                                                 Liechtenstein
                                                                                             </option>
                                                                                             <option value="LT">
                                                                                                 Lithuania</option>
                                                                                             <option value="LU">
                                                                                                 Luxembourg</option>
                                                                                             <option value="MO">
                                                                                                 Macao</option>
                                                                                             <option value="MG">
                                                                                                 Madagascar</option>
                                                                                             <option value="MW">
                                                                                                 Malawi</option>
                                                                                             <option value="MY">
                                                                                                 Malaysia</option>
                                                                                             <option value="MV">
                                                                                                 Maldives</option>
                                                                                             <option value="ML">
                                                                                                 Mali</option>
                                                                                             <option value="MT">
                                                                                                 Malta</option>
                                                                                             <option value="MH">
                                                                                                 Marshall Islands
                                                                                             </option>
                                                                                             <option value="MQ">
                                                                                                 Martinique</option>
                                                                                             <option value="MR">
                                                                                                 Mauritania</option>
                                                                                             <option value="MU">
                                                                                                 Mauritius</option>
                                                                                             <option value="YT">
                                                                                                 Mayotte</option>
                                                                                             <option value="MX">
                                                                                                 Mexico</option>
                                                                                             <option value="FM">
                                                                                                 Micronesia</option>
                                                                                             <option value="MD">
                                                                                                 Moldova</option>
                                                                                             <option value="MC">
                                                                                                 Monaco</option>
                                                                                             <option value="MN">
                                                                                                 Mongolia</option>
                                                                                             <option value="ME">
                                                                                                 Montenegro</option>
                                                                                             <option value="MS">
                                                                                                 Montserrat</option>
                                                                                             <option value="MA">
                                                                                                 Morocco</option>
                                                                                             <option value="MZ">
                                                                                                 Mozambique</option>
                                                                                             <option value="MM">
                                                                                                 Myanmar</option>
                                                                                             <option value="NA">
                                                                                                 Namibia</option>
                                                                                             <option value="NR">
                                                                                                 Nauru</option>
                                                                                             <option value="NP">
                                                                                                 Nepal</option>
                                                                                             <option value="NL">
                                                                                                 Netherlands</option>
                                                                                             <option value="NC">New
                                                                                                 Caledonia</option>
                                                                                             <option value="NZ">New
                                                                                                 Zealand</option>
                                                                                             <option value="NI">
                                                                                                 Nicaragua</option>
                                                                                             <option value="NE">
                                                                                                 Niger</option>
                                                                                             <option value="NG"
                                                                                                 selected='selected'>
                                                                                                 Nigeria</option>
                                                                                             <option value="NU">
                                                                                                 Niue</option>
                                                                                             <option value="NF">
                                                                                                 Norfolk Island
                                                                                             </option>
                                                                                             <option value="KP">
                                                                                                 North Korea</option>
                                                                                             <option value="MK">
                                                                                                 North Macedonia
                                                                                             </option>
                                                                                             <option value="MP">
                                                                                                 Northern Mariana
                                                                                                 Islands</option>
                                                                                             <option value="NO">
                                                                                                 Norway</option>
                                                                                             <option value="OM">
                                                                                                 Oman</option>
                                                                                             <option value="PK">
                                                                                                 Pakistan</option>
                                                                                             <option value="PS">
                                                                                                 Palestinian
                                                                                                 Territory</option>
                                                                                             <option value="PA">
                                                                                                 Panama</option>
                                                                                             <option value="PG">
                                                                                                 Papua New Guinea
                                                                                             </option>
                                                                                             <option value="PY">
                                                                                                 Paraguay</option>
                                                                                             <option value="PE">
                                                                                                 Peru</option>
                                                                                             <option value="PH">
                                                                                                 Philippines</option>
                                                                                             <option value="PN">
                                                                                                 Pitcairn</option>
                                                                                             <option value="PL">
                                                                                                 Poland</option>
                                                                                             <option value="PT">
                                                                                                 Portugal</option>
                                                                                             <option value="PR">
                                                                                                 Puerto Rico</option>
                                                                                             <option value="QA">
                                                                                                 Qatar</option>
                                                                                             <option value="RE">
                                                                                                 Reunion</option>
                                                                                             <option value="RO">
                                                                                                 Romania</option>
                                                                                             <option value="RU">
                                                                                                 Russia</option>
                                                                                             <option value="RW">
                                                                                                 Rwanda</option>
                                                                                             <option value="ST">
                                                                                                 S&atilde;o
                                                                                                 Tom&eacute; and
                                                                                                 Pr&iacute;ncipe
                                                                                             </option>
                                                                                             <option value="BL">
                                                                                                 Saint
                                                                                                 Barth&eacute;lemy
                                                                                             </option>
                                                                                             <option value="SH">
                                                                                                 Saint Helena
                                                                                             </option>
                                                                                             <option value="KN">
                                                                                                 Saint Kitts and
                                                                                                 Nevis</option>
                                                                                             <option value="LC">
                                                                                                 Saint Lucia</option>
                                                                                             <option value="SX">
                                                                                                 Saint Martin (Dutch
                                                                                                 part)</option>
                                                                                             <option value="MF">
                                                                                                 Saint Martin (French
                                                                                                 part)</option>
                                                                                             <option value="PM">
                                                                                                 Saint Pierre and
                                                                                                 Miquelon</option>
                                                                                             <option value="VC">
                                                                                                 Saint Vincent and
                                                                                                 the Grenadines
                                                                                             </option>
                                                                                             <option value="WS">
                                                                                                 Samoa</option>
                                                                                             <option value="SM">San
                                                                                                 Marino</option>
                                                                                             <option value="SA">
                                                                                                 Saudi Arabia
                                                                                             </option>
                                                                                             <option value="SN">
                                                                                                 Senegal</option>
                                                                                             <option value="RS">
                                                                                                 Serbia</option>
                                                                                             <option value="SC">
                                                                                                 Seychelles</option>
                                                                                             <option value="SL">
                                                                                                 Sierra Leone
                                                                                             </option>
                                                                                             <option value="SG">
                                                                                                 Singapore</option>
                                                                                             <option value="SK">
                                                                                                 Slovakia</option>
                                                                                             <option value="SI">
                                                                                                 Slovenia</option>
                                                                                             <option value="SB">
                                                                                                 Solomon Islands
                                                                                             </option>
                                                                                             <option value="SO">
                                                                                                 Somalia</option>
                                                                                             <option value="ZA">
                                                                                                 South Africa
                                                                                             </option>
                                                                                             <option value="GS">
                                                                                                 South
                                                                                                 Georgia/Sandwich
                                                                                                 Islands</option>
                                                                                             <option value="KR">
                                                                                                 South Korea</option>
                                                                                             <option value="SS">
                                                                                                 South Sudan</option>
                                                                                             <option value="ES">
                                                                                                 Spain</option>
                                                                                             <option value="LK">Sri
                                                                                                 Lanka</option>
                                                                                             <option value="SD">
                                                                                                 Sudan</option>
                                                                                             <option value="SR">
                                                                                                 Suriname</option>
                                                                                             <option value="SJ">
                                                                                                 Svalbard and Jan
                                                                                                 Mayen</option>
                                                                                             <option value="SE">
                                                                                                 Sweden</option>
                                                                                             <option value="CH">
                                                                                                 Switzerland</option>
                                                                                             <option value="SY">
                                                                                                 Syria</option>
                                                                                             <option value="TW">
                                                                                                 Taiwan</option>
                                                                                             <option value="TJ">
                                                                                                 Tajikistan</option>
                                                                                             <option value="TZ">
                                                                                                 Tanzania</option>
                                                                                             <option value="TH">
                                                                                                 Thailand</option>
                                                                                             <option value="TL">
                                                                                                 Timor-Leste</option>
                                                                                             <option value="TG">
                                                                                                 Togo</option>
                                                                                             <option value="TK">
                                                                                                 Tokelau</option>
                                                                                             <option value="TO">
                                                                                                 Tonga</option>
                                                                                             <option value="TT">
                                                                                                 Trinidad and Tobago
                                                                                             </option>
                                                                                             <option value="TN">
                                                                                                 Tunisia</option>
                                                                                             <option value="TR">
                                                                                                 Turkey</option>
                                                                                             <option value="TM">
                                                                                                 Turkmenistan
                                                                                             </option>
                                                                                             <option value="TC">
                                                                                                 Turks and Caicos
                                                                                                 Islands</option>
                                                                                             <option value="TV">
                                                                                                 Tuvalu</option>
                                                                                             <option value="UG">
                                                                                                 Uganda</option>
                                                                                             <option value="UA">
                                                                                                 Ukraine</option>
                                                                                             <option value="AE">
                                                                                                 United Arab Emirates
                                                                                             </option>
                                                                                             <option value="GB">
                                                                                                 United Kingdom (UK)
                                                                                             </option>
                                                                                             <option value="US">
                                                                                                 United States (US)
                                                                                             </option>
                                                                                             <option value="UM">
                                                                                                 United States (US)
                                                                                                 Minor Outlying
                                                                                                 Islands</option>
                                                                                             <option value="UY">
                                                                                                 Uruguay</option>
                                                                                             <option value="UZ">
                                                                                                 Uzbekistan</option>
                                                                                             <option value="VU">
                                                                                                 Vanuatu</option>
                                                                                             <option value="VA">
                                                                                                 Vatican</option>
                                                                                             <option value="VE">
                                                                                                 Venezuela</option>
                                                                                             <option value="VN">
                                                                                                 Vietnam</option>
                                                                                             <option value="VG">
                                                                                                 Virgin Islands
                                                                                                 (British)</option>
                                                                                             <option value="VI">
                                                                                                 Virgin Islands (US)
                                                                                             </option>
                                                                                             <option value="WF">
                                                                                                 Wallis and Futuna
                                                                                             </option>
                                                                                             <option value="EH">
                                                                                                 Western Sahara
                                                                                             </option>
                                                                                             <option value="YE">
                                                                                                 Yemen</option>
                                                                                             <option value="ZM">
                                                                                                 Zambia</option>
                                                                                             <option value="ZW">
                                                                                                 Zimbabwe</option>
                                                                                             &nbsp;<span class="required"
                                                                                                 aria-hidden="true">*</span>
                                                                                         </select><noscript><button
                                                                                                 type="submit"
                                                                                                 name="woocommerce_checkout_update_totals"
                                                                                                 value="Update country / region">Update
                                                                                                 country /
                                                                                                 region</button></noscript></span>
                                                                                 </p>
                                                                                 <p class="form-row form-row-wide address-field validate-required"
                                                                                     id="billing_city_field"
                                                                                     data-priority="70"><label
                                                                                         for="billing_city"
                                                                                         class="required_field">Town
                                                                                         / City&nbsp;<span
                                                                                             class="required"
                                                                                             aria-hidden="true">*</span></label><span
                                                                                         class="woocommerce-input-wrapper"><input
                                                                                             type="text"
                                                                                             class="input-text "
                                                                                             name="billing_city"
                                                                                             id="billing_city"
                                                                                             placeholder=""
                                                                                             value="Jabi"
                                                                                             aria-required="true"
                                                                                             autocomplete="address-level2" /></span>
                                                                                 </p>
                                                                                 <p class="form-row form-row-wide address-field validate-required validate-state"
                                                                                     id="billing_state_field"
                                                                                     data-priority="80"><label
                                                                                         for="billing_state"
                                                                                         class="required_field">State&nbsp;<span
                                                                                             class="required"
                                                                                             aria-hidden="true">*</span></label><span
                                                                                         class="woocommerce-input-wrapper"><select
                                                                                             name="billing_state"
                                                                                             id="billing_state"
                                                                                             class="state_select "
                                                                                             aria-required="true"
                                                                                             autocomplete="address-level1"
                                                                                             data-placeholder="Select an option&hellip;"
                                                                                             data-input-classes=""
                                                                                             data-label="State">
                                                                                             <option value="">
                                                                                                 Select an
                                                                                                 option&hellip;
                                                                                             </option>
                                                                                             <option value="AB">
                                                                                                 Abia</option>
                                                                                             <option value="FC">
                                                                                                 Abuja</option>
                                                                                             <option value="AD">
                                                                                                 Adamawa</option>
                                                                                             <option value="AK">
                                                                                                 Akwa Ibom</option>
                                                                                             <option value="AN">
                                                                                                 Anambra</option>
                                                                                             <option value="BA">
                                                                                                 Bauchi</option>
                                                                                             <option value="BY">
                                                                                                 Bayelsa</option>
                                                                                             <option value="BE">
                                                                                                 Benue</option>
                                                                                             <option value="BO">
                                                                                                 Borno</option>
                                                                                             <option value="CR">
                                                                                                 Cross River</option>
                                                                                             <option value="DE"
                                                                                                 selected='selected'>
                                                                                                 Delta</option>
                                                                                             <option value="EB">
                                                                                                 Ebonyi</option>
                                                                                             <option value="ED">Edo
                                                                                             </option>
                                                                                             <option value="EK">
                                                                                                 Ekiti</option>
                                                                                             <option value="EN">
                                                                                                 Enugu</option>
                                                                                             <option value="GO">
                                                                                                 Gombe</option>
                                                                                             <option value="IM">Imo
                                                                                             </option>
                                                                                             <option value="JI">
                                                                                                 Jigawa</option>
                                                                                             <option value="KD">
                                                                                                 Kaduna</option>
                                                                                             <option value="KN">
                                                                                                 Kano</option>
                                                                                             <option value="KT">
                                                                                                 Katsina</option>
                                                                                             <option value="KE">
                                                                                                 Kebbi</option>
                                                                                             <option value="KO">
                                                                                                 Kogi</option>
                                                                                             <option value="KW">
                                                                                                 Kwara</option>
                                                                                             <option value="LA">
                                                                                                 Lagos</option>
                                                                                             <option value="NA">
                                                                                                 Nasarawa</option>
                                                                                             <option value="NI">
                                                                                                 Niger</option>
                                                                                             <option value="OG">
                                                                                                 Ogun</option>
                                                                                             <option value="ON">
                                                                                                 Ondo</option>
                                                                                             <option value="OS">
                                                                                                 Osun</option>
                                                                                             <option value="OY">Oyo
                                                                                             </option>
                                                                                             <option value="PL">
                                                                                                 Plateau</option>
                                                                                             <option value="RI">
                                                                                                 Rivers</option>
                                                                                             <option value="SO">
                                                                                                 Sokoto</option>
                                                                                             <option value="TA">
                                                                                                 Taraba</option>
                                                                                             <option value="YO">
                                                                                                 Yobe</option>
                                                                                             <option value="ZA">
                                                                                                 Zamfara</option>
                                                                                         </select></span></p>
                                                                                 <p class="form-row form-row-wide address-field validate-postcode"
                                                                                     id="billing_postcode_field"
                                                                                     data-priority="90"><label
                                                                                         for="billing_postcode"
                                                                                         class="">Postcode&nbsp;<span
                                                                                             class="optional">(optional)</span></label><span
                                                                                         class="woocommerce-input-wrapper"><input
                                                                                             type="text"
                                                                                             class="input-text "
                                                                                             name="billing_postcode"
                                                                                             id="billing_postcode"
                                                                                             placeholder=""
                                                                                             value="003156"
                                                                                             autocomplete="postal-code" /></span>
                                                                                 </p>
                                                                                 <p class="form-row form-row-wide validate-required validate-phone"
                                                                                     id="billing_phone_field"
                                                                                     data-priority="100"><label
                                                                                         for="billing_phone"
                                                                                         class="required_field">Phone&nbsp;<span
                                                                                             class="required"
                                                                                             aria-hidden="true">*</span></label><span
                                                                                         class="woocommerce-input-wrapper"><input
                                                                                             type="tel"
                                                                                             class="input-text "
                                                                                             name="billing_phone"
                                                                                             id="billing_phone"
                                                                                             placeholder=""
                                                                                             value="+44903232233"
                                                                                             aria-required="true"
                                                                                             autocomplete="tel" /></span>
                                                                                 </p>
                                                                                 <div id="ship-to-different-address">
                                                                                     <input
                                                                                         id="ship-to-different-address-checkbox"
                                                                                         type="checkbox"
                                                                                         name="ship_to_different_address"
                                                                                         value="1" checked
                                                                                         class="--hidden" />
                                                                                 </div>
                                                                             </div>

                                                                         </div>

                                                                     </div>
                                                                 </div>

                                                                 <h3 class="rey-checkoutPage-title --has-caption">
                                                                     Payment</h3>
                                                                 <p>All transactions are secure and encrypted.</p>
                                                                 <div id="payment"
                                                                     class="woocommerce-checkout-payment">
                                                                     <ul
                                                                         class="wc_payment_methods payment_methods methods">
                                                                         <li
                                                                             class="wc_payment_method payment_method_bacs">
                                                                             <input id="payment_method_bacs"
                                                                                 type="radio" class="input-radio"
                                                                                 name="payment_method" value="bacs"
                                                                                 data-order_button_text="" />

                                                                             <label for="payment_method_bacs">
                                                                                 Direct bank transfer </label>
                                                                             <div class="payment_box payment_method_bacs"
                                                                                 style="display:none;">
                                                                                 <p>Make your payment directly into
                                                                                     our bank account. Please use
                                                                                     your Order ID as the payment
                                                                                     reference. Your order will not
                                                                                     be shipped until the funds have
                                                                                     cleared in our account.</p>
                                                                             </div>
                                                                         </li>
                                                                         <li
                                                                             class="wc_payment_method payment_method_cheque">
                                                                             <input id="payment_method_cheque"
                                                                                 type="radio" class="input-radio"
                                                                                 name="payment_method" value="cheque"
                                                                                 data-order_button_text="" />

                                                                             <label for="payment_method_cheque">
                                                                                 Check payments </label>
                                                                             <div class="payment_box payment_method_cheque"
                                                                                 style="display:none;">
                                                                                 <p>Please send a check to Store
                                                                                     Name, Store Street, Store Town,
                                                                                     Store State / County, Store
                                                                                     Postcode.</p>
                                                                             </div>
                                                                         </li>
                                                                         <li class="wc_payment_method payment_method_cod">
                                                                             <input id="payment_method_cod"
                                                                                 type="radio" class="input-radio"
                                                                                 name="payment_method" value="cod"
                                                                                 data-order_button_text="" />

                                                                             <label for="payment_method_cod">
                                                                                 Cash on delivery </label>
                                                                             <div class="payment_box payment_method_cod"
                                                                                 style="display:none;">
                                                                                 <p>Pay with cash upon delivery.</p>
                                                                             </div>
                                                                         </li>
                                                                         <li
                                                                             class="wc_payment_method payment_method_paypal">
                                                                             <input id="payment_method_paypal"
                                                                                 type="radio" class="input-radio"
                                                                                 name="payment_method" value="paypal"
                                                                                 checked='checked'
                                                                                 data-order_button_text="Proceed to PayPal" />

                                                                             <label for="payment_method_paypal">
                                                                                 PayPal <img decoding="async"
                                                                                     src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"
                                                                                     alt="PayPal acceptance mark" /><a
                                                                                     href="https://www.paypal.com/gb/webapps/mpp/paypal-popup"
                                                                                     class="about_paypal"
                                                                                     onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What
                                                                                     is PayPal?</a> </label>
                                                                             <div
                                                                                 class="payment_box payment_method_paypal">
                                                                                 <p>Pay via PayPal; you can pay with
                                                                                     your credit card if you
                                                                                     don&#8217;t have a PayPal
                                                                                     account.</p>
                                                                             </div>
                                                                         </li>
                                                                     </ul>
                                                                     <div class="form-row place-order">
                                                                         <noscript>
                                                                             Since your browser does not support
                                                                             JavaScript, or it is disabled, please
                                                                             ensure you click the <em>Update
                                                                                 Totals</em> button before placing
                                                                             your order. You may be charged more than
                                                                             the amount stated above if you fail to
                                                                             do so. <br /><button type="submit"
                                                                                 class="button alt"
                                                                                 name="woocommerce_checkout_update_totals"
                                                                                 value="Update totals">Update
                                                                                 totals</button>
                                                                         </noscript>

                                                                         <div
                                                                             class="woocommerce-terms-and-conditions-wrapper">
                                                                             <div class="woocommerce-privacy-policy-text">
                                                                                 <p>Your personal data will be used
                                                                                     to process your order, support
                                                                                     your experience throughout this
                                                                                     website, and for other purposes
                                                                                     described in our <a
                                                                                         href="https://demos.reytheme.com/london/terms-conditions/"
                                                                                         class="woocommerce-privacy-policy-link"
                                                                                         target="_blank">privacy
                                                                                         policy</a>.</p>
                                                                             </div>
                                                                             <div class="woocommerce-terms-and-conditions"
                                                                                 style="display: none; max-height: 200px; overflow: auto;">
                                                                                 <section data-id="3966b4f9"
                                                                                     data-element_type="section">
                                                                                     <h1></h1>
                                                                                 </section>
                                                                                 <p> <!-- .reyEl-gs --></p>
                                                                                 <h3>Introduction</h3>
                                                                                 <p>These Website Standard Terms and
                                                                                     Conditions written on this
                                                                                     webpage shall manage your use of
                                                                                     our website, ReyTheme accessible
                                                                                     at <a href="http://www.reytheme.com"
                                                                                         target="_blank"
                                                                                         rel="noopener noreferrer">www.reytheme.com</a>.
                                                                                 </p>
                                                                                 <p>These Terms will be applied fully
                                                                                     and affect to your use of this
                                                                                     Website. By using this Website,
                                                                                     you agreed to accept all terms
                                                                                     and conditions written in here.
                                                                                     You must not use this Website if
                                                                                     you disagree with any of these
                                                                                     Website Standard Terms and
                                                                                     Conditions. </p>
                                                                                 <p>Minors or people below 18 years
                                                                                     old are not allowed to use this
                                                                                     Website.</p>
                                                                                 <h3>Intellectual Property Rights
                                                                                 </h3>
                                                                                 <p>Other than the content you own,
                                                                                     under these Terms, Rey Theme
                                                                                     and/or its licensors own all the
                                                                                     intellectual property rights and
                                                                                     materials contained in this
                                                                                     Website.</p>
                                                                                 <p>You are granted limited license
                                                                                     only for purposes of viewing the
                                                                                     material contained on this
                                                                                     Website.</p>
                                                                                 <h3>Restrictions</h3>
                                                                                 <p>You are specifically restricted
                                                                                     from all of the following:</p>
                                                                                 <ul>
                                                                                     <li>publishing any Website
                                                                                         material in any other media;
                                                                                     </li>
                                                                                     <li>selling, sublicensing and/or
                                                                                         otherwise commercializing
                                                                                         any Website material;</li>
                                                                                     <li>publicly performing and/or
                                                                                         showing any Website
                                                                                         material;</li>
                                                                                     <li>using this Website in any
                                                                                         way that is or may be
                                                                                         damaging to this Website;
                                                                                     </li>
                                                                                     <li>using this Website in any
                                                                                         way that impacts user access
                                                                                         to this Website;</li>
                                                                                     <li>using this Website contrary
                                                                                         to applicable laws and
                                                                                         regulations, or in any way
                                                                                         may cause harm to the
                                                                                         Website, or to any person or
                                                                                         business entity;</li>
                                                                                     <li>engaging in any data mining,
                                                                                         data harvesting, data
                                                                                         extracting or any other
                                                                                         similar activity in relation
                                                                                         to this Website;</li>
                                                                                     <li>using this Website to engage
                                                                                         in any advertising or
                                                                                         marketing.</li>
                                                                                 </ul>
                                                                                 <p>Certain areas of this Website are
                                                                                     restricted from being access by
                                                                                     you and Rey Theme may further
                                                                                     restrict access by you to any
                                                                                     areas of this Website, at any
                                                                                     time, in absolute discretion.
                                                                                     Any user ID and password you may
                                                                                     have for this Website are
                                                                                     confidential and you must
                                                                                     maintain confidentiality as
                                                                                     well.</p>
                                                                                 <h3>Your Content</h3>
                                                                                 <p>In these Website Standard Terms
                                                                                     and Conditions, &#8220;Your
                                                                                     Content&#8221; shall mean any
                                                                                     audio, video text, images or
                                                                                     other material you choose to
                                                                                     display on this Website. By
                                                                                     displaying Your Content, you
                                                                                     grant Rey Theme a non-exclusive,
                                                                                     worldwide irrevocable, sub
                                                                                     licensable license to use,
                                                                                     reproduce, adapt, publish,
                                                                                     translate and distribute it in
                                                                                     any and all media.</p>
                                                                                 <p>Your Content must be your own and
                                                                                     must not be invading any
                                                                                     third-party’s rights. Rey Theme
                                                                                     reserves the right to remove any
                                                                                     of Your Content from this
                                                                                     Website at any time without
                                                                                     notice.</p>
                                                                                 <p> </p>
                                                                                 <h3>Your Privacy</h3>
                                                                                 <p>Please read Privacy Policy.</p>
                                                                                 <h3>No warranties</h3>
                                                                                 <p>This Website is provided
                                                                                     &#8220;as is,&#8221; with all
                                                                                     faults, and Rey Theme express no
                                                                                     representations or warranties,
                                                                                     of any kind related to this
                                                                                     Website or the materials
                                                                                     contained on this Website. Also,
                                                                                     nothing contained on this
                                                                                     Website shall be interpreted as
                                                                                     advising you.</p>
                                                                                 <h3>Limitation of liability</h3>
                                                                                 <p>In no event shall Rey Theme, nor
                                                                                     any of its officers, directors
                                                                                     and employees, shall be held
                                                                                     liable for anything arising out
                                                                                     of or in any way connected with
                                                                                     your use of this Website whether
                                                                                     such liability is under
                                                                                     contract. Rey Theme, including
                                                                                     its officers, directors and
                                                                                     employees shall not be held
                                                                                     liable for any indirect,
                                                                                     consequential or special
                                                                                     liability arising out of or in
                                                                                     any way related to your use of
                                                                                     this Website.</p>
                                                                                 <h3>Indemnification</h3>
                                                                                 <p>You hereby indemnify to the
                                                                                     fullest extent Rey Theme from
                                                                                     and against any and/or all
                                                                                     liabilities, costs, demands,
                                                                                     causes of action, damages and
                                                                                     expenses arising in any way
                                                                                     related to your breach of any of
                                                                                     the provisions of these Terms.
                                                                                 </p>
                                                                                 <h3>Severability</h3>
                                                                                 <p>If any provision of these Terms
                                                                                     is found to be invalid under any
                                                                                     applicable law, such provisions
                                                                                     shall be deleted without
                                                                                     affecting the remaining
                                                                                     provisions herein.</p>
                                                                                 <h3>Variation of Terms</h3>
                                                                                 <p>Rey Theme is permitted to revise
                                                                                     these Terms at any time as it
                                                                                     sees fit, and by using this
                                                                                     Website you are expected to
                                                                                     review these Terms on a regular
                                                                                     basis.</p>
                                                                                 <h3>Assignment</h3>
                                                                                 <p>The Rey Theme is allowed to
                                                                                     assign, transfer, and
                                                                                     subcontract its rights and/or
                                                                                     obligations under these Terms
                                                                                     without any notification.
                                                                                     However, you are not allowed to
                                                                                     assign, transfer, or subcontract
                                                                                     any of your rights and/or
                                                                                     obligations under these Terms.
                                                                                 </p>
                                                                                 <h3>Entire Agreement</h3>
                                                                                 <p>These Terms constitute the entire
                                                                                     agreement between Rey Theme and
                                                                                     you in relation to your use of
                                                                                     this Website, and supersede all
                                                                                     prior agreements and
                                                                                     understandings.</p>
                                                                                 <h3>Governing Law &amp; Jurisdiction
                                                                                 </h3>
                                                                                 <p>These Terms will be governed by
                                                                                     and interpreted in accordance
                                                                                     with the laws of the State of
                                                                                     us, and you submit to the
                                                                                     non-exclusive jurisdiction of
                                                                                     the state and federal courts
                                                                                     located in us for the resolution
                                                                                     of any disputes.</p>
                                                                             </div>
                                                                             <p class="form-row validate-required">
                                                                                 <label
                                                                                     class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                                     <input type="checkbox"
                                                                                         class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                                                         name="terms"
                                                                                         id="terms" />
                                                                                     <span
                                                                                         class="woocommerce-terms-and-conditions-checkbox-text">I
                                                                                         have read and agree to the
                                                                                         website <a
                                                                                             href="https://demos.reytheme.com/london/terms-conditions/"
                                                                                             class="woocommerce-terms-and-conditions-link"
                                                                                             target="_blank">terms
                                                                                             and conditions</a><abbr
                                                                                             class="required"
                                                                                             title="required">*</abbr></span>&nbsp;<abbr
                                                                                         class="required"
                                                                                         title="required">*</abbr>
                                                                                 </label>
                                                                                 <input type="hidden"
                                                                                     name="terms-field"
                                                                                     value="1" />
                                                                             </p>
                                                                         </div>


                                                                         <button type="submit" class="button alt"
                                                                             name="woocommerce_checkout_place_order"
                                                                             id="place_order" value="Place order"
                                                                             data-value="Place order">Place
                                                                             order</button>

                                                                         <input type="hidden"
                                                                             id="woocommerce-process-checkout-nonce"
                                                                             name="woocommerce-process-checkout-nonce"
                                                                             value="8e160d90f8" /><input type="hidden"
                                                                             name="_wp_http_referer"
                                                                             value="/london/checkout/" />
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <!-- End Payment -->

                                                         </form>

                                                         <div class="rey-checkoutPage-review ">

                                                             <div class="rey-checkoutPage-review-toggle">
                                                                 <span class="__title">
                                                                     <svg aria-hidden="true" role="img"
                                                                         id="rey-icon-bag-6833924416599"
                                                                         class="rey-icon rey-icon-bag __title-cart-icon"
                                                                         viewbox="0 0 24 24">
                                                                         <path
                                                                             d="M21,3h-4.4C15.8,1.2,14,0,12,0S8.2,1.2,7.4,3H3C2.4,3,2,3.4,2,4v19c0,0.6,0.4,1,1,1h18c0.6,0,1-0.4,1-1V4  C22,3.4,21.6,3,21,3z M12,1c1.5,0,2.8,0.8,3.4,2H8.6C9.2,1.8,10.5,1,12,1z M20,22H4v-4h16V22z M20,17H4V5h3v4h1V5h8v4h1V5h3V17z" />
                                                                     </svg> <span class="__title-text">Show order
                                                                         summary</span>
                                                                     <svg aria-hidden="true" role="img"
                                                                         id="rey-icon-arrow-68339244165ae"
                                                                         class="rey-icon rey-icon-arrow __title-arrow-icon"
                                                                         viewbox="0 0 22 13">
                                                                         <style type="text/css">
                                                                             .rey-icon-arrow.--to-left {
                                                                                 transform: rotate(90deg) scale(0.7);
                                                                             }

                                                                             .rey-icon-arrow.--to-right {
                                                                                 transform: rotate(-90deg) scale(0.7);
                                                                             }

                                                                             .rey-icon-arrow.--to-top {
                                                                                 transform: rotate(180deg);
                                                                             }
                                                                         </style>
                                                                         <g stroke="none" stroke-width="1"
                                                                             fill="none" fill-rule="evenodd">
                                                                             <polygon fill="currentColor"
                                                                                 points="-0.01 2.44 10.99 13.073 21.98 2.44 19.5 0.008 10.99 8.243 2.47 0.008">
                                                                             </polygon>
                                                                         </g>
                                                                     </svg> </span>
                                                                 <span id="rey-checkoutPage-review-toggle__total"
                                                                     class="__total"><strong><span
                                                                             class="woocommerce-Price-amount amount"><bdi><span
                                                                                     class="woocommerce-Price-currencySymbol">&#36;</span>213.00</bdi></span></strong>
                                                                 </span>
                                                             </div>

                                                             <div class="rey-checkoutPage-review-inner">


                                                                 <h3 id="order_review_heading">Your order</h3>


                                                                 <div id="order_review"
                                                                     class="woocommerce-checkout-review-order">

                                                                     <table
                                                                         class="shop_table woocommerce-checkout-review-order-table">

                                                                         <tbody>
                                                                             <tr class="cart_item">
                                                                                 <td class="product-name">

                                                                                     <div class="rey-reviewOrder-img">
                                                                                         <img fetchpriority="high"
                                                                                             decoding="async"
                                                                                             width="600"
                                                                                             height="800"
                                                                                             src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/23-600x800.jpg"
                                                                                             class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                             alt="Black Paradise Slogan T-Shirt - S"
                                                                                             srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/23-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/23-400x533.jpg 400w"
                                                                                             sizes="(max-width: 600px) 100vw, 600px" />
                                                                                         <span
                                                                                             class="rey-reviewOrder-qty">
                                                                                             &times;&nbsp;3 </span>
                                                                                     </div>
                                                                                     <div class="rey-reviewOrder-data">
                                                                                         <div
                                                                                             class="rey-reviewOrder-title">
                                                                                             <div
                                                                                                 class="woocommerce-mini-cart-item-title">
                                                                                                 Black Paradise
                                                                                                 Slogan T-Shirt - S
                                                                                             </div>
                                                                                         </div>
                                                                                         <div
                                                                                             class="rey-reviewOrder-total">
                                                                                             <span
                                                                                                 class="woocommerce-Price-amount amount"><bdi><span
                                                                                                         class="woocommerce-Price-currencySymbol">&#36;</span>87.00</bdi></span>
                                                                                         </div>
                                                                                     </div>

                                                                                 </td>
                                                                                 <td class="product-total">
                                                                                     <span
                                                                                         class="woocommerce-Price-amount amount"><bdi><span
                                                                                                 class="woocommerce-Price-currencySymbol">&#36;</span>87.00</bdi></span>
                                                                                 </td>
                                                                             </tr>
                                                                             <tr class="cart_item">
                                                                                 <td class="product-name">

                                                                                     <div class="rey-reviewOrder-img">
                                                                                         <img decoding="async"
                                                                                             width="600"
                                                                                             height="800"
                                                                                             src="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/31-600x800.jpg"
                                                                                             class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                             alt="Black-Leaf Print Tie Waist Shorts - M"
                                                                                             srcset="https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/31-600x800.jpg 600w, https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/31-400x533.jpg 400w"
                                                                                             sizes="(max-width: 600px) 100vw, 600px" />
                                                                                         <span
                                                                                             class="rey-reviewOrder-qty">
                                                                                             &times;&nbsp;4 </span>
                                                                                     </div>
                                                                                     <div class="rey-reviewOrder-data">
                                                                                         <div
                                                                                             class="rey-reviewOrder-title">
                                                                                             <div
                                                                                                 class="woocommerce-mini-cart-item-title">
                                                                                                 Black-Leaf Print Tie
                                                                                                 Waist Shorts - M
                                                                                             </div>
                                                                                         </div>
                                                                                         <div
                                                                                             class="rey-reviewOrder-total">
                                                                                             <span
                                                                                                 class="woocommerce-Price-amount amount"><bdi><span
                                                                                                         class="woocommerce-Price-currencySymbol">&#36;</span>96.00</bdi></span>
                                                                                         </div>
                                                                                     </div>

                                                                                 </td>
                                                                                 <td class="product-total">
                                                                                     <span
                                                                                         class="woocommerce-Price-amount amount"><bdi><span
                                                                                                 class="woocommerce-Price-currencySymbol">&#36;</span>96.00</bdi></span>
                                                                                 </td>
                                                                             </tr>
                                                                         </tbody>
                                                                         <tfoot>


                                                                             <tr class="__coupon-row">
                                                                                 <td colspan="2">



                                                                                     <form
                                                                                         class="checkout_coupon woocommerce-form-coupon"
                                                                                         method="post">
                                                                                         <input type="text"
                                                                                             name="coupon_code"
                                                                                             class="input-text"
                                                                                             placeholder="Coupon code"
                                                                                             id="coupon_code"
                                                                                             value="" />
                                                                                         <button type="submit"
                                                                                             class="button"
                                                                                             name="apply_coupon"
                                                                                             value="Apply">Apply</button>
                                                                                     </form>


                                                                                 </td>
                                                                             </tr>



                                                                             <tr class="cart-subtotal">
                                                                                 <th>Subtotal</th>
                                                                                 <td><span
                                                                                         class="woocommerce-Price-amount amount"><bdi><span
                                                                                                 class="woocommerce-Price-currencySymbol">&#36;</span>183.00</bdi></span>
                                                                                 </td>
                                                                             </tr>

                                                                             <tr class="cart-shipping">
                                                                                 <th>Shipping</th>
                                                                                 <td><span
                                                                                         class="woocommerce-Price-amount amount"><span
                                                                                             class="woocommerce-Price-currencySymbol">&#036;</span>30.00</span>
                                                                                 </td>
                                                                             </tr>



                                                                             <tr class="tax-total">
                                                                                 <th>VAT</th>
                                                                                 <td><span
                                                                                         class="woocommerce-Price-amount amount"><bdi><span
                                                                                                 class="woocommerce-Price-currencySymbol">&#36;</span>0.00</bdi></span>
                                                                                 </td>
                                                                             </tr>


                                                                             <tr class="order-total">
                                                                                 <th>Total</th>
                                                                                 <td><strong><span
                                                                                             class="woocommerce-Price-amount amount"><bdi><span
                                                                                                     class="woocommerce-Price-currencySymbol">&#36;</span>213.00</bdi></span></strong>
                                                                                 </td>
                                                                             </tr>


                                                                         </tfoot>
                                                                     </table>
                                                                 </div>


                                                             </div>

                                                         </div>

                                                         <div class="rey-checkoutPage-couponMobile">
                                                             <h4 class="rey-checkoutPage-title">Have a Coupon?</h4>

                                                             <form class="checkout_coupon woocommerce-form-coupon"
                                                                 method="post">
                                                                 <input type="text" name="coupon_code"
                                                                     class="input-text" placeholder="Coupon code"
                                                                     id="coupon_code" value="" />
                                                                 <button type="submit" class="button"
                                                                     name="apply_coupon" value="Apply">Apply</button>
                                                             </form>
                                                         </div>

                                                     </div>
                                                     <!-- .rey-checkout-wrapper -->

                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </section>
                     </div>

                 </main>
                 <!-- .rey-siteMain -->

             </div>


         </div>
         <!-- .rey-siteContainer -->

     </div>

 @endsection
