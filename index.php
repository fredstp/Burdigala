<?php include("head.php"); ?>
<body>
    <?php include("header.php"); ?>
    <div class="container-fluid">
        <section id="carousel">

            <!-- Slider -->
            <div class="simple-slider page-slider">
                <div class="slider-wrapper">
                
                <!-- First slide -->
                <div class="slider-slide burdigala">
                    <h2 class="slider-title">Burgigala</h2>
                    <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consequat feugiat suscipit. </p>
                    <div class="button-action">
                        <a href="resa.php" title="Réserver cette croisière">Réserver</a>
                    </div>
                </div>

                <!-- Second slide -->
                <div class="slider-slide burdigala2">
                    <h2 class="slider-title">Burdigala II</h2>
                    <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consequat feugiat suscipit. </p>
                    <div class="button-action">
                        <a href="resa.php" title="Réserver cette croisière">Réserver</a>
                    </div>
                </div>

                <!-- Third slide -->
                <div class="slider-slide titanic2">
                    <h2 class="slider-title">Titanic II</h2>
                    <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consequat feugiat suscipit. </p>
                    <div class="button-action">
                        <a href="resa.php" title="Réserver cette croisière">Réserver</a>
                    </div>
                </div>

                <!-- Fourth slide -->
                <div class="slider-slide aquitania">
                    <h2 class="slider-title">Aquitania</h2>
                    <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consequat feugiat suscipit. </p>
                    <div class="button-action">
                        <a href="resa.php" title="Réserver cette croisière">Réserver</a>
                    </div>
                </div>
                </div>

                <!--Pagination (Not required)-->
                <div class="slider-pagination"></div>

                <!-- Buttons (Not required) -->
                <div class="slider-btn slider-btn-prev"></div>
                <div class="slider-btn slider-btn-next"></div> 
            </div>
            <!-- /Slider -->

            </section>
    </div>

    <div class="container">
        <section id="team">
            <div class="team-description">
                <h2>L'équipe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consequat feugiat suscipit. Proin consequat est nunc, sodales iaculis ipsum aliquet tristique. Aliquam pharetra orci nulla, et rutrum nunc ultricies a. Pellentesque congue nisl porta, egestas neque a, vehicula purus. Vivamus finibus, magna ut scelerisque condimentum, nunc arcu imperdiet magna, at tristique lorem magna sit amet felis. Curabitur purus nisl, blandit sit amet aliquet in, tristique sit amet ligula. </p>
            </div>
            <div class="portraits">
                <div class="medal">
                    <img src="img/christelle.png" class="img-medal" alt="Christelle Savoca">
                    <h4>Christelle Savoca</h4>
                    <p>Capitaine</p>
                </div>
                <div class="medal">
                    <img src="img/fred.png" class="img-medal" alt="Frédéric Réal">
                    <h4>Frédéric Réal</h4>
                    <p>Matelot</p>
                </div>
                <div class="medal">
                    <img src="img/benoit.png" class="img-medal" alt="Benoit Deligny">
                    <h4>Benoit Deligny</h4>
                    <p>Cannonier</p>
                </div>
                <div class="medal">
                    <img src="img/thomas.png" class="img-medal" alt="Thomas Lachieze">
                    <h4>Thomas Lachieze</h4>
                    <p>Mousse</p>
                </div>
            </div>
        </section>
    </div>

    <div class="container-fluid bg-blue">
        <div class="container">
            <section id="find-us">
                <div class="find-us-description">
                    <h2 class="padd">Nous trouver</h2>
                    <div class="find-us-infos">
                        <div class="find-us-item">
                            <h3>Horaires</h3>
                            <p>Lundi - Vendredi :</p>
                            <p>9h > 12h30 et 14h > 17h30</p>
                        </div>
                        <div class="find-us-item">
                            <h3>Adresse</h3>
                            <p>Ponton "Croisières Burdigala"</p>
                            <p>Face au 7 quai de Queyries, 33100 Bordeaux</p>
                        </div>
                        <div class="find-us-item">
                            <h3>Téléphone</h3>
                            <p>Téléphone : 05 56 49 36 88</p>
                        </div>
                    </div>
                    <div class="button-action">
                        <a href="contact.php" title="Contactez nous">Nous contacter</a>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.04158910111!2d-0.5652332486576435!3d44.841086382721464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527d4c0882c9d%3A0x20893706f0a156a!2sCroisi%C3%A8res%20Burdigala!5e0!3m2!1sfr!2sfr!4v1583834914915!5m2!1sfr!2sfr" class="maps" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </section>
        </div>
    </div>
    <?php include ("footer.php"); ?>
    <script src="slider.js"></script>
    <script src="dist/simpleSlider.min.js"></script>    
</body>
</html>