</div>
<?php wp_footer()?>
   
    
    <div class="piedDePage">
        <div class="footer__profil">
    </div>
        <div class="footer__content">
    <?php
        //Requête et boucle d'affichage des articles avec ACF
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type'	=> 'infos',
            'post_status' => 'publish',
            'orderby' => 'the_title',
            'order' => 'ASC',
        ));
        if(have_posts()){
            foreach ($posts as $post){?>
            <div class="footer__titleimg">
               <img src="<?php echo get_template_directory_uri()?>/liaisons/images/marie-claude.webp" alt="Logo du site" class="nav_container-img"><h2><?php echo get_field("nom_et_prenom");?></h2> 
            </div>
            
            <p><i class="fa-solid fa-phone"></i><?php echo get_field("numero_de_telephone");?></p>
            <p><i class="fa-solid fa-envelope"></i><?php echo get_field("courriel")?></p>
            <p><i class="fa-solid fa-location-dot"></i><?php echo get_field("adresse")?></p>
        
            <?php }
        }?>
        <i class="fa-brands fa-instagram fa-2x" style="padding:0 5px 0 5px"></i>
        <i class="fa-brands fa-facebook fa-2x"  style="padding:0 5px 0 5px"></i>
    </div>
    <!-- <div class="footer__mapimg">
    <img src="<?php echo get_template_directory_uri()?>/liaisons/images/marlo_plan.jpg" alt="Logo du site" class="nav_container-img">
    </div> -->
</div>
 </body>
</html>
