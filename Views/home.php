<?php
include_once 'includes/header.php';



echo '<div class="animal-cards">';
$animals = [['type' => 'Lion'], ['type' => 'Singe'], ['type' => 'Dauphin']];
foreach($animals as $id_animal => $animal){
    include 'templates/animal-card.php';
}
echo '</div>';


include_once 'includes/footer.php';