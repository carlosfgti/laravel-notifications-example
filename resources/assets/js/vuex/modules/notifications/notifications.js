export default {
    state: {
        items: []
    },

    mutations: {
        LOAD_NOTIFICATIONS (state, notifications) {
            state.items = notifications
        },

        NOTIFICATION_READ (state, id) {
            let notification = state.items.filter(notification => notification.id == id)
            state.items.splice(notification, 1)
        },
    },

    actions: {
        getNotifications (context) {
            return axios.get('/notifications')
                            .then(response => context.commit('LOAD_NOTIFICATIONS', response.data.notifications))
        },

        markAsRead (context, params) {
            return axios.put('/notification-read', params)
                            .then(() => context.commit('NOTIFICATION_READ', params.id))
        },

        markAllAsRead (context, params) {
            return axios.put('/notification-all-read')
        },
    },

    getters: {

    },
}