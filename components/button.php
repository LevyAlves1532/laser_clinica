<?php 
    $label = $props['label'] ?? '';
    $preffixIcon = $props['preffixIcon'] ?? '';
    $class = $props['class'] ?? 'hero__cta';
    $href = $props['href'] ?? '#agendamento';
    $target = $props['target'] ?? '';
    $attributes = $props['attributes'] ?? '';
?>

<a class="<?= htmlspecialchars($class, ENT_QUOTES, 'UTF-8') ?>"
    href="<?= htmlspecialchars($href, ENT_QUOTES, 'UTF-8') ?>"
    <?= $target ? 'target="' . htmlspecialchars($target, ENT_QUOTES, 'UTF-8') . '" rel="noopener noreferrer"' : '' ?>
    <?= $attributes ?>
>
    <?= $preffixIcon ?>
    <?= $label ?>
</a>
