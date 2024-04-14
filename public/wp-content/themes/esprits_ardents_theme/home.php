<?php get_header() ?>
<main class="page">
	<h1 class="entete__titre">
			<a href="<?php bloginfo('url')?>" title="<?php bloginfo('name')?>"><?php bloginfo('name')?></a>
	</h1>
	<h2 class="entete__slogan"><?php bloginfo('description')?></h2>
	<?php echo "home.php"?>
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
					<?php if(has_post_thumbnail()){ ?>
						<div class="article__imageUne">
							<?php the_post_thumbnail("medium");?>
						</div>
					<?php } ?>
				</article>
		<?php }}
	?>
</main>
<?php get_footer() ?>