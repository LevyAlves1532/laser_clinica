<section class="safety" id="seguranca" aria-labelledby="safety-title">
    <div class="safety__container">
        <div class="safety__content">
            <header class="safety__heading">
                <span class="section-label">Rigor técnico</span>
                <h2 id="safety-title">Dermatologia Avançada &amp; Biossegurança Inegociável</h2>
                <p>Nosso compromisso é entregar a máxima eficácia sem nunca comprometer a integridade e saúde da sua pele.</p>
            </header>

            <div class="technology-list">
                <?php $cTechnologyCard([
                    'icon' => 'tungsten',
                    'title' => 'Tecnologia de Diodo de Alta Fluência',
                    'description' => 'Feixes concentrados com comprimento de onda de 808nm que atingem com exatidão o bulbo do pelo, poupando o tecido cutâneo adjacente.',
                ]); ?>
                <?php $cTechnologyCard([
                    'icon' => 'ac_unit',
                    'title' => 'Sistema Cryo-Cooling (-5°C)',
                    'description' => 'Ponteira com safira refrigerada contínua, dissipando o calor da pele no mesmo milissegundo do disparo do feixe luminoso.',
                ]); ?>
                <?php $cTechnologyCard([
                    'icon' => 'sanitizer',
                    'title' => 'Biossegurança e Insumos 100% Descartáveis',
                    'description' => 'Assepsia hospitalar em todas as superfícies, lençóis descartáveis e ponteiras esterilizadas antes de cada paciente.',
                ]); ?>
            </div>
        </div>

        <aside class="safety__panel" aria-labelledby="contraindications-title">
            <h3 id="contraindications-title">
                <span class="material-symbols-outlined" aria-hidden="true">health_and_safety</span>
                Contraindicações Transparentes
            </h3>
            <p>Para garantir total segurança e resultados sem complicações, nós <strong>não realizamos</strong> a aplicação nos seguintes cenários:</p>

            <ul class="contraindications-list">
                <?php $cContraindication([
                    'label' => 'Gestantes e lactantes nos primeiros meses de amamentação exclusiva.',
                ]); ?>
                <?php $cContraindication([
                    'label' => 'Pele recém-bronzeada por sol natural ou câmaras (mínimo de 15 dias de intervalo).',
                ]); ?>
                <?php $cContraindication([
                    'label' => 'Uso contínuo de medicamentos fotossensibilizantes (como isotretinoína/Roacutan).',
                ]); ?>
                <?php $cContraindication([
                    'label' => 'Presença de feridas abertas, dermatites agudas ou infecções ativas na área.',
                ]); ?>
            </ul>

            <div class="safety__contact">
                <span>Tem dúvidas sobre seu caso de saúde?</span>
                <a href="#agendamento">Consultar Biomédica <span aria-hidden="true">→</span></a>
            </div>
        </aside>
    </div>
</section>