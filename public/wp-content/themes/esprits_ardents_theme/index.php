<?php get_header() ?>
<main class="page">
<?php echo "index.php"?>
<?php //si la page reçoit des articles
	if(have_posts()){
		//tant qu'il restera des articles
		while (have_posts()){
			//passer à l'article suivant
			the_post();?>
			<article class="article">
				<header class="article__entete">
					<h2 class="article__titre">
						<?php //affiche le lien et le titre de l'article'?>
						<a class="article__lien" href="<?php the_permalink();?>"><?php the_title()?></a>
					</h2>
				</header>
				<p class="article__texte">
					<?php //affiche le texte de l'article
						the_content();
					?>
				</p>
			</article>
	<?php }}
?>
</main>
<?php get_footer() ?>