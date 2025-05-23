import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap-icons/font/bootstrap-icons.css';

import NProgress from 'nprogress'
import './Assets/css/style.css'
import './Assets/css/sidebar.css'
import './Assets/css/fontawesome.css'
import './Assets/css/animate.min.css'



createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },

    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)

    },


})

router.on('start', () => {
    NProgress.start()
}
)
router.on('finish', () => {
    NProgress.done()
}
)


