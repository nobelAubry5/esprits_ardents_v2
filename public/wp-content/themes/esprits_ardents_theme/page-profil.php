<?php
/*Template name: Qui suis-je */
get_header(); //Appel de l'inclusion d'entête de page
echo "page-profil.php";
?>
<main>
    <div class="profil__layout">
        <div class="profil__img">
            <img src="<?php echo get_template_directory_uri()?>/liaisons/images/marie-claude.webp" alt="Logo du site" class="nav_container-img"> 
        </div>
        <div class="profil__text">
            <h2>Marie-Claude L'Or</h2>
            <h3>Massothérapeute spécialisée</h3>
            <h3>Membre de l’association Le Réseau des massothérapeutes professionnels du Québec</h3>
            <p>
                L’être humain dans toutes ses dimensions me fascine, m’inspire, m’intrigue depuis toujours.
                Et en curieuse terrienne, je ne cesse d’explorer par le biais de nouvelles formations différents aspects de la santé:
                Méditation, danse, Qi Gong, Taï Chi, Shintaïdo, PCI (Psycho-corporel intégré), poésie, hakomi , yoga, divers ateliers de développement personnel, peinture…etc J’ai une affinité toute particulière avec les huiles essentielles. Je suis en formation continue.
            </p>    
        </div>
    </div>
    
    <div class="article__layout" style="margin-bottom: 60px;">
        <h2>Le massage, c'est un accompagnement.</h2>
        <p>Un art,certainement.
            Une voc ation ,peut-être.
            Un accompagnement de mieux-être, assurément.
            Dans un monde en constante mouvance bien serrés contre nos technologies ,
            avides de distractions ,nous délaissons parfois la présence et se gardons bien  
            de tout contact parce qu'être touché nous engage, nous implique...
        </p>
        <button>Lire plus</button>
        <hr>
    </div>
</main>

<?php get_footer()?>