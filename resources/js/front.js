window.Vue = require('vue');
window.axios = require('axios');


import App from './views/App';
import Vue from 'vue';

const app = new Vue({
    el: '#root',
    render: h => h(App)
});

