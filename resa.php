<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resa.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/simpleSlider.min.css">
    <link rel="stylesheet" href="css-carousel/theme.min.css">
    <script src="burger.js"></script>

    <title>My Burdigala</title>
</head>
<body>
<?php include("header.php"); ?>
    <div class="container">
        <main>
            <form class="contact_form" method="GET">
                <div class="align_center">
                    <h3>Vos informations</h3>
                    <div class="ID_user">
                        <input class="input_ID" type="text" name="name" id="GET-name" placeholder="Your last-name" required>
                        <input class="input_ID" type="text" name="firstName" id="GET-firstname" placeholder="Your first-name">
                    </div>
                    <div class="contact_user">
                        <input class="input_mail" type="email" name="email" id="GET_email" placeholder="email@email.com" required>
                    </div>
                    <h3>Croisière</h3>
                    <div class="croisiere">
                        <label>Choix de la croisiere:</label>
                        <select>
                            <option value="croisiere_1">Bordeaux - Royan</option>
                            <option value="croisiere_2">Bordeaux - Blaye</option>
                            <option value="croisiere_3">Transatlantique</option>
                        </select>
                    </div>
                    <div class="select_nombre">
                        <label>Nombre de personnes:</label>
                        <select name="nombre_personne" required>
                            <option value="">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6+</option>
                        </select>
                    </div>
                    <div class="calendar">
                        <label>Date: </label>
                        <input type="date" name="date_resa" min="2019-01-01" max="2025-12-31" required>
                        <select name="journey" id="journey" required>
                            <option value="">Départ 9h</option>
                            <option>Départ 11h</option>
                            <option>Départ 13h</option>
                            <option>Départ 15h</option>
                        </select>
                    </div>
                    <div class="reservation">
                        <a href="#"><input type="button" value="Réserver"></a>
                    </div>
                </div>
            </form>
            <section class="block_appear">
                <div class="croisiere_matin">
                    <div class="description">
                        <h2>Croisière Transatlantique</h2>
                        <p>La légendaire croisière transatlantique a toujours été prisée par les marins les plus célèbres.</p>
                        <p>Burdigala propose aujourd'hui cette fabuleuse épopée maritime pour des séjours de plus d’une semaine lors d'une expérience unique.</p>
                    </div>
                    <div class="img_croisiere">
                        <img src="img/resort-pool.jpg" alt="image d'un beau bateau">
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php include ("footer.php"); ?>
</body>
</html>