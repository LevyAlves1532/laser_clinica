<?php

$folderComponents = './components/';

$components = [
    'cCardBanner' => 'card-banner.php',
    'cDifferentialCard' => 'differential-card.php',
    'cTreatmentStep' => 'treatment-step.php',
    'cRegionCard' => 'region-card.php',
    'cComboOffer' => 'combo-offer.php',
    'cEvolutionCard' => 'evolution-card.php',
    'cButton' => 'button.php',
];

foreach ($components as $compName => $compPath) {
    ${$compName} = function ($props = []) use ($folderComponents, $compPath) {
        include($folderComponents . $compPath);
    };
}
