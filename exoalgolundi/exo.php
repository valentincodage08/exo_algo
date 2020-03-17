<?php 

// exo 1

$a1 = 3;
$b1 = 5;

if ($a1 > $b1) {

    echo "1 : Le nombre le plus grand est {$a1}";
}
    elseif ($a1 == $b1) {

        echo "1 : Les nombres sont égaux";
    }
    else {

        echo "1 : Le nombre le plus grand est {$b1}";
    }



// exo 2

$a2 = 3;
$b2 = 5;

if ($a1 < $b1) {

    echo "<br>2 : Le nombre le plus petit est {$a2}";
    }

        else {

        echo "<br>2 : Le nombre le plus petit est {$b2}";
        }

// exo 3

$a3 = 8;
$b3 = 23;
$c3 = 0;

$c3 = $b3;
$b3 = $a3;
$a3 = $c3;


echo "<br>3 : $b3 est maintenant égal à 8 et $a3 égal à 23.";

// exo 4

$a4 = 5;
$b4 = 8;
$result4 = $a4+$b4;

echo "<br>4 : $a4+$b4 = $result4";

// exo 5

$rand5 = rand(1, 100);

echo "<br>5 : Le nombre aléatoire entre 1 et 100 est : $rand5";

// exo 6

$rand6 = rand(5, 10);

echo "<br>6 : Le nombre aléatoire entre 5 et 10 est : $rand6";

// exo 7

$a7 = 12;
$b7 = 35;
$result7 = $a7+$b7;

function addition($a7,$b7,$result7) {
    echo "<br>7 : La somme de $a7 et $b7 est $result7";
}

addition($a7,$b7,$result7);

// exo 8 

$rand8 = rand(1, 100);

if ($rand8<50) {

    echo "<br>8 : $rand8, donc je suis nul";
    }

        else {

        echo "<br>8 : $rand8, donc je suis bon";
        }

// exo 9

$x9 = rand(1, 5);

function perruche($x9) {

    if ($x9 == 1) {
        echo "<br>9 : AAAA ( 1 )";
    }

        elseif ($x9 == 2) {
            echo "<br>9 : BBBB ( 2 )";
        }

        elseif ($x9 == 3) {
            echo "<br>9 : CCCC ( 3 )";
        }

        elseif ($x9 == 4) {
            echo "<br>9 : DDDD ( 4 )";
        }

        else {
            echo "<br>9 : Je suis une perruche";
        }

}

perruche($x9);

// exo 9 bis

$rand9bis = rand(1, 5);

switch ($rand9bis) {

    case 1:
        echo "<br>9 bis : AAAA ( 1 )";
    break;

    case 2:
        echo "<br>9 bis : BBBB ( 2 )";
    break;

    case 3:
        echo "<br>9 bis : CCCC ( 3 )";
    break;

    case 4:
        echo "<br>9 bis : DDDD ( 4 )";
    break;

    case 5:
        echo "<br>9 bis : Je suis une perruche";
    break;
}

// exo 10

$array10 = [
    0 => rand(1,10000),
    1 => rand(1,10000),
    2 => rand(1,10000),
    3 => rand(1,10000),
    4 => rand(1,10000),
    5 => rand(1,10000),
    6 => rand(1,10000),
    7 => rand(1,10000),
    8 => rand(1,10000),
    9 => rand(1,10000)
];


echo "<br> 10 : index 0 = $array10[0]";
echo "<br> 10 : index 1 = $array10[1]";
echo "<br> 10 : index 2 = $array10[2]";
echo "<br> 10 : index 3 = $array10[3]";
echo "<br> 10 : index 4 = $array10[4]";
echo "<br> 10 : index 5 = $array10[5]";
echo "<br> 10 : index 6 = $array10[6]";
echo "<br> 10 : index 7 = $array10[7]";
echo "<br> 10 : index 8 = $array10[8]";
echo "<br> 10 : index 9 = $array10[9]";

// exo 11

$array11 = [];

array_push($array11, rand(1,10000), rand(1,10000), rand(1,10000), rand(1,10000), rand(1,10000), rand(1,10000), rand(1,10000), rand(1,10000), rand(1,10000), rand(1,10000));

// exo 12

echo "<br> 12 : index 0 = $array11[0]";
echo "<br> 12 : index 1 = $array11[1]";
echo "<br> 12 : index 2 = $array11[2]";
echo "<br> 12 : index 3 = $array11[3]";
echo "<br> 12 : index 4 = $array11[4]";
echo "<br> 12 : index 5 = $array11[5]";
echo "<br> 12 : index 6 = $array11[6]";
echo "<br> 12 : index 7 = $array11[7]";
echo "<br> 12 : index 8 = $array11[8]";
echo "<br> 12 : index 9 = $array11[9]";

?>