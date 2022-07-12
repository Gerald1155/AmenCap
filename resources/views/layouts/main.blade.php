   @yield('head')
   <body class="page-template page-template-page-full-width page-template-page-full-width-php page page-id-2162 theme-halstein qode-framework-1.1.8 woocommerce-no-js qodef-qi--no-touch qi-addons-for-elementor-1.5.1 qodef-back-to-top--enabled qodef-fullscreen-menu--hide-logo qodef-fullscreen-menu--hide-widget-area  qodef-content-behind-header qodef-header--tabbed qodef-header-appearance--sticky qodef-header--transparent qodef-content--behind-header qodef-mobile-header--standard qodef-drop-down-second--full-width qodef-drop-down-second--animate-height halstein-core-1.0 halstein-1.0 qodef-content-grid-1300 elementor-default elementor-kit-9607 elementor-page elementor-page-2162" itemscope itemtype="https://schema.org/WebPage">
      <a class="skip-link screen-reader-text" href="#qodef-page-content">Skip to the content</a> 
      <div id="qodef-page-wrapper" class="">
        @include('layouts.header')
        @yield('content')
         <footer id="qodef-page-footer" role="contentinfo">
            <div id="qodef-page-footer-top-area">
               <div id="qodef-page-footer-top-area-inner" class="qodef-content-grid">
                  <div class="qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--4 qodef-col-num--680--1 qodef-col-num--480--1 qodef-columns-layout--custom qodef-alignment--left">
                     <div class="qodef-grid-inner clear">
                        <div class="qodef-grid-item">
                           <div id="block-28" class="widget widget_block" data-area="qodef-footer-top-area-column-1">
                              <div class="wp-block-group">
                                 <div class="wp-block-group__inner-container">
                                    <div class="widget widget_halstein_core_single_image">
                                       <div class="qodef-shortcode qodef-m  qodef-single-image qodef-layout--default    qodef-direction--from-left ">
                                          <div class="qodef-m-image "> <a itemprop="url" href="{{route("index")}}" target="_blank"> <img width="191" height="51" src="{{asset("logo/logo.png")}}" class="attachment-full size-full" alt="t" /> </a> </div>
                                       </div>
                                    </div>
                                    <div class="widget widget_halstein_core_custom_font">
                                       <p class="qodef-shortcode qodef-m  qodef-custom-font qodef-custom-font-928 qodef-layout--simple" style="margin: 24px 0 0 0">Amen Capital Fund invests in cryptocurrencies that are related to blockchain technologies, projects, or platforms with a robust utility and development schedule.</p>
                                    </div>
                                    <div class="widget widget_halstein_core_social_icons_group">
                                       <div class="qodef-social-icons-group">
                                          <span class="qodef-icon-holder qodef--textual" style="margin: 32px 0 20px 10px">
                                          <a itemprop="url" href="https://www.instagram.com/amencapitalfund/" target="_blank">IG</a> </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="qodef-grid-item">
                           <div id="halstein_core_separator-5" class="widget widget_halstein_core_separator" data-area="qodef-footer-top-area-column-2">
                              <div class="qodef-shortcode qodef-m  qodef-separator clear  qodef-phone--disabled ">
                                 <div class="qodef-m-line" style="border-color: transparent;width: 100%;border-bottom-width: 13px;margin-top: 0px;margin-bottom: 0px"></div>
                              </div>
                           </div>
                           <div id="nav_menu-4" class="widget widget_nav_menu" data-area="qodef-footer-top-area-column-2">
                              <h5 class="qodef-widget-title">Amen Capital</h5>
                              <div class="menu-footer-1-container">
                                 <ul id="menu-footer-1" class="menu">
                                    <li id="menu-item-3218" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3218"><a href="{{route("about")}}">About Us</a></li>
                                    <li id="menu-item-3219" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3219"><a href="{{route("contact")}}">Contact Us</a></li>
                                    <li id="menu-item-3220" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3220"><a href="{{route("tutorials")}}">Tutorials</a></li>
                                    <li id="menu-item-3221" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3221"><a href="{{route("blogs")}}">Blogs</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="qodef-grid-item">
                           <div id="halstein_core_separator-6" class="widget widget_halstein_core_separator" data-area="qodef-footer-top-area-column-3">
                              <div class="qodef-shortcode qodef-m  qodef-separator clear  qodef-phone--disabled ">
                                 <div class="qodef-m-line" style="border-color: transparent;width: 100%;border-bottom-width: 13px;margin-top: 0px;margin-bottom: 0px"></div>
                              </div>
                           </div>
                           <div id="nav_menu-5" class="widget widget_nav_menu" data-area="qodef-footer-top-area-column-3">
                              <h5 class="qodef-widget-title">Faq</h5>
                              <div class="menu-footer-2-container">
                                 <ul id="menu-footer-2" class="menu">
                                    @foreach (App\Models\Faq::take(4)->get() as $faq)
                                       <li id="menu-item-3228" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3228"><a href="{{route("faqs")}}">{{$faq->question}}</a></li>
                                    @endforeach
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="qodef-grid-item">
                           <div id="halstein_core_separator-6" class="widget widget_halstein_core_separator" data-area="qodef-footer-top-area-column-3">
                              <div class="qodef-shortcode qodef-m  qodef-separator clear  qodef-phone--disabled ">
                                 <div class="qodef-m-line" style="border-color: transparent;width: 100%;border-bottom-width: 13px;margin-top: 0px;margin-bottom: 0px"></div>
                              </div>
                           </div>
                           <div id="nav_menu-5" class="widget widget_nav_menu" data-area="qodef-footer-top-area-column-3">
                              <h5 class="qodef-widget-title">Blogs</h5>
                              <div class="menu-footer-2-container">
                                 <ul id="menu-footer-2" class="menu">
                                    @foreach (App\Models\Blog::take(4)->get() as $blog)
                                       <li id="menu-item-3228" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3228"><a href="{{$blog->show()}}">{{$blog->title}}</a></li>
                                    @endforeach
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="qodef-page-footer-bottom-area">
               <div id="qodef-page-footer-bottom-area-inner" class="qodef-content-grid">
                  <div class="qodef-grid qodef-layout--columns qodef-responsive--custom qodef-col-num--2 qodef-col-num--680--1 qodef-col-num--480--1 qodef-alignment--space-between">
                     <div class="qodef-grid-inner clear">
                        <div class="qodef-grid-item">
                           <div id="block-18" class="widget widget_block" data-area="qodef-footer-bottom-area-column-1">
                              <p style="font-size: 13px;">© 2022 <a href="https://www.instagram.com/website__designers/">Designed By Website Designers </a>| All Rights Reserved to Amen Capital</p>
                           </div>
                        </div>
                        <div class="qodef-grid-item">
                           <div id="block-27" class="widget widget_block" data-area="qodef-footer-bottom-area-column-2">
                             
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <a id="qodef-back-to-top" href="#" class="qodef--predefined">
            <span class="qodef-back-to-top-icon">
               <svg class="qodef-svg--back-to-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                  <polyline class="qodef-m-arrow" points="4.1,9.9 10.2,4 16.1,9.9 " />
                  <rect class="qodef-m-line" y="15" width="20" height="1" />
               </svg>
            </span>
         </a>
         <div id="qodef-side-area" class="qodef-alignment--left">
            <a href="javascript:void(0)" id="qodef-side-area-close" class="qodef-opener-icon qodef-m qodef-source--predefined qodef--opened">
               <span class="qodef-m-icon qodef--close">
                  <svg class="qodef-svg--close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22" viewBox="0 0 22 22" style="enable-background:new 0 0 22 22;" xml:space="preserve">
                     <line x1="1" y1="21" x2="21" y2="1" />
                     <line x1="1" y1="1" x2="21" y2="21" />
                  </svg>
               </span>
            </a>
            <div id="qodef-side-area-inner">
               <div id="qodef-side-area-top">
                  <div id="halstein_core_single_image-2" class="widget widget_halstein_core_single_image" data-area="side-area-top">
                     <div class="qodef-shortcode qodef-m  qodef-single-image qodef-layout--default    qodef-direction--from-left ">
                        <div class="qodef-m-image "> <a itemprop="url" href="https://halstein.qodeinteractive.com/" target="_blank"> <img width="191" height="51" src="https://halstein.qodeinteractive.com/wp-content/uploads/2021/10/footer-logo.png" class="attachment-full size-full" alt="t" /> </a> </div>
                     </div>
                  </div>
                  <div id="halstein_core_custom_font-2" class="widget widget_halstein_core_custom_font" data-area="side-area-top">
                     <p class="qodef-shortcode qodef-m  qodef-custom-font qodef-custom-font-0 qodef-layout--simple" style="margin: 14px 0 0 0 ">A truly professional theme designed for businesses and business consulting. </p>
                  </div>
                  <div id="halstein_core_social_icons_group-8" class="widget widget_halstein_core_social_icons_group" data-area="side-area-top">
                     <div class="qodef-social-icons-group">
                        <span class="qodef-icon-holder qodef--textual" style="margin: 50px 10px 0 0">
                        <a itemprop="url" href="https://www.facebook.com/QodeInteractive/" target="http://_blank">FB</a> </span>
                        <span class="qodef-icon-holder qodef--textual" style="margin: 50px 10px 0 10px">
                        <a itemprop="url" href="https://www.linkedin.com/company/qode-themes/" target="http://_blank">LI</a> </span>
                        <span class="qodef-icon-holder qodef--textual" style="margin: 50px 0 0 10px">
                        <a itemprop="url" href="https://www.instagram.com/qodeinteractive/" target="http://_blank">IN</a> </span>
                     </div>
                  </div>
               </div>
               <div id="qodef-side-area-bottom">
                  <div id="block-24" class="widget widget_block" data-area="side-area-bottom">
                     <div class="wp-block-group">
                        <div class="wp-block-group__inner-container">
                           <p style="margin-bottom: 2px;">E-mail: <a href="/cdn-cgi/l/email-protection#7e161f120d0a1b17103e0f111a1b17100a1b0c1f1d0a17081b501d1113"><span class="__cf_email__" data-cfemail="177f767b6463727e7957667873727e796372657674637e61723974787a">[email&#160;protected]</span></a></p>
                           <p style="margin-top: 0;">Phone: <a href="tel:+99411721270">+99 4 11 72 1270</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @yield('scripts')
   </body>
</html>