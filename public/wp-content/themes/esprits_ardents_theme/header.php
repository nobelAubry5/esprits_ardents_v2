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


        <?php if(has_nav_menu("principal")){ ?>
          <nav id="principal" class="menu__principal">
            <?php wp_nav_menu(array("theme_location"=>"principal"));?>
          </nav>
        <?php } ?>


  <!-- </nav> -->
  
<body class="layout__body">
  
  


<div class="contenu">