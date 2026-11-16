<section class="evolution" id="resultados" aria-labelledby="evolution-title">
    <div class="evolution__container">
        <header class="evolution__heading">
            <span class="section-label">Evolução clínica</span>
            <h2 id="evolution-title">Acompanhe a transformação real da sua pele</h2>
            <p>Veja como a tecnologia médica atua sessão por sessão reduzindo a<br class="evolution__break"> quantidade de fios e clareando manchas por atrito.</p>
        </header>

        <div class="evolution__grid">
            <?php $cEvolutionCard([
                'image' => 'https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?auto=format&amp;fit=crop&amp;w=700&amp;q=85',
                'imageAlt' => 'Pele com pelos encravados antes do tratamento',
                'stage' => '1ª Sessão: Diagnóstico',
                'stageTheme' => 'dark',
                'title' => 'Queda Inicial dos Pelos',
                'description' => 'Redução de até 20% do volume inicial de fios. Primeiros sinais de alívio da irritação e pelos encravados.',
            ]); ?>
            <?php $cEvolutionCard([
                'image' => 'https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&amp;fit=crop&amp;w=700&amp;q=85',
                'imageAlt' => 'Comparação da evolução da pele após o tratamento',
                'stage' => '4ª Sessão: Afinamento',
                'title' => 'Falhas Expressivas',
                'description' => 'Grande espaçamento entre os crescimentos, fios residuais nascendo extremamente finos e pele com tom uniforme.',
            ]); ?>
            <?php $cEvolutionCard([
                'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&amp;fit=crop&amp;w=700&amp;q=85',
                'imageAlt' => 'Pernas com pele lisa após o tratamento',
                'stage' => '8ª Sessão: Pele Definitiva',
                'stageTheme' => 'green',
                'title' => 'Até 90% sem Pelos',
                'description' => 'Eliminação praticamente total da foliculite, toque sedoso permanente e necessidade apenas de manutenção anual.',
            ]); ?>
        </div>

        <aside class="evolution__notice">
            <strong>Aviso importante:</strong>
            <span>Os resultados clínicos podem variar conforme características hormonais individuais, cor do pelo, fototipo e adesão regular aos intervalos preconizados. Casos ilustrativos de histórico de atendimento sob protocolo ético.</span>
        </aside>
    </div>
</section>