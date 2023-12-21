let mdp = document.getElementById('mdp');
let afficheur = document.getElementById('afficheur');

afficheur.addEventListener('click', function(){
    if (mdp.getAttribute("type") === "password"){
        mdp.setAttribute("type", "text");
    } else {
        mdp.setAttribute("type", "password");
    }
});