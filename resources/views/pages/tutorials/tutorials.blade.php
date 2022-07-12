@extends('layouts.main')
@section('head')
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">               {!!SEO::generate() !!}
       
      <title>Right Sidebar &#8211; Halstein</title>
      <meta name='robots' content='max-image-preview:large' />
      <script data-cfasync="false" data-pagespeed-no-defer>//<![CDATA[
         var gtm4wp_datalayer_name = "dataLayer";
         var dataLayer = dataLayer || [];
         //]]>
      </script>
      <link rel='dns-prefetch' href='//export.qodethemes.com' />
      <link rel='dns-prefetch' href='//static.zdassets.com' />
      <link rel='dns-prefetch' href='//fonts.googleapis.com' />
      <link rel='dns-prefetch' href='//s.w.org' />
      <link rel="alternate" type="application/rss+xml" title="Halstein &raquo; Feed" href="https://halstein.qodeinteractive.com/feed/" />
      <link rel="alternate" type="application/rss+xml" title="Halstein &raquo; Comments Feed" href="https://halstein.qodeinteractive.com/comments/feed/" />
      <script type="text/javascript">
         window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/halstein.qodeinteractive.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.3"}};
         !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
      </script>
      <style type="text/css">
        img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 .07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
         #mobile_table{
            display: none;;
         }
         @media screen and (max-width: 600px) {
            #table {
               display: none;
            }
            #mobile_table{
               display: block
            }
         }
         @media screen and (max-width: 750px) {
            #table {
               display: none;
            }
            #mobile_table{
               display: block
            }
         }
      </style>
<link rel='stylesheet' id='sb_instagram_styles-css' href='{{asset("wp-content/sbi-styles.min.css")}}' type='text/css' media='all' />
      <link rel='stylesheet' id='dripicons-css' href='/wp-content/dripicons.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='elegant-icons-css' href='/wp-content/elegant-icons.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='font-awesome-css' href='/wp-content/all.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='fontkiko-css' href='/wp-content/kiko-all.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='ionicons-css' href='/wp-content/ionicons.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='linea-icons-css' href='/wp-content/linea-icons.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='linear-icons-css' href='/wp-content/linear-icons.min.css' type='text/css' media='all' />
      <style id="material-icons-css" media="all">@font-face {
         font-family: 'Material Icons';
         font-style: normal;
         font-weight: 400;
         src: url(/fonts.gstatic.com/s/materialicons/v121/flUhRq6tzZclQEJ-Vdg-IuiaDsNZ.ttf) format('truetype');
         }
         .material-icons {
         font-family: 'Material Icons';
         font-weight: normal;
         font-style: normal;
         font-size: 24px;
         line-height: 1;
         letter-spacing: normal;
         text-transform: none;
         display: inline-block;
         white-space: nowrap;
         word-wrap: normal;
         direction: ltr;
         }
      </style>
      <link rel='stylesheet' id='simple-line-icons-css' href='{{asset('wp-content/simple-line-icons.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='wp-block-library-css' href='{{asset('wp-content/style.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='{{asset('wp-content/wc-blocks-vendors-style.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='wc-blocks-style-css' href='{{asset('wp-content/wc-blocks-style.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='cf7mls-css' href='{{asset('wp-content/cf7mls.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='cf7mls_animate-css' href='{{asset('wp-content/animate.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='contact-form-7-css' href='{{asset('wp-content/styles.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='rabbit_css-css' href='{{asset('wp-content/rbt-modules.css')}}' type='text/css' media='all' />
      <style id='woocommerce-inline-inline-css' type='text/css'>
         .woocommerce form .form-row .required { visibility: visible; }
      </style>
      <link rel='stylesheet' id='swiper-css' href='{{asset('wp-content/swiper.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css' href='https://halstein.qodeinteractive.com/wp-content/themes/halstein/assets/css/grid.min.css?ver=5.9' type='text/css' media='all' />
      <link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css' href='{{asset('wp-content/helper-parts.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='qi-addons-for-elementor-style-css' href='{{asset('wp-content/main1.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='perfect-scrollbar-css' href='{{asset('wp-content/perfect-scrollbar.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='halstein-main-css' href='{{asset('wp-content/main2.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='halstein-core-style-css' href='{{asset("wp-content/halstein-core.min.css")}}' type='text/css' media='all' />
     
      <script type='text/javascript' src='{{asset('wp-content/jquery.min.js')}}' id='jquery-core-js'></script>
      <script type='text/javascript' src='{{asset('wp-content/jquery-migrate.min.js')}}' id='jquery-migrate-js'></script>
      <script type='text/javascript' src='{{asset('wp-content/v4-shims.min.js')}}' id='font-awesome-4-shim-js'></script>
  
      <script data-cfasync="false" data-pagespeed-no-defer>//<![CDATA[
         var dataLayer_content = {"pagePostType":"page","pagePostType2":"single-page","pagePostAuthor":"admin"};
         dataLayer.push( dataLayer_content );//]]>
      </script>
        
      <noscript>
         <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
      </noscript>
      <meta name="generator" content="Powered by Slider Revolution 6.5.14 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
      <link rel="icon" href="{{asset("logo/logo.png")}}" sizes="32x32" />
      <link rel="icon" href="{{asset("logo/logo.png")}}" sizes="192x192" />
      <link rel="apple-touch-icon" href="{{asset("logo/logo.png")}}" />
      <meta name="msapplication-TileImage" content="{{asset("logo/logo.png")}}" />
      <script>function setREVStartSize(e){
         //window.requestAnimationFrame(function() {
         	window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
         	window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
         	try {
         		var pw = document.getElementById(e.c).parentNode.offsetWidth,
         			newh;
         		pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
         		e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
         		e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
         		e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
         		e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
         		e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
         		e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
         		e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
         		if(e.layout==="fullscreen" || e.l==="fullscreen")
         			newh = Math.max(e.mh,window.RSIH);
         		else{
         			e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
         			for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
         			e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
         			e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
         			for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
         								
         			var nl = new Array(e.rl.length),
         				ix = 0,
         				sl;
         			e.tabw = e.tabhide>=pw ? 0 : e.tabw;
         			e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
         			e.tabh = e.tabhide>=pw ? 0 : e.tabh;
         			e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
         			for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
         			sl = nl[0];
         			for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
         			var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
         			newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
         		}
         		var el = document.getElementById(e.c);
         		if (el!==null && el) el.style.height = newh+"px";
         		el = document.getElementById(e.c+"_wrapper");
         		if (el!==null && el) {
         			el.style.height = newh+"px";
         			el.style.display = "block";
         		}
         	} catch(e){
         		console.log("Failure at Presize of Slider:" + e)
         	}
         //});
          };
      </script>
   </head>
@endsection
@section('content')
<div id="qodef-page-outer">
    <div style="background: #00acd4" class="qodef-page-title qodef-m qodef-title--standard-with-breadcrumbs qodef-alignment--left qodef-vertical-alignment--header-bottom">
       <div class="qodef-m-inner">
          <div class="qodef-m-content qodef-content-grid ">
             <h1 class="qodef-m-title entry-title">
               Tutorials	
             </h1>
             <div itemprop="breadcrumb" class="qodef-breadcrumbs"><a itemprop="url" class="qodef-breadcrumbs-link" href="{{route("index")}}"><span itemprop="title">Home</span></a><span class="qodef-breadcrumbs-separator"></span><span itemprop="title" class="qodef-breadcrumbs-current">Tutorials</span></div>
          </div>
       </div>
    </div>
    <div id="qodef-page-inner" class="qodef-content-grid">
       <main id="qodef-page-content" class="qodef-grid qodef-layout--template qodef-gutter--large" role="main">
          <div class="qodef-grid-inner clear">
             <div class="qodef-grid-item qodef-page-content-section qodef-col--9">
                <div data-elementor-type="wp-page" data-elementor-id="249" class="elementor elementor-249" data-elementor-settings="[]">
                   <div class="elementor-section-wrap">
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-606e6fe elementor-section-boxed elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="606e6fe" data-element_type="section">
                         <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f88ff36" data-id="f88ff36" data-element_type="column">
                               <div class="elementor-widget-wrap elementor-element-populated">
                                  <div class="elementor-element elementor-element-af59446 elementor-widget elementor-widget-halstein_core_blog_list" data-id="af59446" data-element_type="widget" data-widget_type="halstein_core_blog_list.default">
                                     <div class="elementor-widget-container">
                                        <div class="qodef-shortcode qodef-m  qodef-blog qodef--list qodef-item-layout--standard qodef-grid qodef-layout--columns  qodef-gutter--huge qodef-col-num--1   qodef-item-layout--standard qodef-pagination--on qodef-pagination-type--standard qodef-responsive--custom qodef-col-num--1440--1 qodef-col-num--1366--1 qodef-col-num--1024--1 qodef-col-num--768--1 qodef-col-num--680--1 qodef-col-num--480--1" data-options="{&quot;plugin&quot;:&quot;halstein_core&quot;,&quot;module&quot;:&quot;blog\/shortcodes&quot;,&quot;shortcode&quot;:&quot;blog-list&quot;,&quot;post_type&quot;:&quot;post&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:2,&quot;behavior&quot;:&quot;columns&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;1&quot;,&quot;columns_responsive&quot;:&quot;custom&quot;,&quot;columns_1440&quot;:&quot;1&quot;,&quot;columns_1366&quot;:&quot;1&quot;,&quot;columns_1024&quot;:&quot;1&quot;,&quot;columns_768&quot;:&quot;1&quot;,&quot;columns_680&quot;:&quot;1&quot;,&quot;columns_480&quot;:&quot;1&quot;,&quot;space&quot;:&quot;huge&quot;,&quot;posts_per_page&quot;:&quot;5&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;additional_params&quot;:&quot;tax&quot;,&quot;tax&quot;:&quot;category&quot;,&quot;tax_slug&quot;:&quot;bussines&quot;,&quot;layout&quot;:&quot;standard&quot;,&quot;title_tag&quot;:&quot;h2&quot;,&quot;excerpt_length&quot;:&quot;800&quot;,&quot;pagination_type&quot;:&quot;standard&quot;,&quot;object_class_name&quot;:&quot;HalsteinCore_Blog_List_Shortcode&quot;,&quot;taxonomy_filter&quot;:&quot;category&quot;,&quot;additional_query_args&quot;:{&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;category&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;terms&quot;:&quot;bussines&quot;}]},&quot;space_value&quot;:40}">
                                           <div class="qodef-grid-inner clear">
                                              @foreach ($tutorials as $tutorial)
                                              <article class="qodef-e qodef-blog-item qodef-grid-item qodef-item--full post-167 post type-post status-publish format-standard has-post-thumbnail hentry category-bussines tag-marketing">
                                                 <div class="qodef-e-inner">
                                                    <div class="qodef-e-media">
                                                       <div class="qodef-e-media-image">
                                                          <a itemprop="url" href="{{$tutorial->show()}}">
                                                          <img width="1300" height="761" src="{{$tutorial->cover()}}" class="attachment-full size-full wp-post-image" alt="L" srcset="{{$tutorial->cover()}} 1300w, {{$tutorial->cover()}} 600w, {{$tutorial->cover()}} 800w, {{$tutorial->cover()}} 300w, {{$tutorial->cover()}} 1024w, {{$tutorial->cover()}} 768w" sizes="(max-width: 1300px) 100vw, 1300px" /> </a>
                                                       </div>
                                                    </div>
                                                    <div class="qodef-e-content">
                                                       <div class="qodef-e-top-holder">
                                                          <div class="qodef-e-info">
                                                             <a itemprop="dateCreated" href="https://halstein.qodeinteractive.com/2021/10/" class="entry-date published updated">
                                                             {{$tutorial->created_at->diffForHumans()}}</a>
                                                             <div class="qodef-info-separator-end"></div>
                                                          </div>
                                                       </div>
                                                       <div class="qodef-e-text">
                                                          <h2 itemprop="name" class="qodef-e-title entry-title">
                                                             <a itemprop="url" class="qodef-e-title-link" href="https://halstein.qodeinteractive.com/discover-a-better-way-of-redefining-company-goals-faster/">
                                                             {{$tutorial->title}}	</a>
                                                          </h2>
                                                          <p itemprop="description" class="qodef-e-excerpt">{{$tutorial->short_des}}</p>
                                                       </div>
                                                       <div class="qodef-e-bottom-holder">
                                                          <div class="qodef-e-left">
                                                             <div class="qodef-e-read-more">
                                                                <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link " href="{{$tutorial->show()}}" target="_self">
                                                                   <span class="qodef-m-text">Read More</span> 
                                                                   <span class="qodef-m-icon">
                                                                      <svg class="qodef-svg--button-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17" viewBox="0 0 17 20" style="enable-background:new 0 0 17 20;" xml:space="preserve">
                                                                         <polyline class="qodef-m-arrow" points="7.1,3.9 13,9.8 7.1,15.9 " />
                                                                         <rect class="qodef-m-line" width="1" height="20" />
                                                                      </svg>
                                                                   </span>
                                                                </a>
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </article>
                                              @endforeach

                                           </div>
                                           
                                           <svg class="qodef-svg--spinner qodef-m-pagination-spinner" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                                              <path d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z"></path>
                                           </svg>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </section>
                   </div>
                </div>
             </div>
               <div class="qodef-grid-item qodef-page-sidebar-section qodef-col--3">
                <aside id="qodef-page-sidebar" role="complementary">
                  
                 <div id="halstein_core_separator-2" class="widget widget_halstein_core_separator" data-area="qodef-main-sidebar">
                    <div class="qodef-shortcode qodef-m  qodef-separator clear   ">
                       <div class="qodef-m-line" style="border-color: #ffffff;margin-top: 1px"></div>
                    </div>
                 </div>
                   <div id="halstein_core_title_widget-7" class="widget widget_halstein_core_title_widget" data-area="qodef-main-sidebar">
                      <h4 class="qodef-widget-title" style="margin-bottom: 22px;color: #14203b">
                         Recent Blogs 
                      </h4>
                   </div>
                   <div id="halstein_core_simple_blog_list-2" class="widget widget_halstein_core_simple_blog_list" data-area="qodef-main-sidebar">
                      <div class="qodef-shortcode qodef-m  qodef-blog qodef-item-layout--minimal qodef-grid qodef-layout--columns  qodef-gutter--no qodef-col-num--1   qodef-item-layout--minimal qodef--no-bottom-space qodef-pagination--off qodef-responsive--predefined qodef-swiper-pagination--on" data-options="{&quot;plugin&quot;:&quot;halstein_core&quot;,&quot;module&quot;:&quot;blog\/shortcodes&quot;,&quot;shortcode&quot;:&quot;blog-list&quot;,&quot;post_type&quot;:&quot;post&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:23,&quot;behavior&quot;:&quot;columns&quot;,&quot;images_proportion&quot;:&quot;thumbnail&quot;,&quot;columns&quot;:1,&quot;columns_responsive&quot;:&quot;predefined&quot;,&quot;columns_1440&quot;:&quot;3&quot;,&quot;columns_1366&quot;:&quot;3&quot;,&quot;columns_1024&quot;:&quot;3&quot;,&quot;columns_768&quot;:&quot;3&quot;,&quot;columns_680&quot;:&quot;3&quot;,&quot;columns_480&quot;:&quot;3&quot;,&quot;space&quot;:&quot;no&quot;,&quot;posts_per_page&quot;:&quot;1&quot;,&quot;orderby&quot;:&quot;title&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;tax&quot;:&quot;category&quot;,&quot;layout&quot;:&quot;minimal&quot;,&quot;title_tag&quot;:&quot;h5&quot;,&quot;is_widget_element&quot;:&quot;yes&quot;,&quot;pagination_type&quot;:&quot;no-pagination&quot;,&quot;object_class_name&quot;:&quot;HalsteinCore_Blog_List_Shortcode&quot;,&quot;taxonomy_filter&quot;:&quot;category&quot;}">
                         <div class="qodef-grid-inner clear">
                             @foreach ($blogs as $recent)
                                <article style="margin-bottom:20px" class="qodef-e qodef-blog-item qodef-grid-item qodef-item--thumbnail post-227 post type-post status-publish format-quote has-post-thumbnail hentry category-bussines tag-marketing post_format-post-format-quote">
                                <div class="qodef-e-inner">
                                    <div class="qodef-e-content">
                                        <div class="qodef-e-top-holder">
                                            <div class="qodef-e-info"> <a title="Title Text: " itemprop="dateCreated" class="entry-date published updated"> {{$recent->created_at->diffForHumans()}}</a> </div>
                                        </div>
                                        <div class="qodef-e-text">
                                            <h5 itemprop="name" class="qodef-e-title entry-title"> <a itemprop="url" class="qodef-e-title-link" href="https://halstein.qodeinteractive.com/an-economist-is-an-expert-who-will-know-tomorrow-why-the-things-he-predicted-yesterday-didnt-happen-today/"> {{$recent->title}}</a></h5>
                                        </div>
                                        <div class="qodef-e-bottom-holder">
                                            <div class="qodef-e-info">
                                            <a href="{{route("tutorials")}}" rel="tag">See All Of Our Blogs</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </article>
                            @endforeach
                         </div>
                      </div>
                   </div>
                </aside>
             </div>
          </div>
       </main>
    </div>
 </div>
@endsection
@section('scripts')
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = true;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
 </script>
 <div class="rbt-toolbar" data-theme="Halstein" data-featured="" data-button-position="80%" data-button-horizontal="right" data-button-alt="no"></div>
  
 <script type="text/javascript">
    var sbiajaxurl = "https://halstein.qodeinteractive.com/wp-admin/admin-ajax.php";
 </script>
 <script type="text/javascript">
    (function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
 </script>
 <link rel='stylesheet' id='mediaelement-css' href='{{asset('wp-content/mediaelementplayer-legacy.min.css')}}' type='text/css' media='all' />
 <link rel='stylesheet' id='wp-mediaelement-css' href='{{asset('wp-content/wp-mediaelement.min.css')}}' type='text/css' media='all' />
 <link rel='stylesheet' id='rs-plugin-settings-css' href='{{asset('wp-content/rs6.css')}}' type='text/css' media='all' />
 <style id='rs-plugin-settings-inline-css' type='text/css'>
    #rs-demo-id {}
 </style>
 <script type='text/javascript' id='cf7mls-js-extra'>
    /* <![CDATA[ */
    var cf7mls_object = {"ajax_url":"https:\/\/halstein.qodeinteractive.com\/wp-admin\/admin-ajax.php","is_rtl":"","disable_submit":"true","cf7mls_error_message":"","scroll_step":"true","disable_enter_key":"false","check_step_before_submit":"true"};
    /* ]]> */
 </script>
 <script type='text/javascript' src='{{asset('wp-content/cf7mls.js')}}' id='cf7mls-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/regenerator-runtime.min.js')}}' id='regenerator-runtime-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/wp-polyfill.min.js')}}' id='wp-polyfill-js'></script>
 <script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {"api":{"root":"https:\/\/halstein.qodeinteractive.com\/wp-json\/","namespace":"contact-form-7\/v1"}};
    /* ]]> */
 </script>
 <script type='text/javascript' src='{{asset('wp-content/index.js')}}' id='contact-form-7-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/rbt-modules.js')}}' id='rabbit_js-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/rbtools.min.js')}}' defer async id='tp-tools-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/rs6.min.js')}}' defer async id='revmin-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/jquery.blockUI.min.js')}}' id='jquery-blockui-js'></script>
 <script type='text/javascript' id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/halstein.qodeinteractive.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
    /* ]]> */
 </script>
 <script type='text/javascript' src='{{asset('wp-content/add-to-cart.min.js')}}' id='wc-add-to-cart-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/js.cookie.min.js')}}' id='js-cookie-js'></script>
 <script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
 </script>
 <script type='text/javascript' src='{{asset('wp-content/woocommerce.min.js')}}' id='woocommerce-js'></script>
 <script type='text/javascript' id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_8a5f8082be7a317dfdf065bd3fc7cd8d","fragment_name":"wc_fragments_8a5f8082be7a317dfdf065bd3fc7cd8d","request_timeout":"5000"};
    /* ]]> */
 </script>
 <script type='text/javascript' src='{{asset('wp-content/cart-fragments.min.js')}}' id='wc-cart-fragments-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/core.min.js')}}' id='jquery-ui-core-js'></script>
 <script type='text/javascript' id='qi-addons-for-elementor-script-js-extra'>
    /* <![CDATA[ */
    var qodefQiAddonsGlobal = {"vars":{"adminBarHeight":0,"iconArrowLeft":"<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>","iconArrowRight":"<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>","iconClose":"<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"}};
    /* ]]> */
 </script>
 <script type='text/javascript' src='{{asset('wp-content/main1.min.js')}}' id='qi-addons-for-elementor-script-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/perfect-scrollbar.jquery.min.js')}}' id='perfect-scrollbar-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/hoverIntent.min.js')}}' id='hoverIntent-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/modernizr.js')}}' id='modernizr-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/jquery.parallax-scroll.js')}}' id='parallax-scroll-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/gsap.min.js')}}' id='gsap-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/skrollr.min.js')}}' id='skrollr-js'></script>
 <script type='text/javascript' id='halstein-main-js-js-extra'>
    /* <![CDATA[ */
    var qodefGlobal = {"vars":{"adminBarHeight":0,"iconArrowLeft":"<svg class=\"qodef-svg--slider-arrow-left\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"\n     xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" width=\"35px\" height=\"53px\"\n     viewBox=\"0 0 35 53\" style=\"enable-background:new 0 0 35 53;\" xml:space=\"preserve\"><polyline points=\"19.6,42.1 4.3,26.6 19.6,10.8 \"\/><line x1=\"34.5\" y1=\"53\" x2=\"34.5\" y2=\"0\"\/><\/svg>","iconArrowRight":"<svg class=\"qodef-svg--slider-arrow-right\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"\n     xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" width=\"35px\" height=\"53px\"\n     viewBox=\"0 0 35 53\" style=\"enable-background:new 0 0 35 53;\" xml:space=\"preserve\"><polyline points=\"15.4,10.9 30.7,26.4 15.4,42.2 \"\/><line x1=\"0.5\" y1=\"0\" x2=\"0.5\" y2=\"53\"\/><\/svg>","iconClose":"<svg class=\"qodef-svg--close\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"\n     xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" width=\"22\"\n     viewBox=\"0 0 22 22\" style=\"enable-background:new 0 0 22 22;\" xml:space=\"preserve\"><line x1=\"1\" y1=\"21\" x2=\"21\" y2=\"1\"\/><line x1=\"1\" y1=\"1\" x2=\"21\" y2=\"21\"\/><\/svg>","qodefStickyHeaderScrollAmount":800,"topAreaHeight":0,"restUrl":"https:\/\/halstein.qodeinteractive.com\/wp-json\/","restNonce":"ae495d29bb","paginationRestRoute":"halstein\/v1\/get-posts","headerHeight":128,"mobileHeaderHeight":70}};
    /* ]]> */
 </script>
 <script type='text/javascript' src='{{asset('wp-content/main2.min.js')}}' id='halstein-main-js-js'></script>
      <script type='text/javascript' src='{{asset('wp-content/underscore.min.js')}}' id='underscore-js'></script>
       
 <script type='text/javascript' src='{{asset('wp-content/markerclusterer.js')}}' id='markerclusterer-js'></script>
      
       
 <script type='text/javascript' src='{{asset('wp-content/halstein-core.min.js')}}' id='halstein-core-script-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/swiper.min.js')}}' id='swiper-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/select2.full.min.js')}}' id='select2-js'></script>
  <script type='text/javascript' src='{{asset('wp-content/wp-embed.min.js')}}' id='wp-embed-js'></script>
 <script type='text/javascript' id='mediaelement-core-js-before'>
    var mejsL10n = {"language":"en","strings":{"mejs.download-file":"Download File","mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen":"Fullscreen","mejs.play":"Play","mejs.pause":"Pause","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.live-broadcast":"Live Broadcast","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
 </script>
 <script type='text/javascript' src='{{asset('wp-content/mediaelement-and-player.min.js')}}' id='mediaelement-core-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/mediaelement-migrate.min.js')}}' id='mediaelement-migrate-js'></script>
 <script type='text/javascript' id='mediaelement-js-extra'>
    /* <![CDATA[ */
    var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
    /* ]]> */
 </script>
 <script type='text/javascript' src='{{asset('wp-content/wp-mediaelement.min.js')}}?ver=5.8.3' id='wp-mediaelement-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/vimeo.min.js')}}' id='mediaelement-vimeo-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/isotope.pkgd.min.js')}}' id='isotope-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/packery-mode.pkgd.min.js')}}' id='packery-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/webpack.runtime.min.js')}}' id='elementor-webpack-runtime-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/frontend-modules.min.js')}}' id='elementor-frontend-modules-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/waypoints.min.js')}}' id='elementor-waypoints-js'></script>
 <script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1440,"default_value":1366,"direction":"max","is_enabled":true},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":true}}},"version":"3.5.3","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"e_import_export":true,"additional_custom_breakpoints":true,"e_hidden_wordpress_widgets":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/halstein.qodeinteractive.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet","viewport_laptop","viewport_widescreen"],"viewport_laptop":1440,"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":249,"title":"Right%20Sidebar%20%E2%80%93%20Halstein","excerpt":"","featuredImage":false}};
 </script>
 <script type='text/javascript' src='{{asset('wp-content/frontend.min.js')}}' id='elementor-frontend-js'></script>
 <script type='text/javascript' src='https://halstein.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=5.8.3' id='qi-addons-for-elementor-elementor-js'></script>
 <script type='text/javascript' id='halstein-core-elementor-js-extra'>
    /* <![CDATA[ */
    var qodefElementorGlobal = {"vars":{"elementorSectionHandler":[],"elementorColumnHandler":[]}};
    /* ]]> */
 </script>
 <script type='text/javascript' src='https://halstein.qodeinteractive.com/wp-content/plugins/halstein-core/inc/plugins/elementor/assets/js/elementor.min.js?ver=5.8.3' id='halstein-core-elementor-js'></script>
@endsection