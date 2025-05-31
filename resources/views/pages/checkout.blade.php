 @extends('layouts.app')

 @section('title', 'Checkout')

 @section('body_attributes')
     data-rsssl=1
     class="wp-singular page-template page-template-template-builder page-template-template-builder-php page page-id-2432
     logged-in wp-custom-logo wp-theme-rey wp-child-theme-rey-child theme-rey woocommerce-checkout woocommerce-page
     woocommerce-no-js rey-no-js ltr woocommerce elementor-default elementor-kit-2331 elementor-page elementor-page-2432
     rey-cwidth--default --no-acc-focus elementor-opt r-notices"
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
     <link rel="stylesheet" href="{{ asset('css/posts/post-2249.css') }}">
     <link rel="stylesheet" href="{{ asset('css/posts/post-2432.css') }}">
     <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
     <link rel="stylesheet" href="{{ asset('css/wc-blocks.css') }}">
     <script src="{{ asset('js/checkout.min.js') }}"></script>
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
                                                     <div class="rey-checkoutPage-inner gap-3">

                                                         <!-- resources/views/checkout.blade.php -->
                                                         <form method="POST" class="w-full lg:w-1/2"
                                                             action="{{ route('flutterwave.pay') }}"
                                                             x-data="{
                                                                 step: 2,
                                                                 user: JSON.parse(localStorage.getItem('UserData') || '{}'),
                                                                 goToShipping() {
                                                                     if (!this.user.name || !this.user.email || !this.user.phone) {
                                                                         alert('Please fill all information fields.');
                                                                         return;
                                                                     }
                                                                     localStorage.setItem('UserData', JSON.stringify(this.user));
                                                                     this.step = 3;
                                                                 },
                                                                 goToPayment() {
                                                                     if (!this.user.address || !this.user.city || !this.user.state || !this.user.country) {
                                                                         alert('Please fill all shipping fields.');
                                                                         return;
                                                                     }
                                                                     localStorage.setItem('UserData', JSON.stringify(this.user));
                                                                     this.step = 4;
                                                                 }
                                                             }">
                                                             @csrf

                                                             <!-- Tabs -->
                                                             <div class="flex space-x-4 mb-6 gap-3 items-center">
                                                                 <button type="button"
                                                                     @click="window.location='{{ route('cart.index') }}'"
                                                                     class="px-4 py-2 bg-gray-200">Cart</button>

                                                                 <span class="font-bold text-md"> > </span>

                                                                 <button type="button" @click="step = 2"
                                                                     :class="step === 2 ? 'bg-blue-600 text-white' :
                                                                         'bg-gray-200'"
                                                                     class="px-4 py-2">Information</button>

                                                                 <span class="font-bold text-md"> > </span>

                                                                 <button type="button" @click="step = 3" x-show="step >= 2"
                                                                     :class="step === 3 ? 'bg-blue-600 text-white' :
                                                                         'bg-gray-200'"
                                                                     class="px-4 py-2">Shipping</button>

                                                                 <span class="font-bold text-md"> > </span>

                                                                 <button type="button" @click="step = 4" x-show="step >= 3"
                                                                     :class="step === 4 ? 'bg-blue-600 text-white' :
                                                                         'bg-gray-200'"
                                                                     class="px-4 py-2">Payment</button>
                                                             </div>

                                                             <!-- Step 2: Information -->
                                                             <div x-show="step === 2" class="space-y-4 flex flex-col gap-3">
                                                                 <input type="text" name="name" x-model="user.name"
                                                                     class="block w-full m-2 " placeholder="Full Name"
                                                                     required>
                                                                 <input type="email" name="email" x-model="user.email"
                                                                     class="block w-full" placeholder="Email" required>
                                                                 <input type="text" name="phone"
                                                                     x-model="user.phone" class="block w-full"
                                                                     placeholder="Phone" required>
                                                                 <button type="button"
                                                                     class="bg-blue-500 text-white px-4 py-2"
                                                                     @click="goToShipping()">Next</button>
                                                             </div>

                                                             <!-- Step 3: Shipping -->
                                                             <div x-show="step === 3"
                                                                 class="space-y-4 flex flex-col gap-3">
                                                                 <input type="text" name="address"
                                                                     x-model="user.address" class="block w-full"
                                                                     placeholder="Address" required>
                                                                 <input type="text" name="city" x-model="user.city"
                                                                     class="block w-full" placeholder="City" required>
                                                                 <input type="text" name="state"
                                                                     x-model="user.state" class="block w-full"
                                                                     placeholder="State" required>
                                                                 <input type="text" name="country"
                                                                     x-model="user.country" class="block w-full"
                                                                     placeholder="Country" required>
                                                                 <button type="button"
                                                                     class="bg-blue-500 text-white px-4 py-2"
                                                                     @click="goToPayment()">Next</button>
                                                             </div>

                                                             <!-- Step 4: Payment -->
                                                             <div x-show="step === 4"
                                                                 class="space-y-4 flex flex-col gap-3">
                                                                 <h3 class="text-lg font-bold">Review Your Information</h3>
                                                                 <div class="bg-gray-100 p-4 rounded">
                                                                     <p><strong>Name:</strong> <span
                                                                             x-text="user.name"></span></p>
                                                                     <p><strong>Email:</strong> <span
                                                                             x-text="user.email"></span></p>
                                                                     <p><strong>Phone:</strong> <span
                                                                             x-text="user.phone"></span></p>
                                                                     <p><strong>Address:</strong> <span
                                                                             x-text="user.address"></span></p>
                                                                     <p><strong>City:</strong> <span
                                                                             x-text="user.city"></span></p>
                                                                     <p><strong>State:</strong> <span
                                                                             x-text="user.state"></span></p>
                                                                     <p><strong>Country:</strong> <span
                                                                             x-text="user.country"></span></p>
                                                                 </div>

                                                                 <input type="hidden" name="amount"
                                                                     :value="JSON.parse(localStorage.getItem('currency') ||
                                                                         '{}').total">
                                                                 <input type="hidden" name="country_code"
                                                                     :value="JSON.parse(localStorage.getItem('currency') ||
                                                                         '{}').country_code">
                                                                         <div>
                                                                            <input type="hidden" name="carts_ids" :value="localStorage.getItem('cartItems')">
                                                                            <input type="hidden" name="shipping_details" :value="localStorage.getItem('UserData')">
                                                                            <input type="hidden" name="">
                                                                         </div>

                                                                 <button type="submit"
                                                                     class="bg-green-600 text-white px-4 py-2">
                                                                     Continue with Flutterwave
                                                                 </button>
                                                             </div>
                                                         </form>


                                                         <div class="rey-checkoutPage-review ">

                                                             <div class="rey-checkoutPage-review-inner">


                                                                 <h3 id="order_review_heading">Your order</h3>


                                                                 <div id="order_review"
                                                                     class="woocommerce-checkout-review-order">

                                                                     <table
                                                                         class="shop_table woocommerce-checkout-review-order-table">

                                                                         <tbody x-data="{
                                                                             items: JSON.parse(localStorage.getItem('cartItems') || '[]')
                                                                         }">
                                                                             <!-- loop -->
                                                                             <template x-for="item in items"
                                                                                 :key="item.id">
                                                                                 <tr class="cart_item">
                                                                                     <td class="product-name">
                                                                                         <!-- image + qty -->
                                                                                         <div class="rey-reviewOrder-img">
                                                                                             <img :src="item.product.featured_image"
                                                                                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                                 alt=""
                                                                                                 width="100"
                                                                                                 height="100">
                                                                                             <span
                                                                                                 class="rey-reviewOrder-qty">&times;&nbsp;<span
                                                                                                     x-text="item.quantity"></span></span>
                                                                                         </div>

                                                                                         <!-- title + single-item price -->
                                                                                         <div class="rey-reviewOrder-data">
                                                                                             <div
                                                                                                 class="rey-reviewOrder-title">
                                                                                                 <div class="woocommerce-mini-cart-item-title"
                                                                                                     x-text="`${item.product.title} - ${item.size}`">
                                                                                                 </div>
                                                                                             </div>
                                                                                             <div
                                                                                                 class="rey-reviewOrder-total">
                                                                                                 <span
                                                                                                     class="woocommerce-Price-amount amount">
                                                                                                     <bdi>
                                                                                                         <span
                                                                                                             x-text="item.currency"></span>
                                                                                                         <span
                                                                                                             x-text="(parseFloat(item.price) * item.quantity).toFixed(2)">
                                                                                                         </span>
                                                                                                     </bdi>
                                                                                                 </span>
                                                                                             </div>
                                                                                         </div>
                                                                                     </td>

                                                                                     <!-- line total -->
                                                                                     <td class="product-total">
                                                                                         <span
                                                                                             class="woocommerce-Price-amount amount">
                                                                                             <bdi>
                                                                                                 <span
                                                                                                     x-text="item.currency"></span>
                                                                                                 <span
                                                                                                     x-text="(parseFloat(item.price) * item.quantity).toFixed(2)">
                                                                                                 </span>
                                                                                             </bdi>
                                                                                         </span>
                                                                                     </td>
                                                                                 </tr>
                                                                             </template>
                                                                         </tbody>


                                                                         <tfoot>





                                                                             {{-- <tr class="cart-subtotal">
                                                                                 <th>Subtotal</th>
                                                                                 <td><span
                                                                                         class="woocommerce-Price-amount amount">
                                                                                         <bdi>
                                                                                             <span
                                                                                                 class="">
                                                                                                                                                                                             </span>
                                                                                            <span>
                                                                                                 183.00
                                                                                            </span>
                                                                                         </bdi>
                                                                                     </span>
                                                                                 </td>
                                                                             </tr> --}}

                                                                             {{-- <tr class="cart-shipping">
                                                                                 <th>Shipping</th>
                                                                                 <td><span
                                                                                         class="woocommerce-Price-amount amount"><span
                                                                                             class="">&#036;</span>30.00</span>
                                                                                 </td>
                                                                             </tr> --}}



                                                                             {{-- <tr class="tax-total">
                                                                                 <th>VAT</th>
                                                                                 <td><span
                                                                                         class="woocommerce-Price-amount amount"><bdi><span
                                                                                                 class="">&#36;</span>0.00</bdi></span>
                                                                                 </td>
                                                                             </tr> --}}


                                                                             <tr class="order-total">
                                                                                 <th>Total</th>
                                                                                 <td x-data="{
                                                                                     currency: JSON.parse(localStorage.getItem('currency') || '{}')
                                                                                 }">
                                                                                     <strong>
                                                                                         <span
                                                                                             class="woocommerce-Price-amount amount">
                                                                                             <bdi>
                                                                                                 <span
                                                                                                     x-text="currency.symbol"></span>
                                                                                                 <span
                                                                                                     x-text="currency.total.toLocaleString()"></span>
                                                                                             </bdi>
                                                                                         </span>
                                                                                     </strong>
                                                                                 </td>
                                                                             </tr>


                                                                         </tfoot>
                                                                     </table>
                                                                 </div>


                                                             </div>

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
