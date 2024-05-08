<?php
/*Template name: Herboristerie */
get_header(); //Appel de l'inclusion d'entête de page
// echo "page-herboristerie.php";
?>
<div class="relative overflow-hidden mb-12">
  <div class=" inset-0">
    <img src="https://placehold.co/1440x1000" alt="Background Image" class="object-cover object-center w-full h-2/5" />
    <div class="absolute inset-0 bg-black opacity-10"></div>
  </div>
</div>

<main class="mx-auto max-w-xs md:max-w-lg lg:max-w-5xl xl:max-w-6xl">

<span class="mb-4 flex items-center">
  <span class="pr-6 text-3xl font-extrabold font-sans"><?php the_title()?></span>
  <span class="h-px flex-1 bg-black"></span>
</span>
        
<div class="grid grid-cols-2 gap-2 md:grid-cols-2 lg:grid-cols-3">
        <?php
        // Requête et boucle d'affichage des articles avec ACF
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type'      => 'herboristeries',
            'post_status'    => 'publish',
            'orderby'        => 'the_title',
            'order'          => 'ASC',
        ));
        if (have_posts()) {
            foreach ($posts as $post) { ?>
                <div href="<?php echo $post->guid; ?>" class="bg-[#FFF] border-1 border-gray-900 rounded-md flex flex-col my-2 p-3 md:mx-2 lg:mx-3 shadow transition hover:shadow-lg">
                <a href="<?php echo $post-> guid;?>" class="no-underline">
                    <?php
                    $image_info = get_field("image_du_produit");
                    if ($image_info != null) { ?>
                        <picture>
                            <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"]; ?>">
                            <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"]; ?>">
                            <img src="<?php echo $image_info['sizes']['thumbnail']; ?>" class="w-full object-cover rounded-md" alt="<?php echo $image_info["alt"]; ?>">
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