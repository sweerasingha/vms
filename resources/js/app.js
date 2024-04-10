import './bootstrap';
import '../css/app.css';
import '../src/js/plugins/jquery/dist/jquery.min.js';
// import 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js';
import '../src/js/plugins/jquery/dist/jquery.min.js';
import '../src/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js';
import '../src/vendor/js-cookie/js.cookie.js';
import '../src/js/argon.js';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { Ziggy } from './ziggy';
// import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { ZiggyVue } from 'ziggy-js';


import { ValidationMixin } from '@/plugins/mixins';
import LaravelPermissionToVueJS from 'laravel-permission-to-vuejs'
import VueApexCharts from "vue3-apexcharts";
import VueNumberFormat from '@coders-tm/vue-number-format'
/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(LaravelPermissionToVueJS)
            .use(VueApexCharts)
            .use(VueNumberFormat, { precision: 2, decimal: '.' })
            .mixin(ValidationMixin)
            .component('font-awesome-icon', FontAwesomeIcon)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
