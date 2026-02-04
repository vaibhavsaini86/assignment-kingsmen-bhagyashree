<!-- <section id="shade-card" class="py-12 bg-[#f3f3f3]">
  <div class="px-4 mx-auto max-w-7xl grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-10 items-center">

    <!-- LEFT TEXT -->
    <!-- <div>
      <h2 class="text-3xl font-bold mb-4">Discover Your Perfect Shade</h2>
      <p class="text-base leading-7">
        Choose from an elevated palette of premium timbers – 
        <span class="text-[#e02b20]">Burmese Teak, Merbau and Sienna Walnut.</span> 
        Each species, handpicked to complement your aesthetic and project requirements.
      </p>
    </div> -->

    <!-- RIGHT SPLIDE SLIDER -->
    <!-- <div class="splide shade-card-splide">
      <div class="splide__track">
        <ul class="splide__list">

          <li class="splide__slide">
        <div class="relative h-[450px]">
          <img src="<?php echo get_template_directory_uri() . '/public/shade-img-1.png' ?>" class="w-full h-full object-cover rounded-3xl">

          <div class="absolute bottom-4 left-4 right-4 bg-white rounded-2xl px-4 py-2 text-center shadow-lg font-semibold">
            Merbau
          </div>
        </div>
      </li>
          

          <li class="splide__slide">
        <div class="relative h-[450px]">
          <img src="<?php echo get_template_directory_uri() . '/public/shade-img-2.png' ?>" class="w-full h-full object-cover rounded-3xl">

          <div class="absolute bottom-4 left-4 right-4 bg-white rounded-2xl px-4 py-2 text-center shadow-lg font-semibold">
            Sienna Walnut
          </div>
        </div>
      </li>

          <li class="splide__slide">
        <div class="relative h-[450px]">
          <img src="<?php echo get_template_directory_uri() . '/public/shade-img-3.png' ?>" class="w-full h-full object-cover rounded-3xl">

          <div class="absolute bottom-4 left-4 right-4 bg-white rounded-2xl px-4 py-2 text-center shadow-lg font-semibold">
            Burmese Teak
          </div>
        </div>
      </li>

        </ul>
      </div>
    </div>

  </div>
</section> -->

<section id="shade-card" class="bg-[#f6f6f6] py-20">
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-8 px-6">
     
    <div class=" lg:w-[30%]">
      <h2 class="text-3xl font-semibold mb-4">
        Discover Your <br class="hidden lg:block"> Perfect Shade
      </h2>

      <p class="text-gray-700 leading-7 max-w-md">
        Choose from an elevated palette of premium timbers –
        <span class="text-[#e02b20] font-medium">
          Burmese Teak, Merbau and Sienna Walnut.
        </span>
        Each species, handpicked to complement your aesthetic and project
        requirements.
      </p>
    </div>

    <!-- RIGHT SLIDER -->
    
  <div class="shade-card-splide splide lg:w-[70%]">
        <div class="splide__track">
          <ul class="splide__list">

            <!-- CARD -->
            <li class="splide__slide">
              <div class="shade-card">
                <img src="<?php echo get_template_directory_uri(); ?>/public/shade-img-1.png" />
                <div class="shade-label">Burmese Teak</div>
              </div>
            </li>

            <li class="splide__slide">
              <div class="shade-card">
                <img src="<?php echo get_template_directory_uri(); ?>/public/shade-img-2.png" />
                <div class="shade-label">Merbau</div>
              </div>
            </li>

            <li class="splide__slide">
              <div class="shade-card">
                <img src="<?php echo get_template_directory_uri(); ?>/public/shade-img-3.png" />
                <div class="shade-label">Sienna Walnut</div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    

  </div>
</section>
