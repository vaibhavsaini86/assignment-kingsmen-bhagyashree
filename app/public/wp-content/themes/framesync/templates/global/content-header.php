<?php

/**
 * Template part for displaying page content in header.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package framesync
 */

?>

<header class="w-full bg-white h-auto z-50 shadow-md fixed">
      <div class="px-6 py-4">
        <nav class="flex flex-row items-center justify-between">


              <div class="h-full items-center z-50">
                <img src="<?php echo get_template_directory_uri() . '/dist/public/km-logo-1.png' ?>" class="h-14 w-28">
              </div>

               <button id="menu-btn" class="lg:hidden text-black">
                <i id="menu-icon" class="fa-solid fa-bars text-3xl"></i>
              </button>

              

              <ul id="menu" class="hidden lg:flex flex-row space-x-8 font-raleway font-semibold items-center">
                  <li> <a class="nav-bar" href="#home">Home</a></li>
                  <li> <a class="nav-bar" href="#about">About</a></li>
                  <li> <a class="nav-bar" href="#products">Products</a></li>
                  <li> <a class="nav-bar" href="#shade-card">Shade Card</a></li>
                  <li> <a class="nav-bar" href="#review">Review</a></li>
                  <li> <a class="nav-bar" href="#contact">Contact</a></li>
              </ul>
                
              
              <div class="hidden lg:block">
                  <button class="font-raleway rounded-2xl bg-[#e02b20] text-white text-sm font-semibold p-2">
                    <a href="#contact-us"> View Catalog </a>
                  </button>
              </div>
        </nav> 
      </div>        
<div>
    <ul id="mobile-menu" class=" w-full h-screen md:w-1/2 bg-white top-0 right-0
           lg:hidden flex flex-col px-6 pt-6 translate-x-full opacity-0 transition-all duration-500 ease-in-out z-40">


  <li>
  <a href="#home" class="mobile-link flex items-center gap-3 text-lg border-b py-3">Home
  </a>
</li>

  <li>
  <a href="#about" class="mobile-link flex items-center gap-3 text-lg border-b py-3">
  <span>About</span></a>
</li>

  <li>
  <a href="#products" class="mobile-link flex items-center gap-3 text-lg border-b py-3">
  <span>Products</span></a>
  </li>

  <li>
  <a href="#shade-card" class="mobile-link flex items-center gap-3 text-lg border-b py-3">
  <span>Shade Card</span></a>
  </li>

 <li>
  <a href="#review" class="mobile-link flex items-center gap-3 text-lg border-b py-3">
  <span>Review</span></a>
 </li>

    <li>
  <a href="#contact" class="mobile-link flex items-center gap-3 text-lg border-b py-3">
    <span>Contact</span></a>
  </li>

  <button class="font-raleway rounded-2xl bg-[#e02b20] text-white text-sm font-semibold p-2">
                    <a href="#contact-us"> View Catalog </a>
  </button>
</ul>

 
 </div>
</header>