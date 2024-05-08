<?php
/*Template name: Tarifs */
get_header(); //Appel de l'inclusion d'entête de page
echo "page-Tarifs.php";
?>
    <main class="page">
        <div>
            <h1><?php the_title()?></h1>
        </div>
        

        <div role="alert" class="rounded border-s-4 border-green-500 bg-greeb-50 p-4">
  <strong class="block font-medium text-green-800"> <?php  the_content() ?> </strong>

  <p class="mt-2 text-sm text-green-700">
  <?php  the_content() ?>
  </p>
</div>
       
           

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