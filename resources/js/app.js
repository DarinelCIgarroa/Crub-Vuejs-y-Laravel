
require('./bootstrap');

window.Vue = require('vue');

Vue.component('mispensamientos-component', require('./components/MisPensamientosComponent.vue').default);
Vue.component('formulario-component', require('./components/FormularioComponent.vue').default);
Vue.component('pensamiento-component', require('./components/PensamientoComponent.vue').default);

const app = new Vue({
    el: '#app',
});
