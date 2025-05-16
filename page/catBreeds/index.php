<?php
    require_once '../../utils/CatData.util.php';
    require_once '../../components/templates/catcard.component.php';
    include '../../components/header.component.php';

    $breeds = getAllCatBreeds();

    echo "<main>";
    foreach ($breeds as $breed => $details) {
        renderCatCard($breed, $details);
    }
    echo "</main>";