<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <link rel = "icon" type = "image/png" href = "assets/favicon.png">
    <title>À propos</title>
    <style>
        html, body{
            overflow-y: hidden;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <div>
        <div class="loading-page isActive"></div>
        <div class="loading-motion isActive"></div>
    </div>
    <div class="navbar">
        <div>
            <button class="menu-button" onclick="activateNavbar();" title="Menu"></button>
        </div>

        <div class="utilities-links">
            <div class="home-link">
                <a href="index.php" class="text-link">Accueil</a> 
            </div>
            
            <div class="consult-link">
                <a href="database.php" class="text-link">DataBase</a> 
            </div>

            <div class="consult-link">
                <a href="consult.php" class="text-link">Consulter</a> 
            </div>

            <div class="statistics-link">
                <a href="statistics.php" class="text-link">Statistiques</a> 
            </div>

            <div class="modify-link">
                <a href="modify.php" class="text-link">Modifier</a> 
            </div>

            <div class="about-link">
                <a href="about.php" class="text-link">À propos</a> 
            </div>

        </div>

        <a class="logo" href="https://moodle.bordeaux-inp.fr/pluginfile.php/226190/mod_resource/content/2/projet_SGBD_jeux.pdf" style="height: 8vh; width: 9vw; cursor: pointer; position: absolute; left: 1vh; bottom: 1vh;">
            <img src="assets/favicon.png" style="height: 8vh; position: absolute;">
            <div style="position: absolute; color: white; font-family: montserrat; left: 3.8vw; top: 1.5vh; font-weight: 800; font-size: 3vh;">SGBD</div>
            <div style="position: absolute; color: white; font-family: montserrat; left: 3.8vw; top: 4.3vh; font-weight: 800; font-size: 2vh;">projet</div>
        </a>

        <a class="github-link" href="https://github.com/daJster/project_SGBD" title="Github">
        </a>

        <div class="blur-screen"></div>
    </div>

    <div class="pages">
        <div class="page-1">
            <div class="about-title-page">À propos</div>
            <div style="display:grid; grid-template-columns: auto; row-gap: 2vh; margin-top: 9vh;">
                <div class="paragraph slide">
                    <a class="title" href="https://www.kaggle.com/datasets/andrewmvd/board-games">Références</a>
                    <div class="content">
                        Les données que nous avons utilisées dans ce projet ont été principalement inspirées du site Kaggle.<br>
                        Les photos utilisées dans ce site ont été pris de FontAwesome.<br>
                        Les données utilisées sont une œuvre de fiction. Les noms, Jeux, commentaires et contributeurs sont 
                        le fruit de l'imagination de l'auteur ou sont utilisés de manière fictive. Toute ressemblance avec des événements,
                        des lieux ou des personnes réels, vivants ou morts, est entièrement fortuite.<br>                        
                    </div>

                    <a class="title" href="statistics.php">Ressources</a>
                    <div class="content">
                        Dans cette partie on cherche plus à faire des calculs dans la base de données pour avoir une idée sur l'avis général d'un jeu
                        la moyenne des jeux qui ont été le plus appréciés, les commentaires les plus pertinent (calculs d'indice de confiance), et les commentaires les plus récents.<br>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="app.js"></script>
</html>