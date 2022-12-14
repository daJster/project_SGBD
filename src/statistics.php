<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <link rel = "icon" type = "image/png" href = "assets/favicon.png">
    <title>projet SGBD : Jeux</title>
</head>

<style>
    .loading-page{height: 400vh;}
</style>
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
            <div class="stats-title-page">Statistiques</div>
            <div class="stats-wrap">
                <div class="title-grid">Les joueurs classés selon le nombre de jeux qu'ils ont notés</div>
                <div class="stats-grid" style="margin-top: 6vh; border-radius: 2vh; overflow-y: scroll;" >
                <table style="width:100%; border-radius-bottom: 2vh; font-family: Montserrat; font-size: 3vh; background-color: rgb(0,0,0,.2); box-shadow: 0 0 4vh .1vh rgb(0,0,0,.4);" >
                            <tr>
                                <th style="width:5%; font-family: Montserrat; font-size: 3vh;">nb</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Pseudonyme</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Nom</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Prénom</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Adresse mail</th>
                            </tr>
                </table>
                <?php
                    $db = new PDO(
                        'mysql:host=localhost;dbname=mysql;charset=utf8',
                        'root',
                        ''
                        );
                   $rs = $db->prepare('SELECT COUNT(A.PSEUDONYME) NB, A.* 
                                        FROM (SELECT * FROM JOUEURS NATURAL JOIN NOTES) A
                                        GROUP BY A.PSEUDONYME
                                        ORDER BY NB DESC;');
                   $rs->execute();
                   $themes = $rs->fetchAll();
                   foreach ($themes as $theme) {
                   ?>
                        <table style="width:100%">
                            <tr>
                                <td style="width: 5%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['NB'];?></td >
                                <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['PSEUDONYME'];?></td>
                                <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['NOM_JOUEUR'];?></td>
                                <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['PRENOM_JOUEUR'];?></td>
                                <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['ADRESSE_MAIL'];?></td>
                            </tr>
                   </table>
                   <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="page-2">
            <div class="stats-wrap">
                <div class="title-grid">la liste des commentaires les plus récents</div>
                <button class="choose-button">Nombre de commentaires</button>

                <div class="choose-bar">
                    <form action="" method="POST">
                    <button class="test-bar" type="submit" name="5">5</button>
                    <button class="test-bar" type="submit" name="10">10</button>
                    <button class="test-bar" type="submit" name="15">15</button>
                    <button class="test-bar" type="submit" name="20">20</button>
                </form>
                </div>

                <div class="stats-grid"  style="margin-top: 9vh; border-radius: 2vh; overflow-y: scroll;">
                    <table style="width:100%; border-radius-bottom: 2vh; font-family: Montserrat; font-size: 3vh; background-color: rgb(0,0,0,.2); box-shadow: 0 0 4vh .1vh rgb(0,0,0,.4);">
                        <tr>
                                <th style="width:5%; font-family: Montserrat; font-size: 3vh;">ID</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Commentaire</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Date</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Note</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Nom du jeu</th>
                        </tr>
                    </table>
                    <?php
                        $db = new PDO(
                            'mysql:host=localhost;dbname=mysql;charset=utf8',
                            'root',
                            ''
                            );
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            if (isset($_POST['5'])) {
                                $rs = $db->prepare('select * from NOTES ORDER BY NOTES.DATE_NOTE DESC LIMIT 5;');
                            }
                            elseif (isset($_POST['10'])) {
                                $rs = $db->prepare('select * from NOTES ORDER BY NOTES.DATE_NOTE DESC LIMIT 10;');
                            }
                            elseif (isset($_POST['15'])) {
                                $rs = $db->prepare('select * from NOTES ORDER BY NOTES.DATE_NOTE DESC LIMIT 15;');
                            }
                            elseif (isset($_POST['20'])) {
                                $rs = $db->prepare('select * from NOTES ORDER BY NOTES.DATE_NOTE DESC LIMIT 20;');
                            }
                            
                            $rs->execute();
                            $themes = $rs->fetchAll();
                            foreach ($themes as $theme) {
                            ?>
                                    <table style="width:100%">
                                        <tr>
                                            <td style="width: 5%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['ID_NOTE'];?></td >
                                            <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['COMMENTAIRE'];?></td>
                                            <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['DATE_NOTE'];?></td>
                                            <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['VALEUR'];?></td>
                                            <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['NOM_JEU'];?></td>
                                        </tr>
                                    </table>
                            <?php
                                }
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="page-3">
            <div class="stats-wrap">
                <div class="title-grid">Le commentaire qui laisse le moins indifférent <br> (celui qui a reçu le plus de jugement)</div>
                <div class="stats-grid" style="margin-top: 9vh; border-radius: 2vh; overflow-y: scroll;">
                <table  style="width:100%; border-radius-bottom: 2vh; font-family: Montserrat; font-size: 3vh; background-color: rgb(0,0,0,.2); box-shadow: 0 0 4vh .1vh rgb(0,0,0,.4);">
                            <tr>
                                <th style="width:5%; font-family: Montserrat; font-size: 3vh;">nb</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Commentaire</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Date</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Note</th>
                            </tr>
                </table>
                <?php
                    $db = new PDO(
                        'mysql:host=localhost;dbname=mysql;charset=utf8',
                        'root',
                        ''
                        );
                    $rs = $db->prepare('SELECT * 
                                    FROM  NOTES 
                                    NATURAL JOIN (select count(*) NB, ID_NOTE from JUGEMENTS GROUP BY JUGEMENTS.ID_NOTE) A
                                    ORDER BY NB DESC;');
                   $rs->execute();
                   $themes = $rs->fetchAll();
                   foreach ($themes as $theme) {
                   ?>
                        <table style="width:100%">
                            <tr>
                                <td style="width: 5%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['NB'];?></td >
                                <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['COMMENTAIRE'];?></td>
                                <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['DATE_NOTE'];?></td>
                                <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['VALEUR'];?></td>
                            </tr>
                        </table>
                   <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="page-4" style="background-color:  rgb(40, 54, 61);">
            <div class="stats-wrap">
                <div class="title-grid">Les commentaires classés selon leurs indices de confiance</div>
                <div class="stats-grid" style="margin-top: 6vh; border-radius: 2vh; overflow-y: scroll;">
                <table  style="width:100%; border-radius-bottom: 2vh; font-family: Montserrat; font-size: 3vh; background-color: rgb(0,0,0,.2); box-shadow: 0 0 4vh .1vh rgb(0,0,0,.4);">
                            <tr>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Pseudonyme</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Jeu</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Commentaire</th>
                                <th style="width:20%; font-family: Montserrat; font-size: 3vh;">Indice de confiance</th>
                            </tr>
                </table>
                <?php
                    $db = new PDO(
                        'mysql:host=localhost;dbname=mysql;charset=utf8',
                        'root',
                        ''
                        );
                    $rs = $db->prepare("SELECT N.COMMENTAIRE, N.NOM_JEU, N.PSEUDONYME , (1+count(CASE WHEN J.AVIS = 'PERTINENT' THEN 1 END))/ (1+count(CASE WHEN J.AVIS = 'IMPERTINENT' THEN 1 END)) INDICE from NOTES N
                                        inner join JUGEMENTS J
                                        ON N.ID_NOTE = J.ID_NOTE
                                        GROUP BY N.COMMENTAIRE
                                        ORDER BY INDICE DESC;");
                   $rs->execute();
                   $themes = $rs->fetchAll();
                   foreach ($themes as $theme) {
                   ?>
                        <table style="width:100%;">
                            <tr>
                                <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['PSEUDONYME'];?></td>
                                <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['NOM_JEU'];?></td>
                                <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['COMMENTAIRE'];?></td>
                                <td style="width: 20%; font-family: Montserrat; font-size: 2.5vh;"><?php echo $theme['INDICE'];?></td>
                            </tr>
                   </table>
                   <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="app.js"></script>
</html>