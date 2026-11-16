<?php
    $name = $props['name'] ?? '';
    $location = $props['location'] ?? '';
    $service = $props['service'] ?? '';
    $quote = $props['quote'] ?? '';
    $image = $props['image'] ?? '';
?>

<article class="testimonial-card">
    <div class="testimonial-card__rating" aria-label="Avaliação de 5 estrelas">★★★★★</div>
    <blockquote>“<?= htmlspecialchars($quote, ENT_QUOTES, 'UTF-8') ?>”</blockquote>
    <footer class="testimonial-card__author">
        <div class="testimonial-card__avatar">
            <?php if ($image) : ?>
                <img src="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ?>" alt="Foto de <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
            <?php else : ?>
                <span aria-hidden="true"><?= htmlspecialchars(mb_substr($name, 0, 1), ENT_QUOTES, 'UTF-8') ?></span>
            <?php endif; ?>
        </div>
        <div>
            <strong><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></strong>
            <span><?= htmlspecialchars($location, ENT_QUOTES, 'UTF-8') ?> · <?= htmlspecialchars($service, ENT_QUOTES, 'UTF-8') ?></span>
        </div>
    </footer>
</article>