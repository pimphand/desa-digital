<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin />
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="" />
    <!-- SEO Tags -->
    <title>Desa Digital - Website Resmi</title>
    <meta name="description" content="Website Resmi Desa Digital - Informasi dan layanan desa dalam genggaman" />
    <meta name="keywords" content="desa digital, pemerintahan desa, desa, layanan desa, berita desa, UMKM desa" />
    <meta name="author" content="Desa Digital" />
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:title" content="Desa Digital - Website Resmi" />
    <meta property="og:description" content="Website Resmi Desa Digital - Informasi dan layanan desa dalam genggaman" />
    <meta property="og:image"  />
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Desa Digital - Website Resmi" />
    <meta name="twitter:description" content="Website Resmi Desa Digital - Informasi dan layanan desa dalam genggaman" />
    <meta name="twitter:image"  />
    <!-- Favicon -->
    <link rel="icon"  type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180"  />
    <link rel="icon" type="image/png" sizes="32x32"  />
    <link rel="icon" type="image/png" sizes="16x16"  />
    <meta name="theme-color" content="#047857" />
    <!-- Fonts - Upgraded with modern combinations -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Base Stylesheet -->
    <link href="{{ asset('assets') }}/src/css/output.css" rel="stylesheet" />
    <!-- Additional Styles -->
    <link rel="stylesheet" href="{{ asset('assets') }}/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="{{ asset('assets') }}/npm/aos-2.3.4/dist/aos.css" rel="stylesheet">
    <script src="{{ asset('assets') }}/npm/aos-2.3.4/dist/aos.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/npm/swiper-10/swiper-bundle.min.css">
    <style>
      /* Change pagination bullets to emerald theme */
      .swiper-pagination-bullet {
          width: 10px;
          height: 10px;
          background: rgba(16, 185, 129, 0.2); /* emerald-500 with opacity */
          opacity: 1;
      }
      .swiper-pagination-bullet-active {
          background: rgb(16, 185, 129); /* emerald-500 */
          transform: scale(1.2);
          transition: transform 0.3s;
      }
      /* Dynamic bullets styling */
      .swiper-pagination-bullet-active-main {
          background: rgb(16, 185, 129); /* emerald-500 */
          transform: scale(1.4);
      }
      .swiper-pagination-bullet-active-prev,
      .swiper-pagination-bullet-active-next {
          background: rgba(16, 185, 129, 0.6); /* emerald-500 with medium opacity */
          transform: scale(1.1);
      }
      .swiper-pagination-bullet-active-prev-prev,
      .swiper-pagination-bullet-active-next-next {
          background: rgba(16, 185, 129, 0.3); /* emerald-500 with low opacity */
      }
      .perspective-1000 { perspective: 1000px; }
      @keyframes rotate-y {
          0%, 100% { transform: rotateY(0deg); }
          50% { transform: rotateY(180deg); }
      }
      @keyframes rotate-y-reverse {
          0%, 100% { transform: rotateY(0deg); }
          50% { transform: rotateY(-180deg); }
      }
      .animate-rotate-y {
          animation: rotate-y 10s infinite ease-in-out;
      }
      .animate-rotate-y-reverse {
          animation: rotate-y-reverse 10s infinite ease-in-out;
      }
      </style>
  </head>
  <body class="font-sans antialiased bg-gray-50">
    <!-- Subtle background pattern using SVG instead of image -->
    <div class="fixed inset-0 -z-10 bg-dots-pattern opacity-10"></div>
    <div class="min-h-screen flex flex-col">
      <!-- Enhanced Header/Navigation -->
      <header class="fixed top-0 z-50 w-full header-nav">
        <!-- Navigation content goes here -->
        <nav x-data="{ mobileMenuOpen: false, scrolled: false }"
             @scroll.window="scrolled = window.pageYOffset > 20"
             class="sticky top-0 z-50 bg-white shadow-sm py-2 transition-all duration-200"
             :class="{ 'py-1 shadow-md': scrolled }">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <!-- Logo dengan efek hover -->
                    <div class="flex items-center">
                        <a class='flex items-center transition-transform hover:-translate-y-0.5 duration-200' href='index.html'>
                            <div class="flex items-center">
                                <span class="text-emerald-600 font-bold text-2xl mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </span>
                                    <div class="text-emerald-600 font-bold text-xl">Desa Digital</div>
                            </div>
                        </a>
                    </div>
                    <!-- Desktop Navigation Links -->
                    <div class="hidden lg:flex lg:items-center">
                        <div class="flex items-center space-x-6 mr-8">
                            <a class='flex items-center space-x-1.5 text-sm font-medium group' href='index.html'>
                                <span class="text-emerald-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </span>
                                <span class="py-2 px-1 border-b-2 border-emerald-500 text-emerald-600 font-semibold transition duration-200">
                                    Beranda
                                </span>
                            </a>
                            <a class='flex items-center space-x-1.5 text-sm font-medium group' href='profile.html'>
                                <span class="text-emerald-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <span class="py-2 px-1 border-b-2 border-transparent text-gray-600 group-hover:text-emerald-500 group-hover:border-emerald-300 transition duration-200">
                                    Profil
                                </span>
                            </a>
                            <a class='flex items-center space-x-1.5 text-sm font-medium group' href='berita.html'>
                                <span class="text-emerald-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                </span>
                                <span class="py-2 px-1 border-b-2 border-transparent text-gray-600 group-hover:text-emerald-500 group-hover:border-emerald-300 transition duration-200">
                                    Berita
                                </span>
                            </a>
                            <a class='flex items-center space-x-1.5 text-sm font-medium group' href='umkm.html'>
                                <span class="text-emerald-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                </span>
                                <span class="py-2 px-1 border-b-2 border-transparent text-gray-600 group-hover:text-emerald-500 group-hover:border-emerald-300 transition duration-200">
                                    UMKM
                                </span>
                            </a>
                            <a class='flex items-center space-x-1.5 text-sm font-medium group' href='layanan.html'>
                                <span class="text-emerald-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="py-2 px-1 border-b-2 border-transparent text-gray-600 group-hover:text-emerald-500 group-hover:border-emerald-300 transition duration-200">
                                    Layanan
                                </span>
                            </a>
                            <a class='flex items-center space-x-1.5 text-sm font-medium group' href='statistik.html'>
                                <span class="text-emerald-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </span>
                                <span class="py-2 px-1 border-b-2 border-transparent text-gray-600 group-hover:text-emerald-500 group-hover:border-emerald-300 transition duration-200">
                                    Statistik
                                </span>
                            </a>
                        </div>
                        <!-- Login/Register Buttons -->
                        <div class="flex items-center border-l border-gray-200 pl-6 ml-6 space-x-4">
                            <a class='text-sm font-medium px-5 py-2 text-emerald-600 hover:text-emerald-700 hover:bg-emerald-50 border border-emerald-200 rounded-lg transition-colors duration-200' href='login.html'>
                                Masuk
                            </a>
                            <a class='text-sm font-medium px-5 py-2 text-white bg-emerald-600 hover:bg-emerald-700 rounded-lg shadow-sm hover:shadow transition-all duration-200' href='register.html'>
                                Daftar
                            </a>
                        </div>
                    </div>
                    <!-- Mobile menu button -->
                    <div class="lg:hidden">
                        <button
                            @click="mobileMenuOpen = !mobileMenuOpen"
                            class="inline-flex items-center justify-center p-2 rounded-lg text-emerald-600 hover:text-emerald-700 hover:bg-emerald-50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-emerald-500 transition duration-150"
                        >
                            <span class="sr-only">Buka menu</span>
                            <svg class="h-6 w-6" :class="{'hidden': mobileMenuOpen, 'block': !mobileMenuOpen}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg class="h-6 w-6" :class="{'block': mobileMenuOpen, 'hidden': !mobileMenuOpen}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile Navigation Menu -->
            <div class="lg:hidden fixed inset-x-0 z-40 bg-white border-t border-gray-200 mt-2 shadow-lg"
                 x-show="mobileMenuOpen"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-10"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-10"
                 x-cloak>
                <div class="pt-2 pb-3 space-y-1">
                    <!-- Menu item dengan ikon -->
                    <a class='flex items-center pl-3 pr-4 py-3 bg-emerald-50 text-emerald-700 transition-colors rounded-lg mx-2' href='index.html'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="text-base font-medium">Beranda</span>
                    </a>
                    <a class='flex items-center pl-3 pr-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-emerald-600 transition-colors rounded-lg mx-2' href='profile.html'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-base font-medium">Profil Desa</span>
                    </a>
                    <a class='flex items-center pl-3 pr-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-emerald-600 transition-colors rounded-lg mx-2' href='berita.html'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                        <span class="text-base font-medium">Berita</span>
                    </a>
                    <a class='flex items-center pl-3 pr-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-emerald-600 transition-colors rounded-lg mx-2' href='umkm.html'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <span class="text-base font-medium">UMKM</span>
                    </a>
                    <a class='flex items-center pl-3 pr-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-emerald-600 transition-colors rounded-lg mx-2' href='layanan.html'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="text-base font-medium">Layanan</span>
                    </a>
                    <a class='flex items-center pl-3 pr-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-emerald-600 transition-colors rounded-lg mx-2' href='statistik.html'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <span class="text-base font-medium">Statistik</span>
                    </a>
                    <!-- Mobile Authentication Links dengan Style yang Diperbarui -->
                    <div class="pt-4 pb-3 border-t border-gray-200 mt-2">
                        <!-- Mobile Login/Register Buttons -->
                        <div class="grid grid-cols-1 gap-3 px-3 mt-3">
                            <a class='flex justify-center items-center px-4 py-3 border-2 border-emerald-200 text-base font-medium rounded-lg text-emerald-600 bg-white hover:bg-emerald-50 transition-colors' href='login.html'>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg> Masuk
                            </a>
                            <a class='flex justify-center items-center px-4 py-3 border border-transparent shadow-sm text-base font-medium rounded-lg text-white bg-emerald-600 hover:bg-emerald-700 transition-colors' href='register.html'>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg> Daftar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
      </header>
      <!-- Modern Hero Section with Improved Mobile Responsiveness -->
      <section class="relative overflow-hidden min-h-screen" x-data="modernCarousel()">
        <!-- Hero Section Images -->
        <div class="absolute inset-0 w-full h-full">
          <div x-show="currentSlide === 0"
               x-transition:enter="transition ease-out"
               x-transition:enter-start="opacity-0"
               x-transition:enter-end="opacity-100"
               x-transition:leave="transition ease-in"
               x-transition:leave-start="opacity-100"
               x-transition:leave-end="opacity-0"
               :style="'transition-duration: 800ms'"
               class="absolute inset-0 w-full h-full overflow-hidden">
            <img src="{{ asset('assets') }}/src/images/hero/1.jpg"
                 alt="Slide 1"
                 loading="lazy"
                 class="absolute inset-0 w-full h-full object-cover object-center">
            <!-- Improved overlay for better text visibility -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-black/10"></div>
          </div>
          <div x-show="currentSlide === 1"
               x-transition:enter="transition ease-out"
               x-transition:enter-start="opacity-0"
               x-transition:enter-end="opacity-100"
               x-transition:leave="transition ease-in"
               x-transition:leave-start="opacity-100"
               x-transition:leave-end="opacity-0"
               :style="'transition-duration: 800ms'"
               class="absolute inset-0 w-full h-full overflow-hidden">
            <img src="{{ asset('assets') }}/src/images/hero/2.jpg"
                 alt="Slide 2"
                 loading="lazy"
                 class="absolute inset-0 w-full h-full object-cover object-center">
            <!-- Improved overlay for better text visibility -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-black/10"></div>
          </div>
          <!-- Slide Hero 3 (Duplikasi) -->
          <div x-show="currentSlide === 2"
               x-transition:enter="transition ease-out"
               x-transition:enter-start="opacity-0"
               x-transition:enter-end="opacity-100"
               x-transition:leave="transition ease-in"
               x-transition:leave-start="opacity-100"
               x-transition:leave-end="opacity-0"
               :style="'transition-duration: 800ms'"
               class="absolute inset-0 w-full h-full overflow-hidden">
            <img src="{{ asset('assets') }}/src/images/hero/3.jpg"
                 alt="Slide 3"
                 loading="lazy"
                 class="absolute inset-0 w-full h-full object-cover object-center">
            <!-- Improved overlay for better text visibility -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-black/10"></div>
          </div>
          <!-- Slide Hero 4 (Duplikasi) -->
          <div x-show="currentSlide === 3"
               x-transition:enter="transition ease-out"
               x-transition:enter-start="opacity-0"
               x-transition:enter-end="opacity-100"
               x-transition:leave="transition ease-in"
               x-transition:leave-start="opacity-100"
               x-transition:leave-end="opacity-0"
               :style="'transition-duration: 800ms'"
               class="absolute inset-0 w-full h-full overflow-hidden">
            <img src="{{ asset('assets') }}/src/images/hero/4.jpg"
                 alt="Slide 4"
                 loading="lazy"
                 class="absolute inset-0 w-full h-full object-cover object-center">
            <!-- Improved overlay for better text visibility -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-black/10"></div>
          </div>
          <!-- Slide Hero 5 (Duplikasi) -->
          <div x-show="currentSlide === 4"
               x-transition:enter="transition ease-out"
               x-transition:enter-start="opacity-0"
               x-transition:enter-end="opacity-100"
               x-transition:leave="transition ease-in"
               x-transition:leave-start="opacity-100"
               x-transition:leave-end="opacity-0"
               :style="'transition-duration: 800ms'"
               class="absolute inset-0 w-full h-full overflow-hidden">
            <img src="{{ asset('assets') }}/src/images/hero/5.jpg"
                 alt="Slide 5"
                 loading="lazy"
                 class="absolute inset-0 w-full h-full object-cover object-center">
            <!-- Improved overlay for better text visibility -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-black/10"></div>
          </div>
        </div>
        <!-- Mobile Slide Indicators: Top Right Corner -->
        <div class="absolute right-4 z-30 md:hidden" style="top: 5rem;">
          <div class="flex items-center gap-1.5">
            <button @click="currentSlide = 0"
                    class="h-1.5 transition-all duration-300 focus:outline-none rounded-full overflow-hidden"
                    :class="{'w-6 bg-white': currentSlide === 0, 'w-3 bg-white/30 hover:bg-white/50': currentSlide !== 0}">
            </button>
            <button @click="currentSlide = 1"
                    class="h-1.5 transition-all duration-300 focus:outline-none rounded-full overflow-hidden"
                    :class="{'w-6 bg-white': currentSlide === 1, 'w-3 bg-white/30 hover:bg-white/50': currentSlide !== 1}">
            </button>
            <button @click="currentSlide = 2"
                    class="h-1.5 transition-all duration-300 focus:outline-none rounded-full overflow-hidden"
                    :class="{'w-6 bg-white': currentSlide === 2, 'w-3 bg-white/30 hover:bg-white/50': currentSlide !== 2}">
            </button>
            <button @click="currentSlide = 3"
                    class="h-1.5 transition-all duration-300 focus:outline-none rounded-full overflow-hidden"
                    :class="{'w-6 bg-white': currentSlide === 3, 'w-3 bg-white/30 hover:bg-white/50': currentSlide !== 3}">
            </button>
            <button @click="currentSlide = 4"
                    class="h-1.5 transition-all duration-300 focus:outline-none rounded-full overflow-hidden"
                    :class="{'w-6 bg-white': currentSlide === 4, 'w-3 bg-white/30 hover:bg-white/50': currentSlide !== 4}">
            </button>
          </div>
        </div>
        <!-- DESKTOP LAYOUT (Hidden on mobile) -->
        <div class="absolute inset-0 hidden md:grid md:grid-cols-12 z-10">
          <!-- Main Content Area (8 cols on desktop) -->
          <div class="md:col-span-8 flex items-center">
            <div class="w-full max-w-4xl px-8 py-16">
              <!-- Modern Badge -->
              <div class="relative inline-flex items-center px-5 py-2.5 rounded-lg bg-gradient-to-r from-emerald-500/20 to-emerald-600/20 backdrop-blur-md border border-white/20 shadow-lg group overflow-hidden" data-aos="fade-down" data-aos-duration="800">
                <!-- Animated Glow Effect -->
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-all duration-1000 ease-in-out"></div>
                <!-- Badge Content -->
                <span class="relative z-10 text-white font-semibold text-sm uppercase tracking-wider flex items-center">
                  <span class="w-1.5 h-1.5 bg-emerald-400 rounded-full mr-2.5 animate-pulse"></span>
                  DESA DIGITAL
                </span>
              </div>
              <!-- Clear, Bold Typography -->
              <h1 class="mt-3 text-6xl md:text-7xl font-bold text-white leading-none" data-aos="fade-up" data-aos-duration="800">
                Desa Digital
              </h1>
              <!-- Clear Subtitle with Better Contrast -->
              <p class="mt-5 text-white text-xl font-light max-w-2xl leading-relaxed" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                Kecamatan Contoh, Kabupaten Contoh, Provinsi Contoh
              </p>
              <!-- Modern Action Buttons -->
              <div class="mt-10 flex flex-wrap gap-4" data-aos="fade-up" data-aos-delay="200">
                <a class='inline-flex items-center justify-center px-6 py-2 border border-white/30 text-base font-medium rounded-md text-white bg-white/10 backdrop-blur-sm hover:bg-white/20 transition' href='profile.html'>
                  <i class="fas fa-info-circle mr-2"></i> Profil Desa
                </a>
                <a class='inline-flex items-center justify-center px-6 py-2 text-base font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700 transition' href='layanan.html'>
                  <i class="fas fa-file-alt mr-2"></i> Layanan Desa
                </a>
              </div>
            </div>
          </div>
          <!-- Feature Cards Area (4 cols on desktop) -->
          <div class="md:col-span-4 bg-black/50 backdrop-blur-md">
            <div class="h-full flex flex-col justify-center p-8">
              <!-- Modern Section Heading -->
              <div class="mb-8">
                <h2 class="text-white text-xl font-bold mb-1">FITUR UNGGULAN</h2>
                <div class="h-1 w-16 bg-emerald-500 rounded-full"></div>
              </div>
              <!-- Modern Feature Cards with Clear Text -->
              <div class="space-y-4">
                <!-- Layanan Card -->
                <a class='group block p-4 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg transition-all duration-300' href='layanan.html'>
                  <div class="flex items-center">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-emerald-600 flex items-center justify-center">
                      <i class="fas fa-file-alt text-white text-lg"></i>
                    </div>
                    <div class="ml-4 flex-1">
                      <h3 class="text-white text-lg font-medium mb-0.5">Layanan Desa</h3>
                      <p class="text-white/70 text-sm">Layanan administrasi terpadu</p>
                    </div>
                    <div class="ml-2">
                      <i class="fas fa-chevron-right text-white/40 group-hover:text-white transition-all"></i>
                    </div>
                  </div>
                </a>
                <!-- UMKM Card -->
                <a class='group block p-4 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg transition-all duration-300' href='umkm.html'>
                  <div class="flex items-center">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-emerald-600 flex items-center justify-center">
                      <i class="fas fa-store text-white text-lg"></i>
                    </div>
                    <div class="ml-4 flex-1">
                      <h3 class="text-white text-lg font-medium mb-0.5">UMKM Desa</h3>
                      <p class="text-white/70 text-sm">Produk lokal berkualitas</p>
                    </div>
                    <div class="ml-2">
                      <i class="fas fa-chevron-right text-white/40 group-hover:text-white transition-all"></i>
                    </div>
                  </div>
                </a>
                <!-- Berita Card -->
                <a class='group block p-4 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg transition-all duration-300' href='berita.html'>
                  <div class="flex items-center">
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-emerald-600 flex items-center justify-center">
                      <i class="fas fa-newspaper text-white text-lg"></i>
                    </div>
                    <div class="ml-4 flex-1">
                      <h3 class="text-white text-lg font-medium mb-0.5">Berita Desa</h3>
                      <p class="text-white/70 text-sm">Informasi terkini</p>
                    </div>
                    <div class="ml-2">
                      <i class="fas fa-chevron-right text-white/40 group-hover:text-white transition-all"></i>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- MOBILE LAYOUT (Hidden on desktop) -->
        <div class="absolute inset-0 flex flex-col md:hidden z-10">
          <!-- Top Row: Text Content -->
          <div class="flex-1 flex items-center">
            <div class="w-full px-5 py-6">
              <!-- Mobile Badge -->
              <div class="relative inline-flex items-center px-3 py-1.5 rounded-lg bg-gradient-to-r from-emerald-500/20 to-emerald-600/20 backdrop-blur-md border border-white/20 shadow-md group overflow-hidden" data-aos="fade-down" data-aos-duration="800">
                <!-- Animated Glow Effect -->
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-400/30 to-emerald-600/30 rounded-lg blur opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                <span class="relative z-10 text-white font-semibold text-xs uppercase tracking-wider flex items-center">
                  <span class="w-1 h-1 bg-emerald-400 rounded-full mr-2 animate-pulse"></span>
                  DESA DIGITAL
                </span>
              </div>
              <!-- Mobile Typography -->
              <h1 class="mt-3 text-3xl font-bold text-white leading-tight" data-aos="fade-up" data-aos-duration="800">
                Desa Digital
              </h1>
              <!-- Mobile Subtitle -->
              <p class="mt-3 text-white text-base font-light leading-relaxed" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                Kecamatan Contoh, Kabupaten Contoh
              </p>
              <!-- Mobile Action Buttons -->
              <div class="mt-6 flex flex-wrap gap-3" data-aos="fade-up" data-aos-delay="200">
                <a class='inline-flex items-center justify-center px-4 py-2.5 border border-white/30 text-sm font-medium rounded-md text-white bg-white/10 backdrop-blur-sm hover:bg-white/20 transition' href='profile.html'>
                  <i class="fas fa-info-circle mr-2"></i> Profil Desa
                </a>
                <a class='inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700 transition' href='layanan.html'>
                  <i class="fas fa-file-alt mr-2"></i> Layanan Desa
                </a>
              </div>
            </div>
          </div>
          <!-- Bottom Row: Feature Cards for Mobile (1 per row) -->
          <div class="bg-black/50 backdrop-blur-md py-4 px-4 border-t border-white/10">
            <h2 class="text-white text-sm font-bold uppercase mb-3">FITUR UNGGULAN</h2>
            <div class="space-y-2.5">
              <!-- Layanan Card -->
              <a class='group block p-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg' href='layanan.html'>
                <div class="flex items-center">
                  <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-600 flex items-center justify-center">
                    <i class="fas fa-file-alt text-white"></i>
                  </div>
                  <div class="ml-3 flex-1">
                    <h3 class="text-white text-sm font-medium mb-0.5">Layanan Desa</h3>
                    <p class="text-white/70 text-xs">Layanan administrasi terpadu</p>
                  </div>
                  <div class="ml-2">
                    <i class="fas fa-chevron-right text-white/40 group-hover:text-white text-xs transition-all"></i>
                  </div>
                </div>
              </a>
              <!-- UMKM Card -->
              <a class='group block p-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg' href='umkm.html'>
                <div class="flex items-center">
                  <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-600 flex items-center justify-center">
                    <i class="fas fa-store text-white"></i>
                  </div>
                  <div class="ml-3 flex-1">
                    <h3 class="text-white text-sm font-medium mb-0.5">UMKM Desa</h3>
                    <p class="text-white/70 text-xs">Produk lokal berkualitas</p>
                  </div>
                  <div class="ml-2">
                    <i class="fas fa-chevron-right text-white/40 group-hover:text-white text-xs transition-all"></i>
                  </div>
                </div>
              </a>
              <!-- Berita Card -->
              <a class='group block p-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-lg' href='berita.html'>
                <div class="flex items-center">
                  <div class="flex-shrink-0 w-10 h-10 rounded-full bg-emerald-600 flex items-center justify-center">
                    <i class="fas fa-newspaper text-white"></i>
                  </div>
                  <div class="ml-3 flex-1">
                    <h3 class="text-white text-sm font-medium mb-0.5">Berita Desa</h3>
                    <p class="text-white/70 text-xs">Informasi terkini</p>
                  </div>
                  <div class="ml-2">
                    <i class="fas fa-chevron-right text-white/40 group-hover:text-white text-xs transition-all"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- Desktop Slide Indicator (hidden on mobile) -->
        <div class="absolute bottom-8 left-8 right-8 z-20 hidden md:flex">
          <div class="flex items-center gap-2">
            <button @click="currentSlide = 0"
                    class="h-1.5 transition-all duration-300 focus:outline-none rounded-full overflow-hidden"
                    :class="{'w-8 bg-white': currentSlide === 0, 'w-4 bg-white/30 hover:bg-white/50': currentSlide !== 0}">
            </button>
            <button @click="currentSlide = 1"
                    class="h-1.5 transition-all duration-300 focus:outline-none rounded-full overflow-hidden"
                    :class="{'w-8 bg-white': currentSlide === 1, 'w-4 bg-white/30 hover:bg-white/50': currentSlide !== 1}">
            </button>
            <button @click="currentSlide = 2"
                    class="h-1.5 transition-all duration-300 focus:outline-none rounded-full overflow-hidden"
                    :class="{'w-8 bg-white': currentSlide === 2, 'w-4 bg-white/30 hover:bg-white/50': currentSlide !== 2}">
            </button>
            <button @click="currentSlide = 3"
                    class="h-1.5 transition-all duration-300 focus:outline-none rounded-full overflow-hidden"
                    :class="{'w-8 bg-white': currentSlide === 3, 'w-4 bg-white/30 hover:bg-white/50': currentSlide !== 3}">
            </button>
            <button @click="currentSlide = 4"
                    class="h-1.5 transition-all duration-300 focus:outline-none rounded-full overflow-hidden"
                    :class="{'w-8 bg-white': currentSlide === 4, 'w-4 bg-white/30 hover:bg-white/50': currentSlide !== 4}">
            </button>
          </div>
        </div>
      </section>
      <!-- Modern Statistics Section with Contemporary Design -->
      <section class="py-12 bg-white relative z-10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <!-- Section Header -->
          <div class="flex justify-center mb-3" data-aos="fade-up">
            <div class="inline-flex items-center bg-emerald-50 px-4 py-2 rounded-full">
              <div class="w-2 h-2 bg-emerald-500 rounded-full mr-2"></div>
              <h2 class="text-emerald-800 text-sm font-semibold tracking-wide uppercase">Data Statistik</h2>
            </div>
          </div>
          <p class="text-gray-600 max-w-3xl mx-auto text-center text-base mb-10">
            Informasi statistik terkini tentang jumlah penduduk, UMKM, layanan, dan berita desa
          </p>
          <!-- Modern Stats Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Penduduk Stat -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-500 group relative" data-aos="fade-up" data-aos-delay="50">
              <!-- Top Accent Bar -->
              <div class="h-1.5 w-full bg-gradient-to-r from-emerald-400 to-emerald-600"></div>
              <div class="p-6">
                <!-- Floating Icon -->
                <div class="absolute top-6 right-6 w-16 h-16 flex items-center justify-center text-emerald-100 opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all duration-700">
                  <i class="fas fa-users text-5xl"></i>
                </div>
                <!-- Label -->
                <div class="inline-flex items-center px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-medium">
                  <i class="fas fa-users mr-1.5 text-emerald-500"></i>
                  <span>Penduduk</span>
                </div>
                <!-- Stat Value with Animation -->
                <div class="mt-2 mb-1">
                  <div class="text-4xl md:text-5xl font-bold text-gray-800 tracking-tight tabular-nums counter-item flex items-baseline"
                        x-data="counter(2500)">
                    <span x-text="value.toLocaleString()" class="group-hover:text-emerald-700 transition-colors duration-300">0</span>
                    <span class="text-sm font-medium text-emerald-600 ml-2 tracking-wide">jiwa</span>
                  </div>
                </div>
                <!-- Label -->
                <p class="text-sm text-gray-500 mt-1 group-hover:text-gray-700 transition-colors duration-300">Total Penduduk Desa</p>
                <!-- Decorative Element -->
                <div class="w-12 h-1 bg-emerald-200 rounded-full mt-4 group-hover:w-20 transition-all duration-500"></div>
              </div>
            </div>
            <!-- UMKM Stat -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-500 group relative" data-aos="fade-up" data-aos-delay="100">
              <!-- Top Accent Bar -->
              <div class="h-1.5 w-full bg-gradient-to-r from-blue-400 to-blue-600"></div>
              <div class="p-6">
                <!-- Floating Icon -->
                <div class="absolute top-6 right-6 w-16 h-16 flex items-center justify-center text-blue-100 opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all duration-700">
                  <i class="fas fa-store text-5xl"></i>
                </div>
                <!-- Label -->
                <div class="inline-flex items-center px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-medium">
                  <i class="fas fa-store mr-1.5 text-blue-500"></i>
                  <span>UMKM</span>
                </div>
                <!-- Stat Value with Animation -->
                <div class="mt-2 mb-1">
                  <div class="text-4xl md:text-5xl font-bold text-gray-800 tracking-tight tabular-nums counter-item flex items-baseline"
                        x-data="counter(42)">
                    <span x-text="value.toLocaleString()" class="group-hover:text-blue-700 transition-colors duration-300">0</span>
                    <span class="text-sm font-medium text-blue-600 ml-2 tracking-wide">unit</span>
                  </div>
                </div>
                <!-- Label -->
                <p class="text-sm text-gray-500 mt-1 group-hover:text-gray-700 transition-colors duration-300">Total UMKM Desa</p>
                <!-- Decorative Element -->
                <div class="w-12 h-1 bg-blue-200 rounded-full mt-4 group-hover:w-20 transition-all duration-500"></div>
              </div>
            </div>
            <!-- Berita Stat -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-500 group relative" data-aos="fade-up" data-aos-delay="150">
              <!-- Top Accent Bar -->
              <div class="h-1.5 w-full bg-gradient-to-r from-amber-400 to-amber-600"></div>
              <div class="p-6">
                <!-- Floating Icon -->
                <div class="absolute top-6 right-6 w-16 h-16 flex items-center justify-center text-amber-100 opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all duration-700">
                  <i class="fas fa-newspaper text-5xl"></i>
                </div>
                <!-- Label -->
                <div class="inline-flex items-center px-3 py-1 rounded-full bg-amber-50 text-amber-700 text-xs font-medium">
                  <i class="fas fa-newspaper mr-1.5 text-amber-500"></i>
                  <span>Berita</span>
                </div>
                <!-- Stat Value with Animation -->
                <div class="mt-2 mb-1">
                  <div class="text-4xl md:text-5xl font-bold text-gray-800 tracking-tight tabular-nums counter-item flex items-baseline"
                        x-data="counter(36)">
                    <span x-text="value.toLocaleString()" class="group-hover:text-amber-700 transition-colors duration-300">0</span>
                    <span class="text-sm font-medium text-amber-600 ml-2 tracking-wide">artikel</span>
                  </div>
                </div>
                <!-- Label -->
                <p class="text-sm text-gray-500 mt-1 group-hover:text-gray-700 transition-colors duration-300">Total Berita Desa</p>
                <!-- Decorative Element -->
                <div class="w-12 h-1 bg-amber-200 rounded-full mt-4 group-hover:w-20 transition-all duration-500"></div>
              </div>
            </div>
            <!-- Layanan Stat -->
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-500 group relative" data-aos="fade-up" data-aos-delay="200">
              <!-- Top Accent Bar -->
              <div class="h-1.5 w-full bg-gradient-to-r from-purple-400 to-purple-600"></div>
              <div class="p-6">
                <!-- Floating Icon -->
                <div class="absolute top-6 right-6 w-16 h-16 flex items-center justify-center text-purple-100 opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all duration-700">
                  <i class="fas fa-file-alt text-5xl"></i>
                </div>
                <!-- Label -->
                <div class="inline-flex items-center px-3 py-1 rounded-full bg-purple-50 text-purple-700 text-xs font-medium">
                  <i class="fas fa-file-alt mr-1.5 text-purple-500"></i>
                  <span>Layanan</span>
                </div>
                <!-- Stat Value with Animation -->
                <div class="mt-2 mb-1">
                  <div class="text-4xl md:text-5xl font-bold text-gray-800 tracking-tight tabular-nums counter-item flex items-baseline"
                        x-data="counter(18)">
                    <span x-text="value.toLocaleString()" class="group-hover:text-purple-700 transition-colors duration-300">0</span>
                    <span class="text-sm font-medium text-purple-600 ml-2 tracking-wide">jenis</span>
                  </div>
                </div>
                <!-- Label -->
                <p class="text-sm text-gray-500 mt-1 group-hover:text-gray-700 transition-colors duration-300">Total Layanan Desa</p>
                <!-- Decorative Element -->
                <div class="w-12 h-1 bg-purple-200 rounded-full mt-4 group-hover:w-20 transition-all duration-500"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Modern React/Vue Style Sambutan & Program Section with Interactive 3D Elements -->
      <section class="py-12 bg-gray-50 relative overflow-hidden">
        <!-- 3D Interactive Background Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-emerald-100/40 to-emerald-50/10 rounded-full blur-3xl -z-10 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-blue-100/40 to-blue-50/10 rounded-full blur-3xl -z-10 animate-pulse" style="animation-delay: 2s;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
       <!-- Modern React-style Tab Interface -->
<div x-data="{ activeTab: 'sambutan' }">
  <!-- 3D Interactive Tab Navigation -->
  <div class="flex justify-center mb-6">
    <div class="inline-flex bg-white/90 backdrop-blur-sm rounded-full p-1 shadow-md">
      <button @click="activeTab = 'sambutan'"
              :class="{ 'bg-gradient-to-r from-emerald-500 to-emerald-600 text-white shadow-md': activeTab === 'sambutan',
                       'bg-transparent text-gray-600 hover:text-gray-800': activeTab !== 'sambutan' }"
              class="px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-300 flex items-center">
        <svg class="w-4 h-4 mr-1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M8 9H16M8 13H14M8 17H12M10 2V6M14 2V6M3 8C3 6.89543 3.89543 6 5 6H19C20.1046 6 21 6.89543 21 8V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Sambutan
      </button>
      <button @click="activeTab = 'program'"
              :class="{ 'bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md': activeTab === 'program',
                       'bg-transparent text-gray-600 hover:text-gray-800': activeTab !== 'program' }"
              class="px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-300 flex items-center">
        <svg class="w-4 h-4 mr-1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Program Desa
      </button>
    </div>
  </div>
  <!-- Content Container -->
  <div class="mt-8 relative">
    <!-- Sambutan Tab Panel -->
    <div x-show="activeTab === 'sambutan'"
         x-transition:enter="transition-all duration-500 ease-out"
         x-transition:enter-start="opacity-0 transform translate-y-4"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition-all duration-300 ease-in"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-4"
         class="mx-auto max-w-5xl">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="grid md:grid-cols-12 gap-6 p-6">
          <!-- Kepala Desa Profile -->
          <div class="md:col-span-4 flex flex-col items-center" data-aos="fade-right">
            <div class="relative mb-3">
              <!-- Profile Photo -->
              <div class="w-28 h-28 md:w-32 md:h-32 rounded-full overflow-hidden ring-4 ring-white shadow-md relative z-10">
                <img class="object-cover w-full h-full"
                     src="{{ asset('assets') }}/src/images/kepala-desa.jpg"
                     alt="Kepala Desa"
                     loading="lazy">
              </div>
              <!-- Verification Badge -->
              <div class="absolute w-6 h-6 bg-emerald-500 rounded-full flex items-center justify-center shadow-md z-20" style="bottom: -0.1rem; right: -0.1rem;">
                <i class="fas fa-check text-white text-xs"></i>
              </div>
            </div>
            <div class="text-center">
              <h3 class="text-lg font-bold text-gray-900">Muhammad Haikal</h3>
              <p class="text-sm font-medium text-emerald-700">Kepala Desa</p>
              <p class="text-xs text-gray-500 mt-1">2023 - 2029</p>
            </div>
            <!-- Decorative Elements -->
            <div class="mt-4 hidden md:flex justify-center">
              <div class="flex space-x-1">
                <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-bounce" style="animation-delay: 0ms"></div>
                <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-bounce" style="animation-delay: 200ms"></div>
                <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-bounce" style="animation-delay: 400ms"></div>
                <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-bounce" style="animation-delay: 600ms"></div>
                <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-bounce" style="animation-delay: 800ms"></div>
              </div>
            </div>
          </div>
          <!-- Sambutan Content -->
          <div class="md:col-span-8" data-aos="fade-left">
            <div class="prose prose-emerald max-w-none text-gray-600 leading-relaxed p-4 bg-white">
              <p>Assalamu'alaikum Wr. Wb.</p>
              <p>Puji syukur kehadirat Allah SWT, atas limpahan Rahmat dan Karunia-Nya, sehingga Desa Digital dapat menghadirkan website desa sebagai media komunikasi dan transparansi pelayanan kepada masyarakat.</p>
              <p>Kami mengucapkan selamat datang di website kami yang merupakan salah satu wujud komitmen kami untuk meningkatkan pelayanan informasi dan memberikan kemudahan akses bagi masyarakat.</p>
              <p>Semoga website ini dapat bermanfaat dan menjadi sumber informasi yang representatif, serta memudahkan layanan kepada masyarakat Desa Digital.</p>
              <p>Wassalamu'alaikum Wr. Wb.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Program Tab Panel -->
    <div x-show="activeTab === 'program'"
         x-transition:enter="transition-all duration-500 ease-out"
         x-transition:enter-start="opacity-0 transform translate-y-4"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition-all duration-300 ease-in"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-4"
         class="mx-auto max-w-5xl">
      <!-- Content with Interactive Elements -->
      <div class="flex flex-col md:flex-row gap-8 mb-5 md:mb-3 items-center" data-aos="fade-up">
        <!-- 3D Decorative Element -->
        <div class="w-20 h-20 md:w-24 md:h-24 relative perspective-1000 hidden md:block">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-emerald-400 rounded-xl shadow-lg animate-rotate-y"></div>
          <div class="absolute inset-2 bg-white rounded-lg flex items-center justify-center animate-rotate-y-reverse">
            <svg class="w-10 h-10 text-blue-500" viewBox="0 0 24 24" fill="none">
              <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15M9 5C9 6.10457 9.89543 7 11 7H13C14.1046 7 15 6.10457 15 5M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5M12 12H15M12 16H15M9 12H9.01M9 16H9.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
        </div>
        <!-- Descriptive Text -->
        <p class="text-gray-600 flex-1 text-center md:text-left bg-white backdrop-blur-sm p-4 rounded-lg shadow-sm">
          Program yang menjadi fokus pembangunan dan pengembangan desa untuk mewujudkan kesejahteraan masyarakat
        </p>
      </div>
      <!-- Program Tabs - Modern and Interactive -->
      <div x-data="{ activeSubTab: 'prioritas' }" data-aos="fade-up">
        <!-- Modern Tab Navigation - Single Row on Mobile -->
        <div class="flex justify-center mb-5">
          <div class="inline-flex bg-white/90 backdrop-blur-sm rounded-full p-1 shadow-md">
            <button @click="activeSubTab = 'prioritas'"
                    :class="{ 'bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md': activeSubTab === 'prioritas',
                             'bg-transparent text-gray-600 hover:text-gray-800': activeSubTab !== 'prioritas' }"
                    class="px-4 py-2.5 rounded-full text-sm font-medium transition-all duration-300 flex items-center">
              <svg class="w-4 h-4 mr-1.5" :class="{'text-white': activeSubTab === 'prioritas'}" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
              </svg>
              <span>Program Prioritas</span>
            </button>
            <button @click="activeSubTab = 'programKerja'"
                    :class="{ 'bg-gradient-to-r from-emerald-500 to-emerald-600 text-white shadow-md': activeSubTab === 'programKerja',
                             'bg-transparent text-gray-600 hover:text-gray-800': activeSubTab !== 'programKerja' }"
                    class="px-4 py-2.5 rounded-full text-sm font-medium transition-all duration-300 flex items-center">
              <svg class="w-4 h-4 mr-1.5" :class="{'text-white': activeSubTab === 'programKerja'}" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
              </svg>
              <span>Program Kerja</span>
            </button>
          </div>
        </div>
        <!-- Program Content with Modern Transitions -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <!-- Program Prioritas Content -->
          <div x-show="activeSubTab === 'prioritas'"
               x-transition:enter="transition-all ease-out duration-300"
               x-transition:enter-start="opacity-0 transform translate-y-4"
               x-transition:enter-end="opacity-100 transform translate-y-0"
               x-transition:leave="transition-all ease-in duration-200"
               x-transition:leave-start="opacity-100 transform translate-y-0"
               x-transition:leave-end="opacity-0 transform -translate-y-4"
               class="p-6">
            <div class="prose prose-blue max-w-none">
              <h3>Program Prioritas Desa Digital 2023-2024</h3>
              <ol>
                <li>Peningkatan infrastruktur jalan desa dan jembatan</li>
                <li>Pengembangan fasilitas kesehatan dan peningkatan layanan kesehatan masyarakat</li>
                <li>Peningkatan kualitas pendidikan dan fasilitas sekolah</li>
                <li>Pemberdayaan ekonomi masyarakat melalui UMKM dan BUMDes</li>
                <li>Digitalisasi layanan administrasi desa untuk kemudahan pelayanan</li>
              </ol>
            </div>
          </div>
          <!-- Program Kerja Content -->
          <div x-show="activeSubTab === 'programKerja'"
               x-transition:enter="transition-all ease-out duration-300"
               x-transition:enter-start="opacity-0 transform translate-y-4"
               x-transition:enter-end="opacity-100 transform translate-y-0"
               x-transition:leave="transition-all ease-in duration-200"
               x-transition:leave-start="opacity-100 transform translate-y-0"
               x-transition:leave-end="opacity-0 transform -translate-y-4"
               class="p-6">
            <div class="prose prose-emerald max-w-none">
              <h3>Program Kerja Desa Digital 2023</h3>
              <ul>
                <li>Pengembangan sistem informasi desa berbasis web dan mobile</li>
                <li>Pelatihan digital marketing bagi pelaku UMKM desa</li>
                <li>Pembangunan jaringan internet untuk fasilitas publik desa</li>
                <li>Optimalisasi pengelolaan sampah dan lingkungan hidup</li>
                <li>Peningkatan pelayanan administrasi desa dengan sistem antrian digital</li>
                <li>Program bantuan sosial tepat sasaran dengan verifikasi data terpadu</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Berita Terbaru - Modern Slider Layout with Enhanced Cards -->
<section class="py-12 bg-white relative overflow-hidden">
<!-- Abstract Background Elements -->
<div class="absolute top-0 left-1/3 w-1/2 h-full bg-gradient-to-b from-white via-emerald-50/30 to-transparent -z-10"></div>
<div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-blue-50/40 -z-10"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  <!-- Modern Header -->
  <div class="mb-0">
    <!-- Title and Button in One Row -->
    <div class="flex items-center justify-between mb-3">
     <!-- For Berita Section Header -->
      <div class="flex items-center">
        <div class="h-6 w-1 bg-emerald-500 rounded-full mr-2"></div>
        <span class="bg-emerald-50 px-2.5 py-1 rounded-full text-emerald-800 text-sm font-semibold flex items-center">
          <i class="fas fa-newspaper text-emerald-600 mr-1.5"></i>
          INFORMASI TERKINI
        </span>
      </div>
      <!-- Right: Simplified Button -->
      <a class='flex-shrink-0 inline-flex items-center text-sm font-medium text-emerald-600 border border-emerald-200 rounded-lg px-3 py-1.5 hover:bg-emerald-50 transition-colors' href='berita.html'>
        <span>Lihat Semua</span>
        <svg class="ml-1.5 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
    <!-- Description on Full Row -->
    <p class="text-gray-600 text-sm md:text-base w-full">
      Berita dan informasi terbaru seputar kegiatan dan perkembangan desa
    </p>
  </div>
  <!-- Swiper Slider Container -->
  <div class="relative mt-6">
    <!-- Main Swiper -->
    <div class="swiper-container berita-slider">
      <div class="swiper-wrapper">
        <!-- Berita 1 -->
        <div class="swiper-slide p-3">
          <!-- Modern Card Design -->
          <div class="group bg-white rounded-2xl shadow-sm overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-lg relative border border-gray-100">
            <!-- Enhanced Image Container with Overlay Gradient -->
            <div class="relative aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105"
                   src="{{ asset('assets') }}/src/images/berita/1.webp"
                   alt="Judul Berita 1"
                   loading="lazy">
              <!-- Gradient Overlay -->
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <!-- Modern Content Area -->
            <div class="p-6 flex flex-col flex-grow relative bg-gray-50">
              <!-- Date and Category on Same Line - Modern Style -->
              <div class="flex items-center justify-between mb-4 relative z-10">
                <!-- Modern Date Badge - Updated Design -->
                <div class="flex items-center">
                  <div class="flex flex-col items-center mr-3 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-lg shadow-sm overflow-hidden border border-emerald-100 transition-all duration-300 group-hover:shadow-md">
                    <div class="bg-emerald-500 text-white text-xs font-bold w-full text-center py-0.5 px-2">
                      Jan
                    </div>
                    <div class="text-emerald-700 text-base font-bold py-0.5 px-3">
                      15
                    </div>
                  </div>
                  <div class="flex flex-col text-xs">
                    <span class="text-gray-500 font-medium">
                      2023
                    </span>
                    <span class="text-gray-400">
                      Minggu
                    </span>
                  </div>
                </div>
                <!-- Enhanced Category Badge -->
                <span class="inline-flex items-center px-2.5 py-1.5 rounded-md text-xs font-medium text-white bg-emerald-500 border-emerald-600 shadow-md border-l-4">
                  <i class="fas fa-calendar-check mr-1"></i>
                  Kegiatan
                </span>
              </div>
              <!-- Enhanced Title with Modern Typography -->
              <a class='block group relative z-10' href='berita-detail.html'>
                <!-- Modern Title Design with Gradient Accent -->
                <div class="relative h-0.5 w-12 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full mb-3 transition-all duration-300 group-hover:w-24"></div>
                <h3 class="text-xl font-bold text-gray-900 leading-tight mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors">
                  Pembangunan Jalan Desa Telah Rampung
                </h3>
              </a>
              <!-- Modern Description with Premium Typography and 2-line Truncation -->
              <div class="mt-1 relative z-10">
                <p class="text-gray-600 text-sm leading-relaxed mb-5 pl-3 border-l-2 border-emerald-200 line-clamp-2 after:content-['...']">
                  Pembangunan jalan desa sepanjang 2 kilometer telah rampung dilaksanakan. Jalan ini menghubungkan dusun A dengan dusun B yang selama ini sulit diakses terutama saat musim hujan.
                </p>
              </div>
              <!-- Author and Read More Section -->
              <div class="mt-auto pt-4 border-t border-dashed border-gray-200 flex justify-between items-center relative z-10">
                <!-- Author Info -->
                <div class="flex items-center text-sm text-gray-500">
                  <i class="fas fa-user text-emerald-500 mr-2"></i>
                  Admin
                </div>
                <!-- Modern Read More Link -->
                <a class='inline-flex items-center bg-emerald-50 hover:bg-emerald-100 text-emerald-600 font-medium text-sm rounded-full px-4 py-1.5 transition-colors duration-300 group/detail hover:text-emerald-700' href='berita-detail.html'>
                  <span class="relative">
                    <span class="absolute bottom-0 h-0.5 w-full scale-x-0 origin-left bg-emerald-600 transition-transform duration-300 group-hover/detail:scale-x-100"></span>
                    Lihat detail
                  </span>
                  <svg class="ml-1.5 w-4 h-4 transform transition-transform duration-300 group-hover/detail:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Berita 2 -->
        <div class="swiper-slide p-3">
          <!-- Modern Card Design -->
          <div class="group bg-white rounded-2xl shadow-sm overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-lg relative border border-gray-100">
            <!-- Enhanced Image Container with Overlay Gradient -->
            <div class="relative aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105"
                   src="{{ asset('assets') }}/src/images/berita/2.webp"
                   alt="Judul Berita 2"
                   loading="lazy">
              <!-- Gradient Overlay -->
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <!-- Modern Content Area -->
            <div class="p-6 flex flex-col flex-grow relative bg-gray-50">
              <!-- Date and Category on Same Line - Modern Style -->
              <div class="flex items-center justify-between mb-4 relative z-10">
                <!-- Modern Date Badge - Updated Design -->
                <div class="flex items-center">
                  <div class="flex flex-col items-center mr-3 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-lg shadow-sm overflow-hidden border border-emerald-100 transition-all duration-300 group-hover:shadow-md">
                    <div class="bg-emerald-500 text-white text-xs font-bold w-full text-center py-0.5 px-2">
                      Feb
                    </div>
                    <div class="text-emerald-700 text-base font-bold py-0.5 px-3">
                      05
                    </div>
                  </div>
                  <div class="flex flex-col text-xs">
                    <span class="text-gray-500 font-medium">
                      2023
                    </span>
                    <span class="text-gray-400">
                      Senin
                    </span>
                  </div>
                </div>
                <!-- Enhanced Category Badge -->
                <span class="inline-flex items-center px-2.5 py-1.5 rounded-md text-xs font-medium text-white bg-emerald-500 border-emerald-600 shadow-md border-l-4">
                  <i class="fas fa-calendar-check mr-1"></i>
                  Kesehatan
                </span>
              </div>
              <!-- Enhanced Title with Modern Typography -->
              <a class='block group relative z-10' href='berita-detail.html'>
                <!-- Modern Title Design with Gradient Accent -->
                <div class="relative h-0.5 w-12 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full mb-3 transition-all duration-300 group-hover:w-24"></div>
                <h3 class="text-xl font-bold text-gray-900 leading-tight mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors">
                  Program Posyandu Desa Kini Tersedia Setiap Minggu
                </h3>
              </a>
              <!-- Modern Description with Premium Typography and 2-line Truncation -->
              <div class="mt-1 relative z-10">
                <p class="text-gray-600 text-sm leading-relaxed mb-5 pl-3 border-l-2 border-emerald-200 line-clamp-2 after:content-['...']">
                  Layanan Posyandu di Desa Digital kini tersedia setiap minggu guna meningkatkan layanan kesehatan bagi balita dan lansia di desa. Program ini merupakan upaya untuk meningkatkan kesehatan masyarakat.
                </p>
              </div>
              <!-- Author and Read More Section -->
              <div class="mt-auto pt-4 border-t border-dashed border-gray-200 flex justify-between items-center relative z-10">
                <!-- Author Info -->
                <div class="flex items-center text-sm text-gray-500">
                  <i class="fas fa-user text-emerald-500 mr-2"></i>
                  Admin
                </div>
                <!-- Modern Read More Link -->
                <a class='inline-flex items-center bg-emerald-50 hover:bg-emerald-100 text-emerald-600 font-medium text-sm rounded-full px-4 py-1.5 transition-colors duration-300 group/detail hover:text-emerald-700' href='berita-detail.html'>
                  <span>Baca selengkapnya</span>
                  <svg class="ml-1.5 w-4 h-4 transform transition-transform duration-300 group-hover/detail:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Berita 3 -->
        <div class="swiper-slide p-3">
          <div class="group bg-white rounded-2xl shadow-sm overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-lg relative border border-gray-100">
            <div class="relative aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105"
                   src="{{ asset('assets') }}/src/images/berita/3.webp"
                   alt="Pelatihan Digital Marketing UMKM"
                   loading="lazy">
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6 flex flex-col flex-grow relative bg-gray-50">
              <div class="flex items-center justify-between mb-4 relative z-10">
                <div class="flex items-center">
                  <div class="flex flex-col items-center mr-3 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-lg shadow-sm overflow-hidden border border-emerald-100 transition-all duration-300 group-hover:shadow-md">
                    <div class="bg-emerald-500 text-white text-xs font-bold w-full text-center py-0.5 px-2">
                      Mar
                    </div>
                    <div class="text-emerald-700 text-base font-bold py-0.5 px-3">
                      10
                    </div>
                  </div>
                  <div class="flex flex-col text-xs">
                    <span class="text-gray-500 font-medium">
                      2023
                    </span>
                    <span class="text-gray-400">
                      Jumat
                    </span>
                  </div>
                </div>
                <span class="inline-flex items-center px-2.5 py-1.5 rounded-md text-xs font-medium text-white bg-blue-500 border-blue-600 shadow-md border-l-4">
                  <i class="fas fa-laptop mr-1"></i>
                  Pelatihan
                </span>
              </div>
              <a class='block group relative z-10' href='berita-detail.html'>
                <div class="relative h-0.5 w-12 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full mb-3 transition-all duration-300 group-hover:w-24"></div>
                <h3 class="text-xl font-bold text-gray-900 leading-tight mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors">
                  Pelatihan Digital Marketing Untuk UMKM Desa
                </h3>
              </a>
              <div class="mt-1 relative z-10">
                <p class="text-gray-600 text-sm leading-relaxed mb-5 pl-3 border-l-2 border-emerald-200 line-clamp-2 after:content-['...']">
                  Desa Digital mengadakan pelatihan digital marketing bagi pelaku UMKM untuk meningkatkan pemasaran produk secara online. Pelatihan ini diikuti oleh 25 pelaku UMKM dari berbagai bidang usaha.
                </p>
              </div>
              <div class="mt-auto pt-4 border-t border-dashed border-gray-200 flex justify-between items-center relative z-10">
                <div class="flex items-center text-sm text-gray-500">
                  <i class="fas fa-user text-emerald-500 mr-2"></i>
                  Admin
                </div>
                <a class='inline-flex items-center bg-emerald-50 hover:bg-emerald-100 text-emerald-600 font-medium text-sm rounded-full px-4 py-1.5 transition-colors duration-300 group/detail hover:text-emerald-700' href='berita-detail.html'>
                  <span class="relative">
                    <span class="absolute bottom-0 h-0.5 w-full scale-x-0 origin-left bg-emerald-600 transition-transform duration-300 group-hover/detail:scale-x-100"></span>
                    Lihat detail
                  </span>
                  <svg class="ml-1.5 w-4 h-4 transform transition-transform duration-300 group-hover/detail:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Berita 4 -->
        <div class="swiper-slide p-3">
          <div class="group bg-white rounded-2xl shadow-sm overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-lg relative border border-gray-100">
            <div class="relative aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105"
                   src="{{ asset('assets') }}/src/images/berita/4.webp"
                   alt="Musyawarah Desa"
                   loading="lazy">
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6 flex flex-col flex-grow relative bg-gray-50">
              <div class="flex items-center justify-between mb-4 relative z-10">
                <div class="flex items-center">
                  <div class="flex flex-col items-center mr-3 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-lg shadow-sm overflow-hidden border border-emerald-100 transition-all duration-300 group-hover:shadow-md">
                    <div class="bg-emerald-500 text-white text-xs font-bold w-full text-center py-0.5 px-2">
                      Apr
                    </div>
                    <div class="text-emerald-700 text-base font-bold py-0.5 px-3">
                      05
                    </div>
                  </div>
                  <div class="flex flex-col text-xs">
                    <span class="text-gray-500 font-medium">
                      2023
                    </span>
                    <span class="text-gray-400">
                      Rabu
                    </span>
                  </div>
                </div>
                <span class="inline-flex items-center px-2.5 py-1.5 rounded-md text-xs font-medium text-white bg-purple-500 border-purple-600 shadow-md border-l-4">
                  <i class="fas fa-users mr-1"></i>
                  Musyawarah
                </span>
              </div>
              <a class='block group relative z-10' href='berita-detail.html'>
                <div class="relative h-0.5 w-12 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full mb-3 transition-all duration-300 group-hover:w-24"></div>
                <h3 class="text-xl font-bold text-gray-900 leading-tight mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors">
                  Rapat Musyawarah Pembangunan Desa 2023
                </h3>
              </a>
              <div class="mt-1 relative z-10">
                <p class="text-gray-600 text-sm leading-relaxed mb-5 pl-3 border-l-2 border-emerald-200 line-clamp-2 after:content-['...']">
                  Musyawarah pembangunan desa tahun 2023 telah dilaksanakan dengan dihadiri oleh perangkat desa dan perwakilan warga. Rapat ini membahas rencana pembangunan desa untuk satu tahun ke depan.
                </p>
              </div>
              <div class="mt-auto pt-4 border-t border-dashed border-gray-200 flex justify-between items-center relative z-10">
                <div class="flex items-center text-sm text-gray-500">
                  <i class="fas fa-user text-emerald-500 mr-2"></i>
                  Admin
                </div>
                <a class='inline-flex items-center bg-emerald-50 hover:bg-emerald-100 text-emerald-600 font-medium text-sm rounded-full px-4 py-1.5 transition-colors duration-300 group/detail hover:text-emerald-700' href='berita-detail.html'>
                  <span class="relative">
                    <span class="absolute bottom-0 h-0.5 w-full scale-x-0 origin-left bg-emerald-600 transition-transform duration-300 group-hover/detail:scale-x-100"></span>
                    Lihat detail
                  </span>
                  <svg class="ml-1.5 w-4 h-4 transform transition-transform duration-300 group-hover/detail:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Berita 5 -->
        <div class="swiper-slide p-3">
          <div class="group bg-white rounded-2xl shadow-sm overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-lg relative border border-gray-100">
            <div class="relative aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105"
                   src="{{ asset('assets') }}/src/images/berita/5.webp"
                   alt="Vaksinasi Covid"
                   loading="lazy">
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6 flex flex-col flex-grow relative bg-gray-50">
              <div class="flex items-center justify-between mb-4 relative z-10">
                <div class="flex items-center">
                  <div class="flex flex-col items-center mr-3 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-lg shadow-sm overflow-hidden border border-emerald-100 transition-all duration-300 group-hover:shadow-md">
                    <div class="bg-emerald-500 text-white text-xs font-bold w-full text-center py-0.5 px-2">
                      Mei
                    </div>
                    <div class="text-emerald-700 text-base font-bold py-0.5 px-3">
                      12
                    </div>
                  </div>
                  <div class="flex flex-col text-xs">
                    <span class="text-gray-500 font-medium">
                      2023
                    </span>
                    <span class="text-gray-400">
                      Jumat
                    </span>
                  </div>
                </div>
                <span class="inline-flex items-center px-2.5 py-1.5 rounded-md text-xs font-medium text-white bg-red-500 border-red-600 shadow-md border-l-4">
                  <i class="fas fa-heartbeat mr-1"></i>
                  Kesehatan
                </span>
              </div>
              <a class='block group relative z-10' href='berita-detail.html'>
                <div class="relative h-0.5 w-12 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full mb-3 transition-all duration-300 group-hover:w-24"></div>
                <h3 class="text-xl font-bold text-gray-900 leading-tight mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors">
                  Program Vaksinasi Booster di Balai Desa
                </h3>
              </a>
              <div class="mt-1 relative z-10">
                <p class="text-gray-600 text-sm leading-relaxed mb-5 pl-3 border-l-2 border-emerald-200 line-clamp-2 after:content-['...']">
                  Program vaksinasi booster Covid-19 dilaksanakan di Balai Desa Digital. Kegiatan ini diikuti oleh ratusan warga desa dan berlangsung lancar berkat kerjasama antara pemerintah desa dan puskesmas.
                </p>
              </div>
              <div class="mt-auto pt-4 border-t border-dashed border-gray-200 flex justify-between items-center relative z-10">
                <div class="flex items-center text-sm text-gray-500">
                  <i class="fas fa-user text-emerald-500 mr-2"></i>
                  Admin
                </div>
                <a class='inline-flex items-center bg-emerald-50 hover:bg-emerald-100 text-emerald-600 font-medium text-sm rounded-full px-4 py-1.5 transition-colors duration-300 group/detail hover:text-emerald-700' href='berita-detail.html'>
                  <span>Baca selengkapnya</span>
                  <svg class="ml-1.5 w-4 h-4 transform transition-transform duration-300 group-hover/detail:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Berita 6 -->
        <div class="swiper-slide p-3">
          <div class="group bg-white rounded-2xl shadow-sm overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-lg relative border border-gray-100">
            <div class="relative aspect-w-16 aspect-h-9 overflow-hidden">
              <img class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105"
                   src="{{ asset('assets') }}/src/images/berita/6.webp"
                   alt="Lomba 17 Agustus"
                   loading="lazy">
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6 flex flex-col flex-grow relative bg-gray-50">
              <div class="flex items-center justify-between mb-4 relative z-10">
                <div class="flex items-center">
                  <div class="flex flex-col items-center mr-3 bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-lg shadow-sm overflow-hidden border border-emerald-100 transition-all duration-300 group-hover:shadow-md">
                    <div class="bg-emerald-500 text-white text-xs font-bold w-full text-center py-0.5 px-2">
                      Agu
                    </div>
                    <div class="text-emerald-700 text-base font-bold py-0.5 px-3">
                      17
                    </div>
                  </div>
                  <div class="flex flex-col text-xs">
                    <span class="text-gray-500 font-medium">
                      2023
                    </span>
                    <span class="text-gray-400">
                      Kamis
                    </span>
                  </div>
                </div>
                <span class="inline-flex items-center px-2.5 py-1.5 rounded-md text-xs font-medium text-white bg-amber-500 border-amber-600 shadow-md border-l-4">
                  <i class="fas fa-flag mr-1"></i>
                  Kegiatan
                </span>
              </div>
              <a class='block group relative z-10' href='berita-detail.html'>
                <div class="relative h-0.5 w-12 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full mb-3 transition-all duration-300 group-hover:w-24"></div>
                <h3 class="text-xl font-bold text-gray-900 leading-tight mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors">
                  Lomba 17 Agustus Meriahkan HUT RI ke-78
                </h3>
              </a>
              <div class="mt-1 relative z-10">
                <p class="text-gray-600 text-sm leading-relaxed mb-5 pl-3 border-l-2 border-emerald-200 line-clamp-2 after:content-['...']">
                  Rangkaian lomba 17 Agustus digelar untuk memeriahkan HUT RI ke-78 di Desa Digital. Berbagai lomba tradisional seperti panjat pinang, balap karung, dan makan kerupuk menyedot perhatian warga.
                </p>
              </div>
              <div class="mt-auto pt-4 border-t border-dashed border-gray-200 flex justify-between items-center relative z-10">
                <div class="flex items-center text-sm text-gray-500">
                  <i class="fas fa-user text-emerald-500 mr-2"></i>
                  Admin
                </div>
                <a class='inline-flex items-center bg-emerald-50 hover:bg-emerald-100 text-emerald-600 font-medium text-sm rounded-full px-4 py-1.5 transition-colors duration-300 group/detail hover:text-emerald-700' href='berita-detail.html'>
                  <span>Baca selengkapnya</span>
                  <svg class="ml-1.5 w-4 h-4 transform transition-transform duration-300 group-hover/detail:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modern Pagination Indicators -->
    <div class="flex justify-center mt-10">
      <div class="swiper-pagination berita-pagination"></div>
    </div>
  </div>
</div>
</section>
<!-- UMKM Unggulan - Modern Slider Layout Matched with Berita Style -->
<section class="py-12 bg-gray-50 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Modern Header - Matched with Berita Style -->
    <div class="mb-0">
      <!-- Title and Button in One Row -->
      <div class="flex items-center justify-between mb-3">
        <!-- Left: Title Badge -->
        <!-- For UMKM Section Header -->
        <div class="flex items-center">
          <div class="h-6 w-1 bg-emerald-500 rounded-full mr-2"></div>
          <span class="bg-emerald-50 px-2.5 py-1 rounded-full text-emerald-800 text-sm font-semibold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
            UMKM DESA
          </span>
        </div>
        <!-- Right: Simplified Button -->
        <a class='flex-shrink-0 inline-flex items-center text-sm font-medium text-emerald-600 border border-emerald-200 rounded-lg px-3 py-1.5 hover:bg-emerald-50 transition-colors' href='umkm.html'>
          <span>Lihat Semua</span>
          <svg class="ml-1.5 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <!-- Description on Full Row -->
      <p class="text-gray-600 text-sm md:text-base w-full">
        Temukan produk dan jasa unggulan dari UMKM lokal desa
      </p>
    </div>
    <!-- Swiper Slider Container -->
    <div class="relative mt-6">
      <!-- Main Swiper -->
      <div class="swiper-container umkm-slider">
        <div class="swiper-wrapper">
          <!-- UMKM 1 -->
          <div class="swiper-slide p-3">
            <!-- Modern Card Design -->
            <div class="group bg-white rounded-2xl shadow-sm overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-lg relative border border-gray-100">
              <!-- Enhanced Image Container with Overlay Gradient - Changed to 16:9 ratio -->
              <div class="relative aspect-w-16 aspect-h-9 overflow-hidden">
                <img class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105"
                     src="{{ asset('assets') }}/src/images/umkm/1.webp"
                     alt="Warung Makan Bu Siti"
                     loading="lazy">
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              </div>
              <!-- Modern Content Area - Updated with White Background and Modern Design -->
              <div class="p-6 flex flex-col flex-grow relative bg-white">
                <!-- Modern Category and Info Row -->
                <div class="flex items-center justify-between mb-4 relative z-10">
                  <!-- Left: Category Badge - Enhanced Design -->
                  <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium
                      text-green-700
                      bg-green-50
                      border border-green-100 shadow-sm">
                    <i class="fas fa-utensils text-green-500 mr-1.5"></i>
                    Kuliner
                  </span>
                  <!-- Right: UMKM Verification Badge -->
                  <div class="flex items-center text-xs font-medium px-2.5 py-1.5 rounded-md border border-blue-100 bg-blue-50 text-blue-700">
                    <svg class="w-4 h-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    Terverifikasi
                  </div>
                </div>
                <!-- Enhanced Title with Modern Typography -->
                <a class='block group relative z-10' href='umkm-detail.html'>
                  <!-- Modern Title Design with Gradient Accent -->
                  <div class="relative h-0.5 w-12 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full mb-3 transition-all duration-300 group-hover:w-24"></div>
                  <h3 class="text-xl font-bold text-gray-900 leading-tight mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors">
                    Warung Makan Bu Siti
                  </h3>
                </a>
                <!-- Modern Description with Premium Typography and 2-line Truncation -->
                <div class="mt-1 relative z-10">
                  <p class="text-gray-600 text-sm leading-relaxed mb-5 pl-3 border-l-2 border-emerald-200 line-clamp-2 after:content-['...']">
                    Menyediakan berbagai menu masakan rumahan dengan cita rasa khas desa. Tersedia paket nasi kotak untuk acara.
                  </p>
                </div>
                <!-- Enhanced Action Buttons with Modern Design - Swapped Positions -->
                <div class="mt-auto pt-4 border-t border-dashed border-gray-200 flex justify-between items-center relative z-10">
                  <!-- WhatsApp Button - Now on Left Side -->
                  <a href="https://wa.me/6287815454498" target="_blank" class="inline-flex items-center bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-medium text-sm rounded-lg px-4 py-2 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5">
                    <i class="fab fa-whatsapp mr-1.5 text-white"></i>
                    <span>WhatsApp</span>
                  </a>
                  <!-- Detailed Link - Now on Right Side -->
                  <a class='inline-flex items-center text-emerald-600 font-medium text-sm transition-colors duration-300 group/detail hover:text-emerald-700' href='umkm-detail.html'>
                    <span class="relative">
                      <span class="absolute bottom-0 h-0.5 w-full scale-x-0 origin-left bg-emerald-600 transition-transform duration-300 group-hover/detail:scale-x-100"></span>
                      Lihat detail
                    </span>
                    <svg class="ml-1.5 w-4 h-4 transform transition-transform duration-300 group-hover/detail:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- UMKM 2 -->
          <div class="swiper-slide p-3">
            <!-- Modern Card Design -->
            <div class="group bg-white rounded-2xl shadow-sm overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-lg relative border border-gray-100">
              <!-- Enhanced Image Container with Overlay Gradient - Changed to 16:9 ratio -->
              <div class="relative aspect-w-16 aspect-h-9 overflow-hidden">
                <img class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105"
                     src="{{ asset('assets') }}/src/images/umkm/2.webp"
                     alt="Kerajinan Bambu Pak Hadi"
                     loading="lazy">
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              </div>
              <!-- Modern Content Area - Updated with White Background and Modern Design -->
              <div class="p-6 flex flex-col flex-grow relative bg-white">
                <!-- Modern Category and Info Row -->
                <div class="flex items-center justify-between mb-4 relative z-10">
                  <!-- Left: Category Badge - Enhanced Design -->
                  <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium
                      text-blue-700
                      bg-blue-50
                      border border-blue-100 shadow-sm">
                    <i class="fas fa-hands text-blue-500 mr-1.5"></i>
                    Kerajinan
                  </span>
                  <!-- Right: UMKM Verification Badge -->
                  <div class="flex items-center text-xs font-medium px-2.5 py-1.5 rounded-md border border-blue-100 bg-blue-50 text-blue-700">
                    <svg class="w-4 h-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    Terverifikasi
                  </div>
                </div>
                <!-- Enhanced Title with Modern Typography -->
                <a class='block group relative z-10' href='umkm-detail.html'>
                  <!-- Modern Title Design with Gradient Accent -->
                  <div class="relative h-0.5 w-12 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full mb-3 transition-all duration-300 group-hover:w-24"></div>
                  <h3 class="text-xl font-bold text-gray-900 leading-tight mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors">
                    Kerajinan Bambu Pak Hadi
                  </h3>
                </a>
                <!-- Modern Description with Premium Typography and 2-line Truncation -->
                <div class="mt-1 relative z-10">
                  <p class="text-gray-600 text-sm leading-relaxed mb-5 pl-3 border-l-2 border-emerald-200 line-clamp-2 after:content-['...']">
                    Berbagai kerajinan berbahan bambu seperti anyaman, perabot rumah tangga, dan hiasan dinding dengan kualitas ekspor.
                  </p>
                </div>
                <!-- Enhanced Action Buttons with Modern Design - Swapped Positions -->
                <div class="mt-auto pt-4 border-t border-dashed border-gray-200 flex justify-between items-center relative z-10">
                  <!-- WhatsApp Button - Now on Left Side -->
                  <a href="https://wa.me/6287815454498" target="_blank" class="inline-flex items-center bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-medium text-sm rounded-lg px-4 py-2 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5">
                    <i class="fab fa-whatsapp mr-1.5 text-white"></i>
                    <span>WhatsApp</span>
                  </a>
                  <!-- Detailed Link - Now on Right Side -->
                  <a class='inline-flex items-center text-emerald-600 font-medium text-sm transition-colors duration-300 group/detail hover:text-emerald-700' href='umkm-detail.html'>
                    <span class="relative">
                      <span class="absolute bottom-0 h-0.5 w-full scale-x-0 origin-left bg-emerald-600 transition-transform duration-300 group-hover/detail:scale-x-100"></span>
                      Lihat detail
                    </span>
                    <svg class="ml-1.5 w-4 h-4 transform transition-transform duration-300 group-hover/detail:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- UMKM 3 -->
          <div class="swiper-slide p-3">
            <!-- Modern Card Design -->
            <div class="group bg-white rounded-2xl shadow-sm overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-lg relative border border-gray-100">
              <!-- Enhanced Image Container with Overlay Gradient - Changed to 16:9 ratio -->
              <div class="relative aspect-w-16 aspect-h-9 overflow-hidden">
                <img class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105"
                     src="{{ asset('assets') }}/src/images/umkm/3.webp"
                     alt="Warung Makan Bu Siti"
                     loading="lazy">
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              </div>
              <!-- Modern Content Area - Updated with White Background and Modern Design -->
              <div class="p-6 flex flex-col flex-grow relative bg-white">
                <!-- Modern Category and Info Row -->
                <div class="flex items-center justify-between mb-4 relative z-10">
                  <!-- Left: Category Badge - Enhanced Design -->
                  <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium
                      text-yellow-700
                      bg-yellow-50
                      border border-yellow-100 shadow-sm">
                    <i class="fas fa-utensils text-yellow-500 mr-1.5"></i>
                    Kuliner
                  </span>
                  <!-- Right: UMKM Verification Badge -->
                  <div class="flex items-center text-xs font-medium px-2.5 py-1.5 rounded-md border border-blue-100 bg-blue-50 text-blue-700">
                    <svg class="w-4 h-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    Terverifikasi
                  </div>
                </div>
                <!-- Enhanced Title with Modern Typography -->
                <a class='block group relative z-10' href='umkm-detail.html'>
                  <!-- Modern Title Design with Gradient Accent -->
                  <div class="relative h-0.5 w-12 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full mb-3 transition-all duration-300 group-hover:w-24"></div>
                  <h3 class="text-xl font-bold text-gray-900 leading-tight mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors">
                    Warung Makan Bu Siti
                  </h3>
                </a>
                <!-- Modern Description with Premium Typography and 2-line Truncation -->
                <div class="mt-1 relative z-10">
                  <p class="text-gray-600 text-sm leading-relaxed mb-5 pl-3 border-l-2 border-emerald-200 line-clamp-2 after:content-['...']">
                    Menyediakan berbagai menu masakan rumahan dengan cita rasa khas desa. Tersedia paket nasi kotak untuk acara.
                  </p>
                </div>
                <!-- Enhanced Action Buttons with Modern Design - Swapped Positions -->
                <div class="mt-auto pt-4 border-t border-dashed border-gray-200 flex justify-between items-center relative z-10">
                  <!-- WhatsApp Button - Now on Left Side -->
                  <a href="https://wa.me/6287815454498" target="_blank" class="inline-flex items-center bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-medium text-sm rounded-lg px-4 py-2 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5">
                    <i class="fab fa-whatsapp mr-1.5 text-white"></i>
                    <span>WhatsApp</span>
                  </a>
                  <!-- Detailed Link - Now on Right Side -->
                  <a class='inline-flex items-center text-emerald-600 font-medium text-sm transition-colors duration-300 group/detail hover:text-emerald-700' href='umkm-detail.html'>
                    <span class="relative">
                      <span class="absolute bottom-0 h-0.5 w-full scale-x-0 origin-left bg-emerald-600 transition-transform duration-300 group-hover/detail:scale-x-100"></span>
                      Lihat detail
                    </span>
                    <svg class="ml-1.5 w-4 h-4 transform transition-transform duration-300 group-hover/detail:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- UMKM 4 -->
          <div class="swiper-slide p-3">
            <!-- Modern Card Design -->
            <div class="group bg-white rounded-2xl shadow-sm overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-lg relative border border-gray-100">
              <!-- Enhanced Image Container with Overlay Gradient - Changed to 16:9 ratio -->
              <div class="relative aspect-w-16 aspect-h-9 overflow-hidden">
                <img class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105"
                     src="{{ asset('assets') }}/src/images/umkm/4.webp"
                     alt="Warung Makan Bu Siti"
                     loading="lazy">
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              </div>
              <!-- Modern Content Area - Updated with White Background and Modern Design -->
              <div class="p-6 flex flex-col flex-grow relative bg-white">
                <!-- Modern Category and Info Row -->
                <div class="flex items-center justify-between mb-4 relative z-10">
                  <!-- Left: Category Badge - Enhanced Design -->
                  <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium
                      text-pink-700
                      bg-pink-50
                      border border-pink-100 shadow-sm">
                    <i class="fas fa-utensils text-pink-500 mr-1.5"></i>
                    Kuliner
                  </span>
                  <!-- Right: UMKM Verification Badge -->
                  <div class="flex items-center text-xs font-medium px-2.5 py-1.5 rounded-md border border-blue-100 bg-blue-50 text-blue-700">
                    <svg class="w-4 h-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    Terverifikasi
                  </div>
                </div>
                <!-- Enhanced Title with Modern Typography -->
                <a class='block group relative z-10' href='umkm-detail.html'>
                  <!-- Modern Title Design with Gradient Accent -->
                  <div class="relative h-0.5 w-12 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full mb-3 transition-all duration-300 group-hover:w-24"></div>
                  <h3 class="text-xl font-bold text-gray-900 leading-tight mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors">
                    Warung Makan Bu Siti
                  </h3>
                </a>
                <!-- Modern Description with Premium Typography and 2-line Truncation -->
                <div class="mt-1 relative z-10">
                  <p class="text-gray-600 text-sm leading-relaxed mb-5 pl-3 border-l-2 border-emerald-200 line-clamp-2 after:content-['...']">
                    Menyediakan berbagai menu masakan rumahan dengan cita rasa khas desa. Tersedia paket nasi kotak untuk acara.
                  </p>
                </div>
                <!-- Enhanced Action Buttons with Modern Design - Swapped Positions -->
                <div class="mt-auto pt-4 border-t border-dashed border-gray-200 flex justify-between items-center relative z-10">
                  <!-- WhatsApp Button - Now on Left Side -->
                  <a href="https://wa.me/6287815454498" target="_blank" class="inline-flex items-center bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-medium text-sm rounded-lg px-4 py-2 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5">
                    <i class="fab fa-whatsapp mr-1.5 text-white"></i>
                    <span>WhatsApp</span>
                  </a>
                  <!-- Detailed Link - Now on Right Side -->
                  <a class='inline-flex items-center text-emerald-600 font-medium text-sm transition-colors duration-300 group/detail hover:text-emerald-700' href='umkm-detail.html'>
                    <span class="relative">
                      <span class="absolute bottom-0 h-0.5 w-full scale-x-0 origin-left bg-emerald-600 transition-transform duration-300 group-hover/detail:scale-x-100"></span>
                      Lihat detail
                    </span>
                    <svg class="ml-1.5 w-4 h-4 transform transition-transform duration-300 group-hover/detail:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- UMKM 5 -->
          <div class="swiper-slide p-3">
            <!-- Modern Card Design -->
            <div class="group bg-white rounded-2xl shadow-sm overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-lg relative border border-gray-100">
              <!-- Enhanced Image Container with Overlay Gradient - Changed to 16:9 ratio -->
              <div class="relative aspect-w-16 aspect-h-9 overflow-hidden">
                <img class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105"
                     src="{{ asset('assets') }}/src/images/umkm/5.webp"
                     alt="Warung Makan Bu Siti"
                     loading="lazy">
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              </div>
              <!-- Modern Content Area - Updated with White Background and Modern Design -->
              <div class="p-6 flex flex-col flex-grow relative bg-white">
                <!-- Modern Category and Info Row -->
                <div class="flex items-center justify-between mb-4 relative z-10">
                  <!-- Left: Category Badge - Enhanced Design -->
                  <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium
                      text-teal-700
                      bg-teal-50
                      border border-teal-100 shadow-sm">
                    <i class="fas fa-utensils text-teal-500 mr-1.5"></i>
                    Kuliner
                  </span>
                  <!-- Right: UMKM Verification Badge -->
                  <div class="flex items-center text-xs font-medium px-2.5 py-1.5 rounded-md border border-blue-100 bg-blue-50 text-blue-700">
                    <svg class="w-4 h-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    Terverifikasi
                  </div>
                </div>
                <!-- Enhanced Title with Modern Typography -->
                <a class='block group relative z-10' href='umkm-detail.html'>
                  <!-- Modern Title Design with Gradient Accent -->
                  <div class="relative h-0.5 w-12 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full mb-3 transition-all duration-300 group-hover:w-24"></div>
                  <h3 class="text-xl font-bold text-gray-900 leading-tight mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors">
                    Warung Makan Bu Siti
                  </h3>
                </a>
                <!-- Modern Description with Premium Typography and 2-line Truncation -->
                <div class="mt-1 relative z-10">
                  <p class="text-gray-600 text-sm leading-relaxed mb-5 pl-3 border-l-2 border-emerald-200 line-clamp-2 after:content-['...']">
                    Menyediakan berbagai menu masakan rumahan dengan cita rasa khas desa. Tersedia paket nasi kotak untuk acara.
                  </p>
                </div>
                <!-- Enhanced Action Buttons with Modern Design - Swapped Positions -->
                <div class="mt-auto pt-4 border-t border-dashed border-gray-200 flex justify-between items-center relative z-10">
                  <!-- WhatsApp Button - Now on Left Side -->
                  <a href="https://wa.me/6287815454498" target="_blank" class="inline-flex items-center bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-medium text-sm rounded-lg px-4 py-2 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5">
                    <i class="fab fa-whatsapp mr-1.5 text-white"></i>
                    <span>WhatsApp</span>
                  </a>
                  <!-- Detailed Link - Now on Right Side -->
                  <a class='inline-flex items-center text-emerald-600 font-medium text-sm transition-colors duration-300 group/detail hover:text-emerald-700' href='umkm-detail.html'>
                    <span class="relative">
                      <span class="absolute bottom-0 h-0.5 w-full scale-x-0 origin-left bg-emerald-600 transition-transform duration-300 group-hover/detail:scale-x-100"></span>
                      Lihat detail
                    </span>
                    <svg class="ml-1.5 w-4 h-4 transform transition-transform duration-300 group-hover/detail:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- UMKM 6 (Baru) -->
          <div class="swiper-slide p-3">
            <div class="group bg-white rounded-2xl shadow-sm overflow-hidden h-full flex flex-col transition-all duration-300 hover:shadow-lg relative border border-gray-100">
              <div class="relative aspect-w-16 aspect-h-9 overflow-hidden">
                <img class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105"
                      src="{{ asset('assets') }}/src/images/umkm/6.webp"
                      alt="Madu Asli Pak Darmono"
                      loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              </div>
              <div class="p-6 flex flex-col flex-grow relative bg-white">
                <div class="flex items-center justify-between mb-4 relative z-10">
                  <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-medium
                      text-yellow-700
                      bg-yellow-50
                      border border-yellow-100 shadow-sm">
                    <i class="fas fa-wine-bottle text-yellow-500 mr-1.5"></i>
                    Olahan
                  </span>
                  <div class="flex items-center text-xs font-medium px-2.5 py-1.5 rounded-md border border-blue-100 bg-blue-50 text-blue-700">
                    <svg class="w-4 h-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    Terverifikasi
                  </div>
                </div>
                <a class='block group relative z-10' href='umkm-detail.html'>
                  <div class="relative h-0.5 w-12 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full mb-3 transition-all duration-300 group-hover:w-24"></div>
                  <h3 class="text-xl font-bold text-gray-900 leading-tight mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors">
                    Madu Asli Pak Darmono
                  </h3>
                </a>
                <div class="mt-1 relative z-10">
                  <p class="text-gray-600 text-sm leading-relaxed mb-5 pl-3 border-l-2 border-emerald-200 line-clamp-2 after:content-['...']">
                    Menyediakan madu murni hasil ternak lebah lokal. Tersedia berbagai jenis madu seperti madu kelengkeng, madu randu, dan madu hutan dengan kualitas premium.
                  </p>
                </div>
                <div class="mt-auto pt-4 border-t border-dashed border-gray-200 flex justify-between items-center relative z-10">
                  <a href="https://wa.me/6287815454498" target="_blank" class="inline-flex items-center bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-medium text-sm rounded-lg px-4 py-2 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5">
                    <i class="fab fa-whatsapp mr-1.5 text-white"></i>
                    <span>WhatsApp</span>
                  </a>
                  <a class='inline-flex items-center text-emerald-600 font-medium text-sm transition-colors duration-300 group/detail hover:text-emerald-700' href='umkm-detail.html'>
                    <span class="relative">
                      <span class="absolute bottom-0 h-0.5 w-full scale-x-0 origin-left bg-emerald-600 transition-transform duration-300 group-hover/detail:scale-x-100"></span>
                      Lihat detail
                    </span>
                    <svg class="ml-1.5 w-4 h-4 transform transition-transform duration-300 group-hover/detail:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modern Pagination Indicators -->
      <div class="flex justify-center mt-10">
        <div class="swiper-pagination umkm-pagination"></div>
      </div>
    </div>
  </div>
</section>
<!-- Modern CTA Section (Simplified) -->
<section class="pt-12 pb-20 bg-gradient-to-br from-emerald-600 to-emerald-900 relative overflow-hidden">
  <!-- Subtle Background Element (Single) -->
  <div class="absolute bottom-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full translate-x-1/3 translate-y-1/3"></div>
  <!-- Content Container -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center">
      <!-- Badge -->
      <div class="relative inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-emerald-600/30 to-emerald-700/30 backdrop-blur-lg border border-white/30 shadow-xl group overflow-hidden" data-aos="fade-down">
        <!-- Moving Light Effect -->
        <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-all duration-1000 ease-in-out"></span>
        <!-- Badge Content -->
        <div class="relative z-10 flex items-center">
          <div class="w-2 h-2 bg-emerald-400 rounded-full mr-2.5 animate-pulse"></div>
          <span class="text-white font-semibold text-sm tracking-wider flex items-center">
            DESA DIGITAL
          </span>
        </div>
      </div>
      <!-- Title -->
      <h2 class="mt-3 text-2xl md:text-3xl font-bold text-white">
        Ingin tahu lebih banyak tentang desa kami?
      </h2>
      <!-- Description - Fixed to prevent double "Desa" -->
      <p class="mt-3 text-sm md:text-base text-emerald-50 max-w-3xl mx-auto">
        Temukan informasi lengkap tentang Desa Digital dan layanan yang tersedia
      </p>
      <!-- Buttons -->
      <div class="mt-8 flex flex-col px-12 sm:flex-row gap-4 justify-center">
        <a class='inline-flex items-center justify-center px-3 py-3 text-base font-medium rounded-lg bg-white text-emerald-700 hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300' href='layanan.html'>
          <i class="fas fa-file-alt mr-2"></i> Lihat Layanan Desa
        </a>
        <a class='inline-flex items-center justify-center px-3 py-3 text-base font-medium rounded-lg bg-emerald-500 text-white hover:bg-emerald-600 shadow-lg hover:shadow-xl transition-all duration-300' href='profile.html'>
          <i class="fas fa-info-circle mr-2"></i> Tentang Desa Kami
        </a>
      </div>
    </div>
  </div>
  <!-- Bottom Wave -->
  <div class="absolute bottom-0 left-0 right-0 w-full overflow-hidden" style="height: 60px">
    <svg class="absolute bottom-0 w-full h-full" viewBox="0 0 1440 120" preserveAspectRatio="none" fill="white">
      <path d="M0,96L60,85.3C120,75,240,53,360,48C480,43,600,53,720,69.3C840,85,960,107,1080,101.3C1200,96,1320,64,1380,48L1440,32L1440,120L1380,120C1320,120,1200,120,1080,120C960,120,840,120,720,120C600,120,480,120,360,120C240,120,120,120,60,120L0,120Z"></path>
    </svg>
  </div>
</section>
<!-- Modern Maps & Contact Section with Enhanced Layout -->
<section class="py-12 bg-white relative overflow-hidden">
  <!-- Background Decorative Elements (Improved) -->
  <div class="absolute top-0 right-0 w-1/2 h-1/2 bg-gradient-to-br from-emerald-50 to-emerald-100/20 rounded-full opacity-60 blur-3xl -z-10 transform translate-x-1/4 -translate-y-1/4"></div>
  <div class="absolute bottom-0 left-0 w-1/2 h-1/2 bg-gradient-to-tr from-blue-50 to-blue-100/20 rounded-full opacity-60 blur-3xl -z-10 transform -translate-x-1/4 translate-y-1/4"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Simplified Modern Header - Matches Statistics Section with added paragraph text -->
    <div class="text-center mb-8" data-aos="fade-up">
      <div class="inline-flex items-center bg-emerald-50 px-4 py-2 rounded-full">
        <div class="w-2 h-2 bg-emerald-500 rounded-full mr-2"></div>
        <h2 class="text-emerald-800 text-sm font-semibold tracking-wide uppercase">Lokasi & Kontak</h2>
      </div>
      <!-- Added paragraph text -->
      <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
        Temukan lokasi dan informasi kontak Desa Digital
      </p>
    </div>
    <!-- Modern Layout Structure -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
      <!-- Left: Map Section (7 columns on desktop) -->
      <div class="lg:col-span-7 order-2 lg:order-1">
        <!-- Map Container with Fixed Height -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-100" data-aos="fade-right">
          <!-- Alamat Card - Improved one-line format -->
          <div class="bg-gray-50 p-5 border-b border-gray-100 relative z-10">
            <div class="flex items-center">
              <div class="flex-shrink-0 mr-4">
                <div class="w-12 h-12 rounded-lg bg-emerald-500 flex items-center justify-center shadow-md">
                  <i class="fas fa-map-marker-alt text-white text-lg"></i>
                </div>
              </div>
              <div>
                <h3 class="text-lg font-semibold text-gray-900">Alamat Kantor Desa</h3>
                <p class="text-gray-700 mt-1 text-sm leading-relaxed">
                  Jl. Desa Digital No. 123, Kecamatan Contoh, Kabupaten Contoh, Provinsi Contoh 12345
                </p>
              </div>
            </div>
          </div>
          <!-- Map with Loading State and Fixed Height -->
          <div class="relative">
            <!-- Loading Indicator -->
            <div class="absolute inset-0 bg-gray-100 flex items-center justify-center z-10 map-loader">
              <div class="flex flex-col items-center">
                <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-emerald-500 mb-2"></div>
                <p class="text-sm text-gray-500">Memuat peta...</p>
              </div>
            </div>
            <!-- Fixed height map container -->
            <div class="h-[450px]">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4157608731784!2d106.8532!3d-6.6003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d2f9f02917%3A0xfa0651b318f198a2!2sDesa+Digital!5e0!3m2!1sen!2sid!4v1690447353417!5m2!1sen!2sid"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                onload="this.parentNode.querySelector('.map-loader') && (this.parentNode.querySelector('.map-loader').style.display = 'none')">
              </iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- Right: Contact Cards (5 columns on desktop) -->
      <div class="lg:col-span-5 order-1 lg:order-2 flex flex-col gap-5" data-aos="fade-left">
        <!-- Phone Contact Card - Updated background -->
        <div class="bg-gray-50 p-6 rounded-2xl shadow-lg transition-all duration-300 hover:shadow-xl border border-gray-100 hover:border-blue-200 group">
          <div class="flex items-start">
            <div class="flex-shrink-0 mr-5">
              <div class="w-14 h-14 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-phone text-white text-xl"></i>
              </div>
            </div>
            <div>
              <h4 class="text-lg font-semibold text-gray-900 group-hover:text-blue-700 transition-colors">Telepon</h4>
              <p class="text-gray-600 mt-3 group-hover:text-gray-700 transition-colors">
                <a href="tel:+6287815454498" class="hover:text-blue-600 transition-colors flex items-center">
                  <span>+62 878 1545 4498</span>
                  <span class="ml-2 text-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                    <i class="fas fa-arrow-right text-xs"></i>
                  </span>
                </a>
              </p>
              <div class="mt-4 pt-4 border-t border-gray-200">
                <p class="text-sm text-gray-500">
                  Hubungi kami untuk informasi lebih lanjut tentang desa dan pelayanan yang tersedia.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Email Contact Card - Updated background -->
        <div class="bg-gray-50 p-6 rounded-2xl shadow-lg transition-all duration-300 hover:shadow-xl border border-gray-100 hover:border-purple-200 group">
          <div class="flex items-start">
            <div class="flex-shrink-0 mr-5">
              <div class="w-14 h-14 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-envelope text-white text-xl"></i>
              </div>
            </div>
            <div>
              <h4 class="text-lg font-semibold text-gray-900 group-hover:text-purple-700 transition-colors">Email</h4>
              <p class="text-gray-600 mt-3 group-hover:text-gray-700 transition-colors">
                <a href="mailto:cepatberes2024@gmail.com" class="hover:text-purple-600 transition-colors flex items-center">
                  <span class="break-all">cepatberes2024@gmail.com</span>
                  <span class="ml-2 text-purple-500 opacity-0 group-hover:opacity-100 transition-opacity">
                    <i class="fas fa-arrow-right text-xs"></i>
                  </span>
                </a>
              </p>
              <div class="mt-4 pt-4 border-t border-gray-200">
                <p class="text-sm text-gray-500">
                  Kirim email untuk pertanyaan, saran, atau keperluan administrasi desa.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Website Contact Card - Updated background -->
        <div class="bg-gray-50 p-6 rounded-2xl shadow-lg transition-all duration-300 hover:shadow-xl border border-gray-100 hover:border-amber-200 group">
          <div class="flex items-start">
            <div class="flex-shrink-0 mr-5">
              <div class="w-14 h-14 rounded-full bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-globe text-white text-xl"></i>
              </div>
            </div>
            <div>
              <h4 class="text-lg font-semibold text-gray-900 group-hover:text-amber-700 transition-colors">Website</h4>
              <p class="text-gray-600 mt-3 group-hover:text-gray-700 transition-colors">
                <a href="https://dmpt.my.id/" target="_blank" class="hover:text-amber-600 transition-colors flex items-center">
                  <span class="break-all">www.dmpt.my.id</span>
                  <span class="ml-2 text-amber-500 opacity-0 group-hover:opacity-100 transition-opacity">
                    <i class="fas fa-external-link-alt text-xs"></i>
                  </span>
                </a>
              </p>
              <div class="mt-4 pt-4 border-t border-gray-200">
                <p class="text-sm text-gray-500">
                  Kunjungi website kami untuk informasi lebih lengkap dan layanan online desa.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Enhanced Footer -->
<footer class="bg-gradient-to-b from-gray-50 to-gray-100 border-t border-gray-200">
    <!-- Back to top button -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <button id="back-to-top" class="absolute -top-5 right-8 bg-emerald-500 hover:bg-emerald-600 text-white rounded-full p-3 shadow-lg transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-emerald-400 opacity-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>
    </div>
    <!-- Main footer content -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Kolom 1: Tentang Desa (larger size) -->
            <div class="md:col-span-1 lg:col-span-1">
                <h3 class="text-sm font-semibold text-gray-600 tracking-wider uppercase relative inline-block after:absolute after:w-1/2 after:h-0.5 after:bg-emerald-500 after:bottom-0 after:left-0 pb-1">
                    Tentang Desa
                </h3>
                <div class="mt-5">
                    <img src="{{ asset('assets') }}/src/images/logo-desa.jpg"
                         alt="Desa Digital"
                         class="h-16 w-auto mb-4 object-contain">
                    <p class="text-lg text-gray-700 font-medium mb-2">
                        Desa Digital
                    </p>
                    <p class="mt-3 text-sm text-gray-500 flex items-center group">
                        <span class="flex items-center justify-center bg-emerald-100 text-emerald-500 h-8 w-8 rounded-full mr-3 group-hover:bg-emerald-500 group-hover:text-white transition duration-300">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <span class="group-hover:text-emerald-600 transition duration-300">+62 878 1545 4498</span>
                    </p>
                    <p class="mt-2 text-sm text-gray-500 flex items-center group">
                        <span class="flex items-center justify-center bg-emerald-100 text-emerald-500 h-8 w-8 rounded-full mr-3 group-hover:bg-emerald-500 group-hover:text-white transition duration-300">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="group-hover:text-emerald-600 transition duration-300">cepatberes2024@gmail.com</span>
                    </p>
                </div>
            </div>
            <!-- Kolom 2: Link Cepat -->
            <div>
                <h3 class="text-sm font-semibold text-gray-600 tracking-wider uppercase relative inline-block after:absolute after:w-1/2 after:h-0.5 after:bg-emerald-500 after:bottom-0 after:left-0 pb-1">
                    Akses Cepat
                </h3>
                <ul class="mt-5 space-y-3">
                    <li>
                        <a class='text-base text-gray-600 hover:text-emerald-600 flex items-center transition duration-300 group' href='index.html'>
                            <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 group-hover:w-3 transition-all duration-300"></span>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a class='text-base text-gray-600 hover:text-emerald-600 flex items-center transition duration-300 group' href='profile.html'>
                            <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 group-hover:w-3 transition-all duration-300"></span>
                            Profil Desa
                        </a>
                    </li>
                    <li>
                        <a class='text-base text-gray-600 hover:text-emerald-600 flex items-center transition duration-300 group' href='berita.html'>
                            <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 group-hover:w-3 transition-all duration-300"></span>
                            Berita
                        </a>
                    </li>
                    <li>
                        <a class='text-base text-gray-600 hover:text-emerald-600 flex items-center transition duration-300 group' href='umkm.html'>
                            <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 group-hover:w-3 transition-all duration-300"></span>
                            UMKM
                        </a>
                    </li>
                    <li>
                        <a class='text-base text-gray-600 hover:text-emerald-600 flex items-center transition duration-300 group' href='statistik.html'>
                            <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 group-hover:w-3 transition-all duration-300"></span>
                            Statistik Desa
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Kolom 3: Layanan (5 daftar layanan) -->
            <div>
                <h3 class="text-sm font-semibold text-gray-600 tracking-wider uppercase relative inline-block after:absolute after:w-1/2 after:h-0.5 after:bg-emerald-500 after:bottom-0 after:left-0 pb-1">
                    Layanan Desa
                </h3>
                <ul class="mt-5 space-y-3">
                    <li>
                        <a class='text-base text-gray-600 hover:text-emerald-600 flex items-center transition duration-300 group' href='layanan.html'>
                            <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 group-hover:w-3 transition-all duration-300"></span>
                            Administrasi Desa
                        </a>
                    </li>
                    <li>
                        <a href="pengaduan.html" class="text-base text-gray-600 hover:text-emerald-600 flex items-center transition duration-300 group">
                            <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 group-hover:w-3 transition-all duration-300"></span>
                            Pengaduan Warga
                        </a>
                    </li>
                    <li>
                        <a href="bantuan.html" class="text-base text-gray-600 hover:text-emerald-600 flex items-center transition duration-300 group">
                            <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 group-hover:w-3 transition-all duration-300"></span>
                            Cek Bantuan Sosial
                        </a>
                    </li>
                    <li>
                        <a href="layanan-publik.html" class="text-base text-gray-600 hover:text-emerald-600 flex items-center transition duration-300 group">
                            <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 group-hover:w-3 transition-all duration-300"></span>
                            Pelayanan Publik
                        </a>
                    </li>
                    <li>
                        <a href="dokumen.html" class="text-base text-gray-600 hover:text-emerald-600 flex items-center transition duration-300 group">
                            <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 group-hover:w-3 transition-all duration-300"></span>
                            Permohonan Dokumen
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Updated Copyright section -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <div class="flex flex-col md:flex-row md:justify-between items-center">
                <p class="text-sm text-gray-500 mb-4 md:mb-0">
                    &copy; 2025 Desa Digital. Hak Cipta Dilindungi.
                </p>
                <!-- Social Media Icons -->
                <div class="flex space-x-4" x-data>
                    <a href="#" @click.prevent="alert('Sedang pengembangan')" class="text-gray-400 hover:text-emerald-500 transition-colors">
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-emerald-500 transition-colors">
                        <i class="fab fa-twitter text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-emerald-500 transition-colors">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-emerald-500 transition-colors">
                        <i class="fab fa-youtube text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- js - PRESERVED AS REQUESTED -->
<script src="{{ asset('assets/npm/alpinejs-3.13.1/dist/cdn.min.js') }}" defer></script>
<script src="{{ asset('assets/npm/swiper-10/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/src/js/main.js') }}" type="module"></script>
</html>