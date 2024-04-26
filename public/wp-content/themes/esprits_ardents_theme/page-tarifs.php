<?php
/*Template name: Tarifs */
get_header(); //Appel de l'inclusion d'entête de page
echo "page-Tarifs.php";
?>
    <main class="page">
        <div>
            <h1><?php the_title()?></h1>
        </div>
        


        <div class="table__layout">

            <div class="message__tarifs">
           <?php  the_content() ?>
</div>
        <table>
        <?php
        //Requête et boucle d'affichage des articles avec ACF
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type'	=> 'tarifs',
            'post_status' => 'publish',
            'orderby' => 'the_title',
            'order' => 'ASC',
        ));
        if(have_posts()){
            foreach ($posts as $post){?>
            <tr>
            <td><?php echo get_field("temps_massage")?></td>
            
            <td><?php echo get_field("prix_massage")?></td>
        </tr>
            <?php }
        }?>
        </table>
    </div>
    </main>
<?php get_footer()?>