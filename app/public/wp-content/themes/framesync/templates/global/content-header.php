<div id="menu-overlay"
     class="fixed inset-0 bg-black opacity-70 hidden z-40"></div>

<header class="fixed top-0 left-0 w-full z-50 bg-white shadow-md py-5">

  <div class="px-6 h-full">
    <nav class="flex items-center justify-between h-full">

      <!-- Logo -->
      <div class="flex items-center h-full z-50">
        <img src="<?php echo get_template_directory_uri() . '/public/km-logo-1.png' ?>"
             class="h-12">
      </div>

      <!-- Mobile Button -->
      <button id="menu-btn" class="lg:hidden text-3xl z-50">
        <i id="menu-icon" class="fa-solid fa-bars"></i>
      </button>

      <!-- Desktop Menu -->
      <ul id="menu"
          class="hidden lg:flex gap-8 font-raleway font-semibold items-center">
        <li><a class="nav-bar" href="#home">Home</a></li>
        <li><a class="nav-bar" href="#about">About</a></li>
        <li><a class="nav-bar" href="#products">Products</a></li>
        <li><a class="nav-bar" href="#shade-card">Shade Card</a></li>
        <li><a class="nav-bar" href="#review">Review</a></li>
        <li><a class="nav-bar" href="#contact">Contact</a></li>
      </ul>

      <!-- Desktop Button -->
      <div class="hidden lg:block">
        <button class="rounded-2xl bg-[#e02b20] text-white px-4 py-2 text-sm">
          <a href="<?php echo get_template_directory_uri() .'/public/catalog.pdf' ?>">View Catalog</a>
        </button>
      </div>

    </nav>
  </div>

  <!-- Mobile Menu -->
  <ul id="mobile-menu"
      class="fixed top-0 left-0 w-full  h-screen bg-white
             lg:hidden flex flex-col px-6 pt-24
             -translate-x-full opacity-0
             transition-all duration-500 ease-in-out
             z-40">

    <li class="menu-item opacity-0 translate-x-10 transition-all duration-700">
      <a href="#home" class="mobile-link border-b font-medium text-black font-raleway hover:text-[#e02b20] py-3 block text-2xl">Home</a>
    </li>

    <li class="menu-item opacity-0 translate-x-10 transition-all duration-700">
      <a href="#about" class="mobile-link border-b font-medium text-black font-raleway hover:text-[#e02b20] py-3 block text-2xl">About</a>
    </li>

    <li class="menu-item opacity-0 translate-x-10 transition-all duration-700">
      <a href="#products" class="mobile-link border-b font-medium text-black font-raleway hover:text-[#e02b20] py-3 block text-2xl">Products</a>
    </li>

    <li class="menu-item opacity-0 translate-x-10 transition-all duration-700">
      <a href="#shade-card" class="mobile-link border-b font-medium text-black font-raleway hover:text-[#e02b20] py-3 block text-2xl">Shade Card</a>
    </li>

    <li class="menu-item opacity-0 translate-x-10 transition-all duration-700">
      <a href="#review" class="mobile-link border-b font-medium text-black font-raleway hover:text-[#e02b20] py-3 block text-2xl">Review</a>
    </li>

    <li class="menu-item opacity-0 translate-x-10 transition-all duration-700">
      <a href="#contact" class="mobile-link border-b font-medium text-black font-raleway hover:text-[#e02b20] py-3 block text-2xl">Contact</a>
    </li>

    <button class="mt-6 rounded-2xl bg-[#e02b20] text-white px-4 py-3 text-2xl w-fit">
      <a href="<?php echo get_template_directory_uri() .'/public/catalog.pdf' ?>">View Catalog</a>
    </button>
  </ul>
</header>

          <i class="fa-solid fa-download text-white"></i> Download Brochure
        </a>