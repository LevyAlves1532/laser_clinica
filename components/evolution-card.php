<?php
    $image = $props['image'] ?? '';
    $imageAlt = $props['imageAlt'] ?? '';
    $stage = $props['stage'] ?? '';
    $stageTheme = $props['stageTheme'] ?? 'blue';
    $title = $props['title'] ?? '';
    $description = $props['description'] ?? '';
?>

<article class="evolution-card">
    <div class="evolution-card__media">
        <img src="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($imageAlt, ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
        <span class="evolution-card__stage evolution-card__stage--<?= htmlspecialchars($stageTheme, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($stage, ENT_QUOTES, 'UTF-8') ?></span>
    </div>
    <div class="evolution-card__content">
        <h3><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h3>
        <p><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
    </div>
</article>