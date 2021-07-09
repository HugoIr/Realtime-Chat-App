<template>
    <div>
        <p>{{ message.user.name }}: {{ message.message }} 
            <span class="text-xs" style="padding-left:10px">{{formatDate(message.updated_at)}}</span>
        </p>
        <!-- <p style="float:right" >{{ message.updated_at->diffForHumans() }}</p> -->
    </div>
</template>

<script>
import moment from 'moment';
export default {
    props: ["message"],
    methods: {
        formatDate(value) {
            if (value) {
                return moment(value).fromNow();
            }
        }
    }
};

</script>