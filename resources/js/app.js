import { createApp, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/vue3'  // Importação correta do Link
import 'flowbite';


createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    // Criar a instância do Vue 3
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('Link', Link) // Registra o Link globalmente
      .mount(el)  // Monta o aplicativo no elemento do DOM
  },
})
