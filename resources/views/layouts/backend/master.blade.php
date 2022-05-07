<!DOCTYPE html>
<html lang="zxx" class="js">
   <head>
      <meta charset="utf-8">
      <meta name="author" content="Softnio">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description"
         content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
      <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}">
      <title>Dashboard | LMS | {{config('app.name')}}</title>
      <link rel="stylesheet" href="{{asset('backend/assets/css/dashlite.css?ver=3.0.2')}}">
      <link id="skin-default" rel="stylesheet" href="{{asset('backend/assets/css/skins/theme-blue.css?ver=3.0.2')}}">

   </head>
   <body class="nk-body bg-lighter npc-general has-sidebar ">


    <div id="app">


      <div class="nk-app-root">
         <div class="nk-main ">
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
               <div class="nk-sidebar-element nk-sidebar-head">
                  <div class="nk-sidebar-brand"><a href="/demo2/index.html" class="logo-link nk-sidebar-logo"><img
                     class="logo-light logo-img" src="{{asset('backend/images/logo.png')}}" srcset="{{asset('backend/images/logo2x.png')}} 2x"
                     alt="logo"><img class="logo-dark logo-img" src="{{asset('backend/images/logo-dark.png')}}"
                     srcset="{{asset('backend/images/logo-dark2x.png')}} 2x" alt="logo-dark"><img
                     class="logo-small logo-img logo-img-small" src="{{asset('backend/images/logo-small.png')}}"
                     srcset="{{asset('backend/images/logo-small2x.png')}} 2x" alt="logo-small"></a></div>
                  <div class="nk-menu-trigger me-n2"><a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                     data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a><a href="#"
                     class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                     data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a></div>
               </div>
              @component('layouts.backend.components.sidebar')

              @endcomponent
            </div>
            <div class="nk-wrap ">
               <div class="nk-header nk-header-fixed is-light">
                  <div class="container-fluid">
                     <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ms-n1"><a href="#"
                           class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                           class="icon ni ni-menu"></em></a></div>
                        <div class="nk-header-brand d-xl-none"><a href="/demo2/index.html" class="logo-link"><img
                           class="logo-light logo-img" src="{{asset('backend/images/logo.png')}}"
                           srcset="{{asset('backend/images/logo2x.png')}} 2x" alt="logo"><img class="logo-dark logo-img"
                           src="{{asset('backend/images/logo-dark.png')}}" srcset="{{asset('backend/images/logo-dark2x.png')}} 2x"
                           alt="logo-dark"></a></div>
                        <div class="nk-header-search ms-3 ms-xl-0"><em class="icon ni ni-search"></em><input
                           type="text" class="form-control border-transparent form-focus-none"
                           placeholder="Search anything"></div>
                        <div class="nk-header-tools">
                           <ul class="nk-quick-nav">
                              <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                 <a href="#"
                                    class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                    <div class="quick-icon border border-light"><img class="icon"
                                       src="{{asset('backend/images/flags/english-sq.png')}}" alt=""></div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                    <ul class="language-list">
                                       <li><a href="#" class="language-item"><img
                                          src="{{asset('backend/images/flags/english.png')}}" alt=""
                                          class="language-flag"><span
                                          class="language-name">English</span></a></li>
                                       <li><a href="#" class="language-item"><img
                                          src="{{asset('backend/images/flags/spanish.png')}}" alt=""
                                          class="language-flag"><span
                                          class="language-name">Español</span></a></li>
                                       <li><a href="#" class="language-item"><img
                                          src="{{asset('backend/images/flags/french.png')}}" alt=""
                                          class="language-flag"><span
                                          class="language-name">Français</span></a></li>
                                       <li><a href="#" class="language-item"><img
                                          src="{{asset('backend/images/flags/turkey.png')}}" alt=""
                                          class="language-flag"><span
                                          class="language-name">Türkçe</span></a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="dropdown chats-dropdown hide-mb-xs">
                                 <a href="#"
                                    class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                    <div class="icon-status icon-status-na"><em
                                       class="icon ni ni-comments"></em></div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                    <div class="dropdown-head"><span class="sub-title nk-dropdown-title">Recent
                                       Chats</span><a href="#">Setting</a>
                                    </div>
                                    <div class="dropdown-body">
                                       <ul class="chat-list">
                                          <li class="chat-item">
                                             <a class="chat-link" href="message.html">
                                                <div class="chat-media user-avatar"><span>IH</span><span
                                                   class="status dot dot-lg dot-gray"></span></div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">Iliash Hossain</div>
                                                      <span
                                                         class="time">Now</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">You: Please confrim if you got my
                                                         last messages.
                                                      </div>
                                                      <div class="status delivered"><em
                                                         class="icon ni ni-check-circle-fill"></em>
                                                      </div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li class="chat-item is-unread">
                                             <a class="chat-link"
                                                href="message.html">
                                                <div class="chat-media user-avatar bg-pink">
                                                   <span>AB</span><span
                                                      class="status dot dot-lg dot-success"></span>
                                                </div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">Abu Bin Ishtiyak</div>
                                                      <span
                                                         class="time">4:49 AM</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">Hi, I am Ishtiyak, can you help me
                                                         with this problem ?
                                                      </div>
                                                      <div class="status unread"><em
                                                         class="icon ni ni-bullet-fill"></em></div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li class="chat-item">
                                             <a class="chat-link" href="message.html">
                                                <div class="chat-media user-avatar"><img
                                                   src="{{asset('backend/images/avatar/b-sm.jpg')}}" alt=""></div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">George Philips</div>
                                                      <span
                                                         class="time">6 Apr</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">Have you seens the claim from
                                                         Rose?
                                                      </div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li class="chat-item">
                                             <a class="chat-link" href="message.html">
                                                <div class="chat-media user-avatar user-avatar-multiple">
                                                   <div class="user-avatar"><img
                                                      src="{{asset('backend/images/avatar/c-sm.jpg')}}" alt=""></div>
                                                   <div class="user-avatar"><span>AB</span></div>
                                                </div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">Softnio Group</div>
                                                      <span
                                                         class="time">27 Mar</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">You: I just bought a new computer
                                                         but i am having some problem
                                                      </div>
                                                      <div class="status sent"><em
                                                         class="icon ni ni-check-circle"></em></div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li class="chat-item">
                                             <a class="chat-link" href="message.html">
                                                <div class="chat-media user-avatar"><img
                                                   src="{{asset('backend/images/avatar/a-sm.jpg')}}" alt=""><span
                                                   class="status dot dot-lg dot-success"></span></div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">Larry Hughes</div>
                                                      <span
                                                         class="time">3 Apr</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">Hi Frank! How is you doing?</div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li class="chat-item">
                                             <a class="chat-link" href="message.html">
                                                <div class="chat-media user-avatar bg-purple">
                                                   <span>TW</span>
                                                </div>
                                                <div class="chat-info">
                                                   <div class="chat-from">
                                                      <div class="name">Tammy Wilson</div>
                                                      <span
                                                         class="time">27 Mar</span>
                                                   </div>
                                                   <div class="chat-context">
                                                      <div class="text">You: I just bought a new computer
                                                         but i am having some problem
                                                      </div>
                                                      <div class="status sent"><em
                                                         class="icon ni ni-check-circle"></em></div>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="dropdown-foot center"><a href="message.html">View All</a></div>
                                 </div>
                              </li>
                              <li class="dropdown notification-dropdown">
                                 <a href="#"
                                    class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                    <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em>
                                    </div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                    <div class="dropdown-head"><span
                                       class="sub-title nk-dropdown-title">Notifications</span><a
                                       href="#">Mark All as Read</a></div>
                                    <div class="dropdown-body">
                                       <div class="nk-notification">
                                          <div class="nk-notification-item dropdown-inner">
                                             <div class="nk-notification-icon"><em
                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                             </div>
                                             <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to
                                                   <span>Widthdrawl</span>
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                             </div>
                                          </div>
                                          <div class="nk-notification-item dropdown-inner">
                                             <div class="nk-notification-icon"><em
                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                             </div>
                                             <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your <span>Deposit
                                                   Order</span> is placed
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                             </div>
                                          </div>
                                          <div class="nk-notification-item dropdown-inner">
                                             <div class="nk-notification-icon"><em
                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                             </div>
                                             <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to
                                                   <span>Widthdrawl</span>
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                             </div>
                                          </div>
                                          <div class="nk-notification-item dropdown-inner">
                                             <div class="nk-notification-icon"><em
                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                             </div>
                                             <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your <span>Deposit
                                                   Order</span> is placed
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                             </div>
                                          </div>
                                          <div class="nk-notification-item dropdown-inner">
                                             <div class="nk-notification-icon"><em
                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                             </div>
                                             <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to
                                                   <span>Widthdrawl</span>
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                             </div>
                                          </div>
                                          <div class="nk-notification-item dropdown-inner">
                                             <div class="nk-notification-icon"><em
                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                             </div>
                                             <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your <span>Deposit
                                                   Order</span> is placed
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="dropdown-foot center"><a href="#">View All</a></div>
                                 </div>
                              </li>
                              <li class="dropdown user-dropdown">
                                 <a href="#" class="dropdown-toggle me-n1"
                                    data-bs-toggle="dropdown">
                                    <div class="user-toggle">
                                       <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                       <div class="user-info d-none d-xl-block">
                                          <div class="user-status user-status-active">Administator</div>
                                          <div class="user-name dropdown-indicator">Abu Bin Ishityak</div>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                    <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                       <div class="user-card">
                                          <div class="user-avatar"><span>AB</span></div>
                                          <div class="user-info"><span class="lead-text">Abu Bin
                                             Ishtiyak</span><span
                                                class="sub-text">info@softnio.com</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="dropdown-inner">
                                       <ul class="link-list">
                                          <li><a href="admin-profile.html"><em
                                             class="icon ni ni-user-alt"></em><span>View
                                             Profile</span></a>
                                          </li>
                                          <li><a href="admin-profile-setting.html"><em
                                             class="icon ni ni-setting-alt"></em><span>Account
                                             Setting</span></a>
                                          </li>
                                          <li><a href="admin-profile-activity.html"><em
                                             class="icon ni ni-activity-alt"></em><span>Login
                                             Activity</span></a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="dropdown-inner">
                                       <ul class="link-list">
                                          <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign
                                             out</span></a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="nk-content ">
                  <div class="container-fluid">
                   @yield('content')
                  </div>
               </div>
               <div class="nk-footer">
                  <div class="container-fluid">
                     <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright"> &copy; {{Date('Y')}} {{config('app.name')}}. Template by <a
                           href="#" target="_blank">Wasit Mirani</a></div>
                        <div class="nk-footer-links">
                           <ul class="nav nav-sm">
                              <li class="nav-item dropup">
                                 <a href="#"
                                    class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base"
                                    data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                 <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                    <ul class="language-list">
                                       <li><a href="#" class="language-item"><span
                                          class="language-name">English</span></a></li>
                                       <li><a href="#" class="language-item"><span
                                          class="language-name">Español</span></a></li>
                                       <li><a href="#" class="language-item"><span
                                          class="language-name">Français</span></a></li>
                                       <li><a href="#" class="language-item"><span
                                          class="language-name">Türkçe</span></a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="nav-item"><a data-bs-toggle="modal" href="#region" class="nav-link"><em
                                 class="icon ni ni-globe"></em><span class="ms-1">Select
                                 Region</span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" tabindex="-1" role="dialog" id="region">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <a href="#" class="close" data-bs-dismiss="modal"><em
                  class="icon ni ni-cross-sm"></em></a>
               <div class="modal-body modal-body-md">
                  <h5 class="title mb-4">Select Your Country</h5>
                  <div class="nk-country-region">
                     <ul class="country-list text-center gy-2">
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/arg.png')}}" alt=""
                           class="country-flag"><span class="country-name">Argentina</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/aus.png')}}" alt=""
                           class="country-flag"><span class="country-name">Australia</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/bangladesh.png')}}" alt=""
                           class="country-flag"><span class="country-name">Bangladesh</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/canada.png')}}" alt=""
                           class="country-flag"><span class="country-name">Canada
                           <small>(English)</small></span></a>
                        </li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/china.png')}}" alt=""
                           class="country-flag"><span class="country-name">Centrafricaine</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/china.png')}}" alt=""
                           class="country-flag"><span class="country-name">China</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/french.png')}}" alt=""
                           class="country-flag"><span class="country-name">France</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/germany.png')}}" alt=""
                           class="country-flag"><span class="country-name">Germany</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/iran.png')}}" alt=""
                           class="country-flag"><span class="country-name">Iran</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/italy.png')}}" alt=""
                           class="country-flag"><span class="country-name">Italy</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/mexico.png')}}" alt=""
                           class="country-flag"><span class="country-name">México</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/philipine.png')}}" alt=""
                           class="country-flag"><span class="country-name">Philippines</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/portugal.png')}}" alt=""
                           class="country-flag"><span class="country-name">Portugal</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/s-africa.png')}}" alt=""
                           class="country-flag"><span class="country-name">South Africa</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/spanish.png')}}" alt=""
                           class="country-flag"><span class="country-name">Spain</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/switzerland.png')}}" alt=""
                           class="country-flag"><span class="country-name">Switzerland</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/uk.png')}}" alt=""
                           class="country-flag"><span class="country-name">United Kingdom</span></a></li>
                        <li><a href="#" class="country-item"><img src="{{asset('backend/images/flags/english.png')}}" alt=""
                           class="country-flag"><span class="country-name">United State</span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>


      <div class="pmo-lv pmo-dark">
         <a class="pmo-close" href="#"><em class="ni ni-cross"></em></a>
         <a class="pmo-wrap"
            target="_blank" href="#">
            <div class="pmo-text text-white">Looking for functional script for HYIP Investment Platform? Check out <em
               class="ni ni-arrow-long-right"></em></div>
         </a>
      </div>

      <a class="pmo-st pmo-dark" target="_blank"
         href="#">
         <div class="pmo-st-img"><img src="{{asset('backend/images/landing/promo-investorm.png')}}" alt="Investorm"></div>
         <div class="pmo-st-text">Looking for Advanced <br> HYIP Investment Platform?</div>
      </a>

      <script src="{{asset('backend/assets/js/bundle.js?ver=3.0.2')}}"></script>

      <script src="{{asset('backend/assets/js/scripts.js?ver=3.0.2')}}"></script>
      <!-- apexcharts -->
      <script src="{{asset('backend/assets/apexcharts/apexcharts.min-1.js')}}"></script>
      <script src="{{asset('backend/assets/js/pages/dashboard.init-1.js')}}"></script>
      <script src="{{asset('backend/assets/js/pages/apexcharts.init-2.js')}}"></script>
      <script src="{{ mix('js/app.js') }}"></script>


   </body>
</html>
