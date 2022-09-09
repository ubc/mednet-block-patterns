//  Javascript to be executed on the front end. Impacts visitor experience.
function closeAlert() {
	jQuery('.alert-banner').fadeOut();
}
/**
 * 
 *  Accordions
 * 
 *  Set listeners after window load.
 *  Get the accordions related to click event.
 *  Set visibile parameters before animating.
 *  Use jQuery slideUp/Down to animate the accordions.
 *  
 **/
function expandAll(e) {
	const accordionGroup = e.target.closest('.accordions-pattern');
	const accordionItems = accordionGroup.querySelectorAll('.c-accordion__item');
	for (let i = 0; i < accordionItems.length; i++) {
		openItem(jQuery(accordionItems[i]))
		
	}
}
function openItem(item) {
	let content = item.children('.c-accordion__content');
	item.addClass('is-open is-read');
	item.attr('aria-expanded', true);
	content.prop('hidden', false);
	content.slideDown();
}
function collapseAll(e) {
	const accordionGroup = e.target.closest('.accordions-pattern');
	const accordionItems = accordionGroup.querySelectorAll('.c-accordion__item');
	for (let i = 0; i < accordionItems.length; i++) {
		closeItem(jQuery(accordionItems[i]))
		
	}
}

function closeItem(item) {
	let content = item.children('.c-accordion__content');
	item.removeClass('is-open is-read');
	item.attr('aria-expanded', false);
	content.prop('hidden', true);
	content.slideUp();
}
function initAccordions() {
	const accordionsControls = document.querySelectorAll('.accordion-controls');
	accordionsControls.forEach(controls => {
		const expandBtn = controls.querySelector('.expand-accordions');
		const collapseBtn = controls.querySelector('.collapse-accordions');
		collapseBtn.addEventListener('click', collapseAll)
		expandBtn.addEventListener('click', expandAll)
	});
}

window.addEventListener(
	'load',
	function () {
		initAccordions();
	},
	false
);