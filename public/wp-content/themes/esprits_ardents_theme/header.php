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
    <?php wp_head()?>
</head>

<body>
<header class="entete">
    
</header>
<?php if(has_nav_menu('principal')){?>
    <nav class="nav">
            <?php if(has_nav_menu("principal")){ ?>
                <?php wp_nav_menu(array("theme_location"=>"principal"));?>
            <?php } ?>
    </nav>
<?php } ?>

<div class="contenu">