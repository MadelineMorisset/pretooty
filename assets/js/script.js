// function clickButtonCategory() {
//     fetch('functions.php');
//     let categoryEditButton = document.getElementById('categoryEditButton');
//     document.addEventListener('click', ()=>{
//         categoryEditButton.readonly = false;

//     })
// }

// function clickButtonName() {
//     fetch('functions.php');
//     let nameEditButton = document.getElementById('nameEditButton');
//     let validateName = document.getElementById('validateName');
//     document.addEventListener('click', ()=>{
//         nameEditButton.readOnly = false;
//         nameEditButton.classList.add('hidden');
//         validateName.classList.remove('hidden');
//     })
// }

/* Fonction pour afficher le menu en cliquant sur le bouton user dans le header et la fenêtre de choix des filtres de recherche */
function navHidden() {
    let element = document.getElementById("navHidden");
    element.classList.toggle("visibilityNav");
}

// /* Souligner le lien de la page en cours de visite */ // À retravailler
// let currentPageUrl = window.location.href; // Récupère l'URL de la page en cours de visite
// let navLinks = document.querySelectorAll('.userNavbarUnderLinks');

// navLinks.forEach(function(link) { // Parcours les liens et vérifie s'ils correspondent à la page en cours de visite
//     if (link.href === currentPageUrl) {
//       link.classList.add('active');
//     }
// });

/* userPageAccount.php - Toggle de notifications dans l'espace utilisateur */
let toggle = document.getElementById('toggle');
toggle.addEventListener('change', function() {
  if (this.checked) {
    console.log('Notifications activées');
  } else {
    console.log('Notifications désactivées');
  }
});
