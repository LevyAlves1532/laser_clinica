<?php
    $number = $props['number'] ?? '01';
    $icon = $props['icon'] ?? 'spa';
    $title = $props['title'] ?? '';
    $description = $props['description'] ?? '';
    $theme = $props['theme'] ?? 'blue';
?>

<article class="treatment-step treatment-step--<?= htmlspecialchars($theme, ENT_QUOTES, 'UTF-8') ?>">
    <div class="treatment-step__topline">
        <span class="treatment-step__number"><?= htmlspecialchars($number, ENT_QUOTES, 'UTF-8') ?></span>
        <span class="material-symbols-outlined treatment-step__icon" aria-hidden="true"><?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?></span>
    </div>
    <h3><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h3>
    <p><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
</article>