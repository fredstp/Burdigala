<?php include_once ("head.php"); ?>
<body>
<?php include_once ("header.php"); ?>
    <main>
        <h1>Nous contacter</h1>
        <form action="controller.php" method="POST">
            <div class="ID_user">
                <input type="text" name="contactName" id="name" placeholder="Your last-name" required>
                <input type="text" name="contactFirstname" id="firstname" placeholder="Your first-name">
            </div>
            <div class="contact_user">
                <input type="tel" name="contactPhone" id="phone" placeholder="06.XX.XX.XX.XX">
                <input type="email" name="contactEmail" id="email" placeholder="email@email.com" required>
            </div>
            <div class="message">
                <textarea name="contactMessage" id="message" cols="50" rows="10" placeholder="Your message" required></textarea>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="capcha" name="no_robot" required>
                <label for="capcha">I'm not a Russian robot !</label>
            </div>
            <div class="button">
                <a href="#"><input type="submit" value="Envoyer"></a>
            </div>
        </form>
     
    </main>
    <?php include_once ("footer.php"); ?>
</body>
</html>