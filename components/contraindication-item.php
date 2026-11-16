<?php
    $label = $props['label'] ?? '';
?>

<li class="contraindication-item">
    <span class="material-symbols-outlined" aria-hidden="true">cancel</span>
    <span><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></span>
</li>