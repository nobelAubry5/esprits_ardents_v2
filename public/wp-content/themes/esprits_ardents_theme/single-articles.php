<?php
get_header();
echo "single-articles.php";
?>
<main class="page-herboristerie">
<article class="blog-article">
    <header class="article-header">
        <h2 class="article__title"><?php the_title() ?></h2>
    </header>
    <div class="article__meta">
        <span class="article-date"><?php the_date() ?></span>
        <!-- Add other meta information like author, categories, etc. -->
    </div>
    <div class="article__content">
        <?php the_post(); ?>
        <div class="article__description">
            <?php echo get_field("texte_article") ?>
        </div>
    </div>
</article>

    
    
</main>
<?php get_footer()?>