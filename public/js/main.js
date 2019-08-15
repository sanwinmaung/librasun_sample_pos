new Vue({
	el: '#app',

	// data: {
	// 	products: []
	// }
	data() {
		return {
			items: []
		}
	},

	method: {
		addToClick() {
			alert('Hello');
		}
	},
	
	mounted() {
		axios.get('/cart-items-ajax').then(response => this.items = response.data);
	},


})