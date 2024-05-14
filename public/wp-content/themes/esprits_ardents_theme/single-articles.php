<?php
get_header();
echo "single-articles.php";
?>
<main class="mx-auto max-w-xs md:max-w-lg lg:max-w-5xl xl:max-w-6xl">
    <section>
        <div class="mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:h-560 lg:grid-cols-2">
                <div class="relative z-10 lg:pt-4 lg:pb-44">
                    <div class="relative h-64 sm:h-80 lg:h-full">
                        <img
                            alt=""
                            src="https://placehold.co/400x400"
                            class="absolute inset-0 w-full h-125 object-cover"
                        />
                    </div>
                </div>
                <div class="relative flex items-start bg-gray-100">
                    <span
                        class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-gray-100"
                    ></span>
                    <div class="p-8 sm:p-16 lg:p-12">
                        <h2 class="text-2xl font-bold sm:text-3xl">
                            <?php the_title() ?>
                        </h2>
                        <p class="mt-4 text-gray-600">
                            <p class="paragraph text-justify"><?php echo get_field("texte_article") ?></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer()?>
