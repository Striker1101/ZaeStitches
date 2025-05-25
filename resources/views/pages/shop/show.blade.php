 @extends('layouts.app')

 @section('title', 'Blog')

 @section('body_attributes')
     data-rsssl=1
     class="wp-singular product-template-default single single-product postid-446 wp-custom-logo wp-theme-rey
     wp-child-theme-rey-child theme-rey woocommerce woocommerce-page woocommerce-no-js rey-no-js ltr elementor-default
     elementor-kit-2331 rey-cwidth--default --no-acc-focus single-skin--fullscreen --fixed-summary --fixed-summary-cssfirst
     --fixed-summary-anim --gallery-cascade elementor-opt r-notices"
     data-id="446" itemtype="https://schema.org/WebPage" itemscope="itemscope"
 @endsection

 @section('custom_head')
     <style>
         img:is([sizes="auto" i],
         [sizes^="auto," i]) {
             contain-intrinsic-size: 3000px 1500px
         }
     </style>

     <link data-minify="1" id="rey-hs-css" type="text/css" href="{{ asset('css/rey/hs-641e3c6e93.css') }}" rel="stylesheet"
         media="all" />
     <link rel="stylesheet" href="{{ asset('css/rey/ds-8c1da74ca4.css') }}">
 @endsection


 @section('content')
     <div class="container py-5 m-3">
         <div class="flex gap-2">
             {{-- Product Gallery --}}
             <div class="col-md-6">
                 <div class="border  p-2">
                     <img src="{{ asset('storage/' . $product->featured_image) }}" alt="{{ $product->title }}"
                         class="img-fluid w-100 mb-3 rounded">

                 </div>
             </div>

             {{-- Product Details & Actions --}}
             <div class="col-md-6">
                 <h2 class="fw-bold">{{ $product->title }}</h2>
                 <p class="text-muted font-extrabold  mb-1">Brand: {{ $product->brand->name ?? 'N/A' }}</p>
                 <p>{{ $product->description }}</p>

                 {{-- Variant Picker --}}
                 @php
                     $uniqueSizes = $product->productVariants->pluck('size.name')->unique()->filter();
                     $uniqueColors = $product->productVariants->pluck('color.name')->unique()->filter();
                 @endphp

                 <div class="mb-3 flex gap-4">
                     <div>
                         <label class="form-label">Choose Size:</label>
                         <select class="form-select" id="size">
                             @foreach ($uniqueSizes as $size)
                                 <option>{{ $size }}</option>
                             @endforeach
                         </select>
                     </div>

                     <div>
                         <label class="form-label">Choose Color:</label>
                         <select class="form-select" id="color">
                             @foreach ($uniqueColors as $color)
                                 <option>{{ $color }}</option>
                             @endforeach
                         </select>
                     </div>
                 </div>


                 {{-- Action Buttons --}}
                 <div class="flex flex-col md:flex-row items-start md:items-center gap-4 mb-6">
                     <!-- Quantity Control -->
                     <div class="flex items-center gap-2">
                         <span class="text-sm font-medium text-gray-700">Quantity:</span>
                         <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                             <button onclick="decreaseQty()"
                                 class="px-5 py-1.5 text-lg bg-gray-100 hover:bg-gray-200">−</button>
                             <input id="qty" type="number" value="1" min="1"
                                 class="w-5 text-center border-x border-gray-300 outline-none focus:ring-0 focus:outline-none">
                             <button onclick="increaseQty()"
                                 class="px-5 py-1.5 text-lg bg-gray-100 hover:bg-gray-200">+</button>
                         </div>
                     </div>

                     <!-- Add to Cart Button -->
                     <button class="btn btn-primary" onclick="addToCart()">Add to Cart</button>
                     <!-- View Size Guide Button -->
                     <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                         class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-5 rounded-lg shadow-md">
                         View Size Guide
                     </button>
                 </div>

                 @php
                     $variants = $product->productVariants->map(function ($variant) {
                         return [
                             'size' => $variant->size->name ?? null,
                             'color' => $variant->color->name ?? null,
                             'stock' => $variant->stock ?? 0,
                         ];
                     });
                 @endphp

                 <script>
                     const qtyInput = document.getElementById('qty');

                     function increaseQty() {
                         let current = parseInt(qtyInput.value) || 1;
                         qtyInput.value = current + 1;
                     }

                     function decreaseQty() {
                         let current = parseInt(qtyInput.value) || 1;
                         if (current > 1) qtyInput.value = current - 1;
                     }

                     function toast(message, type = 'success') {
                         Toastify({
                             text: message,
                             duration: 3000,
                             gravity: "top",
                             position: "right",
                             backgroundColor: type === 'error' ? "#f44336" : "#4CAF50",
                             close: true
                         }).showToast();
                     }

                     function addToCart() {
                         let size = document.getElementById('size').value;
                         let color = document.getElementById('color').value;
                         let qty = parseInt(document.getElementById('qty').value);

                         if (!size) {
                             toast('Please select a size.', 'error');
                             return;
                         }

                         if (!color) {
                             toast('Please select a color.', 'error');
                             return;
                         }

                         if (qty < 1) {
                             toast('Quantity must be at least 1.', 'error');
                             return;
                         }

                         const variants = @json($variants);

                         const match = variants.find(v => v.size === size && v.color === color);

                         if (!match) {
                             toast('This combination is not available.', 'error');
                             return;
                         }

                         if (qty > match.stock) {
                             toast(`Only ${match.stock} items available in stock.`, 'error');
                             return;
                         }

                         toast(`Added to cart: ${qty} × ${size} / ${color}`, 'success');
                     }
                 </script>


             </div>
         </div>

         <div class="w-full flex gap-5 justify-center">
             {{-- Specifications --}}
             <div>
                 <h5 class="text-lg font-semibold mb-2">Specifications</h5>
                 <ul class="space-y-2 mb-4">
                     <li><strong>Weight:</strong> {{ $product->weight }}</li>
                     <li><strong>Rating:</strong> {{ $product->rating }}</li>
                     <li><strong>Dimensions:</strong> {{ $product->dimension }}</li>
                     <li><strong>Material:</strong> {{ $product->material }}</li>
                 </ul>
             </div>

             {{-- Static Info --}}
             <div>
                 <h5 class="text-lg font-semibold mb-2">Information</h5>
                 <ul class="space-y-2">
                     <li><strong>Shipping:</strong> Free worldwide over $100</li>
                     <li><strong>Returns:</strong> 14-day refund/exchange policy</li>
                     <li><strong>Support:</strong> (+44) 555 88 65 or support@reytheme.com</li>
                 </ul>
             </div>
         </div>

         <div class="flex flex-wrap gap-4 g-2">
             @foreach ($product->media as $media)
                 <div class="col-3">
                     <img src="{{ asset('storage/' . $media->url) }}" class="img-thumbnail" alt="Media">
                 </div>
             @endforeach
         </div>



         {{-- Comments --}}
         <div class="container m-3 row mt-5">
             <div class="col-md-8">
                 <h4>Comments ({{ $product->comments->count() }})</h4>
                 <ul class="list-group mb-4">
                     @foreach ($product->comments as $comment)
                         <li class="list-group-item">
                             <strong>{{ $comment->user->name ?? 'Anonymous' }}:</strong> {{ $comment->content }}
                             <br><small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                         </li>
                     @endforeach
                 </ul>

                 <form action="{{ route('comment.store', $product->id) }}" method="POST">
                     @csrf
                     <div class="mb-3">
                         <label for="comment" class="form-label">Leave a comment</label>
                         <textarea name="content" id="comment" rows="3" class="form-control" required></textarea>
                     </div>
                     <button class="btn btn-primary">Post Comment</button>
                 </form>
             </div>
         </div>

         {{-- More Products --}}
         <div class="row mt-5">
             <div class="col-md-12">
                 <h4>More Products</h4>

                 <section data-tabs-id="tabs-611289f524f85"
                     class="--tabs-effect-default elementor-section elementor-top-section elementor-element elementor-element-205ba691 rey-tabs-section elementor-section-boxed elementor-section-height-default elementor-section-height-default"
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
     </div>



     <!-- Main modal -->
     <div id="default-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
         <div class="relative p-4 w-full max-w-2xl max-h-full">
             <!-- Modal content -->
             <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                 <!-- Modal header -->
                 <div
                     class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                     <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                         Sizes Description
                     </h3>
                     <button type="button"
                         class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                         data-modal-hide="default-modal">
                         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                         </svg>
                         <span class="sr-only">Close modal</span>
                     </button>
                 </div>
                 <!-- Modal body -->
                 <div class="p-4 md:p-5 space-y-4">
                     <!-- Size Guide Modal Content -->
                     <div class="space-y-6">
                         <!-- CM Table -->
                         <div>
                             <h3 class="text-lg font-semibold mb-2">CM</h3>
                             <div class="overflow-x-auto">
                                 <table class="min-w-full border border-gray-300 text-sm text-left">
                                     <thead class="bg-gray-100">
                                         <tr>
                                             <th class="border px-3 py-2">Size</th>
                                             <th class="border px-3 py-2">Bust</th>
                                             <th class="border px-3 py-2">Hip</th>
                                             <th class="border px-3 py-2">Low Hip</th>
                                             <th class="border px-3 py-2">Waist</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr class="border-t">
                                             <td class="px-3 py-2">UK 4</td>
                                             <td class="px-3 py-2">79</td>
                                             <td class="px-3 py-2">76</td>
                                             <td class="px-3 py-2">84</td>
                                             <td class="px-3 py-2">60</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 6</td>
                                             <td class="px-3 py-2">81.5</td>
                                             <td class="px-3 py-2">78.5</td>
                                             <td class="px-3 py-2">86.5</td>
                                             <td class="px-3 py-2">62.5</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 8</td>
                                             <td class="px-3 py-2">84</td>
                                             <td class="px-3 py-2">81</td>
                                             <td class="px-3 py-2">89</td>
                                             <td class="px-3 py-2">65</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 10</td>
                                             <td class="px-3 py-2">89</td>
                                             <td class="px-3 py-2">86</td>
                                             <td class="px-3 py-2">94</td>
                                             <td class="px-3 py-2">70</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 12</td>
                                             <td class="px-3 py-2">94</td>
                                             <td class="px-3 py-2">91</td>
                                             <td class="px-3 py-2">99</td>
                                             <td class="px-3 py-2">75</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 14</td>
                                             <td class="px-3 py-2">99</td>
                                             <td class="px-3 py-2">96</td>
                                             <td class="px-3 py-2">104</td>
                                             <td class="px-3 py-2">80</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 16</td>
                                             <td class="px-3 py-2">104</td>
                                             <td class="px-3 py-2">101</td>
                                             <td class="px-3 py-2">109</td>
                                             <td class="px-3 py-2">85</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 18</td>
                                             <td class="px-3 py-2">111</td>
                                             <td class="px-3 py-2">108</td>
                                             <td class="px-3 py-2">116</td>
                                             <td class="px-3 py-2">92</td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>

                         <!-- INCH Table -->
                         <div>
                             <h3 class="text-lg font-semibold mb-2">INCH</h3>
                             <div class="overflow-x-auto">
                                 <table class="min-w-full border border-gray-300 text-sm text-left">
                                     <thead class="bg-gray-100">
                                         <tr>
                                             <th class="border px-3 py-2">Size</th>
                                             <th class="border px-3 py-2">Bust</th>
                                             <th class="border px-3 py-2">Hip</th>
                                             <th class="border px-3 py-2">Low Hip</th>
                                             <th class="border px-3 py-2">Waist</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td class="px-3 py-2">UK 4</td>
                                             <td class="px-3 py-2">31.1</td>
                                             <td class="px-3 py-2">29.9</td>
                                             <td class="px-3 py-2">33.1</td>
                                             <td class="px-3 py-2">23.6</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 6</td>
                                             <td class="px-3 py-2">32.1</td>
                                             <td class="px-3 py-2">30.9</td>
                                             <td class="px-3 py-2">34.1</td>
                                             <td class="px-3 py-2">24.6</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 8</td>
                                             <td class="px-3 py-2">33.1</td>
                                             <td class="px-3 py-2">31.9</td>
                                             <td class="px-3 py-2">35</td>
                                             <td class="px-3 py-2">25.6</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 10</td>
                                             <td class="px-3 py-2">35</td>
                                             <td class="px-3 py-2">33.9</td>
                                             <td class="px-3 py-2">37</td>
                                             <td class="px-3 py-2">27.6</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 12</td>
                                             <td class="px-3 py-2">37</td>
                                             <td class="px-3 py-2">35.8</td>
                                             <td class="px-3 py-2">39</td>
                                             <td class="px-3 py-2">29.5</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 14</td>
                                             <td class="px-3 py-2">39</td>
                                             <td class="px-3 py-2">37.8</td>
                                             <td class="px-3 py-2">40.9</td>
                                             <td class="px-3 py-2">31.5</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 16</td>
                                             <td class="px-3 py-2">40.9</td>
                                             <td class="px-3 py-2">39.8</td>
                                             <td class="px-3 py-2">42.9</td>
                                             <td class="px-3 py-2">33.5</td>
                                         </tr>
                                         <tr>
                                             <td class="px-3 py-2">UK 18</td>
                                             <td class="px-3 py-2">43.7</td>
                                             <td class="px-3 py-2">42.5</td>
                                             <td class="px-3 py-2">45.7</td>
                                             <td class="px-3 py-2">36.2</td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>

                         <!-- International Conversion Table -->
                         <div>
                             <h3 class="text-lg font-semibold mb-2">International Conversions</h3>
                             <div class="overflow-x-auto">
                                 <table class="min-w-full border border-gray-300 text-sm text-left">
                                     <thead class="bg-gray-100">
                                         <tr>
                                             <th class="border px-3 py-2">EU</th>
                                             <th class="border px-3 py-2">UK</th>
                                             <th class="border px-3 py-2">US</th>
                                             <th class="border px-3 py-2">FR</th>
                                             <th class="border px-3 py-2">ES</th>
                                             <th class="border px-3 py-2">IT</th>
                                             <th class="border px-3 py-2">RU</th>
                                             <th class="border px-3 py-2">AU</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td class="px-3 py-2">32</td>
                                             <td class="px-3 py-2">4</td>
                                             <td class="px-3 py-2">0</td>
                                             <td class="px-3 py-2">32</td>
                                             <td class="px-3 py-2">32</td>
                                             <td class="px-3 py-2">36</td>
                                             <td class="px-3 py-2">38</td>
                                             <td class="px-3 py-2">4</td>
                                         </tr>
                                         <tr>
                                             <td>34</td>
                                             <td>6</td>
                                             <td>2</td>
                                             <td>34</td>
                                             <td>34</td>
                                             <td>38</td>
                                             <td>40</td>
                                             <td>6</td>
                                         </tr>
                                         <tr>
                                             <td>36</td>
                                             <td>8</td>
                                             <td>4</td>
                                             <td>36</td>
                                             <td>36</td>
                                             <td>40</td>
                                             <td>42</td>
                                             <td>8</td>
                                         </tr>
                                         <tr>
                                             <td>38</td>
                                             <td>10</td>
                                             <td>6</td>
                                             <td>38</td>
                                             <td>38</td>
                                             <td>42</td>
                                             <td>44</td>
                                             <td>10</td>
                                         </tr>
                                         <tr>
                                             <td>40</td>
                                             <td>12</td>
                                             <td>8</td>
                                             <td>40</td>
                                             <td>40</td>
                                             <td>44</td>
                                             <td>46</td>
                                             <td>12</td>
                                         </tr>
                                         <tr>
                                             <td>42</td>
                                             <td>14</td>
                                             <td>10</td>
                                             <td>42</td>
                                             <td>42</td>
                                             <td>46</td>
                                             <td>48</td>
                                             <td>14</td>
                                         </tr>
                                         <tr>
                                             <td>44</td>
                                             <td>16</td>
                                             <td>12</td>
                                             <td>44</td>
                                             <td>44</td>
                                             <td>48</td>
                                             <td>50</td>
                                             <td>16</td>
                                         </tr>
                                         <tr>
                                             <td>46</td>
                                             <td>18</td>
                                             <td>14</td>
                                             <td>46</td>
                                             <td>46</td>
                                             <td>50</td>
                                             <td>52</td>
                                             <td>18</td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Modal footer -->
                 <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                 </div>
             </div>
         </div>
     </div>


 @endsection
