<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <link rel = "icon" type = "image/png" href = "assets/favicon.png">
    <title>Modification</title>
    <style>
        html, body{
            overflow-y: hidden;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
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

    <div class="sections-wrapper">
        <div  class="sections-actions">
            <div class="add-action" >
                <div class="icon" style="background-image: url(./assets/addIcon.png)"></div>
                <div class="text">Ajouter</div>
            </div>

            <div class="modify-action" >
                <div class="icon" style="background-image: url(./assets/modifyIcon.png)"></div>
                <div class="text">Modifier</div>
            </div>

            <div class="delete-action" >
                <div class="icon" style="background-image: url(./assets/deleteIcon.png)"></div>
                <div class="text">Supprimer</div>
            </div>
        </div>

        <div class="sections-objects">
            <div class="game-object" >
                <div class="icon" style="background-image: url(./assets/gameIcon.png)"></div>
                <div class="text">Jeux</div>
            </div>

            <div class="player-object" >
                <div class="icon" style="background-image: url(./assets/playerIcon.png)"></div>
                <div class="text">Joueurs</div>
            </div>

            <div class="comment-object" >
                <div class="icon" style="background-image: url(./assets/commentIcon.png)"></div>
                <div class="text">Commentaires</div>
            </div>
        </div>


        <div class="form-wrapper">
            <div class="form-game">
                <div class="form-add-game">

                </div>

                <div class="form-modify-game">
                    
                </div>

                <div class="form-delete-game">
                    
                </div>
            </div>
        </div>
    </div>

    <button class="cancel-button">Annuler</button>

</body>


<script type="text/javascript" src="app.js"></script>
</html>