
if (Laravel.user) {

    console.log(`App.User.${Laravel.user}`)

    Echo.private(`App.User.${Laravel.user}`)
        .notification((notification) => {
            console.log(notification);
        });
    Echo.private(`App.User.${Laravel.user}`)
        .listen('PostCommented', (e) => {
            console.log(e);
        });

}

Echo.private(`teste`)
        .notification((notification) => {
            console.log(notification);
        });
