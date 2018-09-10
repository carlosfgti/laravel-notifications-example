require('./bootstrap');
window.Vue = require('vue');
import Snotify from 'vue-snotify'
import VueSweetAlert from 'vue-sweetalert'

/**
 * Local imports
 */
import store from './vuex/store'


/**
 * Uses
 */
Vue.use(Snotify, {toast: {showProgressBar: false}})
Vue.use(VueSweetAlert)


/**
 * Global Components
 */
Vue.component('notification', require('./components/Notification.vue'));
Vue.component('notifications', require('./components/Notifications.vue'));

const app = new Vue({
    store,
    el: '#app'
});
