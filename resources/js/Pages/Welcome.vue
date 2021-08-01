<template>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 items-center sm:pt-0">
        <div v-if="canLogin" class="fixed top-0 right-0 sm:block">

                <div class="w-screen" v-if="$page.props.user">
                    <header class="bg-gray-800 py-2 ">
                        <div class="container mx-auto justify-between font-header">
                            <nav class="navbar navbar-expand-lg navbar-dark space-x-4 text-gray-300 text-sm sm:text-base">
                                <a href="/" class="navbar-brand text-lg font-medium text-gray-100 no-underline">
                                    <div class="flex items-center">
                                        <div ><img class="h-7 pr-1" src="https://www.linkpicture.com/q/logo-ngobrolinaja-chat-bubble.png" alt=""></div>
                                        <h4>NgobrolinAja</h4>
                                    </div>
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>                                
                                
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav ml-auto">
                                        <inertia-link href="/chat" class="nav-item nav-link no-underline text-light hover:text-white">
                                            Chat
                                        </inertia-link>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </header>
                </div>

            <template v-else>
                <div class="w-screen">
                    <header class="bg-gray-800 py-2 ">
                        <div class="container mx-auto justify-between font-header">
                            <nav class="navbar navbar-expand-lg navbar-dark space-x-4 text-gray-300 text-sm sm:text-base">
                                <a href="/" class="navbar-brand text-lg font-medium text-gray-100 no-underline">
                                    <div class="flex items-center">
                                        <div ><img class="h-7 pr-1" src="https://www.linkpicture.com/q/logo-ngobrolinaja-chat-bubble.png" alt=""></div>
                                        <h4>NgobrolinAja</h4>
                                    </div>
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>                                
                                
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav ml-auto">
                                        <inertia-link class="nav-item nav-link no-underline text-light hover:text-white" :href="route('login')">
                                            Log in
                                        </inertia-link>
                                        <inertia-link class="nav-item nav-link no-underline text-light hover:text-white" style="--tw-text-opacity: 1;color: rgba(229, 231, 235,, var(--tw-text-opacity));"  v-if="canRegister" :href="route('register')">
                                            Register
                                        </inertia-link>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </header>
                </div>
            </template>
        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <img src="https://www.linkpicture.com/q/logo-ngobrolinaja_1.png" type="image" width="400">
            </div>

            <div class="flex justify-center pt-2">
                <a :href="route('login')" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-10 rounded-full text-xl tracking-wide focus:outline-none hover:no-underline">
                    Mulai
                </a>
            </div>

        </div>
    </div>
</template>

<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>

<script>
import Button from '../Jetstream/Button.vue'
    export default {
  components: { Button },
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    }
</script>
