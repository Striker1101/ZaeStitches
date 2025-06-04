 @extends('layouts.app')

 @section('title', 'Cart')

 @section('body_attributes')
     data-rsssl=1
     class="wp-singular page-template page-template-template-builder page-template-template-builder-php page page-id-2426
     wp-custom-logo wp-theme-rey wp-child-theme-rey-child theme-rey woocommerce-cart woocommerce-page woocommerce-no-js
     rey-no-js ltr woocommerce elementor-default elementor-kit-2331 elementor-page elementor-page-2426 rey-cwidth--default
     --no-acc-focus elementor-opt r-notices"
     data-id="2426" itemtype="https://schema.org/WebPage" itemscope="itemscope"
 @endsection

 @section('custom_head')
     <style>
         img:is([sizes="auto" i],
         [sizes^="auto," i]) {
             contain-intrinsic-size: 3000px 1500px
         }
     </style>

     <link data-minify="1" id="rey-hs-css" type="text/css" href="{{ asset('css/rey/hs-53d69d0af5.css') }}" rel="stylesheet"
         media="all" />
     <link rel="stylesheet" href="{{ asset('css/rey/ds-911e38f9c8.css') }}">
 @endsection

 @php
     $currencySymbol = session('currency_symbol', '₦');
     $currencyRate = (float) session('currency_rate', 1);
     $shippingAmount =  (float) session('shipping_amount', 1);
 @endphp

 @section('content')

     <div id="content" class="rey-siteContent --tpl-template-builder-php">

         <div class="rey-siteContainer rey-pbTemplate" data-page-el-selector="body.elementor-page-2426">
             <div class="rey-siteRow">


                 <main id="main" class="rey-siteMain --filter-panel">
                     <div data-elementor-type="wp-page" data-elementor-id="2426" class="elementor elementor-2426">
                         <section
                             class="elementor-section elementor-top-section elementor-element elementor-element-6ff3eea elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                             data-id="6ff3eea" data-element_type="section">
                             <div class="elementor-container elementor-column-gap-default">
                                 <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35da057"
                                     data-id="35da057" data-element_type="column">
                                     <div
                                         class="elementor-column-wrap--35da057 elementor-widget-wrap elementor-element-populated">
                                         <div class="elementor-element elementor-element-783ec24 elementor-widget elementor-widget-reycore-wc-cart"
                                             data-id="783ec24" data-element_type="widget"
                                             data-widget_type="reycore-wc-cart.default">
                                             <div class="elementor-widget-container">

                                                 <div
                                                     class="woocommerce rey-cartPage --layout-custom --table-style-1 --totals-style-2 --totals-sticky">
                                                     <div class="woocommerce-notices-wrapper"></div>
                                                     <div class="rey-cartPage-inner">

                                                         <div class="woocommerce-cart-formWrapper">

                                                             <form class="woocommerce-cart-form" action="#"
                                                                 method="post">

                                                                 <div class="rey-cartShippingBar --over"
                                                                     style="--bar-perc:100%;">
                                                                     {{-- <div class="__text">Free shipping!</div> --}}
                                                                     <div class="__bar"></div>
                                                                 </div>


                                                                 @if ($cartItems)
                                                                     <table
                                                                         class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                                                         cellspacing="0">
                                                                         <thead>
                                                                             <tr>
                                                                                 <th class="product-name">Product</th>
                                                                                 <th class="product-price">Price</th>
                                                                                 <th class="product-quantity">Quantity
                                                                                 </th>
                                                                                 <th class="product-subtotal">Subtotal
                                                                                 </th>
                                                                             </tr>
                                                                         </thead>
                                                                         <tbody>

                                                                             @foreach ($cartItems as $item)
                                                                                 <tr
                                                                                     class="woocommerce-cart-form__cart-item cart_item">

                                                                                     {{-- Product --}}
                                                                                     <td class="product-name"
                                                                                         data-title="Product">
                                                                                         <div
                                                                                             class="woocommerce-cart-form__cart-name">
                                                                                             <div
                                                                                                 class="woocommerce-cart-form__cart-thumbnail">
                                                                                                 <a href="{{ $item->product->featured_image }}"
                                                                                                     class="woocommerce-cart-form__cart-item-thumb">
                                                                                                     <img loading="lazy"
                                                                                                         decoding="async"
                                                                                                         width="600"
                                                                                                         height="800"
                                                                                                         src="{{ $item->product->featured_image }}"
                                                                                                         alt="{{ $item->product->title }}" />
                                                                                                 </a>
                                                                                             </div>
                                                                                             <div
                                                                                                 class="woocommerce-cart-form__cart-nameContent">
                                                                                                 <div
                                                                                                     class="woocommerce-mini-cart-item-title">
                                                                                                     <strong>{{ $item->product->title }}</strong>
                                                                                                     <div
                                                                                                         class="whitespace-nowrap">
                                                                                                         Size:
                                                                                                         {{ $item->size }}
                                                                                                     </div>
                                                                                                     <div
                                                                                                         class="whitespace-nowrap">
                                                                                                         Color:
                                                                                                         {{ $item->color }}
                                                                                                     </div>
                                                                                                 </div>

                                                                                                 {{-- Remove link --}}
                                                                                                 <div>
                                                                                                     <button type="button"
                                                                                                         class="delete-cart-item"
                                                                                                         data-id="{{ $item->id }}"
                                                                                                         style="background: none; border: none; cursor: pointer; color: red; padding: 0;">
                                                                                                         <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                             width="16"
                                                                                                             height="16"
                                                                                                             fill="red"
                                                                                                             viewBox="0 0 24 24">
                                                                                                             <path
                                                                                                                 d="M18 6L6 18M6 6l12 12"
                                                                                                                 stroke="red"
                                                                                                                 stroke-width="2"
                                                                                                                 stroke-linecap="round"
                                                                                                                 stroke-linejoin="round" />
                                                                                                         </svg>
                                                                                                         Remove
                                                                                                     </button>

                                                                                                     <script>
                                                                                                         document.querySelectorAll('.delete-cart-item').forEach(button => {
                                                                                                             button.addEventListener('click', async function() {
                                                                                                                 if (!confirm('Are you sure you want to remove this item?')) return;

                                                                                                                 const itemId = this.dataset.id;
                                                                                                                 const token = '{{ csrf_token() }}';

                                                                                                                 const response = await fetch(`/cart/${itemId}`, {
                                                                                                                     method: 'DELETE',
                                                                                                                     headers: {
                                                                                                                         'X-CSRF-TOKEN': token,
                                                                                                                         'Accept': 'application/json'
                                                                                                                     }
                                                                                                                 });

                                                                                                                 if (response.ok) {
                                                                                                                     // Optionally reload or remove item from the DOM
                                                                                                                     location.reload();
                                                                                                                 } else {
                                                                                                                     alert('Failed to remove item.');
                                                                                                                 }
                                                                                                             });
                                                                                                         });
                                                                                                     </script>

                                                                                                 </div>
                                                                                             </div>
                                                                                         </div>
                                                                                     </td>

                                                                                     {{-- Price --}}
                                                                                     <td class="product-price"
                                                                                         data-title="Price">
                                                                                         @php
                                                                                             $unitPrice =
                                                                                                 $item->price > 0
                                                                                                     ? $item->price
                                                                                                     : ($item->product
                                                                                                         ->discount_price >
                                                                                                     0
                                                                                                         ? $item
                                                                                                             ->product
                                                                                                             ->discount_price
                                                                                                         : $item
                                                                                                             ->product
                                                                                                             ->price);
                                                                                         @endphp
                                                                                         <span
                                                                                             class="woocommerce-Price-amount amount whitespace-nowrap">
                                                                                             <bdi>{{ $item->currency }}{{ number_format($unitPrice, 2) }}</bdi>
                                                                                         </span>
                                                                                     </td>

                                                                                     {{-- Quantity --}}
                                                                                     <td class="product-quantity"
                                                                                         data-title="Quantity">
                                                                                         <div class="quantity">
                                                                                             <input type="number"
                                                                                                 class="input-text qty text"
                                                                                                 name="quantities[{{ $item->id }}]"
                                                                                                 value="{{ $item->quantity }}"
                                                                                                 min="1"
                                                                                                 data-id={{ $item->id }}
                                                                                                 inputmode="numeric"
                                                                                                 data-unit-price="{{ $unitPrice }}" />
                                                                                         </div>
                                                                                     </td>

                                                                                     {{-- Subtotal --}}
                                                                                     <td class="product-subtotal"
                                                                                         data-title="Subtotal">
                                                                                         @php
                                                                                             $subtotal =
                                                                                                 $unitPrice *
                                                                                                 $item->quantity;
                                                                                         @endphp
                                                                                         <span
                                                                                             class="woocommerce-Price-amount amount subTotal whitespace-nowrap">
                                                                                             {{ $item->currency }}
                                                                                             <bdi {{-- id="total-price" --}}
                                                                                                 class="">{{ number_format($subtotal, 2) }}
                                                                                             </bdi>
                                                                                         </span>
                                                                                     </td>
                                                                                 </tr>
                                                                             @endforeach
                                                                         </tbody>
                                                                     </table>
                                                                 @else
                                                                     <div data-elementor-type="wp-page"
                                                                         data-elementor-id="2426"
                                                                         class="elementor elementor-2426">
                                                                         <section
                                                                             class="elementor-section elementor-top-section elementor-element elementor-element-6ff3eea elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                             data-id="6ff3eea"
                                                                             data-element_type="section">
                                                                             <div
                                                                                 class="elementor-container elementor-column-gap-default">
                                                                                 <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35da057"
                                                                                     data-id="35da057"
                                                                                     data-element_type="column">
                                                                                     <div
                                                                                         class="elementor-column-wrap--35da057 elementor-widget-wrap elementor-element-populated">
                                                                                         <div class="elementor-element elementor-element-783ec24 elementor-widget elementor-widget-reycore-wc-cart"
                                                                                             data-id="783ec24"
                                                                                             data-element_type="widget"
                                                                                             data-widget_type="reycore-wc-cart.default">
                                                                                             <div
                                                                                                 class="elementor-widget-container">

                                                                                                 <div
                                                                                                     class="woocommerce rey-cartPage --layout-custom --table-style-1 --totals-style-2 --totals-sticky">
                                                                                                     <div
                                                                                                         class="woocommerce-notices-wrapper">
                                                                                                     </div>
                                                                                                     <div
                                                                                                         class="rey-cartPage rey-emptyCart">

                                                                                                         <div
                                                                                                             class="rey-emptyCart-icon">
                                                                                                             <svg aria-hidden="true"
                                                                                                                 role="img"
                                                                                                                 id="rey-icon-bag-683987ee8add2"
                                                                                                                 class="rey-icon rey-icon-bag "
                                                                                                                 viewBox="0 0 24 24">
                                                                                                                 <path
                                                                                                                     d="M21,3h-4.4C15.8,1.2,14,0,12,0S8.2,1.2,7.4,3H3C2.4,3,2,3.4,2,4v19c0,0.6,0.4,1,1,1h18c0.6,0,1-0.4,1-1V4  C22,3.4,21.6,3,21,3z M12,1c1.5,0,2.8,0.8,3.4,2H8.6C9.2,1.8,10.5,1,12,1z M20,22H4v-4h16V22z M20,17H4V5h3v4h1V5h8v4h1V5h3V17z">
                                                                                                                 </path>
                                                                                                             </svg>
                                                                                                         </div>

                                                                                                         <div
                                                                                                             class="rey-emptyCart-title">
                                                                                                             <h2>Your cart
                                                                                                                 is
                                                                                                                 currently
                                                                                                                 empty.</h2>
                                                                                                         </div>

                                                                                                         <div
                                                                                                             class="rey-emptyCart-content">

                                                                                                             <p
                                                                                                                 class="return-to-shop">
                                                                                                                 <a class="btn btn-primary wc-backward"
                                                                                                                     href="{{ route('home') }}">
                                                                                                                     Return
                                                                                                                     to shop
                                                                                                                 </a>
                                                                                                             </p>

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
                                                                 @endif

                                                             </form>







                                                             <div class="cross-sells">
                                                                 <h2>You may be interested in&hellip;</h2>

                                                                 <div
                                                                     class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 ">
                                                                     @foreach ($popularProducts as $product)
                                                                         <x-product-card :product="$product" :currency_symbol="session('currency_symbol', '₦')"
                                                                             :currency_rate="session('currency_rate', 1)" />
                                                                     @endforeach
                                                                 </div>
                                                             </div>

                                                         </div>
                                                         <div class="cart_totals ">
                                                             <h2>Cart totals</h2>

                                                             <table cellspacing="0"
                                                                 class="shop_table shop_table_responsive">

                                                                 <tr class="cart-subtotal">
                                                                     <th>Subtotal</th>
                                                                     <td data-title="Subtotal"><span
                                                                             class="woocommerce-Price-amount amount">
                                                                             <bdi>
                                                                                 <span class="">
                                                                                     {{ $currencySymbol }}
                                                                                 </span>
                                                                                 <span class="cart_total"></span>
                                                                             </bdi>
                                                                         </span>
                                                                     </td>
                                                                 </tr>
                                                                 <tr class="cart-shipping">
                                                                     <th>Shipping</th>
                                                                     <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                             <span class="">
                                                                                 {{ $currencySymbol }}
                                                                             </span>

                                                                              <span class="shipping_amount"></span>
                                                                     </td>
                                                                 </tr>

                                                                 <tr class="__no-shipping-text">
                                                                     <td colspan="2">Taxes and Shipping are
                                                                         calculated at Checkout.</td>
                                                                 </tr>
                                                                 <tr class="order-total">
                                                                     <th>Total</th>
                                                                     <td data-title="Total">
                                                                         <strong>
                                                                             <span class="woocommerce-Price-amount amount">
                                                                                 <bdi>
                                                                                     <span
                                                                                         class="">{{ $currencySymbol }}
                                                                                     </span>
                                                                                     <span class="final_total"></span>
                                                                                 </bdi>
                                                                             </span>
                                                                         </strong>
                                                                     </td>
                                                                 </tr>


                                                             </table>

                                                             <div class="wc-proceed-to-checkout">

                                                                 <button onclick="checkout(cartItems)"
                                                                     class="checkout-button button alt wc-forward w-full items-center">
                                                                     Proceed to checkout
                                                                 </button>
                                                             </div>


                                                         </div>

                                                     </div>

                                                     <div class="cart-collaterals">
                                                     </div>
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

     <script>
         const cartItems = @json($cartItems);
         const currencyRate = @json($currencyRate);
         const shippingAmount = @json($shippingAmount);


         function getTotal() {
             const totals = []
             const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
             document.querySelectorAll('.subTotal').forEach(element => {
                 const total = element.outerText;
                 totals.push(total)
             });
             fetch('/currency/convert', {
                     method: 'POST',
                     headers: {
                         'Content-Type': 'application/json',
                         'X-CSRF-TOKEN': csrf,
                     },
                     body: JSON.stringify({
                         totals
                     })
                 })
                 .then(res => res.json())
                 .then(data => {

                     localStorage.setItem("currency", JSON.stringify(data))
                     document.querySelectorAll('.cart_total').forEach(element => {
                         element.textContent = data.total
                     });
                     document.querySelectorAll('.shipping_amount').forEach(element => {
                         element.textContent = data.shipping_amount
                     });
                     document.querySelectorAll('.final_total').forEach(element => {
                         element.textContent = data.final_total
                     });
                 });
         }

         function checkout(items) {
             let dataSet = [];
             const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

             document.querySelectorAll('.qty').forEach((input) => {
                 const id = input?.getAttribute('data-id');
                 const quantity = parseInt(input.value) || 1;
                 // Only push if data-id exists
                 if (id !== null) {
                     dataSet.push({
                         id,
                         quantity
                     });
                 }
             });


             if (dataSet.length >= 1) {
                 fetch('/cart/update', {
                         method: 'PUT',
                         headers: {
                             'Content-Type': 'application/json',
                             'X-CSRF-TOKEN': csrfToken
                         },
                         body: JSON.stringify(dataSet)
                     })
                     .then(response => response.json())
                     .then(result => {
                         window.toast(result?.message || 'Update Succesful', 'success');
                         // Optionally redirect after success
                         // Save to localStorage
                         localStorage.setItem('cartItems', JSON.stringify(cartItems));
                         localStorage.setItem('paymentSaved', 'false');
                         window.location.href = "/checkout";
                     })
                     .catch(error => {
                         window.toast('Update Error', 'error')
                     });
             }

         }

         document.addEventListener('DOMContentLoaded', () => {
             getTotal();
         });

         document.addEventListener('DOMContentLoaded', function() {
             const inputs = document.querySelectorAll('.input-text.qty');

             inputs.forEach(input => {
                 input.addEventListener('input', function() {
                     const qty = parseInt(this.value) || 1;
                     const unitPrice = parseFloat(this.dataset.unitPrice);
                     const subtotalElem = this.closest('tr').querySelector(
                         '.product-subtotal span bdi');

                     // Update the subtotal
                     const newSubtotal = unitPrice * qty;
                     subtotalElem.textContent = newSubtotal.toFixed(2);

                     // Recalculate total for all items
                     let total = 0;
                     document.querySelectorAll('.product-subtotal span bdi').forEach(el => {
                         const val = parseFloat(el.textContent.replace(/[^0-9.-]+/g, ""));
                         if (!isNaN(val)) total += val;
                     });

                     // Update display for total (if such an element exists)
                     const totalDisplay = document.querySelector('#total-price');
                     localStorage.setItem('rawTotal', total)
                     if (totalDisplay) {
                         totalDisplay.textContent = total.toFixed(2);
                     }
                     getTotal()
                 });
             });
         });
     </script>
 @endsection
