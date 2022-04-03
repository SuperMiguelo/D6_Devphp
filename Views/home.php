<?php
include_once 'includes/header.php';
// Mon code de la page d'accueil

// Exemple
echo '<div class="animal-cards">';
$animals = [['type' => 'Lion'], ['type' => 'Monkey'], ['type' => 'Dauphin']];
foreach($animals as $id_animal => $animal){
    include 'templates/animal-card.php';
}
echo '</div>';
// Fin exemple

include_once 'includes/footer.php';