
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Portfolio Agency | Front - Responsive Website Template</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/cubeportfolio/css/cubeportfolio.min.css') }}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--bg-transparent u-header--abs-top">
    <div class="u-header__section">
      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="navbar navbar-expand u-header__navbar">
          <!-- Logo -->
          <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-text-white" href="../home/index.html" aria-label="Front">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
              <path fill="#E1E4EA" opacity=".65" d="M23,41.1L23,41.1c-9.9,0-18-8-18-18l0,0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6v11.4C41,33,32.9,41.1,23,41.1z"/>
              <path class="fill-white" opacity=".5" d="M28,36L28,36c-9.9,0-18-8-18-18l0,0c0-9.9,8-18,18-18h11.3C43,0.1,46,3.1,46,6.7v11.4C46,28,38,36,28,36z"/>
              <path class="fill-white" opacity=".7" d="M18,46.1L18,46.1c-10,0-18-8-18-18l0,0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6v11.4C35.9,38.1,27.9,46.1,18,46.1z"/>
              <path class="fill-primary" d="M17.4,34.1V18.4h10.2v2.9h-6.4v3.4H26v2.9h-4.8v6.5H17.4z"/>
            </svg>
            <span class="u-header__navbar-brand-text">Front</span>
          </a>
          <!-- End Logo -->

          <!-- Fullscreen Toggle Button -->
          <button id="sidebarHeaderInvoker" type="button" class="navbar-toggler d-block btn u-hamburger ml-auto"
                  aria-controls="sidebarHeader"
                  aria-haspopup="true"
                  aria-expanded="false"
                  data-unfold-event="click"
                  data-unfold-hide-on-scroll="false"
                  data-unfold-target="#sidebarHeader"
                  data-unfold-type="css-animation"
                  data-unfold-animation-in="fadeInRight"
                  data-unfold-animation-out="fadeOutRight"
                  data-unfold-duration="500">
            <span id="hamburgerTrigger" class="u-hamburger__box">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Fullscreen Toggle Button -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== HEADER SIDEBAR ========== -->
  <aside id="sidebarHeader" class="u-sidebar" aria-labelledby="sidebarHeaderInvoker">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-header-sidebar__footer-offset">
          <!-- Toggle Button -->
          <div class="d-sm-none position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
            <button type="button" class="close ml-auto"
                    aria-controls="sidebarHeader"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="click"
                    data-unfold-hide-on-scroll="false"
                    data-unfold-target="#sidebarHeader"
                    data-unfold-type="css-animation"
                    data-unfold-animation-in="fadeInRight"
                    data-unfold-animation-out="fadeOutRight"
                    data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body">
            <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
              <!-- Logo -->
              <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical" href="index.html" aria-label="Front">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
                  <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"/>
                  <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"/>
                  <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"/>
                  <path class="fill-white" d="M17.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4z"/>
                </svg>
                <span class="u-header__navbar-brand-text">Front</span>
              </a>
              <!-- End Logo -->

              <!-- List -->
              <ul id="headerSidebarList" class="u-header-collapse__nav">
                <!-- Home Section -->
                <li class="u-has-submenu u-header-collapse__submenu">
                  <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarHomeCollapse" data-target="#headerSidebarHomeCollapse">
                    Home
                  </a>

                  <div id="headerSidebarHomeCollapse" class="collapse" data-parent="#headerSidebarContent">
                    <ul id="headerSidebarHomeMenu" class="u-header-collapse__nav-list">
                      <!-- Home - Classic -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarHomeClassicSubNavCollapse" data-target="#headerSidebarHomeClassicSubNavCollapse">
                          Classic
                        </a>

                        <ul id="headerSidebarHomeClassicSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarHomeMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="index.html">Classic Agency</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="classic-business.html">Classic Business</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="classic-marketing.html">Classic Marketing</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="classic-consulting.html">Classic Consulting</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="classic-start-up.html">Classic Start-up</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="classic-studio.html">Classic Studio</a></li>
                        </ul>
                      </li>
                      <!-- End Home - Classic -->

                      <!-- Home - Corporate -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarHomeCorporateSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarHomeCorporateSubNavCollapse">
                          Corporate
                        </a>

                        <ul id="headerSidebarHomeCorporateSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarHomeMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="corporate-agency.html">Corporate Agency</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="corporate-start-up.html">Corporate Start-Up</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="corporate-business.html">Corporate Business</a></li>
                        </ul>
                      </li>
                      <!-- End Home - Corporate -->

                      <!-- Home - Portfolio -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarHomePortfolioSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarHomePortfolioSubNavCollapse">
                          Portfolio
                        </a>

                        <ul id="headerSidebarHomePortfolioSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarHomeMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="portfolio-agency.html">Portfolio Agency</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="portfolio-profile.html">Portfolio Profile</a></li>
                        </ul>
                      </li>
                      <!-- End Home - Portfolio -->

                      <!-- Home - App -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerHomeSidebarAppSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerHomeSidebarAppSubNavCollapse">
                          App
                        </a>

                        <ul id="headerHomeSidebarAppSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarHomeMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="app-saas.html">App SaaS</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="app-workflow.html">App Workflow</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="app-payment.html">App Payment</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="app-software.html">App Software</a></li>
                        </ul>
                      </li>
                      <!-- End Home - App -->

                      <!-- Home - Onepages -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerHomeSidebarOnepagesSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerHomeSidebarOnepagesSubNavCollapse">
                          Onepages
                        </a>

                        <ul id="headerHomeSidebarOnepagesSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarHomeMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="onepages-creative.html">Onepages Creative</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="onepages-sass.html">Onepages SaaS</a></li>
                        </ul>
                      </li>
                      <!-- End Home - Onepages -->

                      <!-- Home - Blog -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerHomeSidebarBlogSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerHomeSidebarBlogSubNavCollapse">
                          Blog
                        </a>

                        <ul id="headerHomeSidebarBlogSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarHomeMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="blog-agency.html">Blog Agency</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="blog-start-up.html">Blog Start-Up</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="blog-business.html">Blog Business</a></li>
                        </ul>
                      </li>
                      <!-- End Home - Blog -->
                    </ul>
                  </div>
                </li>
                <!-- End Home Section -->

                <!-- Page Section -->
                <li class="u-has-submenu u-header-collapse__submenu">
                  <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesCollapse">
                    Pages
                  </a>

                  <div id="headerSidebarPagesCollapse" class="collapse" data-parent="#headerSidebarContent">
                    <ul id="headerSidebarPagesMenu" class="u-header-collapse__nav-list">
                      <!-- Page - Account -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesAccountSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesAccountSubNavCollapse">
                          Account
                        </a>

                        <ul id="headerSidebarPagesAccountSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarPagesMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/dashboard.html">Dashboard</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/profile.html">Profile</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/my-tasks.html">My tasks</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/projects.html">Projects</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/members.html">Members</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/edit-profile.html">Edit profile</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/change-password.html">Change password</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/notifications.html">Notifications</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/activity.html">Activity</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/payment-methods.html">Payment methods</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/invite-friends.html">Invite friends</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/plans.html">Plans</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../account/api-token.html">API Token</a></li>
                        </ul>
                      </li>
                      <!-- End Page - Account -->

                      <!-- Page - Company -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesCompanySubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesCompanySubNavCollapse">
                          Company
                        </a>

                        <ul id="headerSidebarPagesCompanySubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarPagesMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/about-agency.html">About Agency</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/services-agency.html">Services Agency</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/careers.html">Careers</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/careers-single.html">Careers Single</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/hire-us.html">Hire Us</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/customers.html">Customers</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/customer-story.html">Customer story</a></li>
                        </ul>
                      </li>
                      <!-- End Page - Company -->

                      <!-- Page - Portfolio -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesPortfolioSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesPortfolioSubNavCollapse">
                          Portfolio
                        </a>

                        <ul id="headerSidebarPagesPortfolioSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarPagesMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../portfolio/boxed-classic.html">All layouts</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../portfolio/case-studies-simple.html">Case Studies Simple</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../portfolio/case-studies-modern.html">Case Studies Modern</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../portfolio/single-page-simple.html">Single Page Simple</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../portfolio/single-page-grid.html">Single Page Grid</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../portfolio/single-page-masonry.html">Single Page Masonry</a></li>
                        </ul>
                      </li>
                      <!-- End Page - Portfolio -->

                      <!-- Page - Login -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesLoginSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesLoginSubNavCollapse">
                          Login
                        </a>

                        <ul id="headerSidebarPagesLoginSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarPagesMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/login.html">Login</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/signup.html">Signup</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/recover-account.html">Recover Account</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/login-simple.html">Login Simple</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/signup-simple.html">Signup Simple</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/recover-account-simple.html">Recover Account Simple</a></li>
                        </ul>
                      </li>
                      <!-- End Page - Login -->

                      <!-- Page - Contacts -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesContactsSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesContactsSubNavCollapse">
                          Contacts
                        </a>

                        <ul id="headerSidebarPagesContactsSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarPagesMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/contacts-agency.html">Contacts Agency</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/contacts-start-up.html">Contacts Start-Up</a></li>
                        </ul>
                      </li>
                      <!-- End Page - Contacts -->

                      <!-- Page - Utilities -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesUtilitiesSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesUtilitiesSubNavCollapse">
                          Utilities
                        </a>

                        <ul id="headerSidebarPagesUtilitiesSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarPagesMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/pricing.html">Pricing</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/faq.html">FAQ</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/terms.html">Terms &amp; Conditions</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/privacy.html">Privacy &amp; Policy</a></li>
                        </ul>
                      </li>
                      <!-- End Page - Utilities -->

                      <!-- Page - Specialty -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesSpecialtySubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesSpecialtySubNavCollapse">
                          Specialty
                        </a>

                        <ul id="headerSidebarPagesSpecialtySubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarPagesMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/cover-page.html">Cover Page</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/coming-soon.html">Coming Soon</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/maintenance-mode.html">Maintenance Mode</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/status.html">Status</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/invoice.html">Invoice</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../pages/error-404.html">Error 404</a></li>
                        </ul>
                      </li>
                      <!-- End Page - Specialty -->
                    </ul>
                  </div>
                </li>
                <!-- End Page Section -->

                <!-- Blog -->
                <li class="u-has-submenu u-header-collapse__submenu">
                  <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogCollapse">
                    Blog
                  </a>

                  <div id="headerSidebarBlogCollapse" class="collapse" data-parent="#headerSidebarContent">
                    <ul id="headerSidebarBlogMenu" class="u-header-collapse__nav-list">
                      <!-- Blog - Classic -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogClassicSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogClassicSubNavCollapse">
                          Classic
                        </a>

                        <ul id="headerSidebarBlogClassicSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarBlogMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/classic-left-sidebar.html">Left Sidebar</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/classic-right-sidebar.html">Right Sidebar</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/classic-full-width.html">Full Width</a></li>
                        </ul>
                      </li>
                      <!-- End Blog - Classic -->

                      <!-- Blog - Grid -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogGridSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogGridSubNavCollapse">
                          Grid
                        </a>

                        <ul id="headerSidebarBlogGridSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarBlogMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/grid-left-sidebar.html">Left Sidebar</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/grid-right-sidebar.html">Right Sidebar</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/grid-full-width.html">Full Width</a></li>
                        </ul>
                      </li>
                      <!-- End Blog - Grid -->

                      <!-- Blog - List -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogListSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogListSubNavCollapse">
                          List
                        </a>

                        <ul id="headerSidebarBlogListSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarBlogMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/list-left-sidebar.html">Left Sidebar</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/list-right-sidebar.html">Right Sidebar</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/list-full-width.html">Full Width</a></li>
                        </ul>
                      </li>
                      <!-- End Blog - List -->

                      <!-- Blog - Modern -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogModernSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogModernSubNavCollapse">
                          Modern
                        </a>

                        <ul id="headerSidebarBlogModernSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarBlogMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/modern-left-sidebar.html">Left Sidebar</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/modern-right-sidebar.html">Right Sidebar</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/modern-full-width.html">Full Width</a></li>
                        </ul>
                      </li>
                      <!-- End Blog - Modern -->

                      <!-- Blog - Masonry -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogMasonrySubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogMasonrySubNavCollapse">
                          Masonry
                        </a>

                        <ul id="headerSidebarBlogMasonrySubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarBlogMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/masonry-left-sidebar.html">Left Sidebar</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/masonry-right-sidebar.html">Right Sidebar</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/masonry-full-width.html">Full Width</a></li>
                        </ul>
                      </li>
                      <!-- End Blog - Masonry -->

                      <!-- Blog - Single Article -->
                      <li class="u-has-submenu u-header-collapse__submenu">
                        <a class="u-header-collapse__submenu-nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogSingleArticleSubNavCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogSingleArticleSubNavCollapse">
                          Single Article
                        </a>

                        <ul id="headerSidebarBlogSingleArticleSubNavCollapse" class="collapse u-header-collapse__submenu-list" data-parent="#headerSidebarBlogMenu">
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/single-article-classic.html">Classic</a></li>
                          <li><a class="nav-link u-header-collapse__submenu-list-link" href="../blog/single-article-simple.html">Simple</a></li>
                        </ul>
                      </li>
                      <!-- End Blog - Single Article -->
                    </ul>
                  </div>
                </li>
                <!-- End Blog -->

                <!-- Shop Section -->
                <li class="u-has-submenu u-header-collapse__submenu">
                  <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarShopCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarShopCollapse">
                    Shop
                  </a>

                  <div id="headerSidebarShopCollapse" class="collapse" data-parent="#headerSidebarContent">
                    <ul id="headerSidebarShopMenu" class="u-header-collapse__nav-list u-header-collapse__nav-list--no-spacer">
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../shop/classic.html">Classic</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../shop/categories.html">Categories</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../shop/categories-sidebar.html">Categories Sidebar</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../shop/products-grid.html">Products Grid</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../shop/products-list.html">Products List</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../shop/single-product.html">Single Product</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../shop/empty-cart.html">Empty Cart</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../shop/cart.html">Cart</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../shop/checkout.html">Checkout</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../shop/order-completed.html">Order Completed</a></li>
                    </ul>
                  </div>
                </li>
                <!-- End Shop Section -->

                <!-- Demos Section -->
                <li class="u-has-submenu u-header-collapse__submenu">
                  <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarDemosCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarDemosCollapse">
                    Demos
                  </a>

                  <div id="headerSidebarDemosCollapse" class="collapse" data-parent="#headerSidebarContent">
                    <ul id="headerSidebarDemosMenu" class="u-header-collapse__nav-list u-header-collapse__nav-list--no-spacer">
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../app-marketplace/index.html">App Marketplace</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../house/index.html">House</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../job/index.html">Job</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../help-desk/index.html">Help Desk</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../crypto/index.html">Crypto Landing</a></li>
                    </ul>
                  </div>
                </li>
                <!-- End Demos Section -->

                <!-- Docs Section -->
                <li class="u-has-submenu u-header-collapse__submenu">
                  <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebardocsCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebardocsCollapse">
                    Docs
                  </a>

                  <div id="headerSidebardocsCollapse" class="collapse" data-parent="#headerSidebarContent">
                    <ul id="headerSidebardocsMenu" class="u-header-collapse__nav-list u-header-collapse__nav-list--no-spacer">
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../../documentation/index.html">Classic</a></li>
                      <li><a class="nav-link u-header-collapse__submenu-list-link" href="../../starter/index.html">Get started</a></li>
                    </ul>
                  </div>
                </li>
                <!-- End Docs Section -->
              </ul>
              <!-- End List -->
            </div>
          </div>
          <!-- End Content -->
        </div>

        <!-- Footer -->
        <footer id="SVGwaveWithDots" class="svg-preloader u-header-sidebar__footer">
          <ul class="list-inline mb-0">
            <li class="list-inline-item pr-3">
              <a class="u-header-sidebar__footer-link" href="../../html/pages/privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item pr-3">
              <a class="u-header-sidebar__footer-link" href="../../html/pages/terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-header-sidebar__footer-link" href="../../html/pages/help.html">
                <i class="fas fa-info-circle"></i>
              </a>
            </li>
          </ul>

          <!-- SVG Background Shape -->
          <div class="position-absolute right-0 bottom-0 left-0 z-index-n1">
            <img class="js-svg-injector" src="../../assets/svg/components/wave-bottom-with-dots.svg" alt="Image Description"
                 data-parent="#SVGwaveWithDots">
          </div>
          <!-- End SVG Background Shape -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- ========== END HEADER SIDEBAR ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div id="SVGGraphicIllustration1" class="svg-preloader d-lg-flex align-items-lg-center gradient-half-primary-v1 height-lg-100vh">
      <div class="d-none d-lg-block bg-img-hero position-absolute top-0 right-0 left-0 height-lg-100vh" style="background-image: url(../../assets/img/bg-shapes/bg1.png);"></div>
      <div class="container space-top-3 space-bottom-2 space-top-md-4 space-bottom-md-3">
        <div class="row align-items-md-center">
          <div class="col-lg-6">
            <!-- Title -->
            <div class="mb-7">
              <h1 class="text-white font-weight-normal">
                We help<br>
                <span class="text-warning">
                  <span class="u-text-animation u-text-animation--typing"></span>
                </span>
              </h1>
              <p class="lead text-white-70">Building brands people can't live without is how our clients grow.</p>
            </div>
            <!-- End Title -->

            <a class="btn btn-white btn-wide text-primary transition-3d-hover" href="../pages/hire-us.html">Hire Us</a>
          </div>

          <div class="col-lg-6 d-none d-lg-inline-block">
            <!-- SVG Shapes -->
            <figure class="ie-graphic-illustration-1">
              <img class="js-svg-injector" src="../../assets/svg/illustrations/graphic-illustration-1.svg" alt="Image Description"
                   data-img-paths='[
                     {"targetId": "#SVGgraphicIllustration1Img1", "newPath": "../../assets/img/100x100/img1.jpg"},
                     {"targetId": "#SVGgraphicIllustration1Img2", "newPath": "../../assets/img/100x100/img2.jpg"},
                     {"targetId": "#SVGgraphicIllustration1Img3", "newPath": "../../assets/img/160x160/img14.png"},
                     {"targetId": "#SVGgraphicIllustration1Img4", "newPath": "../../assets/img/160x160/img18.png"},
                     {"targetId": "#SVGgraphicIllustration1Img5", "newPath": "../../assets/img/160x160/img13.png"}
                   ]'
                   data-parent="#SVGGraphicIllustration1">
            </figure>
            <!-- End SVG Shapes -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Cubeportfolio Section -->
    <div class="container space-2 space-bottom-md-3 u-cubeportfolio">
      <!-- Filter -->
      <ul id="cubeFilter" class="list-inline cbp-l-filters-alignRight d-flex">
        <li class="list-inline-item cbp-filter-item cbp-filter-item-active u-cubeportfolio__item mr-auto" data-filter="*">Show all</li>
        <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".branding">Branding</li>
        <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".abstract">Abstract</li>
        <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".graphic">Graphic</li>
        <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".illustration">Illustration</li>
      </ul>
      <!-- End Filter -->

      <!-- Content -->
      <div class="cbp mb-7"
            data-controls="#cubeFilter"
            data-animation="quicksand"
            data-x-gap="16"
            data-y-gap="16"
            data-load-more-selector="#cubeLoadMore"
            data-load-more-action="click"
            data-load-items-amount="4"
            data-media-queries='[
              {"width": 1500, "cols": 3},
              {"width": 1100, "cols": 3},
              {"width": 800, "cols": 3},
              {"width": 480, "cols": 2},
              {"width": 300, "cols": 1}
            ]'>
        <!-- Item -->
        <div class="cbp-item rounded abstract">
          <a class="cbp-caption" href="../portfolio/single-page-simple.html">
            <div class="cbp-caption-defaultWrap">
              <img src="../../assets/img/380x360/img1.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap bg-primary">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <h4 class="h6 text-white mb-0">Remind Me More</h4>
                  <p class="small text-white-70 mb-0">
                    by Tiberiu Neamu
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item rounded branding">
          <a class="cbp-caption" href="../portfolio/single-page-simple.html">
            <div class="cbp-caption-defaultWrap">
              <img src="../../assets/img/380x360/img2.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap bg-primary">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <h4 class="h6 text-white mb-0">Workout Buddy</h4>
                  <p class="small text-white-70 mb-0">
                    by Tiberiu Neamu
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item rounded abstract">
          <a class="cbp-caption" href="../portfolio/single-page-simple.html">
            <div class="cbp-caption-defaultWrap">
              <img src="../../assets/img/380x740/img1.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap bg-primary">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <h4 class="h6 text-white mb-0">Easy Note</h4>
                  <p class="small text-white-70 mb-0">
                    by Cosmin Capitanu
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item rounded branding">
          <a class="cbp-caption" href="../portfolio/single-page-simple.html">
            <div class="cbp-caption-defaultWrap">
              <img src="../../assets/img/380x360/img3.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap bg-primary">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <h4 class="h6 text-white mb-0">Tiger</h4>
                  <p class="small text-white-70 mb-0">
                    by Cosmin Capitanu
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item rounded abstract branding">
          <a class="cbp-caption" href="../portfolio/single-page-simple.html">
            <div class="cbp-caption-defaultWrap">
              <img src="../../assets/img/380x360/img5.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap bg-primary">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <h4 class="h6 text-white mb-0">Tiger</h4>
                  <p class="small text-white-70 mb-0">
                    by Cosmin Capitanu
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item rounded graphic">
          <a class="cbp-caption" href="../portfolio/single-page-simple.html">
            <div class="cbp-caption-defaultWrap">
              <img src="../../assets/img/380x360/img4.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap bg-primary">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <h4 class="h6 text-white mb-0">Tiger</h4>
                  <p class="small text-white-70 mb-0">
                    by Cosmin Capitanu
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item rounded illustration">
          <a class="cbp-caption" href="../portfolio/single-page-simple.html">
            <div class="cbp-caption-defaultWrap">
              <img src="../../assets/img/380x360/img12.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap bg-primary">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <h4 class="h6 text-white mb-0">Remind Me More</h4>
                  <p class="small text-white-70 mb-0">
                    by Tiberiu Neamu
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item rounded graphic illustration">
          <a class="cbp-caption" href="../portfolio/single-page-simple.html">
            <div class="cbp-caption-defaultWrap">
              <img src="../../assets/img/380x360/img6.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap bg-primary">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <h4 class="h6 text-white mb-0">Tiger</h4>
                  <p class="small text-white-70 mb-0">
                    by Cosmin Capitanu
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->
      </div>
      <!-- End Content -->

      <!-- Load More Button -->
      <div id="cubeLoadMore" class="text-center">
        <a href="../../assets/ajax/home-portfolio-agency-1/load-more.html" class="cbp-l-loadMore-link link" rel="nofollow">
          <span class="cbp-l-loadMore-defaultText">
            Load More
            <span class="link__icon ml-1">
              <span class="link__icon-inner">&#43;</span>
            </span>
          </span>
          <span class="cbp-l-loadMore-loadingText">Loading...</span>
          <span class="cbp-l-loadMore-noMoreLoading">No more works</span>
        </a>
      </div>
      <!-- End Load More Button -->
    </div>
    <!-- End Cubeportfolio Section -->

    <!-- Hero Section -->
    <div class="bg-img-hero" style="background-image: url(../../assets/img/1920x1080/img8.jpg);">
      <div class="container space-2 space-md-3">
        <div class="row justify-content-end">
          <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5">
            <!-- Content -->
            <div class="card border-0 shadow-sm">
              <div class="card-body p-7">
                <div class="mb-4">
                  <h2 class="font-weight-normal mb-0">Hire Us</h2>
                </div>

                <form class="js-validate">
                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message">
                      <input type="text" class="form-control" name="fullname" placeholder="Full name" aria-label="Full name" required
                             data-msg="Name must contain only letters."
                             data-error-class="u-has-error"
                             data-success-class="u-has-success">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message">
                      <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" required
                             data-msg="Please enter a valid email address."
                             data-error-class="u-has-error"
                             data-success-class="u-has-success">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="media align-items-center mt-4">
                    <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mr-3">Send</button>
                    <div class="media-body">
                      <small class="d-block text-muted">or call us</small>
                      <span class="d-block text-primary font-weight-semi-bold">+1 (062) 109-9222</span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Content -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== END FOOTER ========== -->
  <footer class="container text-center space-2">
    <ul class="list-inline mb-4">
      <li class="list-inline-item">
        <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="#">
          <span class="fab fa-facebook-f btn-icon__inner"></span>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="#">
          <span class="fab fa-google btn-icon__inner"></span>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="#">
          <span class="fab fa-twitter btn-icon__inner"></span>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="#">
          <span class="fab fa-github btn-icon__inner"></span>
        </a>
      </li>
    </ul>

    <p class="small text-muted mb-0">&copy; Front. 2019 Htmlstream. All rights reserved.</p>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('assets/vendor/svg-injector/dist/svg-injector.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/lib/typed.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>

  <!-- JS Front -->
  <script src="{{ asset('assets/js/hs.core.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.hamburgers.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.unfold.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.malihu-scrollbar.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.validation.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.cubeportfolio.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.svg-injector.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.go-to.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        beforeClose: function () {
          $('#hamburgerTrigger').removeClass('is-active');
        },
        afterClose: function() {
          $('#headerSidebarList .collapse.show').collapse('hide');
        }
      });

      $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
        e.preventDefault();

        var target = $(this).data('target');

        if($(this).attr('aria-expanded') === "true") {
          $(target).collapse('hide');
        } else {
          $(target).collapse('show');
        }
      });

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');

      // initialization of text animation (typing)
      var typed = new Typed(".u-text-animation.u-text-animation--typing", {
        strings: ["building brands.", "dealing with complexity.", "win more business."],
        typeSpeed: 60,
        loop: true,
        backSpeed: 25,
        backDelay: 1500
      });

      // initialization of cubeportfolio
      $.HSCore.components.HSCubeportfolio.init('.cbp');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>