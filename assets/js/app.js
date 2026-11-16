(function () {
	'use strict';

	const header = document.querySelector('[data-header]');
	const menu = document.querySelector('[data-menu]');
	const menuToggle = document.querySelector('[data-menu-toggle]');
	const faqItems = document.querySelectorAll('[data-faq-item]');

	if (!header || !menu || !menuToggle) {
		return;
	}

	const setFaqState = (item, isOpen) => {
		const trigger = item.querySelector('[data-faq-trigger]');
		const answer = item.querySelector('[data-faq-answer]');

		item.classList.toggle('is-open', isOpen);
		trigger.setAttribute('aria-expanded', String(isOpen));
		answer.hidden = !isOpen;
	};

	faqItems.forEach((item) => {
		const trigger = item.querySelector('[data-faq-trigger]');

		trigger.addEventListener('click', () => {
			const isOpen = item.classList.contains('is-open');

			faqItems.forEach((otherItem) => {
				if (otherItem !== item) {
					setFaqState(otherItem, false);
				}
			});

			setFaqState(item, !isOpen);
		});
	});

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
