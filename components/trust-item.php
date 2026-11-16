<?php
    $label = $props['label'] ?? '';
?>

<li class="trust-item">
    <span class="material-symbols-outlined" aria-hidden="true">check</span>
    <span><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></span>
</li>