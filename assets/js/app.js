(function () {
	'use strict';

	const header = document.querySelector('[data-header]');
	const menu = document.querySelector('[data-menu]');
	const menuToggle = document.querySelector('[data-menu-toggle]');
	const faqItems = document.querySelectorAll('[data-faq-item]');
	const cookieNotice = document.querySelector('[data-cookie-notice]');
	const cookieClose = document.querySelector('[data-cookie-close]');
	const whatsappMessage = document.querySelector('[data-whatsapp-message]');

	if (cookieNotice && cookieClose) {
		cookieClose.addEventListener('click', () => {
			cookieNotice.classList.add('is-hidden');
			window.localStorage.setItem('laserclinica-cookie-notice', 'closed');
		});

		if (window.localStorage.getItem('laserclinica-cookie-notice') === 'closed') {
			cookieNotice.classList.add('is-hidden');
		}
	}

	if (whatsappMessage) {
		window.setTimeout(() => {
			whatsappMessage.classList.add('is-hidden');
		}, 5000);
	}

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
