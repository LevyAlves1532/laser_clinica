<?php
    $icon = $props['icon'] ?? 'spa';
    $title = $props['title'] ?? '';
    $description = $props['description'] ?? '';
    $theme = $props['theme'] ?? 'blue';
?>

<article class="differential-card differential-card--<?= htmlspecialchars($theme, ENT_QUOTES, 'UTF-8') ?>">
    <div class="differential-card__icon" aria-hidden="true">
        <span class="material-symbols-outlined"><?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?></span>
    </div>
    <h3><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h3>
    <p><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
</article>