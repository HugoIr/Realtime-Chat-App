require('./bootstrap');

// Import modules...
import { createApp, h } from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

const el = document.getElementById('app');
// Vue.prototype.$userId = document.querySelector("meta[name='user_id']").getAttribute('content');

const app = createApp({
                render: () =>
                    h(InertiaApp, {
                        initialPage: JSON.parse(el.dataset.page),
                        resolveComponent: (name) => require(`./Pages/${name}`).default,
                    }),
            })

const component = app.mixin({ methods: { route } })
                    .use(InertiaPlugin)
                    .mount(el);
// console.log('app.config', app.config)                
app.config.globalProperties.$userId = document.querySelector("meta[name='user_id']").getAttribute('content');
// console.log('app.config', app.config)                
// app.config.globalProperties.$myGlobalVariable = "globalVariable"

InertiaProgress.init({ color: '#4B5563' });

