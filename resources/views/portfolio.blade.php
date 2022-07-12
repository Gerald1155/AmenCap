@extends('layouts.main')

@section('head')
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">               {!!SEO::generate() !!}
       
      <title>Contact Us - Amen Capital</title>
      <meta name="csrf_token" content="{{ csrf_token() }}">
      <meta name='robots' content='max-image-preview:large' />
      <script data-cfasync="false" data-pagespeed-no-defer>//<![CDATA[
         var gtm4wp_datalayer_name = "dataLayer";
         var dataLayer = dataLayer || [];
         //]]>
      </script>
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
      <link rel='stylesheet' id='halstein-main-css' href='{{asset("wp-content/main2.min.css")}}' type='text/css' media='all' />
      <link rel='stylesheet' id='halstein-core-style-css' href='{{asset("wp-content/halstein-core.min.css")}}' type='text/css' media='all' />
    
    <style id="halstein-google-fonts-css" media="all">@font-face {
         font-family: 'Marcellus';
         font-style: normal;
         font-weight: 400;
         font-display: swap;
         src: url(/fonts.gstatic.com/s/marcellus/v8/wEO_EBrOk8hQLDvIAF81WPoP.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 300;
         font-display: swap;
         src: url(/fonts.gstatic.com/s/montserrat/v21/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw3aX8.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 400;
         font-display: swap;
         src: url(/fonts.gstatic.com/s/montserrat/v21/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw3aX8.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 500;
         font-display: swap;
         src: url(/fonts.gstatic.com/s/montserrat/v21/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw3aX8.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 600;
         font-display: swap;
         src: url(/fonts.gstatic.com/s/montserrat/v21/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w3aX8.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 700;
         font-display: swap;
         src: url(/fonts.gstatic.com/s/montserrat/v21/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w3aX8.ttf) format('truetype');
         }
      </style>
      <link rel='stylesheet' id='halstein-grid-css' href='https://halstein.qodeinteractive.com/wp-content/themes/halstein/assets/css/grid.min.css?ver=5.9' type='text/css' media='all' />
      <link rel='stylesheet' id='halstein-style-css' href='{{asset("wp-content/style.css")}}' type='text/css' media='all' />
      <style id='halstein-style-inline-css' type='text/css'>
         #qodef-page-footer { background-image: url(https://halstein.qodeinteractive.com/wp-content/uploads/2021/10/footer-img-01.jpg);}#qodef-page-footer-bottom-area { border-top-color: rgba(255,255,255,0.2);border-top-width: 1px;}#qodef-page-footer-bottom-area-inner { padding-top: 3px;padding-bottom: 3px;}#qodef-fullscreen-area { background-image: url(https://halstein.qodeinteractive.com/wp-content/uploads/2021/10/fs-menu-img-01.jpg);}#qodef-page-inner { padding: 0px;}@media only screen and (max-width: 1024px) { #qodef-page-inner { padding: 0px;}}.qodef-header-sticky .qodef-header-sticky-inner { border-bottom-color: #f5ece3;border-bottom-width: 1px;}#qodef-top-area-inner { height: 34px;}#qodef-page-header .qodef-header-logo-link { padding: 8px 50px 4px 52px;}#qodef-page-header .qodef-header-sticky .qodef-header-logo-link { padding: 0;}#qodef-page-header .qodef-header-sticky .qodef-header-logo-link img { max-height: 50%;}#qodef-page-mobile-header .qodef-mobile-header-logo-link { padding: 10px 10px 10px 0;}#qodef-side-area { background-image: url(https://halstein.qodeinteractive.com/wp-content/uploads/2021/10/sidearea-img-01.jpg);width: 500px;right: -500px;}#qodef-page-spinner .qodef-m-inner { background-image: url(https://halstein.qodeinteractive.com/wp-content/uploads/2022/01/loader-bckg.jpg);color: #ffffff;}.qodef-page-title { background-color: #e5d5c0;}.qodef-page-title .qodef-m-title { color: #14203b;}
      </style>
      <link rel='stylesheet' id='halstein-core-elementor-css' href='{{asset('wp-content/elementor.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-icons-css' href='{{asset('wp-content/elementor-icons.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-frontend-css' href='{{asset('wp-content/custom-frontend-lite.min.css')}}' type='text/css' media='all' />
      <style id='elementor-frontend-inline-css' type='text/css'>
         .elementor-kit-9607{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1140px;}.elementor-widget:not(:last-child){margin-bottom:20px;}{}h1.entry-title{display:var(--page-title-display);}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}}
         .elementor-1936 .elementor-element.elementor-element-a8590b2 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-d5183ac{margin-top:185px;margin-bottom:0170px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-348b37e > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 130px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-83510ec > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-be23c0e > .elementor-widget-container{margin:10px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-4f5f225 > .elementor-element-populated{margin:12px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-d05e789 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-f7f94aa > .elementor-widget-container{margin:-40px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-8d0a775 > .elementor-widget-container{margin:-42px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-fa4fdd6 > .elementor-widget-container{margin:-9px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-532efed > .elementor-widget-container{margin:-42px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-dd8c1ce > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-5b148fa > .elementor-widget-container{margin:-40px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-f793c6e > .elementor-widget-container{margin:-32px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-ba3e162 > .elementor-widget-container{margin:-9px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-26d1e6d > .elementor-widget-container{margin:-42px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-84f08b0:not(.elementor-motion-effects-element-type-background), .elementor-1936 .elementor-element.elementor-element-84f08b0 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#E7D6C0;}.elementor-1936 .elementor-element.elementor-element-84f08b0{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;padding:80px 0px 80px 0px;}.elementor-1936 .elementor-element.elementor-element-84f08b0 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1936 .elementor-element.elementor-element-e6819d2.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-1936 .elementor-element.elementor-element-e6819d2 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-21bf78c{width:auto;max-width:auto;}@media(max-width:1440px){.elementor-1936 .elementor-element.elementor-element-e6819d2 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}}@media(min-width:768px){.elementor-1936 .elementor-element.elementor-element-348b37e{width:75.73%;}.elementor-1936 .elementor-element.elementor-element-4f5f225{width:24.27%;}}@media(max-width:1024px) and (min-width:768px){.elementor-1936 .elementor-element.elementor-element-348b37e{width:100%;}.elementor-1936 .elementor-element.elementor-element-4f5f225{width:100%;}.elementor-1936 .elementor-element.elementor-element-74c4b9a{width:50%;}.elementor-1936 .elementor-element.elementor-element-c716eb7{width:50%;}}@media(max-width:1024px){.elementor-1936 .elementor-element.elementor-element-4f5f225 > .elementor-element-populated{margin:67px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-1936 .elementor-element.elementor-element-ed4b9d1{margin-top:0px;margin-bottom:0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-74c4b9a > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-8d0a775 > .elementor-widget-container{margin:-32px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-c716eb7 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:80px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-e6819d2 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 100px 0px 100px;}}@media(max-width:767px){.elementor-1936 .elementor-element.elementor-element-348b37e > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-83510ec > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-4f5f225 > .elementor-element-populated{padding:0px 0px 0px 0px;}.elementor-1936 .elementor-element.elementor-element-84f08b0{margin-top:0px;margin-bottom:0px;padding:80px 0px 80px 0px;}.elementor-1936 .elementor-element.elementor-element-e6819d2 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 20px 0px 20px;}.elementor-1936 .elementor-element.elementor-element-21bf78c > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}}
      </style>
      <link rel='stylesheet' id='font-awesome-5-all-css' href='{{asset('wp-content/all.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='font-awesome-4-shim-css' href='{{asset('wp-content/v4-shims.min.css')}}' type='text/css' media='all' />
      <style id="google-fonts-1-css" media="all">@font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 100;
         src: url(/fonts.gstatic.com/s/roboto/v29/KFOiCnqEu92Fr1Mu51QrEzAdKg.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 300;
         src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc6CsE.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 400;
         src: url(/fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xIIzc.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 500;
         src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc6CsE.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 700;
         src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic6CsE.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 900;
         src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TLBCc6CsE.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 100;
         src: url(/fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1MmgVxIIzc.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 300;
         src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBBc9.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 400;
         src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxP.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 500;
         src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBBc9.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 700;
         src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBBc9.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 900;
         src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmYUtfBBc9.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto Slab';
         font-style: normal;
         font-weight: 100;
         src: url(/fonts.gstatic.com/s/robotoslab/v16/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjojIWmb2Rm.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto Slab';
         font-style: normal;
         font-weight: 200;
         src: url(/fonts.gstatic.com/s/robotoslab/v16/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoDISmb2Rm.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto Slab';
         font-style: normal;
         font-weight: 300;
         src: url(/fonts.gstatic.com/s/robotoslab/v16/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjo0oSmb2Rm.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto Slab';
         font-style: normal;
         font-weight: 400;
         src: url(/fonts.gstatic.com/s/robotoslab/v16/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjojISmb2Rm.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto Slab';
         font-style: normal;
         font-weight: 500;
         src: url(/fonts.gstatic.com/s/robotoslab/v16/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjovoSmb2Rm.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto Slab';
         font-style: normal;
         font-weight: 600;
         src: url(/fonts.gstatic.com/s/robotoslab/v16/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoUoOmb2Rm.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto Slab';
         font-style: normal;
         font-weight: 700;
         src: url(/fonts.gstatic.com/s/robotoslab/v16/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoa4Omb2Rm.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto Slab';
         font-style: normal;
         font-weight: 800;
         src: url(/fonts.gstatic.com/s/robotoslab/v16/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoDIOmb2Rm.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto Slab';
         font-style: normal;
         font-weight: 900;
         src: url(/fonts.gstatic.com/s/robotoslab/v16/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoJYOmb2Rm.ttf) format('truetype');
         }
      </style>
         <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
         <script src="{{asset("js/profit_lost.js")}}"></script>
      
      <script type='text/javascript' src='{{asset('wp-content/jquery.min.js')}}' id='jquery-core-js'></script>
      <script type='text/javascript' src='{{asset('wp-content/jquery-migrate.min.js')}}' id='jquery-migrate-js'></script>
      <script type='text/javascript' src='{{asset('wp-content/v4-shims.min.js')}}' id='font-awesome-4-shim-js'></script>
      
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

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

<style>
   /* See http://www.chartjs.org/docs/latest/general/responsive.html */
   .chart-container {
     position: relative;
     height: 100%;
     width: 100%;
   }
   
   .isResizable {
     background-color: #ffffff;
     padding: 5px;
     overflow: hidden;
     /* Not usable in IE */
     /* resize: both; */
     width: 100%;
     height: 400px;
     min-width: 280px;
     min-height: 280px;
     max-width: 100%;
     max-height: 600px;
   }
   
   #updateChart {
     background: white;
     border: 1px solid #d8d8d8;
     width: 160px;
     padding: 10px;
   }
   </style>

   </head>
@endsection

@section('content')
<div id="qodef-page-outer">
      <div style="background: #14203b" class="qodef-page-title qodef-m qodef-title--standard-with-breadcrumbs qodef-alignment--left qodef-vertical-alignment--header-bottom qodef--has-image">
         <div class="qodef-m-inner">
            <div class="qodef-m-content qodef-content-grid ">
               <h1 class="qodef-m-title entry-title" style="color: white">
                  Our Portfolio
               </h1>
               <div  itemprop="breadcrumb" class="qodef-breadcrumbs"><a  itemprop="url" class="qodef-breadcrumbs-link" href="{{route("index")}}"><span style="color: white" itemprop="title">Home</span></a><span style="color: white" class="qodef-breadcrumbs-separator"></span><span itemprop="title" style="color: white" class="qodef-breadcrumbs-current">Our Portfolio</span></div>
            </div>
         </div>
      </div>
      <section style="margin-top: 50px;margin-bottom:50px" class="elementor-section elementor-top-section elementor-element elementor-element-d5183ac elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="d5183ac" data-element_type="section">
         <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-348b37e" data-id="348b37e" data-element_type="column">
               <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-83510ec elementor-widget elementor-widget-halstein_core_section_title" data-id="83510ec" data-element_type="widget" data-widget_type="halstein_core_section_title.default">
                     <div class="elementor-widget-container">
                        <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left  ">
                           <div class="row">
                              <div class="col-lg-6 p-3 mb-3">
                                 <h4 class="qodef-m-title mt-0 pt-0">
                                    Portfolio Value as of {{$today}}                                        :
                                    ${{number_format($current_value,0)}}
                                    <br>
                                 </h4> 
                                 <h4 class="qodef-m-title mt-0 pt-0">
                                    Profit / Loss :
                                    @if ($profit_loss_number > 0)
                                    <img src="{{asset("icons/profit.png")}}" width="30" alt="icons">
                                    @else
                                    <img src="{{asset("icons/loss.png")}}" width="30" alt="icons">
                                    @endif
                                    $ {{number_format($profit_loss_number,2)}} 
                                    <br>
                                 </h4>
                                 <h5 style="margin-top: 2px">
                                    Profit / Loss Precentage :
                                    @if ($profit_loss_percentage > 0)
                                    <img src="{{asset("icons/profit.png")}}" width="30" alt="icons">
                                    @else
                                    <img src="{{asset("icons/loss.png")}}" width="30" alt="icons">
                                    @endif
                                    {{number_format($profit_loss_percentage,1)}}%
                                 </h5>   
                              </div>   
                              <div class="col-lg-6 p-3 mb-3">
                                 <h4 class="qodef-m-title mt-0 pt-0">
                                    Initial Investment :
                                    ${{number_format(auth()->user()->balence,0)}}
                                    <br>
                                 </h4>
                                 <h4 class="qodef-m-title mt-0 pt-0">
                                    Current Value :
                                    @if ($portfolio_value > 0)
                                    <img src="{{asset("icons/profit.png")}}" width="30" alt="icons">
                                    @else
                                    <img src="{{asset("icons/loss.png")}}" width="30" alt="icons">
                                    @endif
                                    $ {{number_format($portfolio_value,0)}} 
                                    <br>
                                 </h4>
                                 <h5 style="margin-top: 2px">
                                    Portfolio Interest : {{number_format($portfolio_interest,2)}}%
                                 </h5>   
                              </div>   
                           </div>
                           <div class="isResizable" style="height: auto">
                                 <div class="chart-container">
                                    
                                    @foreach ($stable_coins as $coin)
                                    <input type="hidden" class="coin_labels" value="{{$coin->token}} - {{$coin->total_precentage_of_portfolio}}%">
                                    @endforeach
                                    @foreach ($stable_coins as $coin)
                                    <input type="hidden" class="coin_precentage" value="{{$coin->total_precentage_of_portfolio}}">
                                    @endforeach

                                    @foreach ($non_stable_coins as $coin)
                                    <input type="hidden" class="coin_labels" value="{{$coin->token}} - {{$coin->total_precentage_of_portfolio}}%">
                                    @endforeach
                                    @foreach ($non_stable_coins as $coin)
                                    <input type="hidden" class="coin_precentage" value="{{$coin->total_precentage_of_portfolio}}">
                                    @endforeach
                                    <input type="hidden" id="prentage_other" value="{{$other}}">
                                    
                                    <canvas width="500" id="myChart"></canvas>
                                 </div>
                           </div>   
                           <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                           <script>
                                 $coin_labels = [];
                                 $(".coin_labels").each(function (index, element) {
                                    $coin_labels.push(element.value)                  
                                 });
                                 $other_prentage = $("#prentage_other").val()
                                 $coin_labels.push(`Other - `+$other_prentage+`%`)    

                                 $coin_precentage = [];
                                 $(".coin_precentage").each(function (index, element) {
                                    $coin_precentage.push(element.value)                  
                                 });

                                 $other_prentage = $("#prentage_other").val()
                                 $coin_precentage.push($other_prentage)  
                                 var ctx = document.getElementById("myChart").getContext('2d');

                              var myChart = new Chart(ctx, {
                                 type: 'pie',
                                 data: {
                                    labels: $coin_labels,
                                    datasets: [{    
                                          data: $coin_precentage, // Specify the data values array
                                          backgroundColor:[
                                             "blue",
                                             "darkblue",
                                             "red",
                                             "orange","purple",
                                             "pink","brown","green","darkgrey","royalblue","yellow"
                                          ]
                                    }]},         
                                 options: {
                                    tooltips: {
                                       callbacks: {
                                          label: (tooltipItem, data) => data['labels'][tooltipItem['index']]
                                       }
                                    },
                                    legend:{
                                    position:'right'
                                    },
                                    responsive: true, // Instruct chart js to respond nicely.
                                    maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
                                 }
                              });
                           </script>
                        </div>
                     </div>
                  </div>
                  <br>
                  <br>
                  <h2 class="qodef-m-title" id="time_stamp">
                     Our Assets
                  </h2>
                  <div class="elementor-element elementor-element-be23c0e elementor-widget elementor-widget-wp-widget-halstein_core_contact_form_7" data-id="be23c0e" data-element_type="widget" data-widget_type="wp-widget-halstein_core_contact_form_7.default">
                     <div class="elementor-widget-container">
                        <div class="qodef-contact-form-7  qodef-button-layout--filled-one ">
                           <div role="form" class="wpcf7" id="wpcf7-f2376-p1936-o1" lang="en-US" dir="ltr">
                              <div class="screen-reader-response">
                                 <p role="status" aria-live="polite" aria-atomic="true"></p>
                                 <ul></ul>
                              </div>
                              <table id="table" class="table table-hover" style="color:#14203b;border: 0.5px solid #14203b;">
                                 <thead>
                                 <tr>
                                    <th>Name</th>
                                    <th>Avg Buy Price</th>
                                    <th>Holdings</th>
                                    <th>Amount USD</th>
                                    <th>Current Price</th>
                                    <th id="profit_loss_title">Profit / Loss (USD)</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 @foreach ($non_stable_coins_table as $i=>$coin)
                                    <tr>
                                       <td style="text-transform: capitalize"><img src="{{$ouricons[$i]}}" width="20" style="margin-right: 3px" alt="icon">{{$coin->token}}</td>
                                       <td>$ {{$coin->avg_buy_price}}</td>
                                       <td>{{$coin->holdings}}</td>
                                       <td>$ {{number_format($coin->amount_spent)}}</td>
                                       <td>$ {{number_format($ourprices[$i],3)}}</td>
                                       <td class="profit_lost" id="value_{{$coin->id}}" data-id="{{$coin->id}}" data-number="{{$coin->profit_loss_number}}"><img src="" style="display: none" id="img_{{$coin->id}}" width="18" alt="icon"> $ {{number_format($coin->profit_loss_number)}}</td>
                                       <td style="display: none" class="profit_lost_percentage" id="percentage_value_{{$coin->id}}" data-percetageID="{{$coin->id}}" data-percentage="{{$coin->profit_loss_precentage}}"><img src="" style="display: none" id="percentage_img_{{$coin->id}}" width="18" alt="icon"> {{$coin->profit_loss_precentage}}%</td>
                                    </tr>
                                 @endforeach
                                 </tbody>
                              </table>
                              <div class="table-responsive">
                                 <table id="mobile_table" class="table table-hover" style="width:auto;margin-left:auto;margin-right:auto;color:#14203b;">
                                    <thead>
                                    <tr>
                                       <th>Token</th>
                                       <th>Price</th>
                                       <th>Holdings</th>
                                       <th id="mobile_profit_loss_title">Profit/Loss(USD)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($non_stable_coins_table as $i=>$coin)
                                       <tr>
                                          <td style="text-transform: capitalize;vertical-align: middle;justify-content: center"><img src="{{$ouricons[$i]}}" width="15" style="margin-right: 3px" alt="icon">{{$coin->token}}</td>
                                          <td style="vertical-align: middle;">${{number_format($ourprices[$i],3)}}</td>
                                          <td style="vertical-align: middle;">{{$coin->holdings}}</td>
                                          <td style="vertical-align: middle;" class="mobile_profit_lost_number" id="mobile_number_value_{{$coin->id}}" data-numberID-mobile="{{$coin->id}}" data-number-mobile="{{$coin->profit_loss_number}}"><img src="" style="display: none" id="mobile_number_img_{{$coin->id}}" width="13" alt="icon"> {{number_format($coin->profit_loss_number,0)}}</td>
                                          <td style="vertical-align: middle;display: none" class="mobile_profit_lost_percentage"  id="mobile_percentage_value_{{$coin->id}}" data-percetageID-mobile="{{$coin->id}}" data-percentage-mobile="{{$coin->profit_loss_precentage}}"><img src="" style="display: none" id="mobile_percentage_img_{{$coin->id}}" width="13" alt="icon"> {{$coin->profit_loss_precentage}}%</td>
                                       </tr>
                                    @endforeach
                                    </tbody>
                                 </table>
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
@endsection

@section('scripts')

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
 <script type='text/javascript' src='{{asset('wp-content/webpack.runtime.min.js')}}' id='elementor-webpack-runtime-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/frontend-modules.min.js')}}' id='elementor-frontend-modules-js'></script>
 <script type='text/javascript' src='{{asset('wp-content/waypoints.min.js')}}' id='elementor-waypoints-js'></script>
 <script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1440,"default_value":1366,"direction":"max","is_enabled":true},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":true}}},"version":"3.5.3","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"e_import_export":true,"additional_custom_breakpoints":true,"e_hidden_wordpress_widgets":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/halstein.qodeinteractive.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet","viewport_laptop","viewport_widescreen"],"viewport_laptop":1440,"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1936,"title":"Get%20In%20Touch%20%E2%80%93%20Halstein","excerpt":"","featuredImage":false}};
 </script>
 <script type='text/javascript' src='{{asset('wp-content/frontend.min.js')}}' id='elementor-frontend-js'></script>
 <script type='text/javascript' src='https://halstein.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=5.8.3' id='qi-addons-for-elementor-elementor-js'></script>
 <script type='text/javascript' id='halstein-core-elementor-js-extra'>
    /* <![CDATA[ */
    var qodefElementorGlobal = {"vars":{"elementorSectionHandler":[],"elementorColumnHandler":[]}};
    /* ]]> */
 </script>
 <script type='text/javascript' src='https://halstein.qodeinteractive.com/wp-content/plugins/halstein-core/inc/plugins/elementor/assets/js/elementor.min.js?ver=5.8.3' id='halstein-core-elementor-js'></script>

   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script src="{{asset("js/profit_lost.js")}}"></script>

   
 @endsection