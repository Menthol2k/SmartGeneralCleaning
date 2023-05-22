<header class="relative">
    <nav class="flex items-center justify-between p-6 lg:px-8 absolute top-0 inset-x-0 z-10 bg-transparent" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-10 w-auto" src="/images/logo.png" alt="">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" id="open-main-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="#despre-noi" class="text-sm text-white font-semibold leading-6 text-gray-900">Despre Noi</a>
        <a href="#servicii" class="text-sm text-white font-semibold leading-6 text-gray-900">Servicii oferite</a>
        <a href="#galerie" class="text-sm text-white font-semibold leading-6 text-gray-900">Galerie Foto</a>
        <a href="#testimoniale" class="text-sm text-white font-semibold leading-6 text-gray-900">Testimoniale și recenzii</a>
        <a href="#contact" class="text-sm text-white font-semibold leading-6 text-gray-900">Contact</a>

      </div>  
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900"></a>
      </div>
    </nav>
    <div class="bg-banner-image bg-cover font-serif bg-center flex flex-col items-center justify-center relative" style="height: 40rem; background-image: url('/images/banner-min.jpg');">
      <div class="text-white font-medium w-10/12 m-auto mt-32 sm:mt-52">
        <h1 class="text-6xl">Smart General Cleaning</h1>
        <h1 class="text-2xl">"Soluția inteligentă pentru curățenie impecabilă"</h1>
        <div>
          <a type="button" href="#contact" class="font-sans cursor-pointer inline-flex items-center gap-x-2 rounded-full bg-white transition-all px-3.5 py-2.5 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-100 mt-4 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600">
            Pagina Contact
          </a>
      </div>
      </div>
      <div class="text-white font-medium absolute bottom-0 mb-4">
        <a href="#despre-noi"><i class="text-4xl opacity-50 fa-solid fa-angles-down animate-bounce"></i></a>
      </div>
    </div>
    
    
    
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden hidden" id="mobile-menu" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-10"></div>
      <div class="fixed w-10/12 float-right inset-y-0 left-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Smart General Cleaning</span>
            <img class="h-8 w-auto" src="/images/logo.png" alt="">
          </a>
          <button type="button" id="close-main-menu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a id="mobile-btn" href="#despre-noi" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Despre Noi</a>
              <a id="mobile-btn1" href="#servicii" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Servicii Oferite</a>
              <a id="mobile-btn2" href="#galerie" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Galerie Foto</a>
              <a id="mobile-btn3" href="#testimoniale" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Testimoniale și recenzii</a>
              <a id="mobile-btn4" href="#contact" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>