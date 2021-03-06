<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <chat-room-selection 
                    v-if="currentRoom.id"
                    :rooms="chatRooms"
                    :currentRoom="currentRoom"
                    :usersOnline="isUserOnline"
                    v-on:roomchanged="setRoom( $event )"
                />
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <message-container 
                        :messages="messages"
                        :currentUserId="userId" 
                    />
                    <input-message 
                        :room="currentRoom" 
                        v-on:messagesent="getMessages()" 
                    />

                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import MessageContainer from './messageContainer.vue'
    import InputMessage from './inputMessage.vue'
    import ChatRoomSelection from './chatRoomSelection.vue'

    export default {
        components: {
            AppLayout,
            MessageContainer,
            InputMessage,
            ChatRoomSelection,
        },
        data: function() {
            return {
                chatRooms: [],
                currentRoom: [],
                messages: [],
                userId: Number,
                isUserOnline: [],
            }
        },
        watch: {
            currentRoom( val, oldVal ) {
                if ( oldVal.id ) {
                    this.disconnect( oldVal );
                }
                this.connect();
            }
        },
        methods: {
            connect() {
                if( this.currentRoom.id ) {
                    let vm = this;
                    this.getMessages(); 
                    this.getIsUserOnline()
                    window.Echo.private("chat." + this.currentRoom.id )
                    .listen('NewChatMessage', e => {
                        vm.getMessages();
                    });
                }
            },
            disconnect( room ) {
                window.Echo.leave("chat." + room.id);
            },
            getRooms() {
                axios.get('/chat/rooms')
                .then( response => {
                    this.getCurrentUserId();
                    this.chatRooms = response.data;
                    this.setRoom( response.data[0] );
                })
                .catch( error => {
                    console.log( error );
                })
            },
            setRoom ( room ) {
                this.currentRoom = room;
            },
            setCurrentUserId ( id ) {
                this.userId = id;
            },
            getCurrentUserId() {
                axios.get('/user-id')
                .then( response => {
                    this.setCurrentUserId(response.data);
                } )
            },
            setIsUserOnline (isOnline) {
                this.isUserOnline = isOnline;
            },
            getIsUserOnline () {
                axios.get('/is-user-online')
                .then( response => {
                    this.setIsUserOnline( response.data );
                } )
                .catch (error => {
                    console.log('res error', error);
                })
            },
            getMessages() {
                axios.get('/chat/room/' + this.currentRoom.id + '/messages')
                .then( response => {
                    this.messages = response.data;
                })
                .catch ( error => {
                    console.log( error );
                } )
            }
        },
        created() {
            this.getRooms();
        }
    }
</script>
