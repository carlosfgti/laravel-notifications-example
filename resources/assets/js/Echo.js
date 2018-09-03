
import store from './vuex/store'

let types = {
    postCommented: 'App\\Notifications\\PostCommented',
}

if (Laravel.user) {

    Echo.private(`App.Models.User.${Laravel.user}`)
        .notification((notification) => {
            if (notification.type == types.postCommented) {
                console.log(`App.Models.User.${Laravel.user}`)
                console.log(notification)
                store.commit('ADD_NEW_NOTIFICATION', notification)
            }
        })

}
