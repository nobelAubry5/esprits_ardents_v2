<?php
/*Template name: Herboristerie */
get_header(); //Appel de l'inclusion d'entête de page
echo "page-herboristerie.php";
?>

<main class="page-herboristerie">
        <div>
            <h1><?php the_title()?></h1>
        </div>
        <p>
           <?php  the_content() ?>
        </p>
</main>
<?php get_footer()?>