<?php
    $id = $props['id'] ?? 'faq-item';
    $question = $props['question'] ?? '';
    $answer = $props['answer'] ?? '';
?>

<article class="faq-item" data-faq-item>
    <h3 class="faq-item__question">
        <button
            class="faq-item__trigger"
            type="button"
            aria-expanded="false"
            aria-controls="<?= htmlspecialchars($id, ENT_QUOTES, 'UTF-8') ?>"
            data-faq-trigger
        >
            <span><?= htmlspecialchars($question, ENT_QUOTES, 'UTF-8') ?></span>
            <span class="material-symbols-outlined" aria-hidden="true">expand_more</span>
        </button>
    </h3>
    <div class="faq-item__answer" id="<?= htmlspecialchars($id, ENT_QUOTES, 'UTF-8') ?>" role="region" hidden data-faq-answer>
        <p><?= htmlspecialchars($answer, ENT_QUOTES, 'UTF-8') ?></p>
    </div>
</article>