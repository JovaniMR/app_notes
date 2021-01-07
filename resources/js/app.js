
require('./bootstrap');

window.Vue = require('vue');


import VueRouter from 'vue-router';
import Principal from './components/PrincipalComponent.vue';
import Otro from './components/OtroComponent.vue';


require('vue2-animate/dist/vue2-animate.min.css')

Vue.component('notes-component', require('./components/NotesComponent.vue').default);
Vue.component('form-component', require('./components/FormComponent.vue').default);
Vue.component('principal-component', require('./components/PrincipalComponent.vue').default);
Vue.component('app-component', require('./components/AppComponent.vue').default);



Vue.use(VueRouter);

const routes = [
  {path: '/home', component: Principal},
  {path: '/otro',name: 'nombre',component: Otro },

]

const router = new VueRouter({
  routes,
  mode: 'history'
});


const app = new Vue({
    el: '#app',
    router
});
