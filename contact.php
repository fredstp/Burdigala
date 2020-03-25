<!DOCTYPE html>
<html lang="fr">
<?php include("head.php"); ?>
<body>
<?php include("header.php"); ?>
    <main>
        <h1>Nous contacter</h1>
        <form action="" method="GET">
            <div class="ID_user">
                <input type="text" name="name" id="GET-name" placeholder="Your last-name" required>
                <input type="text" name="firstName" id="GET-firstname" placeholder="Your first-name">
            </div>
            <div class="contact_user">
                <input type="tel" name="phoneNumber" id="GET-phone" placeholder="06.XX.XX.XX.XX">
                <input type="email" name="email" id="GET_email" placeholder="email@email.com" required>
            </div>
            <div class="message">
                <textarea name="message" id="GET-message" cols="50" rows="10" placeholder="Your message" required></textarea>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="capcha" name="no_robot" required>
                <label for="capcha">I'm not a Russian robot !</label>
            </div>
            <div class="button">
                <a href="#"><input type="button" value="Envoyer"></a>
            </div>
        </form>
    </main>
    <?php include ("footer.php"); ?>
</body>
</html>