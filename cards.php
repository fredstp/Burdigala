<?php
$cards = [
            [
                'image'           => 'burdigala-I.jpg',
                'title'           => 'Burdigala I', 
                'description'     => 'Bordeaux - Royan Laissez vous porter et glisser au fil de l\'eau pour découvrir Bordeaux et ses vignobles... Visite reposante par excellence, la croisière saura vous offrir calme et détente pour une visite en bateau enrichissante. Bénéficiez d\'un point de vue inédit et laissez vous bercer par la Garonne. A la journée ou pour une demi-journée, réservez votre visite guidée !',
            ],
            [
                'image'           => 'burdigala-II.jpg',
                'title'           => 'Burdigala II', 
                'description'     => 'Bordeaux - Blaye ',
            ],
            [
                'image'          => 'titanic-II.jpg',
                'title'          => 'Titanic II', 
                'description'    => 'Transatlantic,la croisière transatlantique est un voyage hors du commun et une traversée historique. Durant toute la première moitié du XXe siècle, la transatlantique n’était pas synonyme de détente et de loisirs sur des « hôtels flottants » mais de liaison maritime courante où le paquebot était un moyen de transport. Lorsqu’on évoque la transatlantique, on pense immédiatement à un itinéraire, celui qui relie l\'Europe aux Etats-Unis : la liaison transatlantique la plus célèbre étant Bordeaux/New York.',
            ],
            
   

        ];
?>

<?php foreach ($cards as $card) : ?>
    <div class="cont">
        <div class="container">
            <div class="card_Circuit_Pair">
                <div class="card_Circuit_Pair_img">
                    <img class="boat" src="./img/<?=$card['image'] ?>" alt="<?=$card['title'] ?>">
                </div>
                    <div class="card_Circuit_Pair_Description">
                        <div class="card_Circuit_Pair_Description_Text">
                            <h2><?=$card['title'] ?></h2>
                            <p><?=$card['description']?></p>
                        </div>
                        <div class="card_Circuit_Pair_Description_button">
                            <a href="resa.php">
                            <button class="button"  type="button"> Réserver </button></a>
                        </div>   
                    </div>       
            </div>  
        </div>
    </div>
<?php endforeach ?>