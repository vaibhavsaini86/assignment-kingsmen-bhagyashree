<?php

/**
 * Template part for displaying page content in footer.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package framesync
 */

?>

<footer class="w-full bg-black text-white pt-16">
  <div class="max-w-7xl mx-auto px-6">

    <!-- TOP GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

      <!-- BRAND -->
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/public/km-logo-1.png"
             class="w-[90px] invert mb-4 brightness-0" />

        <p class="text-gray-300 text-sm leading-6">
          Experience True Timber with KINGSMEN. We provide premium timber solutions
          for your construction and design needs.
        </p>

        <!-- SOCIAL -->
        <div class="flex gap-4 mt-5 text-gray-300">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-whatsapp"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-youtube"></i>
          <i class="fa-brands fa-linkedin-in"></i>
        </div>
      </div>

      <!-- QUICK LINKS -->
      <div>
        <h3 class="font-semibold mb-4">Quick Links</h3>
        <ul class="space-y-3 text-gray-300 text-sm">
          <li>› <a href="#about">About Us</a></li>
          <li>› <a href="#products">Our Products</a></li>
          <li>› <a href="#shade-card">Shade Card</a></li>
          <li>› <a href="#reviews">Reviews</a></li>
        </ul>
      </div>

      <!-- OTHER LINKS -->
      <div>
        <h3 class="font-semibold mb-4">Other Links</h3>
        <ul class="space-y-3 text-gray-300 text-sm">
          <li>› <a href="#contact">Contact Us</a></li>
          <li>› <a href="#privacy">Privacy Policy</a></li>
          <li>› <a href="#terms">Terms & Conditions</a></li>
        </ul>
      </div>

      <!-- CONTACT INFO -->
      <div>
        <h3 class="font-semibold mb-4">Contact Info</h3>

        <div class="flex gap-3 mb-4">
          <i class="fa-solid fa-location-dot text-red-500 mt-1"></i>
          <p class="text-gray-300 text-sm leading-6">
            208, D'Souza complex, Paramahansa Yogananda Rd,
            Indiranagar, Bengaluru, 560038
          </p>
        </div>

        <div class="space-y-2 mb-4 text-sm">
          <div class="flex gap-3">
            <i class="fa-solid fa-phone text-red-500"></i>
            <span class="text-gray-300">+91 7349252501</span>
          </div>
          <div class="flex gap-3">
            <i class="fa-solid fa-phone text-red-500"></i>
            <span class="text-gray-300">+91 7349252502</span>
          </div>
          <div class="flex gap-3">
            <i class="fa-solid fa-phone text-red-500"></i>
            <span class="text-gray-300">+91 9148124943</span>
          </div>
        </div>

        <div class="flex gap-3 mb-6 text-sm">
          <i class="fa-solid fa-envelope text-red-500"></i>
          <span class="text-gray-300">krishnaraj@kingsmen.in</span>
        </div>

        <a href="#review"
           class="inline-block bg-white text-red-600 px-5 py-2 rounded-xl text-sm font-semibold">
          Write a review
        </a>
      </div>
    </div>

    <!-- DIVIDER -->
    <div class="border-t border-gray-700 mt-12 pt-6 flex flex-col md:flex-row justify-between text-gray-400 text-sm">
      <p>© 2026 KINGSMEN. All rights reserved.</p>
      <p class="text-white">Website by Sreen Interactiv</span></p>
    </div>

  </div>
</footer>

