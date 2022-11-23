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
            <div class="form-select">
            
            <div class="form-field-wrapper">
                
                <div class="add-section">
                <!-- ADD GAME -->
                    <form class="form-fields add game" id="addgame" onsubmit="showQuery('.form-fields.add.game');">
                        <div class="field name">
                            <div class="field-name">Nom</div>
                            <input class="field-input" type="text" placeholder="Nom du jeu" required>
                        </div>
                        <div class="field editor">
                            <div class="field-name">Editeur</div>
                            <input class="field-input" type="text" placeholder="Nom de l'éditeur" required>
                        </div>
                        <div class="field dateParution">
                            <div class="field-name">Date de parution</div>
                            <input class="field-input" type="date" required>
                        </div>
                        <div class="field duree">
                            <div class="field-name">Durée</div>
                            <input class="field-input" type="number" placeholder="Durée du jeu" required>
                        </div>
                        <div class="field type">
                            <div class="field-name">Type</div>
                            <input class="field-input" type="text" placeholder="Type du jeu" required>
                        </div>
                        <div class="field numberOfPlayers">
                            <div class="field-name">Nombre de joueurs</div>
                            <input class="field-input" type="number" min="0" placeholder="Nombre de joueurs" required>
                        </div>
                        <div class="field standAlone">
                            <div class="field-name">stand Alone</div>
                            <input class="field-input" type="checkbox">
                        </div>
                    </form>

                <!-- ADD PLAYER -->
                    <form class="form-fields add player" id="addplayer" onsubmit="showQuery('.form-fields.add.player');">
                        <div class="field pseudonyme">
                            <div class="field-name">Pseudonyme</div>
                            <input class="field-input" type="text" placeholder="Pseudonyme" required>
                        </div>
                        <div class="field lastName">
                            <div class="field-name">Nom</div>
                            <input class="field-input" type="text" placeholder="Nom du joueur" required>
                        </div>
                        <div class="field firstName">
                            <div class="field-name">Prénom</div>
                            <input class="field-input" type="text" placeholder="Prénom du joueur" required>
                        </div>
                        <div class="field email">
                            <div class="field-name">Adresse mail</div>
                            <input class="field-input" type="email" placeholder="Adresse mail" required>
                        </div>
                    </form>

                <!-- ADD COMMENT -->
                    <form class="form-fields add comment" id="addcomment" onsubmit="showQuery('.form-fields.add.comment');">
                        <div class="field id">
                            <div class="field-name">ID</div>
                            <input class="field-input" type="number"  min="0" placeholder="ID du commentaire" required>
                        </div>
                        <div class="field comment">
                            <div class="field-name">Commentaire</div>
                            <input class="field-input" type="text" placeholder="Commentaire" required>
                        </div>
                        <div class="field date">
                            <div class="field-name">Date</div>
                            <input class="field-input" type="date" placeholder="Date du commentaire" required>
                        </div>
                        <div class="field value">
                            <div class="field-name">Value</div>
                            <input class="field-input" type="number" min="0" max="20" placeholder="Valeur" required>
                        </div>
                        <div class="field numberOfPlayers">
                            <div class="field-name">Nombre de joueurs</div>
                            <input class="field-input" type="number" min="0" placeholder="Nombre de joueurs" required>
                        </div>
                        <div class="field nameGame">
                            <div class="field-name">Nom du jeu</div>
                            <input class="field-input" type="text" placeholder="Nom du jeu" required>
                        </div>
                        <div class="field pseudonyme">
                            <div class="field-name">Pseudonyme</div>
                            <input class="field-input" type="text" placeholder="Pseudonyme" required>
                        </div>
                    </form>
                </div>

                <div class="modify-section">
                <!-- MODIFY GAME -->
                    <form class="form-fields modify game" id="modifygame" onsubmit="showQuery('.form-fields.modify.game');">
                        <div class="field name">
                            <div class="field-name">Nom</div>
                            <input class="field-input" type="text" placeholder="Nom du jeu">
                        </div>
                        <div class="field editor">
                            <div class="field-name">Editeur</div>
                            <input class="field-input" type="text" placeholder="Nom de l'éditeur">
                        </div>
                        <div class="field dateParution">
                            <div class="field-name">Date de parution</div>
                            <input class="field-input" type="date">
                        </div>
                        <div class="field duree">
                            <div class="field-name">Durée</div>
                            <input class="field-input" type="number" placeholder="Durée du jeu">
                        </div>
                        <div class="field type">
                            <div class="field-name">Type</div>
                            <input class="field-input" type="text" placeholder="Type du jeu">
                        </div>
                        <div class="field numberOfPlayers">
                            <div class="field-name">Nombre de joueurs</div>
                            <input class="field-input" type="number" min="0" placeholder="Nombre de joueurs">
                        </div>
                        <div class="field standAlone">
                            <div class="field-name">stand Alone</div>
                            <input class="field-input" type="checkbox">
                        </div>
                    </form>

                <!-- MODIFY PLAYER -->
                    <form class="form-fields modify player" id="modifyplayer" onsubmit="showQuery('.form-fields.modify.player');">
                        <div class="field name">
                            <div class="field-name">Nom</div>
                            <input class="field-input" type="text" placeholder="Nom du jeu">
                        </div>
                        <div class="field editor">
                            <div class="field-name">Editeur</div>
                            <input class="field-input" type="text" placeholder="Nom de l'éditeur">
                        </div>
                        <div class="field dateParution">
                            <div class="field-name">Date de parution</div>
                            <input class="field-input" type="date">
                        </div>
                        <div class="field duree">
                            <div class="field-name">Durée</div>
                            <input class="field-input" type="number" placeholder="Durée du jeu">
                        </div>
                        <div class="field type">
                            <div class="field-name">Type</div>
                            <input class="field-input" type="text" placeholder="Type du jeu">
                        </div>
                        <div class="field numberOfPlayers">
                            <div class="field-name">Nombre de joueurs</div>
                            <input class="field-input" type="number" min="0" placeholder="Nombre de joueurs">
                        </div>
                        <div class="field standAlone">
                            <div class="field-name">stand Alone</div>
                            <input class="field-input" type="checkbox">
                        </div>
                    </form>

                <!-- MODIFY COMMENT -->
                    <form class="form-fields modify comment" id="modifycomment" onsubmit="showQuery('.form-fields.modify.comment');">
                        <div class="field name">
                            <div class="field-name">Nom</div>
                            <input class="field-input" type="text" placeholder="Nom du jeu">
                        </div>
                        <div class="field editor">
                            <div class="field-name">Editeur</div>
                            <input class="field-input" type="text" placeholder="Nom de l'éditeur">
                        </div>
                        <div class="field dateParution">
                            <div class="field-name">Date de parution</div>
                            <input class="field-input" type="date">
                        </div>
                        <div class="field duree">
                            <div class="field-name">Durée</div>
                            <input class="field-input" type="number" placeholder="Durée du jeu">
                        </div>
                        <div class="field type">
                            <div class="field-name">Type</div>
                            <input class="field-input" type="text" placeholder="Type du jeu">
                        </div>
                        <div class="field numberOfPlayers">
                            <div class="field-name">Nombre de joueurs</div>
                            <input class="field-input" type="number" min="0" placeholder="Nombre de joueurs">
                        </div>
                        <div class="field standAlone">
                            <div class="field-name">stand Alone</div>
                            <input class="field-input" type="checkbox">
                        </div>
                    </form>
                </div>


                <div class="delete-section">   
                    <!-- DELETE GAME -->
                        <form class="form-fields delete game" id="deletegame" onsubmit="showQuery('.form-fields.delete.game');">
                            <div class="field name">
                                <div class="field-name">Nom</div>
                                <input class="field-input" type="text" placeholder="Nom du jeu">
                            </div>
                            <div class="field editor">
                                <div class="field-name">Editeur</div>
                                <input class="field-input" type="text" placeholder="Nom de l'éditeur">
                            </div>
                            <div class="field dateParution">
                                <div class="field-name">Date de parution</div>
                                <input class="field-input" type="date">
                            </div>
                            <div class="field duree">
                                <div class="field-name">Durée</div>
                                <input class="field-input" type="number" placeholder="Durée du jeu">
                            </div>
                            <div class="field type">
                                <div class="field-name">Type</div>
                                <input class="field-input" type="text" placeholder="Type du jeu">
                            </div>
                            <div class="field numberOfPlayers">
                                <div class="field-name">Nombre de joueurs</div>
                                <input class="field-input" type="number" min="0" placeholder="Nombre de joueurs">
                            </div>
                            <div class="field standAlone">
                                <div class="field-name">stand Alone</div>
                                <input class="field-input" type="checkbox">
                            </div>
                        </form>

                    <!-- DELETE PLAYER -->
                        <form class="form-fields delete player" id="deleteplayer" onsubmit="showQuery('.form-fields.delete.player');">
                            <div class="field name">
                                <div class="field-name">Nom</div>
                                <input class="field-input" type="text" placeholder="Nom du jeu">
                            </div>
                            <div class="field editor">
                                <div class="field-name">Editeur</div>
                                <input class="field-input" type="text" placeholder="Nom de l'éditeur">
                            </div>
                            <div class="field dateParution">
                                <div class="field-name">Date de parution</div>
                                <input class="field-input" type="date">
                            </div>
                            <div class="field duree">
                                <div class="field-name">Durée</div>
                                <input class="field-input" type="number" placeholder="Durée du jeu">
                            </div>
                            <div class="field type">
                                <div class="field-name">Type</div>
                                <input class="field-input" type="text" placeholder="Type du jeu">
                            </div>
                            <div class="field numberOfPlayers">
                                <div class="field-name">Nombre de joueurs</div>
                                <input class="field-input" type="number" min="0" placeholder="Nombre de joueurs">
                            </div>
                            <div class="field standAlone">
                                <div class="field-name">stand Alone</div>
                                <input class="field-input" type="checkbox">
                            </div>
                        </form>

                    <!-- DELETE COMMENT -->
                        <form class="form-fields delete comment" id="deletecomment" onsubmit="showQuery('.form-fields.delete.comment');">
                            <div class="field name">
                                <div class="field-name">Nom</div>
                                <input class="field-input" type="text" placeholder="Nom du jeu">
                            </div>
                            <div class="field editor">
                                <div class="field-name">Editeur</div>
                                <input class="field-input" type="text" placeholder="Nom de l'éditeur">
                            </div>
                            <div class="field dateParution">
                                <div class="field-name">Date de parution</div>
                                <input class="field-input" type="date">
                            </div>
                            <div class="field duree">
                                <div class="field-name">Durée</div>
                                <input class="field-input" type="number" placeholder="Durée du jeu">
                            </div>
                            <div class="field type">
                                <div class="field-name">Type</div>
                                <input class="field-input" type="text" placeholder="Type du jeu">
                            </div>
                            <div class="field numberOfPlayers">
                                <div class="field-name">Nombre de joueurs</div>
                                <input class="field-input" type="number" min="0" placeholder="Nombre de joueurs">
                            </div>
                            <div class="field standAlone">
                                <div class="field-name">stand Alone</div>
                                <input class="field-input" type="checkbox">
                            </div>
                        </form>

                </div>
            </div>


            <button type="submit" form="addgame" class="form-submit add">
                <div class="form-submit-text">Ajouter</div>    
                <img class="form-submit-img" src="assets/addIcon.png">
            </button>

            <button type="submit" form="modifygame" class="form-submit modify">
                <div class="form-submit-text">Modifier</div>    
                <img class="form-submit-img" src="assets/modifyIcon.png">
            </button>

            <button type="submit"  form="deletegame" class="form-submit delete">
                <div class="form-submit-text">Supprimer</div>    
                <img class="form-submit-img" src="assets/deleteIcon.png">
            </button>

            </div>
        </div>
    </div>

    <button class="cancel-button">Annuler</button>

</body>


<script type="text/javascript" src="app.js"></script>
</html>