</div>
<?php wp_footer()?>

<div class="piedDePage">
    <div class="footer__profil">
    </div>
    <article class="mt-8 bg-[#108554] rounded-xl border-2 border-gray-100">
        <div class="flex items-start gap-4 p-4 sm:p-6 lg:p-8 lg:px-24">
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
                    <div class="block shrink-0">
                        <img
                            alt=""
                            src="<?php echo get_template_directory_uri()?>/liaisons/images/marie-claude.webp"
                            class="size-14 rounded-lg object-cover"
                        />
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-lg">
                            <a href="/esprits_ardents_v2/public/" class="hover:underline"> <?php echo get_field("nom_et_prenom");?> </a>
                        </h3>

                        <div class="flex flex-col justify-between">
                            <a href="tel:+1<?php echo get_field("numero_de_telephone");?>" class="line-clamp-2 text-sm lg:text-lg my-2 text-white"><i class="fa-solid fa-phone mr-1.5"> </i><?php echo get_field("numero_de_telephone");?></a>
                            <a href="mailto:<?php echo get_field("courriel")?>" class="line-clamp-2 text-sm lg:text-lg my-2 text-white"><i class="fa-solid fa-envelope mr-1.5"> </i><?php echo get_field("courriel")?></a>
                            <a href="https://www.google.com/maps/place/1632+Av.+Thomas,+Qu%C3%A9bec,+QC+G1T+2B4/@46.7762873,-71.2490921,16z/data=!3m1!4b1!4m6!3m5!1s0x4cb896a6985c4efd:0xf4c15f9b33d12c9e!8m2!3d46.7762873!4d-71.2465172!16s%2Fg%2F11grbwhzqh?entry=ttu" class="line-clamp-2 text-sm lg:text-lg my-2 text-white"><i class="fa-solid fa-location-dot mr-1.5"> </i><?php echo get_field("adresse")?></a>
                            
                        </div>
                    </div>
            <?php }
            }?>

        </div>
        <div class="flex items-end justify-center">
            <p class="text-white text-xs lg:text-sm">© 2024. Les esprits ardents. Tous droits réservés.</p>
        </div>
    </article>
</div>

<script src="<?php echo get_template_directory_uri() ?>/liaisons/js/menuwp.js"></script>
</body>
</html>
