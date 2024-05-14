<?php
/* Template name: Accueil */
get_header(); // Appel de l'inclusion d'entête de page
// echo "page-accueil.php";
?>
<div class="relative text-white overflow-hidden">
  <div class="absolute inset-0">
    <img src="<?php echo get_template_directory_uri()?>/liaisons/images/hero_img.jpg" alt="Background Image" class="object-cover object-center w-full h-full" />
    <div class="absolute inset-0 bg-black opacity-10"></div>
  </div>
  
  <div class="my-3 ml-4 lg:ml-24 max-w-xl relative z-10 flex flex-col justify-center items-start h-4/6 text-start">
    <h1 class="text-3xl font-bold leading-tight mb-4">Les Esprits Ardents</h1>
    <p class="font-semibold text-lg text-white mb-4">Dites Oui à la vie</p>
    <p class="font-semibold text-lg text-white mb-4">Faites peau neuve avec une session en massothérapie! Participez activement à votre équilibre!</p>
    <a href="https://site.booxi.com/marieclaudeormassotherapeute" class="bg-yellow-400 text-gray-900 hover:bg-yellow-300 py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">Prendre rendez-vous</a>
  </div>
</div>
<main class="mx-auto max-w-xs md:max-w-lg lg:max-w-5xl xl:max-w-6xl">
    <?php //var_dump($post); //Ce que reçoit la page?>
    <span class="flex items-center my-12">
        <span class="pr-6 text-2xl font-extrabold font-sans">Nos massages</span>
        <span class="h-px flex-1 bg-black"></span>
    </span>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-8 mb-12">
        <?php
        //Requête et boucle d'affichage des articles avec ACF
        $posts = get_posts(array(
            'posts_per_page' => 3,
            'post_type'      => 'massages',
            'post_status'    => 'publish',
            'orderby'        => 'the_title',
            'order'          => 'ASC',
        ));
        if (have_posts()) {
            foreach ($posts as $post) { ?>
                <div href="<?php echo $post->guid; ?>" class="bg-[#FFF] border-1 border-gray-900 rounded-md flex flex-col my-2 p-3 md:mx-2 lg:mx-3 shadow transition hover:shadow-lg">
                    <?php
                    $image_info = get_field("image_massage");
                    if ($image_info != null) { ?>
                        <picture>
                            <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"]; ?>">
                            <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>">
                            <img src="<?php echo $image_info['sizes']['thumbnail']; ?>" class="w-full object-cover rounded-md" alt="<?php echo $image_info["alt"]; ?>">
                        </picture>
                    <?php } ?>

                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl"><?php echo $post->post_title; ?></h3>

                    <p class="mt-2 max-w-sm text-gray-700">
                        <?php the_excerpt(); ?>
                    </p>
                </div>
        <?php }
        } ?>
    </div>

    <span class="flex items-center">
        <span class="pr-6 text-2xl font-extrabold font-sans">Témoignages</span>
        <span class="h-px flex-1 bg-black"></span>
    </span>


    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <?php
        //Requête et boucle d'affichage des articles avec ACF
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type'      => 'temoignages',
            'post_status'    => 'publish',
            'orderby'        => 'the_title',
            'order'          => 'ASC',
        ));
        if (have_posts()) {
            foreach ($posts as $post) { ?>
 <div class="relative mx-auto mt-8 rounded-lg shadow max-w-lg p-10 bg-[#e2e8f0] opacity-90  leading-snug flex flex-col justify-between">
          <div class="-ml-4">
            <svg class="w-8 opacity-25 text-green-700" xmlns="http://www.w3.org/2000/svg"
              shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality"
              fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0
                                                                                                             640 640"
              fill=currentColor>
              <path
                d="M557.133 561.704H442.128c-44.256 0-80.458-36.19-80.458-80.446 0-165.58-42.32-347.485 160.656-399.418 91.95-23.516 115.915 77.753 18.119 84.745-59.647 4.276-71.293 42.804-73.147 101.068h92.269c44.256 0 80.458 36.201 80.458 80.458v130.702c0 45.591-37.3 82.89-82.891 82.89zm-358.032 0H84.096c-44.256 0-80.446-36.19-80.446-80.446 0-165.58-42.331-347.485 160.644-399.418 91.95-23.516 115.915 77.753 18.118 84.745-59.646 4.276-71.292 42.804-73.146 101.068h92.269c44.256 0 80.457 36.201 80.457 80.458v130.702c0 45.591-37.3 82.89-82.89 82.89z" />
            </svg>
          </div>
          <div class="mt-2 font-normal">
          <?php echo get_field("texte_temoignage");?>
          </div>
          <div>
            <div class="mx-auto w-full border border-gray-300 my-4"></div>
            <div class="flex items-center">
              <div>
                <div class="font-bold"><?php echo get_field("nom_de_la_personne");?></div>
              </div>
            </div>
          </div>
        </div>

        <?php }
        }?>
</div>
</main>

<?php get_footer()?>
