<section class="treatment" id="como-funciona" aria-labelledby="treatment-title">
    <div class="treatment__container">
        <header class="treatment__heading">
            <span class="section-label">Passo a passo</span>
            <h2 id="treatment-title">Como funciona o seu tratamento</h2>
            <p>Um protocolo científico, ético e seguro do primeiro contato à conquista da sua<br class="treatment__break"> pele definitiva.</p>
        </header>

        <div class="treatment__grid">
            <?php $cTreatmentStep([
                'number' => '01',
                'icon' => 'clinical_notes',
                'title' => 'Avaliação Gratuita',
                'description' => 'Análise detalhada do fototipo da pele, espessura e densidade do pelo, além de checagem do histórico de saúde dermatológico.',
            ]); ?>
            <?php $cTreatmentStep([
                'number' => '02',
                'icon' => 'tune',
                'title' => 'Protocolo Sob Medida',
                'description' => 'Calibração milimétrica da potência em Joules e duração do pulso de acordo com a sensibilidade específica de cada área.',
            ]); ?>
            <?php $cTreatmentStep([
                'number' => '03',
                'icon' => 'ac_unit',
                'title' => 'Sessão Confortável',
                'description' => 'Aplicação dinâmica com gel condutor e contato subzero (-5°C) que anestesia temporariamente a epiderme durante o disparo.',
            ]); ?>
            <?php $cTreatmentStep([
                'number' => '04',
                'icon' => 'task_alt',
                'title' => 'Evolução & Resultado',
                'description' => 'Os fios caem naturalmente entre 10 e 15 dias após cada sessão, com intervalos regulares programados para máxima durabilidade.',
                'theme' => 'green',
            ]); ?>
        </div>

        <aside class="treatment__notice">
            <span class="material-symbols-outlined" aria-hidden="true">info</span>
            <p><strong>Nota de transparência:</strong> O número exato de sessões varia conforme a região corporal, densidade dos fios e aspectos hormonais individuais (em média 8 a 10 sessões para a eliminação definitiva de até 90% dos pelos).</p>
        </aside>
    </div>
</section>