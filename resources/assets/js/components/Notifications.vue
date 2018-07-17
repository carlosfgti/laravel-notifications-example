<template>
    <div>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Notificações <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" v-for="notification in notifications" :key="notification.id">
                    <span title="Marcar como lida">(Lido)</span>
                    {{ notification.data.comment.user.name }} comentou: {{ notification.data.comment.title }} | No Produto:  {{ notification.data.comment.product.name }}
                </a>

                <a class="dropdown-item text-center" href="#" v-if="notifications">
                    Ver todas
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

    },
}
</script>

