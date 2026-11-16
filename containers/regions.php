<section class="regions" id="regioes" aria-labelledby="regions-title">
    <div class="regions__container">
        <header class="regions__heading">
            <span class="section-label">Zonas corporais</span>
            <h2 id="regions-title">Regiões Atendidas &amp; Combos Exclusivos</h2>
            <p>Tratamento seguro tanto para mulheres quanto para homens. Escolha a região<br class="regions__break"> ou aproveite nossos combos.</p>
        </header>

        <?php $cComboOffer([
            'label' => 'COMBO CAMPEÃO DE VENDAS • 30% OFF',
            'title' => 'Pacote Liberdade: Axilas + Virilha Completa + Meia Perna',
            'description' => 'O combo mais procurado da clínica com condições facilitadas em até 12x sem juros. Elimine pelos encravados e ganhe uma pele macia e radiante o ano todo.',
            'oldPrice' => 'R$ 189,00',
            'price' => 'R$ 119,90',
            'button' => $cButton,
        ]); ?>

        <div class="regions__grid">
            <?php $cRegionCard([
                'tag' => 'MAIS PROCURADO',
                'duration' => '15 min',
                'title' => 'Axilas',
                'description' => 'Livre de pelos e sem o escurecimento clássico causado pelo atrito de lâminas. Clareamento progressivo da região.',
                'price' => 'R$ 39,90',
                'buttonLabel' => 'Agendar Axilas no WhatsApp',
                'button' => $cButton,
            ]); ?>
            <?php $cRegionCard([
                'tag' => 'ZERO FOLICULITE',
                'tagTheme' => 'green',
                'duration' => '25 min',
                'title' => 'Virilha Completa / Íntima',
                'description' => 'Máximo conforto, discrição e segurança biológica. Elimina bolinhas vermelhas, irritações e pelos encravados.',
                'price' => 'R$ 69,90',
                'buttonLabel' => 'Agendar Virilha no WhatsApp',
                'button' => $cButton,
            ]); ?>
            <?php $cRegionCard([
                'tag' => 'TOQUE DE SEDA',
                'duration' => '35 min',
                'title' => 'Pernas Inteiras',
                'description' => 'Pernas macias e homogêneas sem os incômodos ‘pontinhos pretos’ após depilar. Eficaz desde coxas até tornozelos.',
                'price' => 'R$ 89,90',
                'buttonLabel' => 'Agendar Pernas no WhatsApp',
                'button' => $cButton,
            ]); ?>
            <?php $cRegionCard([
                'tag' => 'DELICADO',
                'duration' => '10 min',
                'title' => 'Buço & Face',
                'description' => 'Aplicação extremamente precisa para penugem facial, queixo e maçãs do rosto com proteção da barreira cutânea.',
                'price' => 'R$ 29,90',
                'buttonLabel' => 'Agendar Facial no WhatsApp',
                'button' => $cButton,
            ]); ?>
            <?php $cRegionCard([
                'tag' => 'MASCULINO',
                'duration' => '20 min',
                'title' => 'Faixa de Barba & Pescoço',
                'description' => 'Elimina a irritação crônica pós-lâmina no colarinho e delineia o contorno da barba com precisão definitiva.',
                'price' => 'R$ 49,90',
                'buttonLabel' => 'Agendar Barba no WhatsApp',
                'button' => $cButton,
            ]); ?>
            <?php $cRegionCard([
                'tag' => 'ALTA DEMANDA',
                'duration' => '30 min',
                'title' => 'Costas ou Tórax',
                'description' => 'Ideal para atletas e praticantes de esportes. Higiene superior, reduz a transpiração acumulada e melhora a definição muscular.',
                'price' => 'R$ 79,90',
                'buttonLabel' => 'Agendar no WhatsApp',
                'button' => $cButton,
            ]); ?>
        </div>
    </div>
</section>