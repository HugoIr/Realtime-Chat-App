<template>
    <div>
        <div class="h-96 w-full">
            <div class="h-full p-2 flex flex-col-reverse overflow-scroll">
                <div v-for="(message, index) in messages" :key="index">
                    <message-item :message="message" />
                </div>
            </div>
        </div>

        <!-- <ul>
            <li v-for="message in messages.slice().reverse()" :key="message.id">
                {{ message.user.name }}
                {{ message.message }}
            </li>
        </ul> -->
        <!-- {{ messages }} -->
    </div>
</template>

<script>
import MessageItem from './messageItem.vue'
export default {
    props:['messages'],
    components: {
        MessageItem,
    }
}
</script>