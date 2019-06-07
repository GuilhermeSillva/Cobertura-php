export class PropertyController {

	constructor() {
    
		this.cardPrice = document.querySelector('.js-card');
		this.btnFooter = document.querySelector('.js-btn-footer');
		this.status = false;

		this.btnFooter.addEventListener('click', () => {
			this.status = !this.status;

			this.toggleClass();
		});
	}
	
	toggleClass() {

		if (this.status) {
			this.cardPrice.classList.add('active');
			this.btnFooter.textContent = 'Esconder valores';
		} else {
			this.cardPrice.classList.remove('active');
			this.btnFooter.textContent = 'Ver valores';
		}
	}
}