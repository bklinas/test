<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="styles.css"/>
    <title>Exemples PHP en HTML</title>
    <link rel="shortcut icon" type="image/jpg" href="icon.jpg"/>
    <style>
        ul {
            list-style-type: none;
            display: flex;
        }
        li {
            margin-right: 10px;
        }
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
<h1> TD5 : PHP - introduction aux pages dynamiques </h1>
<hr/>
<h2> Exercice 1 </h2>
<!-- Deuxième exemple: Afficher la date du serveur -->
<?php
echo date('l jS \of F Y h:i:s A ');
?>
<hr/>
<!-- Premier exemple: Afficher une liste avec une fonction PHP -->
<h2> Exercice 2 </h2>
<?php
function hello(int $n): string {
    $res = "<ul>";
    for ($i = 0; $i < $n; $i++) {
        $res .= "<li> hello numéro " . ($i + 1) . "</li>";
    }
    $res .= "</ul>";
    return $res;
}
echo hello(20); 
?>
<h2> Exercice 3 </h2>
<!-- Troisième exemple: Afficher des conversions hexadécimales -->
<?php
$decimal1 = hexdec('41'); 
$caractere1 = chr($decimal1); 

echo "0x41 = $decimal1 = '$caractere1'"; 

$decimal2 = hexdec('2B'); 
$caractere2 = chr($decimal2); 

echo "0x2B = $decimal2 = '$caractere2'";
?>
<h2> Exercice 4 </h2>
<!-- Quatrième exemple: Afficher une liste horizontale de nombres hexadécimaux -->
<?php
function construireListe(): string {
    $liste = "<ul>";
    for ($i = 0; $i <= 15; $i++) {
        $hex = dechex($i);
        $liste .= "<li>$hex</li>";
    }
    $liste .= "</ul>";
    return $liste;
}
echo construireListe();
?>
<hr/>
<h2> Exercice 5 </h2>
<!-- Cinquième exemple: Afficher un tableau de conversions numériques -->
<?php
function construireTableau(): string {
    $tableau = "<table>
                    <tr>
                        <th>Décimal</th>
                        <th>Binaire</th>
                        <th>Octal</th>
                        <th>Hexadécimal</th>
                    </tr>";

    for ($i = 0; $i <= 17; $i++) {
        $decimal = sprintf('%02d', $i);
        $binaire = sprintf('%08b', $i);
        $octal = sprintf('%02o', $i);
        $hexadecimal = sprintf('%02x', $i);

        $tableau .= "<tr>
                        <td>$decimal</td>
                        <td>$binaire</td>
                        <td>$octal</td>
                        <td>$hexadecimal</td>
                    </tr>";
    }

    $tableau .= "</table>";
    return $tableau;
}
echo construireTableau();
?>
<?php
$nom = "Boukili Inas\t";
echo  $nom;
$when = "2023/2024\t";
echo  $when;
$what= "TD5 de développement web\t";
echo  $what;
$where = "CYU CERGY PARIS UNIVERITE\t";
echo  $where;
$why = "Premier fichier php\t";
echo  $why;
?>
</body>
</html>
