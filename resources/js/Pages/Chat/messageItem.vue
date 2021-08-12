<template>
    <div class="">
        <div :class= "currentUserId == message.user.id ? 'gridEnd' : 'gridStart' " >

            <p :class= "currentUserId == message.user.id ? 'p-current-user' : 'p-other-user' " >
                <span class="display-name block" v-if="currentUserId != message.user.id">{{ message.user.name }}</span> 
                {{ message.message }}     
                
            </p>
            <span class="message-date text-xs">{{formatDate(message.updated_at)}}</span>
        </div>

    </div>
</template>

<script>
import moment from 'moment';
export default {
    props: {
        message: Object,
        currentUserId: Number,
    },
    methods: {
        formatDate(value) {
            if (value) {
                return moment(value).fromNow();
            }
        },

    }
};

</script>

<style scoped>
    p {
        padding: 10px 20px;
        border-radius: 7px;
        word-break: break-all;
    }

    .p-current-user {
        background-color: bisque;
    }

    .p-other-user {
        background-color:#c0ff7d;
    }

    .display-name {
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        letter-spacing: 0.08rem;
    }

    .message-date {
        padding: 5px 20px;
    }

    .gridStart {
        display: block;
        margin-left: 15px;
        margin-bottom: 20px;
        max-width: 85%;
        float: left;
    }

    .gridEnd {
        display: block;
        margin-right: 15px;
        margin-bottom: 20px;
        max-width: 85%;
        float: right;
    }
</style>