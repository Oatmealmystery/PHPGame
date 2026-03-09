<?php

$win = "Je wint! De prijs was achter deze deur!";
$lose = "Je verliest! De prijs was achter een andere deur!";


printf("Welkom bij de 3 deuren spel!\n\n");
printf("Je hebt een keuze uit 3 deuren, achter 1 deur staat de prijs, achter de andere 2 staat niks.\n");
printf("Kies tussen deur 1, 2 of 3 (Typ 1, 2 of 3 om de dueren te kiezen):\n");

$userChoice = readline("");

if ($userChoice == 1) {
    printf("Je hebt deur 1 gekozen, ik zal je hier helpen,\n");
    printf("achter deur 2 staat niks, dus de prijs staat achter deur 1 of deur 3.\n");
    printf("Wil je bij deur 1 blijven of wil je wisselen naar deur 3?\n");
    printf("Kies uit: Ja, ik wil wisselen of Nee, ik blijf bij deur 1 (Typ ja of nee)\n");

 $userChoice = readline("");

 if ($userChoice == "Ja") {
    printf($lose);
 }

 if ($userChoice == "nee") {
    printf($win);
 }
}

$userChoice = readline("");

if ($userChoice == 2) {
    printf($lose);
}

if ($userChoice == 3) {
    printf("Je hebt deur 3 gekozen, ik zal je hier helpen,\n");
    printf("achter deur 2 staat niks, dus de prijs staat achter deur 1 of deur 3.\n");
    printf("Wil je bij deur 3 blijven of wil je wisselen naar deur 1?\n");
    printf("Kies uit: Ja, ik wil wisselen of Nee, ik blijf bij deur 3 (Typ ja of nee)\n");

 $userChoice = readline("");

 if ($userChoice == "Ja") {
    printf($win);
 }

 if ($userChoice == "nee") {
    printf($lose);
 }
}