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
    <div class="mt-4 lg:order-first">
        <h2 class="text-2xl font-extrabold text-black">Marie-Claude L'Or</h2>
        <p class="text-lg font-bold ">
            Massothérapeute spécialisée
        </p>
        <p class="font-semibold ">
            Membre de l’association Le Réseau des massothérapeutes professionnels du Québec
        </p>
    </div>
    <div class="row-span-2 lg:order-first">
        <p class="text-sm">
            L’être humain dans toutes ses dimensions me fascine, m’inspire, m’intrigue depuis toujours.
            Et en curieuse terrienne, je ne cesse d’explorer par le biais de nouvelles formations différents aspects de la santé:
            Méditation, danse, Qi Gong, Taï Chi, Shintaïdo, PCI (Psycho-corporel intégré), poésie, hakomi , yoga, divers ateliers de développement personnel, peinture…etc J’ai une affinité toute particulière avec les huiles essentielles. Je suis en formation continue.
        </p>
    </div>
</div>



    <span class="my-8 flex items-center">
        <span class="pr-6 text-3xl font-extrabold font-sans">Articles</span>
        <span class="h-px flex-1 bg-black"></span>
    </span>

    <div class="article__layout">
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
                <article class="flex bg-white transition hover:shadow-xl">
                    <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                        <time
                            datetime="2022-10-10"
                            class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900"
                        >
                            <span>2022</span>
                            <span class="w-px flex-1 bg-gray-900/10"></span>
                            <span>Oct 10</span>
                        </time>
                    </div>
                    <div class="hidden sm:block sm:basis-56">
                        <img
                            alt=""
                            src="https://placehold.co/225x225"
                            class="aspect-square h-full w-full object-cover"
                        />
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
                            <a
                                href="<?php echo $post->guid;?>"
                                class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400"
                            >
                                Lire plus
                            </a>
                        </div>
                    </div>
                </article>
            <?php }
        }?>
    </div>
</main>
<?php get_footer()?>
