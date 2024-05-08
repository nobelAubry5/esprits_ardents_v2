<?php
/* Template name: Tarifs */
get_header(); // Appel de l'inclusion d'entête de page
echo "page-Tarifs.php";
?>
<main class="mx-auto max-w-xs md:max-w-lg lg:max-w-5xl xl:max-w-6xl">
    <span class="flex items-center">
        <span class="pr-6 text-3xl font-extrabold font-sans">Tarifs</span>
        <span class="h-px flex-1 bg-black"></span>
    </span>

    <div role="alert" class="my-8 rounded bg-green-100 border-s-4 border-green-500 bg-greeb-50 p-4">
        <p class="mt-2 text-sm lg:text-base text-green-700">
            Pour tout désistement à 24h et moins, vous devez payer la totalité des frais de la session pour laquelle vous aviez réservé. Un reçu vous sera émis par la suite. Merci de votre compréhension.
        </p>
    </div>

    <div class="my-8 md:mb-8 lg:mb-16 overflow-hidden">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <tbody class="divide-y divide-gray-200">
                <?php
                // Requête et boucle d'affichage des articles avec ACF
                $posts = get_posts(array(
                    'posts_per_page' => -1,
                    'post_type'      => 'tarifs',
                    'post_status'    => 'publish',
                    'orderby'        => 'the_title',
                    'order'          => 'ASC',
                ));
                if (have_posts()) {
                    foreach ($posts as $post) { ?>
                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-sm lg:text-base"><?php echo get_field("temps_massage") ?></td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-sm lg:text-base"><?php echo get_field("prix_massage") ?></td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
</main>
<?php get_footer() ?>
