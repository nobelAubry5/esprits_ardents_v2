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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/liaisons/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/28d2ca6b82.js" crossorigin="anonymous"></script>
    <?php wp_head()?>
</head>
<nav>
  <!-- <img src="<?php echo get_template_directory_uri()?>/liaisons/images/logo.svg" alt="Logo du site" class="nav_container-img"> -->
  <div id="hamburger">
    <div id="bar1"></div>
    <div id="bar2"></div>
    <div id="bar3"></div>
  </div>
  <?php if(has_nav_menu('principal')){?>
        <?php if(has_nav_menu("principal")){ ?>
            <?php wp_nav_menu(array("theme_location"=>"principal"));?>
        <?php } ?>

<?php } ?>
  </nav>
  <script>
    var hamburger = document.querySelector("#hamburger");
var nav = document.querySelector(".menu-menu-1-container");
var navLinks = document.querySelectorAll(".menu-menu-1-container li");

// close nav by clicking on list items
Array.from(navLinks).forEach((li) =>
  li.addEventListener("click", () => {
    if (hamburger.classList.contains("toggle")) {
      hamburger.classList.remove("toggle");
    }
    if (nav.classList.contains("nav-active")) {
      nav.classList.remove("nav-active");
    }
  })
);

// toggle nav on click of hamburger menu icon
hamburger.addEventListener("click", () => {
  nav.classList.toggle("nav-active");

  // burger animation
  hamburger.classList.toggle("toggle");
});
  </script>
<body class="layout__body">
  
  


<div class="contenu">