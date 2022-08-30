require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue';
import VueRadioToggleButtons from 'vue-radio-toggle-buttons';
import 'vue-radio-toggle-buttons/dist/vue-radio-toggle-buttons.css';

import Maska from 'maska'

Vue.use(VueRadioToggleButtons);
Vue.use(Maska)

Vue.component('search-more', require('./components/inputs/SearchMore.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});
