<DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <title>
    <?php bloginfo('name');
    if(is_home() || is_front_page()){?>
        | <?php bloginfo('description'); 
    }else{?> 
        | <?php wp_title("",true); }?>
    </title>
    <meta charset='<?php bloginfo('charset')?>'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/liaisons/css/styles.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/28d2ca6b82.js" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri() ?>/liaisons/js/menuwp.js"></script>
    <?php wp_head()?>
</head>
<!-- <nav> -->
  <!-- <img src="<?php echo get_template_directory_uri()?>/liaisons/images/logo.svg" alt="Logo du site" class="nav_container-img"> -->
  <!-- <div id="hamburger">
    <div id="bar1"></div>
    <div id="bar2"></div>
    <div id="bar3"></div>
  </div> -->


        <!-- <?php if(has_nav_menu("principal")){ ?>
          <nav id="principal" class="menu__principal">
            <?php wp_nav_menu(array("theme_location"=>"principal"));?>
          </nav>
        <?php } ?> -->

<!-- fixed w-full z-50 -->
<nav class="border-gray-200 bg-[#108554]  ">
  <div class="max-w-screen-xl lg:max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/esprits_ardents_v2/public/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://placehold.co/30x30" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-lg font-semibold whitespace-nowrap text-white">Les Esprits Ardents</span>
    </a>
    <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
      <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
        <li>
        <a href="/esprits_ardents_v2/public/" class="block py-3 px-3 md:p-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700">Accueil</a>
        </li>
        <li>
          <a href="/esprits_ardents_v2/public/nos-massages" class="block py-3 px-3 md:p-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700">Massages</a>
        </li>
        <li>
          <a href="/esprits_ardents_v2/public/herboristerie" class="block py-3 px-3 md:p-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700">Herboristerie</a>
        </li>
        <li>
          <a href="/esprits_ardents_v2/public/qui-suis-je" class="block py-3 px-3 md:p-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700">Qui suis-je?</a>
        </li>
        <li>
          <a href="/esprits_ardents_v2/public/tarifs" class="block py-3 px-3 md:p-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700">Tarifs</a>
        </li>
        <li>
          <a href="https://site.booxi.com/marieclaudeormassotherapeute?lang=fre" class="block py-3 px-3 md:p-2 bg-yellow-200 rounded-md hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700">Prendre rendez-vous</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



  <!-- </nav> -->
  
<body class="layout__body">

<div class="bg-white">