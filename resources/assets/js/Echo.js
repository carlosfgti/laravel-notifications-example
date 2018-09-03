
let types = {
    postCommented: 'App\Notifications\PostCommented',
}

if (Laravel.user) {

    console.log(`App.Models.User.${Laravel.user}`)

    window.Echo.private(`App.Models.User.${Laravel.user}`)
        .notification((notification) => {
            if (notification.type == types.postCommented) {
                console.log(notification)
            }
        })

}
