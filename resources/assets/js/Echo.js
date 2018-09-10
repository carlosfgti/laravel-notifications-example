import swal from 'sweetalert'

import store from './vuex/store'

let types = {
    postCommented: 'App\\Notifications\\PostCommented',
}

if (Laravel.user) {

    Echo.private(`App.Models.User.${Laravel.user}`)
        .notification((notification) => {
            if (notification.type == types.postCommented) {
                // Notify
                if (Laravel.user == notification.data.comment.product.user.id) {
                    swal(
                        "Novo Comentário",
                        `${notification.data.comment.user.name} comentou ${notification.data.comment.title}, no produto: ${notification.data.comment.product.name}`,
                        "info"
                    )
                }
                
                store.commit('ADD_NEW_NOTIFICATION', notification)
            }
        })

}
