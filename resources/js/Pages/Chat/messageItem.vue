<template>
    <div>
        <p :class="[ $userId == message.user.id ? 'current-user' : '' ]" >
            <span v-if="$userId != message.user.id">{{ message.user.name }}:</span> {{ message.message }} 
            <span class="text-xs" style="padding-left:10px">{{formatDate(message.updated_at)}}</span>
        </p>
        <!-- {{ $myGlobe=="a" }} -->
    </div>
</template>

<script>
import moment from 'moment';
export default {
    props: ["message"],
    methods: {
        formatDate(value) {
            if (value) {
                // console.log(this)
                return moment(value).fromNow();
            }
        },

    }
};

</script>

<style scoped>
    .current-user {
        float: right;
        background-color: bisque;
    }
</style>