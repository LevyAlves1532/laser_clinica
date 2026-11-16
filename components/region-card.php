<?php
    $tag = $props['tag'] ?? '';
    $tagTheme = $props['tagTheme'] ?? 'blue';
    $duration = $props['duration'] ?? '';
    $title = $props['title'] ?? '';
    $description = $props['description'] ?? '';
    $price = $props['price'] ?? '';
    $buttonLabel = $props['buttonLabel'] ?? 'Agendar no WhatsApp';
    $button = $props['button'] ?? null;
?>

<article class="region-card">
    <div class="region-card__meta">
        <span class="region-card__tag region-card__tag--<?= htmlspecialchars($tagTheme, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></span>
        <span class="region-card__duration"><?= htmlspecialchars($duration, ENT_QUOTES, 'UTF-8') ?></span>
    </div>
    <h3><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h3>
    <p><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
    <div class="region-card__footer">
        <span>A partir de</span>
        <strong><?= htmlspecialchars($price, ENT_QUOTES, 'UTF-8') ?><small>/mês</small></strong>
    </div>
    <?php if ($button) {
        $button([
            'class' => 'region-card__button',
            'href' => '#agendamento',
            'label' => $buttonLabel,
        ]);
    } ?>
</article>