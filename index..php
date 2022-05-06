<?php

include("Titulaire.php");
include("Compte.php");

// création des objets titulaire, on instancie la classe titulaire pour créer un objet
$t1 = new Titulaire("Doe", "John", "1970-09-15", "Mulhouse");
$t2 = new Titulaire("Gibello", "Virgile", "1980-07-20", "Strasbourg");
$t3 = new Titulaire ("Smail", "Stéphane", "10-05-1980", "Colmar");

// création des objets comptes, on instancie la classe compte pour créer un objet
$c1 = new Compte("livret A", 1500, "€", $t1);
$c2 = new Compte("compte courant", 2500, "€", $t2);
$c3 = new Compte("compte courant", 3700, "€", $t3);



echo "<br>";
echo $c1;
echo "<br>";
echo "<br>";

echo $c2;
echo "<br>";

echo "<br>";
$c1->debiterCompte(100);
echo $c1;
echo "<br>";

echo "<br>";
$c2->crediterCompte(100);
echo $c2;
echo "<br>";

echo "<br>";
echo $t1->getAfficherCompteBancaire();
echo "<br>";
echo $t2->getAfficherCompteBancaire();
echo "<br>";

echo "<br>";
$c2->virement($c1, 500);
echo "<br>";

echo "<br>";
echo $c1;
echo "<br>";
echo "<br>";
echo $c2;
echo "<br>";
