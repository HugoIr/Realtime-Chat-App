<template>
    <div class="grid grid-cols-3">
        <p :class="[ currentUserId == message.user.id ? 'current-user' : 'other-users',
                    currentUserId == message.user.id ? 'col-end-4' : '' ]" >
            <span v-if="currentUserId != message.user.id">{{ message.user.name }}:</span> 
            {{ message.message }} 
            <span  class="text-xs" style="padding-left:10px">{{formatDate(message.updated_at)}}</span>
        </p>
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
    }
    .current-user {
        float: right;
        background-color: bisque;
        margin-bottom: 20px;
    }

    .other-users {
        background-color:#b6f76f;
        margin-bottom: 20px;
    }
</style>