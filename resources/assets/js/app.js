import Snotify from 'vue-snotify'

require('./bootstrap');

window.Vue = require('vue');

/**
 * Local imports
 */
import store from './vuex/store'


/**
 * Uses
 */
Vue.use(Snotify)


/**
 * Global Components
 */
Vue.component('notification', require('./components/Notification.vue'));
Vue.component('notifications', require('./components/Notifications.vue'));

const app = new Vue({
    store,
    el: '#app'
});
