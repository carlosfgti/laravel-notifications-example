<template>
    <div>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Notificações <span class="badge badge-primary">{{ notifications.length }}</span> <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" v-for="notification in notifications" :key="notification.id" href="#">
                    <span title="Marcar como lida" @click.prevent="markAsRead(notification.id)">(Lido)</span>
                    <p @click.prevent="redirect(notification)">
                        {{ notification.data.comment.user.name }} comentou: {{ notification.data.comment.title }} | No Produto:  {{ notification.data.comment.product.name }}
                    </p>
                </a>

                <a class="dropdown-item text-center" href="#" v-if="notifications.length">
                    Ver todas | <span @click.prevent="markAllAsRead">Marcar Todas como Lidas</span>
                </a>
                <a class="dropdown-item" href="#" v-else>
                    Sem Notificações
                </a>
            </div>
        </li>
    </div>
</template>


<script>
export default {
    mounted() {
        this.$store.dispatch('getNotifications')
    },

    computed: {
        notifications () {
            return this.$store.state.notifications.items
        }
    },

    methods: {
        markAsRead (notificationId) {
            this.$store.dispatch('markAsRead', {id: notificationId})
        },

        markAllAsRead (notificationId) {
            this.$store.dispatch('markAllAsRead')
        },

        redirect (notification) {
            window.location.href = `/product/${notification.data.comment.product.id}#comment-${notification.data.comment.id}`
        }
    },
}
</script>

