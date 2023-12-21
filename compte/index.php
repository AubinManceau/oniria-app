<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oniria</title>
    <link rel="icon" href="../img/LogoIco.ico" />
    <link rel="stylesheet" href="../styles/style.css">
    <script src="https://kit.fontawesome.com/a560869912.js" crossorigin="anonymous"></script>
    <script src="../scripts/password.js" defer></script>
    <script src="../scripts/profil.js" defer></script>
</head>
<body class="compte">
<nav class="navbar">
        <ul>
            <li>
                <div class="nav-accueil">
                    <a href="../accueil/index.php">
                        <i class="fa-solid fa-house fa-2x"></i>
                        Accueil
                    </a>
                </div>
            </li>
            <li>
                <div class="nav-favoris">
                    <a href="../favoris/index.php">
                        <i class="fa-solid fa-heart fa-2x"></i>
                        Mes favoris
                    </a>
                </div>
            </li>
            <li>
                <div class="nav-nouveautes">
                    <a href="../nouveautes/index.php">
                        <i class="fa-regular fa-calendar fa-2x"></i>
                        Nouveautés
                    </a>
                </div>
            </li>
            <li>
                <div class="nav-compte">
                    <a href="../compte/index.php">
                        <i class="fa-solid fa-circle-user fa-2x"></i>
                        Mon compte
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <main>
        <div class="profil">
            <div class="photo-profil">
                <figure>
                    <img id="profil1" src="../img/profil.jpeg" alt="">
                    <div class="cercle"></div>
                </figure>
            </div>
            <div class="texte-profil">
                <p>Fais de beaux rêves,</p>
                <p class="name">Frédéric</p>
                <div class="profils">
                    <img id="profil2" src="../img/profil 3.jpeg" alt="">
                </div>
            </div>
        </div>
        <div class="info-profil">
            <p id="nom">Patte</p>
            <p id="prenom">Frédéric</p>
            <p id="email">frederic.patte@gmail.com</p>
            <div class="mdp">
                <input type="password" id="mdp" value="webdesign" readonly>
                <p id="afficheur">Afficher le mot de passe</p>
            </div>
        </div>
        <div class="info-abonnement">
            <p>Abonnement standard</p>
        </div>
        <div class="info-legales">
            <a href="#" class="container-info">
                <i class="fa-solid fa-book-open"></i>
                <p>Mentions Légales</p>
            </a>
            <a href="#" class="container-info">
                <i class="fa-solid fa-book-open"></i>
                <p>Politique de confidentialité</p>
            </a>
            <a href="#" class="container-info">
                <i class="fa-regular fa-circle-question"></i>
                <p>Aide</p>
            </a>
        </div>
        <div class="bouton">
            <a href="../connexion/index.php">déconnexion</a>
        </div>

    </main>
</body>
</html>