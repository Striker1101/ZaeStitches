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
     <link data-minify="1" id="rey-hs-css" type="text/css" href="{{ asset('css/rey/hs-32991a17de.css') }}?ver=1746068104"
         rel="stylesheet" media="all" />
     <link id="rey-ds-css" type="text/css" href="{{ asset('css/rey/ds-bc4eb19a9a.css') }}" data-noptimize=""
         data-no-optimize="1" data-pagespeed-no-defer="" data-pagespeed-no-transform="" data-minify="1" rel="preload"
         as="style" onload="this.onload=null;this.rel='stylesheet';" media="all" />
     <noscript>
         <link rel="stylesheet" href="{{ asset('css/rey/ds-bc4eb19a9a.css') }}" data-no-minify="1">
     </noscript>
     <link rel='stylesheet' id='elementor-post-1117-css' href='{{ asset('css/posts/post-1117.css') }}' type='text/css'
         media='all' />
 @endsection

 @section('header')

 @endsection

 @section('content')
     <div id="content" class="rey-siteContent --tpl-default">


         <div class="rey-siteContainer ">
             <div class="rey-siteRow">


                 <main id="main" class="rey-siteMain --is-bloglist post-width--c --filter-panel">

                     <div class="rey-siteMain-inner">

                         @php
                             $category = $blog->categories->first();
                             $categoryName = $category?->name ?? 'Style';
                         @endphp

                         <article id="post-464"
                             class="rey-postItem post-464 post type-post status-publish format-standard has-post-thumbnail hentry category-style --content-e">
                             <div class="rey-postItem-catText">{{ $categoryName }}</div>
                             <header class="rey-postHeader">
                                 <div class="rey-postCategories"><span class="screen-reader-text">Posted
                                         in</span>
                                     <ul class="post-categories">
                                         <li>
                                             <a href="{{ $category ? route('shop', $category?->name) : '#' }}"
                                                 rel="category tag">{{ $category?->name }}</a>
                                         </li>
                                     </ul>
                                 </div>
                                 <h1 class="rey-postTitle entry-title">
                                     {{ $blog->title }}
                                 </h1>
                                 <div class="rey-postInfo">
                                     <span class="rey-postAuthor">By
                                         <a href="#" title="Posts by admin" rel="author">{{ $blog->user->name }}
                                         </a>
                                     </span>
                                     <span class="rey-entryDate">
                                         <a href="#" rel="bookmark">
                                             <time datetime="{{ $blog->created_at }}">
                                                 {{ $blog->created_at->format('jS F, Y') }}
                                             </time>
                                         </a></span><span class="rey-entryComment"><a href="#"><svg aria-hidden="true"
                                                 role="img" id="rey-icon-comments-6833193989330"
                                                 class="rey-icon rey-icon-comments " viewbox="0 0 24 23">
                                                 <path
                                                     d="M8.07,22.99 C7.94652326,22.991009 7.82410184,22.9672048 7.71,22.92 C7.33011475,22.7729193 7.0797889,22.4073641 7.08,22 L7.08,17.88 C2.85534035,17.0625739 -0.144710677,13.2902325 0.01,8.99 C0.01,4.04 3.73,0.01 8.31,0.01 L15.71,0.01 C20.29,0.01 24.01,4.04 24.01,8.99 C24.01,13.94 20.29,17.98 15.71,17.98 L13.3,17.98 L8.79,22.69 C8.60171085,22.8851148 8.34112535,22.9936921 8.07,22.99 Z M8.31,1.99 C4.82,1.99 1.99,5.13 1.99,8.99 C1.99,12.8 4.68,15.87 8.11,15.99 C8.64275325,16.0113046 9.06509402,16.4468435 9.07,16.98 L9.07,19.53 L12.16,16.3 C12.3470714,16.1091444 12.6027541,16.0011094 12.87,16 L15.71,16 C19.19,16 22.03,12.85 22.03,8.99 C22.03,5.13 19.19,1.99 15.71,1.99 L8.31,1.99 Z">
                                                 </path>
                                             </svg> {{ $blog->comments->count() }}
                                         </a>
                                         <span class="screen-reader-text">
                                             {{ $blog->user->name }}
                                         </span>
                                     </span>
                                     <span class="rey-postDuration">{{ $blog->duration }}
                                         min read
                                     </span>
                                 </div>

                             </header><!-- .rey-postHeader -->
                             <figure class="rey-postMedia rey-postThumbnail">
                                 <img width="1024" height="682" src="{{ $blog->featured_image }}"
                                     class="attachment-large size-large wp-post-image" alt="" decoding="async"
                                     data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" />

                                 <div class="rey-postCategories"><span class="screen-reader-text">Posted
                                         in</span>
                                     <ul class="post-categories">
                                         <li>
                                             @foreach ($blog->tags as $tag)
                                                 <a href="{{ route('shop', ['tag' => $tag->name]) }}"
                                                     rel="category tag">{{ $tag->name }}
                                                 </a>
                                             @endforeach
                                         </li>
                                     </ul>
                                 </div>
                             </figure>
                             <div class="rey-postContent ">
                                 {{ $blog->content }}
                             </div><!-- .rey-postContent -->
                         </article><!-- #post-${ID} -->

                         <div class="flex g-2 flex-wrap gap-4">
                             @foreach ($blog->media as $media)
                                 <div class="col-3">
                                     <img height="250" width="300" src="{{ asset( $media->url) }}" class="img-thumbnail" alt="Media">
                                 </div>
                             @endforeach
                         </div>



                         @if ($previous || $next)
                             <nav data-lazy-hidden class="navigation rey-postNav post-navigation" aria-label="Posts">
                                 <h2 class="screen-reader-text">Post navigation</h2>
                                 <div class="nav-links">

                                     @if ($previous)
                                         <div class="nav-previous">
                                             <a href="{{ route('blog.show', $previous->slug) }}" rel="prev">
                                                 <span class="rey-postNav__meta" aria-hidden="true">Previous
                                                     Post</span><br />
                                                 <span class="rey-postNav__title">{{ $previous->title }}</span>
                                             </a>
                                         </div>
                                     @endif

                                     @if ($next)
                                         <div class="nav-next">
                                             <a href="{{ route('blog.show', $next->slug) }}" rel="next">
                                                 <span class="rey-postNav__meta" aria-hidden="true">Next Post</span><br />
                                                 <span class="rey-postNav__title">{{ $next->title }}</span>
                                             </a>
                                         </div>
                                     @endif

                                 </div>
                             </nav>
                         @endif
                         <section id="comments" class="rey-postComments post-comments">
                             <div class="rey-commentForm">
                                 <div id="respond" class="comment-respond">
                                     <h3 id="reply-title" class="comment-reply-title rey-commentForm__replyTitle">Join the
                                         conversation <small><a rel="nofollow" id="cancel-comment-reply-link"
                                                 href="/london/ullac-spring-summer-2019-gender-neutral-lookbook/#respond"
                                                 style="display:none;">Cancel reply</a></small></h3>
                                     <form action="{{ route('comment.store') }}" method="post" id="commentform"
                                         class="comment-form rey-commentForm__form" novalidate>
                                         <div class="rey-commentForm__comment form-row">
                                             <div class="col">
                                                 <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"
                                                     placeholder="Add your comment ..">
                                                    </textarea>
                                             </div>
                                         </div>

                                         <input name="submit" type="submit" id="submit"
                                             class="btn btn-primary rey-commentForm__submit" value="Post Comment" />

                                     </form>
                                 </div><!-- #respond -->
                             </div>
                         </section><!-- .comments-area -->


                     </div>
                     <!-- .rey-siteMain-inner -->


                 </main>
                 <!-- .rey-siteMain -->

             </div>


         </div>
         <!-- .rey-siteContainer -->


     </div>
 @endsection
