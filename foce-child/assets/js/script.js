// Initialiser Skrollr après avoir chargé le fichier skrollr.min.js
(function($) {
    // Init Skrollr
    var s = skrollr.init();
    if (s.isMobile()) {
        s.destroy();
    }        
} )();

// Ajouter un effet d'apparition au scroll sur une section avec l'observateur d'intersection
// Lorsque les entrées intersectent la zone visible, la classe .is-visible est ajoutée pour déclencher l’animation CSS.
// Les éléments animés sont observés en utilisant la méthode observe de l’observateur d’intersection.

(function () {
    
  // Utilisation de la directive "use strict" pour activer le mode strict en JavaScript
  // Cela implique une meilleure gestion des erreurs et une syntaxe plus stricte pour le code
  "use strict"

  // Sélectionne tous les éléments avec la classe "animate-on-scroll"
  const elements = document.querySelectorAll(".animate-on-scroll");
 
  // Options pour l'observateur d'intersection
  const options = {
      threshold: 0.05
  };
  // Instanciation de l'observateur d'intersection
  const observer = new IntersectionObserver(function (entries, observer) {
      // Boucle sur chaque entrée pour traiter les intersections
      entries.forEach(entry => {
          // Si l'entrée est en train d'intersecter avec la zone visible
          if (entry.isIntersecting) {
              // Ajouter la classe "is-visible" pour déclencher l'animation
              entry.target.classList.add("is-visible");
              // Cesser d'observer cet élément
              observer.unobserve(entry.target);
          }
      });
  }, options);
  // Observer chaque élément
  elements.forEach(element => {
      observer.observe(element);
  });
})();

// Menu de navigation
function hideMenu() {
    // Changer la croix en burger
    let el = document.getElementById("togglemenu");
    el.ariaExpanded = "false";
    // Masquer le menu déroulant
    document.getElementById("site-navigation").classList.toggle('toggled');
    }