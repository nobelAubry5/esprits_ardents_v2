<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php
        bloginfo('name');
        if (is_home() || is_front_page()) {
        ?>
            | <?php bloginfo('description'); ?>
        <?php
        } else {
        ?>
            | <?php wp_title("", true); ?>
        <?php
        }
        ?>
    </title>
    <meta charset='<?php bloginfo('charset') ?>'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/28d2ca6b82.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body class="layout__body">
    <nav class="bg-[#108554] top-0 start-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/esprits_ardents_v2/public/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="<?php echo get_template_directory_uri()?>/liaisons/images/logo_entreprise.png" class="h-[60px]" alt="Logo-Les-Esprits-Ardents">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="https://site.booxi.com/marieclaudeormassotherapeute?lang=fre" class="bg-yellow-200 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-block">
                    Rendez-vous
                </a>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="/esprits_ardents_v2/public/" class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:text-yellow-200 md:p-0">Accueil</a>
                    </li>
                    <li>
                        <a href="/esprits_ardents_v2/public/nos-massages" class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:text-yellow-200 md:p-0">Massages</a>
                    </li>
                    <li>
                        <a href="/esprits_ardents_v2/public/herboristerie" class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:text-yellow-200 md:p-0">Herboristerie</a>
                    </li>
                    <li>
                        <a href="/esprits_ardents_v2/public/qui-suis-je" class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:text-yellow-200 md:p-0">Qui suis je</a>
                    </li>
                    <li>
                        <a href="/esprits_ardents_v2/public/tarifs" class="block py-2 px-3 text-white rounded hover:bg-transparent md:hover:text-yellow-200 md:p-0">Tarifs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-white">
</body>
</html>
