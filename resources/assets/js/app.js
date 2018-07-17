require('./bootstrap');

window.Vue = require('vue');

import store from './vuex/store'


/**
 * Global Components
 */

Vue.component('notifications', require('./components/Notifications.vue'));

const app = new Vue({
    store,
    el: '#app'
});
