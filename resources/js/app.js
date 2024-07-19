import {createApp, h} from 'vue'
import {createInertiaApp} from '@inertiajs/vue3'
import ElementPlus from 'element-plus';
import 'element-plus/dist/index.css';
import Layout from './Pages/Layout/index.vue'

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', {eager: true})
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout || Layout
        return page
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .use(ElementPlus)
            .mount(el)
    },
})
