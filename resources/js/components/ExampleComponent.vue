<template>
    <div>
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-danger navbar-badge">{{ notifications.length }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
            <span class="dropdown-item dropdown-header">{{ notifications.length }} Notifications</span>
            <div class="dropdown-divider"></div>

            <div v-for="notif in notifications" :key="notif.id">
                <div v-if="notif.type === 'App\\Notifications\\NewUserRegister' ">
                    <a href="" class="dropdown-item">
                        <i class="fas fa-user-plus mr-2"></i> {{notif.data.registeredUser.name}}
                        <span
                            class="float-right text-muted text-sm">{{notif.created_at.substring(0, 10)+" "+notif.created_at.substring(11, 16)}}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                </div>
            </div>
            <a href="#" @click="markAllAsRead" class="dropdown-item dropdown-footer">Marquer tout comme lu</a>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => ({
            notifications: [],
        }),
        props: ['user', 'unreadnotifications'],
        methods: {
            markAllAsRead() {
                axios.get('/mark-all-as-read/' + this.user.id).then(response => {
                    this.notifications = [];
                });
            },
        },
        mounted() {
            console.log(this.unreadnotifications)
        },
        created() {
            this.notifications = this.unreadnotifications;
            Echo.private('App.Models.User.' + this.user.id).notification((notification) => {
                this.notifications.push(notification.notification);
                document.getElementById('notification_sound').play();
            });
        }
    }

</script>
