<template>
    <div>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Notificações <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" v-for="notification in notifications" :key="notification.id">
                    {{ notification.id }}
                </a>
                <a class="dropdown-item" href="#" v-if="notifications.length == 0">
                    Sem Notificações
                </a>
            </div>
        </li>
    </div>
</template>


<script>
export default {
    computed: {
        notifications () {
            return []
        }
    },
}
</script>

