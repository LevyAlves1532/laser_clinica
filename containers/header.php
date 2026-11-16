<header class="site-header" data-header>
	<div class="site-header__container">
		<a class="brand" href="./" aria-label="LaserClínica - início">
			<span class="brand__mark" aria-hidden="true">✦</span>
			<span class="brand__text">
				<strong>LaserClínica</strong>
				<small>DEPILAÇÃO A LASER &amp; PELE</small>
			</span>
		</a>

		<button class="site-header__toggle" type="button" aria-expanded="false" aria-controls="main-navigation" data-menu-toggle>
			<span class="material-symbols-outlined" aria-hidden="true">menu</span>
			<span class="sr-only">Abrir menu</span>
		</button>

		<nav class="site-header__nav" id="main-navigation" aria-label="Navegação principal" data-menu>
			<a href="#beneficios">Benefícios</a>
			<a href="#como-funciona">Como Funciona</a>
			<a href="#regioes">Regiões</a>
			<a href="#resultados">Resultados</a>
			<a href="#duvidas">Dúvidas</a>
		</nav>

		<div class="site-header__actions">
			<?php $cButton([
				'class' => 'header__cta',
				'href' => '#agendamento',
				'preffixIcon' => '<span class="material-symbols-outlined" aria-hidden="true">chat</span>',
				'label' => 'Agendar pelo WhatsApp',
				'attributes' => 'data-whatsapp-cta',
			]); ?>
			<button class="site-header__profile" type="button" aria-label="Abrir perfil" data-profile-button>
				<span aria-hidden="true">LC</span>
			</button>
		</div>
	</div>
</header>