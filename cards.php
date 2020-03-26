<?php
$cards = [
            [
                'image'  => 'burdigala-I.jpg',
                'title'   => 'Burdigala I', 
                'description'    => 'Bordeaux - Royan Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione capitis, et rursum, cum omnia tela undique esse intenta in patriam viderem, subire coegit atque excipere unum pro universis',
            ],
            [
                'image'  => 'burdigala-II.jpg',
                'title'   => 'Burdigala II', 
                'description'    => 'Bordeaux - Royan Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione capitis, et rursum, cum omnia tela undique esse intenta in patriam viderem, subire coegit atque excipere unum pro universis',
            ],
            [
                'image'  => 'titanic-II.jpg',
                'title'   => 'Titanic II', 
                'description'    => 'Bordeaux - Royan Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione capitis, et rursum, cum omnia tela undique esse intenta in patriam viderem, subire coegit atque excipere unum pro universis',
            ],
            
   

        ];
foreach ($cards as $card) {
     echo '<div class="cont">';
     echo   '<div class="container">';
     echo       '<div class="card_Circuit_Pair">';
     echo         '<div class="card_Circuit_Pair_img">';
     echo              '<img class="boat" src="./img/'. $card['image'] . '" alt="' . $card['title'] . '">';
     echo          '</div>';
     echo           '<div class="card_Circuit_Pair_Description">';
     echo               '<div class="card_Circuit_Pair_Description_Text">';
     echo                 '<h2>' . $card['title'] . '</h2>';
     echo                   '<p>' . $card['description'] . '</p>';
     echo              '</div>';
     echo              '<div class="card_Circuit_Pair_Description_button">';
     echo                   '<a href="resa.html">';
     echo                  '<button class="button"  type="button"> Réserver </button></a>';
     echo               '</div>';
     echo          '</div>';
     echo      '</div>';
};
?>