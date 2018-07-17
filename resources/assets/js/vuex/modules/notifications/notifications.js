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
            return axios.get('/notifications')
                            .then(response => context.commit('LOAD_NOTIFICATIONS', response.data.notifications))
        },

        markAsRead (context, params) {
            return axios.put('/notification-read', params)
        }
    },

    getters: {

    },
}