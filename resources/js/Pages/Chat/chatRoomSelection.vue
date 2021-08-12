<template>
    <div class="grid grid-cols-2">
        <div class="font-bold text-xl">
            {{ selected.name }} Chat
        </div>
        <div>
            <select 
                v-model="selected"
                @change="$emit('roomchanged', selected)"
                class="float-right"
                >
                <option
                    v-for="(room, index) in rooms"
                    :key="index"
                    :value="room"
                    >
                    {{ room.name }}
                </option>
            </select>
        </div>

    </div>

        <user-status
            :usersOnline="usersOnline"
        />
</template>

<script>
import UserStatus from './userStatus.vue';

export default {
    props: ['rooms', 'currentRoom', 'usersOnline'],
    data: function() {
        return {
            selected: ''
        }
    },
    created() {
        this.selected = this.currentRoom;
    },
    components: {
        UserStatus,
    }
    
}
</script>