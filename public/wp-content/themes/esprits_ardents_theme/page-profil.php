<?php
/* Template name: Qui suis-je */
get_header(); // Appel de l'inclusion d'entête de page
echo "page-profil.php";
?>
<main class="mx-auto max-w-xs md:max-w-lg lg:max-w-5xl xl:max-w-6xl">
    <div class="bg-[#e3ffd7] p-3 lg:px-12 grid lg:grid-rows-2 lg:grid-flow-col gap-4 rounded-md">
        <div class="flex justify-center items-center lg:justify-end lg:items-center row-span-3">
            <img src="<?php echo get_template_directory_uri()?>/liaisons/images/marie-claude.webp" class="w-36 h-36 lg:w-64 lg:h-64 rounded-full"/>
        </div> 
        <?php
        // Requête et boucle d'affichage des articles avec ACF
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type'      => 'infos',
            'post_status'    => 'publish',
            'orderby'        => 'the_title',
            'order'          => 'ASC',
        ));
        if (have_posts()) {
            foreach ($posts as $post) { ?>
                <div class="mt-4 lg:order-first">
                    <h2 class="text-2xl font-extrabold text-black"><?php echo get_field("nom_et_prenom")?></h2>
                    <p class="text-lg font-bold ">
                        <?php echo get_field("role")?>
                    </p>
                    <p class="font-semibold ">
                        <?php echo get_field("role_en_association")?>
                    </p>
                </div>
                <div class="row-span-2 lg:order-first">
                    <p class="text-sm">
                        <?php echo get_field("description_personnelle")?>
                    </p>
                </div>
        <?php }
        }?>
    </div>

    <div class="flow-root my-16">
        <div class="-my-8 divide-y divide-gray-100">
            <details class="group py-8 [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between text-gray-900">
                    <h2 class="text-lg font-bold">Formation</h2>
                    <span class="relative size-5 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 size-5 lg:size-8 opacity-100 group-open:opacity-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 size-5 lg:size-8 opacity-0 group-open:opacity-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </span>
                </summary>
                <?php
                // Requête et boucle d'affichage des articles avec ACF
                $posts = get_posts(array(
                    'posts_per_page' => -1,
                    'post_type'      => 'formations',
                    'post_status'    => 'publish',
                    'orderby'        => 'the_title',
                    'order'          => 'ASC',
                ));
                if (have_posts()) {
                    foreach ($posts as $post) { ?>
                        <div class="border border-indigo-600 mt-4 p-4 leading-relaxed font-semibold text-base">
                            <?php echo get_field("nom_formateur");?>
                            <?php echo get_field("nom_formation");?>
                        </div>
                <?php }
                } ?>
            </details>
            <details class="group py-8 [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between text-gray-900">
                    <h2 class="text-lg font-bold">Expériences</h2>
                    <span class="relative size-5 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 size-5 lg:size-8 opacity-100 group-open:opacity-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 size-5 lg:size-8 opacity-0 group-open:opacity-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </span>
                </summary>
                <?php
                // Requête et boucle d'affichage des articles avec ACF
                $posts = get_posts(array(
                    'posts_per_page' => -1,
                    'post_type'      => 'experiences',
                    'post_status'    => 'publish',
                    'orderby'        => 'the_title',
                    'order'          => 'ASC',
                ));
                if (have_posts()) {
                    foreach ($posts as $post) { ?>
                        <p class="mt-8 leading-relaxed font-semibold text-base">
                            <?php echo get_field("nom_lieu");?>
                            <?php echo get_field("texte_lieu");?>
                        </p>
                <?php }
                } ?>
            </details>  
        </div>
    </div>

    <span class="my-8 flex items-center">
        <span class="pr-6 text-3xl font-extrabold font-sans">Articles</span>
        <span class="h-px flex-1 bg-black"></span>
    </span>

    <?php
    // Requête et boucle d'affichage des articles avec ACF
    $posts = get_posts(array(
        'posts_per_page' => -1,
        'post_type'      => 'articles',
        'post_status'    => 'publish',
        'orderby'        => 'the_title',
        'order'          => 'ASC',
    ));
    if (have_posts()) {
        foreach ($posts as $post) { ?>
            <article class="flex bg-white transition">
                <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                    <time datetime="2022-10-10" class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                        <span>2022</span>
                        <span class="w-px flex-1 bg-gray-900/10"></span>
                        <span>Oct 10</span>
                    </time>
                </div>
                <div class="hidden sm:block sm:basis-56">
                    <img alt="" src="https://placehold.co/225x225" class="aspect-square h-full w-full object-cover"/>
                </div>
                <div class="flex flex-1 flex-col justify-between">
                    <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                        <a href="<?php echo $post->guid;?>">
                            <h3 class="font-bold uppercase text-gray-900">
                                <?php echo $post->post_title;?>
                            </h3>
                        </a>
                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                            <?php echo get_field("extrait_article");?>
                        </p>
                    </div>
                    <div class="sm:flex sm:items-end sm:justify-end">
                        <a href="<?php echo $post->guid;?>" class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">
                            Lire plus
                        </a>
                    </div>
                </div>
            </article>
        <?php }
    }?>
</main>
<?php get_footer()?>
