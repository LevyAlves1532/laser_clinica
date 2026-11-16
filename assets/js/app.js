(function () {
	'use strict';

	const header = document.querySelector('[data-header]');
	const menu = document.querySelector('[data-menu]');
	const menuToggle = document.querySelector('[data-menu-toggle]');

	if (!header || !menu || !menuToggle) {
		return;
	}

	const setMenuState = (isOpen) => {
		menu.classList.toggle('is-open', isOpen);
		menuToggle.setAttribute('aria-expanded', String(isOpen));
		menuToggle.querySelector('.sr-only').textContent = isOpen ? 'Fechar menu' : 'Abrir menu';
	};

	menuToggle.addEventListener('click', () => {
		setMenuState(!menu.classList.contains('is-open'));
	});

	menu.querySelectorAll('a').forEach((link) => {
		link.addEventListener('click', () => setMenuState(false));
	});

	document.addEventListener('keydown', (event) => {
		if (event.key === 'Escape') {
			setMenuState(false);
			menuToggle.focus();
		}
	});

	document.addEventListener('click', (event) => {
		if (!header.contains(event.target)) {
			setMenuState(false);
		}
	});

	const updateHeaderState = () => {
		header.classList.toggle('is-scrolled', window.scrollY > 8);
	};

	updateHeaderState();
	window.addEventListener('scroll', updateHeaderState, { passive: true });
})();
