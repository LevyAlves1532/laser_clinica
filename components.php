<?php

$folderComponents = './components/';

$components = [
    'cCardBanner' => 'card-banner.php',
    'cButton' => 'button.php',
];

foreach ($components as $compName => $compPath) {
    ${$compName} = function ($props = []) use ($folderComponents, $compPath) {
        include($folderComponents . $compPath);
    };
}
