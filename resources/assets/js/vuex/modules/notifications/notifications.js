export default {
    state: {
        items: []
    },

    mutations: {
        LOAD_NOTIFICATIONS (state, notifications) {
            state.items = notifications
        },
    },

    actions: {
        getNotifications (context) {
            axios.get('/notifications')
                    .then(response => context('LOAD_NOTIFICATIONS', response.data))
        }
    },

    getters: {

    },
}