import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

window.onload = function () {
    let slides =
        document.getElementsByClassName('carousel-item');

    function showSlide(slide) {
        slide.classList.remove('hidden');
    }

    function hideSlide(slide) {
        slide.classList.add('hidden');
    }

    if (slides.length > 0) {
        showSlide(slides[0]);
        if (slides.length > 1) {
            setInterval(function () {
                for (let i = 0; i < slides.length; i++) {
                    if (i + 1 === slides.length) {
                        setTimeout(showSlide, 800, slides[0]);
                        setTimeout(hideSlide, 800, slides[i]);
                        break;
                    }
                    if (!slides[i].classList.contains('hidden')) {
                        setTimeout(showSlide, 800, slides[i + 1]);
                        setTimeout(hideSlide, 800, slides[i]);
                        break;
                    }
                }
            }, 1500);
        }
    }

};
