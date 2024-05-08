</div>
<?php wp_footer()?>

<div class="piedDePage">
    <div class="footer__profil">
    </div>
    <article class="mt-8 bg-[#108554] rounded-xl border-2 border-gray-100">
        <div class="flex items-start gap-4 p-4 sm:p-6 lg:p-8">
            <?php
            //Requête et boucle d'affichage des articles avec ACF
            $posts = get_posts(array(
                'posts_per_page' => -1,
                'post_type'      => 'infos',
                'post_status'    => 'publish',
                'orderby'        => 'the_title',
                'order'          => 'ASC',
            ));
            if (have_posts()) {
                foreach ($posts as $post) { ?>
                    <a href="#" class="block shrink-0">
                        <img
                            alt=""
                            src="<?php echo get_template_directory_uri()?>/liaisons/images/marie-claude.webp"
                            class="size-14 rounded-lg object-cover"
                        />
                    </a>
                    <div>
                        <h3 class="font-bold text-white sm:text-lg">
                            <a href="#" class="hover:underline"> <?php echo get_field("nom_et_prenom");?> </a>
                        </h3>

                        <div class="flex flex-col justify-between">
                            <p class="line-clamp-2 text-base text-white"><i class="fa-solid fa-phone mr-2"> </i><?php echo get_field("numero_de_telephone");?></p>
                            <p class="line-clamp-2 text-base text-white"><i class="fa-solid fa-envelope mr-2"> </i><?php echo get_field("courriel")?></p>
                            <p class="line-clamp-2 text-base text-white"><i class="fa-solid fa-location-dot mr-2"> </i><?php echo get_field("adresse")?></p>
                            
                        </div>
                            
                        
                    </div>
            <?php }
            }?>
        </div>
    </article>
</div>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>
