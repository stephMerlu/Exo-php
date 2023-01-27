<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $var = 5;
    echo "$var";

    $word = "c'est ";
    $word2 = "vie.";
    $word3 = "Simplon";
    $word4 = "la";
    echo $word3 . $word . $word4 . $word2;
    echo "$word3 $word $word4 $word2";

    $variable1=12;
    $variable2=4;
    echo $variable1 / $variable2;

    $var1="clement";
    $var2= "extrapolation";
    echo strlen($var1) + strlen($var2);
    echo strlen($var1 . $var2);

    $maitrise_du_code = 1000;
    if ($maitrise_du_code >= 1000) {
        echo ("je maitrise tellement le code maintenant");
    }
         
    $chiffre_fetiche_sandrine = 7;
    $chiffre_fetiche_xavier = 130;
    $chiffre_fetiche_andre = 8;
    $temp;
    $temp = $chiffre_fetiche_sandrine;
    $chiffre_fetiche_sandrine = $chiffre_fetiche_xavier;
    $chiffre_fetiche_xavier = $temp;
    echo $chiffre_fetiche_sandrine;
    echo $chiffre_fetiche_xavier;
     $chiffre_fetiche_sandrine -= ($chiffre_fetiche_xavier.$chiffre_fetiche_andre);
    if($chiffre_fetiche_sandrine > 50)
    echo $chiffre_fetiche_sandrine;

    $compte = -100;
    if ($compte > 0) :
        echo "bravo, vous êtes un bon gestionnaire";
    elseif ($compte <= 0) :
        echo "Vous faites vraiment n'importe quoi avec votre argent";
    endif;    

    $vent = 40;
    $houle = 25;
    $cadence_vague = 15;
    if ($vent > 30 && $houle <= 20 && $cadence_vague >=10){
        echo"tu peux aller surfer";
    } else if ($vent < 30 && $houle <= 30 && $cadence_vague <=8) {
        echo"tu peux pas aller surfer";
    } else {
        echo "tu rentres à la maison";
    }

    $nombre_1 = 88;
    $nombre_2 = 7;
    $nombre_3 = 23;
    $nombre_4 = 5;
    $nombre_5 = 45;
    $nombre_6 = 17;

    function isMultiple($nbr1, $nbr2) {
        if($nbr1 % $nbr2 == 0)
        {
            return $nbr1 * -1;
        } else {
            return $nbr1;
        }
        // return $nbr1 % $nbs2 == 0;
    }



    ?>
</body>
</html>