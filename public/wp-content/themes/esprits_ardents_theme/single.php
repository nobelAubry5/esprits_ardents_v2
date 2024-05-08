<?php
get_header();
// echo "single-herboristerie.php";
?>
<main class="mx-auto max-w-xs md:max-w-lg lg:max-w-5xl xl:max-w-6xl lg:mb-48">
<nav aria-label="Breadcrumb" class="my-4 flex">
  <ol class="flex overflow-hidden rounded-lg border border-gray-200 text-gray-600">
    <li class="flex items-center">
      <a
        href="/esprits_ardents_v2/public/herboristerie"
        class="flex h-10 items-center gap-1.5 bg-gray-100 px-4 transition hover:text-gray-900"
      >
        <span class="ms-1.5 text-sm font-medium"> Herboristerie </span>
      </a>
    </li>

    <li class="relative flex items-center">
      <span
        class="absolute inset-y-0 -start-px h-10 w-4 bg-gray-100 [clip-path:_polygon(0_0,_0%_100%,_100%_50%)] rtl:rotate-180"
      >
      </span>

      <a
        href="#"
        class="flex h-10 items-center bg-white pe-4 ps-8 text-sm font-medium transition cursor-default"
      >
      <?php the_title() ?>
      </a>
    </li>
  </ol>
</nav>

<span class="my-4 flex items-center">
  <span class="pr-6 text-3xl font-extrabold font-sans"><?php the_title()?></span>
  <span class="h-px flex-1 bg-black"></span>
</span>

<div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
  <div class="rounded-lg"><?php $image_info=get_field("image_du_produit");
                if($image_info!=null){?>
                    <picture>
                        <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"];?>">
                        <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"];?>">
                        <img src="<?php echo $image_info['sizes']['thumbnail'];?>" alt="<?php echo $image_info["alt"];?>">
                    </picture>
            <?php }?></div>
  <div class="rounded-lg bg-gray-200 lg:col-span-2"><?php echo get_field("description_du_produit")?></div>
</div>
</main>

<?php get_footer()?>
