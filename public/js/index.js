let profile = document.querySelector('.profile');
let nom = document.querySelector('#name');
console.log('salut');
nom.addEventListener('change',() =>{
    if(nom.value == 'administrateur'|| nom.value == 'Administrateur'|| nom.value == 'administrateur'.toUpperCase() || nom.value == 'admin'){
        profile.style.display="flex";
        console.log(profile);
    }
});