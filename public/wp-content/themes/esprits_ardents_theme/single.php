<?php
get_header();
echo "single.php";
?>

<main class="page">

<?php the_post();?>
    <article class="article">
        <header class="article__entete">
            <h2 class="article__titre"><?php the_title() ?></h2>
        </header>
	
	   <?php  //remplacer cette balise pas le code de l'étape 3 ici! ?>

        <p class="article__texte">
            <?php  the_content() ?>
        </p>
        <?php if(has_post_thumbnail()){ ?>
			<div class="article__imageUne">
				<?php the_post_thumbnail("medium");?>
			</div>
		<?php } ?>
        <footer class="article__piedPage">
            <h4>Par: <?php the_author(); ?></h4>
            <h4>  Publié le: <?php the_date(); ?></h4>
        </footer>
    </article>

</main>

<?php get_footer()?>