//user card.js

class UserCard extends HTMLElement{
	constructor(){
		super();
		
		this.attachShadow({mode: 'open'});
		this.shadowRoot.appendChild(template.content.cloneNode(true));
		this.shadowRoot.querySelector('h3').innerText = this.getAttribute('name');
	
	}
}

window.customElements.define('user-card', UserCard);