
<section
  id="home"
  class="home-hero bg-cover bg-center bg-no-repeat
         pt-28 lg:pt-32 pb-20 "
  style="background-image:url('<?php echo get_template_directory_uri(); ?>/public/hero-bg.webp');">


    <div class="max-w-7xl mx-auto px-4">
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
    
    <!-- LEFT CONTENT (2 columns) -->
    <div class="lg:col-span-2 home-text">
      <h1 class="text-white font-bold
                 text-4xl sm:text-5xl lg:text-6xl
                 leading-tight
                 whitespace-normal xl:whitespace-nowrap">
        Solid Wood. Solid Choice.
      </h1>

      <p class="text-xl text-white mt-4 ">
        Carefully crafted to match your vision – premium solid wood flooring,
        decking, cladding, and bespoke timber solutions.
      </p>

      <div class="flex flex-wrap gap-4 mt-6">
        <a href="#products"
           class="rounded-3xl bg-[#e02b20] text-white px-6 py-3 text-sm font-medium">
          Explore Solid Wood Products
        </a>

        <a href="#shade-card"
           class="rounded-3xl bg-white text-[#e02b20] border border-[#e02b20]
                  px-6 py-3 text-sm font-medium">
          View Shade Cards
        </a>
      </div>
    </div>

    <!-- RIGHT FORM (1 column) -->
    <div class="w-full pt-12 lg:pt-24">
      <div class="max-w-md ml-auto bg-white p-8 rounded-3xl shadow-2xl">
        <h2 class="text-2xl font-semibold mb-6">
          Get Your Free Quote
        </h2>

        <?php echo do_shortcode('[contact-form-7 id="8e1b916" title="Get Your Free Quote"]'); ?>
      </div>
    </div>

  </div>
</div>



</section>




