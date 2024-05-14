<?php
get_header();
// echo "single-herboristerie.php";
?>
<main class="mx-auto max-w-xs md:max-w-lg lg:max-w-5xl xl:max-w-6xl lg:mb-22">
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
  <span class="pr-6 text-2xl font-extrabold font-sans"><?php the_title()?></span>
  <span class="h-px flex-1 bg-black"></span>
</span>

<div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
  <div class="rounded-lg"><?php $image_info=get_field("image_du_produit");
                if($image_info!=null){?>
                    <picture class="flex justify-center items-center">
                        <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"];?>">
                        <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"];?>">
                        <img src="<?php echo $image_info['sizes']['thumbnail'];?>" alt="<?php echo $image_info["alt"];?>">
                    </picture>
            <?php }?></div>
  <div class="p-3 rounded-lg bg-[#f8fafc] lg:col-span-2"><?php echo get_field("description_du_produit")?></div>
</div>
<div role="alert" class="my-8 rounded bg-green-100 border-s-4 border-green-500 bg-greeb-50 p-4">
        <p class="mt-2 text-sm lg:text-base text-green-700">
            Si vous souhaitez en savoir plus sur le produit ou vous le procurez vous pouvez m'appeler au 418-717-4166 ou m'écrire à l'adresse suivante: <a href="mailto:c2dragons@hotmail.com">c2dragons@hotmail.com</a>
        </p>
    </div>
<span class="my-4 flex items-center">
  <span class="pr-6 text-2xl font-extrabold font-sans">Autres produits d'herboristerie</span>
  <span class="h-px flex-1 bg-black"></span>
</span>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <?php
        // Requête et boucle d'affichage des articles avec ACF
        $current_post_id = get_the_ID(); // Get the ID of the current post
        $posts = get_posts(array(
            'posts_per_page' => 3,
            'post_type'      => 'herboristeries',
            'post_status'    => 'publish',
            'orderby'        => 'ID', // Order by post ID
            'order'          => 'ASC', // Ascending order
            'post__not_in'   => array($current_post_id), // Exclude the current post
        ));
        if (!empty($posts)) {
            foreach ($posts as $post) { ?>
                <div href="<?php echo $post->guid; ?>" class="bg-[#FFF] border-1 border-gray-900 rounded-md flex flex-col my-2 p-3 md:mx-2 lg:mx-3 shadow transition hover:shadow-lg">
                <a href="<?php echo $post-> guid;?>" class="no-underline">
                    <?php
                    $image_info = get_field("image_du_produit");
                    if ($image_info != null) { ?>
                        <picture>
                            <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"]; ?>">
                            <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>">
                            <img src="<?php echo $image_info['sizes']['thumbnail']; ?>" class="w-full h-[247px] object-cover rounded-md" alt="<?php echo $image_info["alt"]; ?>">
                        </picture>
                    <?php } ?>

                    <h3 class="mt-4 font-semibold text-gray-900 text-lg"><?php echo $post->post_title; ?></h3>
</a>
                </div>
        <?php }
        } ?>
    </div>
</main>

<?php get_footer()?>
