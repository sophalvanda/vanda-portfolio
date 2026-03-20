import { createApp } from 'vue'
import App from './App.vue'
import router from '../src/router' // Import the router
import vuetify from './plugins/vuetify' // Import vuetify
import './style.css' // Import Tailwind or custom CSS

const app = createApp(App)

app.use(router) // Registers the router plugin
app.use(vuetify) // Registers the vuetify plugin

app.mount('#app')