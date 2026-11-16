<?php
    $icon = $props['icon'] ?? 'spa';
    $title = $props['title'] ?? '';
    $description = $props['description'] ?? '';
?>

<article class="technology-card">
    <div class="technology-card__icon" aria-hidden="true">
        <span class="material-symbols-outlined"><?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?></span>
    </div>
    <div>
        <h3><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h3>
        <p><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
    </div>
</article>