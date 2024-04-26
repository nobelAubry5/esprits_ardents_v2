var menu = {
  iconMenuFerme: '<i class="fas fa-bars"></i>', // Font Awesome icon for closed menu
  iconMenuOuvert: '<i class="fas fa-times"></i>', // Font Awesome icon for open menu
  refBouton: null,
  refLibelle: null,
  refMenu: null,

  configurerNav: function () {
    //********** Création du bouton du menu mobile
    document.body.classList.add("js");
    // On sélectionne le menu dans le HTML
    this.refMenu = document.querySelector(".menu__principal");
    this.refMenu.classList.add("navigation--ferme");

    // Création du bouton et du libellé
    this.refBouton = document.createElement("button");
    this.refLibelle = document.createElement("span");

    // On ajoute le libellé dans le bouton
    this.refBouton.appendChild(this.refLibelle);

    // On ajoute les classes au bouton et au libellé
    this.refBouton.className = "navigation__controle";
    this.refLibelle.className = "navigation__libelle";

    // On associe le texte du libellé à l'élément html
    this.refLibelle.innerHTML = this.iconMenuFerme; // Set icon for closed menu

    // Ajout du bouton dans l'entête de la page html
    this.refMenu.prepend(this.refBouton);

    // Ajout de l'écouteur d'événement sur le bouton du menu
    this.refBouton.addEventListener("click", function () {
      menu.ouvrirFermerNav();
    });
    //this.refBouton.addEventListener('click', this.ouvrirFermerNav.bind(this));
  },

  ouvrirFermerNav: function () {
    // On bascule la classe de fermeture du menu
    this.refMenu.classList.toggle("navigation--ferme");

    // On change l'icône du bouton selon l'état du menu
    if (this.refMenu.classList.contains("navigation--ferme")) {
      this.refLibelle.innerHTML = this.iconMenuFerme; // Set icon for closed menu
    } else {
      this.refLibelle.innerHTML = this.iconMenuOuvert; // Set icon for open menu
    }
  },
};

//*******************
// Écouteurs d'événements
//*******************

window.addEventListener("load", function () {
  menu.configurerNav();
});
