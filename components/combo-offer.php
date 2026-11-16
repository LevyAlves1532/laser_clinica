<?php
    $label = $props['label'] ?? '';
    $title = $props['title'] ?? '';
    $description = $props['description'] ?? '';
    $oldPrice = $props['oldPrice'] ?? '';
    $price = $props['price'] ?? '';
    $button = $props['button'] ?? null;
?>

<div class="combo-offer">
    <div class="combo-offer__content">
        <span class="combo-offer__label">🔥 <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></span>
        <h3><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h3>
        <p><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
    </div>
    <div class="combo-offer__action">
        <div class="combo-offer__price">
            <del>De <?= htmlspecialchars($oldPrice, ENT_QUOTES, 'UTF-8') ?> / sessão</del>
            <strong><?= htmlspecialchars($price, ENT_QUOTES, 'UTF-8') ?><small>/sessão</small></strong>
        </div>
        <?php if ($button) {
            $button([
                'class' => 'combo-offer__button',
                'href' => '#agendamento',
                'preffixIcon' => '<span class="material-symbols-outlined" aria-hidden="true">chat</span>',
                'label' => 'Garantir Combo no WhatsApp',
            ]);
        } ?>
    </div>
</div>