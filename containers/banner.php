<main class="hero" aria-labelledby="hero-title">
	<div class="hero__container">
		<div class="hero__content">
			<p class="hero__eyebrow">
				<span aria-hidden="true">✥</span>
				Tecnologia laser diodo &amp; triplo pulso • Anvisa nº 801234567
			</p>

			<h1 class="hero__title" id="hero-title">
				Depilação a laser com
				<span>resultado de verdade</span> — e sem dor.
			</h1>

			<p class="hero__description">
				Tecnologia médica de resfriamento subzero avançada (-5°C). Tenha a pele lisa,
				aveludada e livre de foliculite desde a primeira sessão, com protocolos
				rigorosamente personalizados por biomédicas.
			</p>

			<ul class="hero__benefits" aria-label="Benefícios">
                <?php $cCardBanner(['label' => 'Até 90% de redução definitiva']); ?>
                <?php $cCardBanner(['label' => 'Sessões rápidas: 15 a 30 min']); ?>
                <?php $cCardBanner(['label' => 'Unissex para todos os fototipos']); ?>
			</ul>

			<div class="hero__actions">
				<?php $cButton([
                    'preffixIcon' => '<span class="material-symbols-outlined hero__cta-icon">chat</span>',
                    'label' => 'Quero agendar minha avaliação gratuita',
                ]); ?>
				<p class="hero__availability">
                    <span class="material-symbols-outlined">electric_bolt</span> 
                    Poucos horários disponíveis esta semana
                </p>
			</div>

			<div class="hero__proof" aria-label="Resultados e certificações">
				<div class="hero__proof-item hero__proof-item--number">
					<strong>+8.500</strong>
					<span>Sessões realizadas</span>
				</div>
				<div class="hero__proof-item hero__proof-item--rating">
					<strong><b>★</b> 4.9</strong>
					<span>Avaliação Google Maps</span>
				</div>
				<div class="hero__proof-item">
					<strong>♧ 100%</strong>
					<span>Biomédicas Habilitadas</span>
				</div>
				<div class="hero__proof-item">
					<strong>♙ Registro</strong>
					<span>ANVISA Certificado</span>
				</div>
			</div>
		</div>

		<div class="hero__visual">
			<div class="hero__image-wrapper">
				<img
					class="hero__image"
					src="https://images.unsplash.com/photo-1550831107-1553da8c8464?auto=format&amp;fit=crop&amp;w=900&amp;q=85"
					alt="Mulher sorrindo após tratamento estético"
				>
				<div class="hero__badge hero__badge--top">
                    <span class="material-symbols-outlined hero__badge-icon hero__badge-icon--blue">
                        ac_unit
                    </span>
					<span><strong>Ponteira Subzero a -5°C</strong><small>Proteção epidérmica térmica indolor</small></span>
				</div>
				<div class="hero__badge hero__badge--bottom">
                    <span class="material-symbols-outlined hero__badge-icon hero__badge-icon--green">
                        spa
                    </span>
					<span><strong>Pele Lisa &amp; Clareada</strong><small>Sem pelos encravados</small></span>
					<b class="hero__verified" aria-label="Verificado">✓</b>
				</div>
			</div>
		</div>
	</div>
</main>
