<section class="cta-section" id="agendamento" aria-labelledby="cta-title">
    <div class="cta-section__container">
        <span class="cta-section__eyebrow">
            <span class="material-symbols-outlined" aria-hidden="true">alarm</span>
            Últimas vagas com condição de avaliação gratuita esta semana
        </span>

        <h2 id="cta-title">Pronta para sentir a liberdade<br class="cta-section__break"> de uma pele lisa todos os dias?</h2>
        <p>Clique no botão abaixo e fale direto com a nossa equipe biomédica no WhatsApp para tirar<br class="cta-section__break"> dúvidas e reservar seu horário exclusivo sem qualquer compromisso.</p>

        <?php $cButton([
            'class' => 'cta-section__button',
            'href' => '#whatsapp',
            'preffixIcon' => '<span class="material-symbols-outlined" aria-hidden="true">chat</span>',
            'label' => 'Falar com Especialista no WhatsApp',
        ]); ?>

        <ul class="trust-list" aria-label="Vantagens do atendimento">
            <?php $cTrustItem(['label' => 'Atendimento humanizado']); ?>
            <?php $cTrustItem(['label' => 'Sem custo de consulta']); ?>
            <?php $cTrustItem(['label' => 'Resposta em 2 min']); ?>
        </ul>
    </div>
</section>