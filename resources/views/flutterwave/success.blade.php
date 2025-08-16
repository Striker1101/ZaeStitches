 @extends('layouts.app')

 @section('title', 'Payement Successfull')

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


 @section(section: 'content')

     <script>
         localStorage.clear()
     </script>

     <body class="flex my-4 py-5 items-center justify-center h-screen" style="background-color: #0000;">

         <div class="max-w-lg mx-auto p-8 bg-white shadow-lg rounded-lg text-center my-4">
             <div class="flex justify-center mb-4">
                 <div class="bg-[#FB9129] rounded-full p-6 flex items-center justify-center">
                     <img class="w-16 h-16 mx-auto" src="https://img.icons8.com/fluency/48/ok.png"
                         alt="Payment Successful Icon" />
                 </div>
             </div>
             <h1 class="text-3xl font-semibold mb-4 text-[#0A0E27]">Payment Successful!</h1>
             <p class="text-gray-600 mb-6">Thank you for your payment. Your transaction has been completed successfully.</p>
             <a href="/"
                 class="inline-block py-3 px-6 bg-[#FB9129] text-white font-semibold rounded-lg shadow-md hover:bg-[#D17A24] transition duration-300">Go
                 to Homepage</a>
         </div>
     </body>

     <script>
         (function() {
             localStorage.removeItem('cartItems');
             localStorage.removeItem('guessToken');
         })();
     </script>
 @endsection
