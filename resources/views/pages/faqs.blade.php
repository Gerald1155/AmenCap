@extends('layouts.main')
@section('head')
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">               {!!SEO::generate() !!}
       
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
</style>
<link rel='stylesheet' id='sb_instagram_styles-css' href='{{asset("wp-content/sbi-styles.min.css")}}' type='text/css' media='all' />
<link rel='stylesheet' id='dripicons-css' href='{{asset("wp-content/dripicons.min.css")}}' type='text/css' media='all' />
<link rel='stylesheet' id='elegant-icons-css' href='{{asset("wp-content/elegant-icons.min.css")}}' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css' href='{{asset("wp-content/all.min.css")}}' type='text/css' media='all' />
<link rel='stylesheet' id='fontkiko-css' href='{{asset("wp-content/kiko-all.min.css")}}' type='text/css' media='all' />
<link rel='stylesheet' id='ionicons-css' href='{{asset("wp-content/ionicons.min.css")}}' type='text/css' media='all' />
<link rel='stylesheet' id='linea-icons-css' href='{{asset("wp-content/linea-icons.min.css")}}' type='text/css' media='all' />
<link rel='stylesheet' id='linear-icons-css' href='{{asset("wp-content/linear-icons.min.css")}}' type='text/css' media='all' />
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
#qodef-page-footer { background-image: url(https://halstein.qodeinteractive.com/wp-content/uploads/2021/10/footer-img-01.jpg);}#qodef-page-footer-bottom-area { border-top-color: rgba(255,255,255,0.2);border-top-width: 1px;}#qodef-page-footer-bottom-area-inner { padding-top: 3px;padding-bottom: 3px;}#qodef-fullscreen-area { background-image: url(https://halstein.qodeinteractive.com/wp-content/uploads/2021/10/fs-menu-img-01.jpg);}#qodef-page-inner { padding: 145px 0 160px;}@media only screen and (max-width: 1024px) { #qodef-page-inner { padding: 145px 0 160px;}}.qodef-header-sticky .qodef-header-sticky-inner { border-bottom-color: #f5ece3;border-bottom-width: 1px;}#qodef-top-area-inner { height: 34px;}#qodef-page-header .qodef-header-logo-link { padding: 8px 50px 4px 52px;}#qodef-page-header .qodef-header-sticky .qodef-header-logo-link { padding: 0;}#qodef-page-header .qodef-header-sticky .qodef-header-logo-link img { max-height: 50%;}#qodef-page-mobile-header .qodef-mobile-header-logo-link { padding: 10px 10px 10px 0;}#qodef-side-area { background-image: url(https://halstein.qodeinteractive.com/wp-content/uploads/2021/10/sidearea-img-01.jpg);width: 500px;right: -500px;}#qodef-page-spinner .qodef-m-inner { background-image: url(https://halstein.qodeinteractive.com/wp-content/uploads/2022/01/loader-bckg.jpg);color: #ffffff;}.qodef-page-title { height: 550px;background-color: #e5d5c0;background-image: url(https://halstein.qodeinteractive.com/wp-content/uploads/2021/10/faq-img-1.jpg);}.qodef-page-title .qodef-m-title { color: #14203b;}
</style>
<link rel='stylesheet' id='halstein-core-elementor-css' href='{{asset('wp-content/elementor.min.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='{{asset('wp-content/elementor-icons.min.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='{{asset('wp-content/custom-frontend-lite.min.css')}}' type='text/css' media='all' />
<style id='elementor-frontend-inline-css' type='text/css'>
.elementor-kit-9607{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1140px;}.elementor-widget:not(:last-child){margin-bottom:20px;}{}h1.entry-title{display:var(--page-title-display);}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}}
.elementor-1807 .elementor-element.elementor-element-91820fe{margin-top:0px;margin-bottom:0px;padding:10px 0px 0px 0px;}.elementor-1807 .elementor-element.elementor-element-5d5e52b > .elementor-element-populated{margin:-4px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-1807 .elementor-element.elementor-element-45d3111 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-1807 .elementor-element.elementor-element-f6287eb > .elementor-widget-container{margin:0px 0px 0px 0px;padding:40px 0px 0px 0px;}.elementor-1807 .elementor-element.elementor-element-1782c94 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:40px 0px 0px 0px;}.elementor-1807 .elementor-element.elementor-element-67cf42c > .elementor-widget-container{margin:0px 0px 0px 0px;padding:40px 0px 0px 0px;}.elementor-1807 .elementor-element.elementor-element-a6d536b > .elementor-widget-container{margin:0px 0px 0px 0px;padding:40px 0px 0px 0px;}@media(max-width:1024px){.elementor-1807 .elementor-element.elementor-element-91820fe{margin-top:0px;margin-bottom:0px;padding:0px 0px 0px 0px;}.elementor-1807 .elementor-element.elementor-element-5d5e52b > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-1807 .elementor-element.elementor-element-45d3111 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:100px 0px 0px 0px;}}@media(max-width:767px){.elementor-1807 .elementor-element.elementor-element-91820fe{margin-top:0px;margin-bottom:0px;padding:0px 0px 0px 0px;}.elementor-1807 .elementor-element.elementor-element-5d5e52b > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-1807 .elementor-element.elementor-element-45d3111 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:70px 0px 0px 0px;}}@media(min-width:768px){.elementor-1807 .elementor-element.elementor-element-5d5e52b{width:23.407%;}.elementor-1807 .elementor-element.elementor-element-45d3111{width:76.259%;}}@media(max-width:1024px) and (min-width:768px){.elementor-1807 .elementor-element.elementor-element-5d5e52b{width:100%;}.elementor-1807 .elementor-element.elementor-element-45d3111{width:100%;}}
</style>
<link rel='stylesheet' id='font-awesome-5-all-css' href='{{asset('wp-content/all.min.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css' href='{{asset('wp-content/v4-shims.min.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='qode-zendesk-chat-css' href='https://halstein.qodeinteractive.com/wp-content/plugins/qode-zendesk-chat//assets/main.css?ver=5.8.3' type='text/css' media='all' />
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
<script type='text/javascript' src='{{asset('wp-content/jquery.min.js')}}' id='jquery-core-js'></script>
<script type='text/javascript' src='{{asset('wp-content/jquery-migrate.min.js')}}' id='jquery-migrate-js'></script>
<script type='text/javascript' src='{{asset('wp-content/v4-shims.min.js')}}' id='font-awesome-4-shim-js'></script>



<script data-cfasync="false" data-pagespeed-no-defer>//<![CDATA[
	var dataLayer_content = {"pagePostType":"page","pagePostType2":"single-page","pagePostAuthor":"admin"};
	dataLayer.push( dataLayer_content );//]]>
</script>
<script data-cfasync="false">//<![CDATA[
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KTQ2BTD');//]]>
</script>

 <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
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
		  };</script>
</head>
@endsection
@section('content')
<div id="qodef-page-outer">
    <div class="qodef-page-title qodef-m qodef-title--standard-with-breadcrumbs qodef-alignment--left qodef-vertical-alignment--header-bottom qodef--has-image">
       <div class="qodef-m-inner">
          <div class="qodef-m-content qodef-content-grid ">
             <h1 class="qodef-m-title entry-title">
                FAQ Page	
             </h1>
             <div itemprop="breadcrumb" class="qodef-breadcrumbs"><a itemprop="url" class="qodef-breadcrumbs-link" href="https://halstein.qodeinteractive.com/"><span itemprop="title">Home</span></a><span class="qodef-breadcrumbs-separator"></span><span itemprop="title" class="qodef-breadcrumbs-current">FAQ Page</span></div>
          </div>
       </div>
    </div>
    <div id="qodef-page-inner" class="qodef-content-full-width">
       <main id="qodef-page-content" class="qodef-grid qodef-layout--template " role="main">
          <div class="qodef-grid-inner clear">
             <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
                <div data-elementor-type="wp-page" data-elementor-id="1807" class="elementor elementor-1807" data-elementor-settings="[]">
                   <div class="elementor-section-wrap">
                      <section class="elementor-section elementor-top-section elementor-element elementor-element-91820fe elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="91820fe" data-element_type="section">
                         <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5d5e52b" data-id="5d5e52b" data-element_type="column">
                               <div class="elementor-widget-wrap elementor-element-populated">
                                  <div class="elementor-element elementor-element-a6b1777 elementor-widget elementor-widget-sidebar" data-id="a6b1777" data-element_type="widget" data-widget_type="sidebar.default">
                                     <div class="elementor-widget-container">
                                        <div class="widget widget_halstein_core_title_widget" data-area="faq">
                                           <h5 class="qodef-widget-title" style="margin-bottom: 20px;width: 150px">
                                              Frequently asked questions 
                                           </h5>
                                        </div>
                                        <div class="widget widget_nav_menu" data-area="faq">
                                           <div class="menu-sidebar-menu-container">
                                              <ul id="menu-sidebar-menu" class="menu">
                                                @foreach ($faqs as $i=>$faq)
                                                <li id="menu-item-7779" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7779"><a href="#question_{{$i+1}}">{{$faq->question}}</a></li>
                                                @endforeach
                                            </ul>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-45d3111" data-id="45d3111" data-element_type="column">
                               <div class="elementor-widget-wrap elementor-element-populated">
                                 @foreach ($faqs as $i=>$faq)
                                 <div class="elementor-element elementor-element-47f6c99 elementor-widget elementor-widget-halstein_core_section_title" data-id="47f6c99" data-element_type="widget" data-widget_type="halstein_core_section_title.default">
                                     <div class="elementor-widget-container" id="question_{{$i+1    }}" >
                                        <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left  ">
                                           <h3 class="qodef-m-title">
                                              {{$i+1}}.{{$faq->question}} 
                                           </h3>
                                           <p class="qodef-m-text-field" style="margin-top: 15px">
                                              {!!$faq->answer!!}
                                           </p>
                                        </div>
                                     </div>
                                  </div>
                                  @endforeach
                              
                               </div>
                            </div>
                         </div>
                      </section>
                   </div>
                </div>
             </div>
          </div>
       </main>
    </div>
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
    <script type='text/javascript' id='halstein-core-google-map-js-extra'>
    /* <![CDATA[ */
    var qodefMapsVariables = {"global":{"mapStyle":[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"off"},{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#d6ccbc"},{"visibility":"on"}]}],"mapZoom":12,"mapScrollable":false,"mapDraggable":true,"streetViewControl":true,"zoomControl":true,"mapTypeControl":true,"fullscreenControl":true,"geolocationTitle":"Your location is here"},"multiple":[]};
    /* ]]> */
    </script>
          
    <script type='text/javascript' src='{{asset('wp-content/halstein-core.min.js')}}' id='halstein-core-script-js'></script>
    <script type='text/javascript' src='{{asset('wp-content/swiper.min.js')}}' id='swiper-js'></script>
    <script type='text/javascript' src='{{asset('wp-content/select2.full.min.js')}}' id='select2-js'></script>
    <script type='text/javascript' src='{{asset('wp-content/wp-embed.min.js')}}' id='wp-embed-js'></script>
    <script type='text/javascript' src='{{asset('wp-content/webpack.runtime.min.js')}}' id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript' src='{{asset('wp-content/frontend-modules.min.js')}}' id='elementor-frontend-modules-js'></script>
    <script type='text/javascript' src='{{asset('wp-content/waypoints.min.js')}}' id='elementor-waypoints-js'></script>
    <script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1440,"default_value":1366,"direction":"max","is_enabled":true},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":true}}},"version":"3.5.3","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"e_import_export":true,"additional_custom_breakpoints":true,"e_hidden_wordpress_widgets":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/halstein.qodeinteractive.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet","viewport_laptop","viewport_widescreen"],"viewport_laptop":1440,"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1807,"title":"FAQ%20Page%20%E2%80%93%20Halstein","excerpt":"","featuredImage":false}};
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