let profil1 = document.getElementById('profil1')
let profil2 = document.getElementById('profil2')
let profil3 = document.getElementById('profil3')
let name = document.querySelector('.name')
let nom = document.getElementById('nom')
let prenom = document.getElementById('prenom')
let email = document.getElementById('email')

profil2.addEventListener('click', function(){
    if (profil2.classList.contains('change')){
        profil1.setAttribute("src", "../img/profil.jpeg");
        profil2.setAttribute("src", "../img/profil 3.jpeg");
        prenom.innerHTML = "Frédéric"
        nom.innerHTML = "Patte"
        email.innerHTML = "frederic.patte@gmail.com"
        name.innerHTML = "Frédéric"
        mdp.value = "webdesign";
        profil2.classList.remove('change');
    }else{
        profil1.setAttribute("src", "../img/profil 3.jpeg");
        profil2.setAttribute("src", "../img/profil.jpeg");
        mdp.value = "Alamat<3";
        prenom.innerHTML = "Chloé"
        nom.innerHTML = "Beaumard"
        email.innerHTML = "chloé.beaumard@gmail.com"
        name.innerHTML = "Chloé"
        profil2.classList.add('change');
    }
});