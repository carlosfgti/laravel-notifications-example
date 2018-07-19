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
            return axios.get('/api/notifications')
                            .then(response => context.commit('LOAD_NOTIFICATIONS', response.data.notifications))
        },

        markAsRead (context, params) {
            return axios.put('/api/notification-read', params)
        },

        markAllAsRead (context, params) {
            return axios.put('/api/notification-all-read')
        },
    },

    getters: {

    },
}