export default {
    state: {
        items: []
    },

    mutations: {
        LOAD_NOTIFICATIONS (state, notifications) {
            state.items = notifications
        },

        NOTIFICATION_MARK_AS_READ (state, id) {
            let notification = state.items.filter(notification => notification.id == id)
            state.items.splice(notification, 1)
        },

        NOTIFICATION_MARK_ALL_AS_READ (state, id) {
            state.items = []
        },

        ADD_NEW_NOTIFICATION (state, notification) {
            state.items.unshift(notification);
        },
    },

    actions: {
        getNotifications (context) {
            return axios.get('/notifications')
                            .then(response => context.commit('LOAD_NOTIFICATIONS', response.data.notifications))
        },

        markAsRead (context, params) {
            return axios.put('/notification-read', params)
                            .then(() => context.commit('NOTIFICATION_MARK_AS_READ', params.id))
        },

        markAllAsRead (context) {
            return axios.put('/notification-all-read')
                            .then(() => context.commit('NOTIFICATION_MARK_ALL_AS_READ'))
        },
    },

    getters: {

    },
}