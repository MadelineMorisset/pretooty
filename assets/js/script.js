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

/* Header - Menu de navigation utilisateur (en cliquant sur le bouton "userButton") */
function navHidden() {
    let element = document.getElementById("navHidden");
    element.classList.toggle("visibilityNav");
}